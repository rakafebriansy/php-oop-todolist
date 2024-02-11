<?php
require_once __DIR__ . '/../Entity/Todolist.php';
require_once __DIR__ . '/../Repository/TodolistRepository.php';
require_once __DIR__ . '/../Service/TodolistService.php';

use Entity\Todolist;
use Repository\TodolistRepositoryImpl;
use Service\TodolistServiceImpl;

function testShowTodolist(): void
{
    $todolist_repo = new TodolistRepositoryImpl();
    // $todolist_repo->todolist[1] = new Todolist('Belajar PHP');
    // $todolist_repo->todolist[2] = new Todolist('Belajar PHP OOP');
    // $todolist_repo->todolist[3] = new Todolist('Belajar PHP Database');
    $todolist_service = new TodolistServiceImpl($todolist_repo);
    $todolist_service->showTodolist();
}
function testAddTodolist(): void
{
    $todolist_repo = new TodolistRepositoryImpl();
    $todolist_service = new TodolistServiceImpl($todolist_repo);
    $todolist_service->addTodolist('Belajar PHP');
    $todolist_service->addTodolist('Belajar PHP OOP');
    $todolist_service->addTodolist('Belajar PHP Database');
    $todolist_service->showTodolist();
}
function testRemoveTodolist(): void
{
    $todolist_repo = new TodolistRepositoryImpl();
    $todolist_service = new TodolistServiceImpl($todolist_repo);
    $todolist_service->addTodolist('Belajar PHP');
    $todolist_service->addTodolist('Belajar PHP OOP');
    $todolist_service->addTodolist('Belajar PHP Database');
    $todolist_service->showTodolist();
    $todolist_service->removeTodolist(1);
    $todolist_service->removeTodolist(4);
    $todolist_service->showTodolist();
}
// testShowTodolist();
// testAddTodolist();
// testRemoveTodolist();
?>