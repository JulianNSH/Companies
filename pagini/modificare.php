<?php             
        require_once '../cfg.php';
        
            $id_sat = $nume_sat = $sa = $sc = $snc = $srl = $upj = $err = $err1 = $err3 = $err2 = $err4 = $err5 = $err6  ="";
            
            if($_SERVER["REQUEST_METHOD"] == "POST"){
                if(empty($_POST["id_sat"])){
                    $err ="Introduceti ";
                } else{
                    $id_sat = verify($_POST["id_sat"]);
                }
            }

            if($_SERVER["REQUEST_METHOD"] == "POST"){
                if(empty($_POST["nume_sat"])){
                    $err1 ="Introduceti locatia";
                } else{
                    $nume_sat = verify($_POST["nume_sat"]);
                }
            }

            if($_SERVER["REQUEST_METHOD"] == "POST"){
                if(empty($_POST["srl"])){
                    $err2 ="Introduceti nr.";
                } else{
                    $srl = verify($_POST["srl"]);
                }
            }

            if($_SERVER["REQUEST_METHOD"] == "POST"){
                if(empty($_POST["sa"])){
                    $err3 ="Introduceti nr.";
                } else{
                    $sa = verify($_POST["sa"]);
                }
            }            if($_SERVER["REQUEST_METHOD"] == "POST"){
                if(empty($_POST["snc"])){
                    $err4 ="Introduceti nr. ";
                } else{
                    $snc = verify($_POST["snc"]);
                }
            }

            if($_SERVER["REQUEST_METHOD"] == "POST"){
                if(empty($_POST["sc"])){
                    $err6 ="Introduceti nr.";
                } else{
                    $sc = verify($_POST["sc"]);
                }
            }

            if($_SERVER["REQUEST_METHOD"] == "POST"){
                if(empty($_POST["upj"])){
                    $err6 ="Introduceti nr.";
                } else{
                    $upj = verify($_POST["upj"]);
                }
            }


            function verify($data){
                $data = trim($data);
                return $data;
            }
        ?> <br><br>
        <form  method = "POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" align = center>
            <span>* <?php echo $err;?></span>
           ID LOCATIE PENTRU MODIFICARE: <br><input type="text" name="id_sat" size="30"> <br>

            <span>* <?php echo $err1;?></span>
           Locatie:      <br>       <input type="text" name="nume_sat" size="30"> <br>

           <span>* <?php echo $err2;?></span>
           SRL <br><input type="text" name="srl" size="30"> <br>

            <span>* <?php echo $err3;?></span>
           SA:      <br>       <input type="text" name="sa" size="30"> <br>

           <span>* <?php echo $err4;?></span>
           SNC: <br><input type="text" name="snc" size="30"> <br>

            <span>* <?php echo $err5;?></span>
           SC:      <br>       <input type="text" name="sc" size="30"> <br>  

            <span>* <?php echo $err6;?></span>
           Upj:      <br>       <input type="text" name="upj" size="30"> <br>

           
           <input type="submit" name="submit" value="MODIFICA">
        </form>
        <br>
        
        <?php
   
        if(($id_sat<>"")and($nume_sat<>"")and($sa<>"")and($sc<>"")and($snc<>"")and($srl<>"")and($upj<>"")){
            $sql = "UPDATE intrep_sate SET nume_sat='$nume_sat', sa='$sa', sc='$sc', snc='$snc', srl='$srl', upj='$upj'
                            WHERE id_sat = '$id_sat'";
            $result = mysqli_query($link, $sql);

            if(!$result){
                die('Could not insert'.mysqli_error($link));
            } else {
                echo "<p align='center'> DATELE AU FOST MODIFICATE</p>";
            }
        } else {
            echo "<p align='center'> INTRODUCETI DATELE PENTRU MODIFICARE</p>";
        }
        ?>