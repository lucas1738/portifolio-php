<?php
setcookie('usuario', 'Goku', (time()+3600) );
setcookie('lang', 'português');
setcookie('login', 'false', (time()+ (24 * 3600) ));
echo $_COOKIE['usuario'];
echo $_COOKIE['lang'];
echo $_COOKIE['login'];
print_r($_COOKIE);
// corpo do script
?>