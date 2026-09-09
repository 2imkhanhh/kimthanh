<?php

require __DIR__.'/vendor/autoload.php';
$app = require_once __DIR__.'/bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

use App\Models\Setting;

$settingsData = [
    // --- Header & Footer & Global ---
    'company_name' => [
        'vi' => 'Công ty TNHH Đầu tư Thương mại Kim Thành',
        'en' => 'KIM THANH INVESTMENT AND TRADING COMPANY LIMITED'
    ],
    'company_address' => [
        'vi' => 'Khu Chanh, Xã Sơn Hùng, Huyện Thanh Sơn, Tỉnh Phú Thọ',
        'en' => 'Chanh Hamlet, Son Hung Commune, Thanh Son District, Phu Tho Province'
    ],
    'company_phone' => [
        'vi' => '0986843666',
        'en' => '0986843666'
    ],
    'company_email' => [
        'vi' => 'kimthanhinvestmenttradingltd@gmail.com',
        'en' => 'kimthanhinvestmenttradingltd@gmail.com'
    ],
    'footer_copyright' => [
        'vi' => '© 2023 Kim Thành. Đã đăng ký Bản quyền.',
        'en' => '© 2023 Kim Thanh. All Rights Reserved.'
    ],

    // --- Trang Chủ (Home) ---
    'home_hero_title' => [
        'vi' => 'Tinh Hoa Trà Việt',
        'en' => 'The Essence of Vietnamese Tea'
    ],
    'home_hero_desc' => [
        'vi' => 'Mang hương vị tự nhiên và chất lượng hảo hạng từ những đồi chè xanh mướt đến tay bạn.',
        'en' => 'Bringing natural flavor and premium quality from lush green tea hills to your hands.'
    ],
    'home_about_title' => [
        'vi' => 'Về Kim Thành',
        'en' => 'About Kim Thanh'
    ],
    'home_about_desc' => [
        'vi' => 'Công ty TNHH Đầu tư Thương mại Kim Thành được thành lập vào ngày 03/02/2020, hoạt động chuyên sâu trong lĩnh vực chế biến và sản xuất búp chè tươi xuất khẩu. Với định hướng phát triển bền vững và cam kết mang đến những sản phẩm nông sản chất lượng cao, chúng tôi đã từng bước xây dựng uy tín và mở rộng thị trường sang nhiều quốc gia, bao gồm Trung Quốc, Thái Lan, Pakistan, Afghanistan, Nga và Ấn Độ.',
        'en' => 'Kim Thanh Investment Trading LLC was established on February 3, 2020, specializing in processing and manufacturing fresh tea buds for export. With a sustainable development orientation and a commitment to providing high-quality agricultural products, we have gradually built prestige and expanded our market to many countries, including China, Thailand, Pakistan, Afghanistan, Russia and India.'
    ],
    'home_vision_title' => [
        'vi' => 'Tầm nhìn',
        'en' => 'Vision'
    ],
    'home_vision_desc' => [
        'vi' => 'Kim Thành hướng đến mục tiêu trở thành doanh nghiệp hàng đầu trong lĩnh vực sản xuất và xuất khẩu trà tại Việt Nam. Chúng tôi khát vọng đưa thương hiệu trà Việt vươn tầm thế giới, được công nhận bởi chất lượng vượt trội và giá trị bền vững.',
        'en' => 'Kim Thanh aims to become a leading enterprise in the field of tea production and export in Vietnam. We aspire to bring the Vietnamese tea brand to the world, recognized by outstanding quality and sustainable value.'
    ],
    'home_mission_title' => [
        'vi' => 'Sứ mệnh',
        'en' => 'Mission'
    ],
    'home_mission_desc' => [
        'vi' => 'Cam kết cung cấp những sản phẩm trà xanh chất lượng cao nhất, an toàn cho sức khỏe người tiêu dùng, đồng thời nâng cao giá trị nông sản Việt Nam trên thị trường quốc tế.',
        'en' => 'Committed to providing the highest quality green tea products, safe for consumers\' health, while improving the value of Vietnamese agricultural products in the international market.'
    ],
    'home_core_values_title' => [
        'vi' => 'Giá trị cốt lõi',
        'en' => 'Core values'
    ],
    'home_core_value_1_title' => [
        'vi' => 'Chất Lượng:',
        'en' => 'Quality:'
    ],
    'home_core_value_1_desc' => [
        'vi' => 'Không ngừng cải tiến để mang đến sản phẩm hoàn hảo.',
        'en' => 'Constantly improving to bring perfect products.'
    ],
    'home_core_value_2_title' => [
        'vi' => 'An Toàn:',
        'en' => 'Safety:'
    ],
    'home_core_value_2_desc' => [
        'vi' => 'Tuân thủ nghiêm ngặt các tiêu chuẩn ATTP và ISO 22000:2018.',
        'en' => 'Strictly comply with food safety standards and ISO 22000:2018.'
    ],
    'home_core_value_3_title' => [
        'vi' => 'Trách Nhiệm:',
        'en' => 'Responsibility:'
    ],
    'home_core_value_3_desc' => [
        'vi' => 'Phát triển bền vững, gắn kết lợi ích cộng đồng.',
        'en' => 'Sustainable development, connecting community interests.'
    ],

    // --- Trang Giới thiệu (About Us) ---
    'about_hero_title' => [
        'vi' => 'Giới thiệu Kim Thành',
        'en' => 'About Kim Thanh'
    ],
    'about_hero_desc' => [
        'vi' => 'Chúng tôi luôn đặt chất lượng và an toàn thực phẩm lên hàng đầu trong mọi quy trình sản xuất. Toàn bộ hệ thống nhà xưởng và quy trình chế biến được đảm bảo đạt chuẩn ISO 22000:2018.',
        'en' => 'We always put quality and food safety first in all production processes. The entire factory system and processing process are guaranteed to meet ISO 22000:2018 standards.'
    ],
    'about_content_1' => [
        'vi' => 'Công ty TNHH Đầu tư Thương mại Kim Thành được thành lập vào ngày 03/02/2020, hoạt động chuyên sâu trong lĩnh vực chế biến và sản xuất búp chè tươi xuất khẩu. Với định hướng phát triển bền vững và cam kết mang đến những sản phẩm nông sản chất lượng cao, chúng tôi đã từng bước xây dựng uy tín và mở rộng thị trường sang nhiều quốc gia, bao gồm Trung Quốc, Thái Lan, Pakistan, Afghanistan, Nga và Ấn Độ.',
        'en' => 'Kim Thanh Investment Trading LLC was established on February 3, 2020, specializing in processing and manufacturing fresh tea buds for export. With a sustainable development orientation and a commitment to providing high-quality agricultural products, we have gradually built prestige and expanded our market to many countries, including China, Thailand, Pakistan, Afghanistan, Russia and India.'
    ],
    'about_content_2' => [
        'vi' => 'Chúng tôi luôn đặt chất lượng và an toàn thực phẩm lên hàng đầu trong mọi quy trình sản xuất. Toàn bộ hệ thống nhà xưởng và quy trình chế biến được đảm bảo đạt chuẩn ISO 22000:2018 về hệ thống quản lý an toàn thực phẩm và có đầy đủ Giấy chứng nhận An toàn thực phẩm (ATTP) do cơ quan chức năng cấp phép. Đây chính là nền tảng vững chắc giúp sản phẩm của chúng tôi không chỉ đáp ứng được yêu cầu khắt khe từ các thị trường quốc tế mà còn giữ trọn hương vị tự nhiên, tinh khiết vốn có của vùng nguyên liệu.',
        'en' => 'We always put food quality and safety first in all production processes. The entire factory system and processing process are guaranteed to meet the ISO 22000:2018 standard on food safety management systems and have a full Food Safety Certificate (ATTP) licensed by competent authorities. This is a solid foundation to help our products not only meet strict requirements from international markets but also retain the original natural, pure flavor of the raw material area.'
    ],
    'about_content_3' => [
        'vi' => 'Với đội ngũ nhân sự giàu kinh nghiệm, tinh thần trách nhiệm cao và tâm huyết với nông nghiệp sạch, công ty TNHH Đầu tư Thương mại Kim Thành cam kết tiếp tục mở rộng quy mô, nâng cao chất lượng sản phẩm, góp phần đưa thương hiệu chè Việt vươn xa hơn nữa trên bản đồ nông sản toàn cầu.',
        'en' => 'With an experienced staff, a high sense of responsibility and dedication to clean agriculture, Kim Thanh Investment Trading LLC is committed to continuing to expand its scale, improve product quality, and contribute to bringing the Vietnamese tea brand further on the global agricultural map.'
    ]
];

foreach ($settingsData as $key => $values) {
    $setting = Setting::firstOrCreate(['key' => $key]);
    $setting->type = 'text'; // or textarea based on need
    
    foreach ($values as $locale => $val) {
        $setting->setTranslation('value', $locale, $val);
    }
    
    $setting->save();
    echo "Saved setting: $key\n";
}

echo "\nDone seeding settings!\n";
