<?php
?>
<title>Entre em contato conosco</title>
<form class="form-signin" method="post" action="<?='../views/gerenciadorView.php?selectPage='.($_SESSION['PageCodification'] -> getChave("index.php"))?>">
    <h2 class="form-signin-heading">Entre em contato</h2>
    <label for="inputEmail" class="sr-only">Inserir email</label>
    <input type="email" id="inputEmail" class="form-control" placeholder="Inserir email" required autofocus>
    <label for="reason" class="sr-only">Razão</label>
    <input type="text" id="reason" class="form-control" placeholder="Motivo do Contato" required>
    <label for="cpf" class="sr-only">CPF</label>
    <input type="text" id="cpf" class="form-control" placeholder="CPF" required>
    <button class="btn btn-lg btn-primary btn-block"  type="submit">Enviar Sugestão</button>
</form>