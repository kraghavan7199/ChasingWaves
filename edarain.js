var dataset;
var weathers;
var w = new Array(12);
var months=["January","February","March","April","May","June","July","August","September","October","November","December"];
xmlhttp=new XMLHttpRequest();
xmlhttp.onreadystatechange=function() 
{
  if (this.readyState==4 && this.status==200) 
  {
             dataset=this.responseText;
             weather = JSON.parse(dataset);
             for(var i=0;i<12;i++)
             {
               w[i] = weather[(i+7)].Rainfall;
             }
             fixw();
             displayChart(months,w);
             console.log(w);
             
  }
}
xmlhttp.open("GET","getweather.php",true);
xmlhttp.send();



function displayChart(m,r){
new Chart(document.getElementById("rain-chart"), {
    type: 'bar',
    data: {
      labels: m,
      datasets: [{
          label: "Goa",
          type: "line",
          borderColor: "#8e5ea2",
          data: r,
          fill: false
        },
         {
          label: "Goa",
          type: "bar",
          backgroundColor: "rgba(0,0,0,0.2)",
          data: r
        }
      ]
    },
    options: {
      title: {
        display: true,
        text: 'Rainfall(kg/m2) Over the year'
      },
      legend: { display: false }
    }
});
}
function fixw()
{
for(var i = 0;i<12;i++)
{
  w[i] = parseFloat(w[i].toFixed(4));
}
}