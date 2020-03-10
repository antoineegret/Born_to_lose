<?php
$bdd = new PDO('mysql:host=127.0.0.1;dbname=borntolose', 'Billy', '1312');

if (isset($_POST['forminscription'])) {
    $pseudo = htmlspecialchars($_POST['pseudo']);
    $mail = htmlspecialchars($_POST['mail']);

    $userPassword = password_hash($_POST['userPassword']);
    $confirmUserPassword = password_hash($_POST['confirmUserPassword']);
    if (!empty($_POST['pseudo']) AND ! empty($_POST['mail']) AND ! empty($_POST['userPassword']) AND ! empty($_POST['confirmUserPassword'])) {
        $pseudolength = strlen($pseudo);
        if ($pseudolength <= 55) {

            if (filter_var($mail, FILTER_VALIDATE_EMAIL)) {
                $reqmail = $bdd->prepare("SELECT * FROM membres WHERE mail = ?");
                $reqmail->execute(array($mail));
                $mailexist = $reqmail->rowCount();
                if ($mailexist == 0) {
                    if ($userPassword == $confirmUserPassword) {
                        $insertmbr = $bdd->prepare("INSERT INTO membres(pseudo, mail, userPassword) VALUES(?, ?, ?)");
                        $insertmbr->execute(array($pseudo, $mail, $userPassword));
                        $erreur = "Votre compte a bien �t� cr�� ! <a href=\"connexion.php\">Me connecter</a>";
                    } else {
                        $erreur = "Vos mots de passes ne correspondent pas !";
                    }
                } else {
                    $erreur = "Adresse mail d�j� utilis�e !";
                }
            } else {
                $erreur = "Votre adresse mail n'est pas valide !";
            }
        }
    } else {
        $erreur = "Votre pseudo ne doit pas d�passer 255 caract�res !";
    }
} else {
    $erreur = "Tous les champs doivent �tre compl�t�s !";
}
?>