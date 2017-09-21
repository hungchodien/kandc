<?php

include_once('../inc/header.php');

$checked = ($_COOKIE['id_save']) ? "checked=checked" : "";
?>
<link rel="stylesheet" type="text/css" href="../css/import.css" media="all" />
<div id="wrap_login" class="clearfix">
    <div id="content_login" role="main">
        <div id="page_title_login" class="clearfix">
            <div class="title_icon"><img src="../img/main/login_home_icon.png" alt="" title="" /></div>
            <h1 id="login_title" class="content_title">DASHBOARD</h1>
        </div>

		<form method="post" action="login_proc.php" id="loginform" name="loginform">
			<p>
				<label for="user_login">USER<br>
				<input type="text" tabindex="10" size="20" value="<?php echo $_COOKIE['id_save']?>" class="input" id="m_id" name="m_id" style="ime-mode:inactive" />
				</label>
			</p>
			<p>
				<label for="user_pass">PASSWORD<br>
				<input type="password" tabindex="20" size="20" value="" class="input" id="m_passwd" name="m_passwd" />
				</label>
			</p>
			<p class="forgetmenot">
				<label for="rememberme">
				<input type="checkbox" tabindex="90" value="1" id="id_save" name="id_save" <?php echo $checked;?> >
				Remember Me</label>
			</p>
			<p class="submit">
				<input type="submit" tabindex="100" value="LOG IN" class="button-primary" id="submit" name="submit" />
			</p>
        </form>

    </div>
  <!-- #content -->

<?php include_once('../inc/footer.php'); ?>