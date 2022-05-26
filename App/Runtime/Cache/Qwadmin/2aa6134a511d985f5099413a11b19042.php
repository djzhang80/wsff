<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <meta charset="utf-8"/>
    <title><?php echo ($current['title']); ?>-<?php echo (C("sitename")); ?></title>

    <meta name="keywords" content="<?php echo (C("keywords")); ?>"/>
    <meta name="description" content="<?php echo (C("description")); ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0"/>

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.2.0/dist/leaflet.css"
          integrity="sha512-M2wvCLH6DSRazYeZRIm1JnYyh22purTM+FDB5CsyxtQJYeKq83arPe5wgbNmcFXGqiSH2XR8dT/fJISVA1r/zQ=="
          crossorigin=""/>

    <!-- bootstrap & fontawesome -->
    <link rel="stylesheet" href="/wms/Public/qwadmin/css/bootstrap.css"/>
    <link rel="stylesheet" href="/wms/Public/qwadmin/css/font-awesome.css"/>
    <link rel="stylesheet" href="/wms/Public/qwadmin/css/jquery-ui.css"/>
    <link href="/wms/Public/qwadmin/css/chosen.css"  rel="stylesheet">
    <!-- page specific plugin styles -->

    <!-- text fonts -->
    <link rel="stylesheet" href="/wms/Public/qwadmin/css/ace-fonts.css"/>

    <!-- ace styles -->
    <link rel="stylesheet" href="/wms/Public/qwadmin/css/ace.css" class="ace-main-stylesheet" id="main-ace-style"/>

    <!--[if lte IE 9]>
    <link rel="stylesheet" href="/wms/Public/qwadmin/css/ace-part2.css" class="ace-main-stylesheet"/>
    <![endif]-->

    <!--[if lte IE 9]>
    <link rel="stylesheet" href="/wms/Public/qwadmin/css/ace-ie.css"/>


    <link href="/wms/Public/qwadmin/css/ace-rtl.css"  rel="stylesheet">

    <![endif]-->

    <!-- inline styles related to this page -->

    <!-- ace settings handler -->
    <script src="/wms/Public/qwadmin/js/ace-extra.js"></script>

    <!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

    <!--[if lte IE 8]>
    <script src="/wms/Public/qwadmin/js/html5shiv.js"></script>
    <script src="/wms/Public/qwadmin/js/respond.js"></script>
    <![endif]-->


</head>


<style type="text/css">
    #mapid {
        height: 580px;
    }

    .hidediv {
        display: none;
    }
</style>
<body class="no-skin">
    <!-- #section:basics/navbar.layout -->
    <div id="navbar" class="navbar navbar-default">
        <script type="text/javascript">
            try {
                ace.settings.check('navbar', 'fixed')
            } catch (e) {
            }
        </script>

        <div class="navbar-container" id="navbar-container">
            <!-- #section:basics/sidebar.mobile.toggle -->
            <button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
                <span class="sr-only">Toggle sidebar</span>

                <span class="icon-bar"></span>

                <span class="icon-bar"></span>

                <span class="icon-bar"></span>
            </button>

            <!-- /section:basics/sidebar.mobile.toggle -->
            <div class="navbar-header pull-left">
                <!-- #section:basics/navbar.layout.brand -->
                <a href="<?php echo U('index/index');?>" class="navbar-brand">
                    <small>
                        <i class="fa fa-home"></i>
                        <?php echo (C("sitename")); ?>
                    </small>
                </a>

                <!-- /section:basics/navbar.layout.brand -->

                <!-- #section:basics/navbar.toggle -->

                <!-- /section:basics/navbar.toggle -->
            </div>

            <!-- #section:basics/navbar.dropdown -->
            <div class="navbar-buttons navbar-header pull-right" role="navigation">
                <ul class="nav ace-nav">
                    <!-- #section:basics/navbar.user_menu -->
                    <!--
                    <li class="red">
                        <a href="<?php echo U('cache/clear');?>" title="清除缓存" target="_self">
                            <i class="ace-icon fa glyphicon-trash"></i>
                        </a>
                    </li>
                    <li class="red">
                        <a href="/" title="前台首页" target="_blank">
                            <i class="ace-icon fa fa-home"></i>
                        </a>
                    </li>-->
                    <li class="light-blue">
                        <a data-toggle="dropdown" href="#" class="dropdown-toggle">
                            <img class="nav-user-photo" src="<?php if( $user["head"] == '' ): ?>/wms/Public/qwadmin/avatars/avatar2.png
                            <?php else: ?>
                            <?php echo ($user["head"]); endif; ?>" alt="<?php echo ($user["user"]); ?>" />
                            <span class="user-info">
                                <small>欢迎光临，</small>
                                <?php echo ($user["user"]); ?>
                            </span>

                            <i class="ace-icon fa fa-caret-down"></i>
                        </a>

                        <ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
                            <li>
                                <a href="<?php echo U('Setting/Setting');?>">
                                    <i class="ace-icon fa fa-cog"></i>
                                    设置
                                </a>
                            </li>

                            <li>
                                <a href="<?php echo U('Personal/profile');?>">
                                    <i class="ace-icon fa fa-user"></i>
                                    个人资料
                                </a>
                            </li>

                            <li class="divider"></li>

                            <li>
                                <a href="<?php echo U('logout/index');?>">
                                    <i class="ace-icon fa fa-power-off"></i>
                                    退出
                                </a>
                            </li>
                        </ul>
                    </li>

                    <!-- /section:basics/navbar.user_menu -->
                </ul>
            </div>

            <!-- /section:basics/navbar.dropdown -->
        </div><!-- /.navbar-container -->
    </div>

    <!-- /section:basics/navbar.layout -->
