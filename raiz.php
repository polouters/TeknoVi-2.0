<?php
/**
 * Created by PhpStorm.
 * User: ruben
 * Date: 24/8/16
 * Time: 8:34
 */
class url
{
    private static $raiz = "http://192.168.33.10/TeknoVi-2.0";

    /**Esto depende de como tengamos configurado el directorio cada uno en la version final la raiz sera: teknovi.es
     * @return string
     */
    public static function getRaiz()
    {
        return self::$raiz;
    }


}

?>