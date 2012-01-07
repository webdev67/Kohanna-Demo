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

#query_twitter{
background-color:yellow;
border-color:black;
border-width:1px;
border-style:solid;
width:500px;
height:200px;
}

#regular_input{
background-color:pink;
border-color:black;
border-width:1px;
border-style:solid;
width:500px;
height:120px;
}
</style>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.16/jquery-ui.min.js"></script>
<script type="text/javascript" src="http://jquery-jsonp.googlecode.com/files/jquery.jsonp-2.2.0.min.js"></script>
<script type="text/javascript">
var loc="http://search.twitter.com/search.json?q=sushi%20toronto";
$(function(){
	$.ajax({
		'url':'http://search.twitter.com/search.json',
		'data':'q=sushi%20toronto',
		'type':'get',
		'dataType':'jsonp',
		'success':function(a,b,c){
			$.each(a,function(key,value){
				if(key=="results")
				{
					for(i=0;i<value.length;i++)
					{
						//alert(value[i].text);
					}
				}
			});
			//$("#tweets").html(a.toSource());
		},
		'error':function(e,f,g){
			alert(e.toSource());
		}
	});
});

function populateDb()
{
	$.ajax({
		'url':'http://search.twitter.com/search.json',
		'data':'q='+$("#tweet_topic").val(),
		'type':'get',
		'dataType':'jsonp',
		'success':function(a,b,c){
			$.each(a,function(key,value){
				if(key=='results')
				{
					for(i=0;i<value.length;i++)
					{
						$.ajax({
							'url':'/kohanna/blog/populateDb',
							'data':'message='+escape(value[i].text),
							'success':function(e){
								//alert('added successfully');
							}
						});
					}
					alert('Completed');
					location.reload();
				}
			});
		}
	});
}

function emptyDatabase()
{
	$.ajax({
	  'url':'/kohanna/blog/emptyDb',
		  'success':function(e){
			  location.reload();
	  }
	});
}

</script>
</head>
<body>
<div id="query_twitter">
Enter Topic to populate the database with Twitter&copy; tweets about it:<br>
<input type="text" id="tweet_topic"><br>
<input type="button" value="POPULATE DATABASE" onClick="javascript:populateDb()">
<input type="button" value="Empty Database" onClick="javascript:emptyDatabase()">
</div>
<div id="regular_input">
<h3>To enter regular text (non twitter linked) into a box below as a div, just type it below and hit submit</h3>
<form name="enterdata" method="get" action="/kohanna/blog/another">
Enter Name: <input type="text" name="name">
<input type="submit" value="submit">
</form>
</div>
<h3>Hello world...this is my blog and this is my <?php echo($message); ?></h3>

<?php
if(!empty($data))
{
foreach($data as $dat):
?>
<div id="box">
	<?php
		echo("<p align='center'>".$dat['test_name']."</p>");
	?>
</div>
<br>
<?php
endforeach;
}
?>
<div id="tweets">

</div>
</body>
</html>
