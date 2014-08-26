<html>
  <head>
    <meta charset='utf-8'/>
    <title><?php echo Yii::app()->name; ?></title>
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap.css"/>
		<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/basic_style.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/loading.css"/>
		<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-2.1.1.min.js" type="text/javascript"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/site.js" type="text/javascript"></script>
  </head>
  <body>
    <ul class="nav nav-pills">
    <li><a href="index.php">หน้าแรก</a></li>
    <li class="dropdown">
      <a href="#" data-toggle="dropdown" class="dropdown-toggle">Dropdown <b class="caret"></b></a>
      <ul class="dropdown-menu" id="menu1">
        <li>
            <a href="#">2-level Menu <span class="glyphicon glyphicon-chevron-right" /></a>
            <ul class="dropdown-menu sub-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li class="divider"></li>
                <li class="nav-header">Nav header</li>
                <li><a href="#">Separated link</a></li>
                <li><a href="#">One more separated link</a></li>
            </ul>
        </li>
        <li><a href="#">Another action</a></li>
        <li><a href="#">Something else here</a></li>
        <li class="divider"></li>
        <li><a href="#">Separated link</a></li>
      </ul>
    </li>
    <li class="dropdown">
      <a href="?r=site/registerCompany">ลงทะเบียน</a>
    </li>
    <li class="dropdown">
      <a href="?r=site/page&view=about">เกี่ยวกับ</a>
    </li>
    			<?php if(isset(Yii::app()->session['id'])){
				echo '<li>
                <a href="?r=site/forminput"><span class="glyphicon glyphicon-send"/> ลงทะเบียน</a></li>
        <li>
                <a href="?r=site/formblog"><span class="glyphicon glyphicon-send"/> เพิ่มBlog</a></li>
        <li style="display: inline; float:right;">
                <a href="?r=site/logout"><span class="glyphicon glyphicon-log-out"/> ออกจากระบบ</a></li>
        <li style="display: inline; float:right;">
                <a href="?r=site/main"><span class="glyphicon glyphicon-user"/> สวัสดีคุณ  '.Yii::app()->session['username'].'</a></li>';
			}else{
				echo '<li style="display: inline; float:right;"><a href="?r=site/formlogin"><span class="glyphicon glyphicon-log-in"/> เข้าระบบ</a></li>';
				echo '<li style="display: inline; float:right;"><a href="#"><span class="glyphicon glyphicon-user"/> สวัสดีคุณ guest</a></li>';
			}?>
    </ul>

    	<div class="panel panel-success" style="margin-left:13px; margin-right:10px;">
			<div class="panel panel-heading"><?php echo Yii::app()->name; ?>
			</div>
			<div class="panel panel-body">
        <div class="container">
				      <?php echo $content; ?>
        </div>
			</div>
			<div class="panel panel-footer">
				<center>
					@2014 <a href="http://www.Kaimintsoft.com" target="_blank"> Kaimintsoft </a>
				</center>
			</div>
		</div>
  </body>
</html>
