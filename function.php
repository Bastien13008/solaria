<?php

$bdd = new PDO("mysql:host=localhost;dbname=solaria_bdd", "solaria", "Cjv_j7197") or die('Could not Connect to Database');
return $bdd;

function getNumPeople() {
    try {
        $servername = "localhost";
        $username = "solaria";
        $password = "Cjv_j7197";
        $dbname = "solaria_bdd";
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $stmt = $conn->prepare("SELECT COUNT(*) as pseudo FROM Utilisateur"); 
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result["pseudo"];
    }
    catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
        return 0;
    }
}

function getNumVote() {
    try {
        
        $servername = "localhost";
        $username = "solaria";
        $password = "Cjv_j7197";
        $dbname = "solaria_bdd";
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $stmt = $conn->prepare("SELECT SUM(Vote) as total FROM Utilisateur"); 
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result["total"];
    }
    catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
        return 0;
    }
}

function get_top_voter_name() {
    $conn = mysqli_connect("localhost", "solaria", "Cjv_j7197", "solaria_bdd");
    $query = "SELECT pseudo FROM Utilisateur ORDER BY Vote DESC LIMIT 1";
    $result = mysqli_query($conn, $query);
    $top_voter_name = mysqli_fetch_assoc($result);
    mysqli_close($conn);
    return $top_voter_name;
}

function get_top_voter_number() {
    $conn = mysqli_connect("localhost", "solaria", "Cjv_j7197", "solaria_bdd");
    $query = "SELECT Vote FROM Utilisateur ORDER BY Vote DESC LIMIT 1";
    $result = mysqli_query($conn, $query);
    $top_voter_number = mysqli_fetch_assoc($result);
    mysqli_close($conn);
    return $top_voter_number;
}

function getMoneyTotal() {
    try {
        
        $servername = "localhost";
        $username = "solaria";
        $password = "Cjv_j7197";
        $dbname = "solaria_bdd";
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $stmt = $conn->prepare("SELECT SUM(Prix) as total FROM Payment"); 
        $stmt->execute();
        $resultMoney = $stmt->fetch(PDO::FETCH_ASSOC);
        return $resultMoney["total"];
    }
    catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
        return 0;
    }
}


function getMoneyObjectif() {
    try {
        
        $servername = "localhost";
        $username = "solaria";
        $password = "Cjv_j7197";
        $dbname = "solaria_bdd";
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $stmt = $conn->prepare("SELECT Objectif as total FROM Info"); 
        $stmt->execute();
        $resultMoneyObjectif = $stmt->fetch(PDO::FETCH_ASSOC);
        return $resultMoneyObjectif["total"];
    }
    catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
        return 0;
    }
}

function getCredit() {

    try {
        
        $servername = "localhost";
        $username = "solaria";
        $password = "Cjv_j7197";
        $dbname = "solaria_bdd";
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $stmt = $conn->prepare("SELECT Credit + SUM(Prix) as Solde FROM Info, Payment"); 
        $stmt->execute();
        $resultCredit = $stmt->fetch(PDO::FETCH_ASSOC);
        return $resultCredit["Solde"];
    }
    catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
        return 0;
    }
}

function getLastPrice() {
    try {
        
        $servername = "localhost";
        $username = "solaria";
        $password = "Cjv_j7197";
        $dbname = "solaria_bdd";
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $stmt = $conn->prepare("SELECT Prix as Solde FROM Payment ORDER BY ID DESC"); 
        $stmt->execute();
        $resultCredit = $stmt->fetch(PDO::FETCH_ASSOC);
        return $resultCredit["Solde"];
    }
    catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
        return 0;
    }
}


?>