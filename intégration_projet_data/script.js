// const checkbox = document.getElementById('checkbox');

// checkbox.addEventListener('change', ()=>{
//   document.body.classList.toggle('dark');
//   })
// Chart.defaults.global.title.display = true;
// Chart.defaults.global.title.text = "hello";

let chart = document.getElementById("mychart");
// console.log(chart);
let linechart = new Chart(chart, {
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
            options: {
                title:{
                    text: "salut"
                }
            }
            
    });


    // DEUXIEME GRAPHIQUE == DONUT
    let chart1 = document.getElementById("secondchart");
    // console.log(chart1);
    let linechart1 = new Chart(chart1, {
        type: 'doughnut',
        data: {
            labels: [
                'PHP',
                'JS',
                'C++',
                'JAVA',
                'PYTHON',
                'PERL'
],
  datasets: [{
    label: 'My First Dataset',
    // hoverBackgroundColor:'#e0e0e0',
    data: [300, 50, 100, 150, 200, 40],
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
        }
    })


             // TEST !!!!!!!!!!!

// lineChartData = {}; 
// lineChartData.labels = ["2001", "2004", "2007", "2010", "M2013", "2016", "2017", "2020"]; 
// lineChartData.datasets = [  {
//                     label: "langages",
//                     fill: false,
//                     lineTension: 0.1,
//                     backgroundColor: "rgba(75, 192, 192, 0.4)",
//                     borderColor: "rgba(75, 192, 192, 1)",
//                     borderCapStyle: 'butt',
//                     borderDash: [],
//                     borderDashOffset: 0.0,
//                     borderJoinStyle: 'miter',
//                     pointBorderColor: "rgba(75,192,192,1)",
//                     pointBackgroundColor: "#fff",
//                     pointBorderWidth: 1,
//                     pointHoverRadius: 5,
//                     pointHitRadius: 10,
//                     data: [65, 59, 80, 81, 56, 55, 40, 50],
//                 }
//             ]; 

// for (line = 0; line < 4; line++) {
//     y = [];
//     lineChartData.datasets.push({}); 
//     dataset = lineChartData.datasets[line]
//     dataset.fillColor = "rgba(0,0,0,0)";
//     dataset.strokeColor = "rgba(200,200,200,1)";
//     dataset.data = []; 
//     for (x = 0; x < 10; x++) {
//         y.push(line + x); 
//         if (line === 0)
//             lineChartData.labels.push(x); /
//     } 

//     lineChartData.datasets[line].data = y; 
// } 

// ctx = document.getElementById("mychart").getContext("2d");
// myLineChart = new Chart(ctx).Line(lineChartData);