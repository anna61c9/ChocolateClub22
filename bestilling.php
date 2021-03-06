<!-- Instruktion til webbrowser om at vi kører HTML5 -->
<!DOCTYPE html>

<!-- html starter og slutter hele dokumentet / lang=da: Fortæller siden er på dansk -->
<html lang="da">

<!-- I <head> har man opsætning - det ser brugeren ikke, men det fortæller noget om siden -->
<head>
    <!-- Sætter tegnsætning til utf-8 som bl.a. tillader danske bogstaver -->
    <meta charset="utf-8">

    <!-- Titel som ses oppe i browserens tab mv. -->
    <title>Ordrebekræftelse</title>

    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

    <!-- Sikrer man kan benytte CSS ved at tilkoble en CSS fil -->
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/bestilling.css" rel="stylesheet" type="text/css">

    <!-- Sikrer den vises korrekt på mobil, tablet mv. ved at tage ift. skærmstørrelse - bliver brugt til responsive websider -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<!-- i <body> har man alt indhold på siden som brugeren kan se -->
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand ms-2" href="index.html"><img src="images/Logo.png" alt="Home"></a>
        <div class="order-lg-last d-flex">
            <a class="nav-link " href="kurv.php"><img src="images/Kurv.png" alt="cart"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                    aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link active" aria-current="page" href="Webshop.php">Shop</a>
                <a class="nav-link" href="#">Chocolatiers</a>
                <a class="nav-link" href="#">Kontakt</a>
                <a class="nav-link" href="404.php">Speciel bestilling</a>
            </div>
        </div>
    </div>
</nav>

<figure class="container-fluid">
    <a href="betaling.php">
        <img src="images/pil.png" alt="Tilbage pil"></a>
</figure>

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="betaling.php">betaling</a></li>
        <li class="breadcrumb-item active" aria-current="page">bestilling</li>
    </ol>
</nav>

<article class="container col-12">
    <div class="row pt-3 gx-5">
        <div class="text-center">
            <h1>Tak for din bestilling</h1>
        </div>
    </div>
</article>

<br><br>

<article class="container col-12">
    <div class="row">
        <div class="text-center">
            <h3>Kvittering er sendt til din e-mail</h3>
        </div>
    </div>
</article>

<article class="container col-3 pt-5">
    <div class="row">
        <div class="text-center opacity-50;">
            <h3>Din ordre er klar kl 12:00</h3>
        </div>
    </div>
</article>

<br> <br>

<figure class="container col-12">
    <div class="row">
        <div class="justify-content-end">
            <img src="images/checkmark.webp" class="rounded mx-auto d-block" width="20%" alt="Checkmark">
        </div>
    </div>
</figure>

<br>

<article class="container col-12">
    <div class="row p-5">
        <div class="text-center">
            <h3>Den kan hente ved</h3>
            <h3>Agerskovvej 17, 4000 Roskilde</h3>
        </div>
    </div>
</article>

<figure class="container">
    <div class="row justify-content-end">
        <div class="col-3">
            <img src="images/SoMelogo.png" alt="Sociale Medier">
        </div>
    </div>
</figure>

<!-- footer -->
<a class="nav-link d-lg-none p-0 m-0" href="#"><img src="images/kort.webp" alt="Map"></a>
<a class="container-fluid nav-link d-none d-lg-block p-0 m-0" href="#"><img src="images/KortLG.webp" alt="largemap"></a>

<nav class="nav bg-footerfarve m-0">
    <div class="row justify-content-evenly mx-auto">

        <div class="card footercard col-10 col-md-3 col-lg-4 mx-auto bg-footerfarve p-0" style="">
            <div class="card-body">
                <h5 class="card-title">Chocolate Club</h5>
                <h6 class="card-subtitle mb-2 text-muted">
                    Agerskovvej 17,
                    4000 Roskilde</h6>
                <a class="nav-link" href="#"><img src="images/Telefon.png" alt="number">+45 12 34 56 78</a>
                <a class="nav-link" href="#"><img src="images/Mail.png" alt="mail">Mail@cc.dk</a>
            </div>
        </div>

        <div class="card footercard col-10 col-md-3 col-lg-4 mx-auto bg-footerfarve p-0" style="">
            <div class="card-body">
                <h5 class="card-title">Åbningstider</h5>
                <p class="card-text">
                    Mandag - torsdag</p>
                <p class="card-text">
                    12:00 - 16:30</p><br>
                <p class="card-text">
                    Fredag - søndag</p>
                <p class="card-text">
                    11:00 - 19:00</p>
            </div>
        </div>

        <div class="card footercard col-10 col-md-3 col-lg-4 mx-auto bg-footerfarve p-0" style="">
            <div class="card-body">
                <h5 class="card-title">Kundeservice</h5>
                <a class="nav-link p-0" href="#">Fragt og levering</a>
                <a class="nav-link p-0" href="#">Bytte- og returret</a>
                <a class="nav-link p-0" href="#">Handelsbetingelser</a>
                <a class="nav-link p-0" href="#">Reklamation</a>
                <a class="nav-link p-0" href="#">Persondatapolitik</a>
                <a class="nav-link p-0" href="#">Fødevarestyrelsen</a>
                <a class="nav-link p-0" href="#">Bæredygtighed</a>
                <a class="nav-link p-0" href="#">Gavekort og tilgodebeviser</a>
                <a class="nav-link p-0" href="#">Om os</a>
                <a class="nav-link p-0" href="#">Q&A</a>
                <a class="nav-link p-0" href="#">Cookies</a>
            </div>
        </div>
    </div>
</nav>

<div class="container justify-content-center rettighed">
    <div class="row p-3">
        <img src="images/rettigheder.png" alt="copyrights">
    </div>
</div>

<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
