<?php /*a:4:{s:81:"E:\Code\github\passivescan\pbscan_web\application\admin\view\admin\adminlist.html";i:1546848665;s:78:"E:\Code\github\passivescan\pbscan_web\application\admin\view\public\_head.html";i:1546854924;s:78:"E:\Code\github\passivescan\pbscan_web\application\admin\view\public\_left.html";i:1546851568;s:76:"E:\Code\github\passivescan\pbscan_web\application\admin\view\public\_js.html";i:1543071388;}*/ ?>
<!DOCTYPE html>
<html lang="zh">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>pbscan 管理后台</title>
    <link rel="shortcut icon" href="/static/admin/img/logo.jpg" type="image/x-icon">
    <link href="https://cdn.bootcss.com/limonte-sweetalert2/7.28.11/sweetalert2.css" rel="stylesheet">
    <link href="https://cdn.bootcss.com/limonte-sweetalert2/7.28.11/sweetalert2.min.css" rel="stylesheet">

    <script src="https://cdn.bootcss.com/limonte-sweetalert2/7.28.11/sweetalert2.all.js"></script>
    <script src="https://cdn.bootcss.com/limonte-sweetalert2/7.28.11/sweetalert2.all.min.js"></script>
    <script src="https://cdn.bootcss.com/limonte-sweetalert2/7.28.11/sweetalert2.js"></script>
    <script src="https://cdn.bootcss.com/limonte-sweetalert2/7.28.11/sweetalert2.min.js"></script>
    <link href="/static/admin/css/bootstrap.min.css" rel="stylesheet" />
    <link href="/static/admin/css/font-awesome.min.css" rel="stylesheet" />
    <link href="/static/admin/css/weather-icons.min.css" rel="stylesheet" />
    <link id="beyond-link" href="/static/admin/css/beyond.min.css" rel="stylesheet" type="text/css" />
</head>
<body>
<!-- Loading Container -->
<div class="loading-container">
    <div class="loader"></div>
