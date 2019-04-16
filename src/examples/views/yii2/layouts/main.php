<?php

use shandyrov\shards\assetbundles\AdminShardsEndAsset;
use yii\helpers\Html;

// Loading demo content. Need remove
function demoContent()
{
    if (Yii::$app->request->pathInfo == 'admin/dashboard'){
        return __DIR__.'/../demo-pages/dashboard.php';
    } elseif (Yii::$app->request->pathInfo == 'admin/components-blog-posts') {
        return __DIR__.'/../demo-pages/components-blog-posts.php';
    } elseif (Yii::$app->request->pathInfo == 'admin/login') {
        return __DIR__.'/../demo-pages/login.php';
    } elseif (Yii::$app->request->pathInfo == 'admin/form-components'){
        return __DIR__.'/../demo-pages/form-components.php';
    } elseif (Yii::$app->request->pathInfo == 'admin/tables'){
        return __DIR__.'/../demo-pages/tables.php';
    } else {
        return __DIR__.'/../demo-pages/error.php';
    }
}



AdminShardsEndAsset::register($this);
$dirAsset = Yii::$app->assetManager->getPublishedUrl('@vendor/shandyrov/yii2-shards-asset/dist');
?>
<?php $this->beginPage() ?>
<!doctype html>
<html class="no-js h-100" lang="en">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?= Html::encode($this->title) ?></title>
    <meta name="description" content="A high-quality &amp; free Bootstrap admin dashboard template pack that comes with lots of templates and components.">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?= $this->registerCsrfMetaTags() ?>
    <?php $this->head() ?>
</head>
<body class="h-100">
<?php $this->beginBody() ?>

<div class="container-fluid">
    <div class="row">
        <!-- Main Sidebar -->
        <?= $this->render('left', ['dirAsset' => $dirAsset]) ?>
        <!-- End Main Sidebar -->
        <main class="main-content col-lg-10 col-md-9 col-sm-12 p-0 offset-lg-2 offset-md-3">
            <?= $this->render('nav', ['dirAsset' => $dirAsset]) ?>
            <div class="main-content-container container-fluid px-4">
                <!-- Page Header -->
                <?= $this->render('breadcrumbs') ?>
                <!-- End Page Header -->

                <!-- Loading demo pages. Need remove -->
                <?php if(strstr(Yii::$app->request->pathInfo, 'admin') != null): ?>
                    <?php include_once demoContent() ?>
                <?php endif;?>

                 <!----><?//= $content ?>
            </div>
            <?= $this->render('footer') ?>
        </main>
    </div>
</div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>