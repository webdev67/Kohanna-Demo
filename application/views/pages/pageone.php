<html>
<head>
<title>This is my blog</title>
<style type="text/css">
#box{
background-color:orange;
border-color:black;
border-width:1px;
border-style:solid;
width:500px;
height:200px;
}
</style>
</head>
<body>
<h3>This is page one <?php echo($message); ?></h3>
<?php

print('<xmp>');
print_r($data);
print('</xmp>');
foreach($data as $dat):
?>
<div id="box">
	<?php
		echo($dat['test_name']);
	?>
</div>
<?php
endforeach;
?>
</body>
</html>
