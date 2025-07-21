<div>
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>Reservasi</h2>
                </div>
                <div class="col-12">
                    <a href="{{ url('/') }}">Home</a>
                    <a href="{{ url('/contact') }}">Reservasi</a>
                </div>
            </div>
        </div>
    </div>
    <div class="contact" style="margin-bottom: 90px;">
        <div class="container-fluid">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-4">
                         <div class="contact-info">
                            <h2>Info Reservasi</h2>
                            <h3><i class="fa fa-map-marker-alt"></i> 123 Street, New York, USA</h3>
                            <h3><i class="fa fa-envelope"></i> info@example.com</h3>
                            <h3><i class="fa fa-phone-alt"></i> +012 345 67890</h3>
                        </div>
                    </div>
                    <div class="col-md-8">
                        {{-- Memanggil komponen Livewire untuk form reservasi --}}
                        @livewire('reservation-form')
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>