///canvas
const DATA_COUNT = 31;
const NUMBER_CFG = {
    count: DATA_COUNT,
    min: 0,
    max: 100,
};

const labels = Array.from(
    {
        length: DATA_COUNT,
    },
    (_, i) => (i + 1).toString(),
);
const data = {
    labels: labels,
    datasets: [
        {
            label: 'Đã giao thành công',

            data: Array.from(
                {
                    length: DATA_COUNT,
                },
                (_, i) => (i === 19 ? 14.0 : 0),
            ),
            borderColor: 'red',
            backgroundColor: '#20c997',
            stack: 'combined',
            type: 'bar',
        },
        {
            label: 'Đã hoàn',
            data: Array.from(
                {
                    length: DATA_COUNT,
                },
                (_, i) => (i === 4 ? 10 : 0),
            ), // Dữ liệu ngẫu nhiên cho "Đã hoàn"
            borderColor: 'red', // Màu cho "Đã hoàn"
            backgroundColor: 'rgba(255, 0, 0, 0.5)', // Màu nền cho "Đã hoàn"
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
///canvas_top10
