<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Page</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
    <button id="redirectButton">Chuyển hướng</button>

    <script>
        $(document).ready(function() {
            $('#redirectButton').on('click', function() {
                // Sử dụng AJAX để chuyển hướng đến URL mới mà không làm trang tải lại
                $.ajax({
                    type: 'GET',
                    url: 'http://localhost/viettel-post/dashboard', // Thay thế 'new_page.html' bằng URL mới bạn muốn chuyển hướng đến
                    success: function(data) {
                        // Thay thế nội dung hiện tại của trang bằng nội dung mới từ URL
                        $('body').html(data);
                    },
                    error: function() {
                        alert('Có lỗi xảy ra trong quá trình chuyển hướng.');
                    }
                });
            });
        });
    </script>
</body>

</html>
