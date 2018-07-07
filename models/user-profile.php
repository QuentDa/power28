<?php

function actualUser ($userId) {
    $db = dbConnect();

    $query = $db->prepare('SELECT * FROM user WHERE id = ?');
    $query->execute(array($userId));
    return $query->fetch();

}

function updateUser($email, $firstname, $lastname, $password, $passwordConfirm, $userId ) {

    $db = dbConnect();

    $query = $db->prepare('SELECT email FROM user WHERE email = ?');
    $query->execute(array($email));

    $emailAlreadyExists = $query->fetch();



    if($emailAlreadyExists && ($emailAlreadyExists['email'] != $email)){
        $updateMessage = "Adresse email déjà utilisée";

    }
    elseif(empty($firstname) OR empty($email)){

        $updateMessage = "Merci de remplir tous les champs obligatoires (*)";

    }

    elseif( !empty($password) AND ($password != $passwordConfirm)) {

        $updateMessage = "Les mots de passe ne sont pas identiques";
    }
    else {


        $queryString = 'UPDATE user SET firstname = :firstname, lastname = :lastname, email = :email ';

        $queryParameters = [ 'firstname' => $firstname, 'lastname' => $lastname, 'email' => $email, 'id' => $userId ];


        if( !empty($password) ){

            $queryString .= ', password = :password ';

            $queryParameters['password'] = hash('md5', $password);
        }
        $queryString .= 'WHERE id = :id';

        $query = $db->prepare($queryString);
        $result = $query->execute($queryParameters);

        if($result){

            $_SESSION['user'] = $firstname;
            $updateMessage = "Informations mises à jour avec succès !";

            $query = $db->prepare('SELECT * FROM user WHERE id = ?');
            $query->execute(array($userId));
            $query->fetch();
        }
        else{
            $updateMessage = "Erreur";
        }
    }
    return $updateMessage;
}


?>