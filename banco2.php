<?php

class Banco{
    private $dsn, $dbh, $sql;

    function __contruct($dsn=null){
        if ( empty($dsn) ){
            $this->dsn = 'mysql:dbname=A002;host=127.0.0.1';
        }else{
            $this->dsn = $dsn;
        };

        $this->conecta();

    } // FIM CONSTRUCT

    function conecta(){
        try{
            $this->dbh = new PDO($this->dsn, 'root');
            echo "conectou";            
        } catch (PDOException $e){
            echo 'Connection failed: '
                .$e->getMessage();
        }
    } // FIM CONECTA

    function executar($sql){
        $registros_afetados = $this->dbh->exec($sql);
        return $registros_afetados;
    } // FIM EXECUTAR

    function consultar($sql){
        return $this->dbh->query($sql);
    } // FIM CONSULTAR

}// FIM CLASSE BANCO

?>
