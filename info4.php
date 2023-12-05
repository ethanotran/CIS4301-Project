<?php
    $connection = mysqli_connect("localhost", "root", "");
    $db = mysqli_select_db($connection, " ");
    if(isset($_POST['search'])){
        $yr = $_POST['yr'];
        $place_name = $_POST['place_name'];
        $place_id = $_POST['place_id'];
        $query = "SELECT * FROM HPI_Master where yr = '$yr' and place_name = '$place_name' and place_id = '$place_id' ";
        $query_run = mysqli_query($connection, $query);
        
        while($row = mysqli_fetch_array($query_run)){
        ?>
        <form action = "" method = "POST">
            <input type = "text" name = "frequency " value = "<?php echo $row['frequency'] ?>"><br>
            <input type = "text" name = "level_" value = "<?php echo $row['level_'] ?>"><br>
            <input type = "text" name = "place_name" value = "<?php echo $row['place_name'] ?>"><br> 
            <input type = "text" name = "place_id" value = "<?php echo $row['place_id'] ?>"><br>
            <input type = "text" name = "yr" value = "<?php echo $row['yr'] ?>"><br>
            

        <?php       

        }
    }

            
            
?>