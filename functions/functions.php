<?php
/**
 * Функция подсчета количества задач в проекте
 * @param {array} $tasklist список задач {string} $project проект
 * @return {int} количество задач в проекте
 */
function getcounttask ($tasklist, $project ) {
    $count=0;
    for($i = 0; $i < count($tasklist); $i++) {
        if($tasklist[$i]['project'] === $project) {
            $count++;
        }
    }
    return $count;
}
/**
 * Функция шаблонизатор
 * @param {string} $name шаблон {string} $data данные для шаблона
 * @return {string} Итоговый HTML-код
 */
function include_template($name, $data) {
    $name = 'templates/' . $name;
    $result = '';

    if (!file_exists($name)) {
        return $result;
    }

    ob_start();
    extract($data);
    require $name;

    $result = ob_get_clean();

    return $result;
}
