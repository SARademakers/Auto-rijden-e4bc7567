<?php
echo ("Hoe oud ben je?" . PHP_EOL);
$line = readline();
$a =  16.5;
if ($line < $a) {
	echo ("Helaas, je mag nog niet beginnen met rijlessen");
}
if ($line > $a) {
	echo ("Je mag beginnen met rijlessen!");
}
if ($line == $a) {
	echo ("Je mag beginnen met rijlessen!");
}
?>