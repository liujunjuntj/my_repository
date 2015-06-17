<?php if (!defined('THINK_PATH')) exit();?>
<div class="accordion-group case">
	<input type="hidden" name="type" value="4"/>
	<input type="hidden" name="id" value="<?php echo ($step["id"]); ?>"/>
	<div class="accordion-heading">
		<div class="item_tool">
			<a href="#"><i class="icon-remove" title="删除"></i></a>
			<a href="#"><i class="icon-circle-arrow-down" title="下移"></i></a>
			<a href="#"><i class="icon-circle-arrow-up" title="上移"></i></a>
		</div>
		<a class="accordion-toggle" href="<?php echo U('Case/update');?>?id=<?php echo ($step["id"]); ?>" target="_blank">
			测试用例 ：ID-<?php echo ($step["id"]); ?> - <?php echo ($step["desc"]); ?>
		</a>
	</div>
</div>