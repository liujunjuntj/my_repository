<?php if (!defined('THINK_PATH')) exit();?>
<div class="accordion-group http">
	<input type="hidden" name="type" value="1"/>
	<input type="hidden" name="id" value="<?php echo ($step["id"]); ?>"/>
	<div class="accordion-heading">
		<div class="item_tool">
			<a href="#"><i class="icon-remove" title="删除"></i></a>
			<a href="#"><i class="icon-circle-arrow-down" title="下移"></i></a>
			<a href="#"><i class="icon-circle-arrow-up" title="上移"></i></a>
		</div>
		<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#<?php echo ($step["current"]); ?>">
			<?php echo ($step["id"]); ?> - <?php echo ($step["path"]); ?> - <?php echo ($step["desc"]); ?>
		</a>
	</div>
	<div id="<?php echo ($step["current"]); ?>" class="accordion-body collapse">
		<div class="accordion-inner form-horizontal">
			<div class="span6">
				<div class="control-group">
				  	<label class="control-label"><i class="required">*</i>域名：</label>
				  	<div class="controls">
				    	<input type="text" name="host" value="<?php echo (htmlspecialchars($step["host"])); ?>" class="span10">
				  	</div>
				  	<label class="control-label"><i class="required">*</i>方法：</label>
				  	<div class="controls">
				    	<input type="text" name="method" value="<?php echo (htmlspecialchars($step["method"])); ?>" class="span10" readonly="readonly">
				  	</div>
				</div>
			</div>
			<div class="span6">
				<label class="control-label"><i class="required">*</i>端口：</label>
			  	<div class="controls">
			    	<input type="text" name="port" value="<?php echo (htmlspecialchars($step["port"])); ?>" class="span10">
			  	</div>
			  	<label class="control-label"><i class="required">*</i>协议：</label>
			  	<div class="controls">
			    	<input type="text" name="protocol" value="<?php echo (htmlspecialchars($step["protocol"])); ?>" class="span10" readonly="readonly">
			  	</div>
			</div>
			<div class="span12">
				<label class="control-label"><i class="required">*</i>路径：</label>
			  	<div class="controls">
			    	<input type="text" name="path" class="span11" value="<?php echo (htmlspecialchars($step["path"])); ?>">
			  	</div>
			  	<label class="control-label">参数：</label>
			  	<div class="controls">
			    	<textarea rows="3" class="span11" name="params"><?php echo ($step["params"]); ?></textarea>
			    	<?php if(!empty($step['diffParam'])): ?><div style="margin-top:10px;color:#FF8000">
							<i class="icon-exclamation-sign"></i> 新增或者删除了部分参数，变更的参数列表：【 <?php echo ($step["diffParam"]); ?> 】,请确认是否需要同步修改
						</div><?php endif; ?>
			  	</div>
			  	<hr/>
			  	<label class="control-label">文件：</label>
			  	<div class="controls">
			  		<input type="text" name="file_path" class="span4" value="<?php echo ($step["file_path"]); ?>" placeholder="文件路径">
			  		&nbsp&nbsp参数名：&nbsp&nbsp&nbsp&nbsp<input type="text" name="file_param" class="span2" value="<?php echo ($step["file_param"]); ?>" placeholder="上传文件参数名">
			  		&nbsp&nbspMIME类型：&nbsp&nbsp&nbsp&nbsp<input type="text" name="mime_type" class="span3" value="<?php echo ($step["mime_type"]); ?>"  placeholder="MIME类型">
			  	</div>
			</div>
		</div>
	</div>
</div>