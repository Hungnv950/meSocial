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
use common\models\User;
use frontend\helper\FrontEndHelper;

AppAsset::register($this);
$homeUrl = str_replace('/frontend/web', '', Yii::$app->urlManager->baseUrl);
if (!Yii::$app->user->isGuest){
    $user_id = Yii::$app->user->identity->getId();
    $username = FrontEndHelper::getUserName($user_id);
}
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <script>
        function homeUrl() {
            return '<?php  echo $homeUrl?>';
        }
    </script>

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
                        <li class="language language-2"><a href="" title=""><img
                                        src="<?php echo Url::to('@images', true) ?>/en.png" alt=""/></a></li>
                        <li class="language"><a href="" title=""><img
                                        src="<?php echo Url::to('@images', true) ?>/vn.png" alt=""/></a></li>
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
                <a href="<?php echo Yii::$app->homeUrl; ?>" title="Trang chủ"><img
                            src="<?php echo Url::to('@images', true) ?>/s.png" alt="" style="width: 90px"/></a>
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
                <div class="col-md-1 col-sm-2  hidden-xs">
                    <div class="logo-pc">
                        <a href="<?php echo Yii::$app->homeUrl; ?>" title="Trang chủ"><img
                                    src="<?php echo Url::to('@images', true) ?>/s.png" alt="" style="width: 70px"/></a>
                    </div>
                </div>
                <div class="col-md-8 col-sm-7 col-xs-12">
                    <div class="menu_main">
                        <nav class="nav is-fixed" role="navigation">
                            <div class="wrapper wrapper-flush">
                                <div class="nav-container">
                                    <ul class="nav nav-menu menu">
                                        <li class="menu-item active">
                                            <a href="<?php echo Url::home() ?>" class="menu-link">Tôi</a>
                                        </li>
                                        <li class="menu-item has-dropdown">
                                            <a href="<?php echo Url::toRoute('/literature', true) ?>" class="menu-link">Chúng ta</a>
                                        </li>
                                        <li class="menu-item has-dropdown">
                                            <a href="<?php echo Url::toRoute('/literature/create', true) ?>"
                                               class="menu-link">Chia sẻ</a>
                                        </li>
                                        <li class="menu-item has-dropdown">
                                            <a href="#" title="Câu lạc bộ Chữ Sư phạm" class="menu-link">HHC - HNUE</a>
                                            <ul class="nav-dropdown menu clearfix">
                                                <li class="menu-item">
                                                    <a href="#" class="menu-link">Giới thiệu</a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="#" class="menu-link">Kinh nghiệm viết</a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="#" class="menu-link">Hoạt động</a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="#" class="menu-link">Sinh hoạt hàng tuần</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="menu-item">
                                            <a href="" class="menu-link">Ngoại ngữ</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="" class="menu-link">Tư vấn</a>
                                        </li>
                                        <!--                                        <li class="menu-item "><a href="" class="menu-link">Blog</a></li>-->
                                        <li class="menu-item ">
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
                <div class="col-md-3 col-sm-2 hidden-xs">
                    <?php
                    if (Yii::$app->user->isGuest) {
                        ?>
                        <ul class="list-register pull-right">
                            <li><a href="<?php echo Url::toRoute('/user/registration/register', true) ?>" title=""
                                   class="button small"><span
                                            class="hidden-sm">Đăng kí</span><i
                                            class="fa fa-user visible-sm" aria-hidden="true"></i></i></a></li>
                            <li class="drop-down menu ">
                                <a href="<?php echo Url::toRoute('/user/security/login', true) ?>" title="" class="button small">
                                    <span class="hidden-sm">Đăng nhập</span>
                                </a>
                            </li>
                            <li class="drop-down menu ">
                                <a href="<?php echo Url::toRoute('/site/auth?authclient=facebook', true) ?>" title="" class="button small">
                                    <span class="hidden-sm">FB</span>
                                </a>
                            </li>
                        </ul>
                        <?php
                    } else {
                        $user = User::find()->where(['id' => Yii::$app->user->id])->one();
                        ?>
                        <ul class="list-register pull-right dropdown">
                            <li>
                                <a href="<?php echo Url::toRoute('/user/settings/profile', true) ?>" data-method="post" class="button small">>
                                    <?php echo $username ?>
                                </a>
                            </li>
                            <li><a href="<?php echo Url::toRoute('/user/security/logout', true) ?>" data-method="post" class="button small">Đăng xuất</a></li>
                        </ul>
                        <?php
                    }
                    ?>
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
        <p class="pull-left">&copy; Maru Bow <?= date('Y') ?></p>

        <p class="pull-right"><a href="mailto:maruk58uet@gmail.com?subject=meSocial+support">maruk58uet@gmail.com</a>
        </p>
    </div>
</footer>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>

<?php
$js = <<<JS

JS;

?>
<style>
    .pagination > li > a, .pagination > li > span {
        position: relative;
        float: left;
        padding: 6px 12px;
        margin-left: -1px;
        line-height: 4.428571;
        color: #337ab7;
        text-decoration: none;
        background-color: #fff;
        border: 1px solid #ddd;
    }
</style>