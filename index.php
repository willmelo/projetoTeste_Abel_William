<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            require_once 'Bolsista.php';
            
            $b = new Bolsista();
            $b->setNome("Abel");
            $b->setSobrenome("Souza Costa Junior");
            $b->setIdade(20);
            $b->setTipo(100);
            
            var_dump($b);
        ?>
    </body>
</html>
