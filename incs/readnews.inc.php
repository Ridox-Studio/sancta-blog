<?php
function Newsexist($conn, $newsId, $newsName){
  $sql ="SELECT * FROM news WHERE NewsNo = ? AND Title = ?;";
  $stmt = mysqli_stmt_init($conn);
  if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("location:error.php?error=stmtfailed#formbox");
    exit();
  }

  mysqli_stmt_bind_param($stmt, "ss", $newsId, $newsName);
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