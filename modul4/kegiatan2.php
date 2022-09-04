<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <title>modul 4</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
  </head>
  <body>
    <?php
      $bil=1234;
      $kata="satu dua tiga empat";
      $bk=10.365;
      echo "Menampilkan integer $bil";
      echo "<br>Menampilkan String $kata";
      echo "<br>Menampilkan float $bk";

      echo "<br><br><br>";
     ?>

    <?php
      $a=1;
      echo "<br><br>nilai dari "."$"."a"." adalah ".$a;
      $b=6;
      echo "<br>nilai dari "."$"."b"." adalah ".$b;
      $c= $a + $b;
      echo "<br>hasil dari "."$"."a"." ditambah  "."$"."b"." adalah ".$c;
      $c1= $b - $a;
      echo "<br>hasil dari "."$"."b"." dikurangi "."$"."a"." adalah ".$c1;
      echo "<br><br><br>";
     ?>
    <?php
      $aa=10;
      echo "<br><br> nilai dari "."$"."a"." adalah ".$aa;
      $bb=6;
      echo "<br> nilai dari "."$"."b"." adalah ".$bb;
      if ($aa>$bb) {
        // code...
        echo "<br>nilai "."$"."a"." lebih besar dari nilai "."$"."b";
      } elseif($aa<$bb) {
        // code...
        echo "<br>nilai "."$"."a"." lebih kecil dari nilai "."$"."b";
      } elseif ($aa==$bb) {
        // code...
        echo "<br>nilai "."$"."a"." sama dengan nilai "."$"."b";
      }
      echo "<br><br><br>";
     ?>
    <?php
      echo "<br><br>";
      for ($i=1; $i<=10 ; $i++) {
      // code...
      echo "$i";
      }
      echo "<br>";
      $cc=1;
      while ($cc <= 10) {
        // code...
        echo "$cc";
        $cc++;
      }
      echo "<br>";
      $dd=1;
      do {
        // code...
        echo "$dd";
        $dd++;
      } while ($dd <= 10);
      echo "<br><br><br>";
     ?>
    <?php
      echo "<br>";
      function penjumlahan ($angka1, $angka2){
        return($angka1+$angka2);
      }
      function pengurangan ($angka1, $angka2){
        return($angka1-$angka2);
      }
      function perkalian ($angka1, $angka2){
        return($angka1*$angka2);
      }
      function pembagian ($angka1, $angka2){
        return($angka1/$angka2);
      }

      echo "<br>"."penjumlahan"."<br>"."20 + 16 = ".penjumlahan(20, 16);
      echo "<br>"."pengurangan"."<br>"."20 - 16 = ".pengurangan(20, 16);
      echo "<br>"."perkalian"."<br>"."20 * 16 = ".perkalian(20, 16);
      echo "<br>"."pembagian"."<br>"."20 / 16 = ".pembagian(20, 16);
      echo "<br><br><br>";
     ?>
    <?php
      $hewan=array("kucing","anjing","burung");
      $bunga=array("melati","mawar","anggrek","tulip");

      echo "<br><br>nama-nama hewan : $hewan[0], $hewan[1], $hewan[2]";
      echo "<br>nama nama bunga : $bunga[0], $bunga[1], $bunga[2], $bunga[3]";
      echo "<br>isi array hewan index pertama adalah $hewan[0]";
      echo "<br>isi array bunga index pertama adalah $bunga[2]";
      echo "<br><br><br>";
     ?>

  </body>
</html>
