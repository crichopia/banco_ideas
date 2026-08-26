<?php

require_once __DIR__ . '/validarSesion.php';
include __DIR__ . '/../config/db.php';
// session_start();

if (isset($_POST['save_idea'])) {

    $title = $_POST['title'];
    $description = $_POST['description'];
    $category = $_POST['categoria'];
    $author = $_SESSION['username'];
    // echo $username.$password.$role;
    $query = "INSERT INTO ideas(titulo, descripcion, categoria, autor) VALUES ('$title', '$description', '$category', '$author')";
    $result = mysqli_query($conn, $query);
    if(!$result){
        die("Query failed");
    }
    header('Location: /banco_ideas/index.php');
    exit;
}

if (isset($_GET['delId'])){
    $id = $_GET['delId'];
    $query = "DELETE FROM ideas WHERE Id = '$id'";

    $result = mysqli_query($conn, $query);

    if(!$result){
        die("Query failed");
    }
    header('Location: /banco_ideas/index.php');
    exit;
}

?>

