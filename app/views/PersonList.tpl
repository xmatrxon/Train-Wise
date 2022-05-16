{extends file="indexView.tpl"}

{block name=main}

<div class="container mt-5">
<form action="{$conf->action_url}personList">
<legend>Opcje wyszukiwania</legend>
  <div class="mb-3">
    <label for="surnam" class="form-label">Nazwisko</label>
    <input type="text" class="form-control" name="sf_surname" id="surname" value="{$searchForm->surname}">
  </div>
  <button type="submit" class="btn btn-primary">Filtruj</button>
</form>	
</div>
{/block}

{block name=content}
<div class="container mt-5">
<div>
<a class="btn btn-primary" href="{$conf->action_root}personNew">+ Nowa osoba</a>
</div>	

<table id="tab_people" class="table">
<thead>
	<tr>
		<th>imię</th>
		<th>nazwisko</th>
		<th>data ur.</th>
		<th>opcje</th>
	</tr>
</thead>
<tbody>
{foreach $people as $p}
{strip}
	<tr>
		<td>{$p["name"]}</td>
		<td>{$p["surname"]}</td>
		<td>{$p["birthdate"]}</td>
		<td>
			<a class="btn btn-warning" href="{$conf->action_url}personEdit/{$p['idperson']}">Edytuj</a>
			&nbsp;
			<a class="btn btn-danger" href="{$conf->action_url}personDelete/{$p['idperson']}">Usuń</a>
		</td>
	</tr>
{/strip}
{/foreach}
</tbody>
</table>
</div>
{/block}
