<?php
    $connection = mysqli_connect("localhost", "root", "");
    $db = mysqli_select_db($connection, " ");
    if(isset($_POST['search'])){
        $Minimum_age = $_POST['Minimum_age'];
        $Maximum_age = $_POST['Maximum_age'];
        $Gender = $_POST['Gender'];
        $Zipcode = $_POST['Zipcode'];
        $Geo_id = $_POST['Geo_id'];
        $query = "SELECT * FROM Pop_by_zip_2000 where Minimum_age = '$Minimum_age' and Maximum_age = '$Maximum_age' and Gender = '$Gender' and Zipcode = '$Zipcode' and Geo_id = '$Geo_id' ";
        $query_run = mysqli_query($connection, $query);
        
        while($row = mysqli_fetch_array($query_run)){
        ?>
        <form action = "" method = "POST">
            <input type = "text" name = "Minimum_age" value = "<?php echo $row['Minimum_age'] ?>"><br>
            <input type = "text" name = "Maximum_age" value = "<?php echo $row['Maximum_age'] ?>"><br>
            <input type = "text" name = "Gender" value = "<?php echo $row['Gender'] ?>"><br>
            <input type = "text" name = "Population" value = "<?php echo $row['Population'] ?>"><br>
            <input type = "text" name = "Zipcode" value = "<?php echo $row['Zipcode'] ?>"><br>
            <input type = "text" name = "Geo_id" value = "<?php echo $row['Geo_id'] ?>"><br>
            

        <?php       

        }
    }

            
            
?>