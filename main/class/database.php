<?php 
class Database{
    private $pdo;
    //connexion a la abse de donnee
    public function __construct($login, $password, $database_name, $host = 'localhost'){
        $this->pdo = new PDO("mysql:dbname=$database_name;host=$host", $login,$password);
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        $this->pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);
    }
    // requete a la Base de donnee    
    /**
     * query
     *
     * @param  mixed $query
     * @param  bool|array $params
     * @return void
     */
    public function query($query, $params = false){
        if($params){
            $req = $this->pdo->prepare($query);
            $req->execute($params);
        }
        else{
            $req = $this->pdo->query($query);

        }
        return $req;
    }
    
    /**
     * lastInsertid
     *
     * @return void
     */
    public function lastInsertid(){
        return $this->pdo->lastInsertId();
    }
}
