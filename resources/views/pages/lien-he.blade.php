@extends('layouts.app')
@section('content')

        <section id="banner" class="banner-contact d-flex align-items-center justify-content-center" style="background-image: url('upload/banner/lien-he1698571547.jpg')">
            <div id="description">
                <h2>Liên hệ</h2>
                <p>Giữ liên hệ với chúng tôi</p>
                <span></span>
            </div>
    </section><section id="panel-contact"><div id="contact-warp" class="mt-5 mb-5">
<div class="row">
	<div class="col-md-6">
	<div class="contact-item mb-3 d-flex align-items-center">
	<h4>CÔNG TY TNHH THƯƠNG MẠI ĐẦU TƯ KIM THÀNH</h4>
</div>
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
</div></div><iframe src="../www.google.com/maps/embed/pb%3D!1m18!1m12!1m3!1d.1!3m3!1m2!1s0x31348641ce3ad91b%253a0x996e9e127a4453f8!2ss%25c6%25a1n%2520h%25c3%25b9ng%252c%2520thanh%2520s%25c6%25a1n%2520district%252c%2520phu%2520tho%2520province%252c" width="100%" height="450" style="border:0; width: 100%;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></section>
    
@endsection
