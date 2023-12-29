<?php
/**
 * SQLite connnection
 */
class DBController {

    private $pdo;

    function __construct()
    {
        $this->pdo = $this->connectDB();
    }


    function connectDB() {
        try {
            $pdo = new PDO("sqlite:" . dirname(__DIR__) . DIRECTORY_SEPARATOR . 'database/Livres.sqlite');
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // pour vérifier s'il y a des erreur
            // si oui il va aller dans le catch
            return $pdo;
        } catch (PDOException $e) {
            die('La connection a échoué: ' . $e->getMessage());
        }
    } 
    function runQuery($query) {
        try {
            $stmt = $this->pdo->prepare($query);
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        } catch (PDOException $e) {
            die('la requête a échoué' . $e-> getMessage());
        }
    }

    function runSingleQuery($query) {
        try {
            $stmt = $this->pdo->prepare($query);
            $stmt->execute();
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            return $result;
        } catch (PDOException $e) {
            die('la requête a échoué' . $e-> getMessage());
        }
    }
}

/* namespace App; */

/**
 * SQLite connnection
 */
/* class SQLiteConnection { */
    /*
     * PDO instance
      @var type  */
    /* private $pdo; */

    /*
      return in instance of the PDO object that connects to the SQLite database
      @return \PDO
     */
    /* public function connect() {
        if ($this->pdo == null) {
            $this->pdo = new \PDO("sqlite:" . dirname(__DIR__) . DIRECTORY_SEPARATOR . 'Projet_Integrateur_KevinBouhalassa\app\database\Livres.db');
        }
    return $this->pdo;
}
} */

 ?> 