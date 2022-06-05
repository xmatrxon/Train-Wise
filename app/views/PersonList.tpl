{extends file="indexView.tpl"}

{block name=main}

<div class="container mt-5">
<form id="search-form" class="searchForm" onsubmit="ajaxPostForm('search-form','{$conf->action_root}personListPart','table'); return false;">
<legend>Opcje wyszukiwania</legend>
  <div class="mb-3">
    <label for="nazwisko" class="form-label">Nazwisko</label>
    <input type="text" class="form-control" name="sf_nazwisko" id="nazwisko" value="{$searchForm->nazwisko}">
  </div>
  <button type="submit" class="btn btn-primary">Filtruj</button>
</form>	
</div>
{/block}

{block name=content}
<div class="container mt-5">
<div id="table">
{include file="PersonListTable.tpl"}
</div>
</div>
{/block}
