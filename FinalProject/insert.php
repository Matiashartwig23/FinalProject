<?php
    // This is the script for creating the data in the database //
        // PHP Section to initialize the database variables //
        $username = "root";
        $password = "";
        $database = "G2T";
        $server = "localhost";
        // Creates a connection //
        $connection = new mysqli($server, $username, $password, $database);
    
    
    $name = NULL;
    $email = NULL;
    $phoneNumber = NULL;
    $msg = NULL;
    
    if (isset($_POST['name'])){
        $name = $_POST['name'];
      
    }
    if (isset($_POST['email'])){
        $email = $_POST['email'];
    }
    if (isset($_POST['phoneNumber'])){
        $phoneNumber = $_POST['phoneNumber'];
    }
    if (isset($_POST['msg'])){
        $msg = $_POST['msg'];
    }
    if($name && $email && $phoneNumber && $msg) {
        $query = $connection->prepare("INSERT INTO contactlist (name, email, phoneNumber, msg) VALUES (?, ?, ?, ?)");
        $query->bind_param('ssss', $name, $email, $phoneNumber, $msg);
        $query->execute();
        $result = $query->get_result();
        
        // Close the connection //
        $connection->close();
        
        // Redirect back to page to refresh //
       header('Location:final.php');
    };
    // Closes the connection
    $connection->close();
?>