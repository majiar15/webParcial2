let ctx = document.querySelector('#chartSellvsTime');
ctx.parentNode.style.width = '700px';
let chart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: ['enero', 'febrero', 'marzo', 'abril', 'mayo', 'junio', 'julio', 'agosto', 'setiembre', 'octubre'],
        datasets: [{
            label: 'Ventas Vs Tiempo',
            data: [120, 154, 323, 581, 370, 461, 801, 345, 364, 764],
            backgroundColor: [
                'rgba(253,110,79,0.5)',
            ],

            borderWidth: 1
        }]
    },

    options: {
        responsive: true,

        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});