	<footer id="colophon" role="contentinfo">
		<div class="container">
            <p>老司机坚持博客已有：<span id="time-count"></span></p>
            <p>&copy; 2015-<?php echo date('Y'); ?> <a href="<?php echo home_url(); ?>/"><?php //bloginfo('name'); ?>张大侠</a>.由 <a href="http://http://wordpress.org" target="_blank">WordPress</a> 强力驱动.Theme By <a href="https://github.com/zelda/Amativeness" target="_blank">Amativeness</a>.京ICP备15027727号.<script src="https://s11.cnzz.com/z_stat.php?id=1261413711&web_id=1261413711" type="text/javascript"></script></p>

        </div>
	</footer><!-- #colophon -->
</div><!-- #page -->
<!-- 自定义js -->
<script>
    // 博客运行时间
    function siteTime(){
        window.setTimeout("siteTime()", 1000);
        var seconds = 1000;
        var minutes = seconds * 60;
        var hours = minutes * 60;
        var days = hours * 24;
        var years = days * 365;
        var today = new Date();
        var todayYear = today.getFullYear();
        var todayMonth = today.getMonth();
        var todayDate = today.getDate();
        var todayHour = today.getHours();
        var todayMinute = today.getMinutes();
        var todaySecond = today.getSeconds();
        /* Date.UTC() -- 返回date对象距世界标准时间(UTC)1970年1月1日午夜之间的毫秒数(时间戳)
         year - 作为date对象的年份，为4位年份值
         month - 0-11之间的整数，做为date对象的月份
         day - 1-31之间的整数，做为date对象的天数
         hours - 0(午夜24点)-23之间的整数，做为date对象的小时数
         minutes - 0-59之间的整数，做为date对象的分钟数
         seconds - 0-59之间的整数，做为date对象的秒数
         microseconds - 0-999之间的整数，做为date对象的毫秒数 */
        var t1 = Date.UTC(2012,8,16,0,0,0);
        var t2 = Date.UTC(todayYear,todayMonth,todayDate,todayHour,todayMinute,todaySecond);
        var diff = t2-t1;
        var diffYears = Math.floor(diff/years);
        var diffDays = Math.floor((diff/days)-diffYears*365);
        var diffHours = Math.floor((diff-(diffYears*365+diffDays)*days)/hours);
        var diffMinutes = Math.floor((diff-(diffYears*365+diffDays)*days-diffHours*hours)/minutes);
        var diffSeconds = Math.floor((diff-(diffYears*365+diffDays)*days-diffHours*hours-diffMinutes*minutes)/seconds);
        document.getElementById("time-count").innerHTML= diffYears+"年"+diffDays+"天"+diffHours+"小时"+diffMinutes+"分钟"+diffSeconds+"秒";
    }
    siteTime();

    // 链接自动推送By Baidu
    (function(){
        var bp = document.createElement('script');
        var curProtocol = window.location.protocol.split(':')[0];
        if (curProtocol === 'https') {
            bp.src = 'https://zz.bdstatic.com/linksubmit/push.js';        
        }
        else {
            bp.src = 'http://push.zhanzhang.baidu.com/push.js';
        }
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(bp, s);
    })();
</script>
<script src="<?php echo get_template_directory_uri(); ?>/lib/nprogress/nprogress.min.js"></script>
<!--加载进度条-->
<script>
    NProgress.configure({
        showSpinner: false,
        easing: 'ease-out',
        speed: 1000
    });
    NProgress.set(1);
</script>
<script src="<?php echo get_template_directory_uri(); ?>/js/script.js"></script>
<?php wp_footer(); ?>
</body>
</html>