<div class="main-container" id="main-container">
    <script type="text/javascript">
        try {
            ace.settings.check('main-container', 'fixed')
        } catch (e) {
        }
    </script>
        <!-- #section:basics/sidebar -->
    <div id="sidebar" class="sidebar responsive">
        <script type="text/javascript">
            try {
                ace.settings.check('sidebar', 'fixed')
            } catch (e) {
            }
        </script>

        <div class="sidebar-shortcuts" id="sidebar-shortcuts">
            <div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
                <button class="btn btn-success btn-base">
                    <i class="ace-icon fa fa-signal"></i>
                </button>

                <button class="btn btn-info">
                    <i class="ace-icon fa fa-pencil"></i>
                </button>

                <!-- #section:basics/sidebar.layout.shortcuts -->
                <button class="btn btn-warning">
                    <i class="ace-icon fa fa-users"></i>
                </button>

                <button class="btn btn-danger">
                    <i class="ace-icon fa fa-cogs"></i>
                </button>

                <!-- /section:basics/sidebar.layout.shortcuts -->
            </div>

            <div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
                <span class="btn btn-success  btn-base"></span>

                <span class="btn btn-info"></span>

                <span class="btn btn-warning"></span>

                <span class="btn btn-danger"></span>
            </div>
        </div><!-- /.sidebar-shortcuts -->

        <ul class="nav nav-list">
            <?php if(is_array($menu)): $i = 0; $__LIST__ = $menu;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><li
                <?php if(($v['id'] == $current['id']) OR ($v['id'] == $current['pid']) OR ($v['id'] == $current['ppid'])): ?>class="active
                    <?php if($current['pid'] != '0'): ?>open<?php endif; ?>
                    "<?php endif; ?>
                >
                <a href="<?php if(empty($v["name"])): ?>#
                <?php else: ?>
                <?php echo U($v['name']); endif; ?>"
                <?php if(!empty($v["children"])): ?>class="dropdown-toggle"<?php endif; ?>
                >
                <i class="<?php echo ($v["icon"]); ?>"></i>
                <span class="menu-text">
                                    <?php echo ($v["title"]); ?>
                                </span>
                <?php if(!empty($v["children"])): ?><b class="arrow fa fa-angle-down"></b><?php endif; ?>
                </a>

                <b class="arrow"></b>
                <?php if(!empty($v["children"])): ?><ul class="submenu">
                        <?php if(is_array($v["children"])): $i = 0; $__LIST__ = $v["children"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vv): $mod = ($i % 2 );++$i;?><li
                            <?php if(($vv['id'] == $current['id']) OR ($vv['id'] == $current['pid'])): ?>class="active
                                <?php if($current['ppid'] != '0'): ?>open<?php endif; ?>
                                "<?php endif; ?>
                            >
                            <a href="<?php if(empty($vv["children"])): echo U($vv['name']);?>
                            <?php else: ?>
                            #<?php endif; ?>"
                            <?php if(!empty($vv["children"])): ?>class="dropdown-toggle"<?php endif; ?>
                            >
                            <i class="<?php echo ($vv["icon"]); ?>"></i>
                            <?php echo ($vv["title"]); ?>
                            <?php if(!empty($vv["children"])): ?><b class="arrow fa fa-angle-down"></b><?php endif; ?>
                            </a>

                            <b class="arrow"></b>
                            <?php if(!empty($vv["children"])): ?><ul class="submenu">
                                    <?php if(is_array($vv["children"])): $i = 0; $__LIST__ = $vv["children"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vvv): $mod = ($i % 2 );++$i;?><li
                                        <?php if($vvv['id'] == $current['id']): ?>class="active"<?php endif; ?>
                                        >
                                        <a href="<?php echo U($vvv['name']);?>">
                                            <i class="<?php echo ($vvv["icon"]); ?>"></i>
                                            <?php echo ($vvv["title"]); ?>
                                        </a>
                                        <b class="arrow"></b>
                                        </li><?php endforeach; endif; else: echo "" ;endif; ?>
                                </ul><?php endif; ?>
                            </li><?php endforeach; endif; else: echo "" ;endif; ?>
                    </ul><?php endif; ?>
                </li><?php endforeach; endif; else: echo "" ;endif; ?>

        </ul><!-- /.nav-list -->

        <!-- #section:basics/sidebar.layout.minimize -->
        <div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
            <i class="ace-icon fa fa-angle-double-left" data-icon1="ace-icon fa fa-angle-double-left"
               data-icon2="ace-icon fa fa-angle-double-right"></i>
        </div>

        <!-- /section:basics/sidebar.layout.minimize -->
        <script type="text/javascript">
            try {
                ace.settings.check('sidebar', 'collapsed')
            } catch (e) {
            }




        </script>
    </div>

    <!-- /section:basics/sidebar -->
    <div class="main-content">
        <div class="main-content-inner">
            <!-- #section:basics/content.breadcrumbs -->
                <div class="breadcrumbs" id="breadcrumbs">
        <script type="text/javascript">
            try {
                ace.settings.check('breadcrumbs', 'fixed')
            } catch (e) {
            }
        </script>

        <ul class="breadcrumb">
            <li>
                <i class="ace-icon fa fa-home home-icon"></i>
                <a href="<?php echo U('index/index');?>">Home</a>
            </li>
            <?php if(isset($current['ptitle'])): ?><li>
                    <a href="#"><?php echo ($current['ptitle']); ?></a>
                </li><?php endif; ?>
            <li class="active"><?php echo ($current['title']); ?></li>
        </ul><!-- /.breadcrumb -->
    </div>

            <!-- /section:basics/content.breadcrumbs -->
            <div class="page-content">

                    <!-- #section:settings.box -->
    <div class="ace-settings-container" id="ace-settings-container">
        <div class="btn btn-app btn-xs btn-warning ace-settings-btn" id="ace-settings-btn">
            <i class="ace-icon fa fa-cog bigger-130"></i>
        </div>

        <div class="ace-settings-box clearfix" id="ace-settings-box">
            <div class="pull-left width-50">
                <!-- #section:settings.skins -->
                <div class="ace-settings-item">
                    <div class="pull-left">
                        <select id="skin-colorpicker" class="hide">
                            <option data-skin="no-skin" value="#438EB9">#438EB9</option>
                            <option data-skin="skin-1" value="#222A2D">#222A2D</option>
                            <option data-skin="skin-2" value="#C6487E">#C6487E</option>
                            <option data-skin="skin-3" value="#D0D0D0">#D0D0D0</option>
                        </select>
                    </div>
                    <span>&nbsp; 选择皮肤</span>
                </div>

                <!-- /section:settings.skins -->

                <!-- #section:settings.navbar -->
                <div class="ace-settings-item">
                    <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-navbar"/>
                    <label class="lbl" for="ace-settings-navbar"> 固定导航条</label>
                </div>

                <!-- /section:settings.navbar -->

                <!-- #section:settings.sidebar -->
                <div class="ace-settings-item">
                    <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-sidebar"/>
                    <label class="lbl" for="ace-settings-sidebar"> 固定侧边栏</label>
                </div>

                <!-- /section:settings.sidebar -->

                <!-- #section:settings.breadcrumbs -->
                <div class="ace-settings-item">
                    <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-breadcrumbs"/>
                    <label class="lbl" for="ace-settings-breadcrumbs"> 固定面包屑</label>
                </div>

                <!-- /section:settings.breadcrumbs -->

                <!-- #section:settings.rtl -->
                <div class="ace-settings-item">
                    <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-rtl"/>
                    <label class="lbl" for="ace-settings-rtl"> 切换至左边</label>
                </div>

                <!-- /section:settings.rtl -->

                <!-- #section:settings.container -->
                <div class="ace-settings-item">
                    <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-add-container"/>
                    <label class="lbl" for="ace-settings-add-container">
                        切换宽窄度
                    </label>
                </div>

                <!-- /section:settings.container -->
            </div><!-- /.pull-left -->

            <div class="pull-left width-50">
                <!-- #section:basics/sidebar.options -->
                <div class="ace-settings-item">
                    <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-hover"/>
                    <label class="lbl" for="ace-settings-hover"> 子菜单收起</label>
                </div>

                <div class="ace-settings-item">
                    <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-compact"/>
                    <label class="lbl" for="ace-settings-compact"> 侧边栏紧凑</label>
                </div>

                <div class="ace-settings-item">
                    <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-highlight"/>
                    <label class="lbl" for="ace-settings-highlight"> 当前位置</label>
                </div>

                <!-- /section:basics/sidebar.options -->
            </div><!-- /.pull-left -->
        </div><!-- /.ace-settings-box -->
    </div><!-- /.ace-settings-container -->
                <script>
    var sdate = new Date("<?php echo (C("sdate")); ?>");
    var edate = new Date("<?php echo (C("edate")); ?>");
    //console.log(sdate+"------------"+edate);
    var dates = new Array();
    for (var i = sdate; i < edate; i.setDate(i.getDate() + 1)) {
        dates.push(i.getFullYear() + "/" + (i.getMonth() + 1) + "/" + i.getDate());
        // console.log("adfdasfas");
    }
    //console.log(dates);
