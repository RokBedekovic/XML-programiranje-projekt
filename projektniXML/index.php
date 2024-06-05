<?php

//dohvacanje podataka iz cars.json filea
$cars = json_decode(file_get_contents('cars.json'), true);

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Japan Auto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
    <!-- Navigacija bootstrap -->
    <div data-bs-theme="dark" class="mb-4">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <div>
                    <a class="navbar-brand" href="#">Home</a>
                    <a class="navbar-brand" href="mazda.php">Mazda</a>
                    <a class="navbar-brand" href="honda.php">Honda</a>
                    <a class="navbar-brand" href="suzuki.php">Suzuki</a>
                    <a class="navbar-brand" href="toyota.php">Toyota</a>
                </div>
            </div>
        </nav>
    </div>
    <!-- Kartice bootstrap sa textom -->
    <h1 class="d-flex justify-content-center">Japan Auto</h1>
    <div class="container d-flex justify-content-center">
        <div class="card" style="width: 60rem;">
            <img src="hero1.png" class="card-img-top">
            <div class="card-body">
                <hr>
                <p class="card-text">Japanska automobilska industrija je jedinstvena s istorijskog aspekta,
                    a neke paralele mogu da se izvedu, zajedničke za sve marke s dalekog istoka.
                    Proizvođači automobila iz „Zemlje izlazećeg sunca“ su mahom proistekli iz velikih industrijskih
                    korporacija kao ogranci, i to u prvoj polovini 20. veka. Prvobitno, bili su usaglašeni sa
                    zahtevima domaćeg tržišta, posebno kada je reč o komercijalnim i putničkim vozilima. Međutim,
                    tek od šezdesetih godina prošlog veka japanska automobilska industrija doživljava ogroman uspeh
                    na globalnom planu, našavši se među tri zemlje sa najrazvijenijom automobilskom industrijom na
                    svetu.</p>
            </div>
        </div>
    </div>
    <br>
    <div class="container d-flex justify-content-center">
        <div class="card" style="width: 60rem;">
            <div class="card-body">
                <a href="toyota.php">
                    <h2>Toyota</h2>
                </a>
                <p class="card-text">
                    Toyota Motor Corporation je uz Volkswagen Grupu i Renault-Nissan-Mitsubishi najveći proizvođač
                    automobila na svetu, koji na tržište godišnje plasira preko 10 miliona vozila. Kompaniju je 1937.
                    godine osnovao Kičiro Tojoda, a ona je, tokom spomenute naftne krize sedamdesetih godina, doživela
                    neverovatan rast. Sa cenom nafte koja je otišla „u nebesa“, američko tržište je bilo očajnički u
                    potrazi za jeftinijim, ekonomičnim automobilima. Veliki sedani pogonjeni glomaznim V8 motorima su
                    preko noći postali nepoželjni.</p>
            </div>
        </div>
    </div>
    <br>
    <div class="container d-flex justify-content-center">
        <div class="card" style="width: 60rem;">
            <div class="card-body">
                <a href="honda.php">
                    <h2>Honda</h2>
                </a>
                <p class="card-text">
                    Honda Motor Company je jedan od lidera, kako u okviru automobilske industrije, tako i među
                    proizvođačima
                    motocikala. Takođe, Honda proizvodi motore s unutrašnjim sagorevanjem i za druge primene. Prvi
                    automobil
                    sa čuvenim „H“ je bio S500, lansiran 1963. godine, nošen na krilima uspeha u motociklističkom
                    sektoru,
                    koji je trajao u to vreme dve decenije. Bestseler, Civic, lansiran je 1972. , a Honda je bila
                    japanski
                    pionir kada je reč o luksuznim divizijama, predstavivši Acuru 1986. na američkom tržištu. Pored
                    Toyote,
                    i ova kompanija ulaže mnogo u razvoj ekološki podobnih tehnologija, tako da je većina njenih modela
                    dostupna
                    i sa hibridnim pogonom.</p>
            </div>
        </div>
    </div>
    <br>
    <div class="container d-flex justify-content-center">
        <div class="card" style="width: 60rem;">
            <div class="card-body">
                <a href="suzuki.php">
                    <h2>Suzuki</h2>
                </a>
                <p class="card-text">
                    Kompanija koju danas znamo kao Suzuki Motor Corporation je osnovana pre 109 godina kao proizvođač
                    mašina
                    za tkanje, da bi se kasnije fokusirala na motocikle. Prvi automobil sa Suzukijevim bedžom je
                    lansiran 1955.,
                    kao odgovor na posleratnu potrebu stanovništva za jeftinim i pouzdanim prevozom.Suzuki je poznat po
                    malim,
                    laganim i pouzdanim vozilima, ali i po pogonu na sva četiri točka. Ovi atributi su kompaniji donelli
                    značajan
                    tržišni udeo, lansiravši je u deset najvećih proizvođača automobila na svetu. Takođe, Suzuki je
                    japanski lider
                    u segmentu Kei automobila.</p>
            </div>
        </div>
    </div>
    <br>
    <div class="container d-flex justify-content-center">
        <div class="card" style="width: 60rem;">
            <div class="card-body">
                <a href="mazda.php">
                    <h2>Mazda</h2>
                </a>
                <p class="card-text">
                    Osnovana je 1920. godine u Hirošimi, kao Toyo Cork Kogyo. Prvobitna specijalizacija je bila vezana
                    za
                    motorne rikše i naoružanje za japansku armiju. Prvi automobil je plasiran 1960. godine pod oznakom
                    R360,
                    doživevši veliki uspeh na domaćem tržištu. U isto vreme, Mazda je započela razvoj Wankel rotacionih
                    motora,
                    u nameri da se po tom principu diferencira od ostalih japanskih proizvođača.Međutim, sedamdesetih
                    godina,
                    kada je naftna kriza bila na vrhuncu, Mazda je bila na ivici bankrota, tako da je morala da se
                    koncentriše
                    na štedljive motore. Od 1970. do 2010., kompanija je bila u partnerstvu sa Fordom, a u okviru tog
                    perioda,
                    razvijeni su brojni zajednički modeli. Danas je Mazda stekla imidž proizvođača atraktivnih
                    automobila,
                    prijatnih za vožnju.</p>
            </div>
        </div>
    </div>

    <br>

    <footer class="bg-body-tertiary text-center text-lg-start mt-3" data-bs-theme="dark">
        <div class="text-center p-3 text-white">
            © 2024 Copyright: RB
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
</body>

</html>