<?php



function selectUser($mail, $password){
    $db = dbConnect();

    $query = $db->prepare('SELECT *
							FROM user
							WHERE email = ? AND password = ?');
    $query->execute( array( $mail, hash('md5', $password), ) );
    return $query->fetch();
}

function selectUser2($id){
    $db=dbConnect();

    $query = $db->prepare('SELECT * FROM user WHERE id = ?');
    $query->execute(array($id));
    //$user contiendra les informations de l'utilisateur dont l'id a été envoyé en paramètre d'URL
    return $query->fetch();



}


function verifyUser($mail){

    $db = dbConnect();

    $query = $db->prepare('SELECT email FROM user WHERE email = ?');
    $query->execute(array($mail));

    return $query -> fetch();
}

function createUser($firstname, $lastname, $mail, $pass){

    $db = dbConnect();

    $query = $db->prepare('INSERT INTO user (firstname,lastname,email,password) VALUES (?, ?, ?, ?)');
    return $query->execute(
        [
            $firstname,
            $lastname,
            $mail,
            hash('md5', $pass)
        ]
    );


}

function nbUser(){
    $db = dbConnect();

    return $db->query("SELECT COUNT(*) FROM user")->fetchColumn();
}

function deleteUser($userId){
    $db = dbConnect();

    $query = $db->prepare('DELETE FROM user WHERE id = ?');
    $result = $query->execute(
        [
            $userId
        ]
    );
//générer un message à afficher plus bas pour l'administrateur
    if($result){
        return "Suppression efféctuée.";
    }
    else{
        return "Impossible de supprimer la séléction.";
    }
}

function selectAllUsers(){

    $db=dbConnect();
    $query = $db->query('SELECT * FROM user');

    return $query->fetchAll();
}

function createUserAdmin($first, $last, $pass, $mail, $isAdmin){
    $db=dbConnect();
    $query = $db->prepare('INSERT INTO user (firstname, lastname, password, email, is_admin) VALUES (?, ?, ?, ?, ?)');
    $newUser = $query->execute(
        [
            $first,
            $last,
            hash('md5', $pass),
            $mail,
            $isAdmin,
        ]
    );
    //redirection après enregistrement
    //si $newUser alors l'enregistrement a fonctionné
    if($newUser){
        header('location:index.php?page=admin-user-list');
        exit;
    }
    else{ //si pas $newUser => enregistrement échoué => générer un message pour l'administrateur à afficher plus bas
        return "Impossible d'enregistrer le nouvel utilisateur...";
    }
}


function updateUser($first, $last, $mail, $isAdmin, $userId, $pass){
    $db = dbConnect();

    //début de la chaîne de caractères de la requête de mise à jour
    $queryString = 'UPDATE user SET firstname = :firstname, lastname = :lastname, email = :email, is_admin = :is_admin ';
    //début du tableau de paramètres de la requête de mise à jour
    $queryParameters = [ 'firstname' => $first, 'lastname' => $last, 'email' => $mail, 'is_admin'=> $isAdmin, 'id' => $userId ];

    //uniquement si l'admin souhaite modifier le mot de passe
    if( !empty($_POST['password'])) {
        //concaténation du champ password à mettre à jour
        $queryString .= ', password = :password ';
        //ajout du paramètre password à mettre à jour
        $queryParameters['password'] = hash('md5', $pass);
    }

    //fin de la chaîne de caractères de la requête de mise à jour
    $queryString .= 'WHERE id = :id';

    //préparation et execution de la requête avec la chaîne de caractères et le tableau de données
    $query = $db->prepare($queryString);
    $result = $query->execute($queryParameters);

    if($result){
        header('location:index.php?c=admin-user-list');
        exit;
    }
    else{
        return 'Erreur.';
    }
}