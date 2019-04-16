<?php
// Demo breadcrumbs. Need removing
if (empty($this->params['breadcrumbs'])) {
    if (Yii::$app->request->pathInfo == 'admin/dashboard') {
        $this->params['breadcrumbs'][] = ['label' => 'Home', 'url' => '/'];
        $this->params['breadcrumbs'][] = 'Blog Overview';
    } elseif (Yii::$app->request->pathInfo == 'admin/components-blog-posts') {
        $this->params['breadcrumbs'][] = ['label' => 'Home', 'url' => '/'];
        $this->params['breadcrumbs'][] = 'Blog Posts';
    } elseif (Yii::$app->request->pathInfo == 'admin/tables') {
        $this->params['breadcrumbs'][] = ['label' => 'Home', 'url' => '/'];
        $this->params['breadcrumbs'][] = 'Data tables';
    }
}

// Normal using
//$this->params['breadcrumbs'][] = ['label' => 'Home', 'url' => '/'];
//$this->params['breadcrumbs'][] = 'Blog Overview';
?>
<?php if(!empty($this->params['breadcrumbs'])): ?>
    <div class="page-header row no-gutters py-4">
        <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
            <?php foreach ($this->params['breadcrumbs'] as $key => $breadcrumb):?>
                <?php if($key < array_key_last($this->params['breadcrumbs']) && is_string($breadcrumb)): ?>
                    <span class="text-uppercase page-subtitle"><?= $breadcrumb ?> <?= $key+1 < array_key_last($this->params['breadcrumbs']) ? '/' : '' ?></span>
                <?php elseif ($key < array_key_last($this->params['breadcrumbs']) && is_array($breadcrumb)):?>
                    <a href="<?= $breadcrumb['url'] ?>"><span class="text-uppercase page-subtitle"><?= $breadcrumb['label'] ?> <?= $key+1 < array_key_last($this->params['breadcrumbs']) ? '/' : '' ?></span></a>
                <?php endif;?>
            <?php endforeach;?>
            <h3 class="page-title"><?= $this->params['breadcrumbs'][array_key_last($this->params['breadcrumbs'])] ?></h3>
        </div>
    </div>
<?php endif;?>
