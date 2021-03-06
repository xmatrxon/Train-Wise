{extends file="indexView.tpl"}

{block name=main}

<div class="container mt-5">

<form action="{$conf->action_root}personSave" method="post" class="searchForm">
<legend>Dane osoby</legend>
  <div class="mb-3">
    <label for="imie" class="form-label">Imię: </label>
    <input type="text" class="form-control" id="imie" name="imie" value="{$form->imie}">
  </div>
  <div class="mb-3">
    <label for="nazwisko" class="form-label">Nazwisko: </label>
    <input type="text" class="form-control" id="nazwisko" name="nazwisko" value="{$form->nazwisko}">
  </div>
  <div class="mb-3">
    <label for="nrtel" class="form-label">Numer telefonu: </label>
    <input type="text" class="form-control" id="nrtel" name="nrtel" value="{$form->nrtel}">
  </div>
  <div class="mb-3">
    <label for="login" class="form-label">Login: </label>
    <input type="text" class="form-control" id="login" name="login" value="{$form->login}">
  </div>
  <div class="mb-3">
    <label for="pass" class="form-label">Hasło: </label>
    <input type="password" class="form-control" id="pass" name="pass" value="{$form->pass}">
  </div>
  <button type="submit" class="btn btn-primary">Zapisz</button>

{if $rola == "admin"}
<a class="btn btn-secondary" href="{$conf->action_root}personList">Powrót</a>
{else}
<a class="btn btn-secondary" href="{$conf->action_root}userInfo">Powrót</a>
{/if}
<input type="hidden" name="id" value="{$form->id}">
</form>
</div>
{/block}
