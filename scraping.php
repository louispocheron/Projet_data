// PYTHON
<?php
include("simple_html_dom.php");

$html = file_get_html("https://fr.wikipedia.org/wiki/Python_(langage)");
preg_match_all('/<img[^>]+>/i',$html, $result); 

echo $html->find('h1[class="firstHeading"]', 0)->plaintext;
?>
</br>
<?php
echo $html->find('p', 1)->plaintext;
echo $html->find('p', 2)->plaintext;
?>
</br>

<?php

echo $html->find('a[class="image"]', 0);
?>


<!-- PHP -->
</br>   
    </br>



<?php

$html = file_get_html("https://fr.wikipedia.org/wiki/PHP");
preg_match_all('/<img[^>]+>/i',$html, $result); 

echo $html->find('h1[class="firstHeading"]', 0)->plaintext;
?>
</br>
<?php
echo $html->find('p', 2)->plaintext;
echo $html->find('p', 3)->plaintext;
?>
</br>

<?php

echo $html->find('a[class="image"]', 0);
?>

<!-- C++ -->
</br>   
    </br>

<?php
$html = file_get_html("https://fr.wikipedia.org/wiki/C%2B%2B");
preg_match_all('/<img[^>]+>/i',$html, $result); 

echo $html->find('h1[class="firstHeading"]', 0)->plaintext;
?>
</br>
<?php
echo $html->find('p', 2)->plaintext;
echo $html->find('p', 3)->plaintext;
?>
</br>

<?php

echo $html->find('a[class="image"]', 0);
?>




<!-- JAVASCRIPT -->


</br>   
    </br>

<?php
$html = file_get_html("https://fr.wikipedia.org/wiki/JavaScript");
preg_match_all('/<img[^>]+>/i',$html, $result); 

echo $html->find('h1[class="firstHeading"]', 0)->plaintext;
?>
</br>
<?php
echo $html->find('p', 1)->plaintext;
echo $html->find('p', 2)->plaintext;
echo $html->find('p', 3)->plaintext;
?>
</br>

<?php

echo $html->find('a[class="image"]', 0);
?>





<!-- JAVA -->

</br>   
    </br>

<?php
$html = file_get_html("https://fr.wikipedia.org/wiki/Java_(langage)");
preg_match_all('/<img[^>]+>/i',$html, $result); 

echo $html->find('h1[class="firstHeading"]', 0)->plaintext;
?>
</br>
<?php
echo $html->find('p', 1)->plaintext;
echo $html->find('p', 2)->plaintext;
echo $html->find('p', 3)->plaintext;
?>
</br>

<?php

echo $html->find('a[class="image"]', 0);
?>





<!-- PERL -->

</br>   
    </br>

<?php
$html = file_get_html("https://fr.wikipedia.org/wiki/Perl_(langage)");
preg_match_all('/<img[^>]+>/i',$html, $result); 

echo $html->find('h1[class="firstHeading"]', 0)->plaintext;
?>
</br>
<?php
echo $html->find('p', 1)->plaintext;
echo $html->find('p', 2)->plaintext;
echo $html->find('p', 3)->plaintext;
echo $html->find('p', 4)->plaintext;
echo $html->find('p', 5)->plaintext;


?>
</br>

<?php

echo $html->find('a[class="image"]', 0);
?>




<!-- GO  -->


</br>   
    </br>

<?php
$html = file_get_html("https://fr.wikipedia.org/wiki/Go_(langage)");
preg_match_all('/<img[^>]+>/i',$html, $result); 

echo $html->find('h1[class="firstHeading"]', 0)->plaintext;
?>
</br>
<?php
echo $html->find('p', 1)->plaintext;
echo $html->find('p', 2)->plaintext;
echo $html->find('p', 3)->plaintext;
echo $html->find('p', 4)->plaintext;



?>
</br>

<?php

echo $html->find('a[class="image"]', 0);
?>





<!-- KOTLIN -->

</br>   
    </br>

<?php
$html = file_get_html("https://fr.wikipedia.org/wiki/Kotlin_(langage)");
preg_match_all('/<img[^>]+>/i',$html, $result); 

echo $html->find('h1[class="firstHeading"]', 0)->plaintext;
?>
</br>
<?php
echo $html->find('p', 1)->plaintext;
echo $html->find('p', 2)->plaintext;
echo $html->find('p', 3)->plaintext;
echo $html->find('p', 4)->plaintext;



?>
</br>

<?php

echo $html->find('a[class="image"]', 1);
?>



<!-- swift -->

</br>   
    </br>

<?php
$html = file_get_html("https://fr.wikipedia.org/wiki/Swift_(langage_d%27Apple)");
preg_match_all('/<img[^>]+>/i',$html, $result); 

echo $html->find('h1[class="firstHeading"]', 0)->plaintext;
?>
</br>
<?php
echo $html->find('p', 1)->plaintext;
echo $html->find('p', 2)->plaintext;
echo $html->find('p', 3)->plaintext;
echo $html->find('p', 4)->plaintext;



?>
</br>

<?php

echo $html->find('a[class="image"]', 0);
?>


<!-- TYPESCRIPT -->

</br>   
    </br>

<?php
$html = file_get_html("https://fr.wikipedia.org/wiki/TypeScript");
preg_match_all('/<img[^>]+>/i',$html, $result); 

echo $html->find('h1[class="firstHeading"]', 0)->plaintext;
?>
</br>
<?php
echo $html->find('p', 1)->plaintext;
echo $html->find('p', 2)->plaintext;
echo $html->find('p', 3)->plaintext;
// echo $html->find('p', 4)->plaintext;



?>
</br>

<?php

echo $html->find('a[class="image"]', 0);
?>



<!-- RUST -->

</br>   
    </br>

<?php
$html = file_get_html("https://fr.wikipedia.org/wiki/Rust_(langage)");
preg_match_all('/<img[^>]+>/i',$html, $result); 

echo $html->find('h1[class="firstHeading"]', 0)->plaintext;
?>
</br>
<?php
echo $html->find('p', 1)->plaintext;
echo $html->find('p', 2)->plaintext;
echo $html->find('p', 3)->plaintext;
echo $html->find('p', 4)->plaintext;



?>
</br>

<?php

echo $html->find('a[class="image"]', 0);
?>



<!-- JULIA -->

</br>   
    </br>

<?php
$html = file_get_html("https://fr.wikipedia.org/wiki/Julia_(langage)");
preg_match_all('/<img[^>]+>/i',$html, $result); 

echo $html->find('h1[class="firstHeading"]', 0)->plaintext;
?>
</br>
<?php
echo $html->find('p', 1)->plaintext;
echo $html->find('p', 2)->plaintext;
echo $html->find('p', 3)->plaintext;
echo $html->find('p', 4)->plaintext;
?>
</br>

<?php

echo $html->find('a[class="image"]', 1);
?>