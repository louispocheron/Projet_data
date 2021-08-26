<?php
include "includes/header.php";
include "assets/scrap/simple_html_dom.php";
?>



<!-- BOUTONS DIFFÉRENTS LANGAGES -->
<link rel="stylesheet" href="assets/css/less.css">
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
    <!-- <div class="desktoptest"> -->
        <div class="card1">
            <h1>Les Moins Populaires</h1>
            <div class="langage1">
                <button class="button_logo Julia" value ="5">
                    <img class="less_logo" src="assets/img/Julia.png">
                </button>
                <button class="button_logo Go" value ="2">
                    <img class="less_logo" src="assets/img/Go.png">
                </button>    
                <button class="button_logo Rust" value ="10">
                    <img class="less_logo" src="assets/img/Rust.png">
                </button>
            </div>    
            <div class="langage2">
    <!-- EN DESSOUS -->
                <button class="button_logo Kotlin" value ="6">
                    <img class="less_logo" src="assets/img/Kotlin.png">
                </button>
                <button class="button_logo Swift" value ="11">
                    <img class="less_logo" src="assets/img/Swift.png">
                </button>
                <button class="button_logo Typescript" value ="12">
                    <img class="less_logo" src="assets/img/TypeScript.png">
                </button>
            </div>
            
            <!-- SCRAP DESCRIPTION LANGAGE -->
            <!-- julia -->

            <div class="scrapJulia scrapitem">
                <p>
                    <?php
                    $html = file_get_html("https://fr.wikipedia.org/wiki/Julia_(langage)");
                    echo $html->find('h1[class="firstHeading"]', 0)->plaintext;
                    ?>
                </p>
                <p>
                    <?php
                    // echo $html->find('p', 1)->plaintext;
                    echo $html->find('p', 2)->plaintext;
                    echo $html->find('p', 3)->plaintext;
                    // echo $html->find('p', 4)->plaintext;
                    ?>
                </p>
            </div>
<!-- go -->
            <div class= "scrapGo scrapitem">
                 <p>
                    <?php
                    $html = file_get_html("https://fr.wikipedia.org/wiki/Go_(langage)");
                    echo $html->find('h1[class="firstHeading"]', 0)->plaintext;
                    ?>
                
                    <?php
                    echo $html->find('p', 1)->plaintext;
                    echo $html->find('p', 2)->plaintext;
                    // echo $html->find('p', 3)->plaintext;
                    // echo $html->find('p', 4)->plaintext;
                    ?>
                </p>
            </div>

<!-- kotlin -->
            <div class="scrapKotlin scrapitem">
                <p>
                    <?php
                    $html = file_get_html("https://fr.wikipedia.org/wiki/Kotlin_(langage)");
                    echo $html->find('h1[class="firstHeading"]', 0)->plaintext;
                    ?>
                    <?php
                    echo $html->find('p', 1)->plaintext;
                    echo $html->find('p', 2)->plaintext;
                    echo $html->find('p', 3)->plaintext;
                    // echo $html->find('p', 4)->plaintext;
                    ?>
                </p>
            </div>

<!-- swift -->
            <div class="scrapSwift scrapitem">
                <p>
                    <?php
                    $html = file_get_html("https://fr.wikipedia.org/wiki/Swift_(langage_d%27Apple)");
                    echo $html->find('h1[class="firstHeading"]', 0)->plaintext;
                    ?>
                    <?php
                    echo $html->find('p', 1)->plaintext;
                    echo $html->find('p', 2)->plaintext;
                    echo $html->find('p', 3)->plaintext;
                    // echo $html->find('p', 4)->plaintext;
                    ?>
                </p>
            </div>
<!-- typescript -->
            <div class="scrapTypescript scrapitem">
                <p>
                    <?php
                    $html = file_get_html("https://fr.wikipedia.org/wiki/TypeScript");
                    echo $html->find('h1[class="firstHeading"]', 0)->plaintext;
                    ?>
                    <?php
                    echo $html->find('p', 1)->plaintext;
                    echo $html->find('p', 2)->plaintext;
                    echo $html->find('p', 3)->plaintext;
                    ?>
                </p>
            </div>
<!-- rust -->
            <div class="scrapRust scrapitem">
                 <p>
                    <?php
                    $html = file_get_html("https://fr.wikipedia.org/wiki/Rust_(langage)");
                    echo $html->find('h1[class="firstHeading"]', 0)->plaintext;
                    ?>  
                    <?php
                    echo $html->find('p', 1)->plaintext;
                    echo $html->find('p', 2)->plaintext;
                    echo $html->find('p', 3)->plaintext;
                    echo $html->find('p', 4)->plaintext;
                    ?>
                </p>
            </div>
        </div> 
<!-- GRAPH CHART.JS -->
        <div class="chartBox">
            <div class="chartlessline">
                <canvas id="lineChart_less"></canvas>
                
            </div>
            <div class="chartlesspolar">
                <canvas id="polarChart"><canvas>
                    
            </div>
        </div>
    </div>
</section>

    <!-- DISPOSITION HEADER POUR LE DESKTOP -->

<?php
  include "includes/footer.php"  
?>

