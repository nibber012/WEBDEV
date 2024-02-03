<?php
    $register_username = $_POST['username'];
    $register_password = $_POST['password'];

    //database connection
    $conn = new mysqli('localhost','root','','register');
    if ($conn->connect_error) {
        die('Connection Failed : ' .$conn->connect_error);
    }else {
        $stmt = $conn->prepare("INSERT INTO registration (username, password) VALUES (?, ?)");
    
        if (!$stmt) {
            die('Error in preparing the statement: ' . $conn->error);
        }
    
        $stmt->bind_param("ss", $register_username, $register_password);
    
        if (!$stmt->execute()) {
            die('Error in executing the statement: ' . $stmt->error);
        }
    
        echo "Registration successfully...";
        
        $stmt->close();
        $conn->close();
    }
    
?>