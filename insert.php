<?php

    $con = mysqli_connect('127.0.0.1','root','');

    if(!$con){
        echo 'Not Connected to Server';
    }
    if(!mysqli_select_db($con,'test')){
        echo 'Database Not Selected';
    }


    // First Page
    $for_whom = $_POST['first_one'];
    $gender = $_POST['first_two'];
    $age = $_POST['first_three'];
    
    // Second Page
    $obese = $_POST['second_one'];
    $smoke = $_POST['second_two'];
    $cholesterol = $_POST['second_three'];
    $diabetes = $_POST['second_four'];
    
    // Third Page
    $problem = $_POST['third_one'];
    $country = $_POST['third_two'];
    $states = $_POST['third_three'];
    
    // Fourth Page
    $duration = $_POST['fourth_one'];

    // Insert value
    $sql = "INSERT INTO test(for_whom, gender, age, obese, smoke, cholesterol, diabetes, problem, states, country, duration) VALUES ('$for_whom', '$gender', '$age', '$obese', '$smoke', '$cholesterol', '$diabetes', '$problem', '$states', '$country', '$duration')";

    if(!mysqli_query($con, $sql)){
        echo 'Not Inserted';
    }
    else{
        header("refresh:1; url=conclusion.php");
    }

?>