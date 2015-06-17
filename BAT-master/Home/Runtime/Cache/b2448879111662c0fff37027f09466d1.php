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
		<ul class="breadcrumb">
			<li><a href="<?php echo U('Index/index');?>">首页</a> <span class="divider">/</span></li>
			<li><a href="<?php echo U('Case/clist');?>">测试用例</a><span class="divider">/</span></li>
			<li>编辑</li>
		</ul>
	</div>
	<div class="span12">
		<ul class="nav nav-tabs">
			<li class="active"><a href="#case_summary" data-toggle="tab">概要信息</a></li>
			<li><a href="#case_detail" data-toggle="tab">用例详情</a></li>
		</ul>
		<div class="form-horizontal">
			<div class="tab-content">
				<div class="tab-pane active" id="case_summary">
					<div class="control-group">
						<label class="control-label"><i class="required">*</i>用例描述：</label>
						<div class="controls">
							<input name="case_desc" type="text" class="span11" placeholder="对该用例的一些描述说明" value="<?php echo (htmlspecialchars($summary["desc"])); ?>" />
						</div>
					</div>
					<div class="control-group">
						<label class="control-label"><i class="required">*</i>用例类型：</label>
						<div class="controls">
							<input type="hidden" name="case_type" value="<?php echo ($summary["type"]); ?>">
							<label class="radio inline">功能<input name="radio_type" type="radio" value="1" /></label>
							<label class="radio inline">异常<input name="radio_type" type="radio" value="2" /></label>
							<label class="radio inline">方法<input name="radio_type" type="radio" value="3" /></label>
							<div style="margin-top:10px;color:#FF8000">
								<i class="icon-exclamation-sign"></i> 类型为功能，方法的用例能被其他CASE引用，方法类型不能单独执行。
							</div>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label"><i class="required">*</i>所属模块：</label>
						<div class="controls">
							<select name="mid" class="span2" value=<?php echo ($summary["mid"]); ?>>
							</select>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label"><i class="required">*</i>并发数量：</label>
						<div class="controls">
							<input name="thread_num" type="text" value="<?php echo (htmlspecialchars($summary["threadNum"])); ?>" readonly="true"/> 注：在做性能测试时才有修改的必要！
						</div>
					</div>
					<div class="control-group">
						<label class="control-label"><i class="required">*</i>启动策略：</label>
						<div class="controls">
							<input name="rampUpPeriod" type="text" value="<?php echo (htmlspecialchars($summary["rampUpPeriod"])); ?>" readonly="true"/> 注：在做性能测试时才有修改的必要！</br>
							<div  class="tips">
								<i class="icon-exclamation-sign"></i> 如果并发数量填写10，启动策略填5，那么每秒递增2个并发用户，10秒后达到10个
							</div>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label"><i class="required">*</i>执行次数：</label>
						<div class="controls">
							<input name="times" type="text" value="1" readonly="true" value="<?php echo (htmlspecialchars($summary["times"])); ?>" /></br>
						</div>
					</div>
					<!-- 
					<div class="control-group">
						<label class="control-label">调试Host：</label>
						<div class="controls">
							<textarea name="debugHost" rows="5" class="span4"/><?php echo (htmlspecialchars($summary["debugHost"])); ?></textarea>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label"><i class="required">*</i>执行时间：</label>
						<div class="controls">
							<input name="run_time" type="text" placeholder="并发执行时间，以秒为单位" value="<?php echo ($summary["runTime"]); ?>"/> 注：在做性能测试时才有修改的必要！
						</div>
					</div>
					<div class="control-group">
						<label class="control-label"><i class="required">*</i>是否监控：</label>
						<div class="controls">
							<label class="radio inline">
								<input type="radio" name="isMonitor" id="options0" value="0" checked>否
							</label>
							<label class="radio inline">
								<input type="radio" name="isMonitor" id="options1" value="1">是
							</label>
						</div>
					</div>
					-->
				</div>
				<input type="hidden" id="update_case_id" value="<?php echo ($summary["id"]); ?>" />
				<div class="tab-pane" id="case_detail">
					<div class="accordion" id="accordion">
						<?php echo ($steps); ?>
					</div>
					<div style="text-align:center" id="case_tool">
						<a href="#add_api_modal" role="button" class="btn btn-warning" data-toggle="modal">
							<i class="icon-plus icon-white"></i>API
						</a>
						<a href="#add_case_modal" role="button" class="btn btn-warning" data-toggle="modal">
							<i class="icon-plus icon-white"></i>用例
						</a>
						<a href="#add_cnp_modal" role="button" class="btn btn-warning" data-toggle="modal">
							<i class="icon-plus icon-white"></i>组件
						</a>
					</div>
				</div>
				<div class="span12">
					<div class="span2 offset5" style="margin-top:15px;"><button class="btn btn-info btn-block" id="update_save_btn">保存</button></div>
				</div>
			</div>
		</div>
		<!-- api model -->
		<div id="add_api_modal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h3 id="myModalLabel">请选择需要添加的API接口</h3>
			</div>
			<div class="modal-body">
				<div class="row-fluid form-inline" style="padding-bottom:15px;">
					<label>PATH：</label>
					<input type="text" id="api_path" placeholder="API路径，支持模糊查询" class="span6" autocomplete="off">
					<button class="btn btn-info" id="api_search">查找</button>
				</div>
				<div id="api_table">
					<table class="table table-hover table-condensed table-bordered table-striped">
						<thead>
							<tr>
								<th width="7%">ID</th>
								<th width="40%">PATH</th>
								<th width="31%">DESC</th>
								<th width="15%">METHOD</th>
								<th width="7%">OP</th>
							</tr>
						</thead>
						<tbody>
							<tr><td colspan="6" style="text-align:center;color:red">请输入API的路径信息进行查询</td></tr>
						</tbody>
					</table>
				</div>
				<div style="text-align:center;color:red">如果返回结果没有匹配项，请尝试更加精确的查询条件</div>
			</div>
		</div>
		<!-- case model -->
		<div id="add_case_modal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h3 id="myModalLabel">请选择需要添加的CASE</h3>
			</div>
			<div class="modal-body">
				<div class="row-fluid form-inline" style="padding-bottom:15px;">
					<label>ID：</label>
					<input type="text" id="case_id" placeholder="只支持id查询" class="span2">
					<label>描述：</label>
					<input type="text" id="case_desc" placeholder="case描述" class="span6">
					<button class="btn btn-info" id="case_search">查找</button>
				</div>
				<div id="case_table">
					<table class="table table-hover table-condensed table-bordered table-striped">
						<thead>
							<tr>
								<th width="10%">ID</th>
								<th>描述</th>
								<th width="7%">OP</th>
							</tr>
						</thead>
						<tbody id="case_body">
							<tr><td colspan="3" style="text-align:center;color:red">请输入用例的ID进行查询</td></tr>
						</tbody>
					</table>
				</div>
				<div style="text-align:center;color:red">如果返回结果没有匹配项，请尝试更加精确的查询条件</div>
			</div>
		</div>
		<!-- conponent model -->
		<div id="add_cnp_modal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h3 id="myModalLabel">请选择需要添加的组件</h3>
			</div>
			<div class="modal-body">
				<div id="api_table">
					<table class="table table-hover table-condensed table-bordered table-striped">
						<thead>
							<tr>
								<th width="30%">名称</th>
								<th width="50%">描述</th>
								<th width="10%">op</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>断言</td>
								<td>根据自定义规则，检查请求的相应内容</td>
								<td><a href="#"><i class="icon-plus add-assert"></i></a></td>
							</tr>
							<tr>
								<td>参数提取器</td>
								<td>用来提取上一个请求的返回数据</td>
								<td><a href="#"><i class="icon-plus add-regex"></i></a></td>
							</tr>
							<tr>
								<td>脚本执行器-BSF</td>
								<td>可以执行javascript或者beanshell脚本</td>
								<td><a href="#"><i class="icon-plus add-bsf"></i></a></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
<script src="__PUBLIC__/js/case.js"></script>
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