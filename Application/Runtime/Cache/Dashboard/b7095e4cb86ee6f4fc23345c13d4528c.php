<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="柠檬工作室 LimonPlayer Studio">
  <meta name="keywords" content="HTML, CSS, JS, JavaScript, framework, bootstrap, front-end, frontend, web development">
  <meta name="author" content="作者：张超 <limonplayer.cn>"
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dashboard-背包客Backpacker-校园二手商品信息发布平台</title>
  <!-- basic styles -->
  <link href="/Public/assets/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="/Public/assets/css/font-awesome.min.css" />
  <link rel="icon" href="/Public/favicon.ico">
    <!--[if IE 7]>
      <link rel="stylesheet" href="assets/css/font-awesome-ie7.min.css" />
      <![endif]-->
      <link rel="stylesheet" href="/Public/assets/css/dropzone.css" />
      <!-- page specific plugin styles -->

      <!-- fonts -->

      <!-- ace styles -->

      <link rel="stylesheet" href="/Public/assets/css/ace.min.css" />
      <link rel="stylesheet" href="/Public/assets/css/ace-rtl.min.css" />
      <link rel="stylesheet" href="/Public/assets/css/ace-skins.min.css" />

    <!--[if lte IE 8]>
      <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
      <![endif]-->

      <!-- inline styles related to this page -->

      <!-- ace settings handler -->

      <script src="/Public/assets/js/ace-extra.min.js"></script>

      <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->

    <!--[if lt IE 9]>
    <script src="assets/js/html5shiv.js"></script>
    <script src="assets/js/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
    <div class="navbar navbar-default" id="navbar">
      <script type="text/javascript">
        try{ace.settings.check('navbar' , 'fixed')}catch(e){}
      </script>

      <div class="navbar-container" id="navbar-container">
        <div class="navbar-header pull-left">
          <a href="#" class="navbar-brand">
            <small>
              <i class="icon-leaf"></i>
              Dashboard后台管理系统
            </small>
          </a><!-- /.brand -->
        </div><!-- /.navbar-header -->

        <div class="navbar-header pull-right" role="navigation">
          <ul class="nav ace-nav">
            <li class="light-blue">
              <a data-toggle="dropdown" href="#" class="dropdown-toggle">
                <img class="nav-user-photo" src="/Public/assets/avatars/user.jpg" alt="Jason's Photo" />
                <span class="user-info">
                  <small>欢迎光临,</small>
                  <?php echo ($usermsg['uname']); ?>
                </span>
                <i class="icon-caret-down"></i>
              </a>
              <ul class="user-menu pull-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
               <li>
                <a href="<?php echo U('/Home/Index/index');?>">
                  <i class="icon-home"></i>
                  前台
                </a>
              </li>
              <li>
                <a href="<?php echo U('/Dashboard/User/logout');?>">
                  <i class="icon-off"></i>
                  退出
                </a>
              </li>
            </ul>
          </li>
        </ul><!-- /.ace-nav -->
      </div><!-- /.navbar-header -->
    </div><!-- /.container -->
  </div>

  <div class="main-container" id="main-container">
    <script type="text/javascript">
      try{ace.settings.check('main-container' , 'fixed')}catch(e){}
    </script>

    <div class="main-container-inner">
      <a class="menu-toggler" id="menu-toggler" href="#">
        <span class="menu-text"></span>
      </a>

      <div class="sidebar" id="sidebar">
        <script type="text/javascript">
          try{ace.settings.check('sidebar' , 'fixed')}catch(e){}
        </script>
        <ul class="nav nav-list">
          <li class="<?php echo ($gac); ?>">
            <a href="<?php echo U('/Dashboard/Index/index');?>?uid=<?php echo ($usermsg['uid']); ?>">
              <i class="icon-dashboard"></i>
              <span class="menu-text"> 个人中心 </span>
            </a>
          </li>


          <li class="<?php echo ($cac); ?>">
            <a href="<?php echo U('/Dashboard/Goods/see');?>?uid=<?php echo ($usermsg['uid']); ?>" class="dropdown-toggle">
              <i class="icon-list"></i>
              <span class="menu-text"> 查看已发布的 </span>
            </a>
          </li>

          <li class="<?php echo ($fac); ?>">
            <a href="<?php echo U('/Dashboard/Goods/publiced');?>?uid=<?php echo ($usermsg['uid']); ?>" class="dropdown-toggle">
              <i class="icon-edit"></i>
              <span class="menu-text"> 发布宝贝信息 </span>
            </a>
          </li>

          <li class="<?php echo ($aac); ?>">
            <a href="<?php echo U('/Dashboard/Index/about');?>?uid=<?php echo ($usermsg['uid']); ?>" class="dropdown-toggle">
              <i class="icon-tag"></i>
              <span class="menu-text"> 控制台 </span>
            </a>

          </li>

        </ul><!-- /.nav-list -->

        <div class="sidebar-collapse" id="sidebar-collapse">
          <i class="icon-double-angle-left" data-icon1="icon-double-angle-left" data-icon2="icon-double-angle-right"></i>
        </div>

        <script type="text/javascript">
          try{ace.settings.check('sidebar' , 'collapsed')}catch(e){}
        </script>
      </div>

      <div class="main-content">
	<div class="breadcrumbs" id="breadcrumbs">
		<script type="text/javascript">
			try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
		</script>

		<ul class="breadcrumb">
			<li>
				<i class="icon-home home-icon"></i>
				<a href="#">Dashboard</a>
			</li>
			<li class="active">发布二手信息</li>
		</ul><!-- .breadcrumb -->

		<div class="nav-search" id="nav-search">
			<form class="form-search">
				<span class="input-icon">
					<input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
					<i class="icon-search nav-search-icon"></i>
				</span>
			</form>
		</div><!-- #nav-search -->
	</div>

	<div class="page-content">
		<div class="page-header">
			<h1>
				发布宝贝
				<small>
					<i class="icon-double-angle-right"></i>
					快发布你手边的宝贝吧
				</small>
			</h1>
		</div><!-- /.page-header -->

		<div class="row">
			<div class="col-xs-12">
				<!-- PAGE CONTENT BEGINS -->

				<div class="alert alert-info">
					<i class="icon-hand-right"></i>

					上传你的宝贝图片时，请注意下图片数量，现支持5张图哦！！
					<button class="close" data-dismiss="alert">
						<i class="icon-remove"></i>
					</button>
				</div>

				<div class="demo">
					<form id="uploadForm" action="<?php echo U('Dashboard/Goods/publiced');?>" method="post" enctype="multipart/form-data">
						<div class="">
							<span>上传图片</span><input type="file" name="photo[]" multiple="">
							<div class=""><span class="">物品名称:</span><input type="text" name="gname" class=""></div>
							<div class=" ">
								<span class="">物品分类:</span>
								<div class="styled-select">
									<select id="country" name="gtypeid" class="frm-field required">
										<option value="0">请选择</option>
										<?php if(is_array($typemsg)): $i = 0; $__LIST__ = $typemsg;if( count($__LIST__)==0 ) : echo "暂时没有数据" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["tid"]); ?>"><?php echo ($vo["tname"]); ?></option><?php endforeach; endif; else: echo "暂时没有数据" ;endif; ?>
									</select>
								</div>
							</div>
							<div class="fabu jz"><span class="">报价:</span><input type="text" name="gprice" class=""><span class="">元</span></div>
							<div class="fabu jz"><span class="">原价:</span><input type="text" name="goldprice" class=""><span class="">元(必填)</span></div>
							<div class="fabu"><span class="">卖家称呼:</span><input type="text" name="gadname" class="" placeholder="例：王同学"></div>
							<div class="fabu"><span class="">联系方式:</span><input type="text" name="gadtel" class="kuang4" placeholder="手机/QQ/微信均可"></div>
							<div class="liuyan"><span class="">卖家留言:</span><textarea class="" name="gdetail" cols="50" rows="5" placeholder="建议写对物品的描述或出售原因"></textarea></div>
							<button type="submit" class="btn">确认发布</button>
						</div>
					</form>
				</div><!-- PAGE CONTENT ENDS -->
			</div><!-- /.col -->
		</div><!-- /.row -->
	</div><!-- /.page-content -->
