<div class="expertiseCard" <?php if ($side === "reversed") echo 'id="reversed"'; ?>>
    <div>
        <!-- IMG -->
        <div class="imgWrap">
            <?php
            foreach ($images as $image) {
                if ($image === $images[0]) {
                    echo '<img src="' . $image . '" alt="" class="imgActive">';
                } else {
                    echo '<img src="' . $image . '" alt="" class="imgInactive">';
                }
            }
            ?>
        </div>
    </div>
    <div>
        <h2><?php echo $title ?></h2>
        <a><?php echo $text ?></a>
        <!-- DOT -->
        <div class="dotWrap">
            <?php
            foreach ($images as $index => $image) {
                $dotClass = ($index === 0) ? 'dotActive' : '';
                echo '<span class="dot ' . $dotClass . '"></span>';
            }
            ?>
        </div>
    </div>
</div>
<!-- © AIMA DEVELOPPEMENT 2024 -->