<?php if(empty($_SESSION)): ?>
<div>
    <form action="/user/login.php" method="post">
        <div>
            <label>Логин</label>
            <div>
                <input type="text" name="login"/>
            </div>
        </div>
        <div>
            <label>Пароль</label>
            <div>
                <input type="password" name="password"/>
            </div>
        </div>
        <div>
            <input type="submit"/>
        </div>
    </form>
</div>
<?php else: ?>
<div>
    <a href="/user">Профиль</a>
    <a href="/user/logout.php">Выйти</a>
</div>
<?php endif; ?>
