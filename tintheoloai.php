<?php

if (isset($_GET['lang'])) $lang = $_GET['lang'];
else $lang = 'vi';
$id = $_GET['id'];
$kq = $t->TinTheoLoaiTin($id);
while ($row = $kq->fetch_assoc()) {
    if ($lang == 'vi') {
        $title = $row['TieuDe'];
        $tomtat = $row['TomTat'];
    } else {
        $title = $row['TieuDe_en'];
        $tomtat = $row['TomTat_en'];
    }
    ?>

    <div class="tin">
        <h1><a href="#"> <?= $title ?> </a></h1>
        <div class="tomtat"> <?= $tomtat ?> </div>
    </div>

<?php }
?>