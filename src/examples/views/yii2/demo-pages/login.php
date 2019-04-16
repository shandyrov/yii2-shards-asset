<?php
$dirAsset = Yii::$app->assetManager->getPublishedUrl('@vendor/shandyrov/yii2-shards-asset/dist');
?>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
<style>
    .card{
        margin-top: 30px;
    }
    .social-icons {
        margin: 0;
        padding: 0;
    }
    ul.social-icons > li {
        -webkit-font-smoothing: antialiased;
        display: inline-block;
        font-style: normal;
        font-variant: normal;
        text-rendering: auto;
        line-height: 1;
    }
    .social-icons li a {
        padding: 0 .75rem;
        font-size: 1.25rem;
        color: #007bff
        transition: color 250ms
    }
    .mx-auto{
        margin-left: auto!important;
    }
    .auth-form {
        min-width: 19.375rem;
        max-width: 350px;
    }

    .auth-form__meta a:hover {
        color: #3d5170;
    }
    .auth-form__links a {
        font-weight: 400;
        color: #999999;
    }
</style>

<div class="row no-gutters h-100">
    <div class="col-lg-3 col-md-5 auth-form mx-auto my-auto">
        <div class="card">
            <div class="card-body">
                <img class="auth-form__logo d-table mx-auto mb-3" src="<?= $dirAsset ?>/images/shards-dashboards-logo.svg" alt="Shards Dashboards - Register Template">
                <h5 class="auth-form__title text-center mb-4">Login</h5>
                <form>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <div class="form-group mb-3 d-table mx-auto">
                        <div class="custom-control custom-checkbox mb-1">
                            <input type="checkbox" class="custom-control-input" id="rememberCheck">
                            <label class="custom-control-label" for="rememberCheck">Remember me</label>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-pill btn-accent d-table mx-auto">Enter</button>
                </form>
            </div>
            <div class="card-footer border-top">
                <ul class="social-icons d-table mx-auto" >
                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fab fa-github"></i></a></li>
                    <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="auth-form__links d-flex mt-4">
            <a href="forgot-password.html">Forgot your password?</a>
            <a class="ml-auto" href="register.html">Create new account?</a>
        </div>
    </div>
</div>