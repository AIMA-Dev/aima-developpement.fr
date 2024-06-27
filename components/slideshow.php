<div class="slideshowContainer">
    <?php
    foreach ($images as $key => $image) {
        echo '<div class="mySlides">';
        echo '<div class="numbertext">' . ($key + 1) . ' / ' . count($images) . '</div>';
        echo '<img src="' . $image . '" style="width:100%" alt="">';
        echo '</div>';
    }
    ?>

    <a class="prev">❮</a>
    <a class="next">❯</a>

    <div class="caption-container">
        <p class="caption"></p>
    </div>

    <div class="row">
        <?php
        foreach ($images as $key => $image) {
            echo '<div class="column">';
            echo '<img class="demo cursor" src="' . $image . '" style="width:100%;height: 100px;object-fit: cover;" alt="' . $titles[$key] . '">';
            echo '</div>';
        }
        ?>
    </div>
</div>