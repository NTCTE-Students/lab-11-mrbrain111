<?php

$card = "1234 5678 9012 3456";
$pattern = "/^(\d{4}\s?){4}$/";
$result = preg_match($pattern, $card);
echo 'Номер карты корректный: ' . ($result ? 'да' : 'нет') . '<br>';