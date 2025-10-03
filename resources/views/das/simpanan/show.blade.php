Kop

No Anggota:
Nama:

Tanggal | Masuk | Keluar | Saldo (Rp)
{{ $simpanan->tanggal }} | {{ $simpanan->masuk ? number_format($simpanan->masuk, 2, ',', '.') : '-' }} |
{{ $simpanan->keluar ? number_format($simpanan->keluar, 2, ',', '.') : '-' }} |
{{ number_format($simpanan->saldo, 2, ',', '.') }}
}
