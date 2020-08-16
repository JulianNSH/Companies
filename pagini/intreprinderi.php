<!DOCTYPE html>
<html lang="ro" dir="ltr"> 
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../stiluri/stil1.css">
    <link rel="stylesheet" href="../stiluri/stil2.css">

    <title>Întreprinderi</title>
</head>
<body>
<div class="content" >
    <div class="meniu" >
        <a href="../principala.php" >Principală</a>
        <a href="intreprinderi.php" class="active">Întreprinderi</a>
        <a href="tari.php">Țări</a>
        <a href="municipii.php">Municipii</a>
        <a href="sate.php">Sate</a>
      </div>

      <div class="main">
        <h1 class="titlu">Tipuri de Întreprinderi</h1>
        <table class="tabel" style ="width: 80%">
          <thead>
            <tr>
              <th>Întreprinderi</th>
              <th>Numarul de fondatori</th>
              <th>Categoria</th>
              <th>Capital Social Minim</th>
              <th>Tipul de Răspundere</th>
              <th>Nivelul de Risc</th>
              <th>Nivel de Rentabilitate</th>
              <th>Nr. total pe sate</th>
              <th>Nr. total pe municipii</th>
            </tr>
          </thead>

          <tbody>
          <?php
               require "../cfg.php";
               $link = mysqli_connect($host, $user, $password, $database);

               $sql = "SELECT intreprinderi.tip_intreprindere, intreprinderi.nr_fondatori, categorie.tip_categorie, intreprinderi.capital_minim,
               raspundere.tip_raspundere, risc.tip_risc, rentabilitate.id_rentabilitate, intreprinderi.nr_pe_sate, intreprinderi.nr_pe_mun
               FROM tipuri_intreprinderi AS intreprinderi
                 JOIN categorie AS categorie ON intreprinderi.id_categorie = categorie.id_categorie
                 JOIN raspundere AS raspundere ON intreprinderi.id_raspundere = raspundere.id_raspundere
                 JOIN risc AS risc ON intreprinderi.id_risc = risc.id_risc
                 JOIN nivel_rentabilitate AS rentabilitate ON intreprinderi.id_rentabilitate = rentabilitate.id_rentabilitate";
                
                $result = mysqli_query($link, $sql);
                $rows = mysqli_num_rows($result);

                for($i = 0; $i<$rows; ++$i){
                    $row = mysqli_fetch_row($result);
                    echo"<tr>";
                        for($j = 0; $j<9; ++$j){
                            echo "<td>$row[$j]</td>";
                        }
                    echo "</tr>";
                }
                ?>
          </tbody>
        </table>
      </div>
</div>
    <div class="content" style="margin-top:20px">
                <h1>Procentajul per Întreprindere</h1>
                <img src="../imagini/diag.jpg" alt="">
    </div>
</body>

</html>