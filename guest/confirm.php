<?php
    top("Подтверждение пароля");
?>

    <h1>Подтверждение пароля</h1>
    
    <p><input type="text" placeholder="Код"></p>
    <p><input type="text" placeholder="Столица Беларуси?"></p>
    <p><button onclick="post_query('php-engine/gform','confirm','code.captcha')">Подтвердить</button></p>   
    
<?php
    bottom()
?>