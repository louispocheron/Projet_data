//////////////////////////////////////////////////////////////////PAGE LESS POPULAR

///////////////////////////////// GRAPH PRINCIPAL LESS POPULAR : LIGNE

let chart = document.getElementById("lineChart_less");
let linechart = new Chart(chart, {
    type: 'line',
    data: {
            labels: ["2004","2005","2006", "2007","2008","2009", "2010","2011","2012", "2013","2014","2015", "2016", "2017","2018","2019", "2020", "2021"],
            datasets: [

                {
                    label: "Julia",
                    fill: false,
                    lineTension: 0.3,
                    backgroundColor: "rgba(131, 128, 246, 1)",
                    borderColor: "rgba(131, 128, 246, 1)",
                    pointBorderColor: "#fff",
                    pointBackgroundColor: "rgba(131, 128, 246, 1)",
                    pointBorderWidth: 1,
                    pointHoverRadius: 5,
                    pointHitRadius: 5,
                    data: [0,0,0,0,0,0,0,0,0.1,0.12,0.19,0.18,0.2,0.21,0.18,0.25,0.37,0.42],
                    borderWidth: 3.5,
                },
            

            ]},
    options:{
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

///////////////////////////////// GRAPH AJAX LESS POPULAR : LIGNE
document.querySelectorAll('.button_logo').forEach(button => {
    button.addEventListener('click', function(e){

        //stop envoie formulaire
        e.preventDefault();
        //supp ancien canvas et en recrée un
        $('#lineChart_less').remove();
        $('.chartBox').append('<canvas id="lineChart_less"><canvas>');
        $('.chartBox').append('<canvas id="polarChart"><canvas>');

        var chart = document.getElementById("lineChart_less");
        
        //récupère 'value' button
        var val = $(this).val();
        $.ajax({
            type: 'POST',
            url: '../controllers/less_popular_controller.php',
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
                            fill: false,
                            lineTension: 0.3,
                            backgroundColor: "rgba(131, 128, 246, 1)",
                            borderColor: "rgba(131, 128, 246, 1)",
                            pointBorderColor: "#fff",
                            pointBackgroundColor: "rgba(131, 128, 246, 1)",
                            pointBorderWidth: 1,
                            pointHoverRadius: 5,
                            pointHitRadius: 5,
                            data: success[2],
                            borderWidth: 3.5,
                        },
            
                    ]},
                options:{
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
        });
    });
});

///////////////////////////////// GRAPH PRINCIPAL LESS POPULAR : POLAR

let chart_2 = document.getElementById("polarChart");
let polarChart = new Chart(chart_2, {
    type: 'polarArea',
    data: {
        labels: ["C++","Java","Javascript","Perl","PHP","Python", "Julia"],
        datasets: [
            {
                label: "Comparaison avec les langages les plus populaires en 2021",
                backgroundColor: 'rgba(131, 128, 246, 1)',
                borderColor: "rgba(131, 128, 246, 1)",
                data: [6.61, 17.72, 8.30, 0.4, 6.15, 29.9, 0.42],
            },
        ]
    },
});

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
            url: '../controllers/less_popular_controller.php',
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
                                backgroundColor: 'rgba(131, 128, 246, 1)',
                                borderColor: "rgba(131, 128, 246, 1)",
                                data: [6.61, 17.72, 8.30, 0.4, 6.15, 29.9, success[2][17]],
                            },
                        ]
                    },
                });
            }
        });
    });
});

///////////////////////////////// CHANGEMENT DESCRIPTION LANGAGES

//tous les scraps sont "display: none" au début sauf "julia"
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