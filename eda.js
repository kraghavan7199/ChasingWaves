var areas = ['Calangute Area', 'Baga Area', 'Candolim Area', 'Anjuna Area',
       'Vagator Area', 'Betim', 'Panjim Area', 'Salcette, Goa',
       'Mobor Beach Area', 'Palolem Beach Area','Colva Area',
       'Bogmalo Beach Area', 'Varca Area', 'Margao', 'Betalbatim',
       'Salcette', 'Alto De Porvorim', 'Mapusa', 'Ponda', 'Vasco da Gama'];
       
var rating = new Array(20);
var i = 0;
for(i=0;i<20;i++)
{
  rating[i]=0;
}
var dataset;
var hotels;
xmlhttp=new XMLHttpRequest();
xmlhttp.onreadystatechange=function() 
{
  if (this.readyState==4 && this.status==200) 
  {
    dataset=this.responseText;
    hotels=JSON.parse(dataset);
    cleanData();
    console.log(hotels);
  
    for(var i=0;i<hotels.length;i++)
      {
        for(var j=0;j<20;j++)
          {
              if(hotels[i].locality==areas[j])
               {
                  if(rating[j]!=0)
                  {
                    rating[j] = (rating[j] +   hotels[i].site_review_rating)/2;
                  }
                  else
                  {
                    rating[j] = hotels[i].site_review_rating;
                  }
                }
    
            }       
      
      }
      fix();

displayRating(areas,rating);
for(var i=0;i<hotels.length;i++)
  {
    for(var j=0;j<20;j++)
      {
          if(hotels[i].locality==areas[j])
           {
              if(rating[j]!=0)
              {
                rating[j] = (rating[j] +   hotels[i].prices)/2;
              }
              else
              {
                rating[j] = hotels[i].prices;
              }
            }

        }       
  
        }
        fix();
        console.log(rating);
        displayPrice(areas,rating);
}
}
xmlhttp.open("GET","gethotels.php",true);
xmlhttp.send();

function displayRating(areas,val)
{
  new Chart(document.getElementById("bar-chart"), {
      type: 'bar',
      data: {
        labels: areas,
        datasets: [
          {
            label: "Ratings",
            data: val
          }
        ]
      },
      options: {
        title: {
          display: true,
          text: 'Average Ratings Of Hotels in the Area'
        }
      }
  });

}
function displayPrice(areas,price)
{
  new Chart(document.getElementById("price-chart"), {
      type: 'bar',
      data: {
        labels: areas,
        datasets: [
          {
            label: "Price",
            data: price
          }
        ]
      },
      options: {
        title: {
          display: true,
          text: 'Average Prices of Hotels in Areas'
        }
      }
  });

}


function cleanData(){
  var temp;
for(var i=0;i<hotels.length;i++)
{
    if(hotels[i].site_review_rating == "")
    {
      temp = (Math.random()*5);
      temp = temp.toFixed(1);
      hotels[i].site_review_rating = temp; 
      hotels[i].site_review_rating = parseFloat(hotels[i].site_review_rating)
    }
    else
    {
        hotels[i].site_review_rating = parseFloat(hotels[i].site_review_rating)
    }
}
}
function fix()
{
for(var i = 0;i<20;i++)
{
  rating[i] = parseFloat(rating[i].toFixed(1));
}
}