<?php session_start();
$user = $_SESSION['username'] ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
	<title>NMS-Form</title>
	<!-- bootstrap css -->
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" rel="stylesheet">
	<!-- nms stylesheet -->
	<link href="css/nms.css" rel="stylesheet">
	<?php include'includes/errorCheck.php' ?>
</head>

<body>
	<!-- navigation include file -->
	<?php include'includes/navinclude.php' ?>
	<br>

    <h4 class="subheading text-center">Welcome to the National Museums Scotland Form</h4>
		<div class="container text-center">
			<h5>Before you leave a comment please read the rules!</h5>
			<ul>
				<li>Please be respectful to other commenters</li>
				<li>Do not use profanity</li>
				<li>Keep the comments relevant to the National Museums of Scotland</li>
				<li>Any abuse towards others will not be tolerated</li>
			</ul>
		</div>
    <div class="comment-form-container container">
        <form id="frm-comment">
            <div class="input-row">
                <input type="hidden" name="comment_id" id="commentId" />
								<input class="input-field" type="text" name="name" id="name"/>
            </div>
            <div class="input-row">
                <textarea class="input-field" name="comment"
                    id="comment">  </textarea>
            </div>
            <div>
                <input type="button" class="btn-submit" id="submitButton"
                    value="Publish" /><div id="comment-message">Comments Added Successfully!</div>
            </div>

        </form>
    </div>
		<br>
    <div class="container" id="output"></div>
		<!-- footer include -->
		<?php include'includes/footerInclude.php' ?>

		<!-- bootstrap scripts -->
		<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>

		<script src="js/form.js">


		</script>
</body>

</html>
