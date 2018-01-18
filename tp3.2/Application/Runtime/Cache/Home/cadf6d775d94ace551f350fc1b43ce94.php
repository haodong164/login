<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title>分页</title>
</head>
<body>
<h1>分页</h1>
<table style="width:80%;margin:0 auto">
	<tr>
		<th style="text-align:center">ID</th>
		<th style="text-align:center">姓名</th>
		<th style="text-align:center">联系方式</th>
		<th style="text-align:center">性别</th>
	</tr>
	<?php if(is_array($info)): foreach($info as $key=>$vo): ?><tr>
			<td style="text-align:center"><?php echo ($vo["id"]); ?></td>
			<td style="text-align:center"><?php echo ($vo["username"]); ?></td>
			<td style="text-align:center"><?php echo ($vo["telphone"]); ?></td>
			<td style="text-align:center"><?php echo ($vo["sex"]); ?></td>
		</tr><?php endforeach; endif; ?>
	
</table>

<div>
	<a href="<?php echo U('Lists/index',['page'=>$page-1]);?>">上一页</a>
	<?php echo ($pages); ?>
	<?php echo ($page); ?>
	<a href="<?php echo U('Lists/index',['page'=>$page+1]);?>">下一页</a>

</div>


</body>
</html>