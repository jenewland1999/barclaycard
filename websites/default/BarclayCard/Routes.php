<?php
namespace BarclayCard;

class Routes implements \PHPBackend\Routes {
    public function getRoutes($route) {
        require '../connection.php'; //connect to the database

        //generate required database data + controllers
        $stockList = new \PHPBackend\DatabaseTable($pdo, 'stock', 'id');

        $stockController = new \BarclayCard\Controllers\Stock($stockList);

        //tells the program which functions to use based on the URL annd whether we are using $_POST

        $routes = [
            '' => [
                'GET' => [
                    'controller' => $stockController,
                    'function' => 'home'
                ]
            ],

            'allitems' => [
                'GET' => [
                    'controller' => $stockController,
                    'function' => 'list'
                ]
            ],
        ];
        return $routes;
    }

    public function checkLogin(){
        if(!isset($_SESSION['loggedin'])){
            header('location: /login');
        }
    }

}