</div>
<!--  /Loading Container -->
<!-- Navbar -->
<div class="navbar">
    <div class="navbar-inner">
        <div class="navbar-container">
            <!-- Navbar Barnd -->
            <div class="navbar-header pull-left">
                <a href="#" class="navbar-brand">
                    <small style="line-height: 40px;">pbscan 管理后台</small>
                </a>
            </div>
            <!-- /Navbar Barnd -->
            <!-- Sidebar Collapse -->
            <div class="sidebar-collapse" id="sidebar-collapse">
                <i class="collapse-icon fa fa-bars"></i>
            </div>
            <!-- /Sidebar Collapse -->
            <!-- Account Area and Settings --->
            <div class="navbar-header pull-right">
                <div class="navbar-account">
                    <ul class="account-area">
                        <li>
                            <a class="login-area dropdown-toggle" data-toggle="dropdown">
                                <div class="avatar" title="View your public profile">
                                    <img src="/static/admin/img/logo.jpg">
                                </div>
                                <section>
                                    <h2><span class="profile"><span><?php echo session('admin.username'); ?></span></span></h2>
                                </section>
                            </a>
                            <!--Login Area Dropdown-->
                            <ul class="pull-right dropdown-menu dropdown-arrow dropdown-login-area">
                                <li class="username"><a><?php echo session('admin.username'); ?></a></li>
                                <li class="email"><a>leruge@163.com</a></li>
                                <!--Avatar Area-->
                                <!--<li>-->
                                    <!--<div class="avatar-area">-->
                                        <!--<img src="/static/admin/img/logo.jpg" class="avatar" width="30">-->
                                        <!--<span class="caption">个人头像</span>-->
                                    <!--</div>-->
                                <!--</li>-->
                                <!--Avatar Area-->
                                <li class="edit">
                                    <a href="profile.html" class="pull-left">个人资料</a>
                                    <a href="#" class="pull-left">个人设置</a>
                                </li>
                                <!--Theme Selector Area-->
                                <li class="theme-area">
                                    <ul class="colorpicker" id="skin-changer">
                                        <li><a class="colorpick-btn" href="#" style="background-color:#5DB2FF;" rel="/static/admin/css/skins/blue.min.css"></a></li>
                                        <li><a class="colorpick-btn" href="#" style="background-color:#2dc3e8;" rel="/static/admin/css/skins/azure.min.css"></a></li>
                                        <li><a class="colorpick-btn" href="#" style="background-color:#03B3B2;" rel="/static/admin/css/skins/teal.min.css"></a></li>
                                        <li><a class="colorpick-btn" href="#" style="background-color:#53a93f;" rel="/static/admin/css/skins/green.min.css"></a></li>
                                        <li><a class="colorpick-btn" href="#" style="background-color:#FF8F32;" rel="/static/admin/css/skins/orange.min.css"></a></li>
                                        <li><a class="colorpick-btn" href="#" style="background-color:#cc324b;" rel="/static/admin/css/skins/pink.min.css"></a></li>
                                        <li><a class="colorpick-btn" href="#" style="background-color:#AC193D;" rel="/static/admin/css/skins/darkred.min.css"></a></li>
                                        <li><a class="colorpick-btn" href="#" style="background-color:#8C0095;" rel="/static/admin/css/skins/purple.min.css"></a></li>
                                        <li><a class="colorpick-btn" href="#" style="background-color:#0072C6;" rel="/static/admin/css/skins/darkblue.min.css"></a></li>
                                        <li><a class="colorpick-btn" href="#" style="background-color:#585858;" rel="/static/admin/css/skins/gray.min.css"></a></li>
                                        <li><a class="colorpick-btn" href="#" style="background-color:#474544;" rel="/static/admin/css/skins/black.min.css"></a></li>
                                        <li><a class="colorpick-btn" href="#" style="background-color:#001940;" rel="/static/admin/css/skins/deepblue.min.css"></a></li>
                                    </ul>
                                </li>
                                <!--/Theme Selector Area-->
                                <li class="dropdown-footer">
                                    <a href="#" id="logout">退出</a>
                                </li>
                            </ul>
                            <!--/Login Area Dropdown-->
                        </li>
                        <!-- /Account Area -->
                        <!--Note: notice that setting div must start right after account area list.
                        no space must be between these elements-->
                        <!-- Settings -->
                    </ul>
                    <div class="setting">
                        <a id="btn-setting" title="Setting" href="#">
                            <i class="icon glyphicon glyphicon-cog"></i>
                        </a>
                    </div>
                    <div class="setting-container">
                        <label>
                            <input type="checkbox" id="checkbox_fixednavbar">
                            <span class="text">头部固定</span>
                        </label>
                        <label>
                            <input type="checkbox" id="checkbox_fixedsidebar">
                            <span class="text">菜单固定</span>
                        </label>
                    </div>
                    <!-- Settings -->
                </div>
            </div>
            <!-- /Account Area and Settings -->
        </div>
    </div>
</div>
<!-- Main Container -->
<div class="main-container container-fluid">
    <!-- Page Container -->
    <div class="page-container">

        <!-- Page Sidebar -->
        <div class="page-sidebar" id="sidebar">
    <ul class="nav sidebar-menu">
        <li class="active">
            <a href="/index">
                <i class="menu-icon glyphicon glyphicon-home"></i>
                <span class="menu-text">前台首页</span>
            </a>
        </li>

        <li>
            <a href="#" class="menu-dropdown">
                <i class="menu-icon glyphicon glyphicon glyphicon-user"></i>
                <span class="menu-text">漏洞管理</span>
                <i class="menu-expand"></i>
            </a>
            <ul class="submenu">
                <li>
                    <a href="<?php echo url('admin/result/index'); ?>">
                        <span class="menu-text">我的漏洞</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo url('admin/result/history'); ?>">
                        <span class="menu-text">扫描历史</span>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#" class="menu-dropdown">
                <i class="menu-icon glyphicon glyphicon glyphicon-send"></i>
                <span class="menu-text">管理员管理</span>
                <i class="menu-expand"></i>
            </a>
            <ul class="submenu">
                <li>
                    <a href="/admin/admin/index">
                        <span class="menu-text">管理员列表</span>
                    </a>
                </li>
                <li>
                    <a href="/admin/admin/add">
                        <span class="menu-text">管理员添加</span>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#">
                <i class="menu-icon glyphicon glyphicon-cog"></i>
                <span class="menu-text">系统设置</span>
            </a>
        </li>
    </ul>
