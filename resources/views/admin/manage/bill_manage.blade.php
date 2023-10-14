@extends('layouts.admin')
@section('content')
    <div class="excel-online">
        <div class="main-content">
            <div class="d-flex justify-content-between">
                <h4 class="title-header font-weight-bold">Quản lý vận đơn</h4>
                <div class="d-flex title-header mr-5">
                    <div class="form-group">
                        <div class="dropdown">
                            <button
                                class="btn w-order border-drop bg-lightt btn-dropdown btn-lightt dropdown-toggle d-flex align-items-center justify-content-between"
                                type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                <div class="drop-item mr-4">Đơn hàng gửi</div>
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
                </div>
            </div>
            <div class="main-excel h-100 col-12 px-0">
                <div class="excel-input bg-white">
                    <div class="card-body pt-3">
                        <div class="row">
                            <div class="form-group col-3 exchange-order pr-0 d-flex">
                                {{-- <div > --}}
                                <form action="{{ route('bill_manage') }}" method=""
                                    class="input-group col-12 px-0 w-test">
                                    <input type="tel" class="form-control border-r-no bg-none form-reci" name="keyword"
                                        id="phone" placeholder="Tìm đơn hàng, số điện thoại"
                                        value="{{ request()->input('keyword') }}" />
                                    <!-- <div class="input-group-append"> -->
                                    <button type="submit"
                                        class="input-group-text position-relative p-17 btn btn-add bg-none"><i
                                            _ngcontent-exw-c12="" class="fa fa-search fs"></i></button>
                                </form>

                                <!-- </div> -->
                                {{-- </div> --}}
                            </div>
                            <div class="form-group col-2 px-0 pl-5">
                                <div class="calendar">
                                    <input type="date" />
                                </div>
                            </div>

                            <div class="form-group col-2">
                                <div class="dropdown">
                                    <button
                                        class="btn w-all-order border-drop bg-lightt btn-dropdown btn-lightt dropdown-toggle d-flex align-items-center justify-content-between"
                                        type="button" id="dropdownMenuButton" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        <div class="drop-item mr-4">Tất cả kho hàng</div>
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
                            </div>
                            <div class="form-group col-2">
                                <div class="dropdown">
                                    <button
                                        class="btn w-all-order border-drop bg-lightt btn-dropdown btn-lightt dropdown-toggle d-flex align-items-center justify-content-between"
                                        type="button" id="dropdownMenuButton" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        <div class="drop-item mr-4 cl-f2">Người trả cước</div>
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
                            </div>
                        </div>
                    </div>

                    <div class="card-body pt-0">
                        <div class="row">
                            <div class="col-12">
                                <button class="btn btn-print mr-2"><img _ngcontent-cpo-c12="" width="15px"
                                        height="15px" src="public/img/printer-p.svg" /><span _ngcontent-cpo-c12=""> In
                                        đơn</span></button>
                                <button class="btn bg-i-excel btn-print mr-2"><img _ngcontent-cpo-c12="" width="15px"
                                        height="15px" src="public/img/printer-p.svg" /><span _ngcontent-cpo-c12=""> Xuất
                                        excel</span></button>
                                <button class="btn bg-e-excel btn-print mr-2"><i _ngcontent-cpo-c12=""
                                        class="fa fa-upload mr-1"></i><span _ngcontent-cpo-c12=""> Nhập
                                        excel</span></button>
                            </div>
                        </div>
                    </div>

                    <div class="card border-none border-red-bot border-radius-none">
                        <ul class="d-flex card-body">
                            <li
                                class="text-center total-order bg-f8 w-238 pt-4 position-relative cursor-pointer active_order">
                                <div class="text-center mb-2">
                                    <span class="img-bill-manage"><img src="public/svg/total-order.svg"
                                            alt="" /></span>
                                    <strong class="ml-3">Tổng số đơn</strong>
                                </div>
                                <span class="">17 đơn</span>
                            </li>
                            <li class="text-center total-order bg-f8 w-238 pt-4 position-relative cursor-pointer">
                                <div class="text-center mb-2">
                                    <span class="img-bill-manage"><img style="color: red"
                                            src="public/svg/success-order.svg" alt="" /></span>
                                    <strong class="ml-3">Lấy thành công</strong>
                                </div>
                                <span class="">0 đơn</span>
                            </li>
                            <li class="text-center total-order bg-f8 w-238 pt-4 position-relative cursor-pointer">
                                <div class="text-center mb-2">
                                    <span class="img-bill-manage"><img style="color: red" src="public/svg/wait-order.svg"
                                            alt="" /></span>
                                    <strong class="ml-3">Chờ lấy</strong>
                                </div>
                                <span class="">0 đơn</span>
                            </li>
                            <li class="text-center total-order bg-f8 w-238 pt-4 position-relative cursor-pointer">
                                <div class="text-center mb-2">
                                    <span class="img-bill-manage"><img style="color: red"
                                            src="public/svg/cancel-order.svg" alt="" /></span>
                                    <strong class="ml-3">Hủy lấy</strong>
                                </div>
                                <span class="">17 đơn</span>
                            </li>
                            <li class="text-center total-order bg-f8 w-238 pt-4 position-relative cursor-pointer">
                                <div class="text-center mb-2">
                                    <span class="img-bill-manage"><img style="color: red" src="public/svg/sket-order.svg"
                                            alt="" /></span>
                                    <strong class="ml-3">Đơn nháp</strong>
                                </div>
                                <span class="">0 đơn</span>
                            </li>
                        </ul>
                    </div>

                    <style></style>
                    <div class="head-tab-group card border-radius-none">
                        <div class="header-tab d-flex ">
                            <div class="main-container-group card-body py-0"
                                style="display: flex !important; align-items: center">
                                <div class="pagi-chevon-left">
                                    <div class="chevon-left"></div>
                                </div>
                                <div class="main-cont-group-list">
                                    <div class="item-main-cont cursor-pointer w-100 position-relative">
                                        <button class="btn-cus no-border w-150">
                                            <i _ngcontent-nrn-c25="" class="ic-square mr-2"
                                                style="background-color: rgb(238, 0, 51)"></i>
                                            <span class="font-weight-bold">Tất cả <span
                                                    class="text-danger">(17)</span></span>
                                        </button>
                                    </div>
                                </div>
                                <div class="main-cont-group-list">
                                    <div class="item-main-cont cursor-pointer w-100 position-relative">
                                        <button class="btn-cus no-border w-150">
                                            <i _ngcontent-nrn-c25="" class="ic-square mr-2"
                                                style="background-color: rgb(34, 124, 158)"></i>
                                            <span class="font-weight-bold">Đã tiếp nhận <span
                                                    class="text-danger">(17)</span></span>
                                        </button>
                                    </div>
                                </div>
                                <div class="main-cont-group-list">
                                    <div class="item-main-cont cursor-pointer w-100 position-relative">
                                        <button class="btn-cus no-border w-150">
                                            <i _ngcontent-nrn-c25="" class="ic-square mr-2"
                                                style="background-color: rgb(19, 178, 163)"></i>
                                            <span class="font-weight-bold">Đang lấy hàng <span
                                                    class="text-danger">(17)</span></span>
                                        </button>
                                    </div>
                                </div>
                                <div class="main-cont-group-list">
                                    <div class="item-main-cont cursor-pointer w-100 position-relative">
                                        <button class="btn-cus no-border w-150">
                                            <i _ngcontent-nrn-c25="" class="ic-square mr-2"
                                                style="background-color: rgb(75, 124, 125)"></i>

                                            <span class="font-weight-bold">Đã lấy hàng <span
                                                    class="text-danger">(17)</span></span>
                                        </button>
                                    </div>
                                </div>
                                <div class="main-cont-group-list">
                                    <div class="item-main-cont cursor-pointer w-100 position-relative">
                                        <button class="btn-cus no-border w-150">
                                            <i _ngcontent-nrn-c25="" class="ic-square mr-2"
                                                style="background-color: rgb(75, 124, 125)"></i>
                                            <span class="font-weight-bold">Đang vận chuyển <span
                                                    class="text-danger">(17)</span></span>
                                        </button>
                                    </div>
                                </div>
                                <div class="main-cont-group-list">
                                    <div class="item-main-cont cursor-pointer w-100 position-relative">
                                        <button class="btn-cus no-border w-150">
                                            <i _ngcontent-nrn-c25="" class="ic-square mr-2"
                                                style="background-color: rgb(235, 150, 10)"></i>

                                            <span class="font-weight-bold">Đang giao hàng <span
                                                    class="text-danger">(17)</span></span>
                                        </button>
                                    </div>
                                </div>
                                <div class="main-cont-group-list">
                                    <div class="item-main-cont cursor-pointer w-100 position-relative">
                                        <button class="btn-cus no-border w-150">
                                            <i _ngcontent-nrn-c25="" class="ic-square mr-2"
                                                style="background-color: rgb(165, 49, 62)"></i>
                                            <span class="font-weight-bold">Chờ phát lại <span
                                                    class="text-danger">(17)</span></span>
                                        </button>
                                    </div>
                                </div>
                                <div class="main-cont-group-list">
                                    <div class="item-main-cont cursor-pointer w-100 position-relative">
                                        <button class="btn-cus no-border w-150">
                                            <i _ngcontent-nrn-c25="" class="ic-square mr-2"
                                                style="background-color: rgb(165, 49, 62)"></i>
                                            <span class="font-weight-bold">Tất cả <span
                                                    class="text-danger">(17)</span></span>
                                        </button>
                                    </div>
                                </div>
                                <div class="pagi-chevon-left">
                                    <div class="chevon-right"></div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <table role="grid" class="table_order my-1 bbg-table">
                                <thead role="rowgroup" class="table_th_order">
                                    <tr role="row" class="">
                                        <th class="w-3" role="columnheader"><button
                                                class="btn btn-primary ml-3">Chọn</button></th>
                                        <th class="w-3" role="columnheader">THAO TÁC</th>
                                        <th class="w-3" role="columnheader">MÃ VẬN ĐƠN</th>
                                        <th class="w-3" role="columnheader">MÃ ĐƠN HÀNG</th>
                                        <th class="w-3" role="columnheader">NGƯỜI GỬI</th>
                                        <th class="w-3" role="columnheader">NGƯỜI NHẬN</th>
                                        <th class="w-3" role="columnheader">HÀNG HÓA</th>
                                        <th class="w-3" role="columnheader">TRẠNG THÁI</th>
                                        <th class="w-3" role="columnheader">NGÀY LẬP</th>
                                        <th class="w-3" role="columnheader">THU HỘ</th>
                                        <th class="w-3" role="columnheader">TỔNG CƯỚC</th>
                                        <th class="w-3" role="columnheader">IN/CHƯA IN</th>
                                    </tr>
                                </thead>

                                <tbody role="rowgroup" class="table_tbody_order bbt-table-tbody">

                                    @foreach ($bills as $item)
                                        <tr role="row" class="bbt-table">
                                            <td role="gridcell">
                                                <div
                                                    class="checkbox-receiver pl-5 pb-3 d-flex align-items-center justify-content-between custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input"
                                                        id="customCheck_order" />
                                                    <label class="custom-control-label" for="customCheck_order"></label>
                                                </div>
                                            </td>
                                            <td role="gridcell">
                                                <label class="vtp-btn-other-tab" for=""><i _ngcontent-hqc-c12=""
                                                        class="fa fa-bars"></i></label>
                                            </td>
                                            <td role="gridcell">
                                                <div class="bill-order-table">
                                                    <span class="green-text-order"> {{ $item->code_order }} </span>
                                                </div>
                                                <a class="purple-text-order"
                                                    href="{{ route('detail_order', $item->order_id) }}">Xem chi tiết</a>
                                            </td>
                                            <td role="gridcell">
                                                <div style="color: rgb(102, 102, 102) !important"
                                                    class="code-order-table">
                                                    230922-00002-00004</div>
                                            </td>
                                            <td role="gridcell">
                                                <div class="sender-order font-weight-bold">{{ $item->receiver }} </div>
                                            </td>
                                            <td role="gridcell">
                                                <div class="receiver-order">
                                                    <div class="name-receiver font-weight-bold">{{ $item->sender }}</div>
                                                    <div class="phone-number-rece">{{ $item->phone_sender }}</div>
                                                </div>
                                            </td>
                                            <td role="gridcell">
                                                <div class="product-name-order font-weight-bold">{{ $item->product_name }}
                                                </div>
                                            </td>
                                            <td role="gridcell">
                                                <div class="status-order">
                                                    <label _ngcontent-hqc-c12="" class="vtp-label-status"
                                                        style="background-color: rgb(227, 175, 133)"> Shop hủy lấy </label>
                                                </div>
                                            </td>
                                            <td role="gridcell">
                                                <div class="date-order">{{ $item->created_at }}</div>
                                            </td>
                                            <td role="gridcell">
                                                <div class="cash-order green-text-order">0 ₫</div>
                                            </td>
                                            <td role="gridcell">
                                                <div class="total-fare-order green-text-order">{{ $item->total_fee }}</div>
                                            </td>
                                            <td role="gridcell">
                                                @if ($item->print == 'Đã in')
                                                    <div class="print-status-order">
                                                        <label style="background-color: #00cd90;"
                                                            class="vtp-label-status">{{ $item->print }}</label>
                                                    </div>
                                                @else
                                                    <div class="print-status-order">
                                                        <label style="background-color: rgb(250, 111, 111)"
                                                            class="vtp-label-status">{{ $item->print }}</label>
                                                    </div>
                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
