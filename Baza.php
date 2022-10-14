<?php


class Baza
{
    private $konekcija;

    public function __construct()
    {
        $this->konekcija = new Mysqli('localhost', 'root', '', 'ketering');
        $this->konekcija->set_charset('utf8');
    }

    public function pretrazi($tip, $sort)
    {
        $sql = "SELECT * FROM poslastica p join tip t on p.tipId = t.tipId";

        if($tip != "SVE"){
            $sql .= " WHERE p.tipId = " . $tip;
        }

        $sql.= " ORDER BY p.cena " . $sort;

        $resultSet = $this->konekcija->query($sql);

        $rezultati = [];

        while($red = $resultSet->fetch_object()){
            $rezultati[] = $red;
        }

        return $rezultati;
    }

    public function vratiTipove()
    {
        $sql = "SELECT * FROM tip";
        $resultSet = $this->konekcija->query($sql);

        $rezultati = [];

        while($red = $resultSet->fetch_object()){
            $rezultati[] = $red;
        }

        return $rezultati;
    }

    public function sacuvaj($naziv, $ukus, $tip, $cena, $gluten)
    {
        return $this->konekcija->query("INSERT INTO poslastica VALUES(null, '$naziv' , '$ukus', $tip , $gluten, $cena)");
    }

    public function azuriraj($poslasticaId, $cena)
    {
        return $this->konekcija->query("UPDATE poslastica SET cena=$cena WHERE id=$poslasticaId");
    }

    public function obrisi($poslasticaId)
    {
        return $this->konekcija->query("DELETE FROM poslastica WHERE id= $poslasticaId");
    }
}