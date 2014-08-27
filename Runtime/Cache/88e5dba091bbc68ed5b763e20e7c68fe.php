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
        发布站
    </h4>
</div>
<div class="container-fluid">
    <div class="row-fluid">
        <div class="span6">
            <table class="table table-hover table-condensed table-bordered">
                <thead>
                <tr>
                    <th>跳转站</th>
                    <th>发布站</th>
                    <th>版本</th>
                    <th>所属</th>
                    <!--<th>管理</th>-->
                </tr>
                </thead>
                <tbody>
                <?php if(is_array($a)): $i = 0; $__LIST__ = $a;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                    <td><?php echo ($vo["name"]); ?></td>
                    <td><?php echo ($vo["web"]); ?></td>
                    <td><?php echo ($vo["version"]); ?></td>
                    <td><?php echo ($vo["owns"]); ?></td>
                    <!--<td><a href="__URL__/web/id/<?php echo ($vo["id"]); ?>"> <button type="button" class="btn btn-primary">编辑</button></a>-->
                        <!--<a href="__URL__/filtsdelete/id/<?php echo ($vo["id"]); ?>"><button type="button" class="btn btn-danger"> 删除</button></a></td>-->
                    <!--</td>-->
                </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                </tbody>
            </table>
        </div>
        <div class="span6">
            <?php if($id): ?><form class="form-horizontal" method="post" action="__URL__/webupdate">
                <fieldset>
                    <div id="legend" class="">
                        <legend class="">更新发布站</legend>
                    </div>
                    <div class="control-group">

                        <!-- Text input-->
                        <label class="control-label" for="web">发布站</label>
                        <div class="controls">
                            <INPUT type="hidden" name="id" value="<?php echo ($filtupdate[0]["id"]); ?>">
                            <input type="text" value="<?php echo ($filtupdate[0]["web"]); ?>" class="input-xlarge" name="web">
                            <p class="help-block">请输入发布站网址</p>
                        </div>
                    </div>

                    <div class="control-group">

                        <!-- Text input-->
                        <label class="control-label" for="version">版本</label>
                        <div class="controls">
                            <input type="text" value="<?php echo ($filtupdate[0]["version"]); ?>" class="input-xlarge" name="version">
                            <p class="help-block">请输入发布站版本</p>
                        </div>
                    </div>

                    <div class="control-group">

                        <!-- Text input-->
                        <label class="control-label" for="owns">所属者</label>
                        <div class="controls">
                            <input type="text" value="<?php echo ($filtupdate[0]["owns"]); ?>" class="input-xlarge" name="owns">
                            <p class="help-block">请输入发布站所属者</p>
                        </div>
                    </div>

                    <div class="control-group">

                        <!-- Select Basic -->
                        <label class="control-label">跳转站</label>
                        <div class="controls">
                            <select class="input-xlarge" name="jumpid">
                                <?php if(is_array($jump)): $i = 0; $__LIST__ = $jump;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$jo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($jo["id"]); ?>"><?php echo ($jo["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                            </select>
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
                <?php else: ?>
                <form class="form-horizontal" method="post" action="__URL__/webadd">
                    <fieldset>
                        <div id="legend" class="">
                            <legend class="">添加发布站</legend>
                        </div>
                        <div class="control-group">

                            <!-- Text input-->
                            <label class="control-label" for="web">发布站</label>
                            <div class="controls">
                                <input type="text" placeholder="请输入发布站网址" class="input-xlarge" name="web">
                                <p class="help-block">请输入发布站网址</p>
                            </div>
                        </div>

                        <div class="control-group">

                            <!-- Text input-->
                            <label class="control-label" for="version">版本</label>
                            <div class="controls">
                                <input type="text" placeholder="placeholder" class="input-xlarge" name="version">
                                <p class="help-block">请输入发布站版本</p>
                            </div>
                        </div>

                        <div class="control-group">

                            <!-- Text input-->
                            <label class="control-label" for="owns">所属者</label>
                            <div class="controls">
                                <input type="text" placeholder="placeholder" class="input-xlarge" name="owns">
                                <p class="help-block">请输入发布站所属者</p>
                            </div>
                        </div>

                        <div class="control-group">

                            <!-- Select Basic -->
                            <label class="control-label">跳转站</label>
                            <div class="controls">
                                <select class="input-xlarge" name="jumpid">
                                    <?php if(is_array($jump)): $i = 0; $__LIST__ = $jump;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$jo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($jo["id"]); ?>"><?php echo ($jo["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                                </select>
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