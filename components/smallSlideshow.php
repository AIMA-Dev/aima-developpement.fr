<div class="slideshowContainer">
    <?php
    foreach ($images as $key => $image) {
        echo '<div class="mySlides">';
        echo '<div class="numbertext">' . ($key + 1) . ' / ' . count($images) . '</div>';
        echo '<img src="' . $image . '" style="width:100%" alt="">';
        echo '</div>';
    }
    ?>

    <a class="prev" onclick="plusSlides(-1)">❮</a>
    <a class="next" onclick="plusSlides(1)">❯</a>

    <div class="caption-container">
        <p id="caption"></p>
    </div>
</div>

<div style="text-align:center">
    <?php
    foreach ($images as $key => $image) {
        echo '<span class="dot" onclick="currentSlide(' . ($key + 1) . ')"></span>';
    }
    ?>
</div>