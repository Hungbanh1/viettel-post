{{-- @extends('layouts.app') --}}

@include('layouts.header_login')


<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 bg-white py-2 pl-4">
                <div class="header-login py-1 container">
                    <img src="public/img/logo-01.png" alt="" />
                </div>
            </div>
        </div>
        <style></style>
        <div class="login-form mt-5">
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="form-group text-left py-3 pl-3">
                    <label class="font-weight-bold signup-title" for="">Tạo tài khoản mới</label>
                    <div class="fts-13"><span class="mr-1">Bạn đã có tài khoản?</span><a style="text-decoration: none"
                            class="color-blue" href="{{ route('login') }}">Đăng nhập ngay</a></div>
                </div>
                {{-- //ho va ten  --}}
                <div class="form-group login-input-item mx-3">
                    <label class="mb-0" for="name">Họ và tên</label>
                    <input id="name" type="text"
                        class="form-control text-muted mb-2 @error('name') is-invalid @enderror" name="name"
                        value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Nhập họ và tên">
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                {{-- //email  --}}
                <div class="form-group login-input-item mx-3">
                    <label class="mb-0" for="email">SĐT/Email</label>

                    <input id="email" type="email" class="form-control  mb-2 @error('email') is-invalid @enderror"
                        name="email" value="{{ old('email') }}" required autocomplete="email"
                        placeholder="Nhập số điện thoại hoặc email">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                {{-- //password  --}}
                <div class="form-group login-input-item mx-3">
                    <label class="mb-0" for="password">Mật khẩu</label>
                    <input id="password" type="password"
                        class="form-control mb-2 @error('password') is-invalid @enderror" name="password" required
                        autocomplete="new-password" placeholder="Nhập mật khẩu">
                    <div class="eye-icon">
                        <i class="far fa-eye cursor-pointer"></i>
                    </div>
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                {{-- //confirm-password  --}}
                <div class="form-group login-input-item mx-3">
                    <label class="mb-0" for="password-confirm">Nhập lại mật khẩu</label>
                    <input id="password-confirm" type="password" class="form-control mb-2" name="password_confirmation"
                        required autocomplete="new-password" placeholder="Nhập mật khẩu">
                    <div class="eye-icon">
                        <i class="far fa-eye cursor-pointer"></i>
                    </div>
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="login-btn form-group mx-3">

                    <button type="submit" class="btn w-100">ĐĂNG KÝ NGAY
                    </button>
                </div>
            </form>
            <div class="px-3 color-green">Nếu quý khách không đăng ký được thông tin tài khoản, vui lòng liên hệ Chăm
                sóc khách hàng của ViettelPost (1900 8095) để được hỗ trợ.</div>
            <div class="px-3 fts-12 pb-5">Khi nhấn Đăng ký, bạn đã đồng ý thực hiện mọi giao dịch mua bán theo <a
                    href="" style="text-decoration: none"> Điều kiện sử dụng & chính sách</a> của bưu chính
                Viettel.</div>
        </div>
    </div>

</body>




<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
    crossorigin="anonymous"></script>
<script></script>
