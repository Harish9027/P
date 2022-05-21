<?php
// file handling--> we crate text file or binary file. it contains large amount of data that is not confidential.
// extension of files---> .txt,.binary
// oprations of file handling.
// 1. fopen--> open file thorugh code. #imp
// 2. fwrite
// 1. fread
// 1. fclose

// $file=fopen("file.txt","w")

// mendatory frist 2 parameter but it works on 3 parameter 3 is optaional
// 1 param. file name.
// 2 param mode.(w,r,a)(w+,r+) a=append.

// w mode-->stand for write only,whenever a file open using w mode it will return file pointer info. default is begining of file.
//  w mode can reate file read mode can't.
//  if file present and we open with w mode it will earse the all content of file.
//  w+ --> GIVE YOU POWER READ AND WRITE FILE.,

// r mode--> we can open file only when it present,or file not present it will return error. pointer position is begining.
// r+ --> is has power to read and write.

//  a mode--> working is same as w but pointer position at last of file.
//  it preserve privious value of file and add new content to the file.
//  a+ --> carte new file, read old file, write in old file, add new content in old file. # sabse badiya

// x mode--> it create only new file  

// fwrite("file name","content")--> is use to write in file after open with w mode.
?>

<?php
// $file =fopen("myclassmy.txt",'w+');
// fwrite($file,"hello,\n welcome to file handling");
// fclose($file);

$file=fopen($file,"r");
// fread--> 2 param. frist-> file name, second-> no of character you want to read.
echo fread($file,filesize("$file"));
// eccho fgets($file);   
//  fgets(file name); it will print frist line through \n and we use next fgets for print 2nd line and whenever it find null character it will terminate.

// while loop for fgets
while(!feof($file))  // feof means end of file.
{
    echo fgets($file); // when it will true loop is terminated.
}

echo fgetc($file);
//  fgetc(file name); it will print frist line through \n and we use next fgets for print 2nd line and whenever it find null character it will terminate.

// while loop for fgetc
while(!feof($file))  // feof means end of file.
{
    if(fgetc($file)=='\n')
    {
        echo "<br>";
    }
    else{
    echo fgets($file); // when it will true loop is terminated.
    }
}

// readfile() -->
// filesize("filename");


// for delete the file

// unlink($file);

?>


