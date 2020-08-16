<?php             
        require_once '../cfg.php';
        
            $nume_sat1 = $sa1 = $sc1 = $snc1 = $srl1 = $upj1 = $err = $err1 = $err3 = $err2 = $err4 = $err5 = $err6  ="";


            if($_SERVER["REQUEST_METHOD"] == "POST"){
                if(empty($_POST["nume_sat1"])){
                    $err1 ="Introduceti locatia";
                } else{
                    $nume_sat1 = ver($_POST["nume_sat1"]);
                }
            }

            if($_SERVER["REQUEST_METHOD"] == "POST"){
                if(empty($_POST["srl1"])){
                    $err2 ="Introduceti nr.";
                } else{
                    $srl1 = ver($_POST["srl1"]);
                }
            }

            if($_SERVER["REQUEST_METHOD"] == "POST"){
                if(empty($_POST["sa1"])){
                    $err3 ="Introduceti nr.";
                } else{
                    $sa1 = ver($_POST["sa1"]);
                }
            }            if($_SERVER["REQUEST_METHOD"] == "POST"){
                if(empty($_POST["snc1"])){
                    $err4 ="Introduceti nr. ";
                } else{
                    $snc1 = ver($_POST["snc1"]);
                }
            }

            if($_SERVER["REQUEST_METHOD"] == "POST"){
                if(empty($_POST["sc1"])){
                    $err6 ="Introduceti nr.";
                } else{
                    $sc1 = ver($_POST["sc1"]);
                }
            }

            if($_SERVER["REQUEST_METHOD"] == "POST"){
                if(empty($_POST["upj1"])){
                    $err6 ="Introduceti nr.";
                } else{
                    $upj1 = ver($_POST["upj1"]);
                }
            }


            function ver($data){
                $data = trim($data);
                return $data;
            }
        ?> <br><br>
        <form  method = "POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" align = center>
            <span>* <?php echo $err1;?></span>
           Locatie:      <br>       <input type="text" name="nume_sat1" size="30"> <br>

           <span>* <?php echo $err2;?></span>
           SRL <br><input type="text" name="srl1" size="30"> <br>

            <span>* <?php echo $err3;?></span>
           SA:      <br>       <input type="text" name="sa1" size="30"> <br>

           <span>* <?php echo $err4;?></span>
           SNC: <br><input type="text" name="snc1" size="30"> <br>

            <span>* <?php echo $err5;?></span>
           SC:      <br>       <input type="text" name="sc1" size="30"> <br>  

            <span>* <?php echo $err6;?></span>
           Upj:      <br>       <input type="text" name="upj1" size="30"> <br>

           
           <input type="submit" name="submit" value="MODIFICA">
        </form>
        <br>
        
        <?php
   
        if(($nume_sat1<>"")and($sa1<>"")and($sc1<>"")and($snc1<>"")and($srl1<>"")and($upj1<>"")){
            $sql = "INSERT INTO intrep_sate (nume_sat, sa, sc, snc, srl, upj)
                            VALUES('$nume_sat1','$sa1','$sc1','$snc1','$srl1','$upj1')";
            $result = mysqli_query($link, $sql);

            if(!$result){
                die('Could not insert'.mysqli_error($link));
            } else {
                echo "<p align='center'> DATELE AU FOST ADAUGATE</p>";
            }
        } else {
            echo "<p align='center'> INTRODUCETI DATELE PENTRU ADAUGARE</p>";
        }
        ?>