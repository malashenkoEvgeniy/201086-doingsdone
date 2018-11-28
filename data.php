<?php
$show_complete_tasks = rand(0, 1);
$projects = ['Входящие', 'Учеба', 'Работа', 'Домашние дела', 'Авто'];
$tasks = [
    [
        'task' => '<b style="color: red;">Собеседование</b> в IT компании',
        'date' => '01.06.2018',
        'project' => $projects[2],
        'status' => false
    ],
    [
        'task' => 'Выполнить тестовое задание',
        'date' => '25.05.2018',
        'project' => $projects[2],
        'status' => false
    ],
    [
        'task' => 'Сделать задание первого раздела',
        'date' => '21.04.2018',
        'project' => $projects[1],
        'status' => true
    ],
    [
        'task' => 'Встреча с другом',
        'date' => '22.04.2018',
        'project' => $projects[0],
        'status' => false
    ],
    [
        'task' => 'Купить корм для кота',
        'date' => '',
        'project' => $projects[3],
        'status' => false
    ],
    [
        'task' => 'Заказать пиццу',
        'date' => '',
        'project' => $projects[3],
        'status' => false
    ]
];
