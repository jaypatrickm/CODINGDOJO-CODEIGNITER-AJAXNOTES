<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ajax Notes</title>
	<script type="text/javascript" src="/assets/js/jquery-2.1.3.min.js"></script>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
	<script type="text/javascript">
	$(document).ready(function(){
		$(document).on('submit', 'form', function() {
			var url = $(this).attr('action');
			var form_data = $(this).serialize();
			$.post(url, form_data, function(data) {
				$('ul#note-holder').html(data);
				
			}, "HTML");
			return false;
		});
		$(document).on('change', '#notes_descrip', function(){
			$(this).parent().submit();
		})
	});
	</script>
	<style>
		.pageTitle {
			padding-bottom: 4px;
			border-bottom: 2px solid grey;	
		}
		ul#note-holder {
			padding: 0px;
		}

		ul#note-holder li.note {
			padding-bottom: 10px;
			border-bottom: 2px solid grey;
			list-style-type: none;
		}
		ul#note-holder li.note div.title {
			width: 256px;
		}
		ul#note-holder li.note div.title, ul#note-holder li.note div.title h3, ul#note-holder li.note div.title a {
			display: inline-block;
			vertical-align: top;
		}
		ul#note-holder li.note a {
			margin-top: 17px;
		}
		ul#note-holder li.note textarea {
			resize: no-resize;
			margin-top: 10px;
		}
		form button {
			margin-top: 10px;
		}
	</style>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-xs-4 col-xs-4-offset">
				<h4 class="pageTitle">Notes</h4>
				<ul id="note-holder">
					<?php require('partials/index.php'); ?>
				</ul>
				<form action="create" method="post">
					<div class="form-group">
					    <input type="text" class="form-control" id="title" name="title" placeholder="Insert note title here">
					    <!--<input type="hidden" name="description" value=" ">-->
					    <button type="submit" class="btn btn-primary">Add Note</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</body>
</html>