<footer class="main-footer">
    <!-- Footer widgets -->
    <div class="big-footer box darken-less">
        <div class="container">
            <div class="footer-sidebar row">

                <div class="col-md-4 col-sm-6 widget">
                    <h4>Khorezm palace hotel</h4>
                    <ul class="clean-list contact-info text-dark-blue uppercase">
                        <li><i class="icon-338 font-2x"></i> <b><?=Yii::t('main','Address')?>: </b> <?=Yii::app()->params['address'][Yii::app()->language]?></li>
                        <li><i class="icon-274 font-2x"></i> <b>E-mail: </b> <a href="mailto:khorezmpalace@gmail.com">khorezmpalace@gmail.com</a></li>
                        <li><i class="icon-274 font-2x"></i> <b>E-mail: </b> <a href="mailto:khorezmpalace@mail.ru">khorezmpalace@mail.ru</a></li>
                        <li><i class="icon-402 font-2x"></i> <b><?=Yii::t('main','Phone')?>: </b> <?=Yii::app()->params['tel']?></li>
                        <li><i class="icon-402 font-2x"></i> <b><?=Yii::t('main','Fax')?>: </b> <?=Yii::app()->params['fax']?></li>
                    </ul>
                </div>

                <div class="col-md-4 col-sm-6 widget post-widget">
                    <h4><?=Yii::t('main','Follow us')?></h4>
                    <ul class="inline-list social-links">
                        <li>
                            <a href="https://facebook.com/khorezmpalace" class="social-facebook shape-square font-2x soft-corners"><i class="icon-528"></i></a>
                        </li>
                        <li>
                            <a href="#" class="social-twitter shape-square font-2x soft-corners"><i class="icon-556"></i></a>
                        </li>
                        <li>
                            <a href="#" class="social-foursquare shape-square font-2x soft-corners"><i class="icon-530"></i></a>
                        </li>
                        <li>
                            <a href="#" class="social-pinterest shape-square font-2x text-white soft-corners"><i class="icon-545"></i></a>
                        </li>
                    </ul>
                    <div class="usefull-links">
                        <h4><?=Yii::t('main','Useful link')?>:</h4>
                        <ul class="">
                            <li class="col-md-4 col-sm-4 col-xs-6">
                                <a href="#"><?=Yii::t('main','About us')?></a>
                            </li>

                            <li class="col-md-4 col-sm-4 col-xs-6">
                                <a href="#"><?=Yii::t('main','Travel')?></a>
                            </li>
                            <li class="col-md-4 col-sm-4 col-xs-6">
                                <a href="#"><?=Yii::t('main','Affiliate')?></a>
                            </li>
                            <li class="col-md-4 col-sm-4 col-xs-6">
                                <a href="#"><?=Yii::t('main','Businesses')?></a>
                            </li>
                            <li class="col-md-4 col-sm-4 col-xs-6">
                                <a href="#"><?=Yii::t('main','Contact Support')?></a>
                            </li>
                            <li class="col-md-4 col-sm-4 col-xs-6">
                                <a href="#"><?=Yii::t('main','Shopping')?></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12 widget">
                    <div class="fb-page" data-href="https://www.facebook.com/khorezmpalace" data-tabs="timeline" data-width="390" data-height="270" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/khorezmpalace"><a href="https://www.facebook.com/khorezmpalace">Khorezm Palace</a></blockquote></div></div>
                </div>
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.big-footer -->
    <!-- Copyright section -->
    <div class="small-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p class="copyright center-me uppercase font-small">
                        <span>copyright <?=date('Y',time())?></span>
                        <a href="#">Khorezm Palace</a>
                        <span> developed by</span>
                        <a href="http://se.ubtuit.uz.com/">UB TUIT</a>
                    </p>
                </div>
            </div> <!-- /.row -->
        </div>
    </div><!-- /.small-footer -->
</footer><!-- /.main-footer -->