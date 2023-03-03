<?php 
require_once '../config.php'; 
if(!empty($_POST['pseudo']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['password_retype']))
    {
        $pseudo = htmlspecialchars($_POST['pseudo']);
        $email = htmlspecialchars($_POST['email']);
        $password = htmlspecialchars($_POST['password']);
        $password_retype = htmlspecialchars($_POST['password_retype']);

        $check = $bdd->prepare('SELECT pseudo, email, password FROM Utilisateur WHERE email = ?');
        $check->execute(array($email));
        $data = $check->fetch();
        $row = $check->rowCount();

        $email = strtolower($email); 
        $token = 0;
        if($row == 0){ 
            if(strlen($pseudo) <= 100){ 
                if(strlen($email) <= 100){ 
                    if(filter_var($email, FILTER_VALIDATE_EMAIL)){ 
                        if($password === $password_retype){ 
                            $ip = $_SERVER['REMOTE_ADDR']; 
                            $password_crypted = md5($password); // Utilisation de md5() pour crypter le mot de passe
                            $insert = $bdd->prepare('INSERT INTO Utilisateur(pseudo, email, password, ip, token) VALUES(:pseudo, :email, :password, :ip, :token)');
                            $insert->execute(array(
                                'pseudo' => $pseudo,
                                'email' => $email,
                                'password' => $password_crypted, // Utilisation du mot de passe crypté
                                'ip' => $ip,
                                'token' => $token
                            ));
                            header('Location: ../Connexion.php');
                            die();
                        }else{ header('Location: ../Inscription.php?reg_err=password'); die();}
                    }else{ header('Location: ../Inscription.php?reg_err=email'); die();}
                }else{ header('Location: ../Inscription.php?reg_err=email_length'); die();}
            }else{ header('Location: ../Inscription.php?reg_err=pseudo_length'); die();}
        }else{ header('Location: ../Inscription.php?reg_err=already'); die();}
    }
?>