@extends('front.template')

@section('main')
	<section>
		<div class="container">
			<nav class="breadcrumb" aria-label="breadcrumbs">
			  <ul>
			    <li><a href="/">Beranda</a></li>
			    <li><a href="#">Destinasi</a></li>
			    <li class="is-active"><a href="#" aria-current="page">Penginapan</a></li>
			  </ul>
			</nav>
		</div>
		<figure class="penginapan-slide slide-page">
			<img src="{{ asset('img/penginapanDetail2.jpg') }}" alt="" width="100%">
			<img src="{{ asset('img/penginapanDetail1.jpg') }}" alt="" width="100%">
		</figure>
	</section>

	<div class="container">
		<section id="dispar-penginapan" class="mb-6 mt-5">
			<form class="columns has-spaced-between mb-5">
				<div class="column is-4">
					<div class="field-body">
	      				<div class="field">
							<!-- <label>Provinsi</label> -->
						  	<div class="control">
						    	<div class="select is-fullwidth">
							      	<select>
								    	<option selected>Terbaru</option>
								    	<option>Terpopuler</option>
								    	<option>Terjauh</option>
								    	<option>Terdekat</option>
							      	</select>
						    	</div>
						  	</div>
						</div>
						<div class="field">
							<!-- <label>Kota</label> -->
						  	<div class="control">
						    	<div class="select is-fullwidth">
							      	<select>
								    	<option selected>Kategori</option>
								    	<option>Hotel</option>
								    	<option>Apartment</option>
							      	</select>
						    	</div>
						  	</div>
						</div>
      				</div>
				</div>
				<div class="column is-3 has-text-right">
					<div class="field has-addons">
					  <div class="control">
					    <input class="input" type="text" placeholder="Cari Penginapan">
					  </div>
					  <div class="control">
					    <a class="button is-link">
					      Cari
					    </a>
					  </div>
					</div>
				</div>
			</form>
			<div class="columns is-multiline">
				<a href="/penginapanDetail" class="column is-3 item-penginapan">
					<figure>
						<img src="{{ asset('img/penginapan1.jpg') }}" alt="" >
						<figcaption>
							<p class="has-text-weight-semibold has-text-grey-dark is-size-5">Grand Jatra</p>
							<div class="mb-2">
								<span class="icon is-small has-text-warning">
									<i class="fas fa-star checked"></i>
								</span>
								<span class="icon is-small has-text-warning">
									<i class="fas fa-star checked"></i>
								</span>
								<span class="icon is-small has-text-warning">
									<i class="fas fa-star checked"></i>
								</span>
								<span class="icon is-small has-text-warning">
									<i class="fas fa-star checked"></i>
								</span>
								<span class="icon is-small has-text-grey-light">
									<i class="fas fa-star"></i>
								</span>
								<span class="has-text-grey ml-1">
									 (31) 
								</span>
							</div>
							<p class="has-text-grey">
								<span class="icon is-small mr-1 has-text-link">
									<i class="fas fa-map-marker-alt"></i>
								</span>
								Jalan Indramayu
							</p>
							<p class="is-size-7 has-text-grey">
								3KM dari posisimu
							</p>
						</figcaption>
					</figure>
				</a>
				<a href="/penginapanDetail" class="column is-3 item-penginapan">
					<figure>
						<img src="{{ asset('img/penginapan2.jpg') }}" alt="" >
						<figcaption>
							<p class="has-text-weight-semibold has-text-grey-dark is-size-5">Golden Tulip Balikpapan</p>
							<div class="mb-2">
								<span class="icon is-small has-text-warning">
									<i class="fas fa-star checked"></i>
								</span>
								<span class="icon is-small has-text-warning">
									<i class="fas fa-star checked"></i>
								</span>
								<span class="icon is-small has-text-warning">
									<i class="fas fa-star checked"></i>
								</span>
								<span class="icon is-small has-text-warning">
									<i class="fas fa-star checked"></i>
								</span>
								<span class="icon is-small has-text-grey-light">
									<i class="fas fa-star"></i>
								</span>
								<span class="has-text-grey ml-1">
									 (21) 
								</span>
							</div>
							<p class="has-text-grey">
								<span class="icon is-small mr-1 has-text-link">
									<i class="fas fa-map-marker-alt"></i>
								</span>
								Jalan MT Haryono, No.98
							</p>
							<p class="is-size-7 has-text-grey">
								5KM dari posisimu
							</p>
						</figcaption>
					</figure>
				</a>
				<a href="/penginapanDetail" class="column is-3 item-penginapan">
					<figure>
						<img src="{{ asset('img/penginapan3.jpg') }}" alt="" >
						<figcaption>
							<p class="has-text-weight-semibold has-text-grey-dark is-size-5">Le Grandeur</p>
							<div class="mb-2">
								<span class="icon is-small has-text-warning">
									<i class="fas fa-star checked"></i>
								</span>
								<span class="icon is-small has-text-warning">
									<i class="fas fa-star checked"></i>
								</span>
								<span class="icon is-small has-text-warning">
									<i class="fas fa-star checked"></i>
								</span>
								<span class="icon is-small has-text-warning">
									<i class="fas fa-star checked"></i>
								</span>
								<span class="icon is-small has-text-grey-light">
									<i class="fas fa-star"></i>
								</span>
								<span class="has-text-grey ml-1">
									 (34) 
								</span>
							</div>
							<p class="has-text-grey">
								<span class="icon is-small mr-1 has-text-link">
									<i class="fas fa-map-marker-alt"></i>
								</span>
								Jalan Sakura, no.44
							</p>
							<p class="is-size-7 has-text-grey">
								1.2KM dari posisimu
							</p>
						</figcaption>
					</figure>
				</a>
				<a href="/penginapanDetail" class="column is-3 item-penginapan">
					<figure>
						<img src="{{ asset('img/penginapan4.jpg') }}" alt="" >
						<figcaption>
							<p class="has-text-weight-semibold has-text-grey-dark is-size-5">Grand Tiga Mustika</p>
							<div class="mb-2">
								<span class="icon is-small has-text-warning">
									<i class="fas fa-star checked"></i>
								</span>
								<span class="icon is-small has-text-warning">
									<i class="fas fa-star checked"></i>
								</span>
								<span class="icon is-small has-text-warning">
									<i class="fas fa-star checked"></i>
								</span>
								<span class="icon is-small has-text-warning">
									<i class="fas fa-star checked"></i>
								</span>
								<span class="icon is-small has-text-grey-light">
									<i class="fas fa-star"></i>
								</span>
								<span class="has-text-grey ml-1">
									 (53) 
								</span>
							</div>
							<p class="has-text-grey">
								<span class="icon is-small mr-1 has-text-link">
									<i class="fas fa-map-marker-alt"></i>
								</span>
								Jalan MT Haryono, No.22
							</p>
							<p class="is-size-7 has-text-grey">
								6KM dari posisimu
							</p>
						</figcaption>
					</figure>
				</a>
			</div>
			<div class="columns is-centered">
				<div class="column is-6">
					<nav class="pagination is-centered mt-6" role="navigation" aria-label="pagination">
					  <a class="pagination-previous">Previous</a>
					  <a class="pagination-next">Next page</a>
					  <ul class="pagination-list">
					    <li><a class="pagination-link" aria-label="Goto page 1">1</a></li>
					    <li><span class="pagination-ellipsis">&hellip;</span></li>
					    <li><a class="pagination-link" aria-label="Goto page 45">45</a></li>
					    <li><a class="pagination-link is-current" aria-label="Page 46" aria-current="page">46</a></li>
					    <li><a class="pagination-link" aria-label="Goto page 47">47</a></li>
					    <li><span class="pagination-ellipsis">&hellip;</span></li>
					    <li><a class="pagination-link" aria-label="Goto page 86">86</a></li>
					  </ul>
					</nav>
				</div>
			</div>
		</section>
	</div>

@endsection