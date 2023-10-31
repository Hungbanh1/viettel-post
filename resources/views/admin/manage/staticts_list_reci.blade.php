@extends('layouts.admin')
@section('content')
    <div class="excel-online bg-none">
        <div class="main-content">
            <div class="row justify-content-between mx-0">
                <div class="form-group col-8 mb-0 text-left">
                    <label class="title-header font-weight-bold">DANH SÁCH NGƯỜI NHẬN</label>
                </div>
                <div class="form-group col-4 mb-0 text-right mt-3">
                    <button class="btn btn-add-cus"><i _ngcontent-pqj-c26="" class="fa fa-plus-circle mr-1"></i>Thêm
                        mới</button>
                </div>
            </div>
            <div class="table-create-order d-flex mt-2 ml-2 font-weight-bold row">
                <div class="form-group col-md-3">
                    <div class="dropdown">
                        <button
                            class="btn w-order border-drop bg-lightt btn-dropdown btn-lightt dropdown-toggle d-flex align-items-center justify-content-between"
                            type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                            <div class="drop-item mr-4">Danh sách người nhận</div>
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <!-- Tạo thanh tìm kiếm bằng input -->
                            <li>
                                <input class="form-control" type="text" placeholder="Tìm kiếm" aria-label="Search"
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
                <div class="form-group col-md-3">
                    <div class="">
                        <!-- <input class="form-control" type="tel"> -->
                        <input type="tel" class="form-control form-reci" id="phone"
                            placeholder="Nhập tên/số điện thoại" />
                    </div>
                </div>
                <div class="form-group col-2">
                    <button class="position-relative h-35 p-17 btn btn-add">Tìm kiếm</button>
                </div>
            </div>
            <style>
                .pl-test {
                    padding-left: 2%;
                }
            </style>
            <div class="form-group col-12 ml-1 text-center mb-0 w-100">
                <table class="sta_order w-100 bg-white">
                    <thead role="rowgroup">
                        <tr role="rowgroup">
                            <th class="pl-test text-center" style="color: #000">STT</th>
                            <th class="pl-3 text-center" style="color: #000">TÊN NGƯỜI NHẬN</th>
                            <th class="pl-3 text-center" style="color: #000">THẺ TAG</th>
                            <th class="pl-3 text-center" style="color: #000">TỶ LỆ GIAO THÀNH CÔNG</th>
                            <th class="text-center pr-4" style="color: #000">ĐỊA CHỈ</th>
                            <th class="text-center pr-4" style="color: #000">THAO TÁC</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $t = 0;
                        @endphp
                        @foreach ($all as $item)
                            @php
                                $t++;
                            @endphp

                            <tr>
                                <th class="pl-test" style="color: #000">{{ $t }}</th>
                                <th class="pl-3 text-center" style="color: #000">{{ $item->name }}</th>
                                <th class="pl-3 text-center" style="color: #000"></th>
                                <th class="pl-3 text-center" style="color: #000"><img
                                        src="{{ asset('public/img/Show.svg') }}" alt=""></th>
                                <th class="text-center pr-4" style="color: #000">{{ $item->address }}</th>
                                <th class="text-center pr-4" style="color: #000"><label class="vtp-btn-other-tab"
                                        for=""><i _ngcontent-hqc-c12="" class="fa fa-bars"></i></label></th>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
@endsection
