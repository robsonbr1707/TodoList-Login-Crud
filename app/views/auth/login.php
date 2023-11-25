<?php include_once __DIR__.('/../layouts/header.php'); ?>
<section id="section-form">
    <?php if(isset($errors)): ?>
        <ul>
        <?php foreach($errors as $erro): ?>
            <li><?= $erro ?></li>
        <?php endforeach; ?>
        </ul>
    <?php endif; ?> 
    <h1>LOGIN</h1>
    <form action="/meus-projetos/todolist-login-crud/login" method="POST">
        <input type="text" name="email" <?php if(isset($old['email'])): ?> value="<?= $old['email']; ?>" <?php endif ?> placeholder="Email">
        <input type="password" name="password" placeholder="Senha segura">
        <div id="auth-link"><a href="register" id="auth-link">Não sou cadastrado!</a></div>
        <button type="submit" id="submit">ENVIAR FORMULARIO</button>
    </form>
</section>
<?php include_once __DIR__.('/../layouts/footer.php'); ?>