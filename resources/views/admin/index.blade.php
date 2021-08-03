<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
{include file='include/head.tpl'}
</head>
<body{if !empty($pageID)} id="{$pageID}"{/if}>
<div class="l-wrapper"><!-- WRAPPER -->
	<div class="loginBox"><!-- LOGIN BOX -->
		<div class="loginBox_inner">
			<h1 class="loginBox_title"><img src="{$base_url}img/logo.png" alt="Ken CLEANERS SYSTEM"></h1>
			<form method="post" action="{$base_url}order/">
				<dl class="loginBox_item">
					<dt class="loginBox_item_title">ユーザーID</dt>
					<!-- <dd class="loginBox_item_error">ユーザー名を入力してください</dd> -->
					<dd class="loginBox_item_space"><input type="text" name="id" maxlength="30" value="" placeholder="ユーザー名を入力してください"></dd>
					<dt class="loginBox_item_title">パスワード</dt>
					<!-- <dd class="loginBox_item_error">パスワードを入力してください</dd> -->
					<dd class="loginBox_item_space"><input type="password" name="pass" maxlength="30" value="" placeholder="パスワードを入力してください"></dd>
				</dl>
				<!-- <p class="loginBox_item_error-center">ユーザー名とパスワードが一致していません</p> -->
				<div class="loginBox_btn">
					<input type="submit" name="" value="サインイン">
				</div>
			</form>
		</div>
	</div><!-- / LOGIN BOX -->
</div><!-- / WRAPPER -->
{include file='include/common.tpl'}
</body>
</html>