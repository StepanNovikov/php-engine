<?php
    top("Регистрация");
?>

    <h1>Регистрация</h1>
    
    <p><input type="text" placeholder="E-mail"></p>
    <p><input type="password" placeholder="Password"></p>
    <p><input type="text" placeholder="Столица Беларуси?"></p>
    <p><button onclick="post_query('php-engine/gform','register','email.password.captcha')">Регистрация</button></p>   
    
<?php
    bottom()
?>  