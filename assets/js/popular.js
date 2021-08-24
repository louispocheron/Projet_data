$(document).ready(function(){


$.ajax({
            type: 'GET',
            url: 'controllers/popular_ajax_controller.php',
            dataType: "json",
            // data: 5,
            success: function (success) {
console.log(success);
                // let polarChart = new Chart(chart_2, {
                //     type: 'polarArea',
                //     data: {
                //         labels: ["C++","Java","Javascript","Perl","PHP","Python", success[0]],
                //         datasets: [
                //             {
                //                 label: "Comparaison avec les langages les plus populaires en 2021",
                //                 backgroundColor: [
                // 'rgb(255, 99, 132)',
                // 'rgb(75, 192, 192)',
                // 'rgb(255, 205, 86)',
                // 'rgb(201, 203, 207)',
                // 'rgb(54, 162, 235)',
                // 'rgb(255, 136, 0)'
                // ],
                //                 data: [6.61, 17.72, 8.30, 0.4, 6.15, 29.9, success[2][17]],
                //             },
                //         ]
                //     },
                //     options:{
                //         responsive: false,
                //     }
                // });
            }
        });
})