<?php
//ar -> manejador
class Funciones
{
    public static function Listar($archivo)
    {
        $ar = fopen($archivo,"r");  
        $miarray = array();
        while(!feof($ar))
        {
            array_push($miarray,json_decode(fgets($ar))); 
        }
        fclose($ar);
    return ($miarray);
    }

    public static function Guardar($objeto,$archivo,$modo)
    {
        $ar = fopen($archivo,$modo); 
        $codificado = json_encode($objeto);
        fwrite($ar,$codificado.PHP_EOL);
        fclose($ar);
    }

    public static function ModificarxID($id,$objeto,$archivo)
    {   
        $array1 = funciones::Listar($archivo);
        $array1[$id] = $objeto;
        $apertura = "a";
        unlink($archivo);
        foreach($array1 as $unobjeto)
        {
            if(is_null($unobjeto))
            {
                break;
            }
            else
            {
                Funciones::Guardar($unobjeto,$archivo,$apertura);
            }
            
        }
        //modificar posición de array segun ID
        //llamar a función guardar por C/id del aray retornado por listar
        

    }
}

?>