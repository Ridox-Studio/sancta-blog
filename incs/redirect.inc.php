<?php

function solve_url(){
    switch ($_SERVER['SCRIPT_NAME']) {
        case '/sancta-blog/news.php':
            # code...
            return "../../";
            break;
        
        default:
            # code...
            return false;
            break;
    }
}