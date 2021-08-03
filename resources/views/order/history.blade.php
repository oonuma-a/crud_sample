{nocache}
<!DOCTYPE html>
<html lang="ja">
<head>
{include file='include/head.tpl'}
<link rel="stylesheet" href="{$base_url}css/jquery-ui.css" media="all">
<script src="{$base_url}js/plugins/pc/datepicker/jquery.ui.datepicker-ja.js"></script>
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
					<h2 class="title_text title_text-size2L">注文管理</h2>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="contents"><!-- CONTENTS -->
	<nav>
		<ul class="tabMenu">
			<li class="tabMenu_box">
				<div class="btn">
					<p class="btn_box btn_box-sizeFixedS">
						<a href="{$base_url}order/" class="focus" tabindex="1"><i></i>未配送一覧</a>
					</p>
				</div>
			</li>
			<li class="tabMenu_box">
				<div class="btn">
					<p class="btn_box btn_box-sizeFixedS btn_box-select">
						<span class="focus"><i></i>配送済一覧</span>
					</p>
				</div>
			</li>
			<li class="tabMenu_box">
				<div class="btn">
					<p class="btn_box btn_box-sizeFixedS">
						<a href="{$base_url}order/cancel/" class="focus" tabindex="1"><i></i>取消一覧</a>
					</p>
				</div>
			</li>
		</ul>
	</nav>
	<form method="post" action="">
		<div class="block block-spaceM"><!-- 検索枠 -->
			<div class="block_inner block_inner-8">
				<table class="table">
					<colgroup style="width: 8%"></colgroup>
					<colgroup style="width: 19%"></colgroup>
					<colgroup style="width: 7%"></colgroup>
					<colgroup style="width: 19%"></colgroup>
					<colgroup style="width: 7%"></colgroup>
					<colgroup style="width: 8%"></colgroup>
					<colgroup style="width: 7%"></colgroup>
					<colgroup style="width: 8%"></colgroup>
					<colgroup style="width: 7%"></colgroup>
					<colgroup style="width: 10%"></colgroup>
					<tbody>
						<tr class="js-inputClear">
							<th class="table_title table_title-positionCenter">配送完了日</th>
							<td class="table_data">
								<input type="text" name="start_delivery" value="" class="form form-sizeS form-readonly js-datepicker" placeholder="{$smarty.now|date_format:"%Y/%m/%d"}" autocomplete="off" tabindex="1" readonly>～<input type="text" name="end_delivery" value="{$post_data.end_month|default:''}" class="form form-sizeS form-readonly js-datepicker" placeholder="{"30 day"|strtotime|date_format:"%Y/%m/%d"}" autocomplete="off" tabindex="1" readonly>
							</td>
							<th class="table_title table_title-positionCenter">受付日</th>
							<td class="table_data">
								<input type="text" name="start_day" value="" class="form form-sizeS form-readonly js-datepicker" placeholder="{$smarty.now|date_format:"%Y/%m/%d"}" autocomplete="off" tabindex="1" readonly>～<input type="text" name="end_day" value="{$post_data.end_month|default:''}" class="form form-sizeS form-readonly js-datepicker" placeholder="{"30 day"|strtotime|date_format:"%Y/%m/%d"}" autocomplete="off" tabindex="1" readonly>
							</td>
							<th class="table_title table_title-positionCenter">注文番号</th>
							<td class="table_data">
								<input type="tel" name="" value="" class="form" placeholder="ここに入力" autocomplete="off" tabindex="1">
							</td>
							<th class="table_title table_title-positionCenter">店舗番号</th>
							<td class="table_data">
								<input type="tel" name="" value="" class="form" placeholder="ここに入力" autocomplete="off" tabindex="1">
							</td>
							<th class="table_title table_title-positionCenter">配送地域</th>
							<td class="table_data">
								<select name="" class="form" tabindex="1">
									<option value="0">未選択</option>
									<option value="0">東京(01)</option>
									<option value="1">千葉(02)</option>
									<option value="2">神奈川(03)</option>
									<option value="3">埼玉(04)</option>
									<option value="4">茨城(05)</option>
									<option value="5">群馬(06)</option>
									<option value="6">栃木(07)</option>
								</select>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
			<div class="block_inner block_inner-btn block_inner-spaceS">
				<div class="btn">
					<p class="btn_box btn_box-color6">
						<a href="#" class="focus js-btnSearch" tabindex="1"><i class="btn_icon btn_icon-3"></i>検索</a>
					</p>
				</div>
			</div>
			<div class="block_inner block_inner-btn block_inner-spaceNone">
				<div class="btn">
					<p class="btn_box btn_box-color">
						<a href="javascript:void(0)" class="js-clearBtn focus" tabindex="1"><i class="btn_icon btn_icon-0"></i>クリア</a>
					</p>
				</div>
			</div>
		</div><!-- / 検索枠 -->
	</form>
	<div class="block block-spaceL">
		<div class="block_inner">
			<!-- <div class="block_inner_dataTable"> -->{*<!-- dataTable使用の場合 -->*}
				<div class="pager">
					<ul class="pager_box">
						<li class="pager_box_list pager_box_list-prev"><a href="" class="disabled js-disable">前へ</a></li><li class="pager_box_list"><span>1</span></li><li class="pager_box_list"><a href="">2</a></li><li class="pager_box_list pager_box_list-next"><a href="">次へ</a></li>
					</ul>
					<div class="block_inner_page">
						表示件数：<select name="" class="form form-maxSizeS" tabindex="1">
							<option value="25">25件</option>
							<option value="50" selected>50件</option>
							<option value="75">75件</option>
							<option value="100">100件</option>
							<option value="200">200件</option>
						</select>
					</div>
				</div>
				<table class="table table-list table-center table-borderTopNone table-positionCenter">
					<colgroup style="width: 6%;"></colgroup>
					<colgroup style="width: 8%;"></colgroup>
					<colgroup style="width: 5%;"></colgroup>
					<colgroup style="width: 5%;"></colgroup>
					<colgroup style="width: 12%;"></colgroup>
					<colgroup style="width: 8%;"></colgroup>
					<colgroup style="width: 6%;"></colgroup>
					<colgroup span="4" style="width: 7%;"></colgroup>
					<!-- <colgroup style="width: 15%;"></colgroup> -->
					<colgroup style="width: 17%;"></colgroup>
					<colgroup style="width: 5%;"></colgroup>
					<!-- <colgroup span="2" style="width: 3%;"></colgroup> -->
					<thead>
						<tr>
							<th class="table_title">配送完了日</th>
							<th class="table_title">受付日時</th>
							<th class="table_title">注文番号</th>
							<th class="table_title">店舗番号</th>
							<th class="table_title">店舗名</th>
							<th class="table_title">電話番号</th>
							<th class="table_title">配送地域</th>
							<th class="table_title">商品①</th>
							<th class="table_title">商品②</th>
							<th class="table_title">商品③</th>
							<th class="table_title">商品④</th>
							<th class="table_title">備考</th>
							<th class="table_title">登録者</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td colspan="13" class="table_data">該当データがありません</td>
						</tr>
						<tr class="table_status table_status-lineColor table_status-color">
							<td class="table_data">18/01/02</td>
							<td class="table_data">18/01/01 <span class="table_data_keep">17:18</span></td>
							<td class="table_data">1800001</td>{* 年号＋00001 *}
							<td class="table_data">1</td>
							<td class="table_data table_data-positionLeft"><a href="{$base_url}details/" class="focus" tabindex="1">テスト店舗</a></td>
							<td class="table_data">090-1234-5678</td>
							<td class="table_data">東京(01)</td>
							<td class="table_data">20番 <span class="table_data_keep">10枚</span></td>
							<td class="table_data">25番 <span class="table_data_keep">50枚</span></td>
							<td class="table_data">100番 <span class="table_data_keep">100枚</span></td>
							<td class="table_data">100番 <span class="table_data_keep">1000枚</span></td>
							<td class="table_data table_data-positionLeft">テキストテキストテキストテキストテキスト</td>
							<td class="table_data">カルロス</td>
						</tr>
						<tr class="table_status table_status-lineColor table_status-color">
							<td class="table_data">18/01/02</td>
							<td class="table_data">18/01/01 <span class="table_data_keep">17:18</span></td>
							<td class="table_data">1800002</td>
							<td class="table_data">1</td>
							<td class="table_data table_data-positionLeft"><a href="{$base_url}details/" class="focus" tabindex="1">テスト店舗テスト店舗</a></td>
							<td class="table_data">090-1234-5678</td>
							<td class="table_data">神奈川(02)</td>
							<td class="table_data">20番 <span class="table_data_keep">10枚</span></td>
							<td class="table_data">25番 <span class="table_data_keep">50枚</span></td>
							<td class="table_data">99番 <span class="table_data_keep">10枚</span></td>
							<td class="table_data">100番 <span class="table_data_keep">10枚</span></td>
							<td class="table_data table_data-positionLeft">テキスト</td>
							<td class="table_data">店舗</td>
						</tr>
