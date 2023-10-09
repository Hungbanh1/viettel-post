@extends('layouts.admin')
@section('content')
<div class="excel-online">
    <div class="main-content">
        <div class="d-flex justify-content-between">
            <h4 class="title-header font-weight-bold">Đơn hàng cần xử lý</h4>
        </div>
        <div class="main-excel h-100 col-12">
            <div class="excel-input card bg-white">
                <div class="card-body pt-3">
                    <div class="row">
                        <div class="table-create-order d-flex mt-4 ml-5 font-weight-bold">
                            <div class="create-in">
                                <span class="mr-5">Cần xử lý<span class="text-danger ml-1">(0)</span></span>
                            </div>
                            <div class="create-out">
                                <span class="ml-5">Đã xử lý<span class="text-danger ml-1">(0)</span></span>
                            </div>
                        </div>
                    </div>

                    <div class="card-body pt-0">
                        <div class="row form-group mt-2">
                            <div class="col-9 mt-2 pl-0">
                                <div class="nav nav-tabs border-bottom-0">
                                    <a class="nav-item nav-item-bg-gray active-bg-gray w-22 nav-active-item text-center w-0 mr-1 txt-gray" style="border: 1px solid rgb(222, 226, 230) !important; padding: 8px 14px"><span class="">Giao hàng 1 phần (0)</span></a>
                                    <a class="nav-item nav-item-bg-gray w-auto text-center w-0 mr-1 txt-gray" style="border: 1px solid rgb(222, 226, 230) !important; padding: 8px 14px"><span class="">Chờ xử lý (0)</span></a>
                                    <a class="nav-item w-auto text-center w-0 mr-1" style="border: 1px solid rgb(222, 226, 230) !important; padding: 8px 14px" href=""><span class="txt-gray">Sửa COD</span></a>
                                    <a class="nav-item w-auto text-center w-0 mr-1" style="border: 1px solid rgb(222, 226, 230) !important; padding: 8px 14px" href=""><span class="txt-gray">Sửa thông tin</span></a>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="calendar w-100">
                                    <input class="w-100" type="date" />
                                </div>
                            </div>
                            <div class="form-group col-12 mt-3 text-right">
                                <div class="btn-confirm">
                                    <button class="btn btn-success">Đồng ý</button>
                                    <button class="btn btn-danger">Từ chối</button>
                                </div>
                            </div>
                            <style></style>
                            <div class="table-responsive form-group">
                                <table class="text-center">
                                    <thead role="rowgroup" class="custom-thead-responsive">
                                        <tr>
                                            <th><i class="fa-solid fa-arrow-down"></i></th>
                                            <th _ngcontent-dmv-c14="" scope="col" style="width: 200px">Mã đơn</th>
                                            <th _ngcontent-dmv-c14="" scope="col" style="width: 200px">Người nhận</th>
                                            <th _ngcontent-dmv-c14="" scope="col" style="width: 200px">Địa chỉ</th>
                                            <th _ngcontent-dmv-c14="" scope="col" style="width: 200px">Hàng hóa</th>
                                            <th _ngcontent-dmv-c14="" scope="col" style="width: 200px">Hàng hóa sẽ giao</th>
                                            <th _ngcontent-dmv-c14="" scope="col" style="width: 200px">Hàng hóa hoàn về</th>
                                            <th _ngcontent-dmv-c14="" scope="col" style="width: 200px">Thao tác</th>
                                        </tr>
                                    </thead>
                                    <tbody role="rowgroup">
                                        <tr role="row">
                                            <td class="tect-center" colspan="8">Không có bản ghi nào</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row form-group">
                            <div class="col-12"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection