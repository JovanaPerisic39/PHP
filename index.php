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
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border position-relative text-primary" style="width: 6rem; height: 6rem;" role="status"></div>
        <img class="position-absolute top-50 start-50 translate-middle" src="img/icons/icon-1.png" alt="Icon">
    </div> 




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
                <h4 class="section-title">Sweet creations</h4>
                <h1 class="display-5 mb-4">Momenti koji se pamte</h1>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <label for="tip">Vrsta</label>
                    <select class="form-control" id="tip">
                        <option value="SVE">Sve poslastice</option>
                        <option value="1">Krofne</option>
                        <option value="2">Torte</option>
                        <option value="3">Mafini</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="sort">Cena</label>
                    <select class="form-control" id="sort">
                        <option value="asc">Rastuce</option>
                        <option value="desc">Opadajuce</option>
                    </select>
                </div>

                <div class="cols-md-12" style="padding-top: 20px">
                    <button id="btnF" class="form-control btn-warning" onclick="pretrazi()">Prikazi</button>
                </div>
            </div>
            <div class="row g-4" id="rezultat" style="margin-top:30px" >

            </div>
        </div>
    </div>

    <div class="footerLogo1"></div>


    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="js/main.js"></script>

    <script>
        function pretrazi() {
            let tip = $("#tip").val();
            let sort = $("#sort").val();

            $.ajax({
                url: 'pretraga.php',
                data: {
                    tip: tip,
                    sort: sort
                },
                success: function (data) {
                    $("#rezultat").html(data);
                }
            });
        }
    </script>
</body>

</html>