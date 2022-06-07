<?php

/**
 * Форматирует цену товара
 * @param number $price - изначальная цена
 * @return string - отформатированная цена
 */

function formats_price ($price) {
    $price = ceil($price);
    $price = number_format($price, 0,'',' ');
    return $price . ' ₽';
};

/**
 * Подсчитывает время до истечения лота
 * @param $date - указанная дата
 * @return string - подсчитанное время
*/

function get_time ($date) {
    $date_now = date_create("now");
    $date_over = date_create($date);
    $diff = date_diff($date_now, $date_over);
    $days_count = date_interval_format($diff, "%d %H %I");
    $arr = explode(" ", $days_count);

    $hours = $arr[0] * 24 + $arr[1];
    $minutes = intval($arr[2]);
    $hours = str_pad($hours, 2, "0", STR_PAD_LEFT);
    $minutes = str_pad($minutes, 2, "0", STR_PAD_LEFT);
    $res[] = $hours;
    $res[] = $minutes;

    return $res;
};
