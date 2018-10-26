<?php

require "UsuarioEntity.php";

$usuario = new UsuarioEntity();

foreach($usuario->consultar() as $row) {
    print $row['id']. "\t";
    print $row['login']. "\t<hr>";
    };

?>
