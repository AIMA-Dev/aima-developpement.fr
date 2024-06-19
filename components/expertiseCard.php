<div class="expertiseCard">
    <div class="colorBlock left"<?php if ($side === "right") echo 'style="background-color: transparent;"'; ?>></div>
    <div class="centerContent">
        <h2 <?php if ($side === "left") echo 'style="text-align: end;"'; ?>><?php echo $title;?></h2>
        <div <?php if ($side === "left") echo 'style="flex-direction: row-reverse;"'; ?>>
            <div class="imgWrap" <?php if ($side === "left") echo 'style="margin-right: 0px; margin-left: 20px;"'; ?>>
                <?php
                    foreach ($images as $image) {
                        if ($image === $images[0]) {
                            echo '<img src="' . $image . '" alt="" class="imgActive">';
                        } else {
                            echo '<img src="' . $image . '" alt="" class="imgInactive">';
                        }
                    }
                ?>
                <div class="dotWrap">
                    <?php
                        foreach ($images as $index => $image) {
                            $dotClass = ($index === 0) ? 'dotActive' : '';
                            echo '<span class="dot ' . $dotClass . '"></span>';
                        }
                    ?>
                </div>
            </div>
            <a><?php echo $text;?></a>
        </div>
    </div>
    <div class="colorBlock right"<?php if ($side === "left") echo 'style="background-color: transparent;"'; ?>></div>
</div>
<!-- © AIMA DEVELOPPEMENT 2024 -->