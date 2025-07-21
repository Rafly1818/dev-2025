<div>
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>Layanan Kami</h2>
                </div>
                <div class="col-12">
                    <a href="{{ url('/') }}">Home</a>
                    <a href="{{ url('/services') }}">Layanan</a>
                </div>
            </div>
        </div>
    </div>
    <div class="service">
        <div class="container">
            <div class="section-header text-center">
                <p>Layanan Salon Kami</p>
                <h2>Layanan Salon & Barber Terbaik Untuk Anda</h2>
            </div>
            <div class="row">
                {{-- Mulai Looping Data dari Database --}}
                @foreach ($services as $service)
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item">
                            <div class="service-img">
                                {{-- Kita masih pakai gambar statis untuk contoh --}}
                                <img src="{{ asset('front/img/service-'. $loop->iteration .'.jpg') }}" alt="Image">
                            </div>
                            <h3>{{ $service->name }}</h3>
                            <p>
                                {{ $service->description }}
                            </p>
                            <a class="btn" href="#">Rp {{ number_format($service->price, 0, ',', '.') }}</a>
                        </div>
                    </div>
                @endforeach
                {{-- Akhir Looping --}}
            </div>
        </div>
    </div>
    </div>