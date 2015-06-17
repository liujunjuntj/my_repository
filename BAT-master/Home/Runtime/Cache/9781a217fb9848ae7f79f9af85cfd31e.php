<?php if (!defined('THINK_PATH')) exit();?>
<option></option>
<?php if(is_array($datas)): $i = 0; $__LIST__ = $datas;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?><option value="<?php echo ($data["id"]); ?>"><?php echo ($data["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>