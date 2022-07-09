<?php
    if (count($_POST)==0) {
        header('Location: https://portfolio.mathieulp.fr/#contact');
    }

    if (!empty($_POST['prenom'])) {
        $prenom=$_POST['prenom'];
    } else {
        echo '<script> alert(\'Merci de précisé votre prénom !\'); location.assign("https://portfolio.mathieulp.fr/#contact");</script>';
        exit(0);
    }

    if (!empty($_POST['nom'])) {
        $nom=$_POST['nom'];
    } else {
        echo '<script> alert(\'Merci de préciser votre nom !\'); location.assign("https://portfolio.mathieulp.fr/#contact");</script>';
        exit(0);
    }

    if (empty($_POST['title'])) {
        die();
    }

    if (!empty($_POST['email'])) {
        if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $email=$_POST['email'];
        } else {
            echo '<script> alert(\'Adresse mail invalide !\'); location.assign("https://portfolio.mathieulp.fr/#contact");</script>';
            exit(0);
        }
    } else {
        echo '<script> alert(\'Merci de préciser votre adresse mail !\'); location.assign("https://portfolio.mathieulp.fr/#contact");</script>';
        exit(0);
    }

    if (empty($_POST['message'])) {
        echo '<script> alert(\'Veuillez écrire un message !\'); location.assign("https://portfolio.mathieulp.fr/#contact");</script>';
    } else {
        $message = 'Le pseudo est : '.$prenom."\n\r".'Le nom est : '.$nom."\n\r".'L\'email est : '.$email."\r\r\n\n".$_POST['message'];
        $destinataire = 'lepuilmathieu@gmail.com';
        $sujet = 'Depuis le site du portfolio | '.date('d/m/Y');
        $headers = 'From : '.$email." \r\n";
        $headers .= 'Content-Type:text/html; charset="utf-8"'."\r\n";
        $headers .= 'Content-Transfer-Encoding: 8bit'."\r\n";
        if (mail($destinataire, $sujet, $message, $headers)) {
            echo '<script> alert(\'Le message a été envoyé !\'); location.assign("https://portfolio.mathieulp.fr/#contact");</script>';
        } else {
            echo '<script> alert(\'Erreur : Message non envoyé !\'); location.assign("https://portfolio.mathieulp.fr/#contact");</script>';
        }
    }