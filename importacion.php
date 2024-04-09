<?php
class importar extends conexion{
    function customer() {
        $fichero='customers.csv';
        $connection=$this->getConnection();
        $csvFile = fopen($fichero, "r");

        if ($csvFile !== false) {
            while (($data = fgetcsv($csvFile, 0, "#")) !== false) {
               $id = $data[0];
               $name = $data[0];
               $query = "UPDATE `customers` SET `customerName`= '$name' WHERE `customerId`= '$id'";
               $result = mysqli_query($conn,$query);
            }
        }
    }
    
    public function brandCustomer() {
    $fichero = 'customers.csv'; 
    $csvFile = fopen($fichero, "r");
    if {
        foreach ($brands as $brand) {
            $brandId = $this->getBrandId($brand);
            if ($brandId !== null) {
                $query = "INSERT INTO `brandcustomer` (`customerId`, `brandId`) VALUES ('$customerId', '$brandId')";
                mysqli_query($this->connection, $query);
            } 
        }
    }
    }

    function getBrandId($brandName) {
        $sql = "SELECT brandId FROM brands WHERE brandName = '$brandName'";
        $result = mysqli_query($this->connection, $sql);
        if ($row = mysqli_fetch_assoc($result)) {
            return $row['brandId'];
        }
        }
    
    }
?>