<div>
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>Harga</h2>
                </div>
                <div class="col-12">
                    <a href="{{ url('/') }}">Home</a>
                    <a href="{{ url('/price') }}">Harga</a>
                </div>
            </div>
        </div>
    </div>
    <div class="price">
        <div class="container">
            <div class="section-header text-center">
                <p>Harga Terbaik Kami</p>
                <h2>Kami Memberikan Harga Terbaik di Kota</h2>
            </div>
            <div class="row">
                {{-- Mulai Looping Data Service dari Database --}}
                @forelse ($services as $service)
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="price-item">
                            <div class="price-img">
                                {{-- Kita pakai gambar statis dan membuatnya berulang --}}
                                <img src="{{ asset('front/img/price-' . (($loop->index % 12) + 1) . '.jpg') }}" alt="Image">
                            </div>
                            <div class="price-text">
                                <h2>{{ $service->name }}</h2>
                                <h3>Rp {{ number_format($service->price, 0, ',', '.') }}</h3>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-12 text-center">
                        <p>Daftar harga akan segera tersedia.</p>
                    </div>
                @endforelse
                {{-- Akhir Looping --}}
            </div>
        </div>
    </div>
    </div>