<?php get_header(); ?>

<div class="c container" style="margin-top: 10px;">
    <div class="category_title" style="color:skyblue;font-size:26px;font-weight: 700;font-family: cursive;">当前分类：<?php single_cat_title();?></div>
</div>

<!--文章页面-->

 <!-- 判断后台是否有文章，如果有循环输出 -->
    <?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>
<div class="index_content container">
    <div class="indedx_cont_simple">
        <h3><a href="<?php the_permalink() ?>"><?php the_title_attribute(); ?></a></h3>
        <span><?php the_time('F d, Y') ?></span>
        <span>|</span>
        <span><?php the_author_posts_link(); ?></span>
        <span>|</span>
        <span><?php comments_number('No Comment', '1 Comment', '% Comments' );?></span>
        <span><?php the_category(', ') ?></span>
        <p><?php echo mb_strimwidth(strip_tags(get_the_content()),0,300," ");/*the_excerpt();the_content(__('Read more...', 'inove'));*/ ?>
        <!-- <a rel="more-link" href="<?php the_permalink()?>" title="<?php the_title(); ?>">阅读详情...</a> --></p>
        <a href="<?php the_permalink() ?>" class="read_more"> 阅读全文</a>
    </div>
</div>
<!-- 循环结束位置 -->
	<?php endwhile; ?>
	<?php else : ?>
	<?php endif; ?>

    <div class="index_fenye container">
    <?php previous_posts_link('<span class="next">&laquo;上一页 </span>') ?><?php next_posts_link('<span class="previous">下一页&raquo; </span>') ?>
    </div>
<?php get_footer(); ?>