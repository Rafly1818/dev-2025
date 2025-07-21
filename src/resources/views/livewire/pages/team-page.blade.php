<div>
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>Barber Kami</h2>
                </div>
                <div class="col-12">
                    <a href="{{ url('/') }}">Home</a>
                    <a href="{{ url('/team') }}">Barber</a>
                </div>
            </div>
        </div>
    </div>
    <div class="team">
        <div class="container">
            <div class="section-header text-center">
                <p>Tim Barber Kami</p>
                <h2>Temui Para Ahli Potong Rambut Kami</h2>
            </div>
            <div class="row">
                @forelse ($barbers as $barber)
                    <div class="col-lg-3 col-md-6">
                        <div class="team-item">
                            <div class="team-img">
                                {{-- Jika ada foto di database, tampilkan. Jika tidak, pakai gambar default. --}}
                                @if ($barber->photo)
                                    <img src="{{ Storage::url($barber->photo) }}" alt="Team Image">
                                @else
                                    <img src="{{ asset('front/img/team-' . (($loop->index % 4) + 1) . '.jpg') }}" alt="Team Image">
                                @endif
                            </div>
                            <div class="team-text">
                                <h2>{{ $barber->name }}</h2>
                                <p>Expert Barber</p>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-12 text-center">
                        <p>Tim kami akan segera diperkenalkan.</p>
                    </div>
                @endforelse
            </div>
        </div>
    </div>
    </div>