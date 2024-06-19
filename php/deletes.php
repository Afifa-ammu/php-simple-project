<?php
include 'connect.php';
if(isset($_GET['deletesid'])){
    $id=$_GET['deletesid']; 


    $sql="delete from `crud` where id=$id";
    $r=mysqli_query($conn,$sql);
    if($r){
        //echo "deleted successfully";
        header('location:output.php');
        
    }
    else{
        echo "no";
    }
}

?>