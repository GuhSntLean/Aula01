<?php
require 'conexao.php';

$sql = "INERT INTO usuarios(usuario,senha)VALUES('gustavo','123')";

$dbMysql->exec($sql);