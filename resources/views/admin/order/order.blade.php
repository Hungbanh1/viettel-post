@extends('layouts.admin')
@section('content')
    <script>
        // Kiểm tra nếu có thông báo thành công
        @if (session('success'))
            // Hiển thị thông báo
            alert('{{ session('success') }}');
            // Reload trang sau 2 giây (hoặc thời gian mà bạn muốn)
            setTimeout(function() {
                window.location.href = '{{ route('bill_manage') }}';
            }, 1000);
        @endif
    </script>
    <div class="col-12 no-padding-row">
        <div class="table-create-order d-flex mt-4 ml-5 font-weight-bold">
            <div class="create-in">
                <span class="mr-5">Tạo đơn trong nước</span>
            </div>
            <div class="create-out">
                <span>Tạo đơn quốc tế</span>
            </div>
        </div>
        <form class="w-100" method="POST" action="{{ route('add') }}">
            @csrf
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
                            <div
                                class="header-sender d-flex align-items-center justify-content-between pt-2 card-header w-100">
                                <div class="h1-sender d-flex">
                                    <img src="public/img/user-forward.svg" alt />
                                    <span class="pt-1 pl-2 font-weight-bold">NGƯỜI GỬI</span>
                                </div>
                                <div class="control-list-sender">
                                    <a href>
                                        <span class="txt-gray">Quản lý thông tin người gửi</span>
                                        <img class="mx-2" src="public/img/arrow-right.svg" alt /></a>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <div class="dropdown">
                                        <select
                                            class="w-100 text-left cursor-pointer form-select btn border-drop bg-lightt btn-dropdown btn-lightt dropdown-toggle d-flex align-items-center justify-content-between "
                                            aria-label="Default select example" name="select_sender">
                                            @if ($sender->isEmpty())
                                                <option class="" value="">{{ $message }}
                                                </option>
                                            @else
                                                @foreach ($sender as $item)
                                                    <option class="option" value="{{ $item->id }}" selected>
                                                        {{ $item->final_address }}
                                                    </option>
                                                @endforeach
                                            @endif


                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- // nguoi nhan  -->
                        <div class="sender h100 bg-white ml-4 card form-group">
                            <div
                                class="header-sender d-flex align-items-center justify-content-between pt-2 card-header w-100">
                                <div class="h1-sender d-flex">
                                    <img src="public/img/user-forward.svg" alt />
                                    <span class="pt-1 pl-2 font-weight-bold">NGƯỜI NHẬN</span>
                                </div>
                                <div class="control-list-sender">
                                    <label class="receiver mb-0 d-flex" for>
                                        <div
                                            class="checkbox-receiver d-flex align-items-center justify-content-between custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck1" />
                                            <label class="custom-control-label" for="customCheck1"> Nhận hàng tại bưu
                                                cục</label>
                                            <i _ngcontent-rkj-c14 aria-hidden="true" class="fa fa-info-circle pt-1 pl-2"
                                                mattooltip="Hàng gửi đến bưu cục, khách hàng đến bưu cục nhận hàng"
                                                mattooltipclass="tool-tip" aria-describedby="cdk-describedby-message-1"
                                                cdk-describedby-host
                                                style="touch-action: none; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0)"></i>
                                        </div>
                                    </label>
                                </div>
                            </div>
                            <div class="card-body">
                                {{-- <div class="form-group login-input-item mx-3">
                                    <label class="mb-0" for="email">Số điện thoại/Email</label>
                                    <input id="email" type="email"
                                        class="form-control text-muted mb-2 @error('email') is-invalid @enderror"
                                        name="email" value="{{ old('email') }}" autocomplete="email" autofocus
                                        placeholder="Nhập email hoặc số điện thoại" />
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div> --}}
                                <div class="form-group row">
                                    <div class="col-2 d-flex mt-2">
                                        <label style="white-space: pre" for="phone">Điện thoại <span
                                                class="text-danger">*</span></label>
                                    </div>

                                    <div class="col-10">
                                        <input type="text" class="form-control form-reci" name="phone" id="phone"
                                            placeholder="Nhập số điện thoại để tự điền thông tin người nhận" />

                                        @error('phone')
                                            <span style="display: block" class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-2 d-flex mt-2">
                                        <label style="white-space: pre" for="name">Họ tên <span
                                                class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-10">
                                        <!-- <input class="form-control" type="tel"> -->
                                        <input type="tel"class="form-control form-reci" name="name" id="name"
                                            placeholder="Nhập tên người nhận" />
                                        @error('name')
                                            <span style="display: block" class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-2 d-flex mt-2">
                                        <label style="white-space: pre" for="address">Địa chỉ <span
                                                class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-10">
                                        <!-- <input class="form-control" type="tel"> -->
                                        <input type="tel" class="form-control form-reci" name="address"
                                            id="address"
                                            placeholder="Nhập địa chỉ (số nhà/tên đường, phường/xã, quận/huyện, tỉnh/thành...)" />
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-2" for></label>
                                    <div class="col-10">
                                        <div class="row address-reci">
                                            <div class="col-6">
                                                <select class="form-select form-control form-select-sm mb-3 city_text"
                                                    name='city' id="city" aria-label=".form-select-sm">
                                                    <option value="" selected>Chọn tỉnh thành</option>
                                                </select>
                                            </div>
                                            <div class="col-6">
                                                <!-- Khối 2 - Trên phải -->
                                                <select class="form-select form-control form-select-sm mb-3"
                                                    name="district" id="district" aria-label=".form-select-sm">
                                                    <option value="" selected>Huyện quận</option>
                                                </select>
                                            </div>
                                            <div class="col-6">
                                                <!-- Khối 3 - Dưới trái -->
                                                <select class="form-select form-control form-select-sm mb-3"
                                                    name="ward" id="ward" aria-label=".form-select-sm">
                                                    <option value="" selected>Xã phường</option>
                                                </select>
                                            </div>
                                            <div class="col-6">
                                                <!-- Khối 4 - Dưới phải -->
                                                <input type="tel" class="form-control form-reci" id="village"
                                                    name="village" placeholder="Đường/Thôn/Xóm" />
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Tạo đơn</button>

                                        <script>
                                            var citis = document.getElementById("city");
                                            var districts = document.getElementById("district");
                                            var wards = document.getElementById("ward");
                                            var Parameter = {
                                                url: "https://raw.githubusercontent.com/kenzouno1/DiaGioiHanhChinhVN/master/data.json",
                                                method: "GET",
                                                responseType: "application/json",
                                            };
                                            var promise = axios(Parameter);
                                            promise.then(function(result) {
                                                renderCity(result.data);
                                            });

                                            function renderCity(data) {
                                                for (const x of data) {
                                                    citis.options[citis.options.length] = new Option(x.Name, x.Name); // Đặt giá trị value thành x.Name
                                                }
                                                citis.onchange = function() {
                                                    district.length = 1;
                                                    ward.length = 1;
                                                    if (this.value != "") {
                                                        const result = data.filter(n => n.Name === this.value); // Sử dụng x.Name thay vì x.Id
                                                        for (const k of result[0].Districts) {
                                                            district.options[district.options.length] = new Option(k.Name, k
                                                                .Name); // Đặt giá trị value thành k.Name
                                                        }
                                                    }
                                                };
                                                district.onchange = function() {
                                                    ward.length = 1;
                                                    const dataCity = data.filter((n) => n.Name === citis.value); // Sử dụng x.Name thay vì x.Id
                                                    if (this.value != "") {
                                                        const dataWards = dataCity[0].Districts.filter(n => n.Name === this.value)[0]
                                                            .Wards; // Sử dụng k.Name thay vì k.Id
                                                        for (const w of dataWards) {
                                                            wards.options[wards.options.length] = new Option(w.Name, w
                                                                .Name); // Đặt giá trị value thành w.Name
                                                        }
                                                    }
                                                };
                                            }
                                        </script>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- // Chọn dich vụ  -->
                        {{-- <div class="sender h100 bg-white ml-4 card form-group">
                            <div
                                class="header-sender d-flex align-items-center justify-content-between pt-2 card-header w-100">
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
                                        <label class="pt-2 pl-2 font-weight-bold text-uppercase" style="white-space: pre"
                                            for>KHUYẾN MÃI</label>
                                    </div>
                                    <div class="col-9">
                                        <div class="dropdown mt-3">
                                            <button
                                                class="btn w-100 btn-lightt border-drop btn-dropdown dropdown-toggle d-flex align-items-center justify-content-between"
                                                type="button" id="dropdownMenuButton" data-bs-toggle="dropdown"
                                                aria-expanded="false">
                                                <div class="drop-item mr-4">Chọn mã khuyến mãi</div>
                                            </button>
                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <!-- Tạo thanh tìm kiếm bằng input -->
                                                <li>
                                                    <input class="form-control" type="text" placeholder="Tìm kiếm"
                                                        aria-label="Search" id="dropdown-search" />
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
                        </div> --}}
                    </div>
                </div>
                <div class="content-left col-md-6 pl-0 ml-6">
                    <div class="">
                        <!-- //nguoi gui  -->
                        <div class="sender bg-white ml-4 card form-group">
                            <div
                                class="header-sender d-flex align-items-center justify-content-between pt-2 card-header w-100">
                                <div class="h1-sender d-flex">
                                    <img src="public/img/user-forward.svg" alt />
                                    <span class="pt-1 pl-2 font-weight-bold">THÔNG TIN HÀNG HÓA</span>
                                </div>
                                <div class="control-list-sender">
                                    <a href>
                                        <span class="txt-gray">Quản lý danh sách hàng hóa</span>
                                        <img class="mx-2" src="public/img/icon-arow-blue-right.svg" alt /></a>
                                </div>
                            </div>
                            <div class="card-body pt-1">
                                <!-- // 1 -->
                                <div class="form-group row d-flex">
                                    <div class="col-12 ml-auto d-flex mt-2 align-items-center">
                                        <img width="20px" height="20px" src="public/img/icon-type-goods.png" alt />
                                        <label class="pt-2 pl-2 font-weight-bold text-uppercase" style="white-space: pre"
                                            for>LOẠI HÀNG HÓA</label>
                                    </div>
                                    <div class="input-group col-6">
                                        <div class="custom-check d-flex align-items-center">
                                            <input class="mr-2" type="radio" id="customCheck111" name="shipmentType"
                                                value="Bưu kiện" />
                                            <label class="custom-check-label mb-0" for="customCheck111">Bưu kiện</label>
                                        </div>
                                    </div>

                                    <div class="input-group col-6">
                                        <div class="custom-check d-flex align-items-center">
                                            <input class="mr-2" type="radio" id="customCheck112" name="shipmentType"
                                                value="Tài liệu" />
                                            <label class="custom-check-label mb-0" for="customCheck112">Tài liệu</label>
                                        </div>
                                    </div>


                                </div>
                                <hr />
                                <!-- // 2 -->
                                <div class="form-group row">
                                    <div class="col-2 d-flex mt-2">
                                        <label style="white-space: pre" for="product_name">Tên hàng 1 <span
                                                class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-10">
                                        <!-- <input class="form-control" type="tel"> -->
                                        <input type="tel" class="form-control form-reci" id="product_name"
                                            name="product_name" placeholder="Nhập tên hàng hóa" />
                                    </div>
                                </div>
                                <!-- // 3  -->
                                <div class="form-group row">
                                    <div class="col-2 d-flex mt-2">
                                        <label style="white-space: pre" for></label>
                                    </div>
                                    <style>

                                    </style>
                                    <div class="col-10">
                                        <div class="row info-order">
                                            <div class="col-4 input-group">
                                                <a data-c-tooltip="Số lượng" tooltip-position ="bottom" class="labelQty">
                                                    <img width="18px" height="14px" src="public/img/box.svg"
                                                        alt="" />
                                                    <span class="text-danger">*</span>
                                                </a>
                                                <input id="qty" name="qty" placeholder="1"
                                                    value="{{ old('qty') }}" type="text"
                                                    class="form-control form-reci pl-5" id="phone" placeholder="1" />
                                            </div>
                                            <div class="col-4 input-group">
                                                <a data-c-tooltip="Trọng lượng" tooltip-position ="bottom"
                                                    class="labelQty">
                                                    <i _ngcontent-diq-c14="" class="fa fa-balance-scale"
                                                        mattooltipclass="tool-tip"
                                                        style="touch-action: none; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0)"
                                                        aria-describedby="cdk-describedby-message-6"
                                                        cdk-describedby-host=""></i>

                                                    <span class="text-danger">*</span>
                                                </a>
                                                <input type="text" class="form-control form-reci pl-25rem"
                                                    id="kg" name="kg" placeholder="Trọng lượng"
                                                    value="{{ old('kg') }}" placeholder="Trọng lượng" />
                                                <a href="" class="gram">g</a>
                                            </div>
                                            <div class="col-4 input-group">
                                                <a data-c-tooltip="Đơn giá" tooltip-position ="bottom" class="labelQty">
                                                    <i _ngcontent-diq-c14="" class="fa-solid fa-money-bill"
                                                        mattooltipclass="tool-tip"
                                                        style="touch-action: none; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0)"
                                                        aria-describedby="cdk-describedby-message-7"
                                                        cdk-describedby-host=""></i>

                                                    <span class="text-danger">*</span>
                                                </a>
                                                <input type="text" class="form-control form-reci pl-25rem"
                                                    id="price_product" name="price_product" oninput="formatNumber(this);"
                                                    placeholder="Giá trị hàng"
                                                    value="{{ old('price_product') ? number_format(old('price_product')) : '' }}" />

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
                                                <button class="btn btn-add"><i _ngcontent-tiy-c19=""
                                                        class="fa fa-plus mr-2"></i>Thêm hàng hóa</button>
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
                                            <img width="20px" height="20px" src="public/img/icon-service-special.png"
                                                alt />
                                            <label class="pt-2 pl-2 font-weight-bold text-uppercase"
                                                style="white-space: pre" for>TÍNH CHẤT HÀNG HÓA ĐẶC BIỆT <i
                                                    _ngcontent-tiy-c19=""
                                                    class="ml-1 fa fa-info-circle text-primary"></i></label>
                                        </div>

                                        <div class="list-input-group col-12 pl-0">
                                            <div class="input-group">
                                                <div class="col-4">
                                                    <div class="form-group mb-0" for="customCheck1">
                                                        <div
                                                            class="checkbox-receiver d-flex align-items-center justify-content-between custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input"
                                                                id="customCheck11" name="special_features[]"
                                                                value="Giá trị cao">
                                                            <label class="custom-control-label" for="customCheck11">Giá
                                                                trị cao</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="form-group mb-0" for="customCheck2">
                                                        <div
                                                            class="checkbox-receiver d-flex align-items-center justify-content-between custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input"
                                                                id="customCheck2" name="special_features[]"
                                                                value="Dễ vỡ">
                                                            <label class="custom-control-label" for="customCheck2">Dễ
                                                                vỡ</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="form-group mb-0" for="customCheck3">
                                                        <div
                                                            class="checkbox-receiver d-flex align-items-center justify-content-between custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input"
                                                                id="customCheck3" name="special_features[]"
                                                                value="Nguyên khối">
                                                            <label class="custom-control-label" for="customCheck3">Nguyên
                                                                khối</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="input-group">
                                                <div class="col-4">
                                                    <div class="form-group mb-0" for="customCheck4">
                                                        <div
                                                            class="checkbox-receiver d-flex align-items-center justify-content-between custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input"
                                                                id="customCheck4" name="special_features[]"
                                                                value="Quá
                                                                khổ">
                                                            <label class="custom-control-label" for="customCheck4">Quá
                                                                khổ</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="form-group mb-0" for="customCheck5">
                                                        <div
                                                            class="checkbox-receiver d-flex align-items-center justify-content-between custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input"
                                                                id="customCheck5" name="special_features[]"
                                                                value="Chất
                                                                Lỏng">
                                                            <label class="custom-control-label" for="customCheck5">Chất
                                                                Lỏng</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="form-group mb-0" for="customCheck6">
                                                        <div
                                                            class="checkbox-receiver d-flex align-items-center justify-content-between custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input"
                                                                id="customCheck6" name="special_features[]"
                                                                value="Từ
                                                                tính, Pin">
                                                            <label class="custom-control-label" for="customCheck6">Từ
                                                                tính, Pin</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="input-group">
                                                <div class="col-4">
                                                    <div class="form-group mb-0" for="customCheck7">
                                                        <div
                                                            class="checkbox-receiver d-flex align-items-center justify-content-between custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input"
                                                                id="customCheck7" name="special_features[]"
                                                                value="Hàng
                                                                lạnh">
                                                            <label class="custom-control-label" for="customCheck7">Hàng
                                                                lạnh</label>
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
                                                    <input type="tel" class="form-control form-reci" name="length"
                                                        id="length" placeholder="Dài(cm)" />
                                                </div>
                                                <div class="col-4 pr-0">
                                                    <input type="tel" class="form-control form-reci" name="width"
                                                        id="width" placeholder="Rộng(cm)" />
                                                </div>
                                                <div class="col-4 pr-0">
                                                    <input type="tel" class="form-control form-reci" name="height"
                                                        id="height" placeholder="Cao(cm)" />
                                                </div>
                                            </div>
                                            <div class="note-size-detail my-3 ml-3">
                                                <small class="text-muted">Quy đổi kích thước (đối với hàng hoá
                                                    cồng
                                                    kềnh)
                                                    <a href=""><strong class="txt-gray">Chi
                                                            tiết</strong></a></small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-2 d-flex mt-2">
                                            <label style="white-space: pre" for>Quy đổi</label>
                                        </div>
                                        <div class="col-10 exchange-order pr-0 d-flex">
                                            <div class="input-group col-12 px-0 w-test">
                                                <input disabled type="tel" class="form-control form-reci"
                                                    id="phone"
                                                    placeholder="Khối lượng quy đổi từ kích thước hàng hóa" />
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
                                            <input type="tel" class="form-control form-reci"
                                                id="code_order"name="code_order"
                                                placeholder="Nhập mã đơn hàng tự tạo - VTP-123" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <style>

                    </style>
                    <div class="sender h100 bg-white ml-4 card form-group">
                        <div class="card-body">
                            <div class="form-group row d-flex">
                                <div class="col-12 row">
                                    <div class="col-6 form-group">
                                        <div class="flex">
                                            <label class="collect-money mb-0 font-weight-bold text-uppercase"
                                                style="white-space: pre" for>TIỀN THU HỘ</label>

                                            <div class="method-pay my-1">
                                                <a class="cod-a" href=""><i _ngcontent-ysi-c27=""
                                                        class="fa fa-info-circle mr-1"></i>Hình thức thanh toán tiền
                                                    COD</a>
                                            </div>
                                            <div
                                                class="checkbox-receiver mb-2 d-flex align-items-center justify-content-between custom-control custom-checkbox">
                                                <input type="checkbox" name="form_ship" value="Thu hộ bằng tiền hàng"
                                                    class="custom-control-input" id="customCheck12" />
                                                <label class="custom-control-label" for="customCheck12">Thu hộ bằng tiền
                                                    hàng</label>

                                            </div>
                                            <script>
                                                function formatNumber(input) {
                                                    let value = input.value;

                                                    // Loại bỏ tất cả các ký tự không phải là số và dấu phẩy
                                                    value = value.replace(/[^0-9,]/g, '');

                                                    // Loại bỏ dấu phẩy cũ
                                                    value = value.replace(/,/g, '');

                                                    // Định dạng lại số với dấu phẩy sử dụng hàm toLocaleString với ngôn ngữ 'en-US'
                                                    value = Number(value).toLocaleString('en-US');

                                                    // Gán giá trị đã được định dạng lại vào trường input
                                                    input.value = value;
                                                }
                                            </script>
                                            <input type="tel" name="fee_ship" class="form-control form-reci"
                                                id="fee_ship" value="0" oninput="formatNumber(this);"
                                                placeholder="0 đ" />
                                        </div>
                                    </div>
                                    <div class="col-6 form-group">
                                        <div class="flex">
                                            <label class="collect-money mb-0 font-weight-bold text-uppercase"
                                                style="white-space: pre" for>NGƯỜI TRẢ CƯỚC</label>
                                        </div>
                                        <div class="form-group d-flex">
                                            <div class="input-group">
                                                <div class="custom-check d-flex align-items-center">
                                                    <input type="radio" checked id="" name="payer"
                                                        value="Người
                                                        gửi" />
                                                    <label class="custom-check-label ml-2 mb-0" for="">Người
                                                        gửi</label>
                                                </div>
                                            </div>
                                            <div class="input-group">
                                                <div class="custom-check d-flex align-items-center">
                                                    <input type="radio" id="" name="payer"
                                                        value="Người
                                                        nhận" />
                                                    <label class="custom-check-label ml-2 mb-0" for="">Người
                                                        nhận</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 row">
                                    <div class="col-6 form-group">
                                        <div class="d-flex">
                                            <label class="collect-money mr-auto font-weight-bold text-uppercase"
                                                style="white-space: pre" for>GHI CHÚ</label>
                                            <label class="collect-money cursor-pointer note-exam" style="white-space: pre"
                                                for>Ghi chú mẫu</label>

                                            <!-- <input type="tel" class="form-control form-reci" id="phone" value="0" placeholder="0 đ" /> -->
                                        </div>
                                        <div class="form-group">
                                            <textarea class="form-control" name="" id="" cols="20" rows="3"
                                                placeholder="Nhập ghi chú"></textarea>
                                        </div>
                                    </div>

                                    <div class="col-6 form-group">
                                        <div class="flex">
                                            <label class="collect- mb-0 font-weight-bold text-uppercase"
                                                style="white-space: pre" for>YÊU CẦU LẤY HÀNG</label>
                                            <div class="method-pay">
                                                <a class="cod-a" href=""><i _ngcontent-ysi-c27=""
                                                        class="fa fa-info-circle mr-1"></i>Thời gian quy định lấy
                                                    hàng</a>
                                            </div>
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="custom-check d-flex align-items-center">
                                                        <input type="radio" id="pick_request_home" name="pick_request"
                                                            value="Đến lấy hàng tại nhà" />
                                                        <label class="custom-check-label ml-2 mb-0"
                                                            for="pick_request_home">Đến lấy hàng tại nhà</label>
                                                    </div>
                                                </div>
                                                <div class="input-group">
                                                    <div class="custom-check d-flex align-items-center">
                                                        <input type="radio" id="pick_request_post_office"
                                                            name="pick_request" value="Gửi tại bưu cục" />
                                                        <label class="custom-check-label ml-2 mb-0"
                                                            for="pick_request_post_office">Gửi tại bưu cục</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="collect- mb-2 font-weight-bold text-uppercase"
                                                    style="white-space: pre-line" for> THỜI GIAN PHÁT HÀNG MONG
                                                    MUỐN</label>
                                                <div class="dropdown">
                                                    <select
                                                        class="w-100 text-left cursor-pointer form-select btn border-drop bg-lightt btn-dropdown btn-lightt dropdown-toggle d-flex align-items-center justify-content-between "
                                                        aria-label="Default select example" name="time_ship">
                                                        {{-- @php
                                                print_r($sender);
                                            @endphp --}} @foreach ($list_act as $v => $k)
                                                            <option class="option" value="{{ $k }}" selected>
                                                                {{ $k }}
                                                            </option>
                                                        @endforeach


                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 d-flex align-items-center">
                                    <div
                                        class="checkbox-receiver mb-2 d-flex align-items-center justify-content-between custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck13" />
                                        <label class="custom-control-label" for="customCheck13">Lưu thông tin đơn
                                            hàng</label>
                                    </div>

                                    <div class="icon-save-info-order 1 cursor-pointer">
                                        <i _ngcontent-rkj-c14 aria-hidden="true"
                                            class="fa fa-info-circle pl-1 txt-gray w-12-icon"
                                            mattooltip="Lưu thông tin đơn hàng" mattooltipclass="tool-tip"
                                            aria-describedby="cdk-describedby-message-1" cdk-describedby-host
                                            style="touch-action: none; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); width: 12px"></i>
                                    </div>
                                </div>
                            </div>

                            <!-- </div> -->
                        </div>
                    </div>
                </div>
                {{-- <button type="submit" class="btn btn-primary">Tạo đơn</button> --}}
            </div>
        </form>
    </div>
@endsection
