<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
	"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>littleboard</title>
		<link href="msgboard.css" type="text/css" rel="stylesheet" />
	</head>

	<body>
		<h1>littleboard message board</h1>
		
		<?php
			if ($_SERVER["REQUEST_METHOD"] == "POST") {
				# user is posting a message
				save_post();
			}
			
			display_posts();
		?>
		
		<form action="msgboard.php" method="post"
				enctype="multipart/form-data">
			<fieldset>
				<legend>post a new message</legend>
				
				<div>
					user name: <br />
					<input type="text" name="username" size="50" /> <br />

					<label>
						<input type="checkbox" name="anonymous" />
						post anonymously
					</label>
				</div>
				
				<div>
					message: <br />
					<textarea name="message" rows="8" cols="60"></textarea>
				</div>
				
				<div>
					image (optional): <br />
					<input type="file" name="image" size="50" />
				</div>
				
				<div>
					<input type="submit" value="post message" />
				</div>
			</fieldset>
		</form>
	</body>
</html>

<?php
	# Saves the user's form POST data as a message on the server.
	function save_post() {
		if (!isset($_REQUEST["username"]) ||
				!isset($_REQUEST["message"])) {
			die("error: missing required parameter");
		}
		
		# save post message text
		$message = stripslashes($_REQUEST['message']);
		if (isset($_REQUEST["anonymous"])) {
			$message = "{$_REQUEST['username']} says: $message";
		} else {
			$message = "anonymous message: $message";
		}
				
		$post_name = "post_" . time();
		file_put_contents("posts/{$post_name}.txt", $message);
		
		# save post image (if any)
		if (is_uploaded_file($_FILES["image"]["tmp_name"])) {
			move_uploaded_file($_FILES["image"]["tmp_name"], "posts/{$post_name}.jpg");
		}
	}

	# Displays all messages on the board, each in its own div.
	function display_posts() {
		$post_files = glob("posts/*.txt");
		if ($post_files) {
			# display all messages, newest first
			rsort($post_files);
			foreach ($post_files as $post_file) {
				$post = file_get_contents($post_file);
				$post_image = str_replace(".txt", ".jpg", $post_file);
				?>

				<div class="message">

					<?php
						if (file_exists($post_image)) {
							?>

							<img src="<?= $post_image ?>" alt="post image" />

							<?php
						}
					?>

					<?= $post ?>
				</div>

				<?php
			}
		} else {
			# no messages
			?>
			<p>
				no messages yet.
			</p>
			<?php
		}
	}
?>
