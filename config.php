<?php session_start(); ?>
<?php if (isset($_POST['submit'])): ?>
	<?php $username = $_POST['username']; $password = md5($_POST['password']); ?>
	<?php $conn = mysqli_connect('localhost', 'root', '', 'stiker'); ?>
	<?php $sql = mysqli_query($conn, "select * from admin where user='$username' and pass='$password' ") ?>
	<?php $count = mysqli_num_rows($sql); ?>
	<?php if ($count == 1): ?>
		<?php $_SESSION['username'] = $_POST['username']; ?>
		<?php header('Location: index.php') ?>
		<?php else: ?>
			<script type="text/javascript">alert('Username dan Password tidak cocok');</script>
			<?php header('Location: login.php'); ?>
	<?php endif ?>
<?php endif ?>