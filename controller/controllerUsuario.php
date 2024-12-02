<?php 
class ControllerUsaurio{
    function static cadastrarUsuario($infoUSuario){
        $usuario = new Usuario($infoUSuario); 

        $querys = usuario->cadastrar();

        $bd->connectar();

        foreach($querys as $consulta){
            $bd->query($consulta);
        }

        $bd->close()
    }
}