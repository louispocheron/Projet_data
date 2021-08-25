<?php require('views/includes/header.php'); ?>

    <!-- 1 SECTION AVEC LES 3 LOGOS LES PLUS POPULAIRES --> 
    <link rel="stylesheet" href="assets/css/style.css">
    <section class="section1">
        <div class="desktop">
        <img  class="logodesk" src="assets/img/logo.svg" alt="logo du site">
            <ul>
                <li><a class="menu__item" href="popular?langage=8">PHP</a></li>
                <li><a class="menu__item" href="popular?langage=4">JS</a></li>
                <li><a class="menu__item" href="popular?langage=1">C/C++</a></li>
                <li><a class="menu__item" href="popular?langage=3">JAVA</a></li>
                <li><a class="menu__item" href="popular?langage=7">PERL</a></li>       
                <li><a class="menu__item" href="popular?langage=9">PYTHON</a></li>             
                <li><a class="menu__item" href="less_popular">Les Moins Populaires</a></li>
                <div class="social">
                    <li> <a href="#"><i class="fab fa-github"></i></a></li>
                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                    <li><p class="copyright">© Copyright</p></li>
                </div>
            </ul>
     </div>
        <div class="card1">
            <p class="tendances">
                Tendances :
            </p>
            <ul>                
                <li> <a href="popular?langage=9"><img class="python" src="assets/img/python.svg" alt="logo python"></a></li>
                <li><a href="popular?langage=4"><img src="assets/img/js.svg" alt="logo Javascript"></a></li>
                <li><a href="popular?langage=1"><img src="assets/img/c.svg" alt="Logo C++"></a>  </li>
            </ul>
        </div>
  
    <!-- 2EME SECTION == 1 GRAPHIQUE  -->
        
            <div class="card2">
                <p>representation générale sur plusieurs années :</p>
                <div class="canvas1">
                    <canvas id="charthomeline"></canvas>
                </div>
            </div>            
    <!-- 3EME SECTION == DEUXIEME GRAPHIQUE EN DONUTS -->
    <div class="btn_dark">
            <input type="checkbox" class="checkbox" id="checkbox"> 
            <label for="checkbox" class="label">
                <i class="fas fa-moon"></i>
                <i class='fas fa-sun'></i>
                <div class='ball'></div>
            </label> 
            </div>
            <div class="card3">
                <p class="btn_graph"><button class="moins"><</button><span class="annee"> 2021 </span><button class="plus">></button></p>
                <canvas id="chartDoughnut"></canvas>
            </div> 
    </section>
    
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.5.0/chart.min.js"></script>
<script src="script.js"></script>
<script src="darkmode.js"></script>

</html>







<?php
  include "includes/footer.php"  
?>