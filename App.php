<?php

require_once __DIR__ . '/Entity/Todolist.php';
require_once __DIR__ . '/Repository/TodolistRepository.php';
require_once __DIR__ . '/Service/TodolistService.php';
require_once __DIR__ . '/View/TodolistView.php';
require_once __DIR__ . '/Helper/InputHelper.php';

use Repository\TodolistRepositoryImpl;
use Service\TodolistServiceImpl;
use View\TodolistView;

echo 'Aplikasi TodoList' . PHP_EOL;

$todolist_repo = new TodolistRepositoryImpl();
$todolist_service = new TodolistServiceImpl($todolist_repo);
$todolist_view = new TodolistView($todolist_service);

$todolist_view->showTodoList();
?>