<?php
//Fitxer per gestionar les rutes
namespace Core;

use RuntimeException;

class Route
{
    //creem array en les rutes
    protected $routes = [];

    //creem funcio per afegir rutes a l'array
    public function register($route)
    {
        $this->routes[] = $route;
    }

    //funcio per rebre un array de rutes i assignar a la propietat routes
    public function define($route)
    {
        $this->routes = $route;
        return $this;
    }

    //funcio per redirigir la url solicitada a un controlador
    public function redirect($uri)
    {
        //partim la url
        $parts = explode('/', trim($uri,'/'));
        //indiquem ruta del controlador
        $controller = 'App\Controllers\FilmController';
        $skinController = 'App\Controllers\SkinController';

        if ($uri === '/') {
            return view('landing');
        }

        //Inici
        if ($uri === '/films') {
            require '../App/Controllers/FilmController.php';
            //creem nova instancia
            $controllerInstance = new $controller();
            return $controllerInstance->index();
        } else if ($uri === '/skinindex') {
            require '../App/Controllers/SkinController.php';
            //creem nova instancia
            $controllerInstance = new $skinController();
            return $controllerInstance->index();
        }

        //create
        if($parts[0] === 'create') {
            require '../App/Controllers/FilmController.php';
            //creem nova instancia
            $controllerInstance = new $controller();
            return $controllerInstance->create();
        } elseif ($parts[0] === 'skincreate') {
            require '../App/Controllers/SkinController.php';
            //creem nova instancia
            $controllerInstance = new $skinController();
            return $controllerInstance->create();
        }

        //Utilitzant POST guardem
        if ($parts[0] === 'store' && $_SERVER['REQUEST_METHOD'] === 'POST') {
            require '../App/Controllers/FilmController.php';
            //creem nova instancia
            $controllerInstance = new $controller();
            //creem variable per agafar les dades de la petició post
            $data = $_POST;
            return $controllerInstance->store($data);
        } elseif ($parts[0] === 'skinstore' && $_SERVER['REQUEST_METHOD'] === 'POST') {
            require '../App/Controllers/SkinController.php';
            //creem nova instancia
            $controllerInstance = new $skinController();
            //creem variable per agafar les dades de la petició post
            $data = $_POST;
            return $controllerInstance->store($data);
        }


        //delete en GET  mirem que sigue delete en la id
        if($parts[0] === 'delete' && $parts[1]) {
            require '../App/Controllers/FilmController.php';
            //creem nova instancia
            $controllerInstance = new $controller();
            return $controllerInstance->delete($parts[1]);
        } elseif ($parts[0] === 'skindelete' && $parts[1]) {
            require '../App/Controllers/SkinController.php';
            //creem nova instancia
            $controllerInstance = new $skinController();
            return $controllerInstance->delete($parts[1]);
        }


        //destroy en POST
        if ($parts[0] === 'destroy' && $_SERVER['REQUEST_METHOD'] === 'POST') {
            require '../App/Controllers/FilmController.php';
            //creem nova instancia
            $controllerInstance = new $controller();
            //comprovem si pasen id
            if (!isset($_POST['id'])){
                throw new RuntimeException('No id provided');
            }
            return $controllerInstance->destroy($_POST['id']);
        } elseif ($parts[0] === 'skindestroy' && $_SERVER['REQUEST_METHOD'] === 'POST') {
            require '../App/Controllers/SkinController.php';
            //creem nova instancia
            $controllerInstance = new $skinController();
            //comprovem si pasen id
            if (!isset($_POST['id'])){
                throw new RuntimeException('No id provided');
            }
            return $controllerInstance->destroy($_POST['id']);
        }


        //edit en GET
        if($parts[0] === 'edit' && $parts[1]) {
            require '../App/Controllers/FilmController.php';
            //creem nova instancia
            $controllerInstance = new $controller();
            return $controllerInstance->edit($parts[1]);
        } elseif ($parts[0] === 'skinedit' && $parts[1]) {
            require '../App/Controllers/SkinController.php';
            //creem nova instancia
            $controllerInstance = new $skinController();
            return $controllerInstance->edit($parts[1]);
        }

        if($parts[0] === 'show' && $parts[1]) {
            require '../App/Controllers/FilmController.php';
            //creem nova instancia
            $controllerInstance = new $controller();
            return $controllerInstance->show($parts[1]);
        } elseif ($parts[0] === 'skinshow' && $parts[1]) {
            require '../App/Controllers/SkinController.php';
            //creem nova instancia
            $controllerInstance = new $skinController();
            return $controllerInstance->show($parts[1]);
        }

        //Actualitzar en POST
        if ($parts[0] === 'update' && $_SERVER['REQUEST_METHOD'] === 'POST') {
            require '../App/Controllers/FilmController.php';
            //creem nova instancia
            $controllerInstance = new $controller();
            //creem variable per agafar les dades de la petició post
            $data = $_POST;
            //comprovem si pasen id
            if (!isset($_POST['id'])){
                throw new RuntimeException('No id provided');
            }
            return $controllerInstance->update($_POST['id'], $data);
        } elseif ($parts[0] === 'skinupdate' && $_SERVER['REQUEST_METHOD'] === 'POST') {
            require '../App/Controllers/SkinController.php';
            //creem nova instancia
            $controllerInstance = new $skinController();
            //creem variable per agafar les dades de la petició post
            $data = $_POST;
            //comprovem si pasen id
            if (!isset($_POST['id'])){
                throw new RuntimeException('No id provided');
            }
            return $controllerInstance->update($_POST['id'], $data);
        }

        //si no es cap dels anteriors retornem la vista 404
        return require '../resources/views/errors/404.blade.php';


//        //si ruta no existeix redirigim a vista d'error
//        if(!array_key_exists($uri, $this->routes)) {
//            require '../resources/views/errors/404.php';
//            return $this;
//        }
//
//        //si no troba el controlador
//        if (!file_exists($this->routes[$uri])) {
//            throw new RuntimeException("No s'ha trobat el controlador:". $this->routes[$uri]);
//        }
//
//        require $this->routes[$uri];
//        return $this;
    }

}