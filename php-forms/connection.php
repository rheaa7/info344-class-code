<<<<<<< HEAD
<?php
function getConnection() {
	require_once 'secret/db-credentials.php';

	try {
		$conn = new PDO("mysql:host={$dbHost};dbname={$dbDatabase}", $dbUser, $dbPassword);
			return $conn;
	} catch(PDOException $e) {
		die('Could not connect to database' . $e);
	}
=======
<?php 
function getConnection() {
    require_once 'secret/db-credentials.php';
    
    try {
        $conn = new PDO("mysql:host={$dbHost};dbname={$dbDatabase}", 
              $dbUser, $dbPassword);
        
        return $conn;
        
    } catch(PDOException $e) {
        die('Could not connect to database ' . $e);
    }
>>>>>>> 2cf08cf17a3f5dd45e47699cc347b2ecbb7c7ea1
}

?>