<?php

include('db.php');

$fetchData= fetch_data($connection);
function fetch_data($connection){
  $query="SELECT * from school ORDER BY city DESC";
$exec=mysqli_query($connection, $query);
  if(mysqli_num_rows($exec)>0){

    $row= mysqli_fetch_all($exec, MYSQLI_ASSOC);
    return $row;  
        
  }else{
    return $row=[];
  }
}
?>