@extends('layouts.admin')
@section('content')
    <div class="excel-online">
        <div class="main-content">
            <div class="d-flex justify-content-between">
                <h4 class="title-header font-weight-bold">Cấu hình tài khoản</h4>
            </div>
            <div class="main-excel h-100">
                <div class="card border-none bg-none mx-3">
                    <div class="card-body pt-3">
                        <form action="">
                            <div class="row">
                                <div class="col-2">
                                    @include('layouts.sidebar_user')
                                </div>
                                <div class="col-10">
                                    <div class="row bg-white">
                                        <div class="col-12 h1-sender">
                                            <div class="font-weight-bold mt-3">THAY ĐỔI MẬT KHẨU</div>
                                        </div>
                                        <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
                                            crossorigin="anonymous"></script>
                                        <script></script>

                                        <script>
                                            $(document).ready(function() {
                                                $('#eye').click(function() {
                                                    // alert("ok");
                                                    $(this).toggleClass('open');
                                                    $(this).children('i').toggleClass('fas fa-eye-slash  fa-eye');
                                                    if ($(this).hasClass('open')) {
                                                        $(this).prev().attr('type', 'text');
                                                    } else {
                                                        $(this).prev().attr('type', 'password');
                                                    }
                                                });
                                            });
                                        </script>
                                        <div class="form-group col-12">
                                            <label class="my-2" for="">Mật khẩu</label>
                                            <div class="input-group pr-0 d-flex" style="position: relative">
                                                <input type="password" class="form-reci form-control w-100" id="phone"
                                                    placeholder="" />
                                                <div id="eye"
                                                    style="position: absolute;
                                                             left: 97%;
                                                                top: 23%;
                                                                z-index: 999;
                                                            }">
                                                    <i class="far fa-eye cursor-pointer"></i>
                                                </div>
                                            </div>

                                            <small class="text-muted">Mật khẩu có độ dài từ 6-20 ký tự bao gồm chữ cái và
                                                số</small>

                                        </div>
                                        <div class="form-group col-12">
                                            <label class="my-2" for="">Mật khẩu mới</label>
                                            <div class="input-group pr-0 d-flex">
                                                <input type="password" class="form-reci form-control w-100" id="phone"
                                                    placeholder="" />
                                                <div id="eye"
                                                    style="position: absolute;
                                                             left: 97%;
                                                                top: 23%;
                                                                z-index: 999;
                                                            }">
                                                    <i class="far fa-eye cursor-pointer"></i>
                                                </div>
                                            </div>
                                            <small class="text-muted">Mật khẩu có độ dài từ 6-20 ký tự bao gồm chữ cái và
                                                số</small>
                                        </div>
                                        <div class="form-group col-12">
                                            <label class="my-2" for="">Nhập lại mật khẩu </label>
                                            <div class="input-group pr-0 d-flex">
                                                <input type="password" class="form-reci form-control w-100" id="phone"
                                                    placeholder="" />
                                                <div id="eye"
                                                    style="position: absolute;
                                                             left: 97%;
                                                                top: 23%;
                                                                z-index: 999;
                                                            }">
                                                    <i class="far fa-eye cursor-pointer"></i>
                                                </div>
                                            </div>
                                            <small class="text-muted">Mật khẩu có độ dài từ 6-20 ký tự bao gồm chữ cái và
                                                số</small>
                                        </div>

                                        <div class="form-group col-12">
                                            <button class="btn btn-add mb-4">Lưu</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
