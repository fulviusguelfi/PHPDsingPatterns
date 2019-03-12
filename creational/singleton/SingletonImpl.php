<?php declare(strict_types=1);
    spl_autoload_extensions(".php");
    spl_autoload_register();

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
        if (null === self::$instance) {
            self::$instance = new SingletonImpl();
        }
        return self::$instance;
    }
    
    /**
     * Destrutor esvasia a variavel de instância
     */
    public function __destruct() {
        self::$instance = null;
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
