<?php

function task1($arr, $bool = false)
{
    if ($bool) {
        foreach ($arr as $key) {
            return $key;
        }
    } else {
        foreach ($arr as $key) {
            echo "<p>$key</p>";
        }
    }
}

function task2($operations, ...$args)
{
    if ($operations == '+') {
        return array_sum($args);
    } elseif ($operations == '-') {
        return array_shift($args) - array_sum($args);
    } elseif ($operations == '*') {
        $res = 1;
        foreach ($args as $key) {
            $res *= $key;
        }
        return $res;
    } elseif ($operations == '/') {
        $res = array_shift($args);
        foreach ($args as $key) {
            if ($key == 0) {
                return "Ошибка, деление на 0";
            } else {
                $res /= $key;
            }
        }
        return $res;
    } else {
        return "Ошибка, неизвестное действие";
    }
}

function task3(int $a, int $b)
{
    if ($a < 0 and $b < 0) {
        return false;
    }
    echo "<table>";

    $res = 0;
    for ($i = 1; $i <= $a; $i++) {
        echo "<tr>";
        for ($j = 1; $j <= $b; $j++) {
            $res = $i * $j;
            echo "<td>$res</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
}

function task4()
{
    date_default_timezone_set("Europe/Moscow");
    return date('d.m.Y H:i');
}

function task5($date)
{
    return strtotime($date);
}

function task6($str)
{
    return str_replace("К", "", $str);
}

function task7($str)
{
    return str_replace("Две", "Три", $str);
}

function task8($text, $str)
{
    file_put_contents($text, $str);
}

function task9($file)
{
    return file_get_contents($file);
}