<!DOCTYPE html>
<html lang="fr">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <!-- Fontawesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
  <!-- CSS -->
  <link rel="stylesheet" type="text/css" href="assets/css/header.css">
  <!-- Favicon -->
  <!-- <link rel="icon" type="image/png" href="assets/images/pop-corn.png" /> -->
  <!-- ChartJS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.5.0/chart.min.js"></script>
  <title>LangagesDashboard</title>
</head>

<body>

<form method="GET">
  <header class="header_mobile">
            <input id="menu__toggle" type="checkbox" />
            <label class="menu__btn" for="menu__toggle">
                <span></span>
            </label>
            <ul class="menu__box">
                <li><a class="menu__item" href="popular?langage=8">PHP</a></li>
			          <li><a class="menu__item" href="popular?langage=4">JS</a></li>
			          <li><a class="menu__item" href="popular?langage=1">C/C++</a></li>
			          <li><a class="menu__item" href="popular?langage=3">JAVA</a></li>
			          <li><a class="menu__item" href="popular?langage=7">PERL</a></li>
			          <li><a class="menu__item" href="popular?langage=9">Python</a></li>
                <li><a class="menu__item" href="less_popular">Les Moins Populaires</a></li>
                <div class="social">
                  <li> <a href="https://github.com/louispocheron/Projet_data"><i class="fab fa-github"></i></a></li>
                  <li><a href="https://www.google.com/search?q=desapear+gif&tbm=isch&ved=2ahUKEwjyo8Cxt8zyAhUThhoKHRWHBxMQ2-cCegQIABAA&oq=desapear+&gs_lcp=CgNpbWcQARgAMgQIABAeMgYIABAKEBgyBggAEAoQGDIGCAAQChAYOgcIIxDqAhAnOgQIIxAnOgUIABCABDoECAAQClCyQlikTWDGWGgBcAB4AIABXogB9QSSAQE5mAEAoAEBqgELZ3dzLXdpei1pbWewAQrAAQE&sclient=img&ei=OFomYfKnPJOMapWOnpgB&bih=754&biw=1536&rlz=1C1GCEA_enFR948FR948#imgrc=jaJNdcaSbbZq8M"><i class="fab fa-linkedin-in"></i></a></li>
                  <li><p class="copyright">© Copyright</p></li>
            </ul>
                    

        <!-- LOGO DU SITE -->
        <a href="home"><img class="logo" src="assets/img/logo.svg" alt=""></a>
        <!-- BOUTTON THEME -->
          <input type="checkbox" class="checkbox" id="checkbox"> 
            <label for="checkbox" class="label">
                <i class="fas fa-moon"></i>
                <i class='fas fa-sun'></i>
                <div class='ball'></div>
            </label> 
  </header>
</form>
