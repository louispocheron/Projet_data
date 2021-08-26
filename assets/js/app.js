//////////////////////////////////////////////////////////////////PAGE HOME
                            // HOME GRAPH LINE
// console.log("arrete de faire des test dans la console laury et bouge toi le cul");
let chart1 = document.getElementById("charthomeline");
if(chart1){
let linechart = new Chart(chart1, {
    type: 'line',
    data: {
            labels: ["2001", "2004", "2007", "2010", "2013", "2016", "2017", "2020"],
            datasets: [
                {
                    label: "JS",
                    fill: false,
                    lineTension: 0.1,
                    backgroundColor: "rgba(253, 216, 60, 1)",
                    borderColor: "rgba(253, 216, 60, 1)",
                    pointBorderColor: "#fff",                    
                    pointBackgroundColor: "rgba(253, 216, 60, 1)",
                    pointBorderWidth: 1,
                    pointHoverRadius: 5,
                    pointHitRadius: 5,
                    data: [65, 59, 10, 81, 56, 55, 40, 50],
                  },

                {
                    label: "C++",
                    fill: false,
                    lineTension: 0.1,
                    backgroundColor: "rgba(131, 128, 246, 1)",
                    borderColor: "rgba(131, 128, 246, 1)",
                    pointBorderColor: "#fff",
                    pointBackgroundColor: "rgba(131, 128, 246, 1)",
                    pointBorderWidth: 1,
                    pointHoverRadius: 5,
                    pointHitRadius: 5,
                    data: [60, 20, 40, 40, 35, 32, 70, 90],
                    borderWidth: 3.5,
                },
                 {label: "PYTHON",
                    fill: false,
                    lineTension: 0.1,
                    backgroundColor: "rgba(161, 220, 255, 1)",
                    borderColor: "rgba(161, 220, 255, 1)",
                    pointBorderColor: "#fff",
                    pointBackgroundColor: "rgba(161, 220, 255, 1)",
                    pointBorderWidth: 1,
                    pointHoverRadius: 5,
                    pointHitRadius: 5,
                    data: [80, 20, 90, 76, 32, 21, 54, 74],
                 }

            ]},
    options:{
        responsive: false,
        plugins: {
            legend: {
                display: false,
                 labels:{
                    UsePointStyle: true,
                    
                title:{
                    display: true,
                }
                }
            }
        }
    }     
    })
}


///////////////////////////////// GRAPH PRINCIPAL HOME : DOUGHNUT

var ctx = document.getElementById("chartDoughnut");
if(ctx){
var doughnutChart = new Chart(ctx, {
    type: 'doughnut',
    data: {
        labels: [   
            'c++',
            'Java',
            'Javascript',        
            'Perl',                
            'PHP',
            'Python',
        ],
        datasets: [{
            label: 'My First Dataset',
            // hoverBackgroundColor:'#e0e0e0',
            data: [6.61, 17.72, 8.30, 0.4, 6.15, 29.9],
            backgroundColor: [
                'rgba(131, 128, 246, 1)',
                'rgba(236, 206, 98, 1)',
                'rgba(142, 84, 236, 1)',
                'rgba(243, 109, 157, 1)',
                'rgba(130, 221, 139, 1)',
                'rgba(161, 220, 255, 1)'
            ],
            hoverOffset: 6
        }]
    },
    options:{
        plugins: {
            legend: {
                display: true,
                position: 'bottom',
                labels:{
                    UsePointStyle: true,
                }
            }
        }
    }
});
}
//----------------------------- GRAPH AJAX HOME :DOUGHNUT

