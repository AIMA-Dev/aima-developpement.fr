<model-viewer src="<?php echo $model ?>" ar ar-modes="webxr scene-viewer quick-look" camera-controls
    tone-mapping="neutral" poster="assets/img/loading3D.svg" shadow-intensity="1">
    <div class="progress-bar hide" slot="progress-bar">
        <div class="update-bar"></div>
    </div>
    <button slot="ar-button" id="ar-button">
        View in your space
    </button>
    <div id="ar-prompt">
        <img src="assets/img/icons/ar_hand_prompt.png">
    </div>
</model-viewer>