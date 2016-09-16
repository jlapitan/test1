
<footer>
<h4>this is the footer	</h4>
</footer>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<?php
if(isset($_GET['header'])):	
?>
<script type="text/javascript">
	
	function addParameterToURL(param){
    _url = location.href;
    _url += (_url.split('?')[1] ? '&':'?') + param;
    return _url;
}

//$('a').attr('href')

//$('a').attr('href',addParameterToURL('header=no'));

$("a").attr('href', function(i, h) {
     return h + (h.indexOf('?') != -1 ? "&header=no" : "?header=no");
   });


</script>

<?php
endif;
?>


</html>