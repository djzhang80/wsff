<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta http-equiv="Access-Control-Allow-Origin" content="*">
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
    <link rel="stylesheet" href="/wms/Public/qwadmin/css/jquery.gritter.min.css" />
    <link rel="stylesheet" href="/wms/Public/qwadmin/css/bootstrap-datepicker3.min.css" />
    <link rel="stylesheet" href="/wms/Public/qwadmin/css/ui.jqgrid.min.css" />
    <!-- text fonts -->
    <link rel="stylesheet" href="/wms/Public/qwadmin/css/ace-fonts.css"/>

    <!-- ace styles-->
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
<style>
    .widget-main {
        padding: 0px;
    }

    .widget-main *{
        overflow: hidden;
    }
</style>

</head>
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
                        <a href="<?php echo U('cache/clear');?>" title="????????????" target="_self">
                            <i class="ace-icon fa glyphicon-trash"></i>
                        </a>
                    </li>
                    <li class="red">
                        <a href="/" title="????????????" target="_blank">
                            <i class="ace-icon fa fa-home"></i>
                        </a>
                    </li>-->
                    <li class="light-blue">
                        <a data-toggle="dropdown" href="#" class="dropdown-toggle">
                            <img class="nav-user-photo" src="<?php if( $user["head"] == '' ): ?>/wms/Public/qwadmin/avatars/avatar2.png
                            <?php else: ?>
                            <?php echo ($user["head"]); endif; ?>" alt="<?php echo ($user["user"]); ?>" />
                            <span class="user-info">
                                <small>???????????????</small>
                                <?php echo ($user["user"]); ?>
                            </span>

                            <i class="ace-icon fa fa-caret-down"></i>
                        </a>

                        <ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
                            <li>
                                <a href="<?php echo U('Setting/Setting');?>">
                                    <i class="ace-icon fa fa-cog"></i>
                                    ??????
                                </a>
                            </li>

                            <li>
                                <a href="<?php echo U('Personal/profile');?>">
                                    <i class="ace-icon fa fa-user"></i>
                                    ????????????
                                </a>
                            </li>

                            <li class="divider"></li>

                            <li>
                                <a href="<?php echo U('logout/index');?>">
                                    <i class="ace-icon fa fa-power-off"></i>
                                    ??????
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
<style>


    .dhx_spread_window .checkbox {
        display: inline;
        font-size: 11px;

    }

    .spread_config_cont {
        font-family: "Tahoma";
        font-size: 11px;
        font-weight: normal;
        line-height: 14px;
        padding: 8px;
    }

    .spread_config.spread_config_button {

        display: inline-block;
    }
