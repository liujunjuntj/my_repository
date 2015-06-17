<?php if (!defined('THINK_PATH')) exit();?>
<div class="accordion-group assert">
	<input type="hidden" name="type" value="2"/>
	<div class="accordion-heading">
		<div class="item_tool">
			<a href="#"><i class="icon-remove" title="删除"></i></a>
			<a href="#"><i class="icon-circle-arrow-down" title="下移"></i></a>
			<a href="#"><i class="icon-circle-arrow-up" title="上移"></i></a>
		</div>
		<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#<?php echo ($step["current"]); ?>">
			断言
		</a>
	</div>
	<div id="<?php echo ($step["current"]); ?>" class="accordion-body collapse">
		<div class="accordion-inner form-horizontal">
			<div class="span12 assert_unit">
				<label class="control-label"><i class="required">*</i>断言内容：</label>
			  	<div class="controls">
			    	<input type="text" class="span11 assert_text" name="assert" placeholder="断言的内容，模糊匹配" value="<?php echo (htmlspecialchars($step["assert"])); ?>">
			    	<div  class="tips">
						<i class="icon-exclamation-sign"></i> 友情提醒，如果内容中（非正则本身）有下列字符，需要转义(不包含逗号)：{,}[,]
					</div>
			  	</div>
			</div>
		</div>
	</div>
</div>