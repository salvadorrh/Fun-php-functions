<html>
<?php
    $greeting = 'Hello world!';
    $lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'],0,2);
    if ($lang == 'es') {$greeting = 'Hola mundo!';}
    echo "$greeting</br>"
?>
</html>
