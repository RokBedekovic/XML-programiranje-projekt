<?php

//dohvacanje podataka iz cars.json filea
$cars = json_decode(file_get_contents('cars.json'), true);
//rastavljanje podataka na modele auta kako bi dohvatili samo taj dio json filea
$honda = $cars['cars']['honda'];
$honda_civic = [$honda[0]];
$honda_jazz = [$honda[1]];
$honda_crv = [$honda[2]];

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Honda</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
    <!-- Navigacija bootstrap -->
    <div data-bs-theme="dark" class="mb-3">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <div>
                    <a class="navbar-brand" href="index.php">Home</a>
                    <a class="navbar-brand" href="mazda.php">Mazda</a>
                    <a class="navbar-brand" href="#">Honda</a>
                    <a class="navbar-brand" href="suzuki.php">Suzuki</a>
                    <a class="navbar-brand" href="toyota.php">Toyota</a>
                </div>
            </div>
        </nav>
    </div>

    <h1 class="d-flex justify-content-center">Honda</h1>

    <div class="container" style="width: 60rem;">
        <!-- Tablice i petlje koje idu kroz json file i dohvacaju podatke -->
        <table class="table table-dark text-white mt-2">
            <thead>
                <tr>
                    <th>Model</th>
                    <th>Godina</th>
                    <th>Cijena</th>
                    <th>Zapremnina</th>
                    <th>Motor</th>
                    <th>Dostupan</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($honda_civic as $car): ?>

                    <tr>
                        <td><?= $car['model']; ?></td>
                        <td><?php echo $car['year']; ?></td>
                        <td><?php echo $car['price']; ?></td>
                        <td><?php echo $car['engine']; ?></td>
                        <td><?php echo $car['fuelType']; ?></td>
                        <td><?php echo $car['available'] ? 'Da' : 'Ne'; ?></td>
                    </tr>
                    <tr>
                        <img src="<?= $car['image']; ?>" width="935px">
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <br>
        <table class="table table-dark text-white mt-2">
            <thead>
                <tr>
                    <th>Model</th>
                    <th>Godina</th>
                    <th>Cijena</th>
                    <th>Zapremnina</th>
                    <th>Motor</th>
                    <th>Dostupan</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($honda_jazz as $car): ?>

                    <tr>
                        <td><?= $car['model']; ?></td>
                        <td><?php echo $car['year']; ?></td>
                        <td><?php echo $car['price']; ?></td>
                        <td><?php echo $car['engine']; ?></td>
                        <td><?php echo $car['fuelType']; ?></td>
                        <td><?php echo $car['available'] ? 'Da' : 'Ne'; ?></td>
                    </tr>
                    <tr>
                        <img src="<?= $car['image']; ?>" width="935px">
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <br>
        <table class="table table-dark text-white mt-2">
            <thead>
                <tr>
                    <th>Model</th>
                    <th>Godina</th>
                    <th>Cijena</th>
                    <th>Zapremnina</th>
                    <th>Motor</th>
                    <th>Dostupan</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($honda_crv as $car): ?>

                    <tr>
                        <td><?= $car['model']; ?></td>
                        <td><?php echo $car['year']; ?></td>
                        <td><?php echo $car['price']; ?></td>
                        <td><?php echo $car['engine']; ?></td>
                        <td><?php echo $car['fuelType']; ?></td>
                        <td><?php echo $car['available'] ? 'Da' : 'Ne'; ?></td>
                    </tr>
                    <tr>
                        <img src="<?= $car['image']; ?>" width="935px">
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

    </div>

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