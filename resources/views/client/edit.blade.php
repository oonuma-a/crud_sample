{nocache}
<!DOCTYPE html>
<html lang="ja">
<head>
{include file='include/head.tpl'}
{literal}
<style>
<!--
.js-regularly {
	white-space: nowrap;
	display: inline-block;
}
-->
</style>
{/literal}
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
					<h2 class="title_text title_text-size2L">店舗情報（編集）</h2>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="contents"><!-- CONTENTS -->
	<form method="post" action="" class="js-insuranceSearchForm">
<!-- 		<div class="block">
			<div class="block_inner block_inner-3">
				<table class="table table-borderLeftNone">
					<colgroup style="width: 25%"></colgroup>
					<colgroup style="width: 20%"></colgroup>
					<colgroup style="width: 25%"></colgroup>
					<colgroup style="width: 20%"></colgroup>
					<tbody>
						<tr>
							<th class="table_title table_title-positionCenter">店舗番号</th>
							<td class="table_data table_data-positionCenter">
								<input type="text" name="" value="99999" class="form form-maxSizeS" readonly>
							</td>
							<th class="table_title table_title-positionCenter">契約</th>
							<td class="table_data table_data-positionCenter">
								<input type="text" name="" value="契約中" class="form form-maxSizeS" readonly>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div> -->
		<div class="block">
			<div class="block_inner block_inner-7">
				<table class="table table-spaceS table-borderLeftNone table-form">
					<colgroup style="width: 20%"></colgroup>
					<colgroup style="width: 48%"></colgroup>
					<colgroup style="width: 10%"></colgroup>
					<colgroup style="width: 22%"></colgroup>
					<tbody>
						<tr>
							<th class="table_title"><div class="table_title_required">店舗番号<span>必須</span></div></th>
							<td colspan="3" class="table_data">
								<input type="tel" name="" value="" class="form form-maxSizeL" placeholder="ここに入力" tabindex="1">
							</td>
						</tr>
						<tr>
							<th class="table_title"><div class="table_title_required">店舗名<span>必須</span></div></th>
							<td colspan="3" class="table_data">
								<input type="text" name="" value="テスト店舗" class="form" placeholder="ここに入力" tabindex="1">
							</td>
						</tr>
						<tr>
							<th class="table_title"><div class="table_title_required">パスワード<span>必須</span></div></th>
							<td colspan="3" class="table_data">
								<input type="text" name="" value="password" class="form form-maxSizeL" tabindex="1">
							</td>
						</tr>
						<tr>
							<th class="table_title"><div class="table_title_required">配達エリア<span>必須</span></div></th>
							<td colspan="3" class="table_data">
								<select name="" class="form form-maxSizeL" tabindex="1">
									<option value="">未選択</option>
									<option value="0">東京</option>
									<option value="1">千葉</option>
									<option value="2">神奈川</option>
									<option value="3">埼玉</option>
									<option value="4">茨城</option>
									<option value="5">群馬</option>
									<option value="6">栃木</option>
								</select>
								<select name="" class="form form-maxSizeL" tabindex="1">
									<option value="">未選択</option>
									<option value="0">01</option>
									<option value="1">02</option>
									<option value="2">03</option>
									<option value="3">04</option>
									<option value="4">05</option>
									<option value="5">06</option>
									<option value="6">07</option>
								</select>
							</td>
						</tr>
						<tr>
							<th class="table_title" rowspan="2"><div class="table_title_required">住所<span>必須</span></div></th>
							<td colspan="3" class="table_data table_data-borderBottomNone table_data-spaceBottomNone">
								<input type="text" name="" value="" class="form form-maxSizeL js-zip" placeholder="2770042" tabindex="1">※ハイフン（&ndash;）無しで入力してください
							</td>
						</tr>
						<tr>
							<td colspan="3" class="table_data">
								<input type="text" name="" value="" class="form js-adrs3" placeholder="ここに入力" tabindex="1">
							</td>
						</tr>
						<tr>
							<th class="table_title"><div class="table_title_required">電話番号<span>必須</span></div></th>
							<td colspan="3" class="table_data">
								<input type="text" name="" value="" class="form form-maxSizeL" placeholder="09012345678" tabindex="1">※ハイフン（&ndash;）無しで入力してください
							</td>
						</tr>
						<tr>
							<th class="table_title">契約</th>
							<td colspan="3" class="table_data">
								<ul class="formList">
									<li class="formList_item js-clearSpecial">
										<input type="radio" name="upid" value="1" id="upid1" tabindex="1" checked>
										<label for="upid1">契約中</label><div class="formList_item_check"></div>
									</li>
									<li class="formList_item js-clearSpecial">
										<input type="radio" name="upid" value="2" id="upid2" tabindex="1">
										<label for="upid2">解約</label><div class="formList_item_check"></div>
									</li>
								</ul>
							</td>
						</tr>
						<tr>
							<th class="table_title"><div class="table_title_required">商品①<span>必須</span></div></th>
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
							<th class="table_title table_title-positionCenter">定期配送</th>
							<td class="table_data">
								<div class="formList formList-inlineBlock">
									<div class="formList_item">
										<input type="checkbox" name="item1" value="1" id="item1" class="js-regularlyBtn" tabindex="1">
										<label for="item1"></label><div class="formList_item_checkBox"></div>
									</div>
								</div>
								<div class="js-regularly">
									<select name="" class="form form-maxSizeS form-disabled" tabindex="1" disabled>
										<option value="0">未選択</option>
										<option value="1">毎日</option>
										<option value="2">毎週</option>
										<option value="3">毎月</option>
									</select>
									<span class="js-displayNone"><input type="text" name="" value="" class="form form-textAreaTop form-maxSizeXS form-disabled" placeholder="00" tabindex="1" disabled>枚</span>
								</div>
							</td>
						</tr>
						<tr>
							<th class="table_title"><div class="table_title_required">商品②</div></th>
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
							<th class="table_title table_title-positionCenter">定期配送</th>
							<td class="table_data">
								<div class="formList formList-inlineBlock">
									<div class="formList_item">
										<input type="checkbox" name="item2" value="2" id="item2" class="js-regularlyBtn" tabindex="1">
										<label for="item2"></label><div class="formList_item_checkBox"></div>
									</div>
								</div>
								<div class="js-regularly">
									<select name="" class="form form-maxSizeS form-disabled" tabindex="1" disabled>
										<option value="0">未選択</option>
										<option value="1">毎日</option>
										<option value="2">毎週</option>
										<option value="3">毎月</option>
									</select>
									<span class="js-displayNone"><input type="text" name="" value="" class="form form-textAreaTop form-maxSizeXS form-disabled" placeholder="00" tabindex="1" disabled>枚</span>
								</div>
							</td>
						</tr>
						<tr>
							<th class="table_title"><div class="table_title_required">商品③</div></th>
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
							<th class="table_title table_title-positionCenter">定期配送</th>
							<td class="table_data">
								<div class="formList formList-inlineBlock">
									<div class="formList_item">
										<input type="checkbox" name="item3" value="3" id="item3" class="js-regularlyBtn" tabindex="1">
										<label for="item3"></label><div class="formList_item_checkBox"></div>
									</div>
								</div>
								<div class="js-regularly">
									<select name="" class="form form-maxSizeS form-disabled" tabindex="1" disabled>
										<option value="0">未選択</option>
										<option value="1">毎日</option>
										<option value="2">毎週</option>
										<option value="3">毎月</option>
									</select>
									<span class="js-displayNone"><input type="text" name="" value="" class="form form-textAreaTop form-maxSizeXS form-disabled" placeholder="00" tabindex="1" disabled>枚</span>
								</div>
							</td>
						</tr>
						<tr>
							<th class="table_title"><div class="table_title_required">商品④</div></th>
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
							<th class="table_title table_title-positionCenter">定期配送</th>
							<td class="table_data">
								<div class="formList formList-inlineBlock">
									<div class="formList_item">
										<input type="checkbox" name="item4" value="4" id="item4" class="js-regularlyBtn" tabindex="1">
										<label for="item4"></label><div class="formList_item_checkBox"></div>
									</div>
								</div>
								<div class="js-regularly">
									<select name="" class="form form-maxSizeS form-disabled" tabindex="1" disabled>
										<option value="0">未選択</option>
										<option value="1">毎日</option>
										<option value="2">毎週</option>
										<option value="3">毎月</option>
									</select>
									<span class="js-displayNone"><input type="text" name="" value="" class="form form-textAreaTop form-maxSizeXS form-disabled" placeholder="00" tabindex="1" disabled>枚</span>
								</div>
							</td>
						</tr>
						<tr>
							<th class="table_title">備考</th>
							<td colspan="3" class="table_data">
								<textarea name="remarks" class="form form-textarea form-heightS form-textAreaMiddle" tabindex="1"></textarea>
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
						<a href="javascript:history.back();" class="focus" tabindex="1"><i class="btn_icon btn_icon-4"></i>戻る</a>
					</li>
					<li class="btn_box btn_box-sizeS btn_box-inline btn_box-color1">
						<a href="{$base_url}client/" class="focus" tabindex="1"><i class="btn_icon btn_icon-1"></i>編集</a>
					</li>
