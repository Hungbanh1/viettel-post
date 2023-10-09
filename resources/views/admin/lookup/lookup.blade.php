@extends('layouts.admin')
@section('content')
<div class="excel-online">
    <div class="main-content">
        <div class="d-flex justify-content-between">
            <h4 class="title-header font-weight-bold">Ước tính cước phí</h4>
        </div>
        <div class="main-excel h-100 col-12">
            <div class="excel-input card">
                <div class="card-body bg-white pt-3">
                    <form action="">
                        <div class="row input-group">
                            <div class="h1-sender d-flex col-12">
                                <img src="public/img/package.svg" alt />
                                <span class="pt-1 pl-1 font-weight-bold">DỊCH VỤ</span>
                            </div>
                            <div class="col-6 mt-2">
                                <div class="form-group">
                                    <div class="dropdown">
                                        <button class="btn border-drop w-100 form-input bg-lightt btn-dropdown btn-lightt dropdown-toggle d-flex align-items-center justify-content-between" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                            <div class="drop-item mr-4">Chuyển phát trong nước (Miễn phí thu hộ)</div>
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
                        <div class="row input-group">
                            <!-- //nguoi guiu -->
                            <div class="col-6">
                                <div class="h1-sender d-flex">
                                    <img src="public/img/user-forward.svg" alt />
                                    <span class="pt-1 pl-1 font-weight-bold"> NGƯỜI GỬI</span>
                                </div>
                                <div class="form-group">
                                    <label class="my-2" for="">Tỉnh/Thành phố</label>
                                    <div class="form-group">
                                        <div class="dropdown">
                                            <button class="btn border-drop w-100 form-input bg-lightt btn-dropdown btn-lightt dropdown-toggle d-flex align-items-center justify-content-between" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                                <div class="drop-item mr-4">Tỉnh/Thành phố</div>
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
                                <div class="form-group">
                                    <label class="my-2" for="">Quận/Huyện</label>
                                    <div class="form-group">
                                        <div class="dropdown">
                                            <button class="btn border-drop w-100 form-input bg-lightt btn-dropdown btn-lightt dropdown-toggle d-flex align-items-center justify-content-between" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                                <div class="drop-item mr-4">Quận/Huyện</div>
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
                            <!-- //nguoinhan -->
                            <div class="col-6">
                                <div class="h1-sender d-flex">
                                    <img src="public/img/user-forward.svg" alt />
                                    <span class="pt-1 pl-1 font-weight-bold"> NGƯỜI NHẬN</span>
                                </div>
                                <div class="form-group">
                                    <label class="my-2" for="">Tỉnh/Thành phố</label>
                                    <div class="form-group">
                                        <div class="dropdown">
                                            <button class="btn border-drop w-100 form-input bg-lightt btn-dropdown btn-lightt dropdown-toggle d-flex align-items-center justify-content-between" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                                <div class="drop-item mr-4">Tỉnh/Thành phố</div>
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
                                <div class="form-group">
                                    <label class="my-2" for="">Quận/Huyện</label>
                                    <div class="form-group">
                                        <div class="dropdown">
                                            <button class="btn border-drop w-100 form-input bg-lightt btn-dropdown btn-lightt dropdown-toggle d-flex align-items-center justify-content-between" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                                <div class="drop-item mr-4">Quận/Huyện</div>
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
                            <div class="col-12 px-0">
                                <div class="h1-sender pl-3">
                                    <img src="public/img/user-forward.svg" alt />
                                    <span class="pt-1 pl-1 font-weight-bold">THÔNG TIN BƯU PHẨM</span>
                                </div>
                                <div class="row mx-0">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label class="my-2" for="">Khối lượng bưu phẩm</label>
                                            <div class="form-group">
                                                <div class="input-group pr-0 d-flex">
                                                    <!-- <div class="input-group col-6 px-0 w-test"> -->
                                                    <!-- <input type="tel" class="form-control form-reci" id="phone" placeholder="Dài(cm)" /> -->
                                                    <input type="tel" class="form-reci form-control w-89" id="phone" placeholder="" />
                                                    <div class="input-group-append">
                                                        <span class="input-group-text ft-14">Gram</span>
                                                    </div>
                                                    <!-- </div> -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label class="my-2" for="">Số tiền thu hộ</label>
                                            <div class="form-group">
                                                <div class="input-group pr-0 d-flex">
                                                    <input type="tel" class="form-reci form-control w-100" id="phone" placeholder="" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group col-12">
                                <button class="btn btn-add">Tra cứu</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <style>
            .h-auto {
                height: auto;
            }
        </style>
        <div class="sender h-auto bg-white mx-4 card form-group mt-4">
            <div class="header-sender d-flex align-items-center justify-content-between card-header py-3 w-100">
                <div class="h1-sender d-flex">
                    <label style="line-height: 2" class="pl-1 font-weight-bold mb-0">Dịch vụ của chúng tôi</label>
                </div>
            </div>
            <div class="card-body">
                <!--  -->
                <!--  -->
            </div>
        </div>
    </div>
</div>
@endsection