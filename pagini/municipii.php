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
        <a href="intreprinderi.php">Întreprinderi</a>
        <a href="tari.php">Țări</a>
        <a href="municipii.php" class="active">Municipii</a>
        <a href="sate.php">Sate</a>
      </div>

      <div class="main">
        <h1 class="titlu">Lista întreprinderilor pe Municipii <br>(Republica Moldova) </h1>
            
        <table class="tabel" style ="width: 50%">
          <thead>
            <tr>
              <th>Municipiul</th>
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

               $sql = "SELECT den_municipiu, srl, sa, snc, sc, upj FROM intrep_municipii";
                
                $result = mysqli_query($link, $sql);
                $rows = mysqli_num_rows($result);

                for($i = 0; $i<$rows; ++$i){
                    $row = mysqli_fetch_row($result);
                    echo"<tr>";
                        for($j = 0; $j<6; ++$j){
                            echo "<td>$row[$j]</td>";
                        }
                    echo "</tr>";
                }
                ?>
          </tbody>
        </table>
            
      </div>

</body>

</html>