<?php

use yii\helpers\Url;

?>
<aside class="main-sidebar col-12 col-md-3 col-lg-2 px-0">
    <div class="main-navbar">
        <nav class="navbar align-items-stretch navbar-light bg-white flex-md-nowrap border-bottom p-0">
            <a class="navbar-brand w-100 mr-0" href="#" style="line-height: 25px;">
                <div class="d-table m-auto">
                    <img id="main-logo" class="d-inline-block align-top mr-1" style="max-width: 25px;" src="<?= $dirAsset ?>/images/shards-dashboards-logo.svg" alt="Shards Dashboard">
                    <span class="d-none d-md-inline ml-1">Shards Dashboard</span>
                </div>
            </a>
            <a class="toggle-sidebar d-sm-inline d-md-none d-lg-none">
                <i class="material-icons">&#xE5C4;</i>
            </a>
        </nav>
    </div>
    <form action="#" class="main-sidebar__search w-100 border-right d-sm-flex d-md-none d-lg-none">
        <div class="input-group input-group-seamless ml-3">
            <div class="input-group-prepend">
                <div class="input-group-text">
                    <i class="fas fa-search"></i>
                </div>
            </div>
            <input class="navbar-search form-control" type="text" placeholder="Search for something..." aria-label="Search"> </div>
    </form>
    <div class="nav-wrapper">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link <?= Yii::$app->request->pathInfo == 'admin/dashboard' ? 'active' : '' ?>" href="<?= yii\helpers\Url::toRoute(['/admin/dashboard']) ?>">
                    <i class="material-icons">edit</i>
                    <span>Blog Dashboard</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?= Yii::$app->request->pathInfo == 'admin/components-blog-posts' ? 'active' : '' ?>" href="<?= yii\helpers\Url::toRoute(['/admin/components-blog-posts']) ?>">
                    <i class="material-icons">vertical_split</i>
                    <span>Blog Posts</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link <?= Yii::$app->request->pathInfo == 'admin/form-components' ? 'active' : '' ?>" href="<?= yii\helpers\Url::toRoute(['/admin/form-components']) ?>">
                    <i class="material-icons">view_module</i>
                    <span>Forms & Components</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?= Yii::$app->request->pathInfo == 'admin/tables' ? 'active' : '' ?>" href="<?= yii\helpers\Url::toRoute(['/admin/tables']) ?>">
                    <i class="material-icons">table_chart</i>
                    <span>Tables</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="errors.html">
                    <i class="material-icons">error</i>
                    <span>Errors</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="<?= Url::toRoute(['/admin/login']) ?>">
                    <i class="material-icons">person</i>
                    <span>Login</span>
                </a>
            </li>
        </ul>
        <ul class="nav nav--no-borders flex-column">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle " data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false" style="border-bottom: 1px solid #e1e5eb;">
                    <i class="material-icons">settings</i>
                    <span>Same tools</span>
                </a>
                <div class="dropdown-menu dropdown-menu-small">
                    <a class="dropdown-item " href="<?= Url::toRoute(['/gii']) ?>">Gii</a>
                    <a class="dropdown-item " href="<?= Url::toRoute(['/debug']) ?>">Debug</a>
                </div>
            </li>

        </ul>
    </div>
</aside>
