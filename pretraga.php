<?php
include 'Baza.php';
$db = new Baza();

$tip = trim($_GET['tip']);
$sort = trim($_GET['sort']);

$podaci = $db->pretrazi($tip, $sort);

$delay = 0.2;


foreach ($podaci as $poslastica){

    ?>
    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="<?= $delay ?>s" style="width: 400px; height: 400px; margin-left: 25px">
        <div class="service-item d-flex position-relative text-center h-100" style="justify-content: center; max-width: 100%; max-height: 100%">
            <img class="bg-img" src="img/15.png" alt="">
            <div class="service-text" style="background: none;"> 
            
                <p class="mb-4" style="margin-top: 40px; font-size: 25px;"><?= $poslastica->tip ?></p>
                <h3 class="mb-3" style="color: rgb(107, 67, 100);font-size: 35px; font-weight: 500 !important; margin-top: -15px;"><?= $poslastica->naziv ?></h3>
                <h3 class="mb-3" style="color: rgb(107, 67, 100);font-size:lower; font-style: normal; font-weight: 300 !important"><?= $poslastica->ukus ?></h3>
                <?php
                    if($poslastica->gluten){
                        ?>
                        <img src="img/1.png">
                        <?php

                    }else{
                        ?>
                        <img src="img/2.png" alt="Bla" style="min-width: 30px min-height: 40px;">
                        <?php
                    }
                ?>
                
                <h3 class="text-danger" style="font-weight: 300 !important; font-style: normal; color: #313131 !important;" >Cena: <?= $poslastica->cena ?></h3>


<?php
include 'Baza.php';
$db = new Baza();

$podaci = $db->vratiTipove();

foreach ($podaci as $tip){

    ?>
    <option value="<?= $tip->tipId ?>"><?= $tip->tip ?> </option>

<?php
}
}