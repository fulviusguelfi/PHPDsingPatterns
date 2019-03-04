<?php declare(strict_types=1); ?>
<?php
//require_once 'AbstractFactoryBuilderInterface.php';
/**
 * Description of AbstractFactory
 *
 * @author fulvi
 */
class AbstractFactoryImpl {

    var $objects;

    public function __construct(array $objs) {
        return new AbstractFactoryImpl().buildAll($objs);
    }

    private function buildAll(array $objs): AbstractFactoryImpl {
        while (list($key, $obj) = each($objs)) {
             $this->objects[$key] = $obj.build();
        }
        return $this;
    }
    
    public function get() : array{
        return $this->objects;
    }

}
