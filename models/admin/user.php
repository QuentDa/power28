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
    if($newUser){
        header('location:index.php?page=admin-user-list');
        exit;
    }
    else{
        return "Impossible d'enregistrer le nouvel utilisateur...";
    }
}


function updateUser($first, $last, $mail, $isAdmin, $userId, $pass){
    $db = dbConnect();

    $queryString = 'UPDATE user SET firstname = :firstname, lastname = :lastname, email = :email, is_admin = :is_admin ';
    $queryParameters = [ 'firstname' => $first, 'lastname' => $last, 'email' => $mail, 'is_admin'=> $isAdmin, 'id' => $userId ];

    if( !empty($_POST['password'])) {
        $queryString .= ', password = :password ';
        $queryParameters['password'] = hash('md5', $pass);
    }

    $queryString .= 'WHERE id = :id';

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