    <!-- CONTACT SECTION -->
    <section id="contact" class="py-5 bg-light">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="card border-0 shadow-lg rounded-4 overflow-hidden">
                        <div class="row g-0">
                            <!-- Contact Info -->
                            <div class="col-md-5 bg-success text-white p-5 d-flex flex-column justify-content-center"
                                data-aos="fade-right">
                                <h3 class="fw-bold mb-4 text-white">{{ app()->getLocale() == 'en' ? 'Contact us' : 'Liên hệ với chúng tôi' }}</h3>
                                <p class="mb-4 opacity-75">{{ app()->getLocale() == 'en' ? 'Please leave your information, we will contact you as soon as possible.' : 'Hãy để lại thông tin, chúng tôi sẽ liên hệ lại với bạn trong thời gian sớm nhất để tư vấn về sản phẩm.' }}</p>

                                <div class="d-flex align-items-center mb-4">
                                    <div class="bg-white bg-opacity-25 rounded-circle me-3 d-flex align-items-center justify-content-center flex-shrink-0"
                                        style="width: 50px; height: 50px;">
                                        <i class="fa-solid fa-location-dot fs-5"></i>
                                    </div>
                                    <div>
                                        <h6 class="mb-1 fw-bold text-white">{{ app()->getLocale() == 'en' ? 'Address' : 'Địa chỉ' }}</h6>
                                        <p class="mb-0 small opacity-75">{{ $settings['contact_address'] ?? '' }}</p>
                                    </div>
                                </div>

                                <div class="d-flex align-items-center mb-4">
                                    <div class="bg-white bg-opacity-25 rounded-circle me-3 d-flex align-items-center justify-content-center flex-shrink-0"
                                        style="width: 50px; height: 50px;">
                                        <i class="fa-solid fa-phone-volume fs-5"></i>
                                    </div>
                                    <div>
                                        <h6 class="mb-1 fw-bold text-white">{{ app()->getLocale() == 'en' ? 'Phone' : 'Điện thoại' }}</h6>
                                        <p class="mb-0 small opacity-75">{{ $settings['contact_phone'] ?? '' }}</p>
                                    </div>
                                </div>

                                <div class="d-flex align-items-center">
                                    <div class="bg-white bg-opacity-25 rounded-circle me-3 d-flex align-items-center justify-content-center flex-shrink-0"
                                        style="width: 50px; height: 50px;">
                                        <i class="fa-solid fa-envelope fs-5"></i>
                                    </div>
                                    <div>
                                        <h6 class="mb-1 fw-bold text-white">Email</h6>
                                        <p class="mb-0 small opacity-75">{{ $settings['contact_email'] ?? '' }}</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Contact Form -->
                            <div class="col-md-7 p-5 bg-white" data-aos="fade-left">
                                <h4 class="fw-bold mb-4 text-dark">{{ app()->getLocale() == 'en' ? 'Send a Message' : 'Gửi Tin Nhắn' }}</h4>
                                @if(session('success'))
                                    <div class="alert alert-success">{{ session('success') }}</div>
                                @endif
                                <form action="{{ route('contact.submit') }}" name="frmContact" id="frmContact"
                                    method="post">
                                    @csrf
                                    <div class="row g-3">
                                        <div class="col-md-6">
                                            <div class="form-floating">
                                                <input type="text" name="fullname"
                                                    class="form-control bg-light border-0" id="nameInput"
                                                    placeholder="{{ app()->getLocale() == 'en' ? 'Full name' : 'Họ tên' }}" required>
                                                <label for="nameInput">{{ app()->getLocale() == 'en' ? 'Full name *' : 'Họ tên *' }}</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-floating">
                                                <input type="text" name="phone"
                                                    class="form-control bg-light border-0" id="phoneInput"
                                                    placeholder="{{ app()->getLocale() == 'en' ? 'Phone number' : 'Số điện thoại' }}" required>
                                                <label for="phoneInput">{{ app()->getLocale() == 'en' ? 'Phone number *' : 'Số điện thoại *' }}</label>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-floating">
                                                <input type="email" name="email"
                                                    class="form-control bg-light border-0" id="emailInput"
                                                    placeholder="Email" required>
                                                <label for="emailInput">Email *</label>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-floating">
                                                <textarea name="content" class="form-control bg-light border-0" id="messageInput" placeholder="{{ app()->getLocale() == 'en' ? 'Message' : 'Lời nhắn' }}"
                                                    style="height: 120px" required></textarea>
                                                <label for="messageInput">{{ app()->getLocale() == 'en' ? 'Message *' : 'Lời nhắn *' }}</label>
                                            </div>
                                        </div>
                                        <div class="col-12 mt-4">
                                            <button type="submit"
                                                class="btn btn-success btn-lg rounded-pill px-5 shadow w-100">{{ app()->getLocale() == 'en' ? 'Send Message' : 'Gửi Liên Hệ' }}</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