</div>

<
</div>
        <!-- /Page Sidebar -->
        <!-- Page Content -->
        <div class="page-content">
            <!-- Page Breadcrumb -->
            <div class="page-breadcrumbs">
                <ul class="breadcrumb">
                    <li class="active">
                        <i class="fa fa-home"></i>&nbsp;栏目管理
                    </li>
                    <li>栏目列表</li>
                </ul>
            </div>
            <!-- /Page Breadcrumb -->
            <!-- Page Body -->
            <div class="page-body">
                <a href="/admin/admin/add" class="btn btn-sm btn-primary"><i class="fa fa-plus"></i>&nbsp;管理员添加</a>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="widget">
                            <div class="widget-header">
                                <span class="widget-caption">管理员管理</span>
                                <div class="widget-buttons">
                                    <?php echo $admins->render(); ?>
                                </div>
                            </div>
                            <div class="widget-body">
                                <table class="table table-hover table-bordered">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Token</th>
                                        <th>用户名</th>
                                        <th>邮箱</th>
                                        <th>状态</th>
                                        <th>操作</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php if(is_array($admins) || $admins instanceof \think\Collection || $admins instanceof \think\Paginator): $i = 0; $__LIST__ = $admins;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;if(session('admin.id') == 1): ?>
                                    <tr>
                                        <td><?php echo htmlentities($vo['id']); ?></td>
                                        <td><?php echo htmlentities($vo['token']); ?></td>
                                        <td><?php echo htmlentities($vo['username']); ?></td>
                                        <td><?php echo htmlentities($vo['email']); ?></td>
                                        <td><?php if($vo['status'] == 1): if($vo['id'] == 1): ?>超级管理员
                                            <?php else: ?>普通管理员
                                            <?php endif; else: ?>禁用
                                            <?php endif; ?></td>
                                        <td>
                                            <?php if($vo['id'] != 1): if($vo['status'] == 0): ?>
                                            <a href="#" class="btn btn-success btn-xs admin-status" dataid="<?php echo htmlentities($vo['id']); ?>" statusid="<?php echo htmlentities($vo['status']); ?>">启用</a>
                                            <?php else: ?>
                                            <a href="#" class="btn btn-success btn-xs admin-status" dataid="<?php echo htmlentities($vo['id']); ?>" statusid="<?php echo htmlentities($vo['status']); ?>">禁用</a>
                                            <?php endif; ?>
                                            <?php endif; ?>
                                            <!--<a href="<?php echo url('/admin/admin/edit',['id'=>$vo['id']]); ?>" class="btn btn-azure btn-xs">编辑1</a>-->
                                            <?php if($vo['id'] == 1): ?>
                                                <a href="#" class="btn btn-danger btn-xs">Forbidden</a>
                                            <?php else: ?>
                                            <a href="#" class="btn btn-danger btn-xs delete"  dataid="<?php echo htmlentities($vo['id']); ?>">删除</a>
                                            <?php endif; ?>
                                        </td>
                                    </tr>
                                    <?php else: if($vo['id'] == session('admin.id')): ?>
                                            <tr>
                                                <td><?php echo htmlentities($vo['id']); ?></td>
                                                <td><?php echo htmlentities($vo['username']); ?></td>
                                                <td><?php echo htmlentities($vo['email']); ?></td>
                                                <td>
                                                    <?php if($vo['status'] == 1): ?>普通管理员<?php else: ?>禁用<?php endif; ?>
                                                </td>
                                                <td>
                                                    <a href="#" class="btn btn-azure btn-xs">Forbidden</a>
                                                    <!--<a href="<?php echo url('/admin/admin/edit',['id'=>$vo['id']]); ?>" class="btn btn-azure btn-xs">编辑</a>-->
                                                </td>
                                            </tr>
                                        <?php endif; ?>
                                    <?php endif; ?>
                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Page Body -->
        </div>
        <!-- /Page Content -->

    </div>
    <!-- /Page Container -->
    <!-- Main Container -->