</script>


<style type="text/css">

    .ace-chart-container {
        width: 800px;
        height: 400px;
    }

    .ace-settings-container2 {
        position: absolute;
        right: 0;
        top: 250px;
        z-index: 10002;
    }

    .ace-chart-box.open {
        max-width: 800px;
        max-height: 1000px;
        padding: 0 14px;
        border-width: 2px;
        -webkit-transition-delay: 0s;
        -moz-transition-delay: 0s;
        -o-transition-delay: 0s;
        transition-delay: 0s;
    }

    hr {
        border-top: 1px solid #8dee5b;
        margin-bottom: 2px;
        margin-top: 1px;

    }

    .linediv {

        float: left;
    }

    #pricipitationdiv，tempturediv，hydrologicdiv{
    vertical-align: middle
     }
    #pricipitationdiv *，tempturediv *，hydrologicdiv *{
        vertical-align: middle
    }
</style>
<!-- #section:settings.box -->
<div class="ace-settings-container2" id="ace-settings-container2">
    <div class="btn btn-app btn-xs btn-warning ace-settings-btn" id="ace-chart-btn">
        <i class="ace-icon fa fa-cog bigger-130"></i>
    </div>

    <div class="ace-chart-box clearfix" id="ace-chart-box">

        <div class="ace-chart-container">

            <div id="main-container" class="main-container ace-save-state">
                <script type="text/javascript">
                    try {
                        ace.settings.loadState('main-container')
                    } catch (e) {
                    }
                </script>

                <div class="sidebar      h-sidebar                navbar-collapse collapse          ace-save-state"
                     id="sidebar" data-sidebar="true" data-sidebar-scroll="true" data-sidebar-hover="true">
                    <script type="text/javascript">
                        try {
                            ace.settings.loadState('sidebar')
                        } catch (e) {
                        }
                    </script>


                    <ul class="nav nav-list" style="top: 0px;" id="zdj_chart_nav">


                        <li class="active open hover" id="zdj_chart_nav_flow">
                            <a href="#">
                                <i class="menu-icon fa fa-desktop"></i>
                                <span class="menu-text">
								径流
							</span>


                            </a>

                            <b class="arrow"></b>


                        </li>

                        <li class="hover" id="zdj_chart_nav_sed">
                            <a href="#">
                                <i class="menu-icon fa fa-cog"></i>
                                <span class="menu-text"> 泥沙 </span>
                            </a>

                            <b class="arrow"></b>
                        </li>


                        <li class="hover">
                            <a href="#">
                                <i class="menu-icon fa fa-pencil-square-o"></i>
                                <span class="menu-text"> 总氮 </span>


                            </a>

                            <b class="arrow"></b>

                        </li>

                        <li class="hover">
                            <a href="#">
                                <i class="menu-icon fa fa-list-alt"></i>
                                <span class="menu-text"> 有机氮 </span>
                            </a>

                            <b class="arrow"></b>
                        </li>

                        <li class="hover">
                            <a href="#">
                                <i class="menu-icon fa fa-calendar"></i>

                                <span class="menu-text">
								无机氮
								</span>
                                </span>
                            </a>

                            <b class="arrow"></b>
                        </li>

                        <li class="hover">
                            <a href="#">
                                <i class="menu-icon fa fa-picture-o"></i>
                                <span class="menu-text"> 总磷 </span>
                            </a>

                            <b class="arrow"></b>
                        </li>
                        <li class="hover" id="zdj_chart_nav_rain">
                            <a href="#">
                                <i class="menu-icon fa fa-tachometer"></i>
                                <span class="menu-text"> 降水 </span>
                            </a>

                            <b class="arrow"></b>
                        </li>

                        <li class="hover" id="zdj_chart_nav_temp">
                            <a href="#">
                                <i class="menu-icon fa fa-certificate"></i>
                                <span class="menu-text"> 溫度 </span>
                            </a>

                            <b class="arrow"></b>
                        </li>
                    </ul><!-- /.nav-list -->


                </div>

                <div class="main-content">
                    <div id="pricipitationdiv" style="margin-top:8px;vertical-align:middle">
                        <div style="display:inline-block; width:5%;position: relative;">站点</div>
                        <div style="display:inline-block; width:15%;;position: relative;vertical-align: middle">
                            <select
                                    id="pguage" class="form-control">
                                <?php if(is_array($pguages)): $i = 0; $__LIST__ = $pguages;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value='<?php echo ($vo["guage_id"]); ?>'><?php echo ($vo["guage_name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>


                            </select>
                        </div>
                        <div style="display:inline-block; width:5%;position: relative;margin-left:10px">情景</div>

                        <div style="display:inline-block; width:65%;position: relative;vertical-align: middle">

                            <select multiple="" class="chosen-select form-control tag-input-style"
                                    id="pscenxxx" data-placeholder="请选择一或多个情景...">
                                <?php if(is_array($pscens)): $i = 0; $__LIST__ = $pscens;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value='<?php echo ($vo["scen_id"]); ?>'><?php echo ($vo["scen_name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                            </select>
                        </div>

                    </div>
                    <div id="tempturediv" style="margin-top:8px;vertical-align:middle">
                        <div style="display:inline-block; width:5%;position: relative;">站点</div>
                        <div style="display:inline-block; width:15%;;position: relative;vertical-align: middle">
                            <select
                                    id="tguage" class="form-control">
                                <?php if(is_array($tguages)): $i = 0; $__LIST__ = $tguages;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value='<?php echo ($vo["guage_id"]); ?>'><?php echo ($vo["guage_name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>


                            </select>
                        </div>
                        <div style="display:inline-block; width:5%;position: relative;margin-left:10px">情景</div>

                        <div style="display:inline-block; width:65%;position: relative;vertical-align: middle">

                            <select multiple="" class="chosen-select form-control tag-input-style"
                                    id="tscenxxx" data-placeholder="请选择一或多个情景...">
                                <?php if(is_array($tscens)): $i = 0; $__LIST__ = $tscens;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value='<?php echo ($vo["scen_id"]); ?>'><?php echo ($vo["scen_name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                            </select>
                        </div>

                    </div>
                    <div id="hydrologicdiv" style="margin-top:8px;vertical-align:middle">
                        <div style="display:inline-block; width:5%;position: relative;">站点</div>
                        <div style="display:inline-block; width:15%;;position: relative;vertical-align: middle">
                            <select
                                    id="myguage" class="form-control">
                                <?php if(is_array($guages)): $i = 0; $__LIST__ = $guages;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value='<?php echo ($vo["guage_id"]); ?>'><?php echo ($vo["guage_name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>


                            </select>
                        </div>
                        <div style="display:inline-block; width:5%;position: relative;margin-left:10px">情景</div>

                        <div style="display:inline-block; width:65%;position: relative;vertical-align: middle">

                            <select multiple="" class="chosen-select form-control tag-input-style"
                                    id="myscenxxx" data-placeholder="请选择一或多个情景...">
                                <?php if(is_array($scens)): $i = 0; $__LIST__ = $scens;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value='<?php echo ($vo["scen_id"]); ?>'><?php echo ($vo["scen_name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                            </select>
                        </div>

                    </div>
                    <!-----form--->
                    <hr style="position:relative">

                    <!-----form--->
                    <div id="mychart" style="width: 800px;height:280px;"></div>
                </div>


            </div>

        </div>


    </div><!-- /.ace-settings-box -->
</div><!-- /.ace-settings-container -->


                <!-- /section:settings.box -->
                <div class="row">


                    <div id="mapid"></div>


                </div><!-- /.row -->
            </div><!-- /.page-content -->
        </div>
    </div><!-- /.main-content -->

        <div class="footer">
        <div class="footer-inner">
            <!-- #section:basics/footer -->
            <div class="footer-content">
                            <span class="bigger-120">
                                <small>Copyright &copy; 2017 <a href="http://www.xmut.edu.cn" target="_blank"><?php echo (C("footer")); ?></a> All Rights Reserved.</small>
                            </span>
            </div>

            <!-- /section:basics/footer -->
        </div>
    </div>

    <a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
        <i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
    </a>

</div><!-- /.main-container -->
<div class="hidediv">

    <select name="myselect" id="myselect">
        <option value="1" selected="selected">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
    </select>

    <!-- Flow-->
    <!-- SED-->
    <!-- TN-->
    <!-- ON-->
    <!-- ION-->
    <!-- TP-->
    <!-- Rain-->
</div>
<!-- basic scripts -->

<!--[if !IE]> -->
<script type="text/javascript">
    window.jQuery || document.write("<script src='/wms/Public/qwadmin/js/jquery.js'>" + "<" + "/script>");
</script>

<!-- <![endif]-->

<!--[if IE]>
<script type="text/javascript">
    window.jQuery || document.write("<script src='/wms/Public/qwadmin/js/jquery1x.js'>" + "<" + "/script>");
</script>
<![endif]-->
<script type="text/javascript">
    if ('ontouchstart' in document.documentElement) document.write("<script src='/wms/Public/qwadmin/js/jquery.mobile.custom.js'>" + "<" + "/script>");
</script>
<script src="/wms/Public/qwadmin/js/bootstrap.js"></script>
<script src="/wms/Public/qwadmin/js/chosen.jquery.js"></script>
<!-- page specific plugin scripts -->
<script charset="utf-8" src="/wms/Public/kindeditor/kindeditor-min.js"></script>
<script charset="utf-8" src="/wms/Public/kindeditor/lang/zh_CN.js"></script>
<script src="/wms/Public/qwadmin/js/bootbox.js"></script>
<!-- ace scripts -->
<script src="/wms/Public/qwadmin/js/ace/elements.scroller.js"></script>
<script src="/wms/Public/qwadmin/js/ace/elements.colorpicker.js"></script>
<script src="/wms/Public/qwadmin/js/ace/elements.fileinput.js"></script>
<script src="/wms/Public/qwadmin/js/ace/elements.typeahead.js"></script>
<script src="/wms/Public/qwadmin/js/ace/elements.wysiwyg.js"></script>
<script src="/wms/Public/qwadmin/js/ace/elements.spinner.js"></script>
<script src="/wms/Public/qwadmin/js/ace/elements.treeview.js"></script>
<script src="/wms/Public/qwadmin/js/ace/elements.wizard.js"></script>
<script src="/wms/Public/qwadmin/js/ace/elements.aside.js"></script>
<script src="/wms/Public/qwadmin/js/ace/ace.js"></script>
<script src="/wms/Public/qwadmin/js/ace/ace.ajax-content.js"></script>
<script src="/wms/Public/qwadmin/js/ace/ace.touch-drag.js"></script>
<script src="/wms/Public/qwadmin/js/ace/ace.sidebar.js"></script>
<script src="/wms/Public/qwadmin/js/ace/ace.sidebar-scroll-1.js"></script>
<script src="/wms/Public/qwadmin/js/ace/ace.submenu-hover.js"></script>
<script src="/wms/Public/qwadmin/js/ace/ace.widget-box.js"></script>
<script src="/wms/Public/qwadmin/js/ace/ace.settings.js"></script>
<script src="/wms/Public/qwadmin/js/ace/ace.settings-rtl.js"></script>
<script src="/wms/Public/qwadmin/js/ace/ace.settings-skin.js"></script>
<script src="/wms/Public/qwadmin/js/ace/ace.widget-on-reload.js"></script>
<script src="/wms/Public/qwadmin/js/ace/ace.searchbox-autocomplete.js"></script>
<!-- Make sure you put this AFTER Leaflet's CSS -->
<script src="https://unpkg.com/leaflet@1.2.0/dist/leaflet.js"
        integrity="sha512-lInM/apFSqyy1o6s89K4iQUKg6ppXEgsVxT35HbzUupEVRh2Eu9Wdl4tHj7dZO0s1uvplcYGmt3498TtHq+log=="
        crossorigin=""></script>


<script src="/wms/Public/qwadmin/js/echarts.min.js"></script>
<script src="/wms/Public/qwadmin/js/zdj/zdj-map.js"></script>
<script src="/wms/Public/qwadmin/js/zdj/zdj-echart.js"></script>

<!-- inline scripts related to this page -->
<script type="text/javascript">

    function getchart() {

        console.log($("#myselect").val());
        console.log($("#myguage").val());
        console.log($("#myscenxxx").val());
        var s = $("#myselect").val();
        var scens = null;
        var guage = null;

        if (s < 7) {
            var myStringArray = $("#myscenxxx").val();
            if (myStringArray == null) {
                scens = "";
            } else {
                scens = myStringArray.join(",");
            }
            guage = $("#myguage").val();


        } else if (s == 7) {
            var myStringArray = $("#pscenxxx").val();
            if (myStringArray == null) {
                scens = "";
            } else {
                scens = myStringArray.join(",");
            }
            guage = $("#pguage").val();

        }
        else if (s == 8) {
            var myStringArray = $("#tscenxxx").val();
            if (myStringArray == null) {
                scens = "";
            } else {
                scens = myStringArray.join(",");
            }
            guage = $("#tguage").val();
        }
        if (s == null || guage == null || scens == null) {
            mychart.setOption({
                title: {
                    x: 'center',
                    align: 'right'
                },
                grid: {
                    bottom: 80
                },
                toolbox: {
                    feature: {
                        dataZoom: {
                            yAxisIndex: 'none'
                        },
                        restore: {},
                        saveAsImage: {}
                    }
                },
                tooltip: {
                    trigger: 'axis',
                    axisPointer: {
                        type: 'cross',
                        animation: false,
                        label: {
                            backgroundColor: '#505765'
                        }
                    }
                },

                dataZoom: [
                    {
                        show: true,
                        realtime: true,
                        start: 65,
                        end: 85
                    },
                    {
                        type: 'inside',
                        realtime: true,
                        start: 65,
                        end: 85
                    }
                ],
                xAxis: [
                    {
                        type: 'category',
                        boundaryGap: false,
                        axisLine: {onZero: false},
                        data: dates
                    }
                ],
                yAxis: [
                    {
                        type: 'value'
                    }
                ],
                series: []
            }, true);
            return -1;
        } else {
            reloadChart(s, guage, scens);
        }
        mychart.setOption({
            toolbox: {
                right: 30
            }
        }, false);

    }

    function genbase() { //cellvalue表示当前单元格的值

        $.get("<?php echo U('SWAT/genbase');?>", function (data, status) {
            alert("success");


        });


    }


    $(function () {

        setTimeout(function(){

            $("#mapid").height( $(window).height()-160);
            console.log("don't work???");
            console.log($(window).height()-160);

        },20);

        $('.btn-base').on("click", function (e) {


           // genbase();

        });

        $('#ace-chart-btn').on(ace.click_event, function (e) {
            e.preventDefault();

            $(this).toggleClass('open');
            $('#ace-chart-box').toggleClass('open');
        });


        $('#zdj_chart_nav li').click(function (e) {
            $(this).addClass('open active');
            $(this).siblings().removeClass('open active');
            console.log($('#zdj_chart_nav li').index(this));
            var t = $("#myselect").val();
            $("#myselect").val($('#zdj_chart_nav li').index(this) + 1);
            var c = $("#myselect").val();
            console.log("----------" + $("#myselect").val());

            if (c < 7) {
                $("#pricipitationdiv").css('display', 'none');
                $("#tempturediv").css('display', 'none');
                $("#hydrologicdiv").css('display', 'none');
                $("#hydrologicdiv").css('display', 'block');
                var $this = $('#hydrologicdiv .chosen-select');
                $this.next().css({'width': $this.parent().width()});
                console.log("ccccccccccccccccc");
            }
            if (c == 7) {
                $("#hydrologicdiv").css('display', 'none');
                $("#tempturediv").css('display', 'none');
                $("#pricipitationdiv").css('display', 'none');
                $("#pricipitationdiv").css('display', 'block');
                var $this = $('#pricipitationdiv .chosen-select');
                $this.next().css({'width': $this.parent().width()});
                console.log("bbbbbbbbbbb");
            }
            if (c == 8) {
                $("#hydrologicdiv").css('display', 'none');
                $("#pricipitationdiv").css('display', 'none');
                $("#tempturediv").css('display', 'none');
                $("#tempturediv").css('display', 'block');
                var $this = $('#tempturediv .chosen-select');
                $this.next().css({'width': $this.parent().width()});
                console.log("xxxxxxx");
            }


            if (t != c) {
                $("#myselect").trigger('change');
            }
        });

        $("#update").click(function () {

            $("#upmsg").html("");
            $("#upmsg").addClass("ace-icon fa fa-refresh fa-spin blue");
            $.ajax({
                type: 'GET',
                url: '<?php echo (C("UPDATE_URL")); ?>?v=<?php echo (C("Version")); ?>&callback=?',
                success: function (json) {
                    if (json.result == 'no') {
                        $("#upmsg").html("目前还没有适合您当前版本的更新！").removeClass();
                    } else if (json.result == 'yes') {
                        $("#upmsg").html("检查到新版本 " + json.ver + "，请前往“系统设置”->“<a  href=\"<?php echo U('Update/update');?>\">在线升级</a>”").removeClass();
                    }
                },
                error: function () {
                    $("#upmsg").html("悲剧了，网络故障，请稍后再试！").removeClass();
                },
                dataType: 'json'
            });

        });

        $(".btn-info.submit").click(function () {
            var content = $("#content").val();
            if (content == '') {
                bootbox.dialog({
                    title: '友情提示：',
                    message: "反馈内容必须填写。",
                    buttons: {
                        "success": {
                            "label": "确定",
                            "className": "btn-danger"
                        }
                    }
                });
                return;
            }

            $("#form").submit();
        });

        if (!ace.vars['touch']) {
            $('.chosen-select').chosen({allow_single_deselect: true});
            //resize the chosen on window resize

            $(window)
                .off('resize.chosen')
                .on('resize.chosen', function () {
                    $('.chosen-select').each(function () {
                        var $this = $(this);
                        $this.next().css({'width': $this.parent().width()});
                    })
                }).trigger('resize.chosen');
        }

        $("#myselect").eq(0).val(1);
        $("#myscenxxx").val(<?php echo ($s1); ?>);
        $("#myscenxxx").trigger("chosen:updated");
        $("#pscenxxx").val(<?php echo ($s2); ?>);
        $("#pscenxxx").trigger("chosen:updated");
        $("#tscenxxx").val(<?php echo ($s3); ?>)
        ;
        $("#tscenxxx").trigger("chosen:updated");
        $("#myselect").change(getchart);
        $("#myguage").change(getchart);
        $("#myscenxxx").change(getchart);
        $("#pguage").change(getchart);
        $("#pscenxxx").change(getchart);
        $("#tguage").change(getchart);
        $("#tscenxxx").change(getchart);

        $("#pricipitationdiv").css('display', 'none');
        $("#tempturediv").css('display', 'none');
        $("#hydrologicdiv").css('display', 'none');
        $("#hydrologicdiv").css('display', 'block');
        getchart();
    })
    ;

</script>


</body>
</html>