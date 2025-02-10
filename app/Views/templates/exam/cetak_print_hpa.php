<script>
    function cetakPrintHpa() {
        var detailPrintHpa = document.getElementById('print_hpa') ? document.getElementById('print_hpa').value : '';
        var printWindow = window.open('', '', 'height=500,width=900');
        printWindow.document.write(`
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Laporan Radiologi</title>
    <style>
        body {
            width: 346px;
            font-size: 24px;
        }
        table, tr, td {
            border: none;
            margin: 15px;
            font-size: 22px;
        }
        td {
            height: 10px;
            padding: 0;
        }
        .bordered_table, .bordered_table tr, .bordered_table td {
            border: none;
            border-collapse: collapse;
        }
        @media print {
            .header, .hide { visibility: hidden; }
        }
        .break { page-break-before: always; }
    </style>
</head>
<body>
    <table width="900" onload="window.print();">
        <tr>
            <td align="center" nowrap style="font-size: 24px;"><b>RSUD DR. M. SOEWANDHIE</b><br/>
                Jl. Tambakrejo No. 45 - 47, KOTA SURABAYA
            </td>
        </tr>
        <tr>
            <td>
                <table width="500">
                    <tr><td width="100" nowrap>No RM</td><td>:</td><td nowrap>&nbsp;&nbsp;<?= esc($hpa['norm_pasien'] ?? '') ?></td></tr>
                    <tr><td nowrap>No Register</td><td>:</td><td nowrap>&nbsp;&nbsp;<?= esc($hpa['kode_hpa'] ?? '') ?></td></tr>
                    <tr><td nowrap>Nama</td><td>:</td><td>&nbsp; <?= esc($hpa['nama_pasien'] ?? '') ?></td></tr>
                    <tr><td>Alamat</td><td>:</td><td>&nbsp; <?= esc($hpa['alamat_pasien'] ?? '') ?>&nbsp;</td></tr>
                    <tr><td nowrap>Jenis & Tgl Lahir</td><td>:</td><td nowrap>&nbsp; <?= esc($hpa['jenis_kelamin_pasien'] ?? '') ?> / <?= esc($hpa['tanggal_lahir_pasien'] ?? '') ?></td></tr>
                    <tr><td nowrap>Permintaan</td><td>:</td><td nowrap>&nbsp; <?= esc($hpa['tindakan_spesimen'] ?? '') ?></td></tr>
                    <tr><td nowrap>Unit Asal</td><td>:</td><td nowrap>&nbsp; <?= esc($hpa['unit_asal'] ?? '') ?></td></tr>
                    <tr><td nowrap>Dokter Pengirim</td><td>:</td><td nowrap>&nbsp; <?= esc($hpa['dokter_pengirim'] ?? '') ?></td></tr>
                </table>
            </td>
            <td>
                <table width="500">
                    <tr>
                        <td align="center" width="500" nowrap colspan="3"><h3>UNIT PATOLOGI ANATOMI</h3></td>
                    </tr>
                    <tr><td align="center" width="500" colspan="3">&nbsp;</td></tr>
                    <tr><td nowrap>Tanggal Terima</td><td>:</td><td>&nbsp; <?= isset($penerimaan['mulai_penerimaan']) ? date('d-m-Y H:i:s', strtotime($penerimaan['mulai_penerimaan'])) : '' ?></td></tr>
                    <tr><td nowrap>Tanggal Hasil</td><td>:</td><td>&nbsp; <?= isset($pembacaan['selesai_pembacaan']) ? date('d-m-Y H:i:s', strtotime($pembacaan['selesai_pembacaan'])) : '' ?></td></tr>
                </table>
            </td>
        </tr>
        <tr>
            <td align="center" colspan="2">&nbsp;<b>HASIL PEMERIKSAAN</b></td>
        </tr>
        <tr height="500">
            <td colspan="2" height="400" valign="top">
                ${detailPrintHpa}
            </td>
        </tr>
        <tr>
            <td width="700">&nbsp;</td>
            <td align="center">
                Terimakasih,
                <p><br/><br/></p>
                dr. Ayu Tyasmara Pratiwi, Sp.PA
            </td>
        </tr>
    </table>
</body>
</html>
        `);
        printWindow.document.close();
        printWindow.print();
    }
</script>