let idDate = 18;
// Ajax au clique btn "moins" idDate
let moins = document.querySelector('.moins');
if(moins){
moins.addEventListener('click', function(e){
    document.querySelector('.plus').style.display = "block";
    idDate = idDate - 1;
    if(idDate == 1){
        document.querySelector('.moins').style.display = "none";
    } else if(idDate > 1){
        document.querySelector('.moins').style.display = "block";
    }
    console.log(idDate);
    //stop envoie formulaire
    e.preventDefault();
    //supp ancien canvas et en recrée un
    $('#chartDoughnut').remove();
    $('.card3').append('<canvas id="chartDoughnut"><canvas>');

    let chartDoughnutHome = document.getElementById("chartDoughnut");
        
        $.ajax({
            type: 'POST',
            url: 'controllers/home_ajax_controller.php',
            dataType: "json",
            data: {
            value: idDate
            },
            success: function (success) {
                console.log(success);
                document.querySelector('.annee').textContent = success[1];
                let doughnutChart = new Chart(chartDoughnutHome, {
                    type: 'doughnut',
                    data: {
                        labels: success[0],
                        datasets: [{
                            label: 'My First Dataset',
                            // hoverBackgroundColor:'#e0e0e0',
                            data: success[2],
                            backgroundColor: [
                                'rgba(131, 128, 246, 1)',
                                'rgba(236, 206, 98, 1)',
                                'rgba(142, 84, 236, 1)',
                                'rgba(243, 109, 157, 1)',
                                'rgba(130, 221, 139, 1)',
                                'rgba(161, 220, 255, 1)'
                            ],
                            hoverOffset: 6
                        }]
                    },
                    options:{
                        plugins: {
                            legend: {
                                display: true,
                                position: 'bottom',
                                labels:{
                                    UsePointStyle: true,
                                }
                            }   
                        }
                    }
                })
            }
        });
    });
}
// Ajax au clique btn "plus" idDate
let plus = document.querySelector('.plus');

if(plus){
plus.style.display = "none";

document.querySelector('.plus').addEventListener('click', function(e){

    idDate = idDate + 1;
    if(idDate == 18){
        document.querySelector('.plus').style.display = "none";
        document.querySelector('.moins').style.display = "block";
    } else {
        document.querySelector('.moins').style.display = "block";
    }
    console.log(idDate);
    //stop envoie formulaire
    e.preventDefault();
    //supp ancien canvas et en recrée un
    $('#chartDoughnut').remove();
    $('.card3').append('<canvas id="chartDoughnut"><canvas>');

    let chartDoughnutHome = document.getElementById("chartDoughnut");
        
    $.ajax({
        type: 'POST',
        url: 'controllers/home_ajax_controller.php',
        dataType: "json",
        data: {
        value: idDate
        },
        success: function (success) {
            document.querySelector('.annee').textContent = success[1];
            let doughnutChart = new Chart(chartDoughnutHome, {
                type: 'doughnut',
                data: {
                    labels: success[0],
                    datasets: [{
                        label: 'My First Dataset',
                        // hoverBackgroundColor:'#e0e0e0',
                        data: success[2],
                        backgroundColor: [
                            'rgba(131, 128, 246, 1)',
                            'rgba(236, 206, 98, 1)',
                            'rgba(142, 84, 236, 1)',
                            'rgba(243, 109, 157, 1)',
                            'rgba(130, 221, 139, 1)',
                            'rgba(161, 220, 255, 1)'
                        ],
                        hoverOffset: 6
                    }]
                },
                options:{
                    plugins: {
                        legend: {
                            display: true,
                            position: 'bottom',
                            labels:{
                                UsePointStyle: true,
                            }
                        }
                    }
                }
            })
        }
    });
});
}




//////////////////////////////////////////////////////////////////PAGE LESS POPULAR

///////////////////////////////// GRAPH PRINCIPAL LESS POPULAR : LIGNE
let chart = document.getElementById("lineChart_less");
let linechart1 = new Chart(chart, {
    type: 'line',
    data: {
            labels: ["2004","2005","2006", "2007","2008","2009", "2010","2011","2012", "2013","2014","2015", "2016", "2017","2018","2019", "2020", "2021"],
            datasets: [

                {
                    label: "Julia",
                    fill: true,
                    lineTension: 0.3,
                    backgroundColor: [
                'rgb(255, 99, 132)',
                ] ,
                    borderColor: "rgba(131, 128, 246, 1)",
                    pointBorderColor: "#fff",
                    pointBackgroundColor: "rgba(131, 128, 246, 1)",
                    pointBorderWidth: 0.7,
                    pointHoverRadius: 5,
                    pointHitRadius: 5,
                    data: [0,0,0,0,0,0,0,0,0.1,0.12,0.19,0.18,0.2,0.21,0.18,0.25,0.37,0.42],
                    borderWidth: 2,
                },
            

            ]},
    options:{
        // responsive: false,
        plugins: {
            legend: {
                display: true   ,
                 labels:{
                    UsePointStyle: true,
                title:{
                    display: true,
                }
                }
            }
        }
    }     
    })

