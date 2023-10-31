   {{-- @extends('layouts.admin')
   @section('sidebar_user') --}}
   <div class="bg-white font-weight-bold">
       <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
       <script>
           // Đợi tài liệu HTML tải hoàn thành
           $(document).ready(function() {
               // Bắt đầu bằng việc xóa lớp "active" từ tất cả các thẻ <a>
               //        $('.list-group-item').on('click', function() {
               //            e.preventDefault(); // Ngăn chuyển hướng mặc định của thẻ <a>
               //            $('.list-group-item').removeClass('active-acc');

               //            // Thêm lớp "active" cho thẻ <a> hiện tại
               //            $(this).addClass('active-acc');
               //        });
               //        $(".list-group-item").click(function() {
               //            $(this).parent().find("active-acc").removeClass("active-acc")
               //                .addClass("active-acc");
               //            $(this).parent().addClass("active-acc");
               //        });
           });
       </script>
       <div class="list-group">
           <a class="list-group-item active-acc px-2 text-muted pl-3" href="{{ route('setting_acc') }}"><i
                   _ngcontent-jhi-c12="" class="fa fa-user"></i> Thông tin tài khoản </a>
           <a class="list-group-item px-2 text-muted pl-3" href="{{ route('change_password') }}"><i _ngcontent-jhi-c12=""
                   class="fa fa-lock"></i>
               Đổi mật khẩu tài khoản
           </a>
           <a class="list-group-item px-2 text-muted pl-3" href="{{ route('add_account') }}"><i _ngcontent-jhi-c12=""
                   class="fa fa-user"></i>Chuyển tài khoản </a>
           <a class="list-group-item px-2 text-muted pl-3" href="{{ route('setting_info_send') }}"><i
                   _ngcontent-jhi-c12="" class="fa fa-address-card"></i> Cài đặt thông tin
               người gửi </a>
           <a class="list-group-item px-2 text-muted pl-3" href="{{ route('config_user') }}"><i _ngcontent-jhi-c12=""
                   class="fa fa-users"></i> Cấu hình nhân viên</a>
           <a class="list-group-item px-2 text-muted pl-3" href=""><i _ngcontent-jhi-c12=""
                   class="fa fa-truck"></i> Cài đặt tạo và xác thực
               sửa đơn </a>
           <a class="list-group-item px-2 text-muted pl-3" href=""><i _ngcontent-jhi-c12=""
                   class="fa fa-laptop"></i> Danh sách thiết bị đăng
               nhập </a>
           <a class="list-group-item px-2 text-muted pl-3" href=""><i _ngcontent-jhi-c12=""
                   class="fa fa-address-card"></i> Danh sách đơn mẫu
           </a>
           <a class="list-group-item px-2 text-muted pl-3" href=""><i _ngcontent-jhi-c12=""
                   class="fa fa-ticket"></i> Quản lý khuyến mãi</a>
           <a class="list-group-item px-2 text-muted pl-3" href=""><i _ngcontent-jhi-c12=""
                   class="fa fa-cube"></i> Danh sách hàng hoá </a>
           <a class="list-group-item px-2 text-muted pl-3" href=""><i _ngcontent-jhi-c12=""
                   class="fa fa-key"></i> Danh sách Hotkeys </a>
       </div>
   </div>


   {{-- @endsection --}}
