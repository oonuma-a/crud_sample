@extends('layouts.layout')
</head>
<body{if !empty($pageID)} id="{$pageID}"{/if}>
<div class="l-wrapper"><!-- L-WRAPPER  -->
<!-- {include file='include/header.tpl'} -->
<div class="b-contents"><!-- B-CONTENTS -->
<section><!-- SECTION -->
<div class="contentsTitle">
	<div class="block">
		<div class="block_inner">
			<div class="title">
				<div class="title_leftMark">
					<h2 class="title_text title_text-size2L">店舗管理（新規店舗登録）</h2>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="contents"><!-- CONTENTS -->
	<form method="post" action="{{route('client.index')}}" name="formCreate" class="js-insuranceSearchForm">
		@csrf
		<input type="hidden" name="createFlg" value="1">
		<div class="block">
			<div class="block_inner block_inner-7">
<!-- 				<table class="table table-borderLeftNone table-form table-borderBottomNone">
					<colgroup style="width: 20%"></colgroup>
					<colgroup style="width: 45%"></colgroup>
					<colgroup style="width: 20%"></colgroup>
					<colgroup style="width: 15%"></colgroup>
					<tbody>
						<tr class="js-inputClear">
							<th class="table_title">管理番号</th>
							<td class="table_data">
								<input type="text" name="" value="" maxlength="" class="form form-sizeM" tabindex="1">
							</td>
							<th class="table_title table_title-positionCenter">登録日</th>
							<td class="table_data table_data-positionCenter">
								<input type="text" name="" value="{$smarty.now|date_format:"%Y/%m/%d"}" class="form form-size" placeholder="0000" tabindex="1" readonly>
							</td>
						</tr>
					</tbody>
				</table> -->
				<table class="table table-borderLeftNone table-form">
					<colgroup style="width: 20%"></colgroup>
					<colgroup style="width: 48%"></colgroup>
					<colgroup style="width: 10%"></colgroup>
					<colgroup style="width: 22%"></colgroup>
					<tbody>
						<tr>
							<th class="table_title"><div class="table_title_required">店舗番号<span>必須</span></div></th>
							<td colspan="3" class="table_data">
								<input type="tel" name="shop_number" value="" class="form form-maxSizeL" placeholder="ここに入力" tabindex="1">
							</td>
						</tr>
						<tr>
							<th class="table_title"><div class="table_title_required">店舗名<span>必須</span></div></th>
							<td colspan="3" class="table_data">
								<input type="text" name="shop_name" value="" class="form" placeholder="ここに入力" tabindex="1">
							</td>
						</tr>
						<tr>
							<th class="table_title"><div class="table_title_required">パスワード<span>必須</span></div></th>
							<td colspan="3" class="table_data">
								<input type="text" name="password" value="" class="form form-maxSizeL" tabindex="1">
							</td>
						</tr>
						<tr>
							<th class="table_title"><div class="table_title_required">配達エリア<span>必須</span></div></th>
							<td colspan="3" class="table_data">
								<select name="area1" class="form form-maxSizeL" tabindex="1">
									<option value="">未選択</option>
									<option value="0">東京</option>
									<option value="1">千葉</option>
									<option value="2">神奈川</option>
									<option value="3">埼玉</option>
									<option value="4">茨城</option>
									<option value="5">群馬</option>
									<option value="6">栃木</option>
								</select>
								<select name="area2" class="form form-maxSizeL" tabindex="1">
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
								<input type="text" name="zip_code" value="" class="form form-maxSizeL js-zip" placeholder="2770042" tabindex="1">※ハイフン（&ndash;）無しで入力してください
							</td>
						</tr>
						<tr>
							<td colspan="3" class="table_data">
								<input type="text" name="address" value="" class="form js-adrs3" placeholder="ここに入力" tabindex="1">
							</td>
						</tr>



						<tr>
							<th class="table_title"><div class="table_title_required">電話番号<span>必須</span></div></th>
							<td colspan="3" class="table_data">
								<input type="text" name="tel" value="" class="form form-maxSizeL" placeholder="09012345678" tabindex="1">※ハイフン（&ndash;）無しで入力してください
							</td>
						</tr>
						<tr>
							<th class="table_title">契約</th>
							<td colspan="3" class="table_data">
								<ul class="formList">
