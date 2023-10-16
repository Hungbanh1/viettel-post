<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js"></script>




    <link rel="stylesheet" href="{{ asset('public/css/index.css') }}">
    <link rel="stylesheet" href="{{ asset('public/css/order.css') }}">
    <link rel="stylesheet" href="{{ asset('public/css/bill_manage.css') }}">
    <link rel="stylesheet" href="{{ asset('public/css/order_sta.css') }}">
    <link rel="stylesheet" href="{{ asset('public/css/order_sta.css') }}">


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="icon"
        href="data:;base64,iVBORw0KGgo=" />
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUmx-1 +O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
    crossorigin="anonymous"
        referrerpolicy="no-referrer" />
    <title>Dashboard</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('public/js/index.js') }}"></script>
</head>

<body>
    @php
        $module_active = session('module_active');
        // dd($module_active);
    @endphp
    <div class="container-fluid">
        <!-- <h1>Hello</h1>- -->
        <div class="row">
            <div class="col-md-2 px-0">
                <div class="sidebar">
                    <!-- <h1>Sidebar</h1> -->
                    <div class="logo-viet bg-white">
                        <a href>
                            <img src="{{ asset('public/img/vietpost.png') }}" width="200px" height="108px" alt />
                        </a>
                    </div>
                    <script></script>

                    <nav id="sidebarMenu">
                        <ul id="ul-sidebar" class="nav flex-column">
                            <li class="nav-item "{{ $module_active == 'dashboard' ? 'active' : '' }}>
                                <a class="nav-link d-flex" href="{{ url('dashboard') }}">
                                    <!-- <div class="logo-nav-item"> -->
                                    <img class src="{{ asset('public/img/pie-chart-gray.svg') }}" alt />
                                    <span class="span-sidebar ml-4">Trang chủ</span>
                                </a>
                            </li>

                            <li class="nav-item ">
                                <a class="nav-link d-flex dropdown-toggle" href="#">
                                    <!-- <div class="logo-nav-item"> -->
                                    <img class src="{{ asset('public/img/package-gray.svg') }}" alt />
                                    <span class="span-sidebar ml-4">Tạo đơn</span>
                                    {{-- <i class="fas fa-angle-down"></i> --}}
                                </a>

                                <div class="sub-menu">
                                    <a class="nav-link d-flex" href="{{ url('order') }}">
                                        <span class="span-sidebar ml-4">Tạo đơn lẻ</span>
                                    </a>
                                    <a class="nav-link d-flex" href="{{ url('order_excel') }}">
                                        <span class="span-sidebar ml-4">Nhập excel</span>
                                    </a>
                                </div>

                            </li>
                            <li class="nav-item">
                                <a class="nav-link d-flex dropdown-toggle" href="#">
                                    <!-- <div class="logo-nav-item"> -->
                                    <img class src="{{ asset('public/img/server-gray.svg') }}" alt />
                                    <span class="span-sidebar ml-4">Quản lý</span>
                                </a>
                                <div class="sub-menu">
                                    <a class="nav-link d-flex" href="{{ route('bill_manage') }}">
                                        <span class="span-sidebar ml-4">Quản lý vận đơn </span>
                                    </a>
                                    <a class="nav-link d-flex" href="{{ route('staticts_list_reci') }}">
                                        <span class="span-sidebar ml-4">Thống kê tiền hàng</span>
                                    </a>
                                    <a class="nav-link d-flex" href="{{ route('staticts_order') }}">
                                        <span class="span-sidebar ml-4">Thống kê doanh thu </span>
                                    </a>
                                    <a class="nav-link d-flex" href="{{ route('staticts_process') }}">
                                        <span class="span-sidebar ml-4">Đơn hàng cần xử lý</span>
                                    </a>
                                    <a class="nav-link d-flex" href="{{ route('staticts_reve') }}">
                                        <span class="span-sidebar ml-4">Danh sách người nhận</span>
                                    </a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link d-flex dropdown-toggle">
                                    <!-- <div class="logo-nav-item"> -->
                                    <img class src="{{ asset('public/img/location-gray.svg') }}" alt />
                                    <span class="span-sidebar ml-4">Tra cứu</span>
                                </a>
                                <div class="sub-menu">
                                    <a class="nav-link d-flex" href="{{ route('lookup-search') }}">
                                        <span class="span-sidebar ml-4">Tra cứu bưu cục </span>
                                    </a>
                                    <a class="nav-link d-flex" href="{{ route('lookup') }}">
                                        <span class="span-sidebar ml-4">Ước tính cước phí</span>
                                    </a>

                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link d-flex" href="#">
                                    <!-- <div class="logo-nav-item"> -->
                                    <img class src="{{ asset('public/img/quan-ly-ban-hang.svg') }}" alt />
                                    <span class="span-sidebar ml-4">Quản lý bán hàng</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link d-flex" href="#">
                                    <!-- <div class="logo-nav-item"> -->
                                    <img class src="{{ asset('public/img/tien-ich.svg') }}" width="20px"
                                        height="20px" alt />
                                    <span class="span-sidebar ml-4">Tiện ích</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link d-flex" href="{{ route('setting_acc') }}">
                                    <!-- <div class="logo-nav-item"> -->
                                    <img class src="{{ asset('public/img/settings-gray.svg') }}" alt />
                                    <span class="span-sidebar ml-4">Cài đặt tài khoản</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link d-flex" href="#">
                                    <!-- <div class="logo-nav-item"> -->
                                    <img class src="{{ asset('public/img/life-buoy-gray.svg') }}" alt />
                                    <span class="span-sidebar ml-4">Hỏi đáp</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="col-md-10 px-0">
                <div id="header" class="px-0 text-center justify-content-between d-flex shadow bg-white col-12">
                    <div class="header-search w-50">
                        <div class="input-group bg-light w-100 rounded my-10">
                            <i _ngcontent-gdu-c7 class="fa fa-search"></i>
                            <input type="search" class="form-control form-search rounded"
                                placeholder="Tra cứu đơn hàng" aria-label="Search" aria-describedby="search-addon" />
                        </div>
                    </div>
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <div class="container-fluid">
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul id="ul-info" class="navbar-nav me-auto mb-2 mb-lg-0 align-items-center">
                                    <li class="nav-ite">
                                        <div class="" aria-current="page" href="">
                                            <span class="text-muted">Thông báo</span>
                                        </div>
                                    </li>
                                    <li class="nav-ite position-relative">
                                        <img class="ico-notify" src="public/img/bell.svg" alt />
                                        <span class="num-not">49</span>
                                    </li>
                                    <li id="phoneNumber" class="nav-ite">
                                        <span class="font-weight-bold">0909654321</span>
                                        {{-- {{ Auth::user()->name }} --}}

                                    </li>

                                    <div class="dropdown">
                                        <li class="nav-ite" type="button" id="dropdownMenuButton user"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <img class="ico-notify" src="public/img/icon-user.png" alt />
                                            <i _ngcontent-gaw-c7="" style="width: 8px; height: 14px"
                                                class="fa fa-caret-down ml-2"></i>

                                        </li>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a href="{{ route('setting_acc') }}" class="dropdown-item"> Cài đặt
                                                tài khoản </a>
                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                class="d-none">
                                                @csrf
                                            </form>
                                        </div>
                                    </div>


                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
                <div id="wp-content">

                    @yield('content')
                </div>

            </div>
        </div>

        <!-- Footer -->
        <footer class="mt-4">
            <div class="text-center">
                <p>&copy; 2023 Tên Công Ty. Tất cả quyền được bảo lưu.</p>
            </div>
        </footer>
    </div>
</body>

</html>
