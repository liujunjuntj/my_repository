<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Baidu API Test</title>
		<link rel="shortcut icon" href="__PUBLIC__/img/favicon.png">
		<link href="__PUBLIC__/css/bootstrap.css" rel="stylesheet">
		<link href="__PUBLIC__/css/docs.css" rel="stylesheet">
		<link href="__PUBLIC__/css/prettify.css" rel="stylesheet">
		<link href="__PUBLIC__/css/common.css" rel="stylesheet">
		<link href="__PUBLIC__/css/page.css" rel="stylesheet">
		<link href="__PUBLIC__/ZTree/css/zTreeStyle/zTreeStyle.css" rel="stylesheet">  
		<script src="__PUBLIC__/js/jquery.js"></script>
		<script src="__PUBLIC__/js/bootstrap.min.js"></script>
		<script src="__PUBLIC__/js/common.js"></script>
		<style type="text/css">
		html{
			height: 101%;
		}
			body {
			padding-top: 60px;
			padding-bottom: 40px;
			}
		</style>
		<script type="text/javascript">
			var URL = "__URL__";
			var APP = "__APP__";
			var ROOT = "__ROOT__";
			var ACTION = "__ACTION__";
		</script>
	</head>
	<body data-spy="scroll" data-target=".bs-docs-sidebar">
		<div class="container-fluid">
			<div class="row-fluid">
				<div class="navbar navbar-inverse navbar-fixed-top">
	<div class="navbar-inner">
		<div class="span10 offset1">
			<button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			</button>
			<a class="brand" href="<?php echo U('Index/index');?>">BAT</a>
			<ul class="nav pull-right">
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown"  id="current_space">欢迎您：<?php echo session('username'); ?><b class="caret"></b></a>
					<ul class="dropdown-menu" >						
						<li><a href="<?php echo U('User/updateInfo');?>">个人资料</a></li>
						<li><a href="<?php echo U('User/updatePwd');?>">密码修改</a></li>
						<li><a href="<?php echo U('Login/loginOut');?>">安全退出</a></li>
					</ul>
				</li>
			</ul>
			<ul class="nav" id="appList">
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" id="current_space" style="width:80px;">
						<?php echo session('appName'); ?><b class="caret"></b>
					</a>
					<ul class="dropdown-menu" id="space_menu"></ul>
				</li>
			</ul>
			<div class="nav-collapse collapse">
				<ul class="nav">
					<li id="index_page"><a href="<?php echo U('Index/index');?>">首页</a></li>
					<li id="api_page" class="login_req"><a href="<?php echo U('Api/alist');?>">API</a></li>
					<li id="data_page" class="login_req"><a href="<?php echo U('Data/dlist');?>">数据</a></li>
					<li id="case_page" class="login_req"><a href="<?php echo U('Case/clist');?>">用例</a></li>
					<li id="plan_page" class="login_req"><a href="<?php echo U('Plan/plist');?>">计划</a></li>
					<li id="project_page" class="login_req dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">项目管理<b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="<?php echo U('User/ulist');?>">用户管理</a></li>
							<li><a href="<?php echo U('App/applist');?>">APP管理</a></li>
							<li><a href="<?php echo U('Module/mlist');?>">模块管理</a></li>
						</ul>
					</li>
					<li id="help_page"><a href="<?php echo U('Help/index');?>">函数帮助</a></li>
				</ul>
			</div>
		</div>
	</div>
