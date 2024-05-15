<div class="card" onclick="window.location.href = '<?php echo $link ?>';">
    <img src="<?php echo ($imgUrl !== '') ? $imgUrl : 'https://placehold.co/500x500'; ?>"
        alt="<?php echo $title; ?>" style="width:100%">
    <div class="cardContainer">
        <h4><b><?php echo $title; ?></b></h4>
        <p><?php echo $job; ?></p>
    </div>
</div>
