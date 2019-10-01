<?php

//P15/37031/2016
//Anderson Akoto

$link = mysqli_connect("68.183.232.101", "app-access", "akoto291996", "testapi");

$firstname= $_POST['firstname'];

$lastname = $_POST['lastname'];

$patient_age = $_POST['patient_age'];

$illness = $_POST['illness'];

$gender = $_POST['gender'];


if($link->connect_error) {

    exit('Error connecting to database'); 
  
  }else{

    $sql = "INSERT INTO patients (patient_id, firstname, lastname, patient_age, illness, gender) VALUES (NULL, '$firstname', '$lastname', '$patient_age', '$illness', '$gender')";

    if (mysqli_query($link, $sql)){

        echo "Submitted Successfully!";

    }else{

        echo "Error in posting! Please try again..." .  mysqli_error($link);
    }


  }

  ?>