</div><!-- /.main-content -->

      <div class="ace-settings-container" id="ace-settings-container">
        <div class="btn btn-app btn-xs btn-warning ace-settings-btn" id="ace-settings-btn">
          <i class="icon-cog bigger-150"></i>
        </div>

        <div class="ace-settings-box" id="ace-settings-box">
          <div>
            <div class="pull-left">
              <select id="skin-colorpicker" class="hide">
                <option data-skin="default" value="#438EB9">#438EB9</option>
                <option data-skin="skin-1" value="#222A2D">#222A2D</option>
                <option data-skin="skin-2" value="#C6487E">#C6487E</option>
                <option data-skin="skin-3" value="#D0D0D0">#D0D0D0</option>
              </select>
            </div>
            <span>&nbsp; 选择皮肤</span>
          </div>

          <div>
            <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-navbar" />
            <label class="lbl" for="ace-settings-navbar"> 固定导航条</label>
          </div>

          <div>
            <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-sidebar" />
            <label class="lbl" for="ace-settings-sidebar"> 固定滑动条</label>
          </div>

          <div>
            <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-breadcrumbs" />
            <label class="lbl" for="ace-settings-breadcrumbs">固定面包屑</label>
          </div>

          <div>
            <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-rtl" />
            <label class="lbl" for="ace-settings-rtl">切换到左边</label>
          </div>

          <div>
            <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-add-container" />
            <label class="lbl" for="ace-settings-add-container">
              切换窄屏
              <b></b>
            </label>
          </div>
        </div>
      </div><!-- /#ace-settings-container -->
    </div><!-- /.main-container-inner -->

    <a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
      <i class="icon-double-angle-up icon-only bigger-110"></i>
    </a>
  </div><!-- /.main-container -->

  <!-- basic scripts -->

  <!--[if !IE]> -->

  <script src="/Public/assets/js/jquery.min.js"></script>

  <!-- <![endif]-->

    <!--[if IE]>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<![endif]-->

