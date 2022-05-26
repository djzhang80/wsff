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

                <div class="row">
                    <div class="col-xs-12">
                        <div style="height:5px"></div>

                        <!-- PAGE CONTENT ENDS -->

                        <table id="grid-table"></table>

                        <div id="grid-pager"></div>
                    </div><!-- /.col -->
                </div>
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
<script src="/wms/Public/qwadmin/js/jquery.gritter.js"></script>

<script type="text/javascript">

    function exec_simulate(id) { //cellvalue表示当前单元格的值
        $.extend($.gritter.options, {
            position: 'bottom-right' // possibilities: bottom-left, bottom-right, top-left, top-right
            /*            fade_in_speed: 100, // how fast notifications fade in (string or int)
             fade_out_speed: 100, // how fast the notices fade out
             time: 3000 // hang on the screen for... */
        });
        $.gritter.add({
            // (string | mandatory) the heading of the notification
            title: '开始执行!',
            // (string | mandatory) the text inside the notification
            text: '由于涉及模型参数的修改、模型运行、结果提取、模型复位等过程，综合模拟可能需要数分钟！',
            class_name: 'gritter-success',
            position: 'bottom-right'
        });

        var sid = "#spiner_" + id;
        $(sid).css("visibility", "visible");

        var aid = "#a_" + id;
        $(aid).parent().html('<span id="a_' + id + '" class="label label-info arrowed-right arrowed-in">正在执行</span>');


        $.get("<?php echo U('SWAT/exectmp');?>" + "?id=" + id, function (data, status) {
            $.gritter.add({
                // (string | mandatory) the heading of the notification
                title: '执行完成!',
                // (string | mandatory) the text inside the notification
                text: '您可以到流域地图页面中，查看和比较模拟结果！',
                class_name: 'gritter-success',
                position: 'bottom-right'
            });

            var sid = "#spiner_" + id;
            $(sid).css("visibility", "hidden");
            var aid = "#a_" + id;
            $(aid).parent().html('<span id="_' + id + '" class="label label-info arrowed-right arrowed-in">执行完毕</span>');
        });


    }
    jQuery(function ($) {
        var grid_selector = "#grid-table";
        var pager_selector = "#grid-pager";


        var parent_column = $(grid_selector).closest('[class*="col-"]');
        //resize to fit page size
        $(window).on('resize.jqGrid', function () {
            $(grid_selector).jqGrid('setGridWidth', parent_column.width());
        })


        //resize on sidebar collapse/expand
        $(document).on('settings.ace.jqGrid', function (ev, event_name, collapsed) {
            if (event_name === 'sidebar_collapsed' || event_name === 'main_container_fixed') {
                //setTimeout is for webkit only to give time for DOM changes and then redraw!!!
                setTimeout(function () {
                    $(grid_selector).jqGrid('setGridWidth', parent_column.width());
                }, 20);
            }
        })

        //if your grid is inside another element, for example a tab pane, you should use its parent's width:
        /**
         $(window).on('resize.jqGrid', function () {
					var parent_width = $(grid_selector).closest('.tab-pane').width();
					$(grid_selector).jqGrid( 'setGridWidth', parent_width );
				})
         //and also set width when tab pane becomes visible
         $('#myTab a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
				  if($(e.target).attr('href') == '#mygrid') {
					var parent_width = $(grid_selector).closest('.tab-pane').width();
					$(grid_selector).jqGrid( 'setGridWidth', parent_width );
				  }
				})
         */

        function appliedformat3(cellvalue, options, cell) { //cellvalue表示当前单元格的值
            if (cellvalue == 1 || cellvalue == 2) {
                return '<a id="a_' + cell["id"] + '" href="#" onclick="exec_simulate(' + cell["id"] + ')"><span class="label label-info arrowed-right arrowed-in">执行模拟</span></a>';
            } else if (cellvalue == 3) {
                return '<span class="label label-info arrowed-right arrowed-in">正在执行</span>';
            } else {
                return '<span class="label label-info arrowed-right arrowed-in">执行完毕</span>';
            }
        }

        function spinnerformat(cellvalue, options, cell) { //cellvalue表示当前单元格的值
            return cellvalue + ' <i id="spiner_' + cellvalue + '" style="visibility:hidden" class="ace-icon fa fa-spinner fa-spin orange bigger-125"></i>';
        }

        var gheight = $(window).height() - 270;

        jQuery(grid_selector).jqGrid({
            //direction: "rtl",


            url: "<?php echo U('Scen/tdata');?>",
            datatype: "json",
            height: gheight,
            ajaxSelectOptions: {
                type: "Post",
                cache: false
            },
            colNames: [' ', '标 识', '应用站点', '情景名称', '情景类别', '设置方法', '设置值', '创建日期', '修改日期', '情景描述', '执行情况'],
            colModel: [
                {
                    name: 'myac', index: '', width: 80, fixed: true, sortable: false, resize: false,
                    formatter: 'actions',
                    formatoptions: {
                        keys: true,
                        delOptions: {recreateForm: true, beforeShowForm: beforeDeleteCallback},
                    }
                },
                {name: 'id', index: 'id', width: 60, sorttype: "int", editable: false, formatter: spinnerformat},
                {
                    name: 'scen_target',
                    index: 'scen_target',
                    width: 90,
                    editable: true,
                    edittype: 'select',
                    editoptions: {
                        postData: function (rowid, value, cmName) {
                            return {
                                id: rowid
                            }
                        },
                        dataUrl: "<?php echo U('Scen/tselect');?>"
                    }
                },
                {name: 'scen_name', index: 'scen_name', width: 90, editable: true},
                {
                    name: 'scen_type',
                    index: 'scen_type',
                    width: 90,
                    editable: false,
                    formatter: 'select',
                    formatoptions: {value: "1:降水; 2:气温"},
                    edittype: 'select',
                    editoptions: {value: "1:降水; 2:气温"}
                },
                {
                    name: 'scen_method', index: 'scen_method', width: 90, editable: true, formatter: 'select',
                    formatoptions: {value: "1:系数; 2:添加; 3:替換"},
                    edittype: 'select',
                    editoptions: {value: "1:系数; 2:添加; 3:替換"}
                },
                {name: 'scen_value', index: 'scen_value', width: 90, editable: true},
                {name: 'scen_createdate', index: 'scen_createdate', width: 90, editable: false},
                {name: 'scen_modifieddate', index: 'scen_modifieddate', width: 90, editable: false},
                {
                    name: 'scen_desc',
                    index: 'scen_desc',
                    width: 90,
                    editable: true,
                    edittype: 'textarea',
                    editoptions: {rows: "3", cols: "20"}
                }, {name: 'exec_type', index: 'exec_type', width: 60, editable: false, formatter: appliedformat3}
            ],

            viewrecords: true,
            rowNum: 10,
            rowList: [10, 20, 30],
            pager: pager_selector,
            altRows: true,
            //toppager: true,

            multiselect: true,
            //multikey: "ctrlKey",
            multiboxonly: true,

            loadComplete: function () {
                var table = this;
                setTimeout(function () {
                    styleCheckbox(table);

                    updateActionIcons(table);
                    updatePagerIcons(table);
                    enableTooltips(table);
                }, 0);
            },

            editurl: "<?php echo U('Scen/tadddata');?>"//nothing is saved


            //,autowidth: true,


            /**
             ,
             grouping:true,
             groupingView : {
						 groupField : ['name'],
						 groupDataSorted : true,
						 plusicon : 'fa fa-chevron-down bigger-110',
						 minusicon : 'fa fa-chevron-up bigger-110'
					},
             caption: "Grouping"
             */

        });
        $(window).triggerHandler('resize.jqGrid');//trigger window resize to make the grid get the correct size


        //enable search/filter toolbar
        //jQuery(grid_selector).jqGrid('filterToolbar',{defaultSearch:true,stringResult:true})
        //jQuery(grid_selector).filterToolbar({});


        //switch element when editing inline
        function aceSwitch(cellvalue, options, cell) {
            setTimeout(function () {
                $(cell).find('input[type=checkbox]')
                    .addClass('ace ace-switch ace-switch-5')
                    .after('<span class="lbl"></span>');
            }, 0);
        }

        //enable datepicker
        function pickDate(cellvalue, options, cell) {
            setTimeout(function () {
                $(cell).find('input[type=text]')
                    .datepicker({format: 'yyyy-mm-dd', autoclose: true});
            }, 0);
        }


        //navButtons
        jQuery(grid_selector).jqGrid('navGrid', pager_selector,
            { 	//navbar options
                edit: true,
                editicon: 'ace-icon fa fa-pencil blue',
                add: true,
                addicon: 'ace-icon fa fa-plus-circle purple',
                del: true,
                delicon: 'ace-icon fa fa-trash-o red',
                search: false,
                searchicon: 'ace-icon fa fa-search orange',
                refresh: true,
                refreshicon: 'ace-icon fa fa-refresh green',
                view: true,
                viewicon: 'ace-icon fa fa-search-plus grey',
            },
            {
                //edit record form
                //closeAfterEdit: true,
                //width: 700,
                recreateForm: true,
                beforeShowForm: function (e) {
                    var form = $(e[0]);
                    form.closest('.ui-jqdialog').find('.ui-jqdialog-titlebar').wrapInner('<div class="widget-header" />')
                    style_edit_form(form);
                }
            },
            {
                //new record form
                //width: 700,
                closeAfterAdd: true,
                recreateForm: true,
                viewPagerButtons: false,
                beforeShowForm: function (e) {
                    var form = $(e[0]);
                    form.closest('.ui-jqdialog').find('.ui-jqdialog-titlebar')
                        .wrapInner('<div class="widget-header" />')
                    style_edit_form(form);
                }
            },
            {
                //delete record form
                recreateForm: true,
                beforeShowForm: function (e) {
                    var form = $(e[0]);
                    if (form.data('styled')) return false;

                    form.closest('.ui-jqdialog').find('.ui-jqdialog-titlebar').wrapInner('<div class="widget-header" />')
                    style_delete_form(form);

                    form.data('styled', true);
                },
                onClick: function (e) {
                    //alert(1);
                }
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


        function style_edit_form(form) {
            //enable datepicker on "sdate" field and switches for "stock" field
            form.find('input[name=sdate]').datepicker({format: 'yyyy-mm-dd', autoclose: true})

            form.find('input[name=stock]').addClass('ace ace-switch ace-switch-5').after('<span class="lbl"></span>');
            //don't wrap inside a label element, the checkbox value won't be submitted (POST'ed)
            //.addClass('ace ace-switch ace-switch-5').wrap('<label class="inline" />').after('<span class="lbl"></span>');


            //update buttons classes
            var buttons = form.next().find('.EditButton .fm-button');
            buttons.addClass('btn btn-sm').find('[class*="-icon"]').hide();//ui-icon, s-icon
            buttons.eq(0).addClass('btn-primary').prepend('<i class="ace-icon fa fa-check"></i>');
            buttons.eq(1).prepend('<i class="ace-icon fa fa-times"></i>')

            buttons = form.next().find('.navButton a');
            buttons.find('.ui-icon').hide();
            buttons.eq(0).append('<i class="ace-icon fa fa-chevron-left"></i>');
            buttons.eq(1).append('<i class="ace-icon fa fa-chevron-right"></i>');
        }

        function style_delete_form(form) {
            var buttons = form.next().find('.EditButton .fm-button');
            buttons.addClass('btn btn-sm btn-white btn-round').find('[class*="-icon"]').hide();//ui-icon, s-icon
            buttons.eq(0).addClass('btn-danger').prepend('<i class="ace-icon fa fa-trash-o"></i>');
            buttons.eq(1).addClass('btn-default').prepend('<i class="ace-icon fa fa-times"></i>')
        }

        function style_search_filters(form) {
            form.find('.delete-rule').val('X');
            form.find('.add-rule').addClass('btn btn-xs btn-primary');
            form.find('.add-group').addClass('btn btn-xs btn-success');
            form.find('.delete-group').addClass('btn btn-xs btn-danger');
        }

        function style_search_form(form) {
            var dialog = form.closest('.ui-jqdialog');
            var buttons = dialog.find('.EditTable')
            buttons.find('.EditButton a[id*="_reset"]').addClass('btn btn-sm btn-info').find('.ui-icon').attr('class', 'ace-icon fa fa-retweet');
            buttons.find('.EditButton a[id*="_query"]').addClass('btn btn-sm btn-inverse').find('.ui-icon').attr('class', 'ace-icon fa fa-comment-o');
            buttons.find('.EditButton a[id*="_search"]').addClass('btn btn-sm btn-purple').find('.ui-icon').attr('class', 'ace-icon fa fa-search');
        }

        function beforeDeleteCallback(e) {
            var form = $(e[0]);
            if (form.data('styled')) return false;

            form.closest('.ui-jqdialog').find('.ui-jqdialog-titlebar').wrapInner('<div class="widget-header" />')
            style_delete_form(form);

            form.data('styled', true);
        }

        function beforeEditCallback(e) {
            var form = $(e[0]);
            form.closest('.ui-jqdialog').find('.ui-jqdialog-titlebar').wrapInner('<div class="widget-header" />')
            style_edit_form(form);
        }


        //it causes some flicker when reloading or navigating grid
        //it may be possible to have some custom formatter to do this as the grid is being created to prevent this
        //or go back to default browser checkbox styles for the grid
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


        //unlike navButtons icons, action icons in rows seem to be hard-coded
        //you can change them like this in here if you want
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

        //replace icons with FontAwesome icons like above
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

        function enableTooltips(table) {
            $('.navtable .ui-pg-button').tooltip({container: 'body'});
            $(table).find('.ui-pg-div').tooltip({container: 'body'});
        }

        //var selr = jQuery(grid_selector).jqGrid('getGridParam','selrow');

        $(document).one('ajaxloadstart.page', function (e) {
            $.jgrid.gridDestroy(grid_selector);
            $('.ui-jqdialog').remove();
        });
    });
</script>

</body>
</html>