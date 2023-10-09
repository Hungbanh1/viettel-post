@extends('layouts.admin')
@section('content')
<div class="excel-online">
    <div class="main-content">
        <div class="d-flex justify-content-between">
            <h4 class="title-header font-weight-bold">Báo cáo sản lượng địa phương thống kê theo doanh thu</h4>
            <div class="d-flex title-header mr-5">
                <div class="form-group">
                    <div class="dropdown">
                        <button class="btn w-order border-drop bg-lightt btn-dropdown btn-lightt dropdown-toggle d-flex align-items-center justify-content-between" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                            <div class="drop-item mr-4">Địa phương</div>
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
                <div class="form-group col-2 px-0 pl-3">
                    <div class="calendar">
                        <input type="date" />
                    </div>
                </div>
            </div>
        </div>

        <div class="main-excel h-100 col-12 px-0">
            <div class="excel-input ml-4 border-none">
                <div class="card-body pt-3">
                    <div class="row">
                        <div class="col-4 form-group pl-0">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h5 class="card-title">Tổng số đơn hàng</h5>
                                    <p class="card-text bigNumber">
                                        <a href="">0</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-4 form-group pl-0">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h5 class="card-title">Tổng số tỉnh</h5>
                                    <p class="card-text bigNumber">
                                        <a href="" style="color: #00c5bc">0 ₫</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-4 form-group pl-0">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h5 class="card-title">Tống số doanh thu</h5>

                                    <p class="card-text bigNumber">
                                        <a href="" style="color: #facc14">0 ₫</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-5">
                        <div class="col-6"></div>
                        <div class="col-6">
                            <i class="note-refer">* Thông tin này chỉ mang tính chất tham khảo.</i>
                            <div class="form-group mb-0 table-sta w-100">
                                <table class="sta_order w-100 bg-white">
                                    <thead role="rowgroup">
                                        <tr role="rowgroup">
                                            <th class="pl-tt" style="color: #000">STT</th>
                                            <th class="pl-3 text-center" style="color: #000">Tên tỉnh</th>
                                            <th class="pl-3 text-center" style="color: #000">Số đơn</th>
                                            <th class="pl-3 text-center" style="color: #000">Doanh thu</th>
                                            <th class="text-center pr-4" style="color: #000">Tỉ lệ %</th>
                                        </tr>
                                    </thead>
                                </table>

                                <div class="bg-none empty-record">Không có bản ghi nào</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection