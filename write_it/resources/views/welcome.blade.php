<!DOCTYPE html>
<html>
<head>
	<title>Write and Post</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
	<style>
		.container {
			margin-top: 50px;
		}
		.sidebar {
			background-color: #f8f9fa;
			padding: 20px;
			border-radius: 5px;
			height: 100%;
		}
		.post {
			margin-top: 20px;
			border: 1px solid #dee2e6;
			border-radius: 5px;
			padding: 20px;
		}
	</style>
</head>
<body>

	<div class="container">
		<div class="row">
			<div class="col-md-3">
				<div class="sidebar">
					<h4>Options</h4>
					<ul>
						<li><a href="#">Home</a></li>
						<li><a href="#">Settings</a></li>
						<li><a href="#">Profile</a></li>
						<li><a href="#">Necessary</a></li>
					</ul>
				</div>
			</div>
			<div class="col-md-9">
				<form>
					<div class="form-group">
						<label for="title">Title</label>
						<input type="text" class="form-control" id="title" name="title" required>
					</div>
					<div class="form-group">
						<label for="content">Content</label>
						<textarea name="content" id="content"></textarea>
					</div>
					<button type="button" class="btn btn-primary" onclick="addPost()">Add Post</button>
				</form>
				<div id="posts"></div>
			</div>
		</div>
	</div>

	<script>
		CKEDITOR.replace('content');

		var posts = [];

		function addPost() {
			var title = document.getElementById('title').value;
			var content = CKEDITOR.instances.content.getData();
			var post = {
				title: title,
				content: content
			};
			posts.push(post);
			displayPosts();
		}

		function displayPosts() {
			var html = '';
			for (var i = 0; i < posts.length; i++) {
				var post = posts[i];
				html += '<div class="post"><h5>' + post.title + '</h5>' + post.content + '</div>';
			}
			document.getElementById('posts').innerHTML = html;
		}
	</script>

</body>
</html>
