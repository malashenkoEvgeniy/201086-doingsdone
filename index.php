<?php
require_once('functions/functions.php');
require_once('config/config.php');
require_once('data.php');

$page_content = include_template('index.php', [ 'tasks' => $tasks,
                                                'show_complete_tasks' => $show_complete_tasks]);
$content = include_template('layout.php', [ 'content'=> $page_content,
                                            'tasks' => $tasks,
                                            'config' => $config,
                                            'projects' => $projects]);
print($content);


