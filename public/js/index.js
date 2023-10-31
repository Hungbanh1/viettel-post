// var element = document.querySelector('#example');
$(document).ready(function () {
    // Lắng nghe sự kiện khi mục được click
    // $('.nav-link.active .sub-menu').slideDown();
    $('.nav-link').click(function () {
        // Kiểm tra xem mục được click có lớp .active hay không
        if ($(this).hasClass('active')) {
            // Nếu có lớp .active, slide down submenu
            $(this).next('.sub-menu').slideDown();
        }
    });
});
// $(document).ready(function () {
//     // Ẩn tất cả submenu ban đầu
//     $('.nav-item .sub-menu').hide();

//     // Lắng nghe sự kiện click trên tất cả các mục .nav-item
//     $('#ul-sidebar .nav-item').click(function () {
//         // Kiểm tra xem mục được click có lớp .active hay không
//         if ($(this).find('.nav-link').hasClass('active')) {
//             // Nếu có lớp .active, hiển thị hoặc ẩn submenu
//             $(this).children('.sub-menu').slideToggle();
//         }
//     });
// });
// // Sử dụng truy vấn CSS không hợp lệ
// $(document).ready(function () {
//     // Lắng nghe sự kiện khi mục cha (dropdown-toggle) được click
//     $('.dropdown-toggle').click(function () {
//         // Loại bỏ lớp 'active' từ tất cả các mục trong danh sách
//         $('.sub-menu > .nav-link').removeClass('active');
//         $(this).addClass('active');
//     });
// });
// $(document).ready(function () {
//     // Lắng nghe sự kiện khi mục cha (dropdown-toggle) được click
//     $('.dropdown-toggle').click(function (e) {
//         e.stopPropagation(); // Ngăn chặn sự kiện click từ mục cha lan truyền lên
//     });

//     // Lắng nghe sự kiện click trên các thẻ con trong lớp "sub-menu"
//     $('.sub-menu .nav-link').click(function () {
//         $('.nav-link').removeClass('active');
//         $(this).addClass('active');
//     });
// });
$(document).ready(function () {
    $('.search-input input').focus(function () {
        // Áp dụng CSS khi trường nhập liệu được focus
        $(this).css({
            'box-shadow': '0 0 0 2px #F2F2F2',
            'border-color': '#44494D!important',
        });
    });
});

// $(document).ready(function () {
//     $('.nav-item-bg-gray').click(function () {
//         // Loại bỏ lớp active từ tất cả các tab
//         $('.nav-item-bg-gray').removeClass('active-bg-gray');

//         // Thêm lớp active cho tab được click
//         $(this).addClass('active-bg-gray');
//     });
// });

$(document).ready(function () {
    $('.search-input input').focus(function () {
        // Áp dụng CSS khi trường nhập liệu được focus
        $(this).css({
            'box-shadow': '0 0 0 2px #F2F2F2',
            'border-color': '#44494D!important',
        });
    });
});
$(document).ready(function () {
    $('#ul-sidebar .nav-item').click(function () {
        // $('.nav-item.active .sub-menu').slideDown();
        $(this).children('.sub-menu').slideToggle();
    });

    $('.nav-item .sub-menu').hide();
});

/////////

$(document).ready(function () {
    $('.search-input input').focus(function () {
        // Áp dụng CSS khi trường nhập liệu được focus
        $(this).css({
            'box-shadow': '0 0 0 2px #F2F2F2',
            'border-color': '#44494D!important',
        });
    });
});

$(document).ready(function () {
    $('.eye-icon').click(function () {
        $(this).toggleClass('open');
        $(this).children('i').toggleClass('fas fa-eye-slash  fa-eye');
        if ($(this).hasClass('open')) {
            $(this).prev().attr('type', 'text');
        } else {
            $(this).prev().attr('type', 'password');
        }
    });
});
$(document).ready(function () {
    $('.total-order').click(function () {
        // Xóa lớp "active_order" từ tất cả các phần tử
        $('.total-order').removeClass('active_order');
        // Thêm lớp "active_order" cho phần tử được click
        $(this).addClass('active_order');
    });
});
$(document).ready(function () {
    $('.item-main-cont').click(function () {
        // Xóa lớp "active_order" từ tất cả các phần tử
        $('.item-main-cont').removeClass('active_order_btn');
        // Thêm lớp "active_order" cho phần tử được click
        $(this).addClass('active_order_btn');
    });
});

//calendar
document.addEventListener('DOMContentLoaded', function () {
    const datePicker = document.getElementById('datePicker');
    let defaultDateValue; // Biến để lưu giá trị mặc định

    // Lấy ngày tháng hiện tại
    const currentDate = new Date();
    const currentDay = currentDate.getDate();
    const currentMonth = currentDate.getMonth() + 1; // Tháng trong JavaScript tính từ 0
    const currentYear = currentDate.getFullYear();

    // Định dạng ngày tháng hiện tại thành dạng 'dd-mm-yyyy'
    const currentDateString = `${currentDay}-${currentMonth}-${currentYear}`;

    flatpickr(datePicker, {
        enableTime: false,
        dateFormat: 'd-m-Y', // Định dạng ngày tháng
        defaultDate: currentDateString, // Đặt giá trị mặc định là ngày tháng hiện tại
        onMonthChange: function (selectedDates, dateStr, instance) {
            // Sự kiện xảy ra khi tháng thay đổi
            const selectedMonth = instance.currentMonth; // Lấy tháng hiện tại
            const selectedYear = instance.currentYear; // Lấy năm hiện tại
            const selectedValue = `${selectedMonth}-${selectedYear}`;
        },
    });
});
