<?php
    session_start();
    include 'db.php';

    if(!isset($_SESSION['id_user'])) {
         header('location:sign-in/');
          exit();
      }else {
        $id_user = $_SESSION['id_user'];
        // echo $id_user;
      }

?>

<html>
	<head>
		<title>My Guest Book</title>
	</head>
	<body>
		<h2>My Guest Book </h2>
		<form method="post" action="memo_post.php">
			<table>
				<tr>
					<td>Title</td>
					<td><input type="text" name="Title"></td>
				</tr>
				<tr>
					<td>Isi Memo</td>
					<td><textarea cols="60" rows="10" name="Memo"></textarea></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="submit" value="submit"></td>
				</tr>
			</table>
		</form>
	</body>
</html>
