<html>
<head>
	<title>อารามไทย</title>
	<meta  charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
	<link href="<?php echo base_url()?>css/style.css" rel="stylesheet" type="text/css">
	<link rel="shortcut icon" href="<?php echo base_url()?>../favicon.ico">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/demo.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/component.css" />
	<script type="text/javascript">
        function region($region){
          location.href="MonasteryThailand/detail_region?region="+$region;
        }
    </script>
</head>
<body>
<div class="container">
	<div id="page">
		<div id="body">
			<div id="header col-xs-12 col-md-12">
					<a href="<?php echo site_url('MonasteryThailand')?>" class="logo"><img class="img-responsive" src="<?php echo base_url()?>image/logo.png" alt=""></a>
					<form method="post" class="dark" action="<?php echo site_url('MonasteryThailand/query_ans')?>">
	            <input type="text" name="query" placeholder="ค้นหาข้อมูล">
	            <input type="submit" value="Search">
	        </form>
				</div>
			<div class="featured" style="margin-top:1%">
				<ul>
					<li>
						<span id="1" onclick="region(id)"><img src="<?php echo base_url()?>image/North.png" alt=""></span>
					</li>
					<li>
						<span id="2" onclick="region(id)"><img src="<?php echo base_url()?>image/Northeast.png"></span>
					</li>
					<li>
						<span id="3" onclick="region(id)"><img src="<?php echo base_url()?>image/Central.png" alt=""></span>
					</li>
					<li>
						<span id="4" onclick="region(id)"><img src="<?php echo base_url()?>image/West.png" alt=""></span>
					</li>
					<li>
						<span id="5" onclick="region(id)"><img src="<?php echo base_url()?>image/East.png" alt=""></span>
					</li>
					<li>
						<span id="6" onclick="region(id)"><img src="<?php echo base_url()?>image/South.png" alt=""></span>
					</li>
				</ul>
			</div>
		</div>
		<div style="margin-left:-15%; margin-top:-5%; width:auto; "><img src="<?php echo base_url()?>image/bg-footer.png" alt=""></div>
	</div>
</div>
</body>
</html>