<!--[if !IE]> -->

<script type="text/javascript">
  window.jQuery || document.write("<script src='/Public/assets/js/jquery-2.0.3.min.js'>"+"<"+"script>");
</script>

<!-- <![endif]-->

    <!--[if IE]>
<script type="text/javascript">
 window.jQuery || document.write("<script src='/Public/assets/js/jquery-1.10.2.min.js'>"+"<"+"script>");
</script>
<![endif]-->

<script type="text/javascript">
  if("ontouchend" in document) document.write("<script src='/Public/assets/js/jquery.mobile.custom.min.js'>"+"<"+"script>");
</script>
<script src="/Public/assets/js/bootstrap.min.js"></script>
<script src="/Public/assets/js/typeahead-bs2.min.js"></script>
<script src="/Public/assets/js/jquery-ui-1.10.3.custom.min.js"></script>
<script src="/Public/assets/js/jquery.ui.touch-punch.min.js"></script>
<script src="/Public/assets/js/jquery.gritter.min.js"></script>
<script src="/Public/assets/js/bootbox.min.js"></script>
<script src="/Public/assets/js/jquery.slimscroll.min.js"></script>
<script src="/Public/assets/js/jquery.easy-pie-chart.min.js"></script>
<script src="/Public/assets/js/jquery.hotkeys.min.js"></script>
<script src="/Public/assets/js/bootstrap-wysiwyg.min.js"></script>
<script src="/Public/assets/js/select2.min.js"></script>
<script src="/Public/assets/js/date-time/bootstrap-datepicker.min.js"></script>
<script src="/Public/assets/js/fuelux/fuelux.spinner.min.js"></script>
<script src="/Public/assets/js/x-editable/bootstrap-editable.min.js"></script>
<script src="/Public/assets/js/x-editable/ace-editable.min.js"></script>
<script src="/Public/assets/js/jquery.maskedinput.min.js"></script>
<script src="/Public/assets/js/jquery.sparkline.min.js"></script>
<script src="/Public/assets/js/flot/jquery.flot.min.js"></script>
<script src="/Public/assets/js/flot/jquery.flot.pie.min.js"></script>
<script src="/Public/assets/js/flot/jquery.flot.resize.min.js"></script>

