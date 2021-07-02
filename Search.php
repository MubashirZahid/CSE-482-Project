<?php
include("Db_conection.php");
$output ='';

//collect
if (isset($_POST['search'])){
    $searchq = $_POST['search'];
    //$searchq = preg_replace("#[^0-9a-z]#i","",$searchq);
    $query = "select * from users where user_name like '%$searchq%'";
	$run = mysqli_query($dbcon,$query);
    $count = mysqli_num_rows($run);
    if($count == 0){
        $output = 'There was no search results!';
    }else{
        while($row = mysqli_fetch_array($run)){
            $uname = $row['user_name'];
            $uemail = $row['user_email'];
			$upass = $row['user_pass'];
            $id = $row['id'];

            $output .= '<p> <b>User Name: </b>'.$uname.'<br>  <p> <b>User Email: </b>'.$uemail.'<br>  <p> <b>User Password: </b>'.$upass.'<br>  <p> <b>User ID: </b>' .$id;
        }
    }
}
 print("$output");?>