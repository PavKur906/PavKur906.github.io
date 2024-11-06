<?php
if (isset($_POST["username"]) && isset($_POST["usertel"]) && isset($_POST["usermail"])) {
      
    $conn = new mysqli("sql7.freemysqlhosting.net", "sql7743051", "Wza8cSFwbM", "clients_info");
    if($conn->connect_error){
        die("Ошибка: " . $conn->connect_error);
    }
    $name = $conn->real_escape_string($_POST["username"]);
    $age = $conn->real_escape_string($_POST["userage"]);
    $sql = "INSERT INTO Users (name, age) VALUES ('$name', $age)";
    if($conn->query($sql)){
        echo "Ваши данные приняты!";
    } else{
        echo "Ошибка: " . $conn->error;
    }
    $conn->close();
}
?>