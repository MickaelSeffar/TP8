<?php


namespace App\Services;


class Censurator
{
    private $tableau = ['merde', 'putain', 'voyou', 'fumier', 'pute', 'con'];

    public function purify($string)
    {
       /* foreach ($this->tableau as $tableaux){

            $string = preg_replace('#^'.$tableaux.'$#i','****',$string);
            $string = preg_replace('#^'.$tableaux.'([^a-z])#i','****$1',$string);
            $string = preg_replace('#([^a-z])'.$tableaux.'$#i','$1****',$string);
            $string = preg_replace('#([^a-z])'.$tableaux.'([^a-z])#i','$1****$2',$string);

        } */
        $string = preg_replace_callback('#([^a-z])'),testMot,$string);
return $string;

    }

}