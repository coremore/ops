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
<div class="container-fluid">
    <div class="row-fluid">
        <div class="span6">
            <table class="table table-hover table-condensed table-bordered">
                <thead>
                <tr>
                    <th>id</th>
                    <th>名称</th>
                    <th>网址</th>
                    <th>管理</th>
                </tr>
                </thead>
                <tbody>
                <?php if(is_array($jump)): $i = 0; $__LIST__ = $jump;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                        <td><?php echo ($vo["id"]); ?></td>
                        <td><?php echo ($vo["name"]); ?></td>
                        <td><?php echo ($vo["site"]); ?></td>
                        <td><a href="__URL__/jump/id/<?php echo ($vo["id"]); ?>"> <button type="button" class="btn btn-primary">编辑</button></a>
                            <a href="__URL__/jumpdelete/id/<?php echo ($vo["idsss"]); ?>"><button type="button" class="btn btn-danger"> 删除</button></a></td>
                    </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                </tbody>
            </table>
        </div>
        <div class="span6">
            <?php if($id): ?><form class="form-horizontal" method="post" action="__URL__/jumpupdate">
                    <fieldset>
                        <div id="legend" class="">
                            <legend class=""><a href="__URL__/jump">返回添加</a> </legend>
                        </div>
                        <div class="control-group">
                            <!-- Text input-->
                            <label class="control-label" for="name">跳转站</label>
                            <div class="controls">
                                <input type="text" value="<?php echo ($jumpupdate[0]["name"]); ?>" class="input-xlarge" name="name">
                                <p class="help-block">请输入发跳转站名称</p>
                            </div>
                        </div>

                        <div class="control-group">

                            <!-- Text input-->
                            <label class="control-label" for="site">网址</label>
                            <div class="controls">
                                <input type="text" value="<?php echo ($jumpupdate[0]["site"]); ?>" class="input-xlarge" name="site">
                                <p class="help-block">请输入跳转站网址</p>
                            </div>
                            <INPUT type="hidden" name="id" value="<?php echo ($jumpupdate[0]["id"]); ?>">
                        </div>

                        <div class="control-group">

                            <!-- Button -->
                            <div class="controls">
                                <button class="btn btn-success">提交</button>
                            </div>
                        </div>

                    </fieldset>
                </form>
                <?php else: ?>
                <form class="form-horizontal" method="post" action="__URL__/jumpadd">
                    <fieldset>
                        <div id="legend" class="">
                            <legend class="">添加跳转站</legend>
                        </div>
                        <div class="control-group">

                            <!-- Text input-->
                            <label class="control-label" for="name">跳转站</label>
                            <div class="controls">
                                <input type="text" placeholder="请输入发布站名称" class="input-xlarge" name="name">
                                <p class="help-block">请输入发跳转站名称</p>
                            </div>
                        </div>

                        <div class="control-group">

                            <!-- Text input-->
                            <label class="control-label" for="site">网址</label>
                            <div class="controls">
                                <input type="text" placeholder="placeholder" class="input-xlarge" name="site">
                                <p class="help-block">请输入跳转站网址</p>
                            </div>
                        </div>

                        <div class="control-group">

                            <!-- Button -->
                            <div class="controls">
                                <button class="btn btn-success">提交</button>
                            </div>
                        </div>

                    </fieldset>
                </form><?php endif; ?>

        </div>
    </div>
</div>
</body>
</html>