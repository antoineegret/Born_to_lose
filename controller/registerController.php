<?php
session_start();
require_once '../model/user.php';
require_once '../model/dataBase.php';

$pseudo = $email = $userPassword = $confirmUserPassword = $conditions = '';
$errors = [];

$pseudoRegex = '/\w+/';
// regex mot de passe, doit contenir 8 caractère avec aumoins une majuscule une minuscule et un chiffre
$userPasswordRegex = '/^(?=.*[\d])(?=.*[A-Z])(?=.*[a-z])(?=.*[!@#$%^&*])?[\w!@#$%^&*]{8,}$/';

/* if (isset($_POST['checkmail'])) {
    $email = trim(filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING));
    if (filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL)) {
        $pseudo = new users();
        $pseudo->email = $email;
        if ($pseudo->checkEmail()) {
            exit('noOk');
        }
        exit('ok');
    }
} */

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $isSubmit = true;

    $pseudo = trim(filter_input(INPUT_POST, 'pseudo', FILTER_SANITIZE_STRING));
    if (empty($pseudo) || !preg_match($pseudoRegex, $pseudo)) {
        $errors['pseudo'] = 'Le pseudo est invalide !';
    }

    $email = trim(filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING));
    if (empty($email) || !filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = 'Le mail est invalide !';
    }

    $userPassword = trim($_POST['userPassword']);
    if (empty($userPassword) || !preg_match($userPasswordRegex, $userPassword)) {
        $errors['userPassword'] = 'Le mot de passe doit comporter au moins 8 caractères !';
    }
    $confirmUserPassword = trim($_POST['confirmUserPassword']);
    if (empty($userPassword) || $userPassword != $confirmUserPassword) {
        $errors['confirmUserPassword'] = 'Les mots de passe sont differents !';
    }


    if (count($errors) == 0) {
        $users = new users($pseudo, $email, password_hash($userPassword, PASSWORD_BCRYPT));

        try {
            $users->create();
            $success = true;
            $sleep = 4;
            header('Refresh:' . $sleep . ';http://'.$_SERVER['HTTP_HOST'].'/Controller/loginController.php');
        } catch (PDOException $ex) {
            echo 'La création du compte a échouée !' . $ex->getMessage();
            die();
        }
    }
}
require_once '../register.php';