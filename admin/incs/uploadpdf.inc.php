<?php

    if (!isset($_POST['uploadpdf'])) {
        # code...
        header("Location:../");
        exit();
    }
    if (empty($_FILES['file'])) {
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

        if (invalidUid($key)) {
        # code...
        header("Location:../?error=invalidUid");
        exit();
    }
    }

    
    $PdfName;
    $fileExt = explode(' ', $_POST['PdfName']);
    for ($i=0; $i < count($fileExt); $i++) { 
        if ($i > 0) {
            # code...
        $PdfName = $PdfName."_".$fileExt[$i];

        }
        else {
        $PdfName = $fileExt[$i];

        }
        # code...
    }
    
    // $PdfName = $_POST['PdfName'];
    $owner = $_POST['owner'];
    $Falculty = $_POST['cat'];
    $Tags = $_POST['Tags'];
    $description = $_POST['description'];

    $file = $_FILES['file'];

    switch ($_POST['uploadpdf']) {
        case 'level':
            $level = $_POST['level'];
            # code...
            if (unnpdf($conn, $PdfName, $owner, $description, $Falculty, $file, $Tags, $level) !== false) {
                # code...
                header("Location:../?error=uploadsucess");
                exit();
            }
            break;
            case 'Upload':

                # code...
                if (uploadPdf($conn, $PdfName, $owner, $description, $Falculty, $file, $Tags) !== false) {
                    # code...
                    header("Location:../?error=uploadsucess");
                    exit();
                }
                break;
        
        default:
            # code...
            break;
    }

    