</style>
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
                    <span>&nbsp; ????????????</span>
                </div>

                <!-- /section:settings.skins -->

                <!-- #section:settings.navbar -->
                <div class="ace-settings-item">
                    <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-navbar"/>
                    <label class="lbl" for="ace-settings-navbar"> ???????????????</label>
                </div>

                <!-- /section:settings.navbar -->

                <!-- #section:settings.sidebar -->
                <div class="ace-settings-item">
                    <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-sidebar"/>
                    <label class="lbl" for="ace-settings-sidebar"> ???????????????</label>
                </div>

                <!-- /section:settings.sidebar -->

                <!-- #section:settings.breadcrumbs -->
                <div class="ace-settings-item">
                    <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-breadcrumbs"/>
                    <label class="lbl" for="ace-settings-breadcrumbs"> ???????????????</label>
                </div>

                <!-- /section:settings.breadcrumbs -->

                <!-- #section:settings.rtl -->
                <div class="ace-settings-item">
                    <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-rtl"/>
                    <label class="lbl" for="ace-settings-rtl"> ???????????????</label>
                </div>

                <!-- /section:settings.rtl -->

                <!-- #section:settings.container -->
                <div class="ace-settings-item">
                    <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-add-container"/>
                    <label class="lbl" for="ace-settings-add-container">
                        ???????????????
                    </label>
                </div>

                <!-- /section:settings.container -->
            </div><!-- /.pull-left -->

            <div class="pull-left width-50">
                <!-- #section:basics/sidebar.options -->
                <div class="ace-settings-item">
                    <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-hover"/>
                    <label class="lbl" for="ace-settings-hover"> ???????????????</label>
                </div>

                <div class="ace-settings-item">
                    <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-compact"/>
                    <label class="lbl" for="ace-settings-compact"> ???????????????</label>
                </div>

                <div class="ace-settings-item">
                    <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-highlight"/>
                    <label class="lbl" for="ace-settings-highlight"> ????????????</label>
                </div>

                <!-- /section:basics/sidebar.options -->
            </div><!-- /.pull-left -->
        </div><!-- /.ace-settings-box -->
    </div><!-- /.ace-settings-container -->

                <div class="row">


                    <div style="min-height: 308.667px;" class="col-xs-4 widget-container-col ui-sortable"
                         id="widget-container-col-1">
                        <div style="opacity: 1;" class="widget-box ui-sortable-handle" id="widget-box-1">
                            <div class="widget-header">
                                <h5 class="widget-title">Forecast precipitation</h5>

                                <div class="widget-toolbar">


                                    <a href="#" data-action="collapse">
                                        <i class="ace-icon fa fa-chevron-up"></i>
                                    </a>

                                    <a href="#" data-action="close">
                                        <i class="ace-icon fa fa-times"></i>
                                    </a>
                                </div>
                            </div>

                            <div class="widget-body">
                                <div class="widget-main">
                                    <table id="grid-table"></table>

                                    <div id="grid-pager"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div style="min-height: 208.667px;" class="col-xs-8 widget-container-col ui-sortable"
                         id="widget-container-col-2">
                        <div style="opacity: 1;" class="widget-box ui-sortable-handle" id="widget-box-2">
                            <div class="widget-header">
                                <h5 class="widget-title">Precipitation hydrograph</h5>

                                <div class="widget-toolbar">
                                    <a href="#modal-form" data-toggle="modal" onclick="undateselect">
                                        <i class="ace-icon fa fa-bars"></i>
                                    </a>

                                    <a href="#" data-action="collapse">
                                        <i class="ace-icon fa fa-chevron-up"></i>
                                    </a>

                                    <a href="#" data-action="close">
                                        <i class="ace-icon fa fa-times"></i>
                                    </a>
                                </div>
                            </div>

                            <div class="widget-body">
                                <div class="widget-main">
                                    <div id="mychart1" style="width: 100%;;height:200px"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div style="min-height: 208.667px;" class="col-xs-8 widget-container-col ui-sortable"
                         id="widget-container-col-3">
                        <div style="opacity: 1;" class="widget-box ui-sortable-handle" id="widget-box-3">
                            <div class="widget-header">
                                <h5 class="widget-title">Stream discharge hydrograph</h5>

                                <div class="widget-toolbar">
                                    <a href="#modal-form2" data-toggle="modal" onclick="undateselect">
                                        <i class="ace-icon fa fa-bars"></i>
                                    </a>

                                    <a href="#" data-action="collapse">
                                        <i class="ace-icon fa fa-chevron-up"></i>
                                    </a>

                                    <a href="#" data-action="close">
                                        <i class="ace-icon fa fa-times"></i>
                                    </a>
                                </div>
                            </div>

                            <div class="widget-body">
                                <div class="widget-main">
                                    <div id="mychart2" style="width: 100%;height:200px"></div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>

                <div id="modal-form" class="modal" tabindex="-1">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="blue bigger">??????????????????????????????</h4>
                            </div>

                            <div class="modal-body">
                                <div class="row">


                                    <div class="space-2"></div>

                                    <div class="form-group">
                                        <label class="control-label col-xs-12 col-sm-3 no-padding-right">???????????????</label>
                                        <div class="col-xs-12 col-sm-12">
                                            <div>
                                                <label class="line-height-1 blue">
                                                    <input name="pcp_type" value="1" type="radio"
                                                           class="ace" checked/>
                                                    <span class="lbl"> ?????????</span>
                                                </label> <label class="line-height-1 blue">
                                                <input name="pcp_type" value="2" type="radio"
                                                       class="ace"/>
                                                <span class="lbl"> ?????????</span>
                                            </label>
                                            </div>


                                            <div class="hr hr-8 hr-dotted"></div>
                                        </div>
                                    </div>


                                    <div class="form-group">

                                        <label class="control-label col-xs-12 col-sm-12 no-padding-right">???????????????</label>
                                        <div class="col-sm-12">
                                            <select multiple="multiple" size="10" name="pcps[]"
                                                    id="pcps">
                                                <?php if(is_array($pcps)): $i = 0; $__LIST__ = $pcps;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value='<?php echo ($vo["id"]); ?>'><?php echo ($vo["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                                            </select>


                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="modal-footer">

                                <button id="button_pcp" class="btn btn-sm btn-primary" data-dismiss="modal">
                                    <i class="ace-icon fa fa-check"></i>
                                    ??????
                                </button>
                            </div>
                        </div>
                    </div>
                </div><!-- PAGE CONTENT ENDS -->

                <div id="modal-form2" class="modal" tabindex="-1">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="blue bigger">??????????????????????????????</h4>
                            </div>

                            <div class="modal-body">
                                <div class="row">


                                    <div class="space-2"></div>

                                    <div class="form-group">
                                        <label class="control-label col-xs-12 col-sm-3 no-padding-right">???????????????</label>
                                        <div class="col-xs-12 col-sm-12">
                                            <div>
                                                <label class="line-height-1 blue">
                                                    <input name="s2_type" value="1" type="radio"
                                                           class="ace" checked/>
                                                    <span class="lbl"> ?????????</span>
                                                </label> <label class="line-height-1 blue">
                                                <input name="s2_type" value="2" type="radio"
                                                       class="ace"/>
                                                <span class="lbl"> ?????????</span>
                                            </label>
                                            </div>


                                            <div class="hr hr-8 hr-dotted"></div>
                                        </div>
                                    </div>


                                    <div class="form-group">

                                        <label class="control-label col-xs-12 col-sm-12 no-padding-right">???????????????</label>
                                        <div class="col-sm-12">
                                            <select multiple="multiple" size="10" name="flows[]"
                                                    id="flows">
                                                <?php if(is_array($flows)): $i = 0; $__LIST__ = $flows;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value='<?php echo ($vo["id"]); ?>'><?php echo ($vo["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                                            </select>


                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="modal-footer">

                                <button id="button_flow" class="btn btn-sm btn-primary" data-dismiss="modal">
                                    <i class="ace-icon fa fa-check"></i>
                                    ??????
                                </button>
                            </div>
                        </div>
                    </div>
                </div><!-- PAGE CONTENT ENDS -->
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
<script src="/wms/Public/qwadmin/js/bootstrap-datepicker.min.js"></script>
<script src="/wms/Public/qwadmin/js/jqGrid/jquery.jqGrid.src.js"></script>
<script src="/wms/Public/qwadmin/js/grid.locale-cn.js"></script>



<!-- inline scripts related to this page -->
<script src="/wms/Public/qwadmin/js/echarts.min.js"></script>
<script src="/wms/Public/qwadmin/js/zdj/zdj-echart2.js"></script>
<script src="/wms/Public/qwadmin/js/jquery.gritter.js"></script>
<script src="/wms/Public/qwadmin/js/jquery.bootstrap-duallistbox.min.js"></script>

<script src="/wms/Public/qwadmin/js/jquery.gritter.js"></script>
<script type="text/javascript">


    //??????ID?????????ID
    var selectid = "<?php echo ($s3); ?>";


    function undateselect() {
        $("#pcps").trigger("chosen:updated");
        $("#flows").trigger("chosen:updated");

    }

    function retrievepcp() {
        id = selectid;
        var s1type = $('input:radio[name="pcp_type"]:checked').val();
        var pcpguages = $('#pcps').val();
        reloadpcpChartf(id, pcpguages, s1type);
    }

    function retrieveflow() {
        id = selectid;
        var s2type = $('input:radio[name="s2_type"]:checked').val();
        var flowguages = $('#flows').val();
        reloadflowChartf(id, flowguages, s2type);
    }


    function retrieve(id) {
        selectid = id;
        var s1type = $('input:radio[name="pcp_type"]:checked').val();
        var s2type = $('input:radio[name="s2_type"]:checked').val();
        var pcpguages = $('#pcps').val();
        var flowguages = $('#flows').val();
        reloadpcpChartf(id, pcpguages, s1type);
        reloadflowChartf(id, flowguages, s2type);
    }
    function forcast() {

        $.extend($.gritter.options, {
            position: 'bottom-right' // possibilities: bottom-left, bottom-right, top-left, top-right
            /*            fade_in_speed: 100, // how fast notifications fade in (string or int)
             fade_out_speed: 100, // how fast the notices fade out
             time: 3000 // hang on the screen for... */
        });
        $.gritter.add({
            // (string | mandatory) the heading of the notification
            title: '????????????!',
            // (string | mandatory) the text inside the notification
            text: '????????????????????????????????????????????????????????????????????????????????????????????????????????????',
            class_name: 'gritter-success',
            position: 'bottom-right'
        });

        var sid = "#spinerxx" ;
        $(sid).css("visibility", "visible");

        var sheetid = $("#sheetid").val();
        var jqxhr = $.getJSON("/wms/qwadmin/HMS/runforcast", "sheetid=" + sheetid, function (data) {
            selectid = sheetid;
            retrieve(selectid);
            $.gritter.add({
                // (string | mandatory) the heading of the notification
                title: '????????????!',
                // (string | mandatory) the text inside the notification
                text: '???????????????????????????????????????????????????',
                class_name: 'gritter-success',
                position: 'bottom-right'
            });

            var sid = "#spinerxx";
            $(sid).css("visibility", "hidden");
        });


    }


    jQuery(function ($) {
        var gheight2 = $(window).height() - 190;
        var gheight = $(window).height() - 340;
        var width = $("#widget-container-col-1").width() - 20;
        var grid_selector = "#grid-table";
        var pager_selector = "#grid-pager";
        var tt = 3;
        var parent_column = $(grid_selector).closest('[class*="col-"]');

        $("#mychart1").css("height", parseInt(gheight / 2 + 25));
        $("#mychart2").css("height", parseInt(gheight / 2 + 25));

        $(window).on('resize.jqGrid', function () {
            $(grid_selector).jqGrid('setGridWidth', parent_column.width() - tt);
            $("#mychart1").css("height", parseInt(gheight / 2 + 35));
            $("#mychart2").css("height", parseInt(gheight / 2 + 35));
        })


        //resize on sidebar collapse/expand
        $(document).on('settings.ace.jqGrid', function (ev, event_name, collapsed) {
            if (event_name === 'sidebar_collapsed' || event_name === 'main_container_fixed') {
                //setTimeout is for webkit only to give time for DOM changes and then redraw!!!
                setTimeout(function () {
                    $(grid_selector).jqGrid('setGridWidth', parent_column.width() - tt);
                }, 20);
            }
        })

        function appliedformat3(cellvalue, options, cell) { //cellvalue???????????????????????????
            // var rs = '<a id="a_' + cell["id"] + '" href="#" onclick="exec_simulate(' + cell["id"] + ')"><span class="label label-info arrowed-right arrowed-in">??????</span></a>';
            var rs="";
            return rs + '<a id="a_' + cell["id"] + '" href="#" onclick="retrieve(' + cell["id"] + ')"><span class="label label-info arrowed-right arrowed-in">??????/??????</span></a>';
        }
        function styleCheckbox(table) {
            /**
             $(table).find('input:checkbox').addClass('ace')
             .wrap('<label />')
             .after('<span class="lbl align-top" />')


             $('.ui-jqgrid-labels th[id*="_cb"]:first-child')
             .find('input.cbox[type=checkbox]').addClass('ace')
             .wrap('<label />').after('<span class="lbl align-top" />');
             */
        }
        function updatePagerIcons(table) {
            var replacement =
                {
                    'ui-icon-seek-first': 'ace-icon fa fa-angle-double-left bigger-140',
                    'ui-icon-seek-prev': 'ace-icon fa fa-angle-left bigger-140',
                    'ui-icon-seek-next': 'ace-icon fa fa-angle-right bigger-140',
                    'ui-icon-seek-end': 'ace-icon fa fa-angle-double-right bigger-140'
                };
            $('.ui-pg-table:not(.navtable) > tbody > tr > .ui-pg-button > .ui-icon').each(function () {
                var icon = $(this);
                var $class = $.trim(icon.attr('class').replace('ui-icon', ''));

                if ($class in replacement) icon.attr('class', 'ui-icon ' + replacement[$class]);
            })
        }
        function updateActionIcons(table) {
            /**
             var replacement =
             {
                 'ui-ace-icon fa fa-pencil' : 'ace-icon fa fa-pencil blue',
                 'ui-ace-icon fa fa-trash-o' : 'ace-icon fa fa-trash-o red',
                 'ui-icon-disk' : 'ace-icon fa fa-check green',
                 'ui-icon-cancel' : 'ace-icon fa fa-times red'
             };
             $(table).find('.ui-pg-div span.ui-icon').each(function(){
						var icon = $(this);
						var $class = $.trim(icon.attr('class').replace('ui-icon', ''));
						if($class in replacement) icon.attr('class', 'ui-icon '+replacement[$class]);
					})
             */
        }
        function enableTooltips(table) {
            $('.navtable .ui-pg-button').tooltip({container: 'body'});
            $(table).find('.ui-pg-div').tooltip({container: 'body'});
        }
        jQuery(grid_selector).jqGrid({
            //direction: "rtl",
            url: "<?php echo U('HMS3/retrieve_current_pcpDataf');?>",
            datatype: "json",
            height: gheight2-75,

            scrollOffset: 0,
            ajaxSelectOptions: {
                type: "Post",
                cache: false
            },
            colNames: ['Rain gauge', 'Precipitation(mm)', 'Increase/Decrease(mm)'],
            colModel: [
                {name: 'gagename', index: 'gagename', width: 50, editable: false},
                {name: 'currentvalue', index: 'currentvalue', width: 80, editable: false},
                {name: 'addvalue', index: 'addvalue', width: 80, editable: false}

            ],

            altRows: true,
            loadComplete: function () {
                var table = this;
                setTimeout(function () {
                    styleCheckbox(table);
                    updateActionIcons(table);
                    updatePagerIcons(table);
                    enableTooltips(table);
                }, 0);
            }


        });
        $(window).triggerHandler('resize.jqGrid');//trigger window resize to make the grid get the correct size
        jQuery(grid_selector).jqGrid('navGrid', pager_selector,
            { 	//navbar options
                edit: false,
                editicon: 'ace-icon fa fa-pencil blue',
                add: false,
                addicon: 'ace-icon fa fa-plus-circle purple',
                del: false,
                delicon: 'ace-icon fa fa-trash-o red',
                search: false,
                searchicon: 'ace-icon fa fa-search orange',
                refresh: false,
                refreshicon: 'ace-icon fa fa-refresh green',
                view: false,
                viewicon: 'ace-icon fa fa-search-plus grey'
            },
            {
                //search form
                recreateForm: true,
                afterShowSearch: function (e) {
                    var form = $(e[0]);
                    form.closest('.ui-jqdialog').find('.ui-jqdialog-title').wrap('<div class="widget-header" />')
                    style_search_form(form);
                },
                afterRedraw: function () {
                    style_search_filters($(this));
                }
                ,
                multipleSearch: true,
                /**
                 multipleGroup:true,
                 showQuery: true
                 */
            },
            {
                //view record form
                recreateForm: true,
                beforeShowForm: function (e) {
                    var form = $(e[0]);
                    form.closest('.ui-jqdialog').find('.ui-jqdialog-title').wrap('<div class="widget-header" />')
                }
            }
        )


        // console.log("http://localhost/dhtmlx/index.php?width="+100+"&height="+100);
        var demo1 = $('select[name="pcps[]"]').bootstrapDualListbox({
            infoText: '<span class="label label-purple label-lg">????????????{0}???</span>',
            selectorMinimalHeight: "180",
            infoTextFiltered: '<span class="label label-purple label-lg">??????????????????{0}???</span>',
            filterTextClear: "????????????",
            filterPlaceHolder: "??????????????????",
            infoTextEmpty: '<span class="label label-purple label-lg">????????????</span>'
        });
        var container1 = demo1.bootstrapDualListbox('getContainer');
        container1.find('.btn').addClass('btn-white btn-info btn-bold');

        var demo2 = $('select[name="flows[]"]').bootstrapDualListbox({
            infoText: '<span class="label label-purple label-lg">????????????{0}???</span>',
            selectorMinimalHeight: "180",
            infoTextFiltered: '<span class="label label-purple label-lg">??????????????????{0}???</span>',
            filterTextClear: "????????????",
            filterPlaceHolder: "??????????????????",
            infoTextEmpty: '<span class="label label-purple label-lg">????????????</span>'
        });
        var container2 = demo2.bootstrapDualListbox('getContainer');
        container2.find('.btn').addClass('btn-white btn-info btn-bold');

        $('select[name="*duallistbox_demo1[]*"]').css("height", "200px");

        $("#button_pcp").on("click", retrievepcp);

        $("#button_flow").on("click", retrieveflow);

        $("#pcps").val(<?php echo ($s1); ?>);
        $("#pcps").trigger("chosen:updated");

        $("#flows").val(<?php echo ($s2); ?>);
        $("#flows").trigger("chosen:updated");

        demo1.bootstrapDualListbox('refresh', true);

        demo2.bootstrapDualListbox('refresh', true);

        retrieve("<?php echo ($s3); ?>");
        setInterval(

            function(){
                console.log("excute");
                retrieve("<?php echo ($s3); ?>");

                $(grid_selector).jqGrid().trigger("reloadGrid");

            },
           8000);

    });


</script>

</body>
</html>