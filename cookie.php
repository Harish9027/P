<!-- cookie are the small text file that contain the unconfidential info about the user(
sometime it contain confidential info).
-->

<!DOCTYPE html>
<?php
// for decalre setcookie need 7 parameters where frist 3 mendatory and 4 are optational
// 1. name of cookie
// 2. value of cookie
// 3. time of cookie(expiry time)(in no. of second)
// 4. path(default acces by every page)
// 5. domain(main domain, sub-domain).
// 6. http
// 7. secure

//generally says cookies are life time because-- suppose you visit a website on 9 o clock and the expiry time of cookie is one year. and you visit again just before the  expiry time then the time is add one year again. every time you reload the cookie page the time add.

setcookie("sunfeast",get_current_user(),time()+60);
// "get_current_user()" is use to get the name of the current user.
// "$_SERVER[REMOTE_ADDR]" is use to get the ip address of the current user.
?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if(isset($_COOKIE['sunfeast']))
    {
    // this $_COOKIE is use to display the value of cookie.
    echo "cookie generated<br>". $_COOKIE['sunfeast']; 
      

    // for delete the cookie 

    // if(isset($_COOKIE['sunfeast']))
    // {
    // echo "cookie generated<br>".$_COOKIE['sunfeast'];
    // setcookie("sunfeast","",time()-60);
    // echo $_COOKIE['sunfeast'];
   
     }
    else
    {
        echo "cookie not generated";
    }
    ?>
    
</body>
</html>

