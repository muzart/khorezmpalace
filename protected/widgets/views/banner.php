<div class="banner">
    <div class="slider">
        <section class="slider">
            <div class="flexslider">
                <ul class="slides">
                    <li>
                        <h2>IPSUM DOLOR SIT AMET LAT</h2>
                        <h5>Allquam tincidunt mauris cu risus</h5>
                    </li>
                    <li>
                        <h2>IPSUM DOLOR SIT AMET LAT</h2>
                        <h5>Allquam tincidunt mauris cu risus</h5>
                    </li>
                    <li>
                        <h2>IPSUM DOLOR SIT AMET LAT</h2>
                        <h5>Allquam tincidunt mauris cu risus</h5>
                    </li>
                    <li>
                        <h2>IPSUM DOLOR SIT AMET LAT</h2>
                        <h5>Allquam tincidunt mauris cu risus</h5>
                    </li>
                </ul>
            </div>
        </section>
        <script>window.jQuery || document.write('<script src="js/libs/jquery-1.7.min.js">\x3C/script>')</script>
        <!--FlexSlider-->
        <script defer src="/js/jquery.flexslider.js"></script>
        <script type="text/javascript">
            $(function(){
                SyntaxHighlighter.all();
            });
            $(window).load(function(){
                $('.flexslider').flexslider({
                    animation: "slide",
                    start: function(slider){
                        $('body').removeClass('loading');
                    }
                });
            });
        </script>
    </div>
</div>
<!---->