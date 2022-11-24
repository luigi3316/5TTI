<?php

function getBiens($dbh){
    try{
        $query = 'SELECT * from biens';
        $profil = $dbh->prepare ($query);
        $profil->execute();
        $biens = $profil->fetchAll();
        return $biens;
    }catch(PDOException $e){
        $_SESSION['etatConnect'] = false;
        $message = $e->getMessage();
        return $message; 
    }
}

function connectUser(){
try {
        global $dbh;
        $query = $dbh->prepare('SELECT * FROM utilisateurs where loginUser = :txtLogin and passWordUser = :passWordUser');
        $query->execute([
            'txtLogin' => $_POST['txtLogin'],
            'passWordUser' => $_POST['txtMp']
        ]);
        $user = $query->fetch();
    }catch (PDOException $e) {
        $_SESSION['etatConnect'] = false;
        $message = $e->getMessage();
        return $message; 
    }
    return $user;
}

function createNewUser($dbh){
    try{
        $query = 'INSERT INTO utilisateurs (nomUser, prenomUser, loginUser, passWordUser) VALUES (:nomUser, :prenomUser, :loginUser, :txtMp)' ;
        $profil = $dbh->prepare ($query);
        $profil->execute([
            'nomUser' => $_POST['nomUser'],
            'prenomUser' => $_POST['prenomUser'],
            'loginUser' => $_POST['loginUser'],
            'txtMp' => $_POST['txtMp']
        ]);
    }catch(PDOException $e){
        $_SESSION['etatConnect'] = false;
        $message = $e->getMessage();
        return $message; 
    }
}

function modifUser($dbh){
    try{
        $query = 'update utilisateurs set prenomUser=:prenomUser,nomUser=:nomUser,loginUser=:loginUser,passWordUser=:txtMp where id = :id';
        $profil = $dbh->prepare ($query);
        $profil->execute([
            'id' => $_SESSION['user']->id,
            'nomUser' => $_POST['nomUser'],
            'prenomUser' => $_POST['prenomUser'],
            'loginUser' => $_POST['loginUser'],
            'txtMp' => $_POST['txtMp']
        ]);
        $query = $dbh->prepare('SELECT * FROM utilisateurs where id = :user');
        $query->execute([
            'user' => $_SESSION['user']->id,
        ]);
        $user = $query->fetch();
        return $user; 
    }catch(PDOException $e){
        $_SESSION['etatConnect'] = false;
        $message = $e->getMessage();
        return $message; 
    }
}

function deleteUser($dbh){
    try{
        $query = 'DELETE FROM utilisateurs WHERE id = :id';
        $profil = $dbh->prepare ($query);
        $profil->execute([
            'id' => $_SESSION['user']->id
        ]);
        $user = $profil->fetch();
        return $user;
    }catch(PDOException $e){
        $_SESSION['etatConnect'] = false;
        $message = $e->getMessage();
        return $message; 
    }
}

function myBien($dbh){
    try{
        $query = 'SELECT * FROM biens where userId = :userId';
        $profil = $dbh->prepare ($query);
        $profil->execute([
            'userId' => $_SESSION['user']->id
        ]);
        $biens = $profil->fetchAll();
        return $biens;
    }catch(PDOException $e){
        $_SESSION['etatConnect'] = false;
        $message = $e->getMessage();
        return $message;
    }
}

function bienShow($dbh){
    try{
        $query = 'SELECT * FROM biens where bienId = :bienId';
        $profil = $dbh->prepare('SELECT * FROM biens where bienId = :bienId');
        $profil->execute([
            'bienId' => $_GET['bienId']
        ]);
        $biens = $profil->fetch();
        return $biens;
    }catch(PDOException $e){
        $_SESSION['etatConnect'] = false;
        $message = $e->getMessage();
        return $message;
    }
}

function optionsBien($dbh){
    try{
        $query = 'SELECT * FROM options where optionId in (select optionId from biens_options where bienId = :bienId)';
        $profil = $dbh->prepare($query);
        $profil->execute([
            'bienId' => $_GET['bienId']
        ]);
        $biens = $profil->fetchAll();
        return $biens;
    }catch(PDOException $e){
        $_SESSION['etatConnect'] = false;
        $message = $e->getMessage();
        return $message;
    }
}