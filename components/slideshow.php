<div class="slideshowContainer">
    <?php
    foreach ($images as $image) {
        echo '<div class="mySlides">';
        echo '<div class="numbertext">' . ($key + 1) . ' / ' . count($images) . '</div>';
        echo '<img src="' . $image . '" style="width:100%">';
        echo '</div>';
    }
    ?>

    <a class="prev" onclick="plusSlides(-1)">❮</a>
    <a class="next" onclick="plusSlides(1)">❯</a>

    <div class="caption-container">
        <p id="caption"></p>
    </div>

    <div class="row">
        <?php
            foreach ($images as $key => $image) {
                echo '<div class="column">';
                echo '<img class="demo cursor" src="' . $image . '" style="width:100%;height: 100px;object-fit: cover;" onclick="currentSlide(' . ($key + 1) . ')" alt="' . $titles[$key] . '">';
                echo '</div>';
        }
        ?>
    </div>
</div>
<!-- © AIMA DEVELOPPEMENT 2024 -->