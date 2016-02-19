<!DOCTYPE HTML>
<html lang="pt_BR">
    <head>
        <meta charset="UTF-8">
        <title>PHP com MySQLi</title>
    </head>
    <body>
        <?php
            require 'config.php';
            require 'connection.php';
            require 'database.php';
                     
           
            /*$cliente = array(
                'nome'  => 'nome',
                'email' => 'email',
                'idade' => 'idade',
                'status'=> 1
            );
            
            $grava = DBCreate('clientes', $cliente);
            if($grava)
                echo 'OK';
            else 
                echo '=/';*/
        //----------------------------------------------------------------------------------            
            //$clientes = DBRead('clientes', "WHERE status = 1 OR status = 0");
            //var_dump($clientes);
        //----------------------------------------------------------------------------------
            /*$cliente = array(
                'status' => 1,
                'idade' => 20
            );
            
            var_dump(DBUpDate('clientes', $cliente, 'id = 4'));*/
            
        //-------------------------------------------------------------------
            $dropCliente = DBDelete('clientes', 'idade = 0');
            
            if ($dropCliente) 
                echo 'OK';
            else 
                echo 'NO';
            
        //--------------------------------------------------------------------
            
            
        ?>  
    </body>
</html>