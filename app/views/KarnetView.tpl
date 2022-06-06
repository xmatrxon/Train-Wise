{extends file="indexView.tpl"}

{block name=main}
{/block}

{block name=content}
			<section id="prices" class="prices mt-5 bg-light">
				<div class="container">
                <form action="{$conf->action_root}karnet" method="post" class="searchForm">
					<div class="price-wrap row text-center justify-content-center">
						<div class="col-md-6 col-xl-4">
							<div class="price-box">
								<h3>student</h3>
								<hr />
								<p><span>Ilość użytkowników:</span><i class="fas fa-person"></i></p>
								<p><span>Ilość wejść:</span> Raz dziennie</p>
								<p><span>Czas pobytu:</span> Godzina</p>
								<p><span>Wstęp do sauny:</span> Tak</p>
								<p class="price-tag">119zł</p>
								<button type="submit" name="student" class="btn btn-secondary" value="student">zamawiam</button>
							</div>
						</div>
						<div class="col-md-6 col-xl-4">
							<div class="price-box">
								<h3>normalny</h3>
								<hr />
								<p><span>Ilość użytkowników:</span><i class="fas fa-person"></i></i></p>
								<p><span>Ilość wejść:</span> Raz dziennie</p>
								<p><span>Czas pobytu:</span> Bez limitu</p>
								<p><span>Wstęp do sauny:</span> Tak</p>
								<p class="price-tag">159zł</p>
								<button type="submit" name="normalny" class="btn btn-success" value="normalny">zamawiam</button>
							</div>
						</div>
						<div class="col-md-6 col-xl-4">
							<div class="price-box">
								<h3>premium</h3>
								<hr />
								<p><span>Ilość użytkowników:</span><i class="fas fa-children"></i></i></p>
								<p><span>Ilość wejść:</span> Nieograniczona</p>
								<p><span>Czas pobytu:</span> Bez limitu</p>
								<p><span>Wstęp do sauny:</span> Tak</p>
								<p class="price-tag">299zł</p>
								<button type="submit" name="premium" class="btn btn-secondary" value="premium">zamawiam</button>
							</div>
						</div>
					</div>
					<div class="text-center">
						<p class="price-info">Skorzystaj z jednego z trzech karnetów, lub <a href="#contact">skontaktuj się</a> z nami i ustal warunki indywidualnie</p>
						<p class="text-muted">Karnet <strong>PREMIUM</strong> zawiera wszystkie opcje z poprzednich przedziałów cenowych w najlepszej konfiguracji</p>
					</div>
				</div>
                </form>
			</section>
{/block}