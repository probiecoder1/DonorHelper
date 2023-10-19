<?php    
        
    include "connection.php"; 
    $name= filter_input(INPUT_POST, 'name');
    $email= filter_input(INPUT_POST, 'email');
    $message= filter_input(INPUT_POST, 'message');   
        
    $sql = "INSERT INTO message(name , email , message) values('$name', '$email', '$message')";   
    ?>    
    <html>    
     <p>Message sent</p>  
    </html>    