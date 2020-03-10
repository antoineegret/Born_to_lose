<?php
require_once 'functions.php';
reconnect_from_cookie();
if(isset($_SESSION['auth'])){
    header('Location: account.php');
    exit();
}
if(!empty($_POST) && !empty($_POST['pseudo']) && !empty($_POST['userPassword'])){
    require_once 'inc/db.php';
    $req = $pdo->prepare('SELECT * FROM pseudo WHERE (pseudo = :pseudo OR email = :pseudo) AND confirmed_at IS NOT NULL');
    $req->execute(['pseudo' => $_POST['pseudo']]);
    $user = $req->fetch();
    if(password_verify($_POST['userPassword'], $pseudo->userPassword)){
        $_SESSION['auth'] = $pseudo;
$_SESSION['flash']['success'] = 'Vous êtes maintenant connecté';
if($_POST['remember']){
    $remember_token = str_random(250);
    $pdo->prepare('UPDATE pseudo SET remember_token = ? WHERE id = ?')->execute([$remember_token, $pseudo->id]);
    setcookie('remember', $pseudo->id . '==' . $remember_token . sha1($pseudo->id . 'ratonlaveurs'), time() + 60 * 60 * 24 * 7);
}
        header('Location: account.php');
        exit();
    }else{
        $_SESSION['flash']['danger'] = 'Identifiant ou mot de passe incorrecte';
    }
}
?>