</div>
			</div>
			<div class="row-fluid">
				<div class="span10 offset1">
	<div class="span12">
		<ul class="breadcrumb well">
			<li><a href="<?php echo U('Index/index');?>">首页</a> <span class="divider">/</span></li>
			<li><a href="<?php echo U('User/ulist');?>">用户管理</a><span class="divider">/</span></li>
			<li>新增</li>
		</ul>
	</div>
	<div class="span12">
		<form id="user_add_form" class="form-horizontal">
		<div class="span12">
			<div class="control-group span6">
				<label class="control-label"><i class="required">*</i>名称：</label>
				<div class="controls">
					<textarea name="name" rows="1"  class="span11" placeholder="用户名称" required></textarea>
				</div>		
			</div>
			<!-- <div class="control-group span6">
				<label class="control-label"><i class="required">*</i>密码：</label>
				<div class="controls">
					<input name="password" type="password" class="span11"  placeholder="用户密码" required></input>
				</div>	
			</div> -->
			<div class="control-group span6">
				<label class="control-label"><i class="required">*</i>手机：</label>
				<div class="controls">
					<textarea name="phone" rows="1" class="span11" placeholder="用户手机" required onkeyup="value=value.replace(/[^\d]/g,'') "onbeforepaste="clipboardData.setData('text',clipboardData.getData('text').replace(/[^\d]/g,''))"></textarea>
				</div>
			</div>
		</div>
		<div class="span12">				
			<div class="control-group span6">
				<label class="control-label"><i class="required">*</i>邮箱：</label>
				<div class="controls">
					<input name="email" type="email" class="span11" placeholder="用户邮箱" required></input>
				</div>
			</div>
			<div class="control-group span6">
				<label class="control-label"><i class="required">*</i>角色：</label>
				<div class="controls">
				      <select name="role"  class="form-control span11">
				         <option>管理员</option>
				         <option>测试人员</option>
				         <option>开发人员</option>
				      </select>
			      </div>
			</div>	
			
		</div>
		<div class="span12">		
			<div class="control-group span6">
				<label class="control-label"><i class="required">*</i>默认App：</label>
				<div class="controls">					
			      <select name="defaultApp" id ="defaultApp"  class="form-control span11">
			        <?php if(is_array($apps)): $i = 0; $__LIST__ = $apps;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$app): $mod = ($i % 2 );++$i;?><option><?php echo ($app["appName"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
			      </select>
				</div>
			</div>
			<div class="control-group span6">
				<label class="control-label">关联App：</label>
				<div class="controls">
					<select name="addedApps" id="addedApps" class="populate placeholder form-control span11" multiple>
						<?php if(is_array($apps)): $i = 0; $__LIST__ = $apps;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$app): $mod = ($i % 2 );++$i;?><option value="<?php echo ($app["appName"]); ?>"><?php echo ($app["appName"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
					</select>
				</div>
			</div>	
		</div>		
			<div style="text-align:center"><button type="submit" class="btn btn-info">保存</button ></div>
		</form>
		
	</div>
</div>
<script type="text/javascript" src="__PUBLIC__/js/select2.js"></script>
<link rel="stylesheet" type="text/css" href="__PUBLIC__/css/select2.css">
<script src="__PUBLIC__/js/user.js"></script>

			</div>
			<div class="row-fluid">
				<div class="row-fluid footer">
	<footer>
		<div class="container">
			<p >&copy;from  2014 <i class="icon-check"></i>使用中有任何问题请加QQ群咨询:188734537</p>
		</div>
	</footer>
</div>
			</div>
		</div>
		<div class="non">
			<div id="error" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="width:400px;margin-left:-200px;">
				<div class="modal-header alert alert-error">
					<h4 id="myModalLabel">友情提示：</h4>
				</div>
				<div class="modal-body">
					<i class="icon-warning-sign"></i> <span id="error_body"></span>
				</div>
				<div class="modal-footer">
					<button class="btn" data-dismiss="modal" aria-hidden="true">关闭</button>
					<button class="btn btn-primary" id="error_conform" data-dismiss="modal" aria-hidden="true">确认</button>
				</div>
			</div>
		</div>
		<div style="">
			<div class="alert alert-block alert-error" id="errmsg">
			  	<i class="icon-warning-sign"></i><strong>Warning：</strong>
			  	<span></span>
			</div>
		</div>
	</body>
</html>