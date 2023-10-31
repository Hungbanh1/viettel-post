<!DOCTYPE html>
<html>

<head>
    <title>Biểu Đồ Sử Dụng Chart.js</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body>
    <canvas id="myChart"></canvas>

    <script>
        const DATA_COUNT = 31;
        const NUMBER_CFG = {
            count: DATA_COUNT,
            min: 0,
            max: 100
        };

        const labels = Array.from({
            length: DATA_COUNT
        }, (_, i) => (i + 1).toString());
        const data = {
            labels: labels,
            datasets: [{
                    label: 'Dataset 1',
                    data: Array.from({
                        length: DATA_COUNT
                    }, (_, i) => (i === 13 ? 100 : 0)), // Cột thứ 14 có giá trị 100%, các cột khác có giá trị 0%
                    borderColor: 'red',
                    backgroundColor: 'rgba(255, 0, 0, 0.5)',
                    stack: 'combined',
                    type: 'bar',
                },
                {
                    label: 'Dataset 2',
                    data: Array.from({
                        length: DATA_COUNT
                    }, () => Math.floor(Math.random() * 100)),
                    borderColor: 'blue',
                    backgroundColor: 'rgba(0, 0, 255, 0.5)',
                    stack: 'combined',
                },
            ],
        };

        // Lấy tham chiếu đến thẻ canvas
        var ctx = document.getElementById('myChart').getContext('2d');

        // Tạo biểu đồ
        var myChart = new Chart(ctx, {
            type: 'bar', // Loại biểu đồ (có thể thay đổi thành 'line', 'pie', v.v.)
            data: data, // Dữ liệu bạn đã định nghĩa
        });
    </script>
</body>

</html>
