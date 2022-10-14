<?php
include 'Baza.php';
$db = new Baza();

$podaci = $db->vratiTipove();

foreach ($podaci as $tip){

    ?>
    <option value="<?= $tip->tipId ?>"><?= $tip->tip ?> </option>

<?php
}
?>