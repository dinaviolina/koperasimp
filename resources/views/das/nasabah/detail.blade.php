ini detail nasabah yang memiliki ID {{ $nasabah->id }} dan kode nasabah {{ $nasabah->kode_nasabah }}. Saldo
saat ini adalah {{ $nasabah->saldo }} dan pinjaman yang diambil adalah {{ $nasabah->pinjaman }}. Status nasabah ini
adalah {{ $nasabah->status }}.</p>
</div>

<div>
    back to nasabah <a href="{{ route('nasabah.index') }}" class="text-blue-500 hover:underline">here</a>.
</div>
