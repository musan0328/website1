<?php get_header(); ?>
<main>
    <div class="top-main">
        <div class="top-main-area">
            <div class="main-visual">
                <div class="main-text-viarea">
                    <div class="main-text-area">
                        <h1>
                            <span class="topMvText">新鮮で</span>
                            <span class="topMvText">真心込めた</span>
                            <span class="topMvText">お米屋です</span>
                        </h1>
                    </div>
                </div>
                <div class="top-image-sign-area">
                    <div class="top-img-sign">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/onigiri_shop.png" alt="おにぎり屋" class="main-icon-shop">
                    </div>
                </div>
                <div>
                    <div>
                        <!-- slickで画像スライドする -->
                        <div><img src="<?php echo get_template_directory_uri(); ?>/images/tanbo.png" alt="メインビジュアル配置" class="main-visual-top"></div>
                    </div>
                </div>
                <div class="topAdb">
                    <h2 class="topAdb-title">デザインに美しさと機能性を</h2>
                    <p class="topAbd-text">
                        真心込めて作ったおにぎりはいかが? <br class="pc_only">
                        美味しいおにぎりのために私たちはおにぎりの素材はもちろん、<br class="pc_only">
                        製造方法にもこだわりをもっています。
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="topNewsArea">
        <div class="NewsGroup">
            <div class="NewsArea">
                <h2 class="news-text">NEWS</h2>
                <span class="news-subtext">新着情報</span>
            </div>
            <div class="NewsContent">
                <div class="news">
                        <a href="#" class="news-link">
                            <div class="news-area">
                                    <p class="news-day">2022.05.01</dt>
                                    <p class="news-title">新しいメニューができました。</dt>
                            </div>
                        </a>
                </div>
                <div class="news">
                    <a href="#" class="news-link">
                        <div class="news-area">
                                <p class="news-day">2022.4.10</dt>
                                <p class="news-title">花見に行きました。</dt>
                        </div>
                    </a>
                </div>
                <div class="news">
                    <a href="#" class="news-link">
                        <div class="news-area">
                                <p class="news-day">2022.1.01</dt>
                                <p class="news-title">2022年もよろしくお願いします。</dt>
                        </div>
                    </a>
                </div>
                <div class="news">
                    <a href="#" class="news-link">
                        <div class="news-area">
                                <p class="news-day">2022.02.10</dt>
                                <p class="news-title">節分大会</dt>
                        </div>
                    </a>
                </div>
           </div>
      </div>
    </div>
    
    <!-- 投稿した記事を取得する -->
    <?php if(have_posts()): while (have_posts()):the_post(); ?>
        <li class="">
            <a href="<?php the_permalink(); ?>" class="" title="<?php the_title(); ?>"></a>
        </li>
    <?php endwhile; endif; ?>
</main>
<?php get_footer(); ?>