<?php    
        
    include "connection.php"; 
    $email= filter_input(INPUT_POST, 'email');   
        
    $sql = "INSERT INTO subscribers(email) values('$email)";   
    ?>    
    <html>    
     <p>Subscribed</p>  
    </html>    