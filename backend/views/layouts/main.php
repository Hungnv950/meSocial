
<?php
use yii\helpers\Html;

/* @var $this \yii\web\View */
/* @var $content string */
$host = 'http://'.$_SERVER['HTTP_HOST'].'/';
$homeUrl = str_replace('/backend/web','', Yii::$app->urlManager->baseUrl);
if (Yii::$app->controller->action->id === 'login') {
    echo $this->render(
        'main-login',
        ['content' => $content]
    );
} else {

    if (class_exists('backend\assets\AppAsset')) {
        backend\assets\AppAsset::register($this);
    } else {
        app\assets\AppAsset::register($this);
    }

    if (!Yii::$app->user->isGuest) {
        $username = Yii::$app->user->identity->username;
        $created_at = Yii::$app->user->identity->created_at;
    }
    else {
        $username = 'GUEST';
        $created_at = 123467;
    }
    dmstr\web\AdminLteAsset::register($this);

    $directoryAsset = Yii::$app->assetManager->getPublishedUrl('@bower/admin-lte/dist');
    ?>
    <?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
    </head>
    <script>
        function homeUrl() {
            return '<?php  echo $homeUrl?>';
        }
    </script>

    <body class="skin-blue">
    <?php $this->beginBody() ?>
    <div class="wrapper">


        <?= $this->render(
            'header.php',
            [
                'directoryAsset' => $directoryAsset,
                'username' => $username,
                'created_at' => $created_at
            ]
        ) ?>

        <div class="wrapper row-offcanvas row-offcanvas-left">

            <?= $this->render(
                'left.php',
                [
                    'directoryAsset' => $directoryAsset,
                    'username' => $username,
                    'created_at' => $created_at
                ]
            )
            ?>

            <?= $this->render(
                'content.php',
                ['content' => $content, 'directoryAsset' => $directoryAsset]
            ) ?>

        </div>
    </div>

    <?php $this->endBody() ?>
    </body>
    </html>
    <?php $this->endPage() ?>
<?php } ?>
