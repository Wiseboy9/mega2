
<!DOCTYPE html>
<html lang="fr">
<head>
    <!-- ... (head content remains the same) ... -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Statut de Commande</title>
    <style>
        /* ... (Votre CSS existant reste inchangé) ... */
         html,body{
            height:100%;
            margin:0;
            padding:0;
        }
        body{
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            margin: 0;
            padding: 0;
        }
        .container {
            flex:1
            background-color: #ffffff;
            border-radius: 10px;
            padding: 30px;
            /* margin: 0 auto; */
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 1200px;
            margin:2rem 0;
            
        }
        .main-content {
    flex: 1;
    display: flex;
    flex-direction: column;
    align-items: center;
    width: 100%;
}
        h1, h2 {
            color: #2c3e50;
            text-align: center;
        }
        form {
            display: flex;
            flex-direction: column;
            gap:1rem;
            display:relative;
            /* margin-bottom: 185px; */
        }
        label {
            margin-top: 15px;
            color: #34495e;
            font-weight: bold;
        }
        select, button {
            margin-top: 5px;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 16px;
        }
        button {
            background-color: #3498db;
            color: white;
            border: none;
            cursor: pointer;
            font-weight: bold;
            transition: background-color 0.3s;
        }
        button:hover {
            background-color: #2980b9;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
            font-weight: bold;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        .status {
            font-weight: bold;
        }
        .en-attente { color: #f39c12; }
        .en-cours { color: #3498db; }
        .approuvee { color: #2ecc71; }

        footer {
            background-color: #8B4513;
            color: white;
            text-align: center;
            padding: 1rem;
            width: 100%;
            margin-top: auto;
        }
    </style>
</head>
<body>
     <div class="main-content">
    
    <div class="container">
        <h1>Statut de Commande</h1>
        <h2>Bienvenue, 
        

    </div>
    </div>
       
    </footer>
</body>
</html>
