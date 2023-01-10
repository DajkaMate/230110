<?php
    function Connect(){
        $szerver = "localhost";
        $user    = "root";
        $pass    = "";
        $db      = "14 sz2";

        $con = mysqli_connect($szerver,$user,$pass,$db);
        if(!$con)
        {
            die("Nem sikerült");
        }
        return $con;
    }
?>