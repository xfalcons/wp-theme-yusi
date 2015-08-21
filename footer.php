</section>
<footer class="footer">
    <div class="footer-inner">
        <div class="copyright pull-left">
         <a href="<?php echo get_option('home'); ?> " title="<?php bloginfo('name'); ?>"><?php bloginfo('name'); ?></a> 版权所有，保留一切权利   ·   基于<a href="http://www.2zzt.com" title="WordPress">WordPress</a>构建   © 2011-2014  ·   托管于 <a rel="nofollow" target="_blank" href="http://www.2zzt.com/go/aliyun">阿里云主机</a> & <a rel="nofollow" target="_blank" href="http:///www.2zzt.com/go/qiniu">七牛云存储</a>
        </div>
        <div class="trackcode pull-right">
            <?php if( dopt('d_track_b') ) echo dopt('d_track'); ?>
        </div>
    </div>
</footer>

<?php 
wp_footer(); 
global $dHasShare; 
if($dHasShare == true){ 
	echo'<script>with(document)0[(getElementsByTagName("head")[0]||body).appendChild(createElement("script")).src="http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion="+~(-new Date()/36e5)];</script>';
}  
if( dopt('d_footcode_b') ) echo dopt('d_footcode'); 
?>
</body>
</html>