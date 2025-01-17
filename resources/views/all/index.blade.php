<h1>Daftar Semua Villa</h1>
    <div class="villa-list">
        @foreach ($vilaList as $vila)
            <div class="villa-card">
                <img src="{{ $vila->image }}" alt="{{ $vila->name }}">
                <h2>{{ $vila->name }}</h2>
                <p>{{ $vila->description }}</p>
            </div>
        @endforeach
    </div>