///////////////////////////////// GRAPH AJAX LESS POPULAR : LIGNE
document.querySelectorAll('.button_logo').forEach(button => {
    button.addEventListener('click', function(e){

        //stop envoie formulaire
        e.preventDefault();
        //supp ancien canvas et en recréer un
        $('#lineChart_less').remove();
        $('.chartlessline').append('<canvas id="lineChart_less"><canvas>');
        $('.chartlesspolar').append('<canvas id="polarChart"><canvas>');

        var chart = document.getElementById("lineChart_less");

        //récupère 'value' button
        var val = $(this).val();
        $.ajax({
            type: 'POST',
            url: 'controllers/less_popular_ajax_controller.php',
            dataType: "json",
            data: {
            value: val
            },
            success: function (success) {

                let linechart = new Chart(chart, {
                type: 'line',
                data: {
                    labels: success[1],
                    datasets: [

                        {
                            label: success[0],
                            fill: true,
                            lineTension: 0.3,
                            backgroundColor: [
                'rgb(255, 99, 132)'
                ] ,
                            borderColor: "rgba(131, 128, 246, 1)",
                            pointBorderColor: "#fff",
                            pointBackgroundColor: "rgba(131, 128, 246, 1)",
                            pointBorderWidth: 1,
                            pointHoverRadius: 5,
                            pointHitRadius: 5,
                            data: success[2],
                            borderWidth: 2,
                        },
            
                    ]},
                options:{
                    // responsive: false,
                    plugins: {
                        legend: {
                            display: true,
                            
                            labels:{
                                UsePointStyle: true,
                                title:{
                                    display: true,
                                }
                            }
                        }
                    }
                }     
            })
            }
        });
    });
});

///////////////////////////////// GRAPH PRINCIPAL LESS POPULAR : POLAR

if(document.getElementById("polarChart")){
let chart_2 = document.getElementById("polarChart").getContext('2d');
chart_2.fillRect(10, 10, 300, 300);
let polarChart = new Chart(chart_2, {
    type: 'polarArea',
    data: {
        labels: ["C++","Java","Javascript","Perl","PHP","Python", "Julia"],
        datasets: [
            {
                label: "Comparaison avec les langages les plus populaires en 2021",
                backgroundColor: [
                'rgb(255, 99, 132)',
                'rgb(75, 192, 192)',
                'rgb(255, 205, 86)',
                'rgb(201, 203, 207)',
                'rgb(54, 162, 235)',
                'rgb(255, 136, 0)'
                ] ,
                // borderColor: "rgba(131, 128, 246, 1)",
                data: [6.61, 17.72, 8.30, 0.4, 6.15, 29.9, 0.42],
            },
         ]
        },
        options:{
            responsive: false,
        }
    });
}

///////////////////////////////// GRAPH AJAX LESS POPULAR : POLAR
document.querySelectorAll('.button_logo').forEach(button => {
    button.addEventListener('click', function(e){

        //stop envoie formulaire
        e.preventDefault();
        //supp ancien canvas
        $('#polarChart').remove();
 
        var chart_2 = document.getElementById("polarChart");
        
        //récupère 'value' button
        var val = $(this).val();
        $.ajax({
            type: 'POST',
            url: 'controllers/less_popular_ajax_controller.php',
            dataType: "json",
            data: {
            value: val
            },
            success: function (success) {

                let polarChart = new Chart(chart_2, {
                    type: 'polarArea',
                    data: {
                        labels: ["C++","Java","Javascript","Perl","PHP","Python", success[0]],
                        datasets: [
                            {
                                label: "Comparaison avec les langages les plus populaires en 2021",
                                backgroundColor: [
                'rgb(255, 99, 132)',
                'rgb(75, 192, 192)',
                'rgb(255, 205, 86)',
                'rgb(201, 203, 207)',
                'rgb(54, 162, 235)',
                'rgb(255, 136, 0)'
                ],
                                data: [6.61, 17.72, 8.30, 0.4, 6.15, 29.9, success[2][17]],
                            },
                        ]
                    },
                    options:{
                        responsive: false,
                    }
                });
            }
        });
    });
});