<!-- 					<li class="btn_box btn_box-sizeM btn_box-inline btn_box-color">
						<a href="{$base_url}client/" class="focus" tabindex="1"></i>戻る</a>
					</li> -->
<!-- 					<li class="btn_box btn_box-sizeM btn_box-inline btn_box-color">
						<a href="" class="js-clearBtn focus" tabindex="1"></i>クリア</a>
					</li> -->
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
	$('.js-zip').jpostal({
		postcode : [
				'.js-zip'	//郵便番号
		],
		address : {
				'.js-adrs3'  : '%3%4%5'	//都道府県
		}
	});
	//定期配送
	$('.js-regularlyBtn').on('click', function(){
		var checked = $(this).prop("checked");
		var elem = $(this).closest('.table_data').find('.js-regularly');
		elem.find('input,select').prop('disabled', true);
		elem.find('.js-displayNone').hide();
		if(checked) {
			elem.find('input,select').prop('disabled', false);
		}else{
			elem.find('input').val('');
			elem.find('select').each(function() {
				this.selectedIndex  = 0;
			});
		}
	});
	$('.js-regularly select').on('change', function(){
		var data = $(this).find('option:selected').val();
		$(this).next('.js-displayNone').hide();
		if(data != '' && data != '0') $(this).next('.js-displayNone').show();
	});
	// Form 初期化
	appForm.initialize();
});
</script>
{/literal}
{include file='include/common.tpl'}
</body>
</html>
{/nocache}