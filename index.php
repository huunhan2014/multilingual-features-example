<?php
require_once "class/tin.php";
$t = new tin;

if (isset($_GET['lang'])) $lang = $_GET['lang'];
else $lang = 'vi';
$langPath = "lang_$lang.php";
if (file_exists($langPath))
    include_once($langPath);
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' href='style.css'>
    <script src='main.js'></script>
    <link rel="shortcut icon" href="favicon2.png" type="image/png">
</head>

<body>
    <div id="container">
        <div id="lang">
            <a <?php if (isset($_GET['lang']) and $_GET['lang'] == 'vi') echo "class='active'"; ?> href="index.php?lang=vi"> <?= $language_vi ?> </a>
            <a <?php if (isset($_GET['lang']) and $_GET['lang'] == 'en') echo "class='active'"; ?> href="index.php?lang=en"> <?= $language_en ?> </a> &nbsp;
        </div>

        <div id="content">

            <div id="left"> <?php include_once("danhmuc.php"); ?> </div>

            <div id="right">
                <?php
                if (!isset($_GET['act'])) {
                    include("default.php");
                } else {
                    switch ($_GET['act']) {
                        case 'tintheoloai':
                            include("tintheoloai.php");
                            break;
                    }
                }
                ?>

            </div>
        </div>

        <div id="footer">

        </div>
    </div>
</body>

</html>