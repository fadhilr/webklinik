<?php
if(isset($gagal)){
	?>
	<script>
	 alert("Registasi gagal, username sudah terdaftar");
	</script>
	<?php
}
if(isset($_POST['submit']))
{
	$url = 'https://www.google.com/recaptcha/api/siteverify';
	$secret = '6Lfl6mkUAAAAAGxBZh3JerHSs-iUX6scoyhzk-FD';
	$response = file_get_contents($url.'?secret='.$secret.'&response='.$_POST['g-recaptcha-response'].'&remoteip='.$_SERVER['REMOTE_ADDR']);
	$data = json_decode($response);
	if(true)
	{
		$this->session->set_userdata('username',$_POST['username']);
			$this->session->set_userdata('nomorHp',$_POST['nomorHp']);
			$this->session->set_userdata('password',$_POST['password']);
		header('Location: ' . base_url().'registrasi/set_dataPelanggan');
	}else{
		header('Location: ' . base_url().'registrasi');
	}
	
}

?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Registasi</title>
    <!-- Meta-Tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords" content="Switch Login Form a Responsive Web Template, Bootstrap Web Templates, Flat Web Templates, Android Compatible Web Template, Smartphone Compatible Web Template, Free Webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design">
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
	<script type="text/javascript">
		function check() {
			var email_x = document.getElementById("username").value;
			filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
			if (filter.test(email.value)) {
				document.getElementById("username").style.border = "3px solid green";
				return true;
			} else {
				document.getElementById("username").style.border = "3px solid red";
				document.getElementById('username').value = "";
				return false;
			}
		}
	</script>
    <!-- //Meta-Tags -->
    <!-- Index-Page-CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/style.css" type="text/css" media="all">
    <!-- //Custom-Stylesheet-Links -->
    <!--fonts -->
    <link href="//fonts.googleapis.com/css?family=Mukta+Mahee:200,300,400,500,600,700,800" rel="stylesheet">
    <!-- //fonts -->
    <!-- Font-Awesome-File-Links -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/font-awesome.css" type="text/css" media="all">
	<script src='https://www.google.com/recaptcha/api.js'></script>
	<link rel="icon" type="image/png" href="<?php echo base_url(); ?>/assets/images/iconUb.jpeg">
</head>

<body>
    <h1 class="title-agile text-center">Registrasi Psycho Care</h1>
    <div class="content-w3ls">
        <div class="content-top-agile">
            <h2>sign up</h2>
        </div>
        <div class="content-bottom">
            <form action="" method="post">
                <div class="field-group">
                    <span class="fa fa-user" aria-hidden="true"></span>
                    <div class="wthree-field">
                        <input name="username" id="username" onchange="check();" type="text" value="" placeholder="username" required >
                    </div>
                </div>

                <div class="field-group">
                    <span class="fa fa-mobile-phone" aria-hidden="true"></span>
                    <div class="wthree-field">
                        
                        <input name="nomorHp" id="nomorHp" type="value" value=""   placeholder="Nomor HP/WA" required>
                    </div>
                </div>
                <div class="field-group">
                    <span class="fa fa-lock" aria-hidden="true"></span>
                    <div class="wthree-field">
                        <input name="password" id="password" type="Password" placeholder="password" required>
                    </div>
					
                </div>
				
                <ul class="list-login">
                    
                    <li class="clearfix"></li>
                </ul>
				
                <div class="wthree-field">
                    <input name = "submit" type="submit" value="sign up" />
                </div>
            </form>
        </div>
    </div>
    <div class="copyright text-center">
        <p>© 2018 Psycho Care Malang 
        </p>
    </div>
</body>

<!-- //Body -->

</html>