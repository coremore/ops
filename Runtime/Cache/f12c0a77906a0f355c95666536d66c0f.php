<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
    <title>Filter</title>
    <!--<link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.2.0/css/bootstrap.min.css">-->
<!--<link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">-->
<!--<script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>-->
<!--<script src="http://cdn.bootcss.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>-->
<link href="http://cdn.bootcss.com/twitter-bootstrap/2.0.4/css/bootstrap.min.css" rel="stylesheet">
<link href="http://cdn.bootcss.com/twitter-bootstrap/2.0.4/css/bootstrap-responsive.min.css" rel="stylesheet">
<script src="http://cdn.bootcss.com/jquery/1.9.1/jquery.min.js"></script>
<script src="http://cdn.bootcss.com/twitter-bootstrap/2.0.4/bootstrap.min.js"></script>
</head>
<body>
<!--<div class="container">-->
    <!--<div class="row">-->
        <!--<div class="span8">-->
            <!--<ul class="breadcrumb">-->
                <!--<li class="active"><a href="__URL__">过滤表</a></li>-->
                <!--<li class="active"><a href="__URL__/jump">跳转站</a></li>-->
                <!--<li class="active"><a href="__URL__/web">发布站</a></li>-->
                <!--<li class="active"><a href="__URL__/ispay">过滤金额</a></li>-->
            <!--</ul>-->
        <!--</div>-->
    <!--</div>-->
<!--</div>-->

<ul class="breadcrumb">
    <li>
        <a href="__URL__">过滤表</a> <span class="divider">/</span>
    </li>
    <li>
        <a href="__URL__/jump">跳转站</a> <span class="divider">/</span>
    </li>
    <li>
        <a href="__URL__/web">发布站</a> <span class="divider">/</span>
    </li>
    <li>
        <a href="__URL__/ispay">过滤金额</a> <span class="divider">/</span>
    </li>
</ul>
<div class="alert alert-success">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <h4>
        过滤表
    </h4>
</div>
<table class="table table-hover table-condensed table-bordered">
    <caption></caption>
    <thead>
    <tr>
        <th>跳转站</th>
        <th>发布站</th>
        <th>版本信息</th>
        <th>客户归属</th>
    </tr>
    </thead>
    <tbody>
    <?php if(is_array($filts)): $i = 0; $__LIST__ = $filts;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
        <td><?php echo ($vo["name"]); ?></td>
        <td><?php echo ($vo["web"]); ?></td>
        <td><?php echo ($vo["version"]); ?></td>
        <td><?php echo ($vo["owns"]); ?></td>
    </tr><?php endforeach; endif; else: echo "" ;endif; ?>
    </tbody>
</table>
</body>
</html>