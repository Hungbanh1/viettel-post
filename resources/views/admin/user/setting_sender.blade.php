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
                        <div class="row">
                            <div class="col-2">
                                @include('layouts.sidebar_user')
                            </div>
                            <div class="col-10">
                                <div class="row bg-white">
                                    <div class="form-group col-3 mt-3">
                                        <div class="dropdown">
                                            <button
                                                class="btn w-all-order border-drop bg-lightt btn-dropdown btn-lightt dropdown-toggle d-flex align-items-center justify-content-between"
                                                type="button" id="dropdownMenuButton" data-bs-toggle="dropdown"
                                                aria-expanded="false">
                                                <div class="drop-item mr-4">Đang hoạt động</div>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="form-group col-3 mt-3 exchange-order pr-0 d-flex">
                                        <form action="{{ route('bill_manage') }}" method=""
                                            class="input-group col-12 px-0 w-test">
                                            <input type="tel" class="form-control border-r-no bg-none form-reci"
                                                name="keyword" id="phone" placeholder="Nhập tên người để lọc"
                                                value="{{ request()->input('keyword') }}" />
                                            <!-- <div class="input-group-append"> -->
                                            <button type="submit"
                                                class="input-group-text position-relative p-17 btn btn-add bg-none"><i
                                                    _ngcontent-exw-c12="" class="fa fa-search fs"></i></button>
                                        </form>
                                    </div>
                                    {{-- //modal --}}
                                    <div class="form-group col-6 justify-content-end mt-3">
                                        <div class="form-group text-center w-100">
                                            <button class="btn btn-add w-10" data-toggle="modal"
                                                data-target="#myModal"></i><i _ngcontent-tiy-c19=""
                                                    class="fa fa-plus mr-2"></i>Thêm người gửi</button>
                                        </div>
                                        <div class="modal" id="myModal">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title">Thêm mới địa chỉ lấy hàng</h4>
                                                        <button type="button" class="close"
                                                            data-dismiss="modal">&times;</button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form method="POST" action="{{ route('add_receiver') }}">
                                                            @csrf
                                                            <div class="form-group">
                                                                <label for="name">Tên <strong
                                                                        class="text-danger">*</strong></label>
                                                                <input type="text" class="form-control" name="name"
                                                                    id="name" placeholder="Nhập tên">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="phone">Số điện thoại <strong
                                                                        class="text-danger">*</strong></label>

                                                                <input type="text" class="form-control" name="phone"
                                                                    id="phone" placeholder="Nhập số điện thoại">
                                                            </div>

                                                            <div class="form-group">
                                                                <div class="row">
                                                                    <div class="col-4">
                                                                        <label class="my-2" for="city">Tỉnh/Thành
                                                                            phố<strong
                                                                                class="text-danger">*</strong></label>
                                                                        <select
                                                                            class="form-select form-control form-select-sm mb-3"
                                                                            id="city" aria-label=".form-select-sm">
                                                                            <option value="" selected>Chọn
                                                                                tỉnh
                                                                                thành</option>
                                                                        </select>
                                                                    </div>

                                                                    <div class="col-4">
                                                                        <label class="my-2"
                                                                            for="city">Quận/Huyện<strong
                                                                                class="text-danger">*</strong></label>
                                                                        <select
                                                                            class="form-select form-control form-select-sm mb-3"
                                                                            id="district" aria-label=".form-select-sm">
                                                                            <option value="" selected>Chọn
                                                                                tỉnh
                                                                                thành</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="col-4">
                                                                        <label class="my-2" for="city">Phường
                                                                            xã<strong class="text-danger">*</strong></label>
                                                                        <select
                                                                            class="form-select form-control form-select-sm mb-3"
                                                                            id="ward" aria-label=".form-select-sm">
                                                                            <option value="" selected>Chọn
                                                                                tỉnh
                                                                                thành</option>
                                                                        </select>
                                                                    </div>

                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <!-- <input class="form-control" type="tel"> -->
                                                                <input type="tel" class="form-control form-reci"
                                                                    name="address" id="address"
                                                                    placeholder="Nhập địa chỉ (số nhà/tên đường, phường/xã, quận/huyện, tỉnh/thành...)">
                                                            </div>
                                                            <div class="modal-footer">
                                                                <div class="form-group text-center w-100">
                                                                    <button class="btn btn-add w-25 "></i>Lưu</button>

                                                                </div>
                                                            </div>
                                                        </form>

                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @foreach ($sender as $item)
                                        <div class="col-6">
                                            <div class="card">
                                                <div class="card-header">
                                                    <div class="float-left">
                                                        <div class="name_sender">
                                                            <img src="{{ asset('public/img/warehouse.png') }}"
                                                                alt="">
                                                            <span class="ml-3 font-weight-bold">{{ $item->name }}</span>
                                                        </div>
                                                    </div>
                                                    <div class="float-right">
                                                        <a href="">
                                                            <img src="{{ asset('public/img/edit.png') }}" alt="">
                                                        </a>
                                                        <a href="">
                                                            <img src="{{ asset('public/img/delete.png') }}"
                                                                alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="card-body">
                                                    <div class="form-group">
                                                        <img src="{{ asset('public/img/phone.png') }}" alt="">
                                                        <span class="phone_sender">{{ $item->phone }}</span>
                                                    </div>
                                                    <div class="form-group">
                                                        <img src="{{ asset('public/img/map.png') }}" alt="">
                                                        <span class="address_sender">{{ $item->address }}</span>
                                                    </div>
                                                    <div class="form-group">
                                                        <span _ngcontent-jwl-c44="" class="ball mr-3"
                                                            style="background: green;"></span>
                                                        <span style="color:green">Đang hoạt động</span>
                                                    </div>
                                                </div>
                                                <div class="card-footer"></div>
                                            </div>
                                        </div>
                                    @endforeach


                                </div>

                            </div>

                        </div>
                        <div class="row">

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
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
                citis.options[citis.options.length] = new Option(x.Name, x.Id);
            }
            citis.onchange = function() {
                district.length = 1;
                ward.length = 1;
                if (this.value != "") {
                    const result = data.filter(n => n.Id === this.value);

                    for (const k of result[0].Districts) {
                        district.options[district.options.length] = new Option(k.Name, k.Id);
                    }
                }
            };
            district.onchange = function() {
                ward.length = 1;
                const dataCity = data.filter((n) => n.Id === citis.value);
                if (this.value != "") {
                    const dataWards = dataCity[0].Districts.filter(n => n.Id === this.value)[0].Wards;

                    for (const w of dataWards) {
                        wards.options[wards.options.length] = new Option(w.Name, w.Id);
                    }
                }
            };
        }
    </script>
@endsection
