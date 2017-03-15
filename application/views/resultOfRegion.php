<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="language" content="en">
    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    <script type="text/javascript" src="<?php echo base_url()?>/js/jquery.1.11.1.min.js"></script>
    <link rel="stylesheet" href="<?php echo base_url()?>/css/style_manu.css">
    <link href="<?php echo base_url()?>css/style.css" rel="stylesheet" type="text/css">
    <link rel="shortcut icon" href="<?php echo base_url()?>../favicon.ico">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/demo.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/component.css" />
    <link rel="stylesheet" href="<?php echo base_url()?>css/lightbox.min.css">
    <script type="text/javascript">
    function region($region){

      location.href="detail_region?region="+$region;
    }
    function temple($temple){

      location.href="detail_temple?temple="+$temple;
    }
    function reign($reign){

      location.href="detail_reign?reign="+$reign;
    }
</script>
</head>
  <body>
    <div class="container col-xs-12 col-md-12">
    <div id="page">
      <div id="header">
  				<a href="<?php echo site_url('MonasteryThailand')?>" style="margin-left:5%"class="logo"><img class="img-responsive" src="<?php echo base_url()?>image/logo.png" alt=""></a>
          <form method="post" class="dark" action="<?php echo site_url('MonasteryThailand/query_ans')?>">
	            <input type="text" name="query" placeholder="ค้นหาข้อมูล">
	            <input type="submit" value="Search">
	        </form>
  			</div>
        <!-- menu -->
				<div class="col-xs-12 col-md-3" style="margin-top:2%">
					<ul class="mainmenu">
								<li style="color:white;">
									<p style="font-size:20px; text-align:center;">
										<span>ภูมิภาค</span>
									</p>
								</li>
												<ul class="submenu" draggable="true" style="font-size:15px;">
                        <?php foreach($region->result_array() as $row){
                                    echo '<li><span id="'.$row["regionID"].'" onclick="region(id)">'.$row["regionName"].'</span></li>';
                              }
                              ?>
												</ul>
												<li style="color:white; background-color: #FFBD33;">
													<p style="font-size:20px; text-align:center;">
														<span>วัดประจำรัชกาล</span></p></li>
																<ul class="submenu" draggable="true" style="font-size:15px;">
                                  <li><span id="1" onclick="reign(id)">รัชกาลที่ 1</span></li>
                                  <li><span id="2" onclick="reign(id)">รัชกาลที่ 2</span></li>
                                  <li><span id="3" onclick="reign(id)">รัชกาลที่ 3</span></li>
                                  <li><span id="4" onclick="reign(id)">รัชกาลที่ 4</span></li>
                                  <li><span id="5" onclick="reign(id)">รัชกาลที่ 5</span></li>
                                  <li><span id="6" onclick="reign(id)">รัชกาลที่ 6</span></li>
                                  <li><span id="7" onclick="reign(id)">รัชกาลที่ 7</span></li>
                                  <li><span id="8" onclick="reign(id)">รัชกาลที่ 8</span></li>
                                  <li><span id="9" onclick="reign(id)">รัชกาลที่ 9</span></li>
																</ul>
					</ul>
					<script src="<?php echo base_url()?>/js/script.js"></script>
					<script src="<?php echo base_url()?>/js/retina.min.js"></script>
				</div>
				<!-- close menu -->
					<div class="col-xs-12 col-md-9" style="margin-top:2%;">
						<ol class="breadcrumb list-inline" style=" margin-bottom: -0%; background-color: #ffffff;">
							<li>
								<a href="<?php echo site_url('MonasteryThailand')?>" style="color: #FFBD33; text-decoration: none;">หน้าหลัก</a>
							</li>
              <?php
              $i=1;
              foreach($show_region->result_array() as $row){
                if($i>=1){
                    echo '<li class="active">ภาค'.$row["regionName"].'</li>';
                    $i=0;
                  }
                }
                ?>
						</ol>
						<div class="panel panel-default ">
							<div class="panel-body">
									<div class="row">
                    <?php foreach($show_region->result_array() as $row_region){
                      echo ' <div class="col-lg-4 col-xs-12 col-md-6">
  												        <div class="thumbnail" style="height: 300px!important;">
                                  <a class="example-image-link" href="'.base_url().''.$row_region["image"].'" data-lightbox="example-1"><img style="height: 200px!important;" class="example-image img-responsive"" src="'.base_url().''.$row_region["image"].'" alt="image-1" /></a>
                                    <br><p style="text-align: center;"><a id="'.$row_region["temple_ID"].'" onclick="temple(id)" style="font-size:15px;font-weight:bold;color: red;">'.$row_region["temple_name"].'</a></p>
                                        <p style="text-align: center;font-size: 14px;color: black;">จังหวัด'.$row_region["province"].'</p>

  													      </div>
  											      </div>';
                    }?>
                    <script src="<?php echo base_url()?>js/lightbox-plus-jquery.min.js"></script>
										</div>
									 </div>
								 </div>
							 </div>
			</div>
      	<div style="margin-left:-15%; margin-right:-15%; margin-top:-5%; width:auto; "><img class="img-responsive" src="<?php echo base_url()?>image/bg-footer.png" alt=""></div>
		</div>
	</div>
</body>
</html>
