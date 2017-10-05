        <!-- Widget -->
        <div class="col-sm-3 hidden-xs" id="widget">
            <!-- Social Widget -->
            <section class="box wow fadeInDown" data-wow-duration="2s" id="social-widget">
                <h3 class="heading">Social Media</h3>
                <div class="content">
                    <a href="https://www.facebook.com/vision22advertising/" class="facebook">
                        <span class="fa fa-facebook"></span>
                    </a>
                    <a href="https://www.google.com/" class="google">
                        <span class="fa fa-google-plus"></span>
                    </a>
                    <a href="https://www.youtube.com/" class="youtube">
                        <span class="fa fa-youtube"></span>
                    </a>
                    <a href="https://www.instagram.com/" class="instagram">
                        <span class="fa fa-instagram"></span>
                    </a>
                    <a href="https://www.pinterest.com/" class="pinterest">
                        <span class="fa fa-pinterest"></span>
                    </a>
                    <a href="https://www.rss.com/" class="rss">
                        <span class="fa fa-rss"></span>
                    </a>
                </div>
            </section>
            <!--/ Social Widget -->
            <!-- Categories Widget -->
            <section class="box wow fadeInDown" data-wow-duration="2s" id="categories-widget">
                <h3 class="heading">Categories</h3>
                <div class="content">
                    <?php foreach ($categories AS $category) { ?>
                    <a href="<?php echo url('category/' . seo($category->name) . '/' . $category->id); ?>">
                        <span class="name"><?php echo $category->name; ?></span>
                        <span class="total-posts" title="Posts"><?php echo $category->total_posts; ?></span>
                    </a>
                    <?php } ?>
                </div>
            </section>
            <!--/ Categories Widget -->
            
            <!-- Ads Widget -->
            <section id="ads-widget" class="wow fadeInDown" data-wow-duration="2s">
                <?php foreach ($ads AS $ad) { ?>
                <a href="<?php echo $ad->link; ?>" class="ad" target="_blank">
                    <img src="<?php echo assets('images/' . $ad->image); ?>" alt="" />
                </a>
                <?php } ?>
            </section>
            <!--/ Ads Widget -->
        </div>
        <!--/ Widget -->
