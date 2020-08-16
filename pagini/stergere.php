<?php   
        require_once '../cfg.php';

            $id_sat = $err ="";

            if($_SERVER["REQUEST_METHOD"] == "POST"){
                if(empty($_POST["locatie"])){
                    $err ="Introduceti locatia";
                } else{
                    $id_sat = verificare($_POST["locatie"]);
                }
            }

            function verificare($data){
                $data = trim($data);
                return $data;
            }
        ?> <br><br>
        <form  method = "POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" align = center>
           STERGE LOCATIE DUPA ID: <br><input type="text" name="locatie" value="<?php echo $id_sat;?>">
           <span><br><?php echo $err;?></span>
           <br>
           <input  onClick="window.location.reload();" type="submit" name="submit" value="STERGE">
        </form>
        <br>
        
        <?php
        $query = mysqli_query($link, "SELECT id_sat FROM intrep_sate WHERE id_sat='".$id_sat."'");

        if(mysqli_num_rows($query)>0){
            $row = mysqli_fetch_array($query, MYSQLI_ASSOC);
            $query = mysqli_query($link, "DELETE FROM intrep_sate WHERE id_sat='".$id_sat."'");
            $respons = "DATELE AU FOST STERSE";
        } else {
            $respons = "NU SUNT DATE PENTRU STERGERE";
        }

        if(empty($row)){
            echo "<p align=center>"."Locatia cu ID-ul".$id_sat." este ELIMINATA  din BD:"."</p>";

        } 

?>