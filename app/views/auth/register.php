<?php include_once __DIR__.('/../layouts/header.php'); ?>
<section id="section-form">
    <?php if(isset($errors)): ?>
        <ul>
        <?php foreach($errors as $erro): ?>
            <li><?= $erro ?></li>
        <?php endforeach; ?>
        </ul>
    <?php endif; ?> 
    <h1>CADASTRA-SE</h1>
    <form action="/meus-projetos/todolist-login-crud/register" method="POST">
        <input type="text" name="username" <?php if(isset($old['username'])): ?> value="<?= $old['username'] ?>" <?php endif; ?> placeholder="Primeiro nome">
        <input type="text" name="email" <?php if(isset($old['email'])): ?> value="<?= $old['email'] ?>" <?php endif; ?> placeholder="Email">
        <input type="password" name="password" placeholder="Senha segura">
        <input type="password" name="confirm_password" placeholder="Confirmar senha">
        <div id="auth-link"><a href="login">Já tenho uma conta</a></div>
        <button type="submit" id="submit">ENVIAR FORMULARIO</button>
    </form>
</section>
<?php include_once __DIR__.('/../layouts/footer.php'); ?>