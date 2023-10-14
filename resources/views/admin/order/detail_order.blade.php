@extends('layouts.admin')
@section('content')
    <div class="excel-online">
        <div class="main-content">
            <div class="d-flex" style="align-items: center; padding-top: 10px; margin-left: 3%">
                <a _ngcontent-waf-c42=""><i _ngcontent-waf-c42="" class="fa fa-arrow-left mr-2" style="color: #ee0033"></i></a>
                <h4 class="font-weight-bold mt-1">Thông tin đơn hàng</h4>
            </div>
            <style>
                .w-0 {
                    width: auto;
                }
            </style>
            <div class="tools-create d-flex form-inline col-12 mr-5 px-0">
                <div class="">
                    <div class="form-group">
                        <button class="btn btn-danger">Xóa đơn</button>
                        <button class="btn btn-primary mx-3"><img src="public/img/printer-p.svg" alt="" />In
                            đơn</button>
                    </div>
                </div>
            </div>

            <div class="main-excel h-100 col-12 px-0">
                <div class="excel-input ml-4 border-none">
                    <div class="card-body pt-3">
                        <div class="row">
                            <div class="col-4 form-group pl-0">
                                <div class="card h-100">
                                    <div class="card-body row">
                                        <div class="col-6 text-left">
                                            <div class="card-title">Mã vận đơn:</div>
                                        </div>
                                        <div class="col-6 text-right">
                                            <div class="text-danger font-weight-bold">19068076612</div>
                                        </div>
                                        <div class="col-6 text-left">
                                            <div class="card-title">Mã đơn hàng:</div>
                                        </div>
                                        <div class="col-6 text-right">
                                            <div class="">230922-00002-00004</div>
                                        </div>
                                        <div class="col-6 text-left">
                                            <div class="card-title">Ngày tạo:</div>
                                        </div>
                                        <div class="col-6 text-right">
                                            <div class="">22/09/2023 15:51:55</div>
                                        </div>
                                        <div class="col-6 text-left">
                                            <div class="card-title">Ngày nhận hàng dự kiến:</div>
                                        </div>
                                        <div class="col-6 text-right">
                                            <div class="">22/09/2023</div>
                                        </div>
                                        <div class="col-6 text-left">
                                            <div class="card-title">Ngày giao hàng dự kiến</div>
                                        </div>
                                        <div class="col-6 text-right">
                                            <div class="">26/09/2023</div>
                                        </div>
                                        <div class="col-6 text-left">
                                            <div class="card-title">Trạng thái:</div>
                                        </div>
                                        <div class="col-6 text-right">
                                            <div class="status-order">
                                                <label _ngcontent-hqc-c12="" class="vtp-label-status"
                                                    style="background-color: rgb(227, 175, 133)"> Shop hủy lấy </label>
                                            </div>
                                        </div>
                                        <div class="col-6 text-left">
                                            <div class="card-title">Dịch vụ vận chuyển:</div>
                                        </div>
                                        <div class="col-6 text-right">
                                            <div class="font-weight-bold">Chuyển phát tiêu chuẩn</div>
                                        </div>
                                        <div class="col-6 text-left">
                                            <div class="card-title">Dịch vụ cộng thêm:</div>
                                        </div>
                                        <div class="col-6 text-right">
                                            <div class=""></div>
                                        </div>
                                    </div>
                                    <!-- <div class="col-12 p-0"> -->
                                    <hr class="w-0" style="margin: 5px 20px" />
                                    <!-- </div> -->
                                    <div class="card-body-row my-3">
                                        <div class="col-12">
                                            <div style="color: #ee0033" class="font-weight-bold">Người gửi</div>
                                        </div>
                                        <div class="col-12 font-weight-bold py-2">Bưu Cục Hồ Chí Minh - 0123456789</div>
                                        <div class="col-12">Hồ Chí Minh, Quận 11, Phường 05, Số 1 Hồ Chí Minh, PHƯỜNG 5,
                                            QUẬN 11, Hồ Chí Minh</div>
                                    </div>
                                    <hr class="w-0" style="margin: 0px 20px" />
                                    <!-- </div> -->
                                    <div class="card-body-row my-3">
                                        <div class="col-12">
                                            <div style="color: #ee0033" class="font-weight-bold">Người nhận</div>
                                        </div>
                                        <div class="col-12 font-weight-bold py-2">Streamer Họ Phùng - 0999999999</div>
                                        <div class="col-12">Hà Nội, Quận Đống Đa, Phường Quang Trung, 12 Chùa Bộc, P Quang
                                            Trung, Q Đống Đa, TP Hà Nội, PHƯỜNG QUANG TRUNG, QUẬN ĐỐNG ĐA, Hà Nội</div>
                                        <div class="col-12 my-2">
                                            <small><span class="text-gray" style="color: #959494; font-size: 13px">Thời gian
                                                    nhận: Cả ngày</span></small>
                                        </div>
                                        <div class="col-12 d-flex">
                                            <small class=""><span class="text-gray mr-1"
                                                    style="color: #959494; font-size: 13px">Tỷ lệ giao thành công: </span>
                                            </small>
                                            <p class="" style="color: #44ab4a; font-weight: 700">96.37%
                                                (379547/393859)</p>
                                        </div>
                                    </div>
                                    <hr class="w-0" style="margin: 0px 20px" />
                                    <!-- </div> -->
                                    <div class="card-body row my-3">
                                        <div class="col-12 mb-3">
                                            <div style="color: #ee0033" class="font-weight-bold">Phí và tiền thu hộ</div>
                                        </div>
                                        <div class="col-6 text-left">
                                            <div class="card-title">Hình thức</div>
                                        </div>
                                        <div class="col-6 text-right">
                                            <div class="">Không thu hộ</div>
                                        </div>
                                        <div class="col-6 text-left font-weight-bold">
                                            <div class="card-title">Phí vận chuyển</div>
                                            <div class="card-title">(Người gửi trả) (1)</div>
                                        </div>
                                        <div class="col-6 text-right">
                                            <div class="text-danger font-weight-bold">176.981 ₫</div>
                                        </div>
                                        <div class="col-6 text-left font-weight-bold">
                                            <div style="white-space: nowrap" class="card-title">Tổng cước phát sinh (2)
                                            </div>
                                            <div class="card-title">Tổng cước (1) + (2)</div>
                                        </div>
                                        <div style="padding-top: 9%" class="col-6 text-right">
                                            <div class="text-danger font-weight-bold">176.981 ₫</div>
                                        </div>
                                        <div class="col-6 text-left">
                                            <div class="card-title font-weight-bold">Tiền thu hộ</div>
                                        </div>
                                        <div class="col-6 text-right">
                                            <div class="">0 ₫</div>
                                        </div>
                                        <div class="col-6 text-left">
                                            <div class="card-title font-weight-bold">Tiền thu người nhận</div>
                                        </div>
                                        <div class="col-6 text-right">
                                            <div class="font-weight-bold">0 ₫</div>
                                        </div>
                                        <div class="col-12">
                                            <button class="btn btn-add">Lịch sử sửa đơn</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4 form-group pl-0">
                                <div class="card h-100">
                                    <div style="padding: 1.25rem" class="row">
                                        <div class="col-12">
                                            <div class="text-danger font-weight-bold mb-2">Thông tin hàng hóa</div>
                                        </div>
                                        <div class="col-6 text-left">
                                            <div class="card-title">Tên hàng 1:</div>
                                        </div>
                                        <div class="col-6 text-right">
                                            <div class="">30 - Bình nước Mixi</div>
                                        </div>
                                        <div class="col-6 text-left">
                                            <div class="card-title">Số lượng:</div>
                                        </div>
                                        <div class="col-6 text-right">
                                            <div class="">1</div>
                                        </div>
                                        <div class="col-6 text-left">
                                            <div class="card-title">Khối lượng:</div>
                                        </div>
                                        <div class="col-6 text-right">
                                            <div class="">15000 g</div>
                                        </div>
                                        <div class="col-6 text-left">
                                            <div class="card-title">Giá trị:</div>
                                        </div>
                                        <div class="col-6 text-right">
                                            <div class="">6.000.000 ₫</div>
                                        </div>
                                        <div class="col-12">
                                            <hr class="w-0" />
                                        </div>
                                        <div class="col-6 text-left">
                                            <div class="card-title">Tổng khối lượng:</div>
                                        </div>
                                        <div class="col-6 text-right">
                                            <div class="text-danger font-weight-bold mb-2">15000 g</div>
                                        </div>
                                        <div class="col-6 text-left">
                                            <div class="card-title" style="white-space: nowrap">Tổng khối lượng tính cước
                                            </div>
                                        </div>
                                        <div class="col-6 text-right">
                                            <div class="">15000 g</div>
                                        </div>
                                        <div class="col-6 text-left">
                                            <div class="card-title">Tổng giá trị:</div>
                                        </div>
                                        <div class="col-6 text-right">
                                            <div class="text-danger font-weight-bold">6.000.000 ₫</div>
                                        </div>
                                        <div class="col-6 text-left">
                                            <div class="card-title">Loại hàng hóa:</div>
                                        </div>
                                        <div class="col-6 text-right">
                                            <div class="">Bưu kiện</div>
                                        </div>
                                        <div class="col-6 text-left">
                                            <div class="card-title" style="white-space: nowrap">Tính chất hàng hóa đặc
                                                biệt:</div>
                                        </div>
                                        <div class="col-6 text-right">
                                            <div class=""></div>
                                        </div>
                                        <div class="col-6 text-left">
                                            <div class="card-title">Kích thước:</div>
                                        </div>
                                        <div class="col-6 text-right">
                                            <div class="">0x0x0 cm</div>
                                        </div>
                                        <div class="col-12">
                                            <hr class="w-0" />
                                        </div>
                                        <div class="col-12">
                                            <div class="text-danger font-weight-bold mb-2">Ghi chú vận đơn</div>
                                        </div>

                                        <div class="col-6 text-left">
                                            <div class="card-title">Yêu cầu lấy hàng:</div>
                                        </div>
                                        <div class="col-6 text-right">
                                            <div class="">Đến lấy hàng tại nhà</div>
                                        </div>

                                        <div class="col-6 text-left">
                                            <div class="card-title">Yêu cầu khác:</div>
                                        </div>
                                        <div class="col-6 text-right">
                                            <div class=""></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4 form-group pl-0">
                                <div class="card h-100">
                                    <div class="card-body"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
