<?php
session_start();

if (!isset($_SESSION['user_id']) || !isset($_SESSION['user_type'])) {
    $_SESSION['redirect_url'] = $_SERVER['REQUEST_URI'];
    header("Location: login.php");
    exit();
}

if ($_SESSION['user_type'] !== 'client') {
    header("Location: access_denied.php");
    exit();
}

// Connexion à la base de données avec PDO
try {
    $pdo = new PDO('mysql:host=localhost;dbname=mega_ssd_db;charset=utf8', 'root', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    die("Erreur de connexion : " . $e->getMessage());
}

// Récupération du nom du client connecté
try {
    $stmt = $pdo->prepare("SELECT nom FROM client WHERE idcl = ?");
    $stmt->execute([$_SESSION['user_id']]);
    $client = $stmt->fetch(PDO::FETCH_ASSOC);
    $clientName = $client['nom'];
} catch(PDOException $e) {
    echo "<div class='message error'>Erreur lors de la récupération du nom du client : " . $e->getMessage() . "</div>";
    $clientName = "Client inconnu";
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de Contact</title>
    <style>
        /* Your existing styles here */
        .container {
            justify-content:center;
           margin-left:500px;
            background-color: #ffffff;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }
        h2 {
            text-align: center;
            color: #333;
        }
        form {
            display: flex;
            flex-direction: column;
        }
        label {
            margin-top: 1rem;
            margin-bottom: 0.5rem;
            color: #555;
        }
        select, textarea {
            padding: 0.5rem;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 1rem;
        }
        textarea {
            resize: vertical;
            min-height: 100px;
        }
        input[type="submit"] {
            margin-top: 1rem;
            padding: 0.5rem;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 1rem;
            transition: background-color 0.3s ease;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
        .message {
            margin-top: 1rem;
            padding: 0.5rem;
            border-radius: 4px;
            text-align: center;
        }
        .success {
            background-color: #d4edda;
            color: #155724;
        }
        .error {
            background-color: #f8d7da;
            color: #721c24;
        }
        .client-name {
            font-weight: bold;
            color: #333;
            margin-bottom: 1rem;
        }
    </style>
</head>
<body>
   
    <div class="container">
        
       
        <form method="post" action="">
            <div class="client-name">Client : </div>

            <label for="objectif">Objectif :</label>
            <textarea name="objectif" id="objectif" required></textarea>

            <label for="message">Message :</label>
            <textarea name="message" id="message" required></textarea>

            <input type="submit" value="Envoyer">
        </form>
    </div>

   
</body>
</html>