///////////////////////////////// CHANGEMENT DESCRIPTION LANGAGES

//tous les scraps sont "display: none" au début sauf "julia"
if(document.querySelector('.scrapGo')){
document.querySelector('.scrapGo').style.display = "none";
document.querySelector('.scrapRust').style.display = "none";
document.querySelector('.scrapSwift').style.display = "none";
document.querySelector('.scrapTypescript').style.display = "none";
document.querySelector('.scrapKotlin').style.display = "none";


document.querySelector('.Julia').addEventListener('click', function(){

    document.querySelector('.scrapJulia').style.display = "block";
    document.querySelector('.scrapGo').style.display = "none";
    document.querySelector('.scrapRust').style.display = "none";
    document.querySelector('.scrapSwift').style.display = "none";
    document.querySelector('.scrapTypescript').style.display = "none";
    document.querySelector('.scrapKotlin').style.display = "none";

});

document.querySelector('.Go').addEventListener('click', function(){

    document.querySelector('.scrapGo').style.display = "block";
    document.querySelector('.scrapJulia').style.display = "none";
    document.querySelector('.scrapRust').style.display = "none";
    document.querySelector('.scrapSwift').style.display = "none";
    document.querySelector('.scrapTypescript').style.display = "none";
    document.querySelector('.scrapKotlin').style.display = "none";

});

document.querySelector('.Rust').addEventListener('click', function(){


    document.querySelector('.scrapRust').style.display = "block";
    document.querySelector('.scrapJulia').style.display = "none";
    document.querySelector('.scrapGo').style.display = "none";
    document.querySelector('.scrapSwift').style.display = "none";
    document.querySelector('.scrapTypescript').style.display = "none";
    document.querySelector('.scrapKotlin').style.display = "none";

});

document.querySelector('.Swift').addEventListener('click', function(){

    document.querySelector('.scrapSwift').style.display = "block";
    document.querySelector('.scrapJulia').style.display = "none";
    document.querySelector('.scrapGo').style.display = "none";
    document.querySelector('.scrapRust').style.display = "none";
    document.querySelector('.scrapTypescript').style.display = "none";
    document.querySelector('.scrapKotlin').style.display = "none";

});

document.querySelector('.Typescript').addEventListener('click', function(){

    document.querySelector('.scrapTypescript').style.display = "block";
    document.querySelector('.scrapJulia').style.display = "none";
    document.querySelector('.scrapGo').style.display = "none";
    document.querySelector('.scrapRust').style.display = "none";
    document.querySelector('.scrapSwift').style.display = "none";
    document.querySelector('.scrapKotlin').style.display = "none";

});

document.querySelector('.Kotlin').addEventListener('click', function(){

    document.querySelector('.scrapKotlin').style.display = "block";
    document.querySelector('.scrapJulia').style.display = "none";
    document.querySelector('.scrapGo').style.display = "none";
    document.querySelector('.scrapRust').style.display = "none";
    document.querySelector('.scrapSwift').style.display = "none";
    document.querySelector('.scrapTypescript').style.display = "none";

});
}

$(window).on('load', function(){
    let val = $('.testpop').val();
    $.ajax({
            type: 'POST',
            url: 'controllers/popular_ajax_controller.php',
            dataType: "json",
            data: {
            value: val
            },
            success: function (success) {
                let chartPop = document.getElementById("chartpopline");
                if(chartPop){
                    let linechart = new Chart(chartPop, {
                        type: 'line',
                        data: {
                            labels: success[1],
                            datasets: [
                                {
                                    label: success[0],
                                    fill: true,
                                    lineTension: 0.1,
                                    backgroundColor: success[3],
                                    borderColor:  '#fff',
                                    pointBorderColor: '#fff',                    
                                    pointBackgroundColor: success[3],
                                    pointBorderWidth: 1,
                                    pointHoverRadius: 5,
                                    pointHitRadius: 5,
                                    data: success[2],
                                },
                            ]},
                        options:{
                            responsive: false,
                            plugins: {
                                legend: {
                                    display: true,
                                    labels:{
                                        UsePointStyle: true,
                                        title:{
                                            display: true,
                                        }
                                    }
                                }
                            }
                        }     
                    })
                }
            }
        });
    });

