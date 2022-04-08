@extends('front.template')

@section('main')
	<section>
		<div class="container">
			<nav class="breadcrumb" aria-label="breadcrumbs">
			  <ul>
			    <li><a href="/">Beranda</a></li>
			    <li><a href="#">Destinasi</a></li>
			    <li class="is-active"><a href="#" aria-current="page">Kuliner</a></li>
			  </ul>
			</nav>
		</div>
		<figure class="kuliner-slide slide-page">
			<img src="{{ asset('img/kulinerDetail2.jpg') }}" alt="" width="100%">
			<img src="{{ asset('img/kulinerDetail1.jpg') }}" alt="" width="100%">
		</figure>
	</section>

	<div class="container">
		<section id="dispar-kuliner" class="mb-6 mt-5">
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
								    	<option>Semua</option>
								    	<option>Makanan</option>
								    	<option>Minuman</option>
							      	</select>
						    	</div>
						  	</div>
						</div>
      				</div>
				</div>
				<div class="column is-3 has-text-right">
					<div class="field has-addons">
					  <div class="control">
					    <input class="input" type="text" placeholder="Cari kuliner">
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
				<a href="/kulinerDetail" class="column is-3 item-kuliner">
					<figure>
						<img src="{{ asset('img/kuliner1.jpg') }}" alt="" >
						<figcaption>
							<p class="has-text-weight-semibold has-text-grey-dark is-size-5">Warung Makan Ibu Andin</p>
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
									 (51) 
								</span>
							</div>
							<p class="has-text-grey">
								<span class="icon is-small mr-1 has-text-link">
									<i class="fas fa-map-marker-alt"></i>
								</span>
								Jalan MT Haryono, No.42
							</p>
							<p class="is-size-7 has-text-grey">
								1KM dari posisimu
							</p>
						</figcaption>
					</figure>
				</a>
				<a href="/kulinerDetail" class="column is-3 item-kuliner">
					<figure>
						<img src="{{ asset('img/kuliner2.jpg') }}" alt="" >
						<figcaption>
							<p class="has-text-weight-semibold has-text-grey-dark is-size-5">Soto Lamongan Cak</p>
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
									 (42) 
								</span>
							</div>
							<p class="has-text-grey">
								<span class="icon is-small mr-1 has-text-link">
									<i class="fas fa-map-marker-alt"></i>
								</span>
								Jalan Imam Bondjol, No.34
							</p>
							<p class="is-size-7 has-text-grey">
								3KM dari posisimu
							</p>
						</figcaption>
					</figure>
				</a>
				<a href="/kulinerDetail" class="column is-3 item-kuliner">
					<figure>
						<img src="{{ asset('img/kuliner3.jpg') }}" alt="" >
						<figcaption>
							<p class="has-text-weight-semibold has-text-grey-dark is-size-5">Rumah makan Torani</p>
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
									 (38) 
								</span>
							</div>
							<p class="has-text-grey">
								<span class="icon is-small mr-1 has-text-link">
									<i class="fas fa-map-marker-alt"></i>
								</span>
								Jalan Sei Wain, No.27
							</p>
							<p class="is-size-7 has-text-grey">
								0.3KM dari posisimu
							</p>
						</figcaption>
					</figure>
				</a>
				<a href="/kulinerDetail" class="column is-3 item-kuliner">
					<figure>
						<img src="{{ asset('img/kuliner4.jpg') }}" alt="" >
						<figcaption>
							<p class="has-text-weight-semibold has-text-grey-dark is-size-5">Warung Padang Upik</p>
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
									 (35) 
								</span>
							</div>
							<p class="has-text-grey">
								<span class="icon is-small mr-1 has-text-link">
									<i class="fas fa-map-marker-alt"></i>
								</span>
								Jalan MT Haryono, No.21
							</p>
							<p class="is-size-7 has-text-grey">
								7KM dari posisimu
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