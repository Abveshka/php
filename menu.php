<?php
$menu = [
        'д' => "d",
        'ф' => "f",
        'г' => "g",
        'х' => "h",
        'р' => "r",
];

function translat_rus_to_eng($menu, $word){
    $str='';
    $len = mb_strlen($word, 'UTF-8');
    for ($i=0;$i<$len;$i++){
        $char = mb_substr($word, $i, 1, 'UTF-8');
        if (isset($menu[$char])) {
            $str .= $menu[$char];
        } else {
            $str .= $char;
        }
    }
    return $str;
}
echo translat_rus_to_eng($menu, "дфгхр_abs_абс");
?>


