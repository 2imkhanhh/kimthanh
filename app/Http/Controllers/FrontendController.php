<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setting;
use App\Models\Product;
use App\Models\Post;

class FrontendController extends Controller
{
    // Lấy config chung
    private function getSettings()
    {
        return Setting::all()->pluck('value', 'key')->toArray();
    }

    public function index()
    {
        $settings = $this->getSettings();
        $products = Product::with('category')->where('is_active', true)->where('is_featured', true)->latest()->get();
        $posts = Post::where('is_active', true)->where('type', 'tin-tuc')->latest()->take(3)->get();
        return view('pages.index', compact('settings', 'products', 'posts'));
    }

    public function about()
    {
        $settings = $this->getSettings();
        return view('pages.gioi-thieu', compact('settings'));
    }

    public function products(Request $request)
    {
        $settings = $this->getSettings();
        
        $activeCategoryId = $request->query('category');
        
        $categories = \App\Models\Category::whereHas('products', function($q) {
            $q->where('is_active', true);
        })->get();
        
        $query = Product::where('is_active', true);
        if ($activeCategoryId) {
            $query->where('category_id', $activeCategoryId);
        }
        
        $products = $query->latest()->paginate(12)->withQueryString();
        
        return view('pages.san-pham', compact('settings', 'products', 'categories', 'activeCategoryId'));
    }

    public function productDetail($slug)
    {
        $settings = $this->getSettings();
        $product = Product::where('slug', $slug)->where('is_active', true)->firstOrFail();
        
        $relatedProducts = Product::where('category_id', $product->category_id)
            ->where('id', '!=', $product->id)
            ->where('is_active', true)
            ->get();
            
        return view('pages.chi-tiet-san-pham', compact('settings', 'product', 'relatedProducts'));
    }

    public function blog()
    {
        $settings = $this->getSettings();
        $posts = Post::where('is_active', true)->where('type', 'tin-tuc')->latest()->paginate(8);
        return view('pages.blog', compact('settings', 'posts'));
    }

    public function blogTinTuc()
    {
        return $this->blog();
    }

    public function blogKhac()
    {
        $settings = $this->getSettings();
        $posts = Post::where('is_active', true)->where('type', 'khac')->latest()->paginate(9);
        return view('pages.others-news', compact('settings', 'posts'));
    }

    public function gallery()
    {
        $settings = $this->getSettings();
        $posts = Post::where('is_active', true)->where('type', 'hinh-anh')->latest()->paginate(12);
        return view('pages.gallery', compact('settings', 'posts'));
    }
    
    public function blogDetail($slug)
    {
        $settings = $this->getSettings();
        $post = Post::where('slug', $slug)->where('is_active', true)->firstOrFail();
        
        $relatedPosts = Post::where('type', $post->type)
            ->where('id', '!=', $post->id)
            ->where('is_active', true)
            ->latest()
            ->get();
            
        return view('pages.chi-tiet-bai-viet', compact('settings', 'post', 'relatedPosts'));
    }

    public function contact()
    {
        $settings = $this->getSettings();
        return view('pages.lien-he', compact('settings'));
    }

    public function submitContact(\Illuminate\Http\Request $request)
    {
        $request->validate([
            'fullname' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'content' => 'required|string|max:1000'
        ]);

        $contact = \App\Models\Contact::create([
            'fullname' => $request->fullname,
            'email' => $request->email,
            'phone' => $request->phone,
            'content' => $request->content,
            'status' => 'pending'
        ]);

        try {
            // Email settings are now loaded globally via AppServiceProvider
            $mailReceiveStr = \App\Models\Setting::where('key', 'mail_receive_address')->first()?->value;
            $mailUsername = \App\Models\Setting::where('key', 'mail_username')->first()?->value;

            $adminEmails = [];
            if (!empty($mailReceiveStr)) {
                $adminEmails = array_map('trim', explode(',', $mailReceiveStr));
                $adminEmails = array_filter($adminEmails, function ($email) {
                    return filter_var($email, FILTER_VALIDATE_EMAIL);
                });
            }

            if (empty($adminEmails)) {
                $adminEmails = !empty($mailUsername) ? [$mailUsername] : [config('mail.from.address')];
            }

            if (!empty($adminEmails)) {
                \Illuminate\Support\Facades\Mail::to($adminEmails)->send(new \App\Mail\ContactNotification($contact));
            }
        } catch (\Exception $e) {
            \Illuminate\Support\Facades\Log::error('Gửi email thông báo liên hệ thất bại: ' . $e->getMessage());
        }

        if ($request->ajax()) {
            return response()->json(['type' => 'success', 'message' => 'Cảm ơn bạn đã liên hệ, chúng tôi sẽ phản hồi sớm nhất!']);
        }

        return redirect()->back()->with('success', 'Cảm ơn bạn đã liên hệ, chúng tôi sẽ phản hồi sớm nhất!');
    }
}
