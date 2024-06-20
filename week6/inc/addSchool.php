<?php
    include('functions.php');
    // Array ( [schoolName] => Test [schoolLevel] => Test [phone] => 4169007347 [email] => alejo199821@gmail.com [addSchool] => )  
    // print_r($_POST);
    $schoolName = $_POST["schoolName"];
    $schoolLevel = $_POST["schoolLevel"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];

    require('../reusable/con.php');
    $query = "INSERT INTO schools (
    `School Name`,
    `School Level`,
    `Phone`,
    `Email`) 
        VALUES (
        '" . mysqli_real_escape_string($connect,$schoolName) . "',
        '" . mysqli_real_escape_string($connect,$schoolLevel) . "',
        '" . mysqli_real_escape_string($connect,$phone) . "',
        '" . mysqli_real_escape_string($connect,$email) . "')";        
    $school = mysqli_query($connect,$query);

    if($school){
        set_message("School added successfully","success");
        header('Location: ../index.php');
    } else{
        echo 'Failed' . mysqli_error($connect);
    }
?>