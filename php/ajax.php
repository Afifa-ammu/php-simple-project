<?php

$conn=new mysqli("localhost","root","","jquery");
$sql="insert into ajaxcode(name,age,mail,password)values('{$_POST["name"]}','{$_POST["age"]}','{$_POST["email"]}','{$_POST["pass"]}')";
if($conn->query($sql)){
      echo "data is save";
}
else{
    echo "no save";
}










?>