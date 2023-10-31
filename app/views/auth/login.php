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
        <input type="text" name="email" placeholder="Email">
        <input type="password" name="password" placeholder="Senha segura">
        <button type="submit" id="submit">ENVIAR FORMULARIO</button>
    </form>
</section>
<?php include_once __DIR__.('/../layouts/footer.php'); ?>