<div>
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>Galeri</h2>
                </div>
                <div class="col-12">
                    <a href="{{ url('/') }}">Home</a>
                    <a href="{{ url('/portfolio') }}">Galeri</a>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio">
        <div class="container">
            <div class="section-header text-center">
                <p>Galeri Gambar Barber</p>
                <h2>Beberapa Gambar dari Galeri Barber Kami</h2>
            </div>
            
            {{-- Kita hapus filter karena galeri ini sederhana --}}
            
            <div class="row portfolio-container">
                @forelse ($barbers as $barber)
                    <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item">
                        <div class="portfolio-wrap">
                            <a href="{{ Storage::url($barber->photo) }}" data-lightbox="portfolio">
                                <img src="{{ Storage::url($barber->photo) }}" alt="{{ $barber->name }}">
                            </a>
                        </div>
                    </div>
                @empty
                    <div class="col-12 text-center">
                        <p>Galeri foto akan segera tersedia.</p>
                    </div>
                @endforelse
            </div>
        </div>
    </div>
    </div>