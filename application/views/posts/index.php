<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Ajax Posts</title>
	<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
	<script>
	</script>
	<style>
		form
		{
			margin-bottom: 30px;
		}
		#posts 
		{
			width: 200px;
			height: 200px;
			border: 2px solid black; 
		}
	</style>
</head>
<body>
	<div>
		<h1>My Posts:</h1>
		<div id="posts">
<?php
		foreach($posts as $post)
		{ ?>
			<div class="post">
				<p><?= $post['description'] ?></p>	
			</div>
<?php
		}
?> 
		</div>
	</div>

	<form action="/posts/create" method="post">
		<p>
			<label>Add a Note:</label>
			<textarea name="description"></textarea>
			<input type="submit" value="Post It!">
		</p>
	</form>
</body>
</html>