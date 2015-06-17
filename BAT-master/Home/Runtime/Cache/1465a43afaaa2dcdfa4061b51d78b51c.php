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
		<div class="span3 bs-docs-sidebar">
			<ul class="nav nav-list bs-docs-sidenav affix">
				<li><a href="#time"><i class="icon-chevron-right"></i>获取时间</a></li>
				<li><a href="#random"><i class="icon-chevron-right"></i>随机生成</a></li>
				<li><a href="#lower-upper"><i class="icon-chevron-right"></i>大小写转换</a></li>
				<li><a href="#url"><i class="icon-chevron-right"></i>URL编码</a></li>
				<li><a href="#deal-string"><i class="icon-chevron-right"></i>字符串处理</a></li>
			</ul>
		</div>
		<div class="span9">
			<section id="time">
				<div class="page-header">
					<h1>获取时间</h1>
				</div>
				<h2>__time(format)</h2>
				<p>获取格式化的当前时间</p><p>直接在测试步骤中以${__time(format)}的方式调用</p>
				<h2>参数选项</h2>
				<table class="table table-hover table-condensed table-bordered table-striped">
					<thead>
						<tr>
							<th width="25%">名称</th>
							<th>描述</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>YMD</td>
							<td>年月日:EG:20121212</td>
						</tr>
						<tr>
							<td>HMS</td>
							<td>时分秒:EG:182030</td>
						</tr>
						<tr>
							<td>YMDHMS</td>
							<td>年月日时分秒:EG:20121212182030</td>
						</tr>
						<tr>
							<td>yyyyMMddHHmmssSSS</td>
							<td>精确到微秒</td>
						</tr>
					</tbody>
				</table>
				<div  class="tips">
					<i class="icon-exclamation-sign"></i> 友情提醒，参数间可以添加分隔符，例如：Y-M-D H:M:S 2012-12-12 18:20:30
				</div>
			</section>
			<section id="random">
				<div class="page-header">
					<h1>随机生成</h1>
				</div>
				<h2>__Random(min,max,variable)</h2>
				<p>生成一个随机数</p><p>直接在测试步骤中以${__Random(min,max,variable)}的方式调用</p>
				<h2>参数选项</h2>
				<table class="table table-hover table-condensed table-bordered table-striped">
					<thead>
						<tr>
							<th width="25%">名称</th>
							<th>描述</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>min</td>
							<td>必填，取值范围的最小值，int</td>
						</tr>
						<tr>
							<td>max</td>
							<td>必填，取值范围的最大值，int</td>
						</tr>
						<tr>
							<td>variable</td>
							<td>选填，临时变量名，用来存储函数执行结果</td>
						</tr>
					</tbody>
				</table>
				<hr>
				<h2>__RandomString(length,characters,variable)</h2>
				<p>生成一个随机字符串</p><p>直接在测试步骤中以${__RandomString(length,characters,variable)}的方式调用</p>
				<h2>参数选项</h2>
				<table class="table table-hover table-condensed table-bordered table-striped">
					<thead>
						<tr>
							<th width="25%">名称</th>
							<th>描述</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>length</td>
							<td>必填，指定随机生成字符串的长度，int</td>
						</tr>
						<tr>
							<td>characters</td>
							<td>选填，生成字符串的字符取值范围</td>
						</tr>
						<tr>
							<td>variable</td>
							<td>选填，临时变量名，用来存储函数执行结果</td>
						</tr>
					</tbody>
				</table>
			</section>
			<section id="lower-upper">
				<div class="page-header">
					<h1>大小写转换</h1>
				</div>
				<h2>__lowercase(string,variable)</h2>
				<p>大写转小写</p><p>直接在测试步骤中以${__lowercase(string,variable)}的方式调用</p>
				<h2>参数选项</h2>
				<table class="table table-hover table-condensed table-bordered table-striped">
					<thead>
						<tr>
							<th width="25%">名称</th>
							<th>描述</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>string</td>
							<td>必填，需要转换的字符串，string</td>
						</tr>
						<tr>
							<td>variable</td>
							<td>选填，临时变量名，用来存储函数执行结果</td>
						</tr>
					</tbody>
				</table>
				<hr>
				<h2>__uppercase(string,variable)</h2>
				<p>小写转大写</p>
				<p>直接在测试步骤中以${__uppercase(string,variable)}的方式调用</p>
				<h2>参数选项</h2>
				<table class="table table-hover table-condensed table-bordered table-striped">
					<thead>
						<tr>
							<th width="25%">名称</th>
							<th>描述</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>string</td>
							<td>必填，需要转换的字符串，string</td>
						</tr>
						<tr>
							<td>variable</td>
							<td>选填，临时变量名，用来存储函数执行结果</td>
						</tr>
					</tbody>
				</table>
			</section>
			<section id="url">
				<div class="page-header">
					<h1>URL编码&解码</h1>
				</div>
				<h2>__urlencode(string)</h2>
				<p>url编码，使用 Java class URLEncoder</p><p>直接在测试步骤中以${__urlencode(string)}的方式调用</p>
				<h2>参数选项</h2>
				<table class="table table-hover table-condensed table-bordered table-striped">
					<thead>
						<tr>
							<th width="25%">名称</th>
							<th>描述</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>string</td>
							<td>必填，指定需要编码的字符，string</td>
						</tr>
					</tbody>
				</table>
				<hr>
				<h2>__urldecode(string)</h2>
				<p>URL解码</p><p>直接在测试步骤中以${__urldecode(string)}的方式调用</p>
				<h2>参数选项</h2>
				<table class="table table-hover table-condensed table-bordered table-striped">
					<thead>
						<tr>
							<th width="25%">名称</th>
							<th>描述</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>string</td>
							<td>必填，指定需要编码的字符，string</td>
						</tr>
					</tbody>
				</table>
			</section>
			<section id="deal-string">
				<div class="page-header">
					<h1>字符串处理</h1>
				</div>
				<h2>__substring(string,begin,end,variable)</h2>
				<p>字符串截取</p><p>直接在测试步骤中以${__substring(string,begin,end,variable)}的方式调用</p>
				<h2>参数选项</h2>
				<table class="table table-hover table-condensed table-bordered table-striped">
					<thead>
						<tr>
							<th width="25%">名称</th>
							<th>描述</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>string</td>
							<td>必填，指定需要编码的字符，string</td>
						</tr>
						<tr>
							<td>begin</td>
							<td>必填，截取开始的索引，int</td>
						</tr>
						<tr>
							<td>end</td>
							<td>必填，截取结束的索引，int</td>
						</tr>
						<tr>
							<td>variable</td>
							<td>选填，临时变量名，用来存储函数执行结果</td>
						</tr>
					</tbody>
				</table>
				<hr>
				<h2>__strLen(string,variable)</h2>
				<p>计算字符串长度</p><p>直接在测试步骤中以${__strLen(string,variable)}的方式调用</p>
				<h2>参数选项</h2>
				<table class="table table-hover table-condensed table-bordered table-striped">
					<thead>
						<tr>
							<th width="25%">名称</th>
							<th>描述</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>string</td>
							<td>必填，需要计算长度的原始字符串，string</td>
						</tr>
						<tr>
							<td>variable</td>
							<td>选填，临时变量名，用来存储函数执行结果</td>
						</tr>
					</tbody>
				</table>
				<hr>
			</section>
		</div>
	</div>
</div>
<script type="text/javascript">
	$(document).ready(function(){
		$("#help_page").addClass("active");
		$('.bs-docs-sidenav').scrollspy();
		$(".bs-docs-sidenav li").removeClass("active");
		$(".bs-docs-sidenav li").first().addClass("active");
	});
</script>

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