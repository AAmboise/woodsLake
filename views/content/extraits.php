<?php
$classCard = '"extrait__card d-flex justify-content-between my-2 align-items-center bg-info bg-gradient rounded-1" style="--bs-bg-opacity: .3;"';
?>
<div class="row extrait justify-content-center text-start my-3">
    <div class="col-8">
        <div class="extrait__titre">
            <div id="extrait">Extraits Audio</div>
            <div class="bande"></div>
        </div>

        <div class=<?=$classCard?>>
            <div>Woods Lake : Phill Collins</div>
            <audio controls src="../../upload/audio1.mp3"></audio>
        </div>

        <div class=<?=$classCard?>>
            <div>Woods Lake : The wall</div>
            <div><audio controls src="../../upload/audio2.mp3"></audio></div>
        </div>

        <div class=<?=$classCard?>>
            <div>Woods Lake : Phill Collins</div>
            <audio controls src="../../upload/audio1.mp3"></audio>
        </div>

    </div>
</div>