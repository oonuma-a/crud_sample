{nocache}
<!DOCTYPE html>
<html lang="ja">
<head>
{include file='include/head.tpl'}
</head>
<body{if !empty($pageID)} id="{$pageID}"{/if}>
<div class="l-wrapper"><!-- L-WRAPPER  -->
{include file='include/header.tpl'}
<div class="b-contents"><!-- B-CONTENTS -->
<section><!-- SECTION -->
<div class="contentsTitle">
	<div class="block">
		<div class="block_inner">
			<div class="title">
				<div class="title_leftMark">
					<h2 class="title_text title_text-size2L">アカウント登録</h2>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="contents"><!-- CONTENTS -->
	<form method="post" action="" class="js-insuranceSearchForm">
		<div class="block">
			<div class="block_inner block_inner-7">
				<table class="table table-borderLeftNone table-form">
					<colgroup style="width: 20%"></colgroup>
					<colgroup style="width: 80%"></colgroup>
					<tbody>
						<tr>
							<th class="table_title"><div class="table_title_required">権限<span>必須</span></div></th>
							<td class="table_data">
								<select name="" class="form form-maxSizeL" tabindex="1">
									<option value="">未選択</option>
									<option value="0">管理者</option>
									<option value="1">従業員</option>
									<option value="2">ドライバー</option>
								</select>
							</td>
						</tr>
						<tr>
							<th class="table_title"><div class="table_title_required">表示名<span>必須</span></div></th>
							<td class="table_data">
								<input type="text" name="" value="" class="form form-maxSizeM" maxlength="10" placeholder="ここに入力" tabindex="1">
							</td>
						</tr>
						<tr>
							<th class="table_title"><div class="table_title_required">名前<span>必須</span></div></th>
							<td class="table_data">
								<input type="text" name="" value="" class="form" maxlength="100" placeholder="ここに入力" tabindex="1">
							</td>
						</tr>
						<tr>
							<th class="table_title"><div class="table_title_required">パスワード<span>必須</span></div></th>
							<td class="table_data">
								<input type="text" name="" value="" class="form form-maxSizeL" maxlength="15" placeholder="最大15文字" tabindex="1">
							</td>
						</tr>
						<tr>
							<th class="table_title">状態</th>
							<td class="table_data">
								<ul class="formList">
									<li class="formList_item js-clearSpecial">
										<input type="radio" name="upid" value="1" id="upid1" tabindex="1" checked>
										<label for="upid1">有効</label><div class="formList_item_check"></div>
									</li>
									<li class="formList_item js-clearSpecial">
										<input type="radio" name="upid" value="2" id="upid2" tabindex="1">
										<label for="upid2">無効</label><div class="formList_item_check"></div>
									</li>
								</ul>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
		<div class="block block-spaceS">
			<div class="block_inner block_inner-7">
				<ul class="btn">
					<li class="btn_box btn_box-sizeS btn_box-inline btn_box-color">
						<a href="{$base_url}setting/" class="focus" tabindex="1"><i class="btn_icon btn_icon-4"></i>戻る</a>
					</li>
					<li class="btn_box btn_box-sizeS btn_box-inline btn_box-color1">
						<a href="#" class="focus js-btnSearch" tabindex="1"><i class="btn_icon btn_icon-1"></i>登録</a>
					</li>
				</ul>
			</div>
		</div>
	</form>

</div><!-- / CONTENTS -->
</section><!-- / SECTION -->
</div><!-- / B-CONTENTS -->
{include file='include/sidebar.tpl'}
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
{include file='include/common.tpl'}
</body>
</html>
{/nocache}