<form wire:submit.prevent="save">
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="control-group">
        <input type="text" class="form-control" wire:model="name" placeholder="Nama Anda" required />
        @error('name') <span class="help-block text-danger">{{ $message }}</span> @enderror
    </div>
    <div class="control-group">
        <input type="email" class="form-control" wire:model="email" placeholder="Email Anda" required />
        @error('email') <span class="help-block text-danger">{{ $message }}</span> @enderror
    </div>
    <div class="control-group">
        <input type="tel" class="form-control" wire:model="phone" placeholder="Nomor Telepon" required />
        @error('phone') <span class="help-block text-danger">{{ $message }}</span> @enderror
    </div>
    <div class="control-group">
        <select class="form-control" wire:model="selectedService" required>
            <option value="">-- Pilih Layanan --</option>
            @foreach ($services as $service)
                <option value="{{ $service->id }}">{{ $service->name }} (Rp {{ number_format($service->price) }})</option>
            @endforeach
        </select>
    </div>
    <div class="control-group">
        <select class="form-control" wire:model="selectedBarber" required>
            <option value="">-- Pilih Barber --</option>
            @foreach ($barbers as $barber)
                <option value="{{ $barber->id }}">{{ $barber->name }}</option>
            @endforeach
        </select>
    </div>
    <div class="control-group">
        <input type="date" class="form-control" wire:model.live="selectedDate" required />
    </div>

    @if (!empty($timeSlots))
        <div class="control-group">
            <select class="form-control" wire:model="selectedTime" required>
                <option value="">-- Pilih Waktu --</option>
                @foreach ($timeSlots as $slot)
                    <option value="{{ $slot }}">{{ $slot }}</option>
                @endforeach
            </select>
        </div>
    @endif

    <div>
        <button class="btn" type="submit">Buat Reservasi</button>
    </div>
</form>