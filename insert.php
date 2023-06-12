<?php
require 'config.php';

$email =  htmlspecialchars($_POST['email']);

$dsn = "mysql:host=$HOST;dbname=$DB_NAME;charset=UTF8";

$pdo = new PDO($dsn, $USER, $PASSWORD);

$sql = "INSERT INTO CustomerSupportData 
        (Id, Name, Email, Message)
VALUES 
        (NULL, :name, :email, :message)";

$statement = $pdo->prepare($sql);

$statement->bindValue(':name', $_POST['name'], PDO::PARAM_STR);
$statement->bindValue(':email', $_POST['email'], PDO::PARAM_STR);
$statement->bindValue(':message', $_POST['message'], PDO::PARAM_STR);


$result = $statement->execute();



if ($result) {
    echo "Customer support message: sent.";
    header('Refresh:2; url=conformation.php');
} else {
    echo "Failed to send Customer support message.";
    header('Refresh:2; url=conformation.php');
}
 

