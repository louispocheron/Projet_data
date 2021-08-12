<?php
include "includes/header.php";
include "../assets/scrap/simple_html_dom.php";
?>

<!-- BOUTONS DIFFÉRENTS LANGAGES -->
<form method="post" class="section_less_logos">
    <button class="button_logo Julia" value ="5">
        <img class="less_logo" src="../assets/img/Julia.png">
    </button>
    <button class="button_logo Go" value ="2">
        <img class="less_logo" src="../assets/img/Go.png">
    </button>
    <button class="button_logo Rust" value ="10">
        <img class="less_logo" src="../assets/img/Rust.png">
    </button>
    <button class="button_logo Kotlin" value ="6">
        <img class="less_logo" src="../assets/img/Kotlin.png">
    </button>
    <button class="button_logo Swift" value ="11">
        <img class="less_logo" src="../assets/img/Swift.png">
    </button>
    <button class="button_logo Typescript" value ="12">
        <img class="less_logo" src="../assets/img/TypeScript.png">
    </button>

<!-- SCRAP DESCRIPTION LANGAGE -->
<!-- julia -->
    <p class="scrapJulia">
        <?php
            $html = file_get_html("https://fr.wikipedia.org/wiki/Julia_(langage)");
            echo $html->find('h1[class="firstHeading"]', 0)->plaintext;
        ?>
    </br>

        <?php
            echo $html->find('p', 1)->plaintext;
            echo $html->find('p', 2)->plaintext;
            echo $html->find('p', 3)->plaintext;
            echo $html->find('p', 4)->plaintext;
        ?>
    </p>
<!-- go -->
    <p class= "scrapGo">
    <?php
    $html = file_get_html("https://fr.wikipedia.org/wiki/Go_(langage)");
    echo $html->find('h1[class="firstHeading"]', 0)->plaintext;
?>
</br>
<?php
    echo $html->find('p', 1)->plaintext;
    echo $html->find('p', 2)->plaintext;
    echo $html->find('p', 3)->plaintext;
    echo $html->find('p', 4)->plaintext;
?>
    </p>
<!-- kotlin -->
<p class="scrapKotlin">
    <?php
$html = file_get_html("https://fr.wikipedia.org/wiki/Kotlin_(langage)");
echo $html->find('h1[class="firstHeading"]', 0)->plaintext;
?>
</br>
<?php
echo $html->find('p', 1)->plaintext;
echo $html->find('p', 2)->plaintext;
echo $html->find('p', 3)->plaintext;
echo $html->find('p', 4)->plaintext;



?>
</p>
<!-- swift -->
<p class="scrapSwift">
    <?php
$html = file_get_html("https://fr.wikipedia.org/wiki/Swift_(langage_d%27Apple)");
echo $html->find('h1[class="firstHeading"]', 0)->plaintext;
?>
</br>
<?php
echo $html->find('p', 1)->plaintext;
echo $html->find('p', 2)->plaintext;
echo $html->find('p', 3)->plaintext;
echo $html->find('p', 4)->plaintext;
?>
</p>
<!-- typescript -->
<p class="scrapTypescript">
    <?php
$html = file_get_html("https://fr.wikipedia.org/wiki/TypeScript");
echo $html->find('h1[class="firstHeading"]', 0)->plaintext;
?>
</br>
<?php
echo $html->find('p', 1)->plaintext;
echo $html->find('p', 2)->plaintext;
echo $html->find('p', 3)->plaintext;
?>
</p>
<!-- rust -->
<p class="scrapRust">
    <?php
$html = file_get_html("https://fr.wikipedia.org/wiki/Rust_(langage)");
echo $html->find('h1[class="firstHeading"]', 0)->plaintext;
?>
</br>
<?php
echo $html->find('p', 1)->plaintext;
echo $html->find('p', 2)->plaintext;
echo $html->find('p', 3)->plaintext;
echo $html->find('p', 4)->plaintext;
?>
</p>
</form>

<!-- GRAPH CHART.JS -->
<div class="chartBox">
        <canvas id="lineChart_less"></canvas>
        <canvas id="polarChart"><canvas>
</div>

<?php
  include "includes/footer.php"  
?>