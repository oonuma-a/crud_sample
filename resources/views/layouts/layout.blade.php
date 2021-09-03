<!-- {nocache} -->
<!DOCTYPE html>
<html lang="ja">
<link rel="stylesheet" href="{{asset('/css/style.css')}}">
<link rel="stylesheet" href="{{asset('/css/ie.css')}}">
<link rel="stylesheet" href="{{asset('/css/jquery-ui.css')}}">
<link rel="stylesheet" href="{{asset('/css/login.css')}}">
<link rel="stylesheet" href="{{asset('/css/modaal.css')}}">

<!-- {include file='include/head.tpl'} -->
@include('/include/head')
</head>
<body>
<div class="l-wrapper"><!-- L-WRAPPER  -->
<!-- include('/include/header') -->
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