<?php
    function akcio(){
        $con = Connect();
        $sql = "SELECT * FROM pizzak WHERE akcios=1";
        $result = mysqli_query($con,$sql);
        return $result;
        mysqli_close($con);
    }
    function adatlap(){
        $con = Connect();
        $id = $_GET["id"];
        $sql = "SELECT * FROM pizzak WHERE ID=".$id;
        $result = mysqli_query($con,$sql);
        return $result;
        mysqli_close($con);
    }
    function all(){
        $con = Connect();
        $sql = "SELECT * FROM pizzak";
        $result = mysqli_query($con,$sql);
        return $result;
        mysqli_close($con);
    }
    function Score(){
        $con = Connect();
        //Csak akkor fusson le, ha megnyomtad a gombot!
        if(isset($_POST["search"])){
            $score = $_POST["text"];
            $sql = "SELECT * FROM pizzak WHERE nev LIKE '%".$score."%'";
            $result = mysqli_query($con,$sql);
            return $result;
        }
        mysqli_close($con);
    }
    function Add(){
        $con = Connect();
        if(isset($_POST['add'])){
            $nev = $_POST['nev'];
            $feltet = $_POST['feltet'];
            $ar = $_POST['ar'];
            if(isset($_POST['akcios']))
            {
                $akcios = 1;
            }
            else
            {
                $akcios = 0;
            }
            $sql = "INSERT INTO
             pizzak (nev, feltet, ar, akcios)
              values('$nev', '$feltet', '$ar', '$akcios')";
            mysqli_query($con, $sql);
        }
        
        mysqli_close($con);
    }
?>