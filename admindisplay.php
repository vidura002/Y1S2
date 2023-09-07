<!-- db connection -->
<?php
    include_once("includes/dbh.inc.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Wild Safari In SL</title>
<link rel="stylesheet" href="adminpage.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
    <div class="container">
        <button class="admin1-btn"><a href="login.php">Log out</a></button>
<table style="width:100%">
  <tr>
    <th>UserId</th>
    <th>Name</th>
    <th>User Email</th>
    <th>User Name</th>
    <th>Password</th>
    <th>Oparations</th>
  </tr>
<?php

$query="select * from users";
$result= mysqli_query($conn,$query);

if($result){
    while($row=mysqli_fetch_assoc($result)){
        $userid=$row["usersId"];
        $name=$row["usersName"];
        $email=$row["usersEmail"];
        $username=$row["usersUid"];
        $passowrd=$row["usersPwd"];
        echo '<tr>
        <td>'.$userid.'</td>
        <td>'.$name.'</td>
        <td>'.$email.'</td>
        <td>'.$username.'</td>
        <td>'.$passowrd.'</td>
        <td>
        <button class="update-btn"><a href="update.php?updateid='.$userid.'">Update</a></button>
        <button class="delete-btn"><a href="delete.php?deleteid='.$userid.'">Delete</a></button>
        </td>
      </tr>';
    }
}


?>


</table>

    </div>
</body>
</html>