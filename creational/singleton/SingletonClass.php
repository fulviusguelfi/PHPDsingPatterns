<?php

/**
 * Description of SingletonClass
 *
 * @author fulvi
 */
class SingletonClass {

    private static $instance = null;
    private static $super = null;

    /**
     * Retorna uma instância única de uma classe.
     *
     * @staticvar Singleton $instance A instância única dessa classe.
     *
     * @return Singleton A Instância única.
     */
    public static function getInstance() {
        if (null === $this->instance) {
            $this->super = new self();
            $this->instance = new static();
        }
        return $this->instance;
    }

    public static function super() {
        return $this->super;
    }

    public function __destruct() {
        $this->super = null;
        $this->instance = null;
    }

    /**
     * Construtor do tipo protegido previne que uma nova instância da
     * Classe seja criada através do operador `new` de fora dessa classe.
     */
    protected function __construct() {
        
    }

    /**
     * Método clone do tipo privado previne a clonagem dessa instância
     * da classe
     *
     * @return void
     */
    private function __clone() {
        
    }

    /**
     * Método unserialize do tipo privado para prevenir a desserialização
     * da instância dessa classe.
     *
     * @return void
     */
    private function __wakeup() {
        
    }

}
