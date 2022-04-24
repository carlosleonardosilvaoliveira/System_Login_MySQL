$(document).ready(function(){
    $.ajax({
        type: "POST",
        dataType: "JSON",
        url: "../Config/json_dados.php",
        success: function(dados){

            var semSaque = [];

            for(var i=0; i<dados.length; i++){
                semSaque.push(dados[i].totalSaques);
            }
            
            var ctx     = document.getElementById("myChart");
            var myChart = new Chart(ctx, {
                type:   'line',
                data: {
                    labels: ["Segunda", "Terça", "Quarta", "Quinta", "Sexta", "Sabado", "Domingo"],
                    datasets: [{
                        data: semSaque,
                        lineTension: 0,
                        backgroundColor: 'transparent',
                        borderColor: '#007bff',
                        borderWidth: 4,
                        pointBackgroundColor: '#007bff'
                    }]
                },
                options: {
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero: false
                            }
                        }]
                    },
                    legend: {
                        display: false,
                    }
                }
            });
        }
    });
});


