{extends file="indexView.tpl"}

{block name=main}
<div class="container mt-5 mb-5">
<table id="tab_people" class="table searchForm">
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
		<a href="{$conf->action_root}karnet" class="nav-link link login-btn">Kup karnet</a>		
		{/if}
		</td>
		<td>
			<a class="btn btn-warning" href="{$conf->action_url}personEdit/{$p['id_klienta']}">Edytuj</a>
			&nbsp;
		</td>
	{/if}
	</tr>
{/strip}
{/foreach}
</tbody>
</table>
{if {$rola} == 'admin'}
	<a class="btn btn-success" href="{$conf->action_url}personList">Lista klientów</a>
{/if}
</div>
{/block}

{block name=content}

{/block}