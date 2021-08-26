<?php require("views/includes/header.php");
      require('assets/scrap/simple_html_dom.php'); 
?>  




<link rel="stylesheet" href="assets/css/popular.css">   
    <section class="section1">
                <div class="desktop">
        
                <a href="home"><img  class="logodesk" src="assets/img/logo.svg" alt="logo du site"></a>
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
                    <button class="testpop" value="<?php echo $pop_lang[0]?>">opjpojpo</button>
                        <?php echo $pop_lang[2]?> :
                </p>
                <?php if($_GET['langage'] == '3'){
                    ?>
                    <img class="java" src="<?php if($_GET['langage'] == '3'){
                        echo $pop_lang[4];
                    } ?>" alt=""> 
                 <?php }
                 else{
                     ?> <img class="restimg" src="<?php echo $pop_lang[4]; ?>" alt=""> <?php
                 }
                 ?>
            
                    <div class="scraptext">
                    <?php
                    if ($_GET['langage'] == '7'){
                        $html = file_get_html("".$pop_lang[5]."");
                    echo $html->find('h1[class="firstHeading"]', 0)->plaintext;
                    echo $html->find('p', 1)->plaintext;
                    echo $html->find('p', 2)->plaintext;
                    echo $html->find('p', 3)->plaintext;
                    echo $html->find('p', 4)->plaintext;
                    }
                    else{
                    $html = file_get_html("".$pop_lang[5]."");
                    echo $html->find('h1[class="firstHeading"]', 0)->plaintext;
                    echo $html->find('p', 1)->plaintext;
                    echo $html->find('p', 2)->plaintext;
                    }
                    ?>     
                    </div>           
        </div>
    <!-- 2EME SECTION == 1 GRAPHIQUE  -->    
        <div class="card2">
            <p>representation générale sur plusieurs années :</p>
    
            <div class="canvas1">
                <canvas id="chartpopline"></canvas>
            </div>
        </div>     
    </section>

           
 
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.5.0/chart.min.js"></script>
<script src="popular.js"></script>

<script src="script.js"></script>

<script src="darkmode.js"></script>
<div class="xdlol"></div>

</html>

<?php
  include "views/includes/footer.php"  
?>