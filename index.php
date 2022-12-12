<pre>
    <?php
    // АЛЕКСУШИНА
    // 1.	Создайте массив arrRange и заполните его числами в промежутке [-50; 50] с шагом=8.
    // Перемешайте элементы этого массива

    // создаем
    $arr = range(-50, 50, 8);
    print_r($arr);

    // перемешиваем
    shuffle($arr);
    echo ("<br>");
    print_r($arr);

    //     2.	Выведите элементы этого массива в строку через 
    // « ** ».
    $res = implode("**", $arr);
    echo ($res . "<br>");

    // 3.	Удалите четные элементы этого массива, определите количество оставшихся
    // $arr = array_filter($arr, function($item){
    //     if($item%2 == 0)
    //     return $item;
    // });
    // array_splice($arr, function($item){
    //     if($item % 2 == 0)
    //     re
    // };

    // 4.	Замените все отрицательные значения положительными


    // 5.	Создайте новый массив arrRandom и заполните его на 20 элементов случайными числами в промежутке 
    // [-5; 10].
    for($i = 0; $i <= 20; $i++){
    $arrRandom = range(-5, 10);
    }
    print_r($arrRandom);

    // 6.	Определите количество значений в массиве arrRandom (количество повторений) 
    $count = array_count_values($arrRandom);
    print_r($count);

    // 7.	Определите сумму элементов массива arrRandom
    echo (array_sum($arrRandom) . "<br>");

    // 8.	Определите произведение элементов массива arrange, кратных 3

    $arr54 = array_filter($arrRandom, function($item){
        if($item%3 == 0){
            $pr = 0;
           $pr *= $item; 
           return $pr;
        }
    });
    print_r($arr54);
    
    //9.	Объедините массивы arrRange и arrRandom двумя способами
    $arr3 = array_merge($arr, $arrRandom);
    // $arr3 = [...$arr1, ...$arr2];

    // 10.	В массиве arrRandom удалите 2, 3 и 4 элементы
    array_splice($arr, 2, 3);

    // 11.	В массиве arrRandom определите количество элементов, не превышающих его среднее значение

    // 12.	Добавьте в конец массива arrRandom элемент=1000 (2 способа)
    array_push($arr, 1000);
    // 14 формирование массива
    // 1
    $arr4 = [
        "apple" => "Черешня",
        "grape" => "Виноград",
        "strawberry" => "Черешня",
        "pear" => "Груша",
    ];
    // 2
    // 15. Выполните сортировку элементов массива по номеру дома в порядке возрастания.
    $arr = [
        [
            "street" => "Гагарина",
            "house" => 7,
            "flat" => 303,
        ],
        [
            "street" => "Елькина",
            "house" => 12,
            "flat" => 12,
        ],
        [
            "street" => "Доватора",
            "house" => 113,
            "flat" => 24,
        ]
    ];
    uasort($arr, function ($a, $b) {
        if ($a['house'] < $b['house']) return -1;
        if ($a['house'] == $b['house']) return 0;
        if ($a['house'] > $b['house']) return 1;
    });
    print_r($arr);
    ?>
</pre>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table border="1">
        <tr>
            <td>Улица</td>
            <td>Дом</td>
        </tr>
        <?php
        foreach ($arr as $item) : ?>
            <tr>
                <th><?= $item["street"] ?></th>
                <th><?= $item["house"] ?></th>
            </tr>
        <?php endforeach ?>
    </table>
</body>

</html>