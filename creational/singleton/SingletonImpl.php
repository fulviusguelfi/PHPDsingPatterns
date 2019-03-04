<?php
require_once './SingletonInterface.php';
/**
 * Description of SingletonImpl
 *
 * @author fulvi
 */
class SingletonImpl implements SingletonInterface {

    public static function getInstance() {
        $this->super()->getInstance();
    }

}

/** @var type $teste */
$teste = SingletonImpl::getInstance();
var_dump($teste);