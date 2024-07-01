<model-viewer src="<?php echo $model ?>" ar ar-modes="webxr scene-viewer quick-look" camera-controls
    tone-mapping="neutral" poster="assets/img/loading3D.svg" shadow-intensity="1">
    <div class="progress-bar hide" slot="progress-bar">
        <div class="update-bar"></div>
    </div>
    <button slot="ar-button" id="ar-button">
        <?php getValueFromJson("arView") ?>
    </button>
    <div id="ar-prompt">
        <img src="assets/img/icons/ar_hand_prompt.webp">
    </div>
</model-viewer>