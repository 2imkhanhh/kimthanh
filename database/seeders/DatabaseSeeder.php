<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Category;
use App\Models\Post;
use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\File;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // 1. Create Admin User
        User::firstOrCreate(
            ['email' => 'admin@admin.com'],
            [
                'name' => 'Administrator',
                'password' => Hash::make('12345678'),
            ]
        );

        // 2. Create Categories
        $catProduct = Category::firstOrCreate(
            ['slug' => 'san-pham'],
            [
                'name' => ['vi' => 'Sản phẩm', 'en' => 'Products'],
                'type' => 'product'
            ]
        );

        $catBlog = Category::firstOrCreate(
            ['slug' => 'tin-tuc'],
            [
                'name' => ['vi' => 'Tin tức', 'en' => 'News'],
                'type' => 'post'
            ]
        );

        $catOther = Category::firstOrCreate(
            ['slug' => 'tin-khac'],
            [
                'name' => ['vi' => 'Tin khác', 'en' => 'Others News'],
                'type' => 'post'
            ]
        );

        // 3. Import Products
        $productFiles = glob(resource_path('views/pages/san-pham/*.blade.php')) ?: [];
        // Wait, the products in kimthanh are directly in pages currently, like 'tra-xanh-pt11.blade.php'
        $pages = glob(resource_path('views/pages/*.blade.php'));
        foreach ($pages as $page) {
            $filename = basename($page, '.blade.php');
            if (in_array($filename, ['blog', 'gallery', 'gioi-thieu', 'index', 'lien-he', 'others-news', 'san-pham'])) {
                continue;
            }
            
            // It's a product
            $content = file_get_contents($page);
            $title = '';
            if (preg_match('/@section\(\'title\',\s*\'(.*?)\'\)/i', $content, $m)) {
                $title = $m[1];
            } else {
                $title = ucwords(str_replace('-', ' ', $filename));
            }
            
            // Look for image
            $image = null;
            if (preg_match('/<img[^>]+src="\{\{\s*asset\(\'(upload\/product\/[^\']+)\'\)\s*\}\}"[^>]+id="mainImage"/i', $content, $m)) {
                $image = $m[1];
            }
            
            Product::firstOrCreate(
                ['slug' => $filename],
                [
                    'category_id' => $catProduct->id,
                    'name' => ['vi' => $title, 'en' => $title],
                    'is_active' => true,
                ]
            );
        }

        // 4. Import Blog Posts
        $blogFiles = glob(resource_path('views/pages/blog/*.blade.php')) ?: [];
        foreach ($blogFiles as $file) {
            $filename = basename($file, '.blade.php');
            $content = file_get_contents($file);
            $title = '';
            if (preg_match('/@section\(\'title\',\s*\'(.*?)\'\)/i', $content, $m)) {
                $title = $m[1];
            } else {
                $title = ucwords(str_replace('-', ' ', $filename));
            }
            
            Post::firstOrCreate(
                ['slug' => $filename],
                [
                    'category_id' => $catBlog->id,
                    'type' => 'tin-tuc',
                    'title' => ['vi' => $title, 'en' => $title],
                    'excerpt' => ['vi' => 'Tóm tắt bài viết ' . $title, 'en' => 'Excerpt for ' . $title],
                    'content' => ['vi' => 'Nội dung bài viết ' . $title, 'en' => 'Content for ' . $title],
                    'is_active' => true,
                ]
            );
        }

        // 5. Import Other News
        $otherFiles = glob(resource_path('views/pages/others-news/*.blade.php')) ?: [];
        foreach ($otherFiles as $file) {
            $filename = basename($file, '.blade.php');
            $content = file_get_contents($file);
            $title = '';
            if (preg_match('/@section\(\'title\',\s*\'(.*?)\'\)/i', $content, $m)) {
                $title = $m[1];
            } else {
                $title = ucwords(str_replace('-', ' ', $filename));
            }
            
            Post::firstOrCreate(
                ['slug' => $filename],
                [
                    'category_id' => $catOther->id,
                    'type' => 'khac',
                    'title' => ['vi' => $title, 'en' => $title],
                    'excerpt' => ['vi' => 'Tóm tắt bài viết ' . $title, 'en' => 'Excerpt for ' . $title],
                    'content' => ['vi' => 'Nội dung bài viết ' . $title, 'en' => 'Content for ' . $title],
                    'is_active' => true,
                ]
            );
        }
    }
}
