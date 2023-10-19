
    <?php    
        
    include "connection.php"; 
    $name= filter_input(INPUT_POST, 'name');
    $email= filter_input(INPUT_POST, 'email');
    $phone= filter_input(INPUT_POST, 'phone');
    $pass= filter_input(INPUT_POST, 'pass');
    $gender= filter_input(INPUT_POST, 'gender');
    $city= filter_input(INPUT_POST, 'city');
    $country= filter_input(INPUT_POST, 'country');
    $file= filter_input(INPUT_POST, 'file');   
        
    $sql = "INSERT INTO messages(name , email , phone , pass , gender , city , country , file) values('$name', '$email', '$phone', '$pass' ,'$gender' , '$city' , '$country' , '$file')";   
    ?>    
    <html>    
     <p>User registered</p>  
    </html>    
