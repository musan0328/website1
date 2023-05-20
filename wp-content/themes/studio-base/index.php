<?php get_header(); ?>
<main>
    <div class="topNewsArea">
        <div class="NewsGroup">
            <div class="NewsArea">
                <h2 class="news-text">NEWS</h2>
                <span class="news-subtext">新着情報</span>
            </div>
            <div class="NewsContent">
                <div class="news">
                    <a href="#">
                        <dl class="news-area">
                                <dt class="news-day">2022.05.01</dt>
                                <dt class="news-title">新しいメニューができました。</dt>
                        <dl>
                    </a>
                </div>
                <div class="news">
                    <a href="#">
                        <dl class="news-area">
                                <dt class="news-day">2022.4.10</dt>
                                <dt class="news-title">花見に行きました。</dt>
                        <dl>
                    </a>
                </div>
                <div class="news">
                    <a href="#">
                        <dl class="news-area">
                                <dt class="news-day">2022.1.01</dt>
                                <dt class="news-title">2022年もよろしくお願いします。</dt>
                        <dl>
                    </a>
                </div>
                <div class="news">
                    <a href="#">
                        <dl class="news-area">
                                <dt class="news-day">2022.02.10</dt>
                                <dt class="news-title">節分大会</dt>
                        <dl>
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