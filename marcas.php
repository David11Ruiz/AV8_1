<?php
class gestion extends conexion{
    public function getbrands(){
        $query = "SELECT * from brands ORDER BY brandName ASC";
        $result = mysqli_query($this->connection, $query);
        if($result && mysqli_num_rows($result) > 0){
            echo '<form>';
            while($row = mysqli_fetch_assoc($result)){
                echo '<input type="checkbox" name="brands[]" value="' . $row['brandId'] . '">' . $row['brandName'] . '<br>';
            }
            echo '<button type="submit">Seleccionar</button>';
            echo '</form>';
        }
    }
    }
?>