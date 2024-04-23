<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo "Welcome to my website!"; ?></title>
</head>
<body>
<!-- HTML Comment -->
<?php if(True): ?>
Hello!<br>
<?php else: ?>
False<br>

<?php endif; ?>

<?php
if (3 < 2 or 1 > 0) {
    echo "True\n<br>";
    echo "Line2\n<br>";
    if(True)
        echo "True2\n<br>";
} elseif (3 != 4) {
    echo "3 != 4\n<br>";
}

$i = 4;
switch ($i){
    case(0):
        echo "$i\n<br>";
        break;
    case(1):
        echo "$i\n<br>";
        break;
    case(2):
        echo "$i\n<br>";
    default:
        echo "default\n<br>";
}

$i = 1;
while($i <= 5){
    echo $i++. "\n";
}
echo "<br>\n";

$i = 0;
do {
    echo ++$i. " ";
}while($i <= 5);
echo "\n<br>";

for ($i = 1; $i <= 5; $i++){
    if ($i == 3)
        continue;
    echo $i . " ";
}
echo "\n<br>";




$var1 = 1;
$var2 = 'Text';
$var3 = 1.5;
$Var3 = 2.5;
echo '$var1 = ', "$var1<br>\n";
echo "\$var1 = $var1<br>\n";


$a = 1;
$a += 1;
$b = 1 + $a++;


echo $a, "<br>\n";
echo $b, "<br>\n";

$name = 'somsak';
$surname = 'rakthai';
$name .= " ";
$name .= $surname;
echo $name . "<br>\n";


$a5['fruit']['red'] = 'apple';
$a5['fruit']['yellow'] = 'banana';
$a5['flower']['red'] = 'rose';
$a5['flower']['yellow'] = 'sunflower';

echo $a5['fruit']['red'], "<br>\n";

echo '<pre>';
var_dump($a5);
print_r($a5);
echo '<pre>';


$a4 = [
    'id' => '6410615121',
    'name' => 'Suttha',
    'surname' => 'Jongjaroen'
];
echo '<pre>';
var_dump($a4);
print_r($a4);
echo '<pre>';


echo $a4['id'], ' ', $a4['name'], ' ', $a4['surname'], "<br>\n";

$a3 = [1, 2, 3];
echo "$a3[0], $a3[1], $a3[2]<br>\n";

$a2[] = 1;
$a2[] = 2;
echo $a2[0] + $a2[1], "<br>\n";

$a1 = array("red", "green", "blue");
$a1[3] = "yellow";
$a1[] = "black";

echo "$a1[0], $a1[1], $a1[2], $a1[3], $a1[4]<br>\n";


// comment1
# comment2
/* comment3
*/
echo "<br>This is my first php script.<br>\n";
echo "Hello World";
?>
</body>
</html>