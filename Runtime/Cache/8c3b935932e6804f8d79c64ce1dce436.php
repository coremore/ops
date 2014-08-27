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
        跳转站
    </h4>
</div>
<button type="button" class="btn btn-danger">今日未交</button>
<button type="button" class="btn btn-info">今日已交</button>
<button type="button" class="btn btn-default">跳转统计</button>
<button type="button" class="btn btn-default">站点统计</button>
<button type="button" class="btn btn-default">业务总额</button>
<hr>
<div class="container-fluid">
    <div class="row-fluid">
        <div class="span7">
            <table class="table table-hover table-condensed table-bordered">
                <thead>
                <tr>
                    <th>跳转站</th>
                    <th>发布站</th>
                    <th>版本信息</th>
                    <th>客户归属</th>
                    <th>过滤金额</th>
                    <th>状态</th>
                </tr>
                </thead>
                <tbody>
                <?php if(is_array($filts)): $i = 0; $__LIST__ = $filts;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                        <td><?php echo ($vo["jumpid"]); ?></td>
                        <td><?php echo ($vo["web"]); ?></td>
                        <td><?php echo ($vo["version"]); ?></td>
                        <td><?php echo ($vo["owns"]); ?></td>
                        <td><?php echo ($vo["web"]); ?></td>
                        <td><?php echo ($vo["web"]); ?></td>

                    </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                </tbody>
            </table>
        </div>
        <div class="span5">
                <form class="form-horizontal" method="post" action="__URL__/jumpadd">
                    <fieldset>
                        <div id="legend" class="">
                            <legend class="">提交支付</legend>
                        </div>
                        <div class="control-group">

                            <!-- Text input-->
                            <label class="control-label" for="name">发布站</label>
                            <div class="controls">
                                <input type="text" placeholder="请输入发布站" class="input-xlarge" name="name">
                                <p class="help-block">请输入发布站</p>
                            </div>
                        </div>

                        <div class="control-group">

                            <!-- Text input-->
                            <label class="control-label" for="site">金额</label>
                            <div class="controls">
                                <input type="text" placeholder="请输入上缴金额" class="input-xlarge" name="site">
                                <p class="help-block">请输入上缴金额</p>
                            </div>
                        </div>

                        <div class="control-group">

                            <!-- Button -->
                            <div class="controls">
                                <button class="btn btn-success">提交</button>
                            </div>
                        </div>

                    </fieldset>
                </form>

        </div>
    </div>
</div>
</body>
</html>