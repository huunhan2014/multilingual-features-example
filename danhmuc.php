<ul id="menu" style="list-style-type: circle;">
    <?php
    if (isset($_GET['lang'])) $lang = $_GET['lang'];
    else $lang = 'vi';

    $kq = $t->ListLoaiTin();
    while ($row = $kq->fetch_assoc()) {
        ?>
        <li>
            <a <?php if (isset($_GET['id']) and $row['idLT'] == $_GET['id']) echo "class='active'"; ?> 
            href="index.php?act=tintheoloai&id=<?= $row['idLT'] ?>&lang=<?= $lang ?>">

                <?php
                    if ($lang == 'vi') echo $row['Ten'];
                    else echo $row['Ten_en'];
                    ?>
            </a>
        </li>
    <?php } ?>
</ul>