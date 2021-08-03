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
					<h2 class="title_text title_text-size2L">顧客管理（商品管理）</h2>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="contents"><!-- CONTENTS -->
	<form method="post" action="" class="js-insuranceSearchForm">
		<div class="block">
			<div class="block_inner block_inner-6">
				<table class="table table-borderLeftNone">
					<colgroup style="width: 15%"></colgroup>
					<colgroup style="width: 15%"></colgroup>
					<colgroup style="width: 15%"></colgroup>
					<colgroup style="width: 15%"></colgroup>
					<colgroup style="width: 15%"></colgroup>
					<colgroup style="width: 15%"></colgroup>
					<tbody>
						<tr>
							<th class="table_title table_title-positionCenter">店舗番号</th>
							<td class="table_data table_data-positionCenter">
								<input type="text" name="" value="99999" class="form form-maxSizeS" readonly>
							</td>
							<th class="table_title table_title-positionCenter">配送エリア</th>
							<td class="table_data table_data-positionCenter">
								<input type="text" name="" value="神奈川（03）" class="form" readonly>
							</td>
							<th class="table_title table_title-positionCenter">状態</th>
							<td class="table_data table_data-positionCenter">
								<input type="text" name="" value="有効" class="form form-maxSizeS" readonly>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
		<div class="block block-spaceS">
			<div class="block_inner block_inner-7">
				<table class="table table-borderLeftNone table-form">
					<colgroup style="width: 15%"></colgroup>
					<colgroup style="width: 85%"></colgroup>
					<colgroup style="width: 15%"></colgroup>
					<colgroup style="width: 15%"></colgroup>
					<tbody>
						<tr>
							<th class="table_title">店舗名</th>
							<td class="table_data">
								<input type="text" name="" value="テスト店舗" class="form" readonly>
							</td>
						</tr>
						<tr>
							<th class="table_title" >住所</th>
							<td class="table_data">
								<input type="text" name="" value="千葉県柏市逆井1505-2" class="form" readonly>
							</td>
						</tr>
						<tr>
							<th class="table_title">電話番号</th>
							<td class="table_data">
								<input type="text" name="" value="09011112222" class="form" readonly>
							</td>
						</tr>
					</tbody>
				</table>
				<section class="mc mc-spaceM">
					<div class="title">
						<div class="title_leftMark">
							<h3 class="title_text">取扱い商品</h3>
						</div>
					</div>
					<table class="table table-spaceXS table-borderLeftNone table-form js-inputClear">
						<colgroup style="width: 15%"></colgroup>
						<colgroup style="width: 15%"></colgroup>
						<colgroup style="width: 40%"></colgroup>
						<colgroup style="width: 12%"></colgroup>
						<colgroup style="width: 8%"></colgroup>
						<tbody>
							<tr>
								<th rowspan="8" class="table_title"><div class="table_title_required">網<span>必須</span></div></th>
								<td class="table_data">
									<select name="" class="form form-sizeLL" tabindex="1">
										<option value="">未選択</option>
										<option value="0">丸網</option>
										<option value="1">角網</option>
										<option value="2">ロストル</option>
										<option value="3">その他</option>
									</select>
								</td>
								<td class="table_data">
									<select name="" class="form" tabindex="1">
										<option value="">未選択</option>
										<option value="0">丸網・太線（28cm）</option>
										<option value="1">丸網・細線（28cm）</option>
										<option value="2">丸網・太線（24cm）</option>
										<option value="3">丸網・細線（24cm）</option>
										<option value="4">丸網・太線（29ｘ17cm）</option>
										<option value="5">丸網・細線（29ｘ17cm）</option>
										<option value="6">角網・太線（29ｘ17cm）</option>
										<option value="7">角網・細線（29ｘ18cm）</option>
										<option value="8">角網・細線（34ｘ17cm）</option>
										<option value="9">ヘビーロストル</option>
										<option value="10">ハードロストル</option>
										<option value="11">ハイパーロストル</option>
										<option value="12">ロストル（29ｘ18cm）</option>
										<option value="13">ロストル（34ｘ17cm）</option>
									</select>
								</td>
								<th class="table_title table_title-positionCenter">初回貸出枚数</th>
								<td class="table_data table_data-positionCenter">
									<input type="text" name="" value="" class="form form-sizeL" placeholder="15" tabindex="1">
								</td>
							</tr>
							<tr>
								<td class="table_data">
									<select name="" class="form form-sizeLL" tabindex="1">
										<option value="">未選択</option>
										<option value="0">丸網</option>
										<option value="1">角網</option>
										<option value="2">ロストル</option>
										<option value="3">その他</option>
									</select>
								</td>
								<td class="table_data">
									<select name="" class="form" tabindex="1">
										<option value="">未選択</option>
										<option value="">未選択</option>
										<option value="0">丸網・太線（28cm）</option>
										<option value="1">丸網・細線（28cm）</option>
										<option value="2">丸網・太線（24cm）</option>
										<option value="3">丸網・細線（24cm）</option>
										<option value="4">丸網・太線（29ｘ17cm）</option>
										<option value="5">丸網・細線（29ｘ17cm）</option>
										<option value="6">角網・太線（29ｘ17cm）</option>
										<option value="7">角網・細線（29ｘ18cm）</option>
										<option value="8">角網・細線（34ｘ17cm）</option>
										<option value="9">ヘビーロストル</option>
										<option value="10">ハードロストル</option>
										<option value="11">ハイパーロストル</option>
										<option value="12">ロストル（29ｘ18cm）</option>
										<option value="13">ロストル（34ｘ17cm）</option>
									</select>
								</td>
								<th class="table_title table_title-positionCenter">初回貸出枚数</th>
								<td class="table_data table_data-positionCenter">
									<input type="text" name="" value="" class="form form-sizeL" placeholder="15" tabindex="1">
								</td>
							</tr>
							<tr>
								<td class="table_data">
									<select name="" class="form form-sizeLL" tabindex="1">
										<option value="">未選択</option>
										<option value="0">丸網</option>
										<option value="1">角網</option>
										<option value="2">ロストル</option>
										<option value="3">その他</option>
									</select>
								</td>
								<td class="table_data">
									<select name="" class="form" tabindex="1">
										<option value="">未選択</option>
										<option value="0">丸網・太線（28cm）</option>
										<option value="1">丸網・細線（28cm）</option>
										<option value="2">丸網・太線（24cm）</option>
										<option value="3">丸網・細線（24cm）</option>
										<option value="4">丸網・太線（29ｘ17cm）</option>
										<option value="5">丸網・細線（29ｘ17cm）</option>
										<option value="6">角網・太線（29ｘ17cm）</option>
										<option value="7">角網・細線（29ｘ18cm）</option>
										<option value="8">角網・細線（34ｘ17cm）</option>
										<option value="9">ヘビーロストル</option>
										<option value="10">ハードロストル</option>
										<option value="11">ハイパーロストル</option>
										<option value="12">ロストル（29ｘ18cm）</option>
										<option value="13">ロストル（34ｘ17cm）</option>
									</select>
								</td>
								<th class="table_title table_title-positionCenter">初回貸出枚数</th>
								<td class="table_data table_data-positionCenter">
									<input type="text" name="" value="" class="form form-sizeL" placeholder="15" tabindex="1">
								</td>
							</tr>
							<tr>
								<td class="table_data">
									<select name="" class="form form-sizeLL" tabindex="1">
										<option value="">未選択</option>
										<option value="0">丸網</option>
										<option value="1">角網</option>
										<option value="2">ロストル</option>
										<option value="3">その他</option>
									</select>
								</td>
								<td class="table_data">
									<input type="text" name="" value="" class="form" placeholder="オーダーメイド網名" tabindex="1">
								</td>
								<th class="table_title table_title-positionCenter">初回貸出枚数</th>
								<td class="table_data table_data-positionCenter">
									<input type="text" name="" value="" class="form form-sizeL" placeholder="15" tabindex="1">
								</td>
							</tr>
							<tr>
								<td class="table_data">
									<select name="" class="form form-sizeLL" tabindex="1">
										<option value="">丸網</option>
										<option value="0">丸網</option>
										<option value="1">角網</option>
										<option value="2">ロストル</option>
										<option value="3">その他</option>
									</select>
								</td>
								<td class="table_data">
									<select name="" class="form" tabindex="1">
										<option value="">未選択</option>
										<option value="0">丸網・太線（28cm）</option>
										<option value="1">丸網・細線（28cm）</option>
										<option value="2">丸網・太線（24cm）</option>
										<option value="3">丸網・細線（24cm）</option>
										<option value="4">丸網・太線（29ｘ17cm）</option>
										<option value="5">丸網・細線（29ｘ17cm）</option>
									</select>
								</td>
								<th class="table_title table_title-positionCenter">初回貸出枚数</th>
								<td class="table_data table_data-positionCenter">
									<input type="text" name="" value="" class="form form-sizeL" placeholder="15" tabindex="1">
								</td>
							</tr>
							<tr>
								<td class="table_data">
									<select name="" class="form form-sizeLL" tabindex="1">
										<option value="">角網</option>
										<option value="0">丸網</option>
										<option value="1">角網</option>
										<option value="2">ロストル</option>
										<option value="3">その他</option>
									</select>
								</td>
								<td class="table_data">
									<select name="" class="form" tabindex="1">
										<option value="">未選択</option>
										<option value="0">角網・太線（29ｘ17cm）</option>
										<option value="1">角網・細線（29ｘ18cm）</option>
										<option value="2">角網・細線（34ｘ17cm）</option>
									</select>
								</td>
								<th class="table_title table_title-positionCenter">初回貸出枚数</th>
								<td class="table_data table_data-positionCenter">
									<input type="text" name="" value="" class="form form-sizeL" placeholder="15" tabindex="1">
								</td>
							</tr>
							<tr>
								<td class="table_data">
									<select name="" class="form form-sizeLL" tabindex="1">
										<option value="">ロストル</option>
										<option value="0">丸網</option>
										<option value="1">角網</option>
										<option value="2">ロストル</option>
										<option value="3">その他</option>
									</select>
								</td>
								<td class="table_data">
									<select name="" class="form" tabindex="1">
										<option value="">未選択</option>
										<option value="0">ヘビーロストル</option>
										<option value="1">ハードロストル</option>
										<option value="2">ハイパーロストル</option>
										<option value="3">ロストル（29ｘ18cm）</option>
										<option value="3">ロストル（34ｘ17cm）</option>
									</select>
								</td>
								<th class="table_title table_title-positionCenter">初回貸出枚数</th>
								<td class="table_data table_data-positionCenter">
									<input type="text" name="" value="" class="form form-sizeL" placeholder="15" tabindex="1">
								</td>
							</tr>
							<tr>
								<td class="table_data">
									<select name="" class="form form-sizeLL" tabindex="1">
										<option value="">その他</option>
										<option value="0">丸網</option>
										<option value="1">角網</option>
										<option value="2">ロストル</option>
										<option value="3">その他</option>
									</select>
								</td>
								<td class="table_data">
									<input type="text" name="" value="" class="form" placeholder="オーダーメイド網名" tabindex="1">
								</td>
								<th class="table_title table_title-positionCenter">初回貸出枚数</th>
								<td class="table_data table_data-positionCenter">
									<input type="text" name="" value="" class="form form-sizeL" placeholder="15" tabindex="1">
								</td>
							</tr>
						</tbody>
					</table>
				</section>
			</div>
		</div>
		<div class="block block-spaceS">
			<div class="block_inner block_inner-7">
				<ul class="btn">
					<li class="btn_box btn_box-sizeS btn_box-inline btn_box-color1">
						<a href="{$base_url}client/" class="focus js-btnSearch" tabindex="1"><i class="btn_icon btn_icon-1"></i>登録</a>
					</li>
<!-- 					<li class="btn_box btn_box-sizeS btn_box-inline btn_box-color">
						<a href="{$base_url}client/" class="focus" tabindex="1"></i>戻る</a>
					</li> -->
					<li class="btn_box btn_box-sizeS btn_box-inline btn_box-color">
						<a href="" class="js-clearBtn focus" tabindex="1"></i>クリア</a>
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