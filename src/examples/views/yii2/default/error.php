<?php
/**
 *
 * @var $exception  yii\web\NotFoundHttpException
 *
 * */
?>
<div class="error">
    <div class="error__content">
        <h2><?= $exception->statusCode ?></h2>
        <h3><?= $exception->getMessage() ?></h3>
        <p>There was a problem on our end. Please try again later.</p>
        <button type="button" class="btn btn-accent btn-pill">← Go Back</button>
    </div>
</div>
