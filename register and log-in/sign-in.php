<?php 
    include('config.php');

    $sql = "SELECT `book id`, `book name`, `year`, `genre`, `age group` FROM `books` ";
    $result = $conn→query($sql);

    if($result){
        if($result→num_rows > 0){
            echo "<table border=1>";
            while($row = $result→fetch_assoc()){
                echo "<tr>";
                echo "<td>" . $row["book id"]. "</td>";
                echo "<td>" . $row["book name"]. "</td>";
                echo "<td>" . $row["year"]. "</td>";
                echo "<td>" . $row["genre"]. "</td>";
                echo "<td>" . $row["age group"]. "</td>";
                echo "</tr>";
            }
            echo "</table>";
        }
    } else {
       echo "Error selecting table" . $conn→error;
    }
?>