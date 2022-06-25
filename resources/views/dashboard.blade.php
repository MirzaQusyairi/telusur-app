<x-app-layout>
    <div class="container">
        <section id="dispar-header" class="mt-5 mb-5">
            <figure id="wrap-header">
                <img src="{{ asset('img/header-homepage.jpg') }}" alt="">
                <figcaption>
                    <div class="columns is-centered item-header">
                        <div class="column is-narrow">
                            <div class="has-text-centered">
                                <p class="title is-size-1 has-text-light">Telusur</p>
                                <p class="subtitle is-size-4 has-text-light">Temukan Destinasi Wisata Favoritmu</p>
                            </div>
                            <br>
                            <form action="">
                                <div class="field has-addons has-addons-centered">
                                    <p class="control">
                                        <input class="input is-medium is-rounded" type="text"
                                            placeholder="Apa yang sedang kamu cari ?">
                                    </p>
                                    <p class="control">
                                        <span class="select is-medium">
                                            <select>
                                                <option selected disabled>Kategori</option>
                                                <option>Event</option>
                                                <option>Kuliner</option>
                                                <option>Wisata</option>
                                                <option>Penginapan</option>
                                            </select>
                                        </span>
                                    </p>
                                    <p class="control">
                                        <a class="button is-link is-medium is-rounded">
                                            Mulai Cari
                                        </a>
                                    </p>
                                </div>
                            </form>
                        </div>
                    </div>
                </figcaption>
            </figure>
            <div class="columns is-centered widget-header">
                <a href="/wisata" class="column is-1 has-background-light has-text-centered">
                    <span class="icon is-medium has-text-link">
                        <i class="fas fa-archway fa-lg"></i>
                    </span>
                    <p class="is-size-7 has-text-grey-dark has-text-weight-semibold">Wisata</p>
                </a>
                <a href="/kuliner" class="column is-1 has-background-light has-text-centered">
                    <span class="icon is-medium has-text-info">
                        <i class="fas fa-utensils fa-lg"></i>
                    </span>
                    <p class="is-size-7 has-text-grey-dark has-text-weight-semibold">Kuliner</p>
                </a>
                <a href="/penginapan" class="column is-1 has-background-light has-text-centered">
                    <span class="icon is-medium has-text-primary">
                        <i class="fas fa-bed fa-lg"></i>
                    </span>
                    <p class="is-size-7 has-text-grey-dark has-text-weight-semibold">Penginapan</p>
                </a>
            </div>
        </section>
        <div class="container">
            
        <section id="dispar-wisata" class="my-6 py-6">
                <div class="columns">
                    <div class="column">
                        <p class="title is-size-4">Wisata Unggulan</p>
                        <p class="subtitle is-size-5 has-text-grey">Jelajahi tempat wisata favoritmu</p>
                    </div>
                    <div class="column is-narrow" style="align-self: flex-end;">
                        <a href="/wisata" class="button is-link is-light">Lihat lebih banyak</a>
                    </div>
                </div>
                <div class="columns">
                    <!--foreach (wisata as wisata) -->
                    <a href="/wisataDetail" class="column is-3 item-wisata">
                        <figure>
                            <img src="{{ asset('img/wisata1.jpeg') }}" alt="">
                            <figcaption>
                                <p class="has-text-weight-semibold has-text-grey-dark is-size-5">
                                    Test</p>
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
                                    Alamat
                                </p>
                                <p class="is-size-7 has-text-grey">
                                    1KM dari posisimu
                                </p>
                            </figcaption>
                        </figure>
                    </a>
                    <!-- end foreach-->
                </div>
            </section>
            <section id="dispar-kuliner" class="my-6 py-6">
                <div class="columns">
                    <div class="column">
                        <p class="title is-size-4">Kuliner Populer</p>
                        <p class="subtitle is-size-5 has-text-grey">Nikmati jajanan kuliner kota balikpapan</p>
                    </div>
                    <div class="column is-narrow" style="align-self: flex-end;">
                        <a href="/kuliner" class="button is-link is-light">Lihat lebih banyak</a>
                    </div>
                </div>
                <div class="columns">
                    <a href="/kulinerDetail" class="column is-3 item-kuliner">
                        <figure>
                            <img src="{{ asset('img/kuliner1.jpg') }}" alt="">
                            <figcaption>
                                <p class="has-text-weight-semibold has-text-grey-dark is-size-5">Warung Makan Ibu Andin
                                </p>
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
                            <img src="{{ asset('img/kuliner2.jpg') }}" alt="">
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
                            <img src="{{ asset('img/kuliner3.jpg') }}" alt="">
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
                            <img src="{{ asset('img/kuliner4.jpg') }}" alt="">
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
            </section>

            

            <section id="dispar-penginapan" class="my-6 py-6">
                <div class="columns">
                    <div class="column">
                        <p class="title is-size-4">Penginapan Terdekat</p>
                        <p class="subtitle is-size-5 has-text-grey">Temukan tempat penginapan wilayah balikpapan</p>
                    </div>
                    <div class="column is-narrow" style="align-self: flex-end;">
                        <a href="/penginapan" class="button is-link is-light">Lihat lebih banyak</a>
                    </div>
                </div>
                <div class="columns">
                    <a href="/penginapanDetail" class="column is-3 item-penginapan">
                        <figure>
                            <img src="{{ asset('img/penginapan1.jpg') }}" alt="">
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
                            <img src="{{ asset('img/penginapan2.jpg') }}" alt="">
                            <figcaption>
                                <p class="has-text-weight-semibold has-text-grey-dark is-size-5">Golden Tulip Balikpapan
                                </p>
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
                            <img src="{{ asset('img/penginapan3.jpg') }}" alt="">
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
                            <img src="{{ asset('img/penginapan4.jpg') }}" alt="">
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
            </section>

            </section>
        </div>
        @extends('front.footer')
    </div>
</x-app-layout>
