<?php
  
$conn = "";
   
try {
    $servername = "rdbms.strato.de";
    $dbname = "dbs6165480";
    $username = "dbu2313101";
    $password = "TaiBiSiXiong707";
   
    $conn = new PDO(
        "mysql:host=$servername; dbname=dbs6165480",
        $username, $password
    );
      
   $conn->setAttribute(PDO::ATTR_ERRMODE,
                    PDO::ERRMODE_EXCEPTION);
}

catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
  
?>