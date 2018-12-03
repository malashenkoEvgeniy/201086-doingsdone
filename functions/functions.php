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

/**
 * Функция подсчитывает количества часов до даты в параметре
 * @param {string} строка с датой
 * @return {string} вывод даты вместе с количеством часов до ее наступления
 */

function get_timeover($date) {
    date_default_timezone_set('Europe/Kiev');
    if (!empty($date)) {
        $newdate = strtotime($date);
        $ts = ($newdate - time());
        return $date.'( осталось '. round($ts/3600, 1).' часа)';
    } else return '';
}

echo get_timeover($date);
