<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Kwitansi Simpanan</title>
    <style>
        body {
            font-family: sans-serif;
            font-size: 12px;
        }

        .header {
            text-align: center;
            margin-bottom: 20px;
        }

        .box {
            border: 1px solid #000;
            padding: 10px;
        }

        .right {
            text-align: right;
        }

        .bold {
            font-weight: bold;
        }
    </style>
</head>

<body>
    <button onclick="downloadPDF()" class="mt-4 px-4 py-2 bg-blue-500 text-white rounded">
        Download PDF
    </button>
    <div id="kwitansi" class="box">

        <div class="header">
            <h2>KOPERASI SIMPAN PINJAM</h2>
            <h4>Kwitansi Simpanan</h4>
        </div>
        <p><span class="bold">No Transaksi:</span> {{ $simpanan->id }}</p>
        <p><span class="bold">Nama Nasabah:</span> {{ $simpanan->nasabah->nama }}</p>
        <p><span class="bold">Kode Nasabah:</span> {{ $simpanan->nasabah->kode_nasabah }}</p>
        <p><span class="bold">Tanggal:</span> {{ $simpanan->created_at->format('d/m/Y H:i') }}</p>
        <p><span class="bold">Jumlah Simpanan:</span> Rp
            {{ number_format($simpanan->jumlah_simpanan, 0, ',', '.') }}</p>
        <p><span class="bold">Total Saldo:</span> Rp {{ number_format($simpanan->nasabah->saldo, 0, ',', '.') }}
        </p>
        <p><span class="bold">Status:</span> {{ ucfirst($simpanan->status) }}</p>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"></script>
    <script>
        function downloadPDF() {
            const element = document.getElementById('kwitansi');
            html2pdf().from(element).save('kwitansi.pdf');
        }
    </script>
</body>

</html>
