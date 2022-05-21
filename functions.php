<?php
// 1. function
echo("'echo' is use to print and it will not return");
echo("<br>");
// 2. function
print("print is also use to print with return 1");
echo("<br>");
// 3. function
echo("print_f fun. is use to print format data:-" );
$a = 10;
printf("%d",$a);
echo("<br>");
// 4. function
echo("'str_word_count' is use to count word in string:-");
echo("<br>");
echo("hello world");
$str = "Hello World!:-";
echo str_word_count($str);
echo("<br>");
// 5. function
$harish1 = array ("my","name","is" ,"harish.");
echo implode(" ",$harish1);
echo("<br>");
// 6. function
$harish3 = "harish";
echo convert_uuencode($harish3);
echo("<br>");
//7.function
$harish4 = "&:&%R:7-H `";
echo convert_uudecode($harish4);
echo("<br>");
//8. funcation
$harish5 = "String  to upper case";
echo strtoupper($harish5);
echo("<br>");
//10. function
$harish6 = "STRING TO LOWER CASE";
echo strtolower($harish6);
echo("<br>");
//11. function
$harish7 = "trim function use";
echo trim($harish7,'use');
echo("<br>");
//12. function
$harish8 = "Rtrim is use to remove reight side wordR";
echo rtrim($harish8,'R');
echo("<br>");
//13. function
$harish8 = "Ltrim is use to remove reight side wordL";
echo ltrim($harish8,'L');
echo("<br>");
//14.function
$harish9 = "my name is harish";
echo strlen($harish9);
echo("<br>");
// 15. function
$harish10 = "my name is harish";
echo str_replace("harish","rahul",$harish10);
echo("<br>");
// 16. function
echo("i replace fun. is use to case insensitive error");
$harish11 = "my name is harish";
echo str_ireplace("Harish","rahul",$harish11);
echo("<br>");
// 17. function
$harish12 = "i pursuning btech form gla university";
echo strrev($harish12);
echo("<br>");
//18. function
echo("'ord'fun. is use to show unicode value of character:-");
$harish13 = "i";
echo ord($harish13);
echo("<br>");
//19. function
$harish14a = "harish";
$harish14b = "harish";
echo strcmp($harish14a,$harish14b);
echo("<br>");
//20.function
$harish14c = "Harish";
$harish14d = "Singh";
echo strcasecmp($harish14c,$harish14d);
echo("<br>");






?>