<!-- ace scripts -->

<script src="/Public/assets/js/ace-elements.min.js"></script>
<script src="/Public/assets/js/ace.min.js"></script>
<!-- inline scripts related to this page -->



<!-- inline scripts related to this page -->
<script type="text/javascript">
 jQuery(function($) {
  $('#btn-save').click(function(){
    var pass1 = $('#form-field-pass1').val();
    var pass2 = $('#form-field-pass2').val();
    if(pass2 != pass1)
      alert('两次密码不一致，请重新输入');
    else{
      var url = "<?php echo U('Dashboard/Ajax/motifypwd');?>";
      var data = {"uid":$('#uid').val(),"pwd": pass1};
      var success = function(response){
        if(response)
          alert('已修改');
        else
          alert('修改失败');
      }
      $.post(url, data ,success, "json");
    }
  })
});
</script>
<script type="text/javascript">
  jQuery(function($) {
    $('#user-profile-3').find('input[type=file]').ace_file_input({
      style:'well',
      btn_choose:'Change avatar',
      btn_change:null,
      no_icon:'icon-picture',
      thumbnail:'large',
      droppable:true,
      before_change: function(files, dropped) {
        var file = files[0];
        if(typeof file === "string") {
          if(! (/\.(jpe?g|png|gif)$/i).test(file) ) return false;
        }
        else {
          var type = $.trim(file.type);
          if( ( type.length > 0 && ! (/^image\/(jpe?g|png|gif)$/i).test(type) ) || ( type.length == 0 && ! (/\.(jpe?g|png|gif)$/i).test(file.name) )) return false;
          if( file.size > 110000 ) {return false; }
        }
        return true;
      }
    }).end().find('button[type=reset]').on(ace.click_event, function(){
      $('#user-profile-3 input[type=file]').ace_file_input('reset_input');
    })
    .end().find('.date-picker').datepicker().next().on(ace.click_event, function(){
      $(this).prev().focus();
    })
    $('.input-mask-phone').mask('999-9999-9999');
    $('[data-toggle="buttons"] .btn').on('click', function(e){
      var target = $(this).find('input[type=radio]');
      var which = parseInt(target.val());
      $('.user-profile').parent().addClass('hide');
      $('#user-profile-'+which).parent().removeClass('hide');
    });
  });
