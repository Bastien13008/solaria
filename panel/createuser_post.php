<?php 
require_once '../config.php'; 
if(!empty($_POST['pseudo']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['password_retype']))
    {
        $pseudo = htmlspecialchars($_POST['pseudo']);
        $email = htmlspecialchars($_POST['email']);
        $password = htmlspecialchars($_POST['password']);
        $password_retype = htmlspecialchars($_POST['password_retype']);
        $newsletter = htmlspecialchars($_POST['newsletter']);



        if (isset($_POST['newsletter'])&& $_POST['newsletter'] == 1) {
            $newsletter = $_POST['newsletter'];
            // traitement des données
        } else {
            $newsletter = 0;
        }

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
                            $insert = $bdd->prepare('INSERT INTO Utilisateur(pseudo, email, password, ip, token, rangs) VALUES(:pseudo, :email, :password, :ip, :token, :rangs)');
                            $insert->execute(array(
                                'pseudo' => $pseudo,
                                'email' => $email,
                                'password' => $password,
                                'ip' => $ip,
                                'token' => $token,
                                'rangs' => $newsletter
                            ));
                            header('Location: player.php');
                            die();
                        }else{ header('Location: player.php?reg_err=password'); die();}
                    }else{ header('Location: player.php?reg_err=email'); die();}
                }else{ header('Location: player.php?reg_err=email_length'); die();}
            }else{ header('Location: player.php?reg_err=pseudo_length'); die();}
        }else{ header('Location: .player.php?reg_err=already'); die();}
    }