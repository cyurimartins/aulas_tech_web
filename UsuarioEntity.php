<?php

require 'Banco.php';

class UsuarioEntity{
    private $banco, $id, $login, $senha;

    function __construct(){
        $this->banco = new Banco();
    } // FIM __CONSTRUCT

    function hydrator($form){
        if (isset($form['id'])){
            $this->id = $form['id'];
        }else{
            $this->id=null;
        }
        $this->login = $form['login'];
        $this->senha = $form['senha'];

    } // FIM HYDRATOR

    function salvar(){
        if(empty($this->id)){
            $sql = "insert into usuario
            (login, senha)
            values('"
                .$this->login."','"
                .$this->senha."')";            
        }else{
            $sql = "update usuario
            set
                login = '".$this->login."',
                senha = '".$this->senha."',
            where id = '".$this->id;
        }

        $this->banco->executar($sql);

    } // FIM SALVAR

    function excluir(){
        $sql = "delete from usuario
                where id =".$this->id;
        $this->banco->executar($sql);
    } // FIM EXCLUIR

    function consultar(){
        $sql = "select * from usuario";
        return $this->banco->consultar($sql);
    } // FIM CONSULTAR

} // FIM CLASSE

?>
