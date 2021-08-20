<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="{{asset('/css/style.css')}}">
<link rel="stylesheet" href="{{asset('/css/ie.css')}}">
<link rel="stylesheet" href="{{asset('/css/jquery-ui.css')}}">
<link rel="stylesheet" href="{{asset('/css/login.css')}}">
<link rel="stylesheet" href="{{asset('/css/modaal.css')}}">
<!-- {include file='include/head.tpl'} -->
</head>
<body><!-- <body{if !empty($pageID)} id="{$pageID}"{/if}> -->
<div class="l-wrapper"><!-- WRAPPER -->
	<div class="loginBox"><!-- LOGIN BOX -->
		<div class="loginBox_inner">
			<h1 class="loginBox_title"><img src="{{asset('/img/logo.png')}}" alt="Ken CLEANERS SYSTEM"></h1>
			<form method="post" action="{{ route('client.index')}}">
			@csrf
				<dl class="loginBox_item">
					@if(count($errors) > 0)
						<ul>
							@foreach($errors->all() as $error)
								<li>{{$error}}</li>
							@endforeach
						</ul>
					@endif
					<dt class="loginBox_item_title">ユーザーID</dt>
					<!-- <dd class="loginBox_item_error">ユーザー名を入力してください</dd> -->
					<dd class="loginBox_item_space"><input type="text" name="user_id" maxlength="30" value="" placeholder="ユーザー名を入力してください"></dd>
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