<?php
class logOut{

    public function logout(){
        unset($_SESSION['id']);
        unset($_SESSION['name']);

        header('Location:../index.php');
    }


}
?>
