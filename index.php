<!DOCTYPE html>
<html>
<head>
    <title>Contoh Tabel PHP</title>
</head>
<style>
  h1{
    text-align: center;
  }
  table{
    border-collapse: collapse;
    width: 75%;
    margin: 0% auto;
  }
  th{
    background-color: aquamarine;
  }
</style>
<body>
  <h1>Praktek HTML dan PHP</h1>
    <table border="2">
        <tr>
            <th>No.</th>
            <th>Nama.</th>
            <th>Data Pemesanan</th>
            <th>Harga</th>
            <th>Total Harga</th>
        </tr>
        <tr>
            <td>1.</td>
            <td>Zeefa</td>
            <td><?php
                $pakaian = array("Gamis", "Pashmina", "Rok", "Cardigan", "Kaos Kaki");
                $a = 0;
                foreach($pakaian as $food){
                echo ++$a . ". $food <br>"; 
              }?></td>
            <td><?php

class harga {
    public $gamis;
    public $pashmina;
    public $rok;
    public $cardigan;
    public $kaos_kaki;
    public function __construct($gamis, $pashmina, $rok, $cardigan, $kaos_kaki){
        $this->gamis = $gamis;
        $this->pashmina = $pashmina;
        $this->rok = $rok;
        $this->cardigan = $cardigan;
        $this->kaos_kaki = $kaos_kaki;
    }
public function showharga(){
    return "$this->gamis <br> $this->pashmina <br> $this->rok <br> $this->cardigan <br> $this->kaos_kaki";
}

}

$nama = new harga("20000", "40000", "50000", "30000", "10000");
print $nama->showharga();

?></td>
            <td><?php

hargaPakaian(20000, 40000, 50000, 30000, 10000);

function hargaPakaian($gamis, $pashmina, $rok, $cardigan, $kaos_kaki){
    $totalHarga = ($gamis + $pashmina + $rok + $cardigan + $kaos_kaki);
    echo $totalHarga;
}?></td>
        </tr>
      
      
    </table>
</body>
</html>
