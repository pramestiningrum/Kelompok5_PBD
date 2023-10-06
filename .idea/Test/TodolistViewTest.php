<?php

require_once __DIR__ . "/../Entity/Todolist.php";
require_once __DIR__ . "/../Repository/TodolistRepository.php";
require_once __DIR__ . "/../service/TodolistService.php";
require_once __DIR__ . "/../View/TodolistView.php";
require_once __DIR__ . "/../Helper/InputHelper.php";

use Entity\Todolist;
use \Repository\TodolistRepositorylmpl;
use \Service\TodolistServicelmpl;
use \View\TodolistView;

function testViewShowTodolist():void
{
    $connection = \config\Database::getConnection();
    $todolistRepository = new TodolistRepositoryImpl($connection);
    $todolistService = new TodolistServicelmpl($todolistRepository);
    $todolistView = new TodolistView($todolistService);

    $todolistService->addTodolist("Belajar PHP");
    $todolistService->addTodolist("Belajar PHP OOP");
    $todolistService->addTodolist("Belajar PHP Database");

    $todolistView->showTodolist();

}

function testViewAddTodolist():void
{
    $connection = \config\Database::getConnection();
    $todolistRepository = new TodolistRepositoryImpl($connection);
    $todolistService = new TodolistServicelmpl($todoListRepository);
    $todolistView = new TodolistView($todolistService);

    $todolistService->addTodolist("Belajar PHP");
    $todolistService->addTodolist("Belajar PHP OOP");
    $todolistService->addTodolist("Belajar PHP Database");

    $todolistService->showTodolist();

    $todolistView->addTodolist();

    $todolistService->showTodolist();

    $todolistView->addTodolist();

    $todolistService->ShowTodolist();
}

function testViewRemoveTodolist(): void
{
    $connection = \config\Database::getConnection();
    $todolistRepository = new TodolistRepositoryImpl($connection);
    $todolistService = new TodolistServiceImpl($todolistRepository);
    $todolistView = new todolistView($todolistService);

    $todolistService->addTodolist("Belajar PHP");
    $todolistService->addTodolist("Belajar PHP OOP");
    $todolistService->addTodolist("Belajar PHP Database");

    $todolistService->showTodolist();

    $todolistView->addTodolist();

    $todolistService->showTodolist();

    $todolistView->addTodolist();

    $todolistService->showTodolist();

}

testViewRemoveTodolist();