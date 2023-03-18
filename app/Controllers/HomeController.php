<?php

require_once __DIR__ . '/../../core/Controller.php';

class HomeController extends Controller {
    public function index() {
        $data = [
            'title' => 'Добро пожаловать на мой сайт-визитку',
            'description' => 'Здесь вы найдете информацию обо мне и моих проектах.'
        ];
        $this->view('home.twig', $data);
    }
}