<!-- 						<tr class="table_status table_status-lineColor4 table_status-color4">
							<td class="table_data"></td>
							<td class="table_data">18/01/01 <span class="table_data_keep">17:18</span></td>
							<td class="table_data">1800002</td>
							<td class="table_data">1</td>
							<td class="table_data table_data-positionLeft"><a href="{$base_url}details/" class="focus" tabindex="1">テスト店舗テスト店舗</a></td>
							<td class="table_data">090-1234-5678</td>
							<td class="table_data">神奈川(02)</td>
							<td class="table_data">20番 <span class="table_data_keep">10枚</span></td>
							<td class="table_data">25番 <span class="table_data_keep">50枚</span></td>
							<td class="table_data">99番 <span class="table_data_keep">10枚</span></td>
							<td class="table_data">100番 <span class="table_data_keep">10枚</span></td>
							<td class="table_data table_data-positionLeft">テキスト</td>
							<td class="table_data">店舗</td>
						</tr> -->
						<tr class="table_status table_status-lineColor table_status-color">
							<td class="table_data">18/01/02</td>
							<td class="table_data">18/01/01 <span class="table_data_keep">17:18</span></td>
							<td class="table_data">1800002</td>
							<td class="table_data">1</td>
							<td class="table_data table_data-positionLeft"><a href="{$base_url}details/" class="focus" tabindex="1">テスト店舗テスト店舗</a></td>
							<td class="table_data">090-1234-5678</td>
							<td class="table_data">神奈川(02)</td>
							<td class="table_data">20番 <span class="table_data_keep">10枚</span></td>
							<td class="table_data">25番 <span class="table_data_keep">50枚</span></td>
							<td class="table_data">99番 <span class="table_data_keep">10枚</span></td>
							<td class="table_data">100番 <span class="table_data_keep">10枚</span></td>
							<td class="table_data table_data-positionLeft">テキスト</td>
							<td class="table_data">店舗</td>
						</tr>
					</tbody>
				</table>
			<!-- </div> --><!-- / block_inner_dataTable -->
		</div>
	</div>
{literal}
<script>
$(function() {
	$('.js-infoOpen').on('click', function(e){
		e.preventDefault();
		
		var is_active = $(this).find('i').hasClass('js-active');
		if (is_active) {
			$(this).parents('.js-delivery').next('.js-item').remove();
			$(this).find('i').removeClass('js-active');
			return;
		}
		$(this).parents('.js-delivery').after('<tr class="js-item"><th colspan="2" class="table_title">注文内容</th><td colspan="9" class="table_data table_data-positionLeft"><div text>丸網・太線（28cm）15枚、角網・細線（29ｘ18cm）10枚<br>早めの対応をお願いします。</td></tr>');
		$(this).find('i').addClass('js-active');

	});
});
</script>
{/literal}
<!-- 	<div class="block block-spaceL">
		<div class="block_inner"> -->
			<!-- <div class="block_inner_dataTable"> -->{*<!-- dataTable使用の場合 -->*}
