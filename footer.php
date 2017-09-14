<!--页脚-->
<div class="index_footer clearfix">
    <div class="index_footer_foot container">
       <div class="footer_tag">
            <div class="tag_left fl">标签云：</div>
            <div class="tag_right fl"><?php wp_tag_cloud('smallest=8&largest=36&'); ?></div>
       </div>

        <div class="footer_connect">
            <div class="connect_left fl">联系：</div>
            <div class="connect_right fl">2524729719</div>
        </div>

        <div class="link">
           <div class="link_left fl">link:</div>
           <div class="link_right fl"><?php wp_tag_cloud('smallest=8&largest=36&'); ?></div>
        </div>

    </div>
</div>
<div class="introduce">
    @copyright陈晓拉尼个人博客
</div>

<script>
//    <!--轮播图-->
$(function(e) {
    $('.banner').unslider({
        dots: true,
        delay:2000,
        fluid:true
    });
});
</script>
</body>
</html>