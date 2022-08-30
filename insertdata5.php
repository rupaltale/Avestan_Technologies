<!DOCTYPE html>
<html>
 
<head>
    <title>Insert Page page</title>
</head>
 
<body>
<?php error_reporting (E_ALL ^ E_NOTICE); ?> 
    
        <?php
 
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "avestan1";
    $fullname = $email = $phonenumber = $estimatedbudget =$enteryourmessage= "";
   

    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }else

   
       
    
        $fullname = $_REQUEST['fullname'];
        $email = $_REQUEST['email'];
        $phonenumber =  $_REQUEST['phonenumber'];
        $estimatedbudget = $_REQUEST['estimatedbudget'];
        $enteryourmessage = $_REQUEST['enteryourmessage'];
       
    
        $sql = "INSERT INTO hire_codeigniter VALUES ('$fullname',
            '$email','$phonenumber','$estimatedbudget','$enteryourmessage')";
         
        if(mysqli_query($conn, $sql)){
            echo "<h3>data stored in a database successfully.
                 </h3>";
 
            echo nl2br("\n$fullname\n $email\n "
                . "$phonenumber\n $estimatedbudget\n $enteryourmessage");
        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }
         
        // Close connection
        mysqli_close($conn);
        ?>

</body>
 
</html>