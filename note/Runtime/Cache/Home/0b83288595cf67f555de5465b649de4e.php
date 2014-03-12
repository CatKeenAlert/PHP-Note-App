<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
	<title>编辑</title>
	<!--<link rel="stylesheet" href="/note/Public/Css/index.css" />-->
</head>
<body>
<h1>修改</h1>
<?php if(is_array($editNote)): $i = 0; $__LIST__ = $editNote;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i; echo ($item["username"]); ?> ...... <?php echo ($item["content"]); ?>



	<div id='send-form'>
		<form method="post" action="/note/index.php/Home/Note/updateNote" name='fmNote'>
			<p>
				<input type="hidden" name="id" value="<?php echo ($item["id"]); ?>" />
				<label for="username">昵称：</label>
				<input type="text" name='username' id='username' value="<?php echo ($item["username"]); ?>"/>
			</p>
			<p>
				<label for="content">内容：(您还可以输入&nbsp;<span id='font-num'>50</span>&nbsp;个字)</label>
				<textarea name="content" id='content'><?php echo ($item["content"]); ?></textarea>
				<div id='phiz'>
					<img src="/note/Public/Images/phiz/zhuakuang.gif" alt="抓狂" />
					<img src="/note/Public/Images/phiz/baobao.gif" alt="抱抱" />
					<img src="/note/Public/Images/phiz/haixiu.gif" alt="害羞" />
					<img src="/note/Public/Images/phiz/ku.gif" alt="酷" />
					<img src="/note/Public/Images/phiz/xixi.gif" alt="嘻嘻" />
					<img src="/note/Public/Images/phiz/taikaixin.gif" alt="太开心" />
					<img src="/note/Public/Images/phiz/touxiao.gif" alt="偷笑" />
					<img src="/note/Public/Images/phiz/qian.gif" alt="钱" />
					<img src="/note/Public/Images/phiz/huaxin.gif" alt="花心" />
					<img src="/note/Public/Images/phiz/jiyan.gif" alt="挤眼" />
				</div>
			</p>
			<!--<span id='send-btn'></span>-->
			<input class="send-btn1" type="submit" id="btnSubmit" value="修改" />

		</form>
	</div><?php endforeach; endif; else: echo "" ;endif; ?>

</body>
</html>