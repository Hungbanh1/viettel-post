@extends('layouts.admin')
@section('content')
<div class="col-12 no-padding-row">
    <div class="table-create-order d-flex mt-4 ml-5 font-weight-bold">
        <div class="create-in">
            <span class="mr-5">Tạo đơn trong nước</span>
        </div>
        <div class="create-out">
            <span>Tạo đơn quốc tế</span>
        </div>
    </div>
    <form class="w-100" action>
        <div class="tools-create d-flex form-inline col-12 mt-5 mr-5 px-0">
            <div class="setting">
                <div class="form-group">
                    <button class="btn-tools" title="Cài đặt tạo đơn">
                        <i _ngcontent-jdt-c41 class="fa fa-cog mx-1"></i>
                        <span> Cài đặt </span>
                    </button>
                    <button class="btn-tools" title="Cài đặt tạo đơn">
                        <img class="mx-2" src="public/img/box.png" alt />
                        <span> Tạo đơn theo mẫu </span>
                    </button>
                    <button class="btn-tools" title="Cài đặt tạo đơn">
                        <img class="mx-1" src="public/img/excel.svg" alt />
                        <span> Nhập excel </span>
                    </button>
                </div>
                <div class="note">
                    <span>Lưu ý(*): Là các trường bắt buộc nhập</span>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- //trai  ------------------------------------------------------  ---->
            <div class="content-left col-md-6 pl-0">
                <div class>
                    <!-- //nguoi gui  -->
                    <div class="sender h147 bg-white ml-4 card form-group">
                        <div class="header-sender d-flex align-items-center justify-content-between pt-2 card-header w-100">
                            <div class="h1-sender d-flex">
                                <img src="public/img/user-forward.svg" alt />
                                <span class="pt-1 pl-2 font-weight-bold">NGƯỜI GỬI</span>
                            </div>
                            <div class="control-list-sender">
                                <a href>
                                    <span class="txt-gray">Quản lý thông tin người gửi</span>
                                    <img class="mx-2" src="public/img/arrow-right.svg" alt
                                /></a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <div class="dropdown">
                                    <button class="btn border-drop bg-lightt btn-dropdown btn-lightt dropdown-toggle d-flex align-items-center justify-content-between" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                        <div class="drop-item mr-4">0974946023 - 491C2, Đ.Đỗ Xuân Hợp, PHƯỜNG PHƯỚC LONG B, THÀNH</div>
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <!-- Tạo thanh tìm kiếm bằng input -->
                                        <li>
                                            <input class="form-control" type="text" placeholder="Tìm kiếm" aria-label="Search" id="dropdown-search" />
                                        </li>
                                        <li>
                                            <hr class="dropdown-divider" />
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#">Mục 1</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#">Mục 2</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#">Mục 3</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#">Mục 4</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- // nguoi nhan  -->
                    <div class="sender h100 bg-white ml-4 card form-group">
                        <div class="header-sender d-flex align-items-center justify-content-between pt-2 card-header w-100">
                            <div class="h1-sender d-flex">
                                <img src="public/img/user-forward.svg" alt />
                                <span class="pt-1 pl-2 font-weight-bold">NGƯỜI NHẬN</span>
                            </div>
                            <div class="control-list-sender">
                                <label class="receiver mb-0 d-flex" for>
                                    <div class="checkbox-receiver d-flex align-items-center justify-content-between custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1" />
                                        <label class="custom-control-label" for="customCheck1"> Nhận hàng tại bưu cục</label>
                                        <i
                                            _ngcontent-rkj-c14
                                            aria-hidden="true"
                                            class="fa fa-info-circle pt-1 pl-2"
                                            mattooltip="Hàng gửi đến bưu cục, khách hàng đến bưu cục nhận hàng"
                                            mattooltipclass="tool-tip"
                                            aria-describedby="cdk-describedby-message-1"
                                            cdk-describedby-host
                                            style="touch-action: none; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0)"
                                        ></i>
                                    </div>
                                </label>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="form-group row">
                                <div class="col-2 d-flex mt-2">
                                    <label style="white-space: pre" for>Điện thoại <span class="text-danger">*</span></label>
                                </div>
                                <div class="col-10">
                                    <!-- <input class="form-control" type="tel"> -->
                                    <input type="tel" class="form-control form-reci" id="phone" placeholder="Nhập số điện thoại để tự điền thông tin người nhận" />
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-2 d-flex mt-2">
                                    <label style="white-space: pre" for>Họ tên <span class="text-danger">*</span></label>
                                </div>
                                <div class="col-10">
                                    <!-- <input class="form-control" type="tel"> -->
                                    <input type="tel" class="form-control form-reci" id="phone" placeholder="Nhập tên người nhận" />
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-2 d-flex mt-2">
                                    <label style="white-space: pre" for>Địa chỉ <span class="text-danger">*</span></label>
                                </div>
                                <div class="col-10">
                                    <!-- <input class="form-control" type="tel"> -->
                                    <input type="tel" class="form-control form-reci" id="phone" placeholder="Nhập địa chỉ (số nhà/tên đường, phường/xã, quận/huyện, tỉnh/thành...)" />
                                </div>
                            </div>
                          
                            <div class="form-group row">
                                <label class="col-2" for></label>
                                <div class="col-10">
                                    <div class="row address-reci">
                                        <div class="col-6">
                                            <input type="tel" class="form-control form-reci" id="phone" placeholder="Tỉnh/Thành phố" />
                                        </div>
                                        <div class="col-6">
                                            <!-- Khối 2 - Trên phải -->
                                            <input type="tel" class="form-control form-reci" id="phone" placeholder="Huyện/Quận" />
                                        </div>
                                        <div class="col-6">
                                            <!-- Khối 3 - Dưới trái -->
                                            <input type="tel" class="form-control form-reci" id="phone" placeholder="Xã/Phường" />
                                        </div>
                                        <div class="col-6">
                                            <!-- Khối 4 - Dưới phải -->
                                            <input type="tel" class="form-control form-reci" id="phone" placeholder="Đường/Thôn/Xóm" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- // Chọn dich vụ  -->
                    <div class="sender h100 bg-white ml-4 card form-group">
                        <div class="header-sender d-flex align-items-center justify-content-between pt-2 card-header w-100">
                            <div class="h1-sender d-flex">
                                <img src="public/img/truck.svg" alt />
                                <span class="pt-1 pl-2 font-weight-bold">CHỌN DỊCH VỤ</span>
                            </div>
                        </div>
                        <style></style>
                        <div class="card-body">
                            <div class="form-group row d-flex">
                                <div class="col-3 ml-auto d-flex mt-2 align-items-center">
                                    <img src="public/img/icon-voucher.svg" alt />
                                    <label class="pt-2 pl-2 font-weight-bold text-uppercase" style="white-space: pre" for>KHUYẾN MÃI</label>
                                </div>
                                <div class="col-9">
                                    <div class="dropdown mt-3">
                                        <button class="btn w-100 btn-lightt border-drop btn-dropdown dropdown-toggle d-flex align-items-center justify-content-between" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                            <div class="drop-item mr-4">Chọn mã khuyến mãi</div>
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <!-- Tạo thanh tìm kiếm bằng input -->
                                            <li>
                                                <input class="form-control" type="text" placeholder="Tìm kiếm" aria-label="Search" id="dropdown-search" />
                                            </li>
                                            <li>
                                                <hr class="dropdown-divider" />
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="#">Mục 1</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="#">Mục 2</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="#">Mục 3</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="#">Mục 4</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <small class="prioritize cursor-pointer">
                                        <a href>
                                            <span class="mr-1">Ưu dãi</span>
                                        </a>
                                        <img src="public/img/arrow-right.svg" alt />
                                    </small>
                                </div>
                            </div>

                            <!-- </div> -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-left col-md-6 pl-0 ml-6">
                <div class="">
                    <!-- //nguoi gui  -->
                    <div class="sender bg-white ml-4 card form-group">
                        <div class="header-sender d-flex align-items-center justify-content-between pt-2 card-header w-100">
                            <div class="h1-sender d-flex">
                                <img src="public/img/user-forward.svg" alt />
                                <span class="pt-1 pl-2 font-weight-bold">THÔNG TIN HÀNG HÓA</span>
                            </div>
                            <div class="control-list-sender">
                                <a href>
                                    <span class="txt-gray">Quản lý danh sách hàng hóa</span>
                                    <img class="mx-2" src="public/img/icon-arow-blue-right.svg" alt
                                /></a>
                            </div>
                        </div>
                        <div class="card-body pt-1">
                            <!-- // 1 -->
                            <div class="form-group row d-flex">
                                <div class="col-12 ml-auto d-flex mt-2 align-items-center">
                                    <img width="20px" height="20px" src="public/img/icon-type-goods.png" alt />
                                    <label class="pt-2 pl-2 font-weight-bold text-uppercase" style="white-space: pre" for>LOẠI HÀNG HÓA</label>
                                </div>
                                <div class="input-group col-6">
                                    <div class="custom-check d-flex align-items-center">
                                        <input class="custom-radio-check" type="radio" id="customCheck111" />
                                        <label class="custom-check-label mb-0" for="customCheck111">Bưu kiện</label>
                                    </div>
                                </div>
                                <div class="input-group col-6">
                                    <div class="custom-check d-flex align-items-center">
                                        <input type="radio" id="customCheck111" />
                                        <label class="custom-check-label mb-0" for="customCheck111">Bưu kiện</label>
                                    </div>
                                </div>
                            </div>
                            <hr />
                            <!-- // 2 -->
                            <div class="form-group row">
                                <div class="col-2 d-flex mt-2">
                                    <label style="white-space: pre" for>Tên hàng 1 <span class="text-danger">*</span></label>
                                </div>
                                <div class="col-10">
                                    <!-- <input class="form-control" type="tel"> -->
                                    <input type="tel" class="form-control form-reci" id="phone" placeholder="Nhập tên hàng hóa" />
                                </div>
                            </div>
                            <!-- // 3  -->
                            <div class="form-group row">
                                <div class="col-2 d-flex mt-2">
                                    <label style="white-space: pre" for></label>
                                </div>

                                <div class="col-10">
                                    <div class="row info-order">
                                        <div class="col-4 input-group">
                                            <a class="labelQty">
                                                <img width="18px" height="14px" src="public/img/box.svg" alt="" />
                                                <span class="text-danger">*</span>
                                            </a>
                                            <input type="tel" class="form-control form-reci pl-5" id="phone" placeholder="1" />
                                        </div>
                                        <div class="col-4 input-group">
                                            <a class="labelQty">
                                                <i
                                                    _ngcontent-diq-c14=""
                                                    class="fa fa-balance-scale"
                                                    mattooltipclass="tool-tip"
                                                    style="touch-action: none; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0)"
                                                    aria-describedby="cdk-describedby-message-6"
                                                    cdk-describedby-host=""
                                                ></i>

                                                <span class="text-danger">*</span>
                                            </a>
                                            <input type="tel" class="form-control form-reci pl-25rem" id="phone" placeholder="Trọng lượng" />
                                            <a href="" class="gram">g</a>
                                        </div>
                                        <div class="col-4 input-group">
                                            <a class="labelQty">
                                                <i
                                                    _ngcontent-diq-c14=""
                                                    class="fa-solid fa-money-bill"
                                                    mattooltipclass="tool-tip"
                                                    style="touch-action: none; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0)"
                                                    aria-describedby="cdk-describedby-message-7"
                                                    cdk-describedby-host=""
                                                ></i>

                                                <span class="text-danger">*</span>
                                            </a>
                                            <input type="tel" class="form-control form-reci pl-25rem" id="phone" placeholder="Giá trị hàng" />
                                            <a href="" class="gram">đ</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr />
                            <!-- //4  -->
                            <div class="form-group mb-4 row">
                                <div class="col-2 d-flex mt-2">
                                    <label style="white-space: pre" for></label>
                                </div>

                                <div class="col-10">
                                    <div class="row info-order">
                                        <div class="col-4 input-group"></div>
                                        <div class="col-4">
                                            <button class="btn btn-add"><i _ngcontent-tiy-c19="" class="fa fa-plus mr-2"></i>Thêm hàng hóa</button>
                                        </div>
                                        <div class="col-4"></div>
                                    </div>
                                </div>
                            </div>
                            <hr />
                            <!-- //5  -->
                            <div class="form-group mb-4">
                                <div class="row mb-3">
                                    <label class="col-2">Tổng khối lượng :</label>
                                    <div class="col-10 text-right text-color-viet font-weight-bold">0 g</div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-2">Tổng giá trị: </label>
                                    <div class="col-10 text-right text-color-viet font-weight-bold">0 ₫</div>
                                </div>
                            </div>
                            <hr class="mb-0" />
                            <!-- //6  -->
                            <div class="form-group mb-4">
                                <div class="row">
                                    <div class="col-12 ml-auto d-flex mt-1 align-items-center">
                                        <img width="20px" height="20px" src="public/img/icon-service-special.png" alt />
                                        <label class="pt-2 pl-2 font-weight-bold text-uppercase" style="white-space: pre" for>TÍNH CHẤT HÀNG HÓA ĐẶC BIỆT <i _ngcontent-tiy-c19="" class="ml-1 fa fa-info-circle text-primary"></i></label>
                                    </div>

                                    <div class="list-input-group col-12 pl-0">
                                        <div class="input-group">
                                            <div class="col-4">
                                                <div class="form-group mb-0" for="customCheck1">
                                                    <div class="checkbox-receiver d-flex align-items-center justify-content-between custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="customCheck11" />
                                                        <label class="custom-control-label" for="customCheck11">Giá trị cao</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="form-group mb-0" for="customCheck2">
                                                    <div class="checkbox-receiver d-flex align-items-center justify-content-between custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="customCheck2" />
                                                        <label class="custom-control-label" for="customCheck2">Dễ vỡ</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="form-group mb-0" for="customCheck3">
                                                    <div class="checkbox-receiver d-flex align-items-center justify-content-between custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="customCheck3" />
                                                        <label class="custom-control-label" for="customCheck3">Nguyên khối</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="input-group">
                                            <div class="col-4">
                                                <div class="form-group mb-0" for="customCheck4">
                                                    <div class="checkbox-receiver d-flex align-items-center justify-content-between custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="customCheck4" />
                                                        <label class="custom-control-label" for="customCheck4">Quá khổ</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="form-group mb-0" for="customCheck5">
                                                    <div class="checkbox-receiver d-flex align-items-center justify-content-between custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="customCheck5" />
                                                        <label class="custom-control-label" for="customCheck5">Chất Lỏng</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="form-group mb-0" for="customCheck6">
                                                    <div class="checkbox-receiver d-flex align-items-center justify-content-between custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="customCheck6" />
                                                        <label class="custom-control-label" for="customCheck6">Từ tính, Pin</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="input-group">
                                            <div class="col-4">
                                                <div class="form-group mb-0" for="customCheck7">
                                                    <div class="checkbox-receiver d-flex align-items-center justify-content-between custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="customCheck7" />
                                                        <label class="custom-control-label" for="customCheck7">Hàng lạnh</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr class="mb-0" />
                            <!-- // 7  -->
                            <div class="list-size-order card-body pl-1">
                                <div class="form-group row">
                                    <div class="col-2 d-flex mt-2">
                                        <label style="white-space: pre" for>Kích thước </label>
                                    </div>
                                    <div class="col-10 p-0">
                                        <div class="d-flex address-reci">
                                            <div class="col-4 pr-0">
                                                <input type="tel" class="form-control form-reci" id="phone" placeholder="Dài(cm)" />
                                            </div>
                                            <div class="col-4 pr-0">
                                                <!-- Khối 2 - Trên phải -->
                                                <input type="tel" class="form-control form-reci" id="phone" placeholder="Rộng(cm)" />
                                            </div>
                                            <div class="col-4 pr-0">
                                                <!-- Khối 3 - Dưới trái -->
                                                <input type="tel" class="form-control form-reci" id="phone" placeholder="Cao(cm)" />
                                            </div>
                                        </div>
                                        <div class="note-size-detail my-3 ml-3">
                                            <small class="text-muted"
                                                >Quy đổi kích thước (đối với hàng hoá cồng kềnh) <a href=""><strong class="txt-gray">Chi tiết</strong></a></small
                                            >
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-2 d-flex mt-2">
                                        <label style="white-space: pre" for>Quy đổi</label>
                                    </div>
                                    <div class="col-10 exchange-order pr-0 d-flex">
                                        <div class="input-group col-12 px-0 w-test">
                                            <input type="tel" class="form-control form-reci" id="phone" placeholder="Khối lượng quy đổi từ kích thước hàng hóa" />
                                            <div class="input-group-append">
                                                <span class="input-group-text ft-14">g</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-2 code-order d-flex mt-2">
                                        <label style="white-space: pre" for>Mã đơn hàng</label>
                                    </div>
                                    <div class="col-10 pr-0">
                                        <!-- <input class="form-control" type="tel"> -->
                                        <input type="tel" class="form-control form-reci" id="phone" placeholder="Nhập mã đơn hàng tự tạo" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <style>
                    .cod-a,
                    .note-exam {
                        color: #007ad9 !important;
                        font-size: 13px;
                        font-style: italic;
                    }
                </style>
                <div class="sender h100 bg-white ml-4 card form-group">
                    <div class="card-body">
                        <div class="form-group row d-flex">
                            <div class="col-12 row">
                                <div class="col-6 form-group">
                                    <div class="flex">
                                        <label class="collect-money mb-0 font-weight-bold text-uppercase" style="white-space: pre" for>TIỀN THU HỘ</label>

                                        <div class="method-pay my-1">
                                            <a class="cod-a" href=""><i _ngcontent-ysi-c27="" class="fa fa-info-circle mr-1"></i>Hình thức thanh toán tiền COD</a>
                                        </div>
                                        <div class="checkbox-receiver mb-2 d-flex align-items-center justify-content-between custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck12" />
                                            <label class="custom-control-label" for="customCheck12">Thu hộ bằng tiền hàng</label>
                                        </div>

                                        <input type="tel" class="form-control form-reci" id="phone" value="0" placeholder="0 đ" />
                                    </div>
                                </div>
                                <div class="col-6 form-group">
                                    <div class="flex">
                                        <label class="collect-money mb-0 font-weight-bold text-uppercase" style="white-space: pre" for>NGƯỜI TRẢ CƯỚC</label>
                                    </div>
                                    <div class="form-group d-flex">
                                        <div class="input-group">
                                            <div class="custom-check d-flex align-items-center">
                                                <input type="radio" id="customCheck111" />
                                                <label class="custom-check-label ml-2 mb-0" for="customCheck111">Người gửi</label>
                                            </div>
                                        </div>
                                        <div class="input-group">
                                            <div class="custom-check d-flex align-items-center">
                                                <input type="radio" id="customCheck111" />
                                                <label class="custom-check-label ml-2 mb-0" for="customCheck111">Người nhận</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 row">
                                <div class="col-6 form-group">
                                    <div class="d-flex">
                                        <label class="collect-money mr-auto font-weight-bold text-uppercase" style="white-space: pre" for>GHI CHÚ</label>
                                        <label class="collect-money cursor-pointer note-exam" style="white-space: pre" for>Ghi chú mẫu</label>

                                        <!-- <input type="tel" class="form-control form-reci" id="phone" value="0" placeholder="0 đ" /> -->
                                    </div>
                                    <div class="form-group">
                                        <textarea class="form-control" name="" id="" cols="20" rows="3" placeholder="Nhập ghi chú"></textarea>
                                    </div>
                                </div>

                                <div class="col-6 form-group">
                                    <div class="flex">
                                        <label class="collect- mb-0 font-weight-bold text-uppercase" style="white-space: pre" for>YÊU CẦU LẤY HÀNG</label>
                                        <div class="method-pay">
                                            <a class="cod-a" href=""><i _ngcontent-ysi-c27="" class="fa fa-info-circle mr-1"></i>Thời gian quy định lấy hàng</a>
                                        </div>
                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="custom-check d-flex align-items-center">
                                                    <input type="radio" id="customCheck111" />
                                                    <label class="custom-check-label ml-2 mb-0" for="customCheck111">Đến lấy hàng tại nhà</label>
                                                </div>
                                            </div>
                                            <div class="input-group">
                                                <div class="custom-check d-flex align-items-center">
                                                    <input type="radio" id="customCheck111" />
                                                    <label class="custom-check-label ml-2 mb-0" for="customCheck111">Gửi tại bưu cục</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="collect- mb-2 font-weight-bold text-uppercase" style="white-space: pre-line" for> THỜI GIAN PHÁT HÀNG MONG MUỐN</label>
                                            <div class="dropdown">
                                                <button class="btn w-100 border-drop bg-lightt btn-dropdown btn-lightt dropdown-toggle d-flex align-items-center justify-content-between" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <div class="drop-item mr-4">Cả ngày</div>
                                                </button>
                                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <!-- Tạo thanh tìm kiếm bằng input -->
                                                    <li>
                                                        <input class="form-control" type="text" placeholder="Tìm kiếm" aria-label="Search" id="dropdown-search" />
                                                    </li>
                                                    <li>
                                                        <hr class="dropdown-divider" />
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="#">Mục 1</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="#">Mục 2</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="#">Mục 3</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="#">Mục 4</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 d-flex align-items-center">
                                <div class="checkbox-receiver mb-2 d-flex align-items-center justify-content-between custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck13" />
                                    <label class="custom-control-label" for="customCheck13">Lưu thông tin đơn hàng</label>
                                </div>
                                <style>
                                    .fa-info-circle::before {
                                        display: inline-block;
                                        width: 12px !important;
                                    }
                                </style>
                                <div class="icon-save-info-order 1 cursor-pointer">
                                    <i
                                        _ngcontent-rkj-c14
                                        aria-hidden="true"
                                        class="fa fa-info-circle pl-1 txt-gray w-12-icon"
                                        mattooltip="Lưu thông tin đơn hàng"
                                        mattooltipclass="tool-tip"
                                        aria-describedby="cdk-describedby-message-1"
                                        cdk-describedby-host
                                        style="touch-action: none; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); width: 12px"
                                    ></i>
                                </div>
                            </div>
                        </div>

                        <!-- </div> -->
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection