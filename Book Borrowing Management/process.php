<?php
    // Retrieving form data
    $Name = $_POST["name"];
    $Id = $_POST["id"];
    $Email =$_POST["email"];
    $Book_Title = $_POST["book_title"];
    $Borrow_Date = $_POST["borrow_date"];
    $Token = $_POST["token"];
    $Return_Date = $_POST["return_date"];


    //Name Validation
    if (preg_match("/^(cat)$/", $Name)) {
        if (preg_match("/^[A-Z]{2}[a-z]+$/", $Name)) {
            echo "name :" . $Name . '<br>';
        }
    }
    else {
        echo "Name format is incorrect<br>";
    }
    //ID Validation
    if (preg_match("/^\d{2}-\d{5}-\d{1}$/", $Id)) {
        echo "Id: " . $Id . '<br>';
    } else {
        echo "ID format is incorrect.<br>";
    }
     // email validation
     if (preg_match("/\@+(student)+\.(aiub)+\.(edu)/", $Email)) {
        echo "Valid Email: " . $email. '<br>';
    }
    else {
        echo "Invalid Email";
    }
    //Borrow Date and Return Date is not same
    if ($Borrow_Date != $Return_Date) {
        echo "Borrow_Date : " . $Borrow_Date . '<br>';
        echo "Return_Date : " . $Return_Date . '<br>';
    } else {
        echo "Borrow_Date and Return_Date are same this is not possible.<br>";
    }
 
    // Token
    echo "Token: " . $Token . '<br>';
 
?>
