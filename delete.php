<?php
include("conn.php");
if(isset($_GET['deleteid'])){
    $id= $_GET['deleteid'];

    $sql="delete from `users` where id=$id";
    $result=mysqli_query($conn,$sql);
    if($result){
        echo "Deleted successfull";
    }else{

    }

}



?>