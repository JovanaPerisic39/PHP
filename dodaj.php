<?php
include "Baza.php";
$db = new Baza();
$poruka = "";

if(isset($_POST['dodaj'])){
    $naziv = trim($_POST['naziv']);
    $ukus = trim($_POST['ukus']);
    $tip = trim($_POST['tip']);
    $cena = trim($_POST['cena']);
    $gluten = trim($_POST['gluten']);


    if($db->sacuvaj($naziv, $ukus, $tip, $cena, $gluten)){
        $poruka = "Uspesno sacuvana poslastica";
    }else{
        $poruka = "Neuspesno sacuvana poslastica";
    }

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Sweet creations</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600&family=Teko:wght@400;500;600&display=swap" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border position-relative text-primary" style="width: 6rem; height: 6rem;" role="status"></div>
        <img class="position-absolute top-50 start-50 translate-middle" src="img/icons/icon-1.png" alt="Icon">
    </div> -->

    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top py-lg-0 px-lg-5 wow fadeIn" data-wow-delay="0.1s">
        <a href="index.php" class="navbar-brand ms-4 ms-lg-0">
            <h1 class="text-primary m-0"> </h1>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="index.php" class="nav-item nav-link">Pocetna</a>
                <a href="dodaj.php" class="nav-item nav-link">Dodaj u ponudu</a>
                <a href="izmeni.php" class="nav-item nav-link">Izmeni cenu</a>
                <a href="obrisi.php" class="nav-item nav-link">Obrisi iz ponude</a>
            </div>
        </div>
    </nav>

    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="display-5 mb-4">Momenti koji se pamte</h1>
                <h3 class="text-primary"><?= $poruka; ?></h3>
            </div>
            <div class="row">
                <form method="post" action="">
                    <label for="naziv">Naziv</label>
                    <input type="text" id="naziv" name="naziv" class="form-control">
                    <label for="ukus">Ukus</label>
                    <input type="text" id="ukus" name="ukus" class="form-control">
                    <label for="tip">Tip</label>
                    <select id="tip" name="tip" class="form-control">

                    </select>

                    <label for="cena">Cena</label>
                    <input type="number" id="cena" name="cena" class="form-control">
                    <label for="gluten">Gluten</label>
                    <select id="gluten" name="gluten" class="form-control">
                        <option value="1">Da </option>
                        <option value="0">Ne </option>
                    </select>
                    <hr/>
                    <button type="submit" style="border-radius: 40px; border: 1px solid grey; background-color: rgb(221, 203, 217)" name="dodaj"> Dodaj u ponudu </button>

                </form>
            </div>
            
        </div>
    </div>

    <!-- <div class="footerLogo"></div> -->

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="js/main.js"></script>

    <script>
        function popuniKomboTipova() {

            $.ajax({
                url: 'tipovi.php',
                success: function (data) {
                   $("#tip").html(data);
                }
            });
        }
        popuniKomboTipova();
    </script>

</body>

</html>