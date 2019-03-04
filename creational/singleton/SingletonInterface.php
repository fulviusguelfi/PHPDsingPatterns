<?php
require_once './SingletonClass.php';

/**
 *
 * @author fulvi
 */
interface SingletonInterface extends SingletonClass{
    public static function getInstance();
}
