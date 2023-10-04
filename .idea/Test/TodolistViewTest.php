<?php

require_once _DIR_ . "/../Entity/Todolist.php";
require_once _DIR_ . "/../Repository/TodolistRepository.php";
require_once _DIR_ . "/../service/TodolistService.php";
require_once _DIR_ . "/../View/TodolistView.php";
require_once _DIR_ . "/../Helper/InputHelper.php";

use Entity\Todolist;
use \Repository\TodolistRepositorylmpl;
use \Service\TodolistServicelmpl;
use \View\TodolistView;

function testViewShowTodolist():void
{
    $todolistRepository = new TodolistRepositoryImpl();
    $todolistService = new TodolistServicelmpl($todolistRepository);
    $todolistView = new TodolistView($todolistService);
    $todolistService->addTodolist("Belajar PHP");
    $todolistService->addTodolist("Belajar PHP OOP");
    $todolistService->addTodolist("Belajar PHP Database");

    $todolistView->showTodolist();

}

function testViewAddTodolist():void
{
    $todolistRepository = new TodolistRepositoryImpl();
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
    $todolistRepository = new TodolistRepositoryImpl();
    $todolistService = new TodolistServiceImpl($todolistRepository);
    $todolistView = new todolistView($todolistService);
    $todolistService->addTodolist("Belajar PHP");
    $todolistService->addTodolist("Belajar PHP OOP");
    $todolistService->addTodolist("Belajar PHP Database");

    $todolistService->showTodolist();

    $todolistView->removeTodolist();

    $todolistService->showTodolist();

    $todolistView->removeTodolist();

    $todolistService->showTodolist();

}

testViewRemoveTodolist();