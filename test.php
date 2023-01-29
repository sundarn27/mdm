<?php 

include 'db_con.php';

$data = array();

$sql = "SELECT userid,email,password FROM  users";

$result = mysqli_query($conn,$sql);

$rowcount = mysqli_num_rows($result);

// echo $rowcount;

if(!$result){
    echo "Connectin Error!";
}
while($row = mysqli_fetch_assoc($result)){
    $temp = [
                'userid' => $row['userid'],
                'email' => $row['email'],
                 'password' => $row['password'],
    ];
    array_push($data,$temp);
}
$json = json_encode($data);

echo $json;
?>