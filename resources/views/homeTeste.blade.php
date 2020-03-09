<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.iconify.design/1/1.0.4/iconify.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    

<style>

*{
    font-family: 'Roboto', sans-serif;
    font-weight: bold;
}    

.card-title, .card-text , #submit{
    color: white;
}



.card-img-overlay{
    background-color: #ff000091;
}

.iconify {
    color: #e61324;
    width: 210px;
    height: 100px;
    margin-bottom: 40px;

}
.page-footer{
    background-color: #e61324;
}

</style>



<!-- Capa Principal-->
<span class="iconify" data-icon="fa-regular:paper-plane" data-inline="false"></span>

<h1>HubInvent</h1>


<div class="card bg-dark text-dark">
    
    <img src="images/womeninTech.png" class="card-img" alt="...">
    
    <div class="card-img-overlay">
   
      <h5 class="card-title">PROPERTY INVENTORTY</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
     
    </div>
  </div>



<!-- / FIM Capa Principal-->


<!-- Cartões-->

<section id="colunaCartoes">
    <div class="container containerCartoes">
        <div class="d-flex justify-content-center flex-column align-items-center">

            <div class="card  align-items-center" style="max-width: 18rem;">
                <span class="iconify" data-icon="fa-solid:box-open" data-inline="false"></span>
                <h2 id="apresentacao">CONSULTA</h2>
                <p>
                    "Know exactly which products are most out of your company's inventory, which are the goods that are not sold, among other information."
                </p>
            </div>
            
            <div class="card  align-items-center" style="max-width: 18rem;">
                <span class="iconify" data-icon="foundation:torso-business" data-inline="false"></span>
                <h2 id="apresentacao">CONSULTA</h2>
                
                <p>
                    
                    Gain agility when consulting the products in your stock. Follow the information of the goods stored in your establishment, such as minimum stock.<br>
                    
                    
                </p>
            </div>
            
            <div class="card  align-items-center" style="max-width: 18rem;">
                <span class="iconify" data-icon="ion:business-sharp" data-inline="false"></span>
                <h2 id="apresentacao">MOVIMENTAÇÃO</h2>
                <p>
                    "Registering your products can be an easy task with our management system."
                </p>
            </div>
            
        </div>
</section>


<!-- / FIM Cartões-->



<!-- Footer -->


<!-- Footer -->
<footer class="page-footer font-small blue pt-4">

    <!-- Footer Links -->
    <div class="container text-center text-md-left">
  
      <!-- Grid row -->
      <div class="row">
  
        <!-- Grid column -->
        <div class="col-md-6 mt-md-0 mt-3">
  
          <!-- Content -->
          <h5 class="text-uppercase"  style="color:white;">COMPANY RETURNS</h5>
          <p style="color: black;" >2020 Matheus Ruegg. All Rights Reserved</p style="color: violet;">


          <i  style="color: orangered;" class="fab fa-facebook"></i>
          <i  style="color: orangered;" class="fab fa-twitter"></i>
          <i  style="color: orangered;" class="fab fa-tumblr"></i>
        </div>


        <!-- Grid column -->
  
        
  
      
  
        <!-- Grid column -->
        <div class="col-md-6 mb-md-0 mb-3">
  
          <!-- Links -->
          <h5 class="text-uppercase" style="color:white;">Get exclusive discounts</h5>
  
          <ul class="list-unstyled">
            
            <form>
                <div class="row">
                  <div class="col">
                    <input type="text" class="form-control" placeholder="e-mail">
                  </div>
                  <div class="col">
                    <button style="background-color: black;" id="submit" class="btn ">SUBMIT</button>
                  </div>
                </div>
              </form>
            
          </ul>
  
        </div>
        <!-- Grid column -->
  
      </div>
      <!-- Grid row -->
  
    </div>
    <!-- Footer Links -->
  
  
  </footer>
  <!-- Footer -->

    <!----- /Footer ------>










<!-- /FIM Footer -->

</body>
</html>