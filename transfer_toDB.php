<?php
if (isset($_POST["username"]) && isset($_POST["usertel"]) && isset($_POST["usermail"])) {
      
    $conn = new mysqli("sql7.freemysqlhosting.net", "sql7743051", "Wza8cSFwbM", "sql7743051");
    if($conn->connect_error){
        die("Ошибка: " . $conn->connect_error);
    }
    $name = $conn->real_escape_string($_POST["username"]);
    $tel = $conn->real_escape_string($_POST["usertel"]);
    $mail = $conn->real_escape_string($_POST["usermail"]);
    $sql = "INSERT INTO clients_info (name, phone, mail) VALUES ('$name', '$tel', '$mail')";
    if($conn->query($sql)){
        echo "Ваши данные приняты!";
    } else{
        echo "Ошибка: " . $conn->error;
    }
    $conn->close();
}
?>