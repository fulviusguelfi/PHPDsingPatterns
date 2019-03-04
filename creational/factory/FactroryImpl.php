<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of FactroryImpl
 *
 * @author fulvi
 */
class FactroryImpl implements FactoryInterface{
    //put your code here
    public static function create($clsName) {
        return new $clsName();
    }

}
