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
<table id="tab_people" class="table">
<thead>
	<tr>
		<th>IMIE</th>
		<th>NAZWISKO</th>
		<th>NR TEL</th>
		<th>PESEL</th>
		<th>KARNET</th>
		<th>OPCJE</th>
	</tr>
</thead>
<tbody>
{foreach $klient as $p}
{strip}
	<tr>
	{if $p["aktywny"] == 1}
		<td>{$p["imie"]}</td>
		<td>{$p["nazwisko"]}</td>
		<td>{$p["nr_tel"]}</td>
		<td>{$p["pesel"]}</td>
		<td>
		{if $p["Nazwa_karnetu"] != ""}
		Nazwa: {$p["Nazwa_karnetu"]}
		</br>
		Od: {$p["Data_rozpoczecia"]}
		</br>
		Do: {$p["Data_zakonczenia"]}
		{else}
		<p>Brak karnetu</p>	
		{/if}
		</td>
		<td>
			<a class="btn btn-warning" href="{$conf->action_url}personEdit/{$p['id_klienta']}">Edytuj</a>
			&nbsp;
			<a class="btn btn-danger" href="{$conf->action_url}personDelete/{$p['id_klienta']}">Deaktywacja</a>
		</td>
	{/if}
	</tr>
{/strip}
{/foreach}
</tbody>
</table>
<form action="{$conf->action_root}personList" method="post">
{if {$page} == '' && {$operator} == 1 || {$page} == 0 && {$operator} == 1}
<a class="btn btn-secondary" href="">Poprzednia</a>
<a class="btn btn-secondary" href="">Następna</a>
{else if {$page} == '' || {$page} == 0}
<a class="btn btn-secondary" href="">Poprzednia</a>
<a class="btn btn-success" href="{$conf->action_url}personList?page={$page+1}">Następna</a>
{else if {$lastPage-1} == {$page}}
<a class="btn btn-success" href="{$conf->action_url}personList?page={$page-1}">Poprzednia</a>
<a class="btn btn-secondary" href="">Następna</a>
{else}
<a class="btn btn-success" href="{$conf->action_url}personList?page={$page-1}">Poprzednia</a>
<a class="btn btn-success" href="{$conf->action_url}personList?page={$page+1}">Następna</a>
{/if}
</form>
</div>
{/block}
