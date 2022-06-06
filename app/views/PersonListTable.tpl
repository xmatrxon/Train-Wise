<table id="tab_people" class="table">
<thead>
	<tr>
		<th>IMIE</th>
		<th>NAZWISKO</th>
		<th>NR TEL</th>
		<th>PESEL</th>
		<th>KARNET</th>
        <th>AKTYWNY</th>
		<th>OPCJE</th>
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
		{if {$p["aktywny"]} == 1}
			<td>TAK</td>
		{else}
			<td>NIE</td>
		{/if}
		<td>
			<a class="btn btn-warning" href="{$conf->action_url}personEdit/{$p['id_klienta']}">Edytuj</a>
			&nbsp;
			{if {$p["aktywny"]} == 1}
			<a class="btn btn-danger" href="{$conf->action_url}personDeactive/{$p['id_klienta']}">Deaktywacja</a>
			{else}
			<a class="btn btn-success" href="{$conf->action_url}personActivate/{$p['id_klienta']}">Aktywacja</a>
			{/if}
		</td>
	</tr>
{/strip}
{/foreach}
</tbody>
</table>
<form action="{$conf->action_root}personList" method="post">
{if {$numberOfRecords} <= 5}
<a class="btn btn-secondary" href="#">Poprzednia</a>
<a class="btn btn-secondary" href="#">Następna</a>
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