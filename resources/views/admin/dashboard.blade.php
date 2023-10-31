@extends('layouts.admin')
@section('content')
    <div class="content bg-lightt w-100 h-100">
        <!-- <h1>content</h1> -->
        <style>
            .input-group-text {
                background-color: #fff;
                /* Màu nền */
                border: 1px solid #ccc;
                /* Viền */
                padding: 5px;
                /* Khoảng cách từ biểu tượng đến viền */
            }

            /* Định dạng icon khi hover */
            .input-group-text:hover {
                background-color: #f0f0f0;
                /* Màu nền khi hover */
                cursor: pointer;
                /* Biểu tượng con trỏ khi hover */
            }
        </style>
        <div class="welcome-user d-flex align-items-center">
            <div class="h4-welcome-phone my-3 mr-5">
                <h4>Xin chào<span class="font-weight-bold">
                        {{ Auth::user()->name }}
                    </span></h4>
            </div>


            <div class="flatpickr" style="width: 18%; position: relative;">
                <input class="w-100 form-control bg-white " type="text" style="padding: 7px 0px 7px 12%;" id="datePicker"
                    data-input>
                <i style="position: absolute; top: 50%; left: 11%; transform: translate(-100%, -50%);"
                    class="fa-solid fa-calendar-days"></i>
            </div>

        </div>
        <style></style>
        <div class="main-content" style="margin:17px">
            <div class="row ">
                <div class="header-main-content col-12 d-flex align-items-center pb-3">
                    <div class="logo-tienhang">
                        <img src="public/img/tienhang.svg" alt />
                    </div>
                    <span class="font-weight-bold fs-33 pr-5">TIỀN HÀNG</span>
                    <a class="fs-3" href>Xem chi tiết</a>
                </div>
                <div class="col-md-4 form-group">
                    <div class="card">
                        <div class="card-body d-flex align-items-center justify-content-between">
                            <img src="public/img/business-and-finance.svg" width="50px" height="50px" class
                                alt="Ảnh" />
                            <div class="paid">
                                <div class="card-text pl-1">Đã trả tiền</div>
                                <h4 class="font-weight-bold pl-5">0 ₫</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 form-group">
                    <div class="card">
                        <div class="card-body d-flex align-items-center justify-content-between">
                            <img src="public/img/business-and-finance.svg" width="50px" height="50px" class
                                alt="Ảnh" />
                            <div class="paid">
                                <div class="card-text pl-1">Đã trả tiền</div>
                                <h4 class="font-weight-bold pl-5">0 ₫</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 form-group ">
                    <div class="card">
                        <div class="card-body d-flex align-items-center justify-content-between">
                            <img src="public/img/business-and-finance.svg" width="50px" height="50px" class
                                alt="Ảnh" />
                            <div class="paid">
                                <div class="card-text pl-1">Đã trả tiền</div>
                                <h4 class="font-weight-bold pl-5">0 ₫</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="order_statistics col-md-8">
                    <div class="header-main-content header-sender card-header col-12 d-flex align-items-center pb-3">
                        <div class="logo-tienhang">
                            <img src="public/img/thongkedonhang.svg" alt />
                        </div>
                        <span class="font-weight-bold fs-33 pr-5">THỐNG KÊ ĐƠN HÀNG</span>
                    </div>
                    <canvas style="background-color: #fff" id="myChart"></canvas>
                    <script src="{{ asset('public/js/chart.js') }}"></script>
                </div>
                <div class="top_10 col-md-4">
                    <div class="header-main-content header-sender card-header col-12 d-flex align-items-center pb-3">
                        <div class="logo-tienhang">
                            <img src="public/img/top10.svg" alt />
                        </div>
                        <span class="font-weight-bold fs-33 pr-5">TOP 10 SẢN LƯỢNG</span>
                    </div>
                    <style>
                        #myPieChart {
                            width: 210px !important;
                            height: 210px !important;
                            background-color: #fff;
                            margin-left: 27%;
                            /* padding-bottom: 30px; */
                        }
                    </style>
                    <div id="asccsa" style="background-color: #fff;height:260px" class="w-100">
                        <canvas id="myPieChart" style="display: block" class="w-100"></canvas>
                        <div class="row mt-3">
                            <div class="col-5">
                                <div class="d-flex justify-content-between">
                                    <div class=" ml-4 mr-2">
                                        <i _ngcontent-rla-c12="" class="fa fa-square" style="color: rgb(17, 164, 173);"></i>
                                        Hồ Chí Minh
                                    </div>
                                    <div class="text-right">3</div>
                                </div>
                            </div>
                            <div class="col-5">
                                <div class="d-flex justify-content-between">
                                    <div class="ml-4 ">
                                        <i _ngcontent-rla-c12="" class="fa fa-square" style="color: rgb(139, 204, 82);"></i>
                                        Long An
                                    </div>
                                    <div class="text-right">1</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <script src="{{ asset('public/js/piechart.js') }}"></script>

                </div>
            </div>
        </div>
    </div>
@endsection
