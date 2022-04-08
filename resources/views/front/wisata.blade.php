@extends('front.template')

@section('main')
	<section>
		<div class="container">
			<nav class="breadcrumb" aria-label="breadcrumbs">
			  <ul>
			    <li><a href="/">Beranda</a></li>
			    <li><a href="#">Destinasi</a></li>
			    <li class="is-active"><a href="#" aria-current="page">Wisata</a></li>
			  </ul>
			</nav>
		</div>
		<figure class="wisata-slide slide-page">
			<img src="{{ asset('img/wisataDetail1.jpg') }}" alt="" width="100%">
			<img src="{{ asset('img/wisataDetail2.png') }}" alt="" width="100%">
		</figure>
	</section>

	<div class="container">
		<section id="dispar-wisata" class="mb-6 mt-5">
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
								    	<option>Pantai</option>
								    	<option>Hutan</option>
								    	<option>Hiburan</option>
							      	</select>
						    	</div>
						  	</div>
						</div>
      				</div>
				</div>
				<div class="column is-3 has-text-right">
					<div class="field has-addons">
					  <div class="control">
					    <input class="input" type="text" placeholder="Cari Objek Wisata">
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
				<a href="/wisataDetail" class="column is-3 item-wisata">
					<figure>
						<img src="{{ asset('img/wisata1.jpeg') }}" alt="" >
						<figcaption>
							<p class="has-text-weight-semibold has-text-grey-dark is-size-5">Bukit Bangkirai</p>
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
				<a href="/wisataDetail" class="column is-3 item-wisata">
					<figure>
						<img src="{{ asset('img/wisata2.jpg') }}" alt="" >
						<figcaption>
							<p class="has-text-weight-semibold has-text-grey-dark is-size-5">Danau Cermin</p>
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
				<a href="/wisataDetail" class="column is-3 item-wisata">
					<figure>
						<img src="{{ asset('img/wisata3.jpg') }}" alt="" >
						<figcaption>
							<p class="has-text-weight-semibold has-text-grey-dark is-size-5">Pantai Kilang</p>
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
				<a href="/wisataDetail" class="column is-3 item-wisata">
					<figure>
						<img src="{{ asset('img/wisata4.jpg') }}" alt="" >
						<figcaption>
							<p class="has-text-weight-semibold has-text-grey-dark is-size-5">Beruang Madu</p>
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