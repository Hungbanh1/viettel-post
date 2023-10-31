const data1 = {
    labels: [''], // Thêm các nhãn "Có" và "Không"
    datasets: [
        {
            label: [''],
            data: [1],
            backgroundColor: ['rgb(194, 194, 194)'],
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

var ctx = document.getElementById('myPieChart_none').getContext('2d');
var myPieChart = new Chart(ctx, config);
