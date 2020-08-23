<?php
    top("Восстановление пароля");
?>

    <h1>Вход</h1>
    
    <p><input type="text" placeholder="E-mail"></p>
    <p><input type="text" placeholder="Столица Беларуси?"></p>
    <p><button onclick="post_query('php-engine/gform','recovery','email.captcha')">Восстановить</button></p>   
    
<?php
    bottom()
?>