<!-- 									<li class="formList_item">
										<input type="checkbox" name="no_recruiter" value="1" id="no_recruiter" tabindex="1">
										<label for="no_recruiter">入力なし</label><div class="formList_item_checkBox"></div>
									</li> -->
									<li class="formList_item js-clearSpecial">
										<input type="radio" name="contract_status" value="1" id="upid1" tabindex="1" checked>
										<label for="upid1">契約中</label><div class="formList_item_check"></div>
									</li>
									<li class="formList_item js-clearSpecial">
										<input type="radio" name="contract_status" value="2" id="upid2" tabindex="1">
										<label for="upid2">解約</label><div class="formList_item_check"></div>
									</li>
								</ul>
							</td>
						</tr>
						<tr>
							<th class="table_title"><div class="table_title_required">商品①<span>必須</span></div></th>
							<td class="table_data">
								<select name="item1" class="form" tabindex="1">
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
								<div class="js-regularly">
									<input type="checkbox" name="item1_regular_flg" value="1" id="item1" tabindex="1" onchange="item_block()">
									<select name="item1_delivery_cycle" class="form form-maxSizeS form-disabled" tabindex="1" id="item1_cycle" disabled>
										<option value="0">未選択</option>
										<option value="1">毎日</option>
										<option value="2">毎週</option>
										<option value="3">毎月</option>
									</select>
										<input type="text" name="item1_num" id="item_num1_input" value="" class="form form-textAreaTop form-maxSizeXS form-disabled" placeholder="00" tabindex="1"  disabled>枚
								</div>
							</td>
						</tr>
						<tr>
							<th class="table_title"><div class="table_title_required">商品②</div></th>
							<td class="table_data">
								<select name="item2" class="form" tabindex="1">
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
								<div class="js-regularly">
									<input type="checkbox" name="item2_regular_flg" value="1" id="item2" tabindex="1" onchange="item_block()">
									<select name="item2_delivery_cycle" class="form form-maxSizeS form-disabled" id="item2_cycle" tabindex="1" disabled>
										<option value="0">未選択</option>
										<option value="1">毎日</option>
										<option value="2">毎週</option>
										<option value="3">毎月</option>
									</select>
									<span>
										<input type="text" name="item2_num" id="item_num2_input" value="" class="form form-textAreaTop form-maxSizeXS form-disabled" placeholder="00" tabindex="1" disabled>枚
									</span>
								</div>
							</td>
						</tr>
						<tr>
							<th class="table_title"><div class="table_title_required">商品③</div></th>
							<td class="table_data">
								<select name="item3" class="form" tabindex="1">
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
								<div class="js-regularly">
									<input type="checkbox" name="item3_regular_flg" value="1" id="item3" tabindex="1" onchange="item_block()">
									<select name="item3_delivery_cycle" id="item3_cycle" class="form form-maxSizeS form-disabled" tabindex="1" disabled>
										<option value="0">未選択</option>
										<option value="1">毎日</option>
										<option value="2">毎週</option>
										<option value="3">毎月</option>
									</select>
									<span>
										<input type="text" name="item3_num" id="item_num3_input" value="" class="form form-textAreaTop form-maxSizeXS form-disabled" placeholder="00" tabindex="1" disabled>枚
									</span>
								</div>
							</td>
						</tr>
						<tr>
							<th class="table_title"><div class="table_title_required">商品④</div></th>
							<td class="table_data">
								<select name="item4" class="form" tabindex="1">
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
								<div class="js-regularly">
									<input type="checkbox" name="item4_regular_flg" value="1" id="item4" tabindex="1" onchange="item_block()">
									<select name="item4_delivery_cycle" id="item4_cycle" class="form form-maxSizeS form-disabled" tabindex="1" disabled>
										<option value="0">未選択</option>
										<option value="1">毎日</option>
										<option value="2">毎週</option>
										<option value="3">毎月</option>
									</select>
									<span>
										<input type="text" name="item4_num" id="item_num4_input" value="" class="form form-textAreaTop form-maxSizeXS form-disabled" placeholder="00" tabindex="1" disabled>枚
									</span>
								</div>
							</td>
						</tr>
						<tr>
							<th class="table_title">特記事項</th>
							<td colspan="3" class="table_data">
								<textarea name="remarks" class="form form-textarea form-heightS form-textAreaMiddle" tabindex="1"></textarea>
							</td>
						</tr>
					</tbody>
				</table>
