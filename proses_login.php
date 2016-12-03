<?php
	if(isset($_POST['btn-login']))
	{
		include('db/koneksi.php');	
		$username 	= mysqli_real_escape_string($link,$_POST['username']);
		$pas 		= mysqli_real_escape_string($link,$_POST['password']);
		// $pas_en 	= md5(sha1(md5($pas)));
		
		$cek_username_pas = $link->query("select count(*) as login from users where username='$username' AND password='$pas' AND level='admin'");

		$data = mysqli_fetch_assoc($cek_username_pas);
		

		if($data['login'] > 0 )
		{
			$user 		= $link->query("select * from users where username='$username' AND password='$pas'");
			$data_user 	= mysqli_fetch_assoc($user);

			$_SESSION['username'] 	= $data_user['username'];
			$_SESSION['id'] 		= $data_user['id'];
			$_SESSION['nama'] 		= $data_user['nama'];
			$_SESSION['level'] 	= $data_user['level'];	
			echo "<script>alert('Login Berhasil, Selamat Datang $username');document.location='index.php'</script>";
		}
		else
		{
			
			echo "<script>alert('Login Gagal, Username Dan Password Tidak Cocok');document.location='index.php'</script>";
		}
		
	}

?>
