/**
 * Created by Layer on 09/04/2018.
 */



var test = new Chart(document.getElementById("bar-chart-horizontal"), {
    type: 'horizontalBar',
    data: {
        labels: ["Intégration", "JavaScript", "Webdesign", "Wordpress"],
        datasets: [
            {
                label: ["test"],
                backgroundColor: ["#ffc300", "#ec610a","#a40a3c","#6b0848"],
                data: [8,2,10,4]
            }
        ]
    },
    options: {
        legend: { display: false },
        scales: {
            xAxes: [{
                gridLines:{
                    color: '#cbcbcb'
                },
                ticks: {
                    min: 0,
                    max: 10,
                    fontColor: '#231f20',
                    fontFamily: 'Montserrat',
                    fontSize: 15
                }
            }],
            yAxes: [{
                gridLines:{
                    color: '#cbcbcb'
                },
                ticks: {
                    fontColor: '#231f20',
                    fontFamily: 'Montserrat',
                    fontSize: 22
                }
            }]
        },
        tooltips: {
            callbacks: {
                title: function(tooltipItem, data) {
                    return data['labels'][tooltipItem[0]['index']];
                },
                label: function(tooltipItem, data) {
                    //return data['datasets'][0]['data'][tooltipItem['index']];
                    return data.datasets[0].label[0];;
                },
                afterLabel: function(tooltipItem, data) {
                    /*var dataset = data['datasets'][0];
                    var percent = Math.round((dataset['data'][tooltipItem['index']] / dataset["_meta"][0]['total']) * 100)
                    return '(' + percent + '%)';*/
                }
            },
            titleFontColor: '#fff',

        },
        hover: {
            onHover: function(evt, item) {
                if(item[0]._index == 0){
                    test.data.datasets[0].label[0] = "HTML et CSS";
                }
                if(item[0]._index == 1){
                    test.data.datasets[0].label[0] = "Integration plugin";
                }
                if(item[0]._index == 2){
                    test.data.datasets[0].label[0] = "Photoshop et illustator";
                }
                if(item[0]._index == 3){
                    test.data.datasets[0].label[0] = "Mise en place et administation";
                }
            }
        },
        title: {
            display: true,
            text: ''
        }
    }
});
