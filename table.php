<?php

include 'db_con.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
*{
    margin: 0%;
    padding: 0%;
}
body{
    background: rgba(236, 235, 235, 0.87);
    background: cover;
    background-position: center;
}
table,th,td{
    position: relative;
    border:1px solid black;
    border-collapse:collapse;
    width: 100%;
}
</style>
<body>
    <div class="table">
        <table>
            <tr>
                <th style="width:70%">Email</th>
                <th style="width:30%">Password</th>
            </tr>
        <?php

        $sql = "SELECT * FROM  users";

        $result = mysqli_query($conn,$sql);

        $rowcount = mysqli_num_rows($result);

        if($rowcount>0){

            while($row=mysqli_fetch_assoc($result)){

                $userid = $row['userid'];
                $email = $row['email'];
                $password = $row['password'];
                $name = $row['name'];
                ?>
                
                        <tr>
                            <td><?php echo $email; ?></td><br>
                            <td><?php echo $password; ?></td>
                        </tr>
                    
                <?php
            }
        }
        else
        {
        //Food not Available
            echo "<div class='error'>Records not found.</div>";
        }
        ?>
        </table>
    </div>
</body>
</html>






