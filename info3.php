<?php
    $connection = mysqli_connect("localhost", "root", "");
    $db = mysqli_select_db($connection, " ");
    if(isset($_POST['search'])){
        $state_code = $_POST['state_code'];
        $debt_to_income_ratio = $_POST['debt_to_income_ratio'];
        $query = "SELECT * FROM Public_lar_2022 where state_code = '$state_code' and debt_to_income_ratio = 'debt_to_income_ratio' ";
        $query_run = mysqli_query($connection, $query);
        
        while($row = mysqli_fetch_array($query_run)){
        ?>
        <form action = "" method = "POST">
            <input type = "text" name = "lei" value = "<?php echo $row['lei'] ?>"><br>
            <input type = "text" name = "derived_msa_md" value = "<?php echo $row['derived_msa_md '] ?>"><br>
            <input type = "text" name = "state_code" value = "<?php echo $row['state_code'] ?>"><br>
            <input type = "text" name = "reverse_mortgage" value = "<?php echo $row['reverse_mortgage'] ?>"><br>
            <input type = "text" name = "interest_only_payment" value = "<?php echo $row['interest_only_payment'] ?>"><br>
            <input type = "text" name = "debt_to_income_ratio" value = "<?php echo $row['debt_to_income_ratio'] ?>"><br>
            

        <?php       

        }
    }

            
            
?>