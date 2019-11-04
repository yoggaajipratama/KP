<?php session_start(); ?>
<?php if (isset($_POST['submit'])): ?>
	<?php $username = $_POST['username']; $password = $_POST['password']; ?>
	<?php $conn = mysqli_connect('localhost', 'root', '', 'user'); ?>
	<?php $sql = mysqli_query($conn, "select * from login where user='$username' and pass='$password' ") ?>
	<?php $count = mysqli_num_rows($sql); ?>
	<?php if ($count == 1): ?>
		<?php $_SESSION['username'] = $_POST['username']; ?>
		<?php header('Location: index.php') ?>
		<?php else: ?>
			<h2>GAGAL</h2>
	<?php endif ?>
<?php endif ?>