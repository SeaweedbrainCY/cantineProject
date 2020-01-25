<?php



$html = file_get_contents('http://www.h-poincare.fr/');
 
$searchfor = '"http://www.h-poincare.fr/wp-content/uploads/menu_4_2020.pdf"';




$savedPart = '';
$found = false;

$searchedFor = 'wp-content/uploads/menu';

$menuLink = 'wp-content/uploads/menu';

if (strpos($html, $searchfor) !== false) {
    echo 'true';
} else {
    echo 'false';
}
for ($i = 0; $i < strlen($str); $i++){
    echo $str[$i];
}
#$array = srt_split($html);
print('\nstart');
for ($i = 0; $i < strlen($html); $i++){
    $char = $html[$i];
    print($char);
    if ($found == true ){
        if ($char == '"'){
        break;
        } else {
            $menuLink += $char;
        }
    } else {
        $savedPart += $char;
        if( $char == " "){
            $savedPart = '';
        } else if ($savedPart == $searchedFor){
            $found = true;
        }
        
    }
    

}
echo 'end \n\n';
echo $menuLink;







?>








