<?php
    top("Вход");
?>

    <h1>Вход</h1>
    
    <p><input type="text" placeholder="E-mail" id="email"></p>
    <p><input type="password" placeholder="Password" id="password"></p>
    <p><input type="text" placeholder="Столица Беларуси?" id="captcha"></p>
    <p><button onclick="post_query('php-engine/gform','login','email.password.captcha')">Войти</button><button>Восстановить пароль</button></p>   
    
<?php
    bottom()
?>