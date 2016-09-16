<!DOCTYPE html>
<html>
<head>
	<title>Hello</title>
</head>
<?php
if(isset($_GET['header'])):	
?>
<style type="text/css">
	header{display: none;}
</style>

<?php
endif;
?>
<header>
<h1>this is the header</h1>
</header>