<!-- 				<table class="table table-spaceXS">
					<colgroup style="width: 8%"></colgroup>
					<colgroup style="width: 92%"></colgroup>
					<tbody>
						<tr class="js-inputClear">
							<th class="table_title table_title-positionCenter">店舗名</th>
							<td class="table_data">
								<textarea name="remarks" class="form form-textarea form-height form-textAreaMiddle" tabindex="9"></textarea>
							</td>
						</tr>
					</tbody>
				</table> -->
			</div>
		</div>
		<div class="block block-spaceS">
			<div class="block_inner block_inner-7">
				<ul class="btn">
					<li class="btn_box btn_box-sizeS btn_box-inline btn_box-color">
						<a href="{{route('client.index')}}" class="focus" tabindex="1"><i class="btn_icon btn_icon-4"></i>戻る</a>
					</li>
					<li class="btn_box btn_box-sizeS btn_box-inline btn_box-color1">
						<a href="javascript:formCreate.submit()" class="focus" tabindex="1"><i class="btn_icon btn_icon-1"></i>登録</a>
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
	// checkbox:item1 cycle:item1_cycle num:item_num1_input
	function item_block(){
		$item1 = document.getElementById('item1');
		$item1_cycle = document.getElementById('item1_cycle');
		$item_num1_input = document.getElementById('item_num1_input');
		$item2 = document.getElementById('item2');
		$item2_cycle = document.getElementById('item2_cycle');
		$item_num2_input = document.getElementById('item_num2_input');
		$item3 = document.getElementById('item3');
		$item3_cycle = document.getElementById('item3_cycle');
		$item_num3_input = document.getElementById('item_num3_input');
		$item4 = document.getElementById('item4');
		$item4_cycle = document.getElementById('item4_cycle');
		$item_num4_input = document.getElementById('item_num4_input');
		if($item1.checked){
			itemBlock($item1_cycle,$item_num1_input);
		}else if(!$item1.checked){
			itemNone($item1_cycle,$item_num1_input);
		}
		if($item2.checked){
			itemBlock($item2_cycle,$item_num2_input);
		}else if(!$item2.checked){
			itemNone($item2_cycle,$item_num2_input);
		}
		if($item3.checked){
			itemBlock($item3_cycle,$item_num3_input);
		}else if(!$item3.checked){
			itemNone($item3_cycle,$item_num3_input);
		}
		if($item4.checked){
			itemBlock($item4_cycle,$item_num4_input);
		}else if(!$item4.checked){
			itemNone($item4_cycle,$item_num4_input);
		}
	}
	function itemBlock($item_cycle, $item_num_input){
		$item_cycle.disabled = false;
		$item_num_input.disabled = false;
	}
	function itemNone($item_cycle, $item_num_input){
		$item_cycle.disabled = true;
		$item_num_input.disabled = true;
	}

// $(function() {
// 	$('.js-zip').jpostal({
// 		postcode : [
// 				'.js-zip'	//郵便番号
// 		],
// 		address : {
// 				'.js-adrs3'  : '%3%4%5'	//都道府県
// 		}
// 	});
	//定期配送
	// $('.js-regularlyBtn').on('click', function(){
	// 	var checked = $(this).prop("checked");
	// 	var elem = $(this).closest('.table_data').find('.js-regularly');
	// 	elem.find('input,select').prop('disabled', true);
	// 	elem.find('.js-displayNone').hide();
	// 	if(checked) {
	// 		elem.find('input,select').prop('disabled', false);
	// 	}else{
	// 		elem.find('input').val('');
	// 		elem.find('select').each(function() {
	// 			this.selectedIndex  = 0;
	// 		});
	// 	}
	// });
	// $('.js-regularly select').on('change', function(){
	// 	var data = $(this).find('option:selected').val();
	// 	$(this).next('.js-displayNone').hide();
	// 	if(data != '' && data != '0') $(this).next('.js-displayNone').show();
	// });
	// Form 初期化
	// appForm.initialize();
	//テキスト入力の削除
	// $('.js-clearBtn').on('click', function(e) {
	// 	e.preventDefault();
	// 	$('.js-inputClear').each(function() {
	// 		$(this).find('input').val('');
	// 	});
	// 	$('.js-inputClear select').each(function() {
	// 		this.selectedIndex  = 0;
	// 	});
	// });
	// $('.js-datepicker').datepicker({
	// 	changeYear: false,
	// 	changeMonth: false
	// });
// });
</script>
{/literal}
{include file='include/common.tpl'}
</body>
</html>
{/nocache}