<?php
    $connection = mysqli_connect("localhost", "root", "");
    $db = mysqli_select_db($connection, " ");
    if(isset($_POST['search'])){
        $year_ = $_POST['year_'];
        $index = $_POST['index'];
        $temp = $_POST['temp'];
        $query = "SELECT * FROM climdiv_county_year where year_ = '$year_' and index = '$index' and temp = '$temp' ";
        $query_run = mysqli_query($connection, $query);
        
        while($row = mysqli_fetch_array($query_run)){
        ?>
        <form action = "" method = "POST">
            <input type = "text" name = "year_" value = "<?php echo $row['year_'] ?>"><br>
            <input type = "text" name = "index_" value = "<?php echo $row['index_'] ?>"><br>
            <input type = "text" name = "fips" value = "<?php echo $row['fips'] ?>"><br> 
            <input type = "text" name = "temp" value = "<?php echo $row['temp'] ?>"><br>
            <input type = "text" name = "tempc" value = "<?php echo $row['tempc'] ?>"><br>
            

        <?php       

        }
    }

            
            
?>