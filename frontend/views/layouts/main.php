<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;
use yii\helpers\Url;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="number-mail pull-left">
                        <li>
                            Hotline: +84 163 952 8622
                        </li>
                        <li>
                            Email: maruk58uet@gmail.com
                        </li>
                    </ul>
                    <ul class="menu-top pull-right">
                        <li><a href="" title="">Về chúng tôi</a></li>
                        <li><a href="" title="">Blog</a></li>
                        <li><a href="" title="">Tư vấn</a></li>
                        <li><a href="" title="">Hỏi đáp</a></li>
                        <li><a href="" title="">Điều lệ</a></li>
                        <li class="language language-2"><a href="" title=""><img src="<?php echo Url::to('@images',true)?>/en.png" alt=""/></a></li>
                        <li class="language"><a href="" title=""><img src="<?php echo Url::to('@images',true)?>/vn.png" alt=""/></a></li>
                    </ul>
                    <ul class="list-register pull-right visible-xs">
                        <li><a href=""><i class="fa fa-user visible-sx" aria-hidden="true"></i></a></li>
                        <li>
                            <a href="" title="">
                                <span class="icon-cart-2"></span>
                                <span class="icon-cart">0</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <section class="top-center">
        <div class="visible-xs menu_mb">
            <div class="">
                <button class="nav-toggle">
                    <div class="icon-menu">
                        <span class="line line-1"></span>
                        <span class="line line-2"></span>
                        <span class="line line-3"></span>
                    </div>
                </button>
                <a href="" title=""><img src="<?php echo Url::to('@images',true)?>/s.png" alt="" style="width: 90px"/></a>
                <a href="" title="" class="pull-right search-top visible-xs"><i class="fa fa-search"
                                                                                aria-hidden="true"></i></a>
            </div>
        </div>
    </section>
    <div class="clearfix"></div>
    <section id="menu-main" class="banner_fix">
        <div class="container">
            <!-- /menu_mb -->
            <div class="row">
                <div class="col-md-2 col-sm-2  hidden-xs">
                    <div class="logo-pc">
                        <a href="" title=""><img src="<?php echo Url::to('@images',true)?>/s.png" alt="" style="width: 70px"/></a>
                    </div>
                </div>
                <div class="col-md-6 col-sm-8 col-xs-12">
                    <div class="menu_main">
                        <nav class="nav is-fixed" role="navigation">
                            <div class="wrapper wrapper-flush">
                                <div class="nav-container">
                                    <ul class="nav-menu menu">
                                        <li class="menu-item active">
                                            <a href="<?php Url::home()?>" class="menu-link">Tôi</a>
                                        </li>
                                        <li class="menu-item has-dropdown">
                                            <a href="#" class="menu-link ">Sống mỗi ngày</a>
                                            <ul class="nav-dropdown menu clearfix">
                                                <li class="menu-item">
                                                    <a href="#" class="menu-link">Thị trường</a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="#" class="menu-link">Khuyến mãi hè</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="menu-item">
                                            <a href="#" class="menu-link">HHC - HNUE</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="" class="menu-link">Tư vấn</a>
                                        </li>
                                        <li class="menu-item "><a href="" class="menu-link">Blog</a></li>
                                        <li class="menu-item search-top hidden-xs"><a href="#" class="menu-link"><i
                                                        class="fa fa-search" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
                <form action="" class="form_search" style="display:none">
                    <div class="form-group pull-right">
                        <input type="text" class="input-sm input-search" placeholder="Tìm kiếm">
                        <button type="button" class="btn button-search">Tìm kiếm</button>
                    </div>
                </form>
                <div class="col-md-4 col-sm-2 hidden-xs">
                    <ul class="list-register pull-right">
                        <li><a href="<?php echo Url::toRoute('/site/login',true)?>" title=""><span class="hidden-sm">Đăng nhập</span><i
                                        class="fa fa-user visible-sm" aria-hidden="true"></i></i></a></li>
                        <li>
                            <a href="" title="">
                                <span class="hidden-sm">Giỏ Hàng/0.00ZL</span>
                                <span class="icon-cart-2"></span>
                                <span class="icon-cart">0</span>

                            </a>
                        </li>
                    </ul>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </section>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

<a id="scroll_top"></a>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; My Company <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
