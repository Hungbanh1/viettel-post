// var element = document.querySelector('#example');

// // Sử dụng truy vấn CSS không hợp lệ
// var invalidQuery = element.querySelectorAll('.nonexistent-class');
$(document).ready(function () {
    // Lắng nghe sự kiện khi mục được click
    $('.nav-link').click(function () {
        // Loại bỏ lớp 'active' từ tất cả các mục trong danh sách
        $('.nav-link').removeClass('active');
        $(this).addClass('active');
    });
});

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
    $('.nav-item-bg-gray').click(function () {
        // Loại bỏ lớp active từ tất cả các tab
        $('.nav-item-bg-gray').removeClass('active-bg-gray');

        // Thêm lớp active cho tab được click
        $(this).addClass('active-bg-gray');
    });
});
$(document).ready(function () {
    // Lắng nghe sự kiện khi mục được click
    $('.nav-link').click(function () {
        // Loại bỏ lớp 'active' từ tất cả các mục trong danh sách
        $('.nav-link').removeClass('active');
        $(this).addClass('active');
    });
});

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
    // Lắng nghe sự kiện khi mục được click
    $('.nav-link').click(function () {
        // Loại bỏ lớp 'active' từ tất cả các mục trong danh sách
        $('.nav-link').removeClass('active');
        $(this).addClass('active');
    });
});

$(document).ready(function () {
    $('.search-input input').focus(function () {
        // Áp dụng CSS khi trường nhập liệu được focus
        $(this).css({
            'box-shadow': '0 0 0 2px #F2F2F2',
            'border-color': '#44494D!important',
        });
    });
});

//select
var citis = document.getElementById('city');
var districts = document.getElementById('district');
var wards = document.getElementById('ward');
var Parameter = {
    url: 'https://raw.githubusercontent.com/kenzouno1/DiaGioiHanhChinhVN/master/data.json',
    method: 'GET',
    responseType: 'application/json',
};
var promise = axios(Parameter);
promise.then(function (result) {
    renderCity(result.data);
});

function renderCity(data) {
    for (const x of data) {
        citis.options[citis.options.length] = new Option(x.Name, x.Id);
    }
    citis.onchange = function () {
        district.length = 1;
        ward.length = 1;
        if (this.value != '') {
            const result = data.filter((n) => n.Id === this.value);

            for (const k of result[0].Districts) {
                district.options[district.options.length] = new Option(k.Name, k.Id);
            }
        }
    };
    district.onchange = function () {
        ward.length = 1;
        const dataCity = data.filter((n) => n.Id === citis.value);
        if (this.value != '') {
            const dataWards = dataCity[0].Districts.filter((n) => n.Id === this.value)[0].Wards;

            for (const w of dataWards) {
                wards.options[wards.options.length] = new Option(w.Name, w.Id);
            }
        }
    };
}

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
