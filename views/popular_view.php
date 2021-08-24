<?php require("views/includes/header.php");
      require('assets/scrap/simple_html_dom.php'); 
?>  




<link rel="stylesheet" href="assets/css/popular.css">   
    <section class="section1">
        <div class="card1">
            <p class="tendances">
                <?php echo $pop_lang[2]?>
            </p>
            <img src="<?php echo $pop_lang[4] ?>" alt="">           
            <p>  
                    <?php
                    $html = file_get_html("".$pop_lang[5]."");
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
    </section>
    <!-- 2EME SECTION == 1 GRAPHIQUE  -->
    <section class="section2">
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