<?php
?>
<title>Registre-se para armazenar seu histórico de informações</title>
<form class="form-signin" method="post" action="<?='../views/gerenciadorView.php?selectPage='.($_SESSION['PageCodification'] -> getChave("index.php"))?>">
    <h2 class="form-signin-heading">Cadastro</h2>
    <label for="inputEmail" class="sr-only">Inserir email</label>
    <input type="email" id="inputEmail" class="form-control" placeholder="Inserir email" required autofocus>
    <label for="inputPassword" class="sr-only">Senha</label>
    <input type="password" id="inputPassword" class="form-control" placeholder="Senha" required>
    <label for="confirmPassword" class="sr-only">Confirme Senha</label>
    <input type="password" id="confirmPassword" class="form-control" placeholder="Confirme sua senha" required>
    <label for="cpf" class="sr-only">CPF</label>
    <input type="text" id="cpf" class="form-control" placeholder="CPF" required>
    <button class="btn btn-lg btn-primary btn-block"  type="submit">Cadastrar</button>
</form>