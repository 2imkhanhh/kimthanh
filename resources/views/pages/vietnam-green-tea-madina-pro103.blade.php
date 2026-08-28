@extends('layouts.app')
@section('content')

        
<section id="panel-products-details" class="mt-5">
				<div class="container">
				<div class="row">
					<div class=" col-lg-4 col-sm-12">
							<div class="featured-image"><div class="dtpro_outer">
<div id="dtpro_big" class="owl-carousel owl-theme">
 <div class="item"><img src="upload/product/vietnam-green-tea-madina1745393910.png" alt="Vietnam Green Tea: Madina"> </div>
</div>
<div id="dtpro_thumbs" class="owl-carousel owl-theme">
 <div class="item"><img src="upload/product/vietnam-green-tea-madina1745393910.png" alt="Vietnam Green Tea: Madina"></div>
</div>
</div></div>
					</div>
					<div class="col-lg-5 col-sm-12">
					<form enctype="multipart/form-data" id="add-to-cart-form" action="https://kimthanhintc.com/cart/103.html" method="post" class="form-inline">
					<input id="idpro" type="hidden" value="103">
					<input id="urlpro" type="hidden" value="https://kimthanhintc.com/vietnam-green-tea-madina-pro103.html">
						<div class="products_details_info sidebar_banner">
							<h1 class="tilte_producst" itemprop="name">Vietnam Green Tea: Madina</h1> <div class="description"><p>Chi tiết sản phẩm<br>Loại sản phẩm: Trà xanh<br>Kiểu: Chính thống<br>Độ tuổi: 1 – 2 tuổi<br>phong cách: Đồ uống trà<br>Loại xử lý: Nguyên<br>Bao bì: Túi, Hộp, Số lượng lớn, Đóng gói quà tặng, Gói chân không<br>Đặc sản: Trà sức khỏe, Trà hữu cơ, Trà giảm béo, Trà xanh<br>Lớp: Chất lượng cao<br>Thời hạn sử dụng: 3 năm<br>Trọng lượng (kg): 40<br>Nơi xuất xứ: vùng núi cao Việt Nam<br>Tên thương hiệu: Trà Nam Giang<br>Số mô hình: NGGBPS<br>Điều khoản thanh toán: đặt cọc 30%, số dư so với bản sao tài liệu được quét<br>Lợi thế: Nhà máy<br>Nguồn gốc lá trà: Đồn điền trà hữu cơ Việt Nam<br>Chất liệu: Lá trà xanh tươi</p></div> <div class="price"><a href="lien-he.html">Liên hệ</a></div>  </div></form>
</div>
				</div></div></section><section id="contact"><div id="contact-warp"><h2>Liên hệ</h2>
<div class="row">
	<div class="col-md-6">
<div class="contact-item mb-3 d-flex align-items-center">
	<i class="fa-solid fa-location-dot"></i> Xóm Chanh, Xã Sơn Hùng, Huyện Thanh Sơn, Tỉnh Phú Thọ
</div>
	<div class="contact-item mb-3 d-flex align-items-center">
	    <i class="fa-sharp fa-solid fa-phone-volume"></i> 0986843666
</div>
<div class="contact-item mb-3 d-flex align-items-center">
	<i class="fa-solid fa-envelope"></i> kimthanhinvestmenttradingltd@gmail.com
</div>
</div>
	<div class="col-md-6"><form class="form-horizontal" action="https://kimthanhintc.com/contact.html" name="frmContact" id="frmContact" method="post">
	 <div class="form-group required mt-2">
		  <input type="text" name="fullname" value="" placeholder="Họ tên" class="form-control" maxlength="256">
    </div>
	<div class="form-group required mt-2">
         <input type="text" name="email" value="" placeholder="Email" class="form-control" maxlength="256">
	</div>

	 <div class="form-group required mt-2">
          <input type="text" name="telephone" value="" placeholder="Số điện thoại" class="form-control" maxlength="256">
    </div>
<div class="form-group required mt-2">
	<textarea name="content" placeholder="Lời nhắn." class="form-control" rows="5"></textarea>
</div>
<div class="text-center">
<button type="submit" id="btnContact" name="btnContact" class="btn btn-danger">Liên hệ</button>
</div>
</form></div>
</div></div></section>
    
@endsection
