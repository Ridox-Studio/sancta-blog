<?php

    function getTopSong($conn){
         $sql = "SELECT * FROM songupload ORDER BY SongOrder LIMIT 4;";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                return $result;
            }
    }