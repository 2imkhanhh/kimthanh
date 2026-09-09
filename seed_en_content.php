<?php

require __DIR__.'/vendor/autoload.php';
$app = require_once __DIR__.'/bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

use App\Models\Post;
use App\Models\Product;

echo "Seeding English Products...\n";
$products = Product::all();
foreach ($products as $product) {
    $enHtmlFile = base_path('html_template/en/' . $product->slug . '.html');
    if (file_exists($enHtmlFile)) {
        $html = file_get_contents($enHtmlFile);
        
        // Extract title
        if (preg_match('/<h1 class="tilte_producst" itemprop="name">(.*?)<\/h1>/', $html, $matches)) {
            $product->setTranslation('name', 'en', trim($matches[1]));
        }

        // Extract description properties
        if (preg_match('/<div class="description"><p>(.*?)<\/p><\/div>/s', $html, $matches)) {
            $descLines = explode('<br>', trim($matches[1]));
            
            $mapping = [
                'Product Type' => 'type',
                'Type' => 'style',
                'Age' => 'age',
                'Style' => 'drink_style',
                'Processing Type' => 'processing_type',
                'Packaging' => 'packaging',
                'Specialty' => 'specialty',
                'Grade' => 'grade',
                'Shelf Life' => 'shelf_life',
                'Weight (kg)' => 'weight',
                'Place of Origin' => 'origin',
                'Brand Name' => 'brand_name',
                'Model Number' => 'model_number',
                'Payment terms' => 'payment_terms',
                'Advantage' => 'advantage',
                'Origin of Tea Leaf' => 'leaf_origin',
                'Material' => 'material',
            ];

            foreach ($descLines as $line) {
                $parts = explode(':', strip_tags($line), 2);
                if (count($parts) === 2) {
                    $key = trim($parts[0]);
                    $val = trim($parts[1]);
                    
                    if (isset($mapping[$key])) {
                        $attr = $mapping[$key];
                        $product->setTranslation($attr, 'en', $val);
                    }
                }
            }
        }

        $product->save();
        echo "Updated EN for Product: {$product->slug}\n";
    }
}

echo "\nSeeding English Posts...\n";
$enBlogDir = base_path('html_template/en/blog');
$enNewsDir = base_path('html_template/en/others-news');

$postFiles = array_merge(
    glob($enBlogDir . '/*.html') ?: [],
    glob($enNewsDir . '/*.html') ?: []
);

foreach ($postFiles as $file) {
    $filename = basename($file, '.html');
    if (preg_match('/-(\d+)$/', $filename, $matches)) {
        $id = $matches[1];
        $post = Post::where('slug', 'like', '%-' . $id)->first();
        if ($post) {
            $html = file_get_contents($file);
            if (preg_match('/<h2>(.*?)<\/h2>/', $html, $titleMatches)) {
                $post->setTranslation('title', 'en', trim($titleMatches[1]));
                // In DB, content is what we extract. There is no `excerpt` in Post, oh wait, is there? 
                // Let's just set title and content.
            }

            if (preg_match('/<div class="p-3 post-detail">(.*?)<\/div>\s*<div class="mb-5">/s', $html, $contentMatches)) {
                $post->setTranslation('content', 'en', trim($contentMatches[1]));
            }

            $post->save();
            echo "Updated EN for Post: {$post->slug}\n";
        }
    }
}

echo "\nDone!\n";
