<?php
session_start();
require 'dbconn.php';

if(isset($_POST['delete_client']))
{
    $client_id = mysqli_real_escape_string($conn, $_POST['delete_client']);

    $query = "DELETE FROM clients WHERE id='$client_id' ";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Client Deleted Successfully";
        header("Location: main.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Client Not Deleted";
        header("Location: main.php");
        exit(0);
    }
}

if(isset($_POST['update_client']))
{
    $client_id = mysqli_real_escape_string($conn, $_POST['client_id']);
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $address = mysqli_real_escape_string($conn, $_POST['address']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);

    $query = "UPDATE clients SET name='$name', address='$address', email='$email', phone='$phone' WHERE id='$client_id' ";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Client Updated Successfully";
        header("Location: main.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Client Not Updated";
        header("Location: main.php");
        exit(0);
    }

}


if(isset($_POST['save_client']))
{
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $address = mysqli_real_escape_string($conn, $_POST['address']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);

    $query = "INSERT INTO clients (name,address,email,phone,pass) VALUES ('$name','$address','$email','$phone')";

    $query_run = mysqli_query($conn, $query);
    if($query_run)
    {
        $_SESSION['message'] = "Client Created Successfully";
        header("Location: client-create.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Client Not Created"; 
        header("Location: client-create.php");
        exit(0);
    }
}

?>