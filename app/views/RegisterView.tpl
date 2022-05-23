{extends file="indexView.tpl"}

{block name=main}
<section class="login bg-light py-5">
    <div class="container">
        <form action="{$conf->action_root}register" method="post" class="loginForm">
        <div class="mb-3">
            <label for="id_login" class="form-label">Imie: </label>
            <input type="text" class="form-control" id="id_login" name="login" value="{$form->imie}">
        </div>
        <div class="mb-3">
            <label for="id_login" class="form-label">Nazwisko: </label>
            <input type="text" class="form-control" id="id_login" name="login" value="{$form->nazwisko}">
        </div>
        <div class="mb-3">
            <label for="id_login" class="form-label">E-mail: </label>
            <input type="text" class="form-control" id="id_login" name="login" value="{$form->email}">
        </div>
        <div class="mb-3">
            <label for="id_login" class="form-label">Nr. telefonu: </label>
            <input type="text" class="form-control" id="id_login" name="login" value="{$form->nrtel}">
        </div>
        <div class="mb-3">
            <label for="id_login" class="form-label">PESEL: </label>
            <input type="text" class="form-control" id="id_login" name="login" value="{$form->pesel}">
        </div>
        <div class="mb-3">
            <label for="id_pass" class="form-label">Hasło: </label>
            <input type="password" class="form-control" id="id_pass" name="pass">
        </div>
        <button type="submit" value="zarejestruj" class="btn btn-primary">Zarejestruj</button>
        </form>
    </div>
</section>
{/block}