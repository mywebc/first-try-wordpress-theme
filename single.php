<?php get_header(); ?>

<!--文章页面-->
 <!-- 判断后台是否有文章，如果有循环输出 -->
    <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
 <div class="single_content container">
        <h1><?php the_title_attribute(); ?></h1>
        <div class="single_date">
            <span><?php the_time('F d, Y') ?></span>
            <span>|</span>
            <span><?php the_author_posts_link(); ?></span>
            <span>|</span>
            <span><?php comments_number('No Comment', '1 Comment', '% Comments' );?></span>
            <span><?php the_category(', ') ?></span>
        </div>
        <p>   <?php the_content("Read More..."); ?></p>
        
            <div class="previous_post container">
                <?php previous_post_link('上一篇：%link');?>
                <?php next_post_link('下一篇:%link');?>
            </div>
             <?php comments_template(); ?>
              </div>
<!-- 循环结束位置 -->
    <?php endwhile; ?>
        


    <?php else : ?>
    <?php endif; ?>


<?php get_footer(); ?>