
<?php
    include('config.php');
    extract($_POST);
   mysqli_query($con,"insert into tbl_contact values(NULL,'$name','$email',$mobile','$0subject')");
   $id=mysqli_insert_id($con);
    //echo $qry;
    //header('location:contact.php');
?>