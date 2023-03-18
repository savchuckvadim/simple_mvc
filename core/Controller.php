<?php

class Controller {
    protected function view($view, $data = []) {
        $loader = new \Twig\Loader\FilesystemLoader(__DIR__ . '/../app/views/templates/');
        $twig = new \Twig\Environment($loader);
        echo $twig->render($view, $data);
    }
}