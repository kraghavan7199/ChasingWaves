<html>
  <head>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">  
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>  
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>  
  <script>
  $(function() {  
    var areas = ["Calangute Area", "Baga Area", "Candolim Area", "Anjuna Area",
           "Vagator Area", "Betim", "Panjim Area", "Salcette, Goa",
           "Mobor Beach Area", "Palolem Beach Area","Colva Area",
           "Bogmalo Beach Area", "Varca Area", "Margao", "Betalbatim",
           "Salcette", "Alto De Porvorim", "Mapusa", "Ponda", "Vasco da Gama"];
   $( "#area" ).autocomplete({  
     source: areas  
   });  
 });  
  </script>
</head>
<body>
   <input type="text" class="form-control" name="area" id="area" required="">
  
</body>
</html>