</div>

<script src="/static/admin/js/skins.min.js"></script>
<!--Basic Scripts-->
<script src="/static/admin/js/jquery.min.js"></script>
<script src="/static/admin/js/bootstrap.min.js"></script>
<script src="/static/admin/js/slimscroll/jquery.slimscroll.min.js"></script>
<!--Beyond Scripts-->
<script src="/static/admin/js/beyond.js"></script>
<script src="/static/lib/layer/layer.js"></script>
<script>
    $(window).bind("load", function () {

        /*Sets Themed Colors Based on Themes*/
        themeprimary = getThemeColorFromCss('themeprimary');
        themesecondary = getThemeColorFromCss('themesecondary');
        themethirdcolor = getThemeColorFromCss('themethirdcolor');
        themefourthcolor = getThemeColorFromCss('themefourthcolor');
        themefifthcolor = getThemeColorFromCss('themefifthcolor');

    });

    $("#logout").click(function () {
        $.ajax({
            url:"/admin/home/logout",
            type:"post",
            dataType:"json",
            success:function(data){
                layer.msg(data.msg,{
                    icon:6,
                    time:2000
                },function(){
                    location.href=data.url;
                });
            }
        });
    });
</script>
<script>
    $(function () {
        $('.pagination').addClass('pagination-sm');

        $('.admin-status').click(function () {
            var id = $(this).attr('dataid');
            var status = $(this).attr('statusid');
            if (status == 1) {
                var msg = '确定禁用吗？';
            }else {
                var msg = '确定启用吗？';
            }
            layer.confirm(msg, {
                title:'状态操作',
                icon:3
            }, function (index) {
                layer.close(index);
                $.ajax({
                    url:"<?php echo url('admin/admin/adminstatus'); ?>",
                    type:'post',
                    data:{id:id, status:status},
                    dataType:'json',
                    success:function (data) {
                        if (data.code == 1) {
                            layer.msg(data.msg, {
                                icon:6,
                                time:1000
                            }, function () {
                                location.href = data.url;
                            });
                        }else {
                            layer.open({
                                title:'操作失败',
                                content:data.msg,
                                icon:5,
                                anim:6
                            });
                        }
                    }
                });
            });
            return false;
        });

        $('.delete').click(function () {
            var id = $(this).attr('dataid');
            layer.confirm('确定删除吗？', {
                title:'删除管理员',
                icon:3,
                anim:6
            }, function (index) {
                layer.close(index);
                $.ajax({
                    url:"/admin/admin/delete",
                    type:'post',
                    data:{id:id},
                    dataType:'json',
                    success:function (data) {
                        if (data.code == 1) {
                            layer.msg(data.msg, {
                                icon:6,
                                time:1000
                            }, function () {
                                location.href = data.url;
                            });
                        }else {
                            layer.open({
                                title:'操作失败',
                                content:data.msg,
                                icon:5,
                                anim:6
                            });
                        }
                    }
                });
            });
            return false;
        });
    });
</script>
</body>
<!--  /Body -->
</html>
