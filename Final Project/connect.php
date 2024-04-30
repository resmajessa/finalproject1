<?php
$name = filter_input(INPUT_POST, 'name');
$username = filter_input(INPUT_POST, 'username');
$email = filter_input(INPUT_POST, 'email');
$password = filter_input(INPUT_POST, 'password');

if(!empty($name) && !empty($username) && !empty($email) && !empty($password)){
    $host = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "jewel";

    $conn = new mysqli($host, $dbusername, $dbpassword, $dbname);

    if(mysqli_connect_error()){
        die('Connect error('.mysqli_connect_errno().')'.mysqli_connect_error());
    }
    else{
        // Hash the password
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        $sql = "INSERT INTO rigestration (name, username, email, password) values ('$name', '$username', '$email', '$hashed_password')";

        if($conn->query($sql)){
            header("Location: index.html");
            exit;
        }
        else{
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        $conn->close();
    }
}
else{
    echo "All fields are required";
}
?>