<!-- 				<div class="pager">
					<ul class="pager_box">
						<li class="pager_box_list pager_box_list-prev"><a href="" class="disabled js-disable">前へ</a></li><li class="pager_box_list"><span>1</span></li><li class="pager_box_list"><a href="">2</a></li><li class="pager_box_list pager_box_list-next"><a href="">次へ</a></li>
					</ul>
					<div class="block_inner_page">
						表示件数：<select name="" class="form form-maxSizeS" tabindex="1">
							<option value="25">25件</option>
							<option value="50" selected>50件</option>
							<option value="75">75件</option>
							<option value="100">100件</option>
							<option value="200">200件</option>
						</select>
					</div>
				</div>
				<table class="table table-list table-center table-borderTopNone table-positionCenter">
					<colgroup style="width: 3%;"></colgroup>
					<colgroup style="width: 5%;"></colgroup>
					<colgroup style="width: 6%;"></colgroup>
					<colgroup style="width: 6%;"></colgroup>
					<colgroup style="width: 7%;"></colgroup>
					<colgroup style="width: 8%;"></colgroup>
					<colgroup style="width: 8%;"></colgroup>
					<colgroup style="width: 25%;"></colgroup>
					<colgroup style="width: 18%;"></colgroup>
					<colgroup style="width: 8%;"></colgroup>
					<colgroup style="width: 6%;"></colgroup>
					<thead>
						<tr>
							<th class="table_title"></th>
							<th class="table_title"></th>
							<th class="table_title">受付日</th>
							<th class="table_title">配送完了日</th>
							<th class="table_title">店舗番号</th>
							<th class="table_title">注文番号</th>
							<th class="table_title">配送エリア</th>
							<th class="table_title">店舗名</th>
							<th class="table_title">名前</th>
							<th class="table_title">電話番号</th>
							<th class="table_title">進捗状況</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td colspan="11" class="table_data">該当データがありません</td>
						</tr>
						<tr class="js-delivery table_status table_status-lineColor table_status-color">
							<td class="table_data table_data-btn">
								<div class="btn">
									<p class="btn_box btn_box-innerSpaceXS btn_box-color1 btn_box-listType">
										<a href="{$base_url}details/" class="js-infoOpen focus plusMinusIcon" tabindex="1" style="">
											<i class="plusMinusIcon_item"></i>開く
										</a>
									</p>
								</div>
							</td>
							<td class="table_data table_data-btn">
								<div class="btn">
									<p class="btn_box btn_box-innerSpaceXS btn_box-color4">
										<a href="{$base_url}details/" class="focus" tabindex="1" target="_blank">詳細</a>
									</p>
								</div>
							</td>
							<td class="table_data">2018/01/01</td>
							<td class="table_data">2018/01/10</td>
							<td class="table_data">99999999</td>
							<td class="table_data">9999999999</td>
							<td class="table_data">神奈川（01）</td>
							<td class="table_data table_data-positionLeft"><input type="text" name="view" value="テスト店舗" class="form" readonly></td>
							<td class="table_data table_data-positionLeft"><input type="text" name="view" value="テスト テスト" class="form" readonly></td>
							<td class="table_data">090-1111-1111</td>
							<td class="table_data table_data-status">完了</td>
						</tr>
						<tr class="js-delivery table_status table_status-lineColor1 table_status-color1">
							<td class="table_data table_data-btn">
								<div class="btn">
									<p class="btn_box btn_box-innerSpaceXS btn_box-color1 btn_box-listType">
										<a href="" class="js-infoOpen focus plusMinusIcon" tabindex="1" style="">
											<i class="plusMinusIcon_item"></i>開く
										</a>
									</p>
								</div>
							</td>
							<td class="table_data table_data-btn">
								<div class="btn">
									<p class="btn_box btn_box-innerSpaceXS btn_box-color4">
										<a href="{$base_url}details/" class="focus" tabindex="1" target="_blank">詳細</a>
									</p>
								</div>
							</td>
							<td class="table_data">2018/01/01</td>
							<td class="table_data">2018/01/10</td>
							<td class="table_data">1</td>
							<td class="table_data">199</td>
							<td class="table_data">東京（01）</td>
							<td class="table_data table_data-positionLeft"><input type="text" name="view" value="テスト店舗テスト店舗テスト店舗テスト店舗テスト店舗テスト店舗テスト" class="form" readonly></td>
							<td class="table_data table_data-positionLeft"><input type="text" name="view" value="テスト テスト" class="form" readonly></td>
							<td class="table_data">090-1111-1111</td>
							<td class="table_data table_data-status">未対応</td>
						</tr>
						<tr class="js-delivery table_status table_status-lineColor1 table_status-color1">
							<td class="table_data table_data-btn">
								<div class="btn">
									<p class="btn_box btn_box-innerSpaceXS btn_box-color1 btn_box-listType">
										<a href="{$base_url}details/" class="js-infoOpen focus plusMinusIcon" tabindex="1" style="">
											<i class="plusMinusIcon_item"></i>開く
										</a>
									</p>
								</div>
							</td>
							<td class="table_data table_data-btn">
								<div class="btn">
									<p class="btn_box btn_box-innerSpaceXS btn_box-color4">
										<a href="{$base_url}details/" class="focus" tabindex="1" target="_blank">詳細</a>
									</p>
								</div>
							</td>
							<td class="table_data">2018/01/01</td>
							<td class="table_data">2018/01/10</td>
							<td class="table_data">1</td>
							<td class="table_data">198</td>
							<td class="table_data">東京（01）</td>
							<td class="table_data table_data-positionLeft"><input type="text" name="view" value="テスト店舗テスト店舗テスト店舗テスト店舗テスト店舗テスト店舗テスト" class="form" readonly></td>
							<td class="table_data table_data-positionLeft"><input type="text" name="view" value="テスト テスト" class="form" readonly></td>
							<td class="table_data">090-1111-1111</td>
							<td class="table_data table_data-status">未対応</td>
						</tr>
						<tr class="js-delivery table_status table_status-lineColor table_status-color2">
							<td class="table_data table_data-btn">
								<div class="btn">
									<p class="btn_box btn_box-innerSpaceXS btn_box-color1 btn_box-listType">
										<a href="{$base_url}details/" class="js-infoOpen focus plusMinusIcon" tabindex="1" style="">
											<i class="plusMinusIcon_item"></i>開く
										</a>
									</p>
								</div>
							</td>
							<td class="table_data table_data-btn">
								<div class="btn">
									<p class="btn_box btn_box-innerSpaceXS btn_box-color4">
										<a href="{$base_url}details/" class="focus" tabindex="1" target="_blank">詳細</a>
									</p>
								</div>
							</td>
							<td class="table_data">2018/01/01</td>
							<td class="table_data">2018/01/10</td>
							<td class="table_data">99999999</td>
							<td class="table_data">9999999999</td>
							<td class="table_data">東京（01）</td>
							<td class="table_data table_data-positionLeft"><input type="text" name="view" value="テスト店舗テスト店舗テスト店舗テスト店舗テスト店舗テスト店舗テスト" class="form" readonly></td>
							<td class="table_data table_data-positionLeft"><input type="text" name="view" value="テスト テスト" class="form" readonly></td>
							<td class="table_data">090-1111-1111</td>
							<td class="table_data table_data-status">対応中</td>
						</tr>
						<tr class="js-delivery table_status table_status-lineColor table_status-color3">
							<td class="table_data table_data-btn">
								<div class="btn">
									<p class="btn_box btn_box-innerSpaceXS btn_box-color1 btn_box-listType">
										<a href="{$base_url}details/" class="js-infoOpen focus plusMinusIcon" tabindex="1" style="">
											<i class="plusMinusIcon_item"></i>開く
										</a>
									</p>
								</div>
							</td>
							<td class="table_data table_data-btn">
								<div class="btn">
									<p class="btn_box btn_box-innerSpaceXS btn_box-color4">
										<a href="{$base_url}details/" class="focus" tabindex="1" target="_blank">詳細</a>
									</p>
								</div>
							</td>
							<td class="table_data">2018/01/01</td>
							<td class="table_data">2018/01/10</td>
							<td class="table_data">99999999</td>
							<td class="table_data">9999999999</td>
							<td class="table_data">神奈川（01）</td>
							<td class="table_data table_data-positionLeft"><input type="text" name="view" value="テスト店舗" class="form" readonly></td>
							<td class="table_data table_data-positionLeft"><input type="text" name="view" value="テスト テスト" class="form" readonly></td>
							<td class="table_data">090-1111-1111</td>
							<td class="table_data table_data-status">配送中</td>
						</tr>
						<tr class="js-delivery table_status table_status-lineColor4 table_status-color4">
							<td class="table_data table_data-btn">
								<div class="btn">
									<p class="btn_box btn_box-innerSpaceXS btn_box-color1 btn_box-listType">
										<a href="{$base_url}details/" class="js-infoOpen focus plusMinusIcon" tabindex="1" style="">
											<i class="plusMinusIcon_item"></i>開く
										</a>
									</p>
								</div>
							</td>
							<td class="table_data table_data-btn">
								<div class="btn">
									<p class="btn_box btn_box-innerSpaceXS btn_box-color4">
										<a href="{$base_url}details/" class="focus" tabindex="1" target="_blank">詳細</a>
									</p>
								</div>
							</td>
							<td class="table_data">2018/01/01</td>
							<td class="table_data">2018/01/10</td>
							<td class="table_data">99999999</td>
							<td class="table_data">9999999999</td>
							<td class="table_data">神奈川（01）</td>
							<td class="table_data table_data-positionLeft"><input type="text" name="view" value="テスト店舗" class="form" readonly></td>
							<td class="table_data table_data-positionLeft"><input type="text" name="view" value="テスト テスト" class="form" readonly></td>
							<td class="table_data">090-1111-1111</td>
							<td class="table_data table_data-status">取消</td>
						</tr>
					</tbody>
				</table> -->
			<!-- </div> --><!-- / block_inner_dataTable -->
<!-- 		</div>
	</div> -->
</div><!-- / CONTENTS -->
</section><!-- / SECTION -->
</div><!-- / B-CONTENTS -->
{include file='include/sidebar.tpl'}
</div><!-- /L-WRAPPER  -->
{literal}
<script>
$(function() {
	$('.js-datepicker').datepicker({
		changeYear: false,
		changeMonth: false,
		numberOfMonths: [1,2],
		beforeShowDay: function(date) {
		// 土日曜日
		if (date.getDay() == 0) return [true, 'sunday'];
		if (date.getDay() == 6) return [true, 'saturday'];
		// 平日
		return [true, ''];
		},
		onSelect: function(dateText, inst) {
		$("#date_val").val(dateText);
		}
	});
	// Form 初期化
	appForm.initialize();
	//pop up
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