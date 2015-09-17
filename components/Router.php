<?php

class Router
{
    private $routes;

    public function __construct()
    {
        $routesPath = 'config/routes.php';

        $this->routes = include($routesPath);
    }

    //Метод возвращает строку

    private function getURI()
    {
        if (!empty($_SERVER['REQUEST_URI'])) {
            return trim($_SERVER['REQUEST_URI'], '/');
        }
    }

    /**
     *
     */
    public function run()
    {

        //Получить строку запроса

        $uri = $this->getURI();


        //Проверить наличие такого запроса в routes.php

        foreach ($this->routes as $uriPattern => $path) {

            //Если есть совпадение,определить какой контроллер и action обрабатывает запрос

            if (preg_match("~$uriPattern~", $uri)) {   //В нашем случае перебираются news и products

                //Получает внутренний путь из внешнего согласно правилу.

                $internalRoute = preg_replace("~$uriPattern~" ,$path ,$uri);

                //Определить какой контроллер и action обрабатывают запрос

                $segments = explode('/', $internalRoute);  //Эта функция делит имя и путь


                $controllerName = array_shift($segments) . 'Controller';   //Получаем первый элемент массива,
                //Добавляем слово Controller

                $controllerName = ucfirst($controllerName);   //Сдесь находится имя контроллера с большой буквы

                $actionName = 'action' . ucfirst(array_shift($segments));  //Создаём экшен и удаляем первое значение-контроллер

                $parameters = $segments;



                //Подключить файл контроллера

                $controllerFile = ROOT . '/controllers/' .
                    $controllerName . '.php';

                if (file_exists($controllerFile)) {
                    include_once($controllerFile);
                }

                //Создать объект,вызвать метод (т.е action)
                $controllerObject = new $controllerName;
                $result = call_user_func_array(array($controllerObject ,$actionName) ,$parameters);
                if ($result != null) {
                    break;
                }
            }

        }

    }
}


