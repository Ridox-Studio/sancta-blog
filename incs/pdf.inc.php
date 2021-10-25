<?php
function Pdfexist($conn, $PdfId){
  $sql ="SELECT * FROM pdfs WHERE FileId = ?;";
  $stmt = mysqli_stmt_init($conn);
  if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("location:error.php?error=stmtfailed#formbox");
    exit();
  }

  mysqli_stmt_bind_param($stmt, "s", $PdfId);
  mysqli_stmt_execute($stmt);

  $resultData = mysqli_stmt_get_result($stmt);

  if ($row = mysqli_fetch_assoc($resultData)) {
    return $row;

  }

  else {
    $result = false;
    return $result;
  }

  mysqli_stmt_close($stmt);



}