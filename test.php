<html>
	<head>
		<title>kkk</title>
		<script type="text/javascript" src="//media.line.me/js/line-button.js?v=20140411" ></script>
		<script type="text/javascript">
			new media_line_me.LineButton({"pc":false,"lang":"zh-hant","type":"a"});		
		</script>
	</head>
	<body>
		<ul>
		
		<?php
			$the_title = "EvaEvaEva";
			$the_permalink = urlencode("http://www.google.com.tw");
		?>
		<!--
		<a href="http://line.me/R/msg/text/?<?=$the_title;?>%0D%0A<?=$the_permalink;?>">
			<img src="line.png" alt="用LINE傳送" />
		</a>-->
		
		
		<li>	
			<a href="#" onclick="javascript:void(window.open('http://line.me/R/msg/text/?'.concat(encodeURIComponent(document.title)).concat(' ').concat(encodeURIComponent(location.href))));" title="分享到我的Line(開新視窗)" >
				<img src="line.png" alt="用LINE傳送" />
			</a>
			<br /><br />
		</li>
		
		<li>
			<a href="#" onclick="javascript:void(window.open('http://www.plurk.com/m?qualifier=shares&content='.concat(encodeURIComponent(location.href)).concat('').concat('&#40;').concat(encodeURIComponent(document.title)).concat('&#41;')));">
				plurk
			</a>
			<br /><br />
		</li>
		<li>
			<?php
				$fb = urlencode("https://www.itri.org.tw/chi/mobile/Messagess/contents.aspx?SiteID=1&MmmID=620602517257465422#");
			?>
			<a href="https://www.facebook.com/sharer/sharer.php?u=<?=$fb;?>" target="_blank">
			  Share on Facebook Ver 1
			</a>
			<br /><br />
		</li>
		<li>
			<a href="https://www.facebook.com/share.php?u=https%3A%2F%2Fwww.itri.org.tw%2Fchi%2Fmobile%2FMessagess%2Fcontents.aspx%3FSiteID%3D1%26MmmID%3D620602517257465422%23" target="_blank">
				Share on Facebook Ver 2
			</a>
			<br /><br />
		</li>
		</ul>
	</body>
</html>