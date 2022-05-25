{extends file="indexView.tpl"}

{block name=main}

<div class="container mt-5">
<form action="{$conf->action_url}personList" class="searchForm">
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
<div>
<a class="btn btn-primary" href="{$conf->action_root}personNew">+ Nowa osoba</a>
</div>	

<table id="tab_people" class="table">
<thead>
	<tr>
		<th>IMIE</th>
		<th>NAZWISKO</th>
		<th>NR TEL</th>
		<th>PESEL</th>
		<th>OPCJE</th>
		<th>KARNET</th>
	</tr>
</thead>
<tbody>
{foreach $klient as $p}
{strip}
	<tr>
		<td>{$p["imie"]}</td>
		<td>{$p["nazwisko"]}</td>
		<td>{$p["nr_tel"]}</td>
		<td>{$p["pesel"]}</td>
		<td>
			<a class="btn btn-warning" href="{$conf->action_url}personEdit/{$p['id_klienta']}">Edytuj</a>
			&nbsp;
			<a class="btn btn-danger" href="{$conf->action_url}personDelete/{$p['id_klienta']}">Usuń</a>
		</td>
	</tr>
{/strip}
{/foreach}
</tbody>
</table>
</div>
{/block}
