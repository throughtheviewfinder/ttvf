<?php
$images = [
    "images/slideshow/16354034274_d141d2be06_k.jpg",
    "images/slideshow/16835977820_306590d775_k.jpg",
    "images/slideshow/17007939581_1bce7b0050_k.jpg",
    "images/slideshow/16835781358_2243f027ef_k.jpg",
    "images/slideshow/16261971583_a7b45b934b_k.jpg"
];

$slideShowCSS = '';
for ($i = 1;$i < 6;$i++) {
    $slideShowCSS .= '.gallery-image-' . $i . ' { background-image: url("' . $images[$i - 1] . '"); }' . "\n";
}

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
            <li>
                <img src="./images/collections/15683460864_9091c86743_q.jpg"/>
                <span class="caption simple-caption">
                    <p>concert</p>
                </span>
            </li>
            <li>
                <img src="./images/collections/16133722758_53ccf0279f_q.jpg"/>
                <span class="caption simple-caption">
                    <p>studio</p>
                </span>
            </li>
            <li>
                <img src="./images/collections/16892810316_0eaa62f27d_q.jpg"/>
                <span class="caption simple-caption">
                    <p>fashion</p>
                </span>
            </li>
        </ul>
    </div>

</body>
</html>