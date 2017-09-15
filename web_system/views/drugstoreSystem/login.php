<title>Login para Farmácias</title>
<form class="form-signin" method="post" action="<?='../views/gerenciadorView.php?selectPage='.($_SESSION['PageCodification'] -> getChave("drugstoreSystem/receita.php"))?>">
    <h2 class="form-signin-heading">Login</h2>
    <label for="inputEmail" class="sr-only">Inserir email</label>
    <input type="email" id="inputEmail" class="form-control" placeholder="Inserir email" required autofocus>
    <label for="inputPassword" class="sr-only">Senha</label>
    <input type="password" id="inputPassword" class="form-control" placeholder="Senha" required>
    <div class="checkbox">
        <label>
            <input type="checkbox" value="remember-me"> Lembrar
        </label>
    </div>
    <button class="btn btn-lg btn-primary btn-block"  type="submit">Entrar</button>
</form>