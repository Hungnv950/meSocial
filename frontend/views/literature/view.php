<?php
$this->title = $dataProvider['title'];
use yii\helpers\Url;

?>

<div class="col-md-8">
    <article class="post">
        <header>
            <div class="title">
                <h2>
                    <a href="<?php echo Url::toRoute('/literature/view?id=' . $dataProvider['id'], true) ?>"><?php echo $dataProvider['title'] ?></a>
                </h2>
                <p><?php echo $dataProvider['description'] ?></p>
            </div>

            <div class="meta">
                <a href="<?php $dataProvider['user_create'] ?>" class="author">
                    <img src="/<?php echo Yii::getAlias('@images') . "/" . $dataProvider['img'] ?>" alt=""/>
                </a>
                <h5><?php echo \frontend\helper\FrontEndHelper::getUserName($dataProvider['user_create']) ?></h5>
                <time class="published" datetime="<?php echo date('d-m-Y ', $dataProvider['created_at']) ?>">
                    <?php echo date('d-m-Y ', $dataProvider['created_at']) ?>
                </time>
                <h5><a href="<?php echo Url::toRoute('/literature/update?id=' . $dataProvider['id'], true) ?>"><span
                                class="glyphicon glyphicon-edit
"></span>Chỉnh sửa</a></h5>
            </div>
        </header>
        <a href="<?php echo Url::toRoute('/literature/view?id=' . $dataProvider['id'], true) ?>" class="image featured"><img
                    src="/<?php echo Yii::getAlias('@images') . "/" . $dataProvider['img'] ?>" alt=""/></a>
        <p>
            <?php echo $dataProvider['content'] ?>
        </p>
        <footer>
            <ul class="stats">
                <li><a href="#">General</a></li>
                <li><a href="#" class="icon fa-heart">28</a></li>
                <li><a href="#" class="icon fa-comment">128</a></li>
            </ul>
        </footer>
    </article>
</div>

<div class="col-md-offset-1 col-md-3">
    <?php
    foreach ($dataProviderAll as $item => $value) {
        $user_create_id = $value['user_create'];
        $user_create = \frontend\helper\FrontEndHelper::getUserName($user_create_id);
        ?>
        <section>
            <ul class="posts">
                <li>
                    <article>
                        <header>
                            <h3>
                                <a href="<?php echo Url::toRoute('/literature/view?id=' . $value['id'], true) ?>"> <?php echo $value['title'] ?></a>
                            </h3>
                            <time class="published"
                                  datetime="<?php echo date('d-m-Y ', $value['created_at']) ?><"><?php echo date('d-m-Y ', $value['created_at']) ?>
                            </time>
                            <h5> <?php  echo $user_create?></h5>
                        </header>
                        <a href="<?php echo Url::toRoute('/literature/view?id=' . $value['id'], true) ?>" class="image"><img
                                    src="/<?php echo Yii::getAlias('@images') . "/" . $value['img'] ?>" alt=""/></a>
                    </article>
                </li>
                <li>
                    <article>
                        <header>
                            <p>
                                <a href="<?php echo Url::toRoute('/literature/view?id=' . $value['id'], true) ?>"><?php echo $value['description'] ?></a>
                            </p>
                        </header>
                    </article>
                </li>
            </ul>
            <hr>
        </section>
        <?php
    }
    ?>
</div>
