<?php 

    require_once "connect.php";

    $connection = @new mysqli($host, $db_user, $db_password, $db_name);
    $userId = $_SESSION['id'];

    $result = $connection->query("SELECT * FROM offers WHERE id= $userId");

    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
            echo "<tr><td>".$row["productionYear"]."</td><td>"
                            .$row["carBrand"]."</td><td>"
                            .$row["carModel"]."</td><td>"
                            .$row["carType"]."</td><td>"
                            .$row["fuelType"]."</td><td>"
                            .$row["engineSize"]."</td><td>"
                            .$row["doorsQuantity"]."</td>
                            <td><button class='editButton' type='submit' formaction='editRow.php'><i class='fas fa-edit'></i></button></td>
                            <td><button class='deleteButton' type='submit' formaction='deleteRow.php'><i class='fas fa-trash-alt'></i></button></td>
                            <td></tr>";
        }
    }
    

?>