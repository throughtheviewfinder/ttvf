<?php

function readConfFile($path)
{
    if(!file_exists($path))
        throw new Exception('ERROR reading config file! ' . $path);

    $fc = file_get_contents($path);
    $lines = explode("\n", $fc);

    if(count($lines) === 0)
        throw new Exception('ERROR! empty conf file!' . $path);

    $r = array();
    foreach($lines as $line)
    {
        if (!empty($line))
        {
            $r[] = str_getcsv($line);
        }
    }

    return $r;
}

const NUM_IMAGES = 5;
$images = readConfFile('./content/slideshow.csv');
shuffle($images);
$images = array_slice($images, 0, NUM_IMAGES);

$slideShowCSS = '';
for ($i = 1;$i < NUM_IMAGES + 1;$i++) {
    $slideShowCSS .= '.gallery-image-' . $i . ' { background-image: url("./images/slideshow/' . $images[$i - 1][0] . '"); }' . "\n";
}

$categories = readConfFile('./content/tiles.csv');

?>
<html>
<head>
    <title>Through the Viewfinder</title>

    <link rel="stylesheet" href="styles.css"/>
    <link rel="stylesheet" href="gallery.css"/>
</head>

<body>
    <div class="header">
        <div class="logo">
            LL
        </div>

        <div class="navigation">
            <a href="contact.html">Contact</a>
            <a href="about.html">About</a>
        </div>

    </div>

    <style type="text/css"><?php print $slideShowCSS ?></style>
    <div class="gallery autoplay items-5">
        <div class="item gallery-image-1"></div>
        <div class="item gallery-image-2"></div>
        <div class="item gallery-image-3"></div>
        <div class="item gallery-image-4"></div>
        <div class="item gallery-image-5"></div>
    </div>

    <div class="footer">
        <ul class="tiles">
            <?php
            foreach(readConfFile('./content/tiles.csv') as $tileConfig) {
                print '<li>';
                print '<img src="images/tiles/' . $tileConfig[1] . '"/>';
                print '<span class="caption simple-caption"><p>' . $tileConfig[0] . '</p></span>';
            }
            ?>
        </ul>
    </div>

</body>
</html>