@extends('layouts.layout')
</head>
<body{if !empty($pageID)} id="{$pageID}"{/if}>
<div class="l-wrapper"><!-- L-WRAPPER  -->
@section('content')
<div class="b-contents"><!-- B-CONTENTS -->
<section><!-- SECTION -->
<div class="contentsTitle">
	<div class="block">
		<div class="block_inner">
			<div class="title">
				<div class="title_leftMark">
					<h2 class="title_text title_text-size2L">注文管理（電話注文登録）</h2>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="contents"><!-- CONTENTS -->
	<form method="post" action="{{route('order.index')}}" class="js-insuranceSearchForm" name="orderForm">
		@csrf
		<input type="hidden" name="insertFlg" value="1">
		<input type="hidden" name="order_number" value="1">
		<div class="block">
			<div class="block_inner block_inner-7">
				<table class="table table-borderLeftNone table-form">
					<colgroup style="width: 20%"></colgroup>
					<colgroup style="width: 60%"></colgroup>
					<colgroup style="width: 10%"></colgroup>
					<colgroup style="width: 10%"></colgroup>
					<tbody>
						<tr>
							<th class="table_title"><div class="table_title_required">店舗番号<span>必須</span></div></th>
							<td colspan="3" class="table_data">
								<input type="tel" name="shop_id" value="" class="form form-maxSizeL" placeholder="ここに入力" tabindex="1">
							</td>
						</tr>
						<tr>
							<th class="table_title"><div class="table_title_required">店舗名<span>必須</span></div></th>
							<td colspan="3" class="table_data">
								<input type="text" value="" class="form" placeholder="ここに入力" tabindex="1">
							</td>
							<!-- name="shop_name"  -->
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
							<th class="table_title"><div class="table_title_required">商品①<span>必須</span></div></th>
							<td class="table_data">
								<select name="item1" class="form" tabindex="1">
									<option value="">未選択</option>
									<option value="1">1番:丸網・太線（28cm）</option>
									<option value="2">2番:丸網・細線（28cm）</option>
									<option value="3">3番:丸網・太線（24cm）</option>
									<option value="4">4番:丸網・細線（24cm）</option>
									<option value="5">5番:丸網・太線（29ｘ17cm）</option>
									<option value="6">6番:丸網・細線（29ｘ17cm）</option>
									<option value="7">7番:角網・太線（29ｘ17cm）</option>
									<option value="8">8番:角網・細線（29ｘ18cm）</option>
									<option value="9">9番:角網・細線（34ｘ17cm）</option>
									<option value="10">10番:ヘビーロストル</option>
									<option value="11">11番:ハードロストル</option>
									<option value="12">12番:ハイパーロストル</option>
									<option value="13">13番:ロストル（29ｘ18cm）</option>
									<option value="14">14番:ロストル（34ｘ17cm）</option>
								</select>
							</td>
							<th class="table_title table_title-positionCenter">注文枚数</th>
							<td class="table_data">
								<input type="text" name="item1_num" value="" class="form form-sizeL" placeholder="00" tabindex="1">
							</td>
						</tr>
						<tr>
							<th class="table_title"><div class="table_title_required">商品②</div></th>
							<td class="table_data">
								<select name="item2" class="form" tabindex="1">
									<option value="">未選択</option>
									<option value="1">1番:丸網・太線（28cm）</option>
									<option value="2">2番:丸網・細線（28cm）</option>
									<option value="3">3番:丸網・太線（24cm）</option>
									<option value="4">4番:丸網・細線（24cm）</option>
									<option value="5">5番:丸網・太線（29ｘ17cm）</option>
									<option value="6">6番:丸網・細線（29ｘ17cm）</option>
									<option value="7">7番:角網・太線（29ｘ17cm）</option>
									<option value="8">8番:角網・細線（29ｘ18cm）</option>
									<option value="9">9番:角網・細線（34ｘ17cm）</option>
									<option value="10">10番:ヘビーロストル</option>
									<option value="11">11番:ハードロストル</option>
									<option value="12">12番:ハイパーロストル</option>
									<option value="13">13番:ロストル（29ｘ18cm）</option>
									<option value="14">14番:ロストル（34ｘ17cm）</option>
								</select>
							</td>
							<th class="table_title table_title-positionCenter">注文枚数</th>
							<td class="table_data">
								<input type="text" name="item2_num" value="" class="form form-sizeL" placeholder="00" tabindex="1">
							</td>
						</tr>
						<tr>
							<th class="table_title"><div class="table_title_required">商品③</div></th>
							<td class="table_data">
								<select name="item3" class="form" tabindex="1">
									<option value="">未選択</option>
									<option value="1">1番:丸網・太線（28cm）</option>
									<option value="2">2番:丸網・細線（28cm）</option>
									<option value="3">3番:丸網・太線（24cm）</option>
									<option value="4">4番:丸網・細線（24cm）</option>
									<option value="5">5番:丸網・太線（29ｘ17cm）</option>
									<option value="6">6番:丸網・細線（29ｘ17cm）</option>
									<option value="7">7番:角網・太線（29ｘ17cm）</option>
									<option value="8">8番:角網・細線（29ｘ18cm）</option>
									<option value="9">9番:角網・細線（34ｘ17cm）</option>
									<option value="10">10番:ヘビーロストル</option>
									<option value="11">11番:ハードロストル</option>
									<option value="12">12番:ハイパーロストル</option>
									<option value="13">13番:ロストル（29ｘ18cm）</option>
									<option value="14">14番:ロストル（34ｘ17cm）</option>
								</select>
							</td>
							<th class="table_title table_title-positionCenter">注文枚数</th>
							<td class="table_data">
								<input type="text" name="item3_num" value="" class="form form-sizeL" placeholder="00" tabindex="1">
							</td>
						</tr>
						<tr>
							<th class="table_title"><div class="table_title_required">商品④</div></th>
							<td class="table_data">
								<select name="item4" class="form" tabindex="1">
									<option value="">未選択</option>
									<option value="1">1番:丸網・太線（28cm）</option>
									<option value="2">2番:丸網・細線（28cm）</option>
									<option value="3">3番:丸網・太線（24cm）</option>
									<option value="4">4番:丸網・細線（24cm）</option>
									<option value="5">5番:丸網・太線（29ｘ17cm）</option>
									<option value="6">6番:丸網・細線（29ｘ17cm）</option>
									<option value="7">7番:角網・太線（29ｘ17cm）</option>
									<option value="8">8番:角網・細線（29ｘ18cm）</option>
									<option value="9">9番:角網・細線（34ｘ17cm）</option>
									<option value="10">10番:ヘビーロストル</option>
									<option value="11">11番:ハードロストル</option>
									<option value="12">12番:ハイパーロストル</option>
									<option value="13">13番:ロストル（29ｘ18cm）</option>
									<option value="14">14番:ロストル（34ｘ17cm）</option>
								</select>
							</td>
							<th class="table_title table_title-positionCenter">注文枚数</th>
							<td class="table_data">
								<input type="text" name="item4_num" value="" class="form form-sizeL" placeholder="00" tabindex="1">
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
						<a href="javascript:history.back();" class="focus" tabindex="1"><i class="btn_icon btn_icon-4"></i>戻る</a>
					</li>
					<li class="btn_box btn_box-sizeS btn_box-inline btn_box-color1">
						<a href="javascript:orderForm.submit()" class="focus" tabindex="1"><i class="btn_icon btn_icon-1"></i>登録</a>
					</li>
				</ul>
			</div>
		</div>
	</form>

</div><!-- / CONTENTS -->
</section><!-- / SECTION -->
</div><!-- / B-CONTENTS -->
@endsection