</script>
<script type="text/javascript">
  jQuery(function($) {
    $('.easy-pie-chart.percentage').each(function(){
      var $box = $(this).closest('.infobox');
      var barColor = $(this).data('color') || (!$box.hasClass('infobox-dark') ? $box.css('color') : 'rgba(255,255,255,0.95)');
      var trackColor = barColor == 'rgba(255,255,255,0.95)' ? 'rgba(255,255,255,0.25)' : '#E2E2E2';
      var size = parseInt($(this).data('size')) || 50;
      $(this).easyPieChart({
        barColor: barColor,
        trackColor: trackColor,
        scaleColor: false,
        lineCap: 'butt',
        lineWidth: parseInt(size/10),
        animate: /msie\s*(8|7|6)/.test(navigator.userAgent.toLowerCase()) ? false : 1000,
        size: size
      });
    })

    $('.sparkline').each(function(){
      var $box = $(this).closest('.infobox');
      var barColor = !$box.hasClass('infobox-dark') ? $box.css('color') : '#FFF';
      $(this).sparkline('html', {tagValuesAttribute:'data-values', type: 'bar', barColor: barColor , chartRangeMin:$(this).data('min') || 0} );
    });
    var placeholder = $('#piechart-placeholder').css({'width':'90%' , 'min-height':'150px'});
    var data = [
    { label: "social networks",  data: 38.7, color: "#68BC31"},
    { label: "search engines",  data: 24.5, color: "#2091CF"},
    { label: "ad campaigns",  data: 8.2, color: "#AF4E96"},
    { label: "direct traffic",  data: 18.6, color: "#DA5430"},
    { label: "other",  data: 10, color: "#FEE074"}
    ]
    function drawPieChart(placeholder, data, position) {
      $.plot(placeholder, data, {
        series: {
          pie: {
            show: true,
            tilt:0.8,
            highlight: {
              opacity: 0.25
            },
            stroke: {
              color: '#fff',
              width: 2
            },
            startAngle: 2
          }
        },
        legend: {
          show: true,
          position: position || "ne", 
          labelBoxBorderColor: null,
          margin:[-30,15]
        }
        ,
        grid: {
          hoverable: true,
          clickable: true
        }
      })
    }
    drawPieChart(placeholder, data);
    placeholder.data('chart', data);
    placeholder.data('draw', drawPieChart);
    var previousPoint = null;

    placeholder.on('plothover', function (event, pos, item) {
      if(item) {
        if (previousPoint != item.seriesIndex) {
          previousPoint = item.seriesIndex;
          var tip = item.series['label'] + " : " + item.series['percent']+'%';
        }
      } else {
        previousPoint = null;
      }
    });
    var d1 = [];
    for (var i = 0; i < Math.PI * 2; i += 0.5) {
      d1.push([i, Math.sin(i)]);
    }

    var d2 = [];
    for (var i = 0; i < Math.PI * 2; i += 0.5) {
      d2.push([i, Math.cos(i)]);
    }

    var d3 = [];
    for (var i = 0; i < Math.PI * 2; i += 0.2) {
      d3.push([i, Math.tan(i)]);
    }
    var sales_charts = $('#sales-charts').css({'width':'100%' , 'height':'220px'});
    $.plot("#sales-charts", [
      { label: "Domains", data: d1 },
      { label: "Hosting", data: d2 },
      { label: "Services", data: d3 }
      ], {
        hoverable: true,
        shadowSize: 0,
        series: {
          lines: { show: true },
          points: { show: true }
        },
        xaxis: {
          tickLength: 0
        },
        yaxis: {
          ticks: 10,
          min: -2,
          max: 2,
          tickDecimals: 3
        },
        grid: {
          backgroundColor: { colors: [ "#fff", "#fff" ] },
          borderWidth: 1,
          borderColor:'#555'
        }
      });

    $('.dialogs,.comments').slimScroll({
      height: '300px'
    });
    var agent = navigator.userAgent.toLowerCase();
    if("ontouchstart" in document && /applewebkit/.test(agent) && /android/.test(agent))
      $('#tasks').on('touchstart', function(e){
        var li = $(e.target).closest('#tasks li');
        if(li.length == 0)return;
        var label = li.find('label.inline').get(0);
        if(label == e.target || $.contains(label, e.target)) e.stopImmediatePropagation() ;
      });

    $('#tasks').sortable({
      opacity:0.8,
      revert:true,
      forceHelperSize:true,
      placeholder: 'draggable-placeholder',
      forcePlaceholderSize:true,
      tolerance:'pointer',
      stop: function( event, ui ) {$(ui.item).css('z-index', 'auto');}
    });
    $('#tasks').disableSelection();
    $('#tasks input:checkbox').removeAttr('checked').on('click', function(){
      if(this.checked) $(this).closest('li').addClass('selected');
      else $(this).closest('li').removeClass('selected');
    });
  })
</script>
</body>
</html>