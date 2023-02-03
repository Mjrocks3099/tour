<?php
function minify($content, $path = 'https://github.com/Mjrocks3099/tour') {
$output = preg_replace(
array(
'/ {2,}/',
'/<!--.?-->|\t|(?:\r?\n[ \t])+/s'
),
array(
' ',
''
),
$content
);
return $output;
}

//minify JavaScript
$url = "https://github.com/Mjrocks3099/tour/blob/main/js/script.js";
echo minify(file_get_contents($url));
//minify HTML
$url = "https://github.com/Mjrocks3099/tour/blob/main/Main.html";

echo minify(file_get_contents($url));
//minify CSS
$url = "https://github.com/Mjrocks3099/tour/blob/main/css/style.css";
echo minify(file_get_contents($url));

?>
