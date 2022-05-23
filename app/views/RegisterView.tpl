{extends file="indexView.tpl"}

{block name=main}
<section class="login bg-light py-5">
    <div class="container">
        <form action="{$conf->action_root}register" method="post" class="loginForm">
        <div class="mb-3">
            <label for="imie" class="form-label">Imie: </label>
            <input type="text" class="form-control" id="imie" name="imie" value="{$form->imie}">
        </div>
        <div class="mb-3">
            <label for="nazwisko" class="form-label">Nazwisko: </label>
            <input type="text" class="form-control" id="nazwisko" name="nazwisko" value="{$form->nazwisko}">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">E-mail: </label>
            <input type="text" class="form-control" id="email" name="email" value="{$form->email}">
        </div>
        <div class="mb-3">
            <label for="nrtel" class="form-label">Nr. telefonu: </label>
            <input type="text" class="form-control" id="nrtel" name="nrtel" value="{$form->nrtel}">
        </div>
        <div class="mb-3">
            <label for="pesel" class="form-label">PESEL: </label>
            <input type="text" class="form-control" id="pesel" name="pesel" value="{$form->pesel}">
        </div>
        <div class="mb-3">
            <label for="id_pass" class="form-label">Hasło: </label>
            <input type="password" class="form-control" id="id_pass" name="pass">
        </div>
        <button type="submit" value="zarejestruj" class="btn btn-primary">Zarejestruj</button>
         <input type="hidden" name="id" value="{$form->id}">
        </form>
    </div>
</section>
{/block}