<!DOCTYPE html>
<html>
    <head>
        <title>Insert Page</title>
    </head>
    <body>
        <?php error_reporting(E_ALL ^ E_NOTICE); ?>
        <?php
            $servername = "localhost";
            $username = "root";
            $password = "root";
            $dbname = "avestan1";
		
		$fname = $email = $sub = $msg ="";
        

        // Create Connection
            $conn = new mysqli ($servername, $username, $password, $dbname);

        //Check Connection
            if ($conn->connect_error)
            {
                die("Connection Failed. " .$conn->connect_error);
            }else

        //Taking Values form User
        $fname = $_REQUEST['fname'];
        $email = $_REQUEST['email'];
        $sub = $_REQUEST['sub'];
        $msg = $_REQUEST['msg'];
        
        //Performing Insert
        $sql = "INSERT INTO contact_us VALUES ('$fname','$email','$sub','$msg')";

        if(mysqli_query($conn, $sql))
        {
            echo "Data Stored Successfully:";
            echo nl2br("\n $fname \n $email \n $sub \n $msg");
        }else
            echo "Error Storing Data $sql. " .mysqli_error($conn);
        
        mysqli_close($conn);
        
        ?>
    </body>
</html>
