<?php require('views/includes/header.php'); ?>




    <!-- 1 SECTION AVEC LES 3 LOGOS LES PLUS POPULAIRES --> 
    <link rel="stylesheet" href="assets/css/style.css">   
    <section class="section1">
        <div class="card1">
            <p class="tendances">
                Tendances :
            </p>
          
            <ul>                
                <li> <a href="popular?langage=9"><img class="python" src="assets/img/python.svg" alt="logo python"></a></li>
                <li><a href="popular?langage=4"><img src="assets/img/js.svg" alt="logo Javascript"></a></li>
                <li><a href="popular?langage=1"><img src="assets/img/c.svg" alt="Logo C++"></a>  </li>
            </ul>
            </form>
        </div>
  
    <!-- 2EME SECTION == 1 GRAPHIQUE  -->
    <div class="chartBoxhome">
        <div class="card2">
            <p>representation générale sur plusieurs années :</p>
    
            <div class="canvas1">
                <canvas id="charthomeline"></canvas>
            </div>
        </div>            

    <!-- 3EME SECTION == DEUXIEME GRAPHIQUE EN DONUTS -->
         <div class="card3">
            <form>
              <p><button class="moins"><</button><span class="annee"> 2021 </span><button class="plus">></button></p>
            </form>
            
              <canvas id="chartDoughnut"></canvas>
            </div> 
        </div>
        
    </section>
    
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.5.0/chart.min.js"></script>
<script src="script.js"></script>
<script src="darkmode.js"></script>
<div class="xdlol"></div>

</html>







<?php
  include "includes/footer.php"  
?>