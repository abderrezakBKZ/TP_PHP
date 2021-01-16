<?php require 'config.php' ;


 if ($_POST ['user'] === LEBONLOGIN && $_POST['mdp']=== LEBONPASS) {
    session_start();
    $_SESSION ['connect'] =true ;
    $_SESSION ['user'] = LEBONLOGIN;
    $_SESSION ['mdp'] = LEBONPASS;
    header("Location: acceuil.php");
    
}
 
 else {
    header("Location: login.php?error=1");
    exit();
 }
 

?>