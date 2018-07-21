<!DOCTYPE html>
<html>
<head>
	<title>Macfa</title>

	<?php 
	include_once 'config/config.php';
	 ?>

	 <link rel="stylesheet" type="text/css" href="css/index.css">

</head>
<body>
	<?php include_once 'config/header.php'; ?>
	<div class="main">
		<div class="main_section_items">
			<div class="main_section_item">
				<h2>환영합니다.</h2>
				<p>
					여러 기술들을 배우고 해본 후 남기기 위한 사이트입니다.

					<ul>
						<li>html, css, js ( frontend )</li>
						<li>jquery, vuejs ( hot FrameWork )</li>
						<li>php, java ( backend )</li>
						<li>Linux ( server )</li>
					</ul>
					<?php 
					echo $_SERVER['HTTP_HOST'];
					echo $_SERVER['REQUEST_URI'];
					 ?>
				</p>
			</div>
		</div>
	</div>
</body>
</html>