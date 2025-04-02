<?php

$html = '<div class="textiki"><p class="text">текст</p><p class="text2">текст два</p></div>';
$pattern = "/<(\w+)(\s+[^>]*)?>/";
preg_match_all($pattern, $html, $matches);
echo 'Найденные теги:<br><br>';
foreach ($matches[0] as $tag) {
    echo htmlspecialchars($tag) . '<br>';
}