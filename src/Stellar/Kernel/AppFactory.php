<?php

namespace Stellar\Kernel;

use Stellar\DI\Container,
    Stellar\Kernel\Config,
    Stellar\MVC\Request,
    Stellar\MVC\Router,
    Stellar\MVC\Dispatcher;

/** 
 * App components factory
 */
class AppFactory implements AppFactoryInterface {
   
    /**
     *@return ContainerInterface
     */
    public function createContainer() {
        return new Container();
    }
    
    /**
     * @return ConfigInterface
     */
    public function createConfig() {
        return new Config();
    }

    /**
     * @return RequestInterface
     */
    public function createRequest() {
        return new Request();
    }

    /**
     * @return RouterInterface
     */
    public function createRouter() { 
        return new Router();
    }

    /**
     * @return DispatcherInterface
     */
    public function createDispatcher() {
        return new Dispatcher();
    }
}
