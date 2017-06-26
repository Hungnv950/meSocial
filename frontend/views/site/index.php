<?php

/* @var $this yii\web\View */

use yii\helpers\Url;
use common\models\User;
use frontend\helper\FrontEndHelper;

$this->title = 'Me';
?>
<div class="site-index">

    <div class="container">
        <div class="row">
            <div id="main">
                <div class="col-md-4">
                    <!-- Sidebar -->
                    <section id="sidebar">

                        <!-- Intro -->
                        <section id="intro">
                            <a href="#" class="logo"><img src="/<?php echo Yii::getAlias('@images') . "/tho.jpg" ?>"
                                                          alt=""/></a>
                            <header>
                                <h2>Chuyện củatôi</h2>
                                <p>
                                </p>
                            </header>
                        </section>

                        <!-- Posts List -->
                        <?php
                        foreach ($dataProvider as $item => $value) {
                            $user_create_id = $value['user_create'];
                            $user_create = FrontEndHelper::getUserName($user_create_id);
                            ?>
                            <section>
                                <ul class="posts">
                                    <li>
                                        <article>
                                            <header>
                                                <h3><a href="<?php echo Url::toRoute('/literature/view?id='.$value['id'], true) ?>" > <?php echo $value['title']?></a></h3>
                                                <time class="published" datetime="<?php echo date('d-m-Y ',$value['created_at'])?><"><?php echo date('d-m-Y ',$value['created_at'])?><</time>
                                            </header>
                                            <a href="<?php echo Url::toRoute('/literature/view?id='.$value['id'], true) ?>" class="image"><img src="/<?php echo Yii::getAlias('@images') . "/".$value['img'] ?>" alt=""/></a>
                                        </article>
                                    </li>
                                    <li>
                                        <article>
                                            <header>
                                                <p><a href="<?php echo Url::toRoute('/literature/view?id='.$value['id'], true) ?>"><?php echo $value['description'] ?></a></p>
                                            </header>
                                        </article>
                                    </li>
                                </ul>
                            </section>
                            <?php
                        }
                        ?>

                        <!-- About -->
                        <section class="blurb">
                            <h2>About</h2>
                            <p>Mauris neque quam, fermentum ut nisl vitae, convallis maximus nisl. Sed mattis nunc id
                                lorem euismod amet placerat. Vivamus porttitor magna enim, ac accumsan tortor cursus at
                                phasellus sed ultricies.</p>
                            <ul class="actions">
                                <li><a href="#" class="button">Learn More</a></li>
                            </ul>
                        </section>
                </div>
                <!-- Post -->

                <div class="col-md-8">
                    <?php
                    foreach ($dataProvider as $item => $value) {
                        ?>
                        <article class="post">
                            <header>
                                <div class="title">
                                    <h2><a href="<?php echo Url::toRoute('/literature/view?id='.$value['id'], true) ?>"><?php echo $value['title'] ?></a></h2>
                                </div>
                                <div class="meta">
                                    <a href="<?php $value['user_create'] ?>" class="author">
                                        <img src="/<?php echo Yii::getAlias('@images') . "/".$value['img'] ?>" alt=""/></a>
                                        <h5> <?php echo $user_create?></h5>
                                    <time class="published" datetime="<?php echo date('d-m-Y ',$value['created_at'])?>"><?php echo date('d-m-Y ',$value['created_at'])?></time>
                                </div>
                            </header>
                            <a href="<?php echo Url::toRoute('/literature/view?id='.$value['id'], true) ?>" class="image featured"><img
                                        src="/<?php echo Yii::getAlias('@images') . "/".$value['img']  ?>" alt=""/></a>
                            <p>
                                <?php echo $value['description'] ?>
                            </p>
                            <footer>
                                <ul class="actions">
                                    <li><a href="<?php echo Url::toRoute('/literature/view?id='.$value['id'], true) ?>" class="button big">Continue Reading</a></li>
                                </ul>
                                <ul class="stats">
                                    <li><a href="#">General</a></li>
                                    <li><a href="#" class="icon fa-heart">28</a></li>
                                    <li><a href="#" class="icon fa-comment">128</a></li>
                                </ul>
                            </footer>
                        </article>
                        <?php
                    }
                    ?>
                    <!-- Pagination -->
                    <ul class="actions pagination">
                        <li><a href="" class="button big previous">Previous Page</a></li>
                        <li><a href="#" class="button big next">Next Page</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>