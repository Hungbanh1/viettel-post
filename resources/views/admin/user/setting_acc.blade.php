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
                                            <div class="font-weight-bold mt-3">THÔNG TIN TÀI KHOẢN</div>
                                        </div>
                                        <div class="form-group col-12">
                                            <label class="my-2" for="">Tên khách hàng, công ty</label>
                                            <div class="input-group pr-0 d-flex">
                                                <input type="tel" class="form-reci form-control w-100" id="phone"
                                                    placeholder="" />
                                            </div>
                                        </div>
                                        <div class="form-group col-12">
                                            <label class="my-2" for="">Email</label>
                                            <div class="form-group">
                                                <div class="input-group pr-0 d-flex">
                                                    <!-- <div class="input-group col-6 px-0 w-test"> -->
                                                    <!-- <input type="tel" class="form-control form-reci" id="phone" placeholder="Dài(cm)" /> -->
                                                    <input type="tel" class="form-reci form-control w-89" disabled
                                                        id="phone" placeholder="truongvanquynh1992@gmail.com" />
                                                    <div class="input-group-append">
                                                        <button class="btn btn-primary ft-14">Thay đổi</button>
                                                    </div>
                                                    <!-- </div> -->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group col-12">
                                            <label class="my-2" for="">Số điện thoại</label>
                                            <div class="form-group">
                                                <div class="input-group pr-0 d-flex">
                                                    <!-- <div class="input-group col-6 px-0 w-test"> -->
                                                    <!-- <input type="tel" class="form-control form-reci" id="phone" placeholder="Dài(cm)" /> -->
                                                    <input type="tel" class="form-reci form-control w-89" disabled
                                                        id="phone" placeholder="09794843242" />
                                                    <div class="input-group-append">
                                                        <button class="btn btn-primary ft-14">Thay đổi</button>
                                                    </div>
                                                    <!-- </div> -->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group col-12">
                                            <label class="my-2" for="">Ngày sinh</label>
                                            <div class="input-group pr-0 d-flex">
                                                <input type="date" class="form-reci form-control w-100" id="phone"
                                                    placeholder="" />
                                            </div>
                                        </div>
                                        <div class="form-group col-12">
                                            <label class="my-2" for="">Chứng minh thư/ Mã số thuế</label>
                                            <div class="input-group pr-0 d-flex">
                                                <input type="tel" class="form-reci form-control w-100" id="phone"
                                                    placeholder="" />
                                            </div>
                                        </div>
                                        <div class="form-group col-12">
                                            <label class="my-2" for="">Địa chỉ thường trú/ Địa chỉ xuất hóa
                                                đơn</label>
                                            <div class="input-group pr-0 d-flex">
                                                <input type="tel" value="491C2" class="form-reci form-control w-100"
                                                    id="phone" placeholder="" />
                                            </div>
                                        </div>

                                        <div class="form-group col-12">
                                            <div class="row">
                                                <div class="col-4">
                                                    <label class="my-2" for="city">Tỉnh/Thành phố</label>
                                                    <select class="form-select form-control form-select-sm mb-3"
                                                        id="city" aria-label=".form-select-sm">
                                                        <option value="" selected>Chọn tỉnh thành</option>
                                                    </select>
                                                </div>

                                                <div class="col-4">
                                                    <label class="my-2" for="city">Tỉnh/Thành phố</label>
                                                    <select class="form-select form-control form-select-sm mb-3"
                                                        id="district" aria-label=".form-select-sm">
                                                        <option value="" selected>Chọn tỉnh thành</option>
                                                    </select>
                                                </div>


                                                <div class="col-4">
                                                    <label class="my-2" for="city">Tỉnh/Thành phố</label>
                                                    <select class="form-select form-control form-select-sm mb-3"
                                                        id="ward" aria-label=".form-select-sm">
                                                        <option value="" selected>Chọn tỉnh thành</option>
                                                    </select>
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


                                        <div class="form-group col-12">
                                            <div class="input-group pr-0 d-flex">
                                                <input type="tel" value="Đỗ Xuân Hợp"
                                                    class="form-reci form-control w-100" id="phone" placeholder="" />
                                            </div>
                                        </div>

                                        <div class="form-group col-12">
                                            <div class="input-group pr-0 d-flex">
                                                <input type="tel" value="491C2" class="form-reci form-control w-100"
                                                    id="phone" placeholder="" />
                                            </div>
                                        </div>
                                        <div class="form-group col-12">
                                            <div class="method-pay my-1">
                                                <div class="cod-a">Chuyển đổi loại dịch vụ<i _ngcontent-ysi-c27=""
                                                        class="fa fa-info-circle ml-2 text-primary"></i></div>
                                            </div>
                                        </div>
                                        <div class="form-group col-6">
                                            <div class="form-group">
                                                <div class="dropdown">
                                                    <button
                                                        class="btn border-drop w-100 form-input bg-lightt btn-dropdown btn-lightt dropdown-toggle d-flex align-items-center justify-content-between"
                                                        type="button" id="dropdownMenuButton" data-bs-toggle="dropdown"
                                                        aria-expanded="false">
                                                        <div class="drop-item mr-4">Chuyển phát trong nước (Miễn phí thu
                                                            hộ)</div>
                                                    </button>
                                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                        <!-- Tạo thanh tìm kiếm bằng input -->
                                                        <li>
                                                            <input class="form-control" type="text"
                                                                placeholder="Tìm kiếm" aria-label="Search"
                                                                id="dropdown-search" />
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
