<!-- {nocache} -->
<!DOCTYPE html>
<html lang="ja">
<link rel="stylesheet" href="{{asset('/css/style.css')}}">
<link rel="stylesheet" href="{{asset('/css/ie.css')}}">
<link rel="stylesheet" href="{{asset('/css/jquery-ui.css')}}">
<link rel="stylesheet" href="{{asset('/css/login.css')}}">
<link rel="stylesheet" href="{{asset('/css/modaal.css')}}">
<head>
<!-- {include file='include/head.tpl'} -->
@include('/include/head')
</head>
<body{if !empty($pageID)} id="{$pageID}"{/if}>
<div class="l-wrapper"><!-- L-WRAPPER  -->
<!-- {include file='include/header.tpl'} -->
<div class="b-contents"><!-- B-CONTENTS -->
<section><!-- SECTION -->
<div class="contentsTitle">
	<div class="block">
		<div class="block_inner block_inner-1">
			<div class="title">
				<div class="title_leftMark">
					<h2 class="title_text title_text-size2L">@yield('head')</h2>
				</div>
			</div>
		</div>
		<div class="block_inner block_inner-1 block_inner-spaceS block_inner-titleBtn">
			<div class="btn">
				<p class="btn_box btn_box-color2">
					<a href="{$base_url}client/create/" class="focus" tabindex="1"><i class="btn_icon btn_icon-2"></i>@yield('btn')</a>
				</p>
			</div>
		</div>
	</div>
</div>
@yield('content')
@include('/include/sidebar')
</div><!-- /L-WRAPPER  -->
{literal}
<script>
	$(function() {
	// Form 初期化
	appForm.initialize();
	//pop up
	$('.js-pop_up').colorbox({width:'300'});
	//テキスト入力の削除
	$('.js-clearBtn').on('click', function(e) {
		e.preventDefault();
		$('.js-inputClear').each(function() {
			$(this).find('input').val('');
		});
		$('.js-inputClear select').each(function() {
			this.selectedIndex  = 0;
		});
	});
	$('.js-datepicker').datepicker({
		changeYear: false,
		changeMonth: false
	});
});
</script>
{/literal}
@include('/include/common')
</body>
</html>
{/nocache}