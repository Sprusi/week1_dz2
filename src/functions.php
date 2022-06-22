<?php

function task1(array $arr, bool $flag = true)
{
    $result = implode("\n", array_map(function (string $str) {
        return "<p>$str</p>";
    }, $arr));

    if ($flag) {
        return $result;
    }
    echo $result;
}

// implode — Объединяет элементы массива в строку




function task2(string $operator, ...$args)
{
    foreach ($args as $n => $arg) {
        if (!is_int($arg) && !is_float($arg)) {
            trigger_error('argument #' . $n .  ' is not integer or float');
            return "ERROR: wrong arg";
        }
    }

    switch ($operator) {
        case '+':
            return array_sum($args);
        case '-':
            return array_shift($args) - array_sum($args); // array_shift убирает из массива нули и извлекает первый элемент
        case '*':
            $result = 1;
            foreach ($args as $arg) {
                $result *= $arg;
            }
            return $result;
        case '/':
            $result = array_shift($args);
            foreach ($args as $n => $arg) {
                if ($arg == 0) { {
                        trigger_error('derive by zero on arg #' . ($n + 1));
                        return 'ERROR: derive by zero';
                    }
                }
                $result /= $arg;
            }
            return $result;


        default:
            echo "Неизвестный оператор";
    }
}

function task3(int $row, int $col)
{
    if ($row > 0 && $col > 0) {
        echo '<table border="1">';
        for ($i = 1; $i <= $row; $i++) {
            echo "<tr>";
            for ($j = 1; $j <= $col; $j++) {
                echo "<td>";
                if ($i == 0) {
                    echo $j . "\t";
                    continue;
                }
                if ($j == 0) {
                    echo $i . "\t";
                    continue;
                }
                echo $i * $j . "\t";
                echo "</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    } else {
        trigger_error('Arg <= 0');
        return 'input a positive number';
    }
}
function task4()
{
    date_default_timezone_set('Asia/Vladivostok');
    echo date('d-m-Y H:i', time());
    echo "<br>";
    echo strtotime('24.02.2016 00:00:00');
}
function task5()
{
    $str1 = "Карл у Клары украл Кораллы";
    echo str_replace('К', '', $str1);

    echo "<br>";

    $str2 = "Две бутылки лимонада";
    echo str_replace('Две', 'Три', $str2);
}
function task6()
{
    file_put_contents('test.txt', 'Hello again!');
}
function my_file_get_contents(string $filename)
{
    $fp = fopen($filename, 'r');
    if (!$fp) {
        return false;
    }

    $str = '';
    while (!feof($fp)) {
        $str .= fgets($fp, 1024);
    }
    echo $str;
}


function task7()
{
    echo "task7" . "<br>";
}
function task8()
{
    echo "task8" . "<br>";
}
function task9()
{
    echo "task9" . "<br>";
}
function task10()
{
    echo "task10" . "<br>";
}
