{extends file="indexView.tpl"}

{block name=main}
<section class="login bg-light py-5">
    <div class="container">
        <form action="{$conf->action_root}login" method="post" class="loginForm">
        <div class="mb-3">
            <label for="id_login" class="form-label">Login: </label>
            <input type="text" class="form-control" id="id_login" name="login" value="{$form->login}">
        </div>
        <div class="mb-3">
            <label for="id_pass" class="form-label">Hasło: </label>
            <input type="password" class="form-control" id="id_pass" name="pass">
        </div>
        <button type="submit" value="zaloguj" class="btn btn-primary">Zaloguj</button>
        <a href="{$conf->action_root}register" class="btn btn-primary ms-5">Zarejestruj</a>
        </form>
    </div>
</section>
{/block}