<?php

namespace UC;


use LL\Lang;


class Design
{
    /**
     * 
     * under construction text design
     * 
     * 
     * @version 0.0.0
     * @since 0.0.0
     * @author Mahmudul Hasan Mithu
     */
    public static function text()
    {
        Lang::$Path = __DIR__.'/../Lang/';

        $uc = Lang::__( 'Design', 'text' );

        echo '<section>';
            echo "<h1 class='h1 text-danger bg-dark text-center py-5 my-0'> {$uc} </h1>";
        echo '</section>';
    }
}