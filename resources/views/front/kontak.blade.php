@extends('front.template')

@section('main')
	
	<section id="dispar-kontak-map">
		<div class="container">
			<nav class="breadcrumb" aria-label="breadcrumbs">
			  <ul>
			    <li><a href="/">Beranda</a></li>
			    <li class="is-active"><a href="#" aria-current="page">Kontak</a></li>
			  </ul>
			</nav>
		</div>
		
	</section>			

	<div class="container mt-6">
		<section id="dispar-kontak">
			<div class="columns is-centered">
				<div class="column is-4">
					<p class="title is-size-4">Hubungi Kami</p>
					<p class="subtitle is-size-6 has-text-grey">Jangan sungkan untuk bertanya kepada kami terkait Web yang kami buat.</p>
					<div class="has-text-left mb-2">
						<span class="icon-text">
							<span class="icon has-text-primary">
								<i class="fas fa-phone"></i>
							</span>
							<span>Telp 0249-4904-2324</span>
						</span>
					</div>
					<div class="has-text-left mb-2">
						<span class="icon-text">
							<span class="icon has-text-primary">
								<i class="fas fa-globe"></i>
							</span>
							<span>telusur.com</span>
						</span>
					</div>
					<div class="has-text-left mb-2">
						<span class="icon-text">
							<span class="icon has-text-primary">
								<i class="fas fa-envelope"></i>
							</span>
							<span>cs@telusur.com</span>
						</span>
					</div>
				</div>
				<div class="column is-6">
					<p class="title is-size-4">Formulir Pertanyaan</p>
					<p class="subtitle is-size-6 has-text-grey">Kirimi Kami Pertanyaan, Kritik dan Saran</p>

					<form action="../function/tambah_user.php" method="POST" enctype="multipart/form-data">
						<div class="field">
							<div class="control">
								<input class="input" type="text" placeholder="Nama Anda" required name="nama">
							</div>
						</div>

						<div class="field-body mb-3">
							<div class="field">
								<div class="control is-expanded">
									<input class="input" type="text" placeholder="Nomor Telepon" required name="notelp">
								</div>
							</div>
							<div class="field">
								<div class="control is-expanded">
									<input class="input" type="email" placeholder="Alamat Email" required name="email">
								</div>
							</div>
						</div>

						<div class="field">
					    	<div class="control">
					        	<textarea class="textarea" placeholder="Isi Pesan"></textarea>
					    	</div>
					    </div>

					    <div class="field">
							<div class="control">
								<input class="input" type="text" placeholder="Masukkan Kode Disini" required name="kode">
							</div>
						</div>

						<div class="field">
							<p class="control">
								<button type="submit" class="button is-link">Kirim Pesan</button>
							</p>
						</div>
					</form>
				</div>
			</div>
		</section>		
	</div>
@endsection