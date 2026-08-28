<?php
$html_dir = __DIR__ . '/html_template';
$views_dir = __DIR__ . '/resources/views';
$layouts_dir = $views_dir . '/layouts';
$pages_dir = $views_dir . '/pages';

@mkdir($layouts_dir, 0777, true);
@mkdir($pages_dir, 0777, true);

// Get all html files
$files = glob($html_dir . '/*.html');

$is_layout_created = false;

foreach ($files as $file) {
    $content = file_get_contents($file);
    
    // Find <main id="main"> ... </main>
    $start_main = strpos($content, '<main id="main">');
    $end_main = strpos($content, '</main>');
    
    if ($start_main === false || $end_main === false) continue;
    
    $main_content = substr($content, $start_main + 16, $end_main - ($start_main + 16));
    
    $basename = basename($file, '.html');
    
    if (!$is_layout_created) {
        $top = substr($content, 0, $start_main + 16);
        $bottom = substr($content, $end_main);
        
        // replace title, meta with yield
        $top = preg_replace('/<title>(.*?)<\/title>/is', '<title>@yield("title", "$1")</title>', $top);
        $top = preg_replace('/<meta property="og:url" content="(.*?)">/is', '<meta property="og:url" content="@yield("canonical", "$1")">', $top);
        $top = preg_replace('/<link rel="canonical" href="(.*?)">/is', '<link rel="canonical" href="@yield("canonical", "$1")">', $top);
        
        $layout = $top . "\n            @yield('content')\n        " . $bottom;
        file_put_contents($layouts_dir . '/app.blade.php', $layout);
        $is_layout_created = true;
    }
    
    $blade_content = "@extends('layouts.app')\n";
    $blade_content .= "@section('content')\n";
    $blade_content .= $main_content . "\n";
    $blade_content .= "@endsection\n";
    
    file_put_contents($pages_dir . '/' . $basename . '.blade.php', $blade_content);
}

// Generate web.php routes
$routes = "<?php\n\nuse Illuminate\Support\Facades\Route;\n\n";
foreach ($files as $file) {
    $basename = basename($file, '.html');
    $uri = $basename === 'index' ? '/' : '/' . $basename . '.html';
    // For exact match with old urls
    $routes .= "Route::get('$uri', function () {\n    return view('pages.$basename');\n});\n";
}

// keep the breeze routes by appending them (actually breeze routes are in auth.php usually, but let's append to existing web.php)
$existing_routes = file_get_contents(__DIR__ . '/routes/web.php');
// remove the default laravel route
$existing_routes = preg_replace('/Route::get\(\'\/\', function \(\) \{.*?\}\);/s', '', $existing_routes);
file_put_contents(__DIR__ . '/routes/web.php', $routes . "\n" . $existing_routes);

echo "Conversion complete!";
