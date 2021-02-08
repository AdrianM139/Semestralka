<?php

namespace App;

use App\Auth\DBAuthenticator;
use App\Core\AAuthenticator;
use App\Core\DB\Connection;
use App\Core\Request;
use App\Core\Responses\RedirectResponse;
use App\Core\Responses\Response;
use App\Core\Router;
use App\Config\Configuration;

/**
 * Class App
 * Main Application class
 * @package App
 */
class App
{
    /**
     * @var Router
     */
    private $router;

    /**
     * @var Request
     */
    private Request $request;

    /**
     * @var AAuthenticator|null
     */
    private ?AAuthenticator $auth;


    /**
     * App constructor
     */
    public function __construct()
    {
        $this->router = new Router();
        $this->request = new Request();
        $this->auth = new DBAuthenticator();
    }

    /**
     * Runs the application
     * @throws \Exception
     */
    public function run()
    {
        ob_start();

        $this->router->processURL();

        $controllerName = $this->router->getFullControllerName();

        $controller = new $controllerName($this);

        if($controller->authorize($this->router->getAction())){

            $response = call_user_func([$controller,$this->router->getAction()]);
            $response->generate();

        } else {
            if($this->auth->isLogged() or !defined('\\App\\Config\\Configuration::LOGIN_URL')){
                http_response_code(403);
                echo '<h1>403</h1>';
            } else {
                (new RedirectResponse(Configuration::LOGIN_URL))->generate();

            }
        }

    }

    /**
     * @return Router
     */
    public function getRouter(): Router
    {
        return $this->router;
    }

    /**
     * @return Request
     */
    public function getRequest(): Request
    {
        return $this->request;
    }

    /**
     * @return AAuthenticator|null
     */
    public function getAuth(): ?AAuthenticator
    {
        return $this->auth;
    }



}