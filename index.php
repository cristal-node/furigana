#!/bin/php
<html>
	<head>
		<meta http-equiv="Content-type" content="text/html; charset=utf-8">
		<title>ふりがな</title>
		<style>
			p {
				color: #7b7774;
				text-align: center
			}
			
			rb {
				color:#3a251c;
				border-bottom: 1px solid #3a251c
			}
			
			rt {
				color:#000;
				text-align: center
			}
		</style>
	</head>
	<body>
		<p>
			<?php
			if(isset($_GET["q"])){
				$string = htmlspecialchars($_GET["q"]);
			} else {
				$string = "";
			};
			system("echo \"$string\" | furigana --html");
			?>
		</p>
	</body>
</html>
