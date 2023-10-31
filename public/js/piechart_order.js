const data1 = {
    labels: ['Long An', 'Hồ Chí Minh '], // Thêm các nhãn "Có" và "Không"
    datasets: [
        {
            label: ['Hồ Chí Minh', 'Long An'],
            data: [1, 3],
            backgroundColor: [
                'rgb(17, 164, 173)',
                'rgb(139, 204, 82)', // Gán màu xanh cho "Có" và màu đỏ cho "Không"
            ],
        },
    ],
};

const config = {
    type: 'pie', // Loại biểu đồ là pie chart
    data: data1, // Dữ liệu bạn đã định nghĩa
    options: {
        responsive: true,
        plugins: {
            legend: {
                position: 'top',
            },
            title: {
                display: true,
                // text: 'Biểu Đồ Pie Chart Chart.js'
            },
        },
    },
};

var ctx = document.getElementById('myPieChart').getContext('2d');
var myPieChart = new Chart(ctx, config);
