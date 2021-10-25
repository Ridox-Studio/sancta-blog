<?php

if (!isset($_POST['uploadnews'])) {
        # code...
        header("Location:../");
        exit();
    }
    require "dbh.inc.php"; 
    require "function.inc.php"; 
    
    foreach ($_POST as $key) {
        # code...
        if (empty($key)) {
            # code...
        header("Location:../?error=emptyinput");
        exit();
            
        }
    }

    $Title = $_POST['Title'];
    $description = $_POST['description'];
    $category = $_POST['category'];
    $file1 = $_FILES['img1'];
    $file2 = $_FILES['img2'];
    $file3 = $_FILES['img3'];
    

    if (uploadNews($conn, $Title, $description, $category, $file1, $file2, $file3) !== false) {

        header("Location:../index.php?error=uploadsucess");
        exit();
        # code...
    }
