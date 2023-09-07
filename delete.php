<!-- db connection -->
<?php
    include_once("includes/dbh.inc.php");

if(isset($_GET['deleteid'])){

    $userid=$_GET['deleteid'];

    $query = "DELETE from users where usersid= '{$userid}'";

    $result= mysqli_query($conn,$query);

    if($result)
    {
        // echo"Deleted Successfull";
        header('location:admindisplay.php');
    }
    else{
        {
            $error[]="Deleted fail";
        }
    }
}


?>