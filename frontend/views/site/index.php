<?php
/* @var $this yii\web\View */
use yii\helpers\Url;
use common\models\User;
use frontend\helper\FrontEndHelper;

$this->title = 'Me';
?>

<!--=== Blog Posts ===-->
<div class="bg-color-light">
    <div class="container content-sm">
        <div class="row">
            <!-- Right Sidebar -->
            <div class="col-md-3 magazine-page">
                <!-- Search Bar -->
                <div class="headline headline-md"><h2>Search</h2></div>
                <div class="input-group margin-bottom-40">
                    <input type="text" class="form-control" placeholder="Search">
                    <span class="input-group-btn">
                        <button class="btn-u" type="button">Go</button>
                    </span>
                </div>
                <!-- End Search Bar -->

                <!-- Posts -->
                <div class="posts margin-bottom-40">
                    <div class="headline headline-md"><h2>Recent Posts</h2></div>
                    <dl class="dl-horizontal">
                        <dt><a href="#"><img src="/<?php echo Yii::getAlias('@images') . "/tho.jpg" ?>" alt=""/></a>
                        </dt>
                        <dd>
                            <p><a href="#">Responsive Bootstrap 3 Template placerat idelo alac eratamet.</a></p>
                        </dd>
                    </dl>
                    <dl class="dl-horizontal">
                        <dt><a href="#"><img src="/<?php echo Yii::getAlias('@images') . "/tho.jpg" ?>" alt=""/></a>
                        </dt>
                        <dd>
                            <p><a href="#">100+ Amazing Features Layer Slider, Layer Slider, Icons, 60+ Pages etc.</a>
                            </p>
                        </dd>
                    </dl>
                    <dl class="dl-horizontal">
                        <dt><a href="#"><img src="/<?php echo Yii::getAlias('@images') . "/tho.jpg" ?>" alt=""/></a>
                        </dt>
                        <dd>
                            <p><a href="#">Developer Friendly Code imperdiet condime ntumi mperdiet condim.</a></p>
                        </dd>
                    </dl>
                </div><!--/posts-->
                <!-- End Posts -->

                <!-- Tabs Widget -->
                <div class="headline headline-md"><h2>Tabs Widget</h2></div>
                <div class="tab-v2 margin-bottom-40">
                    <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#home-1">About Us</a></li>
                        <li><a data-toggle="tab" href="#home-2">Quick Links</a></li>
                    </ul>
                    <div class="tab-content">
                        <div id="home-1" class="tab-pane active">
                            <p>Vivamus imperdiet condimentum diam, eget placerat felis consectetur id. Donec eget orci
                                metus, ac ac adipiscing nunc.</p>
                            <p>Pellentesque fermentum, ante ac felis consectetur id. Donec eget orci metusvivamus
                                imperdiet.</p>
                        </div>
                        <div id="home-2" class="tab-pane magazine-sb-categories">
                            <div class="row">
                                <ul class="list-unstyled col-xs-6">
                                    <li><a href="#">Best Sliders</a></li>
                                    <li><a href="#">Parralax Page</a></li>
                                    <li><a href="#">Backgrounds</a></li>
                                    <li><a href="#">Parralax Slider</a></li>
                                    <li><a href="#">Responsive</a></li>
                                    <li><a href="#">800+ Icons</a></li>
                                </ul>
                                <ul class="list-unstyled col-xs-6">
                                    <li><a href="#">60+ Pages</a></li>
                                    <li><a href="#">Layer Slider</a></li>
                                    <li><a href="#">Bootstrap 3</a></li>
                                    <li><a href="#">Fixed Header</a></li>
                                    <li><a href="#">Best Template</a></li>
                                    <li><a href="#">And Many More</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Tabs Widget -->

                <!-- Blog Tags -->
                <div class="headline headline-md"><h2>Blog Tags</h2></div>
                <ul class="list-unstyled blog-tags margin-bottom-30">
                    <li><a href="#"><i class="fa fa-tags"></i> Business</a></li>
                    <li><a href="#"><i class="fa fa-tags"></i> Music</a></li>
                    <li><a href="#"><i class="fa fa-tags"></i> Internet</a></li>
                    <li><a href="#"><i class="fa fa-tags"></i> Money</a></li>
                    <li><a href="#"><i class="fa fa-tags"></i> Google</a></li>
                    <li><a href="#"><i class="fa fa-tags"></i> TV Shows</a></li>
                    <li><a href="#"><i class="fa fa-tags"></i> Education</a></li>
                    <li><a href="#"><i class="fa fa-tags"></i> People</a></li>
                    <li><a href="#"><i class="fa fa-tags"></i> People</a></li>
                    <li><a href="#"><i class="fa fa-tags"></i> Math</a></li>
                    <li><a href="#"><i class="fa fa-tags"></i> Photos</a></li>
                    <li><a href="#"><i class="fa fa-tags"></i> Electronics</a></li>
                    <li><a href="#"><i class="fa fa-tags"></i> Apple</a></li>
                    <li><a href="#"><i class="fa fa-tags"></i> Canada</a></li>
                </ul>
                <!-- End Blog Tags -->

                <!-- Blog Latest Tweets -->
                <div class="blog-twitter margin-bottom-30">
                    <div class="headline headline-md"><h2>Latest Tweets</h2></div>
                    <div class="blog-twitter-inner">
                        <i class="fa fa-twitter"></i>
                        <a href="#">@htmlstream</a>
                        At vero eos et accusamus et iusto odio dignissimos.
                        <a href="#">http://t.co/sBav7dm</a>
                        <span>5 hours ago</span>
                    </div>
                    <div class="blog-twitter-inner">
                        <i class="fa fa-twitter"></i>
                        <a href="#">@htmlstream</a>
                        At vero eos et accusamus et iusto odio dignissimos.
                        <a href="#">http://t.co/sBav7dm</a>
                        <span>5 hours ago</span>
                    </div>
                    <div class="blog-twitter-inner">
                        <i class="fa fa-twitter"></i>
                        <a href="#">@htmlstream</a>
                        At vero eos et accusamus et iusto odio dignissimos.
                        <a href="#">http://t.co/sBav7dm</a>
                        <span>5 hours ago</span>
                    </div>
                    <div class="blog-twitter-inner">
                        <i class="fa fa-twitter"></i>
                        <a href="#">@htmlstream</a>
                        At vero eos et accusamus et iusto odio dignissimos.
                        <a href="#">http://t.co/sBav7dm</a>
                        <span>5 hours ago</span>
                    </div>
                </div>
                <!-- End Blog Latest Tweets -->
            </div>
            <!-- End Right Sidebar -->

            <!-- Blog All Posts -->
            <div class="col-md-9">
                <?php
                foreach ($dataProvider as $item => $value) {
                    $user_create_id = $value['user_create'];
                    $user_create = FrontEndHelper::getUserName($user_create_id);
                    ?>
                    <!-- Blog Posts -->
                    <div class="news-v3 bg-color-white margin-bottom-60">
                        <a href="<?php echo Url::toRoute('/literature/view?id='.$value['id'], true) ?>"><img class="img-responsive full-width"
                             src="/<?php echo Yii::getAlias('@images') . "/".$value['img'] ?>" alt="">
                        </a>
                        <div class="news-v3-in">
                            <ul class="list-inline posted-info">
                                <li>By <a href="#"><?php echo $user_create ?></a></li>
                                <li>In <a href="#">Design</a></li>
                                <li>Posted <?php echo date('d-m-Y',$value['created_at']) ?></li>
                            </ul>
                            <h2><a href="<?php echo Url::toRoute('/literature/view?id='.$value['id'], true) ?>"><?php echo $value['title']?></a></h2>
                            <p><?php echo $value['description'] ?>...</p>
                            <ul class="post-shares">
                                <li>
                                    <a href="#">
                                        <i class="rounded-x icon-speech"></i>
                                        <span>26</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="rounded-x icon-share"></i>
                                        <span>98</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="rounded-x icon-heart"></i>
                                        <span>30</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <?php
                }
                ?>
                <!-- End Blog Posts -->

                <ul class="pager pager-v2 pager-md no-margin">
                    <li class="previous"><a href="#">&larr; Older</a></li>
                    <li class="page-amount">1 of 7</li>
                    <li class="next"><a href="#">Newer &rarr;</a></li>
                </ul>
                <!-- End Pager v2 -->
            </div>
            <!-- End Blog All Posts -->
        </div>
    </div>
</div>
<!--=== End Blog Posts ===-->