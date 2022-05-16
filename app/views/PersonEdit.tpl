{extends file="indexView.tpl"}

{block name=main}

<div class="container p-5">

<form action="{$conf->action_root}personSave" method="post">
<legend>Dane osoby</legend>
  <div class="mb-3">
    <label for="name" class="form-label">Imię: </label>
    <input type="text" class="form-control" id="name" name="name" value="{$form->name}">
  </div>
  <div class="mb-3">
    <label for="surname" class="form-label">Nazwisko: </label>
    <input type="text" class="form-control" id="surname" name="surname" value="{$form->surname}">
  </div>
  <div class="mb-3">
    <label for="birthdate" class="form-label">Data urodzenia: </label>
    <input type="text" class="form-control" id="birthdate" name="birthdate" value="{$form->birthdate}">
  </div>
  <button type="submit" class="btn btn-primary">Zapisz</button>
  <a class="btn btn-secondary" href="{$conf->action_root}personList">Powrót</a>
  <input type="hidden" name="id" value="{$form->id}">
</form>
</div>
{/block}
