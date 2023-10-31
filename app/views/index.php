<?php include_once ('layouts/header.php'); ?>
    <section id="section-form">
        <form id="form">
            <input type="text" name="title" placeholder="Título">
            <button type="submit" id="submit">ADICIONAR</button>
        </form>
    </section>
    <table>
        <caption>Todolist</caption>
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">TÍTULO</th>
                <th scope="col" class="actions">AÇÕES</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>teste</td>
                <td class="actions">
                    <button>Excluir</button>
                </td>
            </tr>
        </tbody>
    </table>
<?php include_once ('layouts/footer.php'); ?>