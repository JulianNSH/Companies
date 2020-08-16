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
        <a href="../principala.php">Principală</a>
        <a href="intreprinderi.php">Întreprinderi</a>
        <a href="tari.php">Țări</a>
        <a href="municipii.php">Municipii</a>
        <a href="sate.php" class="active">Sate</a>
      </div>

      <div class="main">
        <h1 class="titlu">Lista întreprinderilor pe Sate mari <br>(Republica Moldova) </h1>
        <table class="tabel" style ="width: 50%">
          <thead>
            <tr>
              <th>ID</th>
              <th>Sate</th>
              <th>SRL</th>
              <th>SA</th>
              <th>SNC</th>
              <th>SC</th>
              <th>UpJ</th>
            </tr>
          </thead>

          <tbody>
          <?php
               require "../cfg.php";
               $link = mysqli_connect($host, $user, $password, $database);

               $sql = "SELECT id_sat, nume_sat, srl, sa, snc, sc, upj FROM intrep_sate";
                
                $result = mysqli_query($link, $sql);
                $rows = mysqli_num_rows($result);

                for($i = 0; $i<$rows; ++$i){
                    $row = mysqli_fetch_row($result);
                    echo"<tr>";
                        for($j = 0; $j<7; ++$j){
                            echo "<td>$row[$j]</td>";
                        }
                    echo "</tr>";
                }
                ?>
          </tbody>
        </table> 
      </div>

  </div>

      <div class="divTable">
          <div class="divTableRow">
            <div class="divTableCell">
                <h1 style="font-size: 20px;">Adăugare</h1>
                  <?php
                    require_once "adaugare.php";
                  ?>

            </div>

            <div class="divTableCell">  
              <h1 style="font-size: 20px;">Modificare</h1>
                  <?php
                    require_once "modificare.php";
                  ?>
            </div>
            
            <div class="divTableCell">
              <h1 style="font-size: 20px;">Ștergere</h1>
                   <?php
                    require_once "stergere.php";
                  ?>

            </div>
          </div>

      </div>

</body>

</html>