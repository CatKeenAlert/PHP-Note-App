<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>FrankFan Note</title>
	<link rel="stylesheet" href="/note/Public/Css/index.css" />
	<script type="text/javascript" src='/note/Public/Js/jquery-1.7.2.min.js'></script>
	<script type="text/javascript" src='/note/Public/Js/index.js'></script>
</head>
<body>
	<div id='top'>
		<span id='send'></span>
	</div>

	
	
	<!-- 模板 -->
	<?php if(is_array($note)): $i = 0; $__LIST__ = $note;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?><div id='main'>
		<dl class='paper a2'>
			<dt>
				<span class='username'><?php echo ($item["username"]); ?></span>
				<span class='num'><a href="/note/index.php/Home/Note/editNote/noteId/<?php echo ($item["id"]); ?>" title="修改">No.<?php echo ($item["id"]); ?></a></span>
			</dt>
			<dd class='content'><?php echo ($item["content"]); ?></dd>
			<dd class='bottom'>
				<span class='time'><?php echo ($item["time"]); ?></span>
				<a href="/note/index.php/Home/Note/deleteNote/noteId/<?php echo ($item["id"]); ?>" title='删除这条?' class='close'></a>
			</dd>
		</dl>
		 <br/><?php endforeach; endif; else: echo "" ;endif; ?>

	<!-- 暂时注释掉
		<dl class='paper a2'>
			<dt>
				<span class='username'>樊勇</span>
				<span class='num'>No.00001</span>
			</dt>
			<dd class='content'>很好非常好的一个应用很好非常好的一个应用很好非常好的一个应用很好非常好的一个应用</dd>
			<dd class='bottom'>
				<span class='time'>今天08:30</span>
				<a href="" class='close'></a>
			</dd>
		</dl>
		<dl class='paper a3'>
			<dt>
				<span class='username'>樊勇</span>
				<span class='num'>No.00001</span>
			</dt>
			<dd class='content'>很好非常好的一个应用很好非常好的一个应用很好非常好的一个应用很好非常好的一个应用</dd>
			<dd class='bottom'>
				<span class='time'>今天08:30</span>
				<a href="" class='close'></a>
			</dd>
		</dl>
		<dl class='paper a4'>
			<dt>
				<span class='username'>樊勇</span>
				<span class='num'>No.00001</span>
			</dt>
			<dd class='content'>很好非常好的一个应用很好非常好的一个应用很好非常好的一个应用很好非常好的一个应用</dd>
			<dd class='bottom'>
				<span class='time'>今天08:30</span>
				<a href="" class='close'></a>
			</dd>
		</dl>
		<dl class='paper a5'>
			<dt>
				<span class='username'>樊勇</span>
				<span class='num'>No.00001</span>
			</dt>
			<dd class='content'>很好非常好的一个应用很好非常好的一个应用很好非常好的一个应用很好非常好的一个应用</dd>
			<dd class='bottom'>
				<span class='time'>今天08:30</span>
				<a href="" class='close'></a>
			</dd>
		</dl>
	</div>
	-->

	<div id='send-form'>
		<p class='title'><span>TODO List</span><a href="" id='close'></a></p>
		<form method="post" action="/note/index.php/Home/Note/addNote" name='fmNote'>
			<p>
				<label for="username">昵称：</label>
				<input type="text" name='username' id='username'/>
			</p>
			<p>
				<label for="content">内容：(您还可以输入&nbsp;<span id='font-num'>50</span>&nbsp;个字)</label>
				<textarea name="content" id='content'></textarea>
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
			<input class="send-btn" type="submit" id="btnSubmit" value="" />

		</form>
	</div>
<!--[if IE 6]>
    <script type="text/javascript" src="/note/Public/Js/iepng.js"></script>
    <script type="text/javascript">
        DD_belatedPNG.fix('#send,#close,.close','background');
    </script>
<![endif]-->
</body>
</html>