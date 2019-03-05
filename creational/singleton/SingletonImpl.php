<?php declare(strict_types=1);
require_once './SingletonInterface.php';

/**
 * Description of SingletonClass
 *
 * @author fulvi
 */
class SingletonImpl implements SingletonInterface {

    private static $instance = null;

    /**
     * Retorna uma instância única de uma classe.
     *
     * @staticvar Singleton $instance A instância única dessa classe.
     *
     * @return Singleton A Instância única.
     */
    public static function getInstance() {
        if (null === $this->instance) {
            $this->instance = new static();
        }
        return $this->instance;
    }

    /**
     * Destrutor esvasia a variavel de instância
     */
    public function __destruct() {
        $this->instance = null;
    }

    /**
     * Construtor do tipo protegido previne que uma nova instância da
     * Classe seja criada através do operador `new` de fora dessa classe.
     */
    protected function __construct() {
        return $this->getInstance();
    }

    /**
     * Método clone do tipo privado previne a clonagem dessa instância
     * da classe
     *
     * @return void
     */
    private function __clone() {
        throw new RuntimeException("$this->self is a Singleton. Use getInstance()");
    }

    /**
     * Método unserialize do tipo privado para prevenir a desserialização
     * da instância dessa classe.
     *
     * @return void
     */
    private function __wakeup() {
        throw new RuntimeException("$this->self is a Singleton. Use getInstance()");
    }

}
