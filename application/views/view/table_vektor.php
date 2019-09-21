
<table id="listAlternatif" class="table table-bordered table-bordered">
    <thead>
    <td>Kode Uji</td>
    <td>Nama</td>
    <td>Vektor S</td>
    <td>Jarak Perhitungan</td>
    <td>Ranking Hasil Terbesar</td>
</thead>
<tbody>
    <?php
    $no = 1;
    foreach ($vektor as $row) {
        echo "<tr><td>" . $row['kode_uji'] . "</td>";
        echo "<td>" . $row['nama_lengkap'] . "</td>";
        echo "<td>" . $row['vektor_s'] . "</td>";
        echo "<td>" . $row['vektor_v'] . "</td>";
        echo "<td>" . $no . "</td></tr>";
        $no++;
    }
    ?>
</tbody>
</table>