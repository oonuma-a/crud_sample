{nocache}
<!DOCTYPE html>
<html lang="ja">
<head>
{include file='include/head.tpl'}
<link rel="stylesheet" href="{$base_url}css/jquery-ui.css" media="all">
<link rel="stylesheet" href="{$base_url}css/modaal.css" media="all">
<script src="{$base_url}js/plugins/pc/datepicker/jquery.ui.datepicker-ja.js"></script>
{literal}
<style>
/*ｍｏｄａｌ*/
#js-modalItem {
	display: none;
}

/*.modaal-content-container {
 	padding: 0 !important;
	background-color: rgba(0,0,0,0) !important;
}
.modaal-container {
 	background-color: rgba(0,0,0,0) !important;
}*/
#modaal-close {
	top: 10px;
	right: 10px;
	width: 25px;
	height: 25px;
	cursor: pointer;
	position: absolute;
	border-radius: 50%;
	background-size: 15px;
	background-color: #b4b4b4;
	background-position: center;
	background-repeat: no-repeat;
	background-image: url(../img/sp/close1.png);
	box-shadow: -1px 1px 5px 0 rgba(0,0,0,0.1);
}
#modaal-close:before,#modaal-close:after {
	display: none;
}
{/literal}
</style>
{literal}
<script>
$(function(){
	$('.js-modalbtn').modaal({
		// hide_close: true,
		width: 350,
		overlay_opacity: 0.5,
	});
});
</script>
{/literal}
</head>
<body{if !empty($pageID)} id="{$pageID}"{/if}>
<div class="l-wrapper"><!-- L-WRAPPER  -->
<div id="js-modalItem">
	<table class="table table-positionCenter">
		<colgroup style="width: 33.4%"></colgroup>
		<colgroup span="2" style="width: 33.3%"></colgroup>
		<thead>
			<th class="table_title">受付日時</th>
			<th class="table_title">注文番号</th>
			<th class="table_title">店舗番号</th>
		</thead>
		<tbody>
			<tr>
				<td class="table_data">18/0101 17:18</td>
				<td class="table_data">1800001</td>
				<td class="table_data">1</td>
			</tr>
		</tbody>
	</table>
	<div class="btn btn-spaceS">
		<p class="btn_box btn_box-inline btn_box-sizeM btn_box-center btn_box-color3">
			<a href="" class="focus" tabindex="1">配送済にする</a>
		</p>
	</div>

<!-- 				<table class="table table-borderLeftNone table-form">
					<colgroup style="width: 30%"></colgroup>
					<colgroup style="width: 70%"></colgroup>
					<tbody>
						<tr>
							<th class="table_title">配送</th>
							<td class="table_data">
								<ul class="formList">
									<li class="formList_item">
										<input type="checkbox" name="no_recruiter" value="1" id="no_recruiter" tabindex="1">
										<label for="no_recruiter">配送済にする</label><div class="formList_item_checkBox"></div>
									</li>
									<li class="formList_item js-clearSpecial">
										<input type="radio" name="upid" value="1" id="upid1" tabindex="1" checked>
										<label for="upid1">配送済</label><div class="formList_item_check"></div>
									</li>
									<li class="formList_item js-clearSpecial">
										<input type="radio" name="upid" value="2" id="upid2" tabindex="1">
										<label for="upid2">未配送</label><div class="formList_item_check"></div>
									</li>
								</ul>
							</td>
						</tr>
					</tbody>
				</table> -->
</div>
{include file='include/header.tpl'}
<div class="b-contents"><!-- B-CONTENTS -->
<section><!-- SECTION -->
<div class="contentsTitle">
	<div class="block">
		<div class="block_inner block_inner-1">
			<div class="title">
				<div class="title_leftMark">
					<h2 class="title_text title_text-size2L">注文管理</h2>
				</div>
			</div>
		</div>
		<div class="block_inner block_inner-1 block_inner-spaceS block_inner-titleBtn">
			<div class="btn">
				<p class="btn_box btn_box-color2">
					<a href="{$base_url}order/create/" class="focus" tabindex="1"><i class="btn_icon btn_icon-2"></i>電話注文登録</a>
				</p>
			</div>
		</div>
	</div>
</div>
<div class="contents"><!-- CONTENTS -->
	<nav>
		<ul class="tabMenu">
			<li class="tabMenu_box">
				<div class="btn">
					<p class="btn_box btn_box-sizeFixedS btn_box-select">
						<span class="focus"><i></i>未配送一覧</span>
					</p>
				</div>
			</li>
			<li class="tabMenu_box">
				<div class="btn">
					<p class="btn_box btn_box-sizeFixedS">
						<a href="{$base_url}order/history/" class="focus" tabindex="1"><i></i>配送済一覧</a>
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
			<div class="block_inner block_inner-6">
				<table class="table">
					<colgroup style="width: 9%"></colgroup>
					<colgroup style="width: 25%"></colgroup>
					<colgroup style="width: 9%"></colgroup>
					<colgroup style="width: 12%"></colgroup>
					<colgroup style="width: 9%"></colgroup>
					<colgroup style="width: 12%"></colgroup>
					<colgroup style="width: 9%"></colgroup>
					<colgroup style="width: 15%"></colgroup>
					<tbody>
						<tr class="js-inputClear">
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

{literal}
<script>
$(function() {
	// $('.js-infoOpen').on('click', function(e){
	// 	e.preventDefault();
		
	// 	var is_active = $(this).find('i').hasClass('js-active');
	// 	if (is_active) {
	// 		$(this).parents('.js-delivery').next('.js-item').remove();
	// 		$(this).find('i').removeClass('js-active');
	// 		return;
	// 	}
	// 	$(this).parents('.js-delivery').after('<tr class="js-item"><th colspan="2" class="table_title">注文内容</th><td colspan="9" class="table_data table_data-positionLeft"><div text>丸網・太線（28cm）15枚、角網・細線（29ｘ18cm）10枚<br>早めの対応をお願いします。</td></tr>');
	// 	$(this).find('i').addClass('js-active');

	// });
	// $('.js-minus').on('click', function(e){
	// 	e.preventDefault();
	// 	var orderInput,orderVal = '';
	// 	orderInput = $(this).parents('tr').find('.js-order');
	// 	orderVal = parseInt(orderInput.val());

	// 	if(isNaN(orderVal) || orderVal<=0){
	// 		return
	// 	}
	// 	orderInput.val(orderVal-1);

	// });

// 	$('.js-historyBtn').on('click', function(e){
// 		var status = ($(this).is(':checked')) ? true : false;


// var historyData =[];
// 	if(status) {
// 		$.each($('.js-orderTable tbody').children(), function(i) {
// 			var num = i+1;
// 			var historyOrder = $('input[name^="history_order'+num+'"]').val();
// 			$('input[name^="order'+num+'"]').val(historyOrder);
// 			$('.js-order2').show();
// 			$('.js-order1,.js-history').hide();
// 			$('.js-orderTable').find('thead tr th:last').attr('colspan', '2');
// 			console.log($('input[name^="order'+num+'"]').val())
// 		});
// 	}else{
// 		$.each($('.js-orderTable tbody').children(), function(i) {
// 			var num = i+1;
// 			$('input[name="order'+num+'"]').val('');
// 			$('.js-order1,.js-history').show();
// 			$('.js-order2').hide();
// 			$('.js-orderTable').find('thead tr th:last').attr('colspan', '');
// 		});
// 	}
// 	});
});
</script>
{/literal}
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
					<colgroup style="width: 7%;"></colgroup>
					<colgroup style="width: 4.8%;"></colgroup>
					<colgroup style="width: 4.8%;"></colgroup>
					<colgroup style="width: 10%;"></colgroup>
					<!-- <colgroup style="width: 8%;"></colgroup> -->
					<colgroup style="width: 7.6%;"></colgroup>
					<colgroup style="width: 6%;"></colgroup>
					<colgroup span="4" style="width: 6%;"></colgroup>
					<colgroup style="width: 12%;"></colgroup>
					<colgroup style="width: 12.8%;"></colgroup>
					<colgroup style="width: 5%;"></colgroup>
					<colgroup span="2" style="width: 3%;"></colgroup>
					<thead>
						<tr>
							<!-- <th class="table_title"></th> -->
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
							<th class="table_title">特記事項</th>
							<th class="table_title">備考</th>
							<th class="table_title">登録者</th>
							<th class="table_title"></th>
							<th class="table_title"></th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td colspan="15" class="table_data">該当データがありません</td>
						</tr>
						<tr class="table_status table_status-lineColor table_status-color">
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
							<td class="table_data table_data-positionLeft">テキストテキストテキストテキストテキスト</td>
							<td class="table_data">カルロス</td>
							<td class="table_data table_data-btn">
								<div class="btn">
									<p class="btn_box btn_box-innerSpaceXS btn_box-color3">
										<a href="#js-modalItem" class="js-modalbtn focus" tabindex="1">配送</a>
									</p>
								</div>
							</td>
							<td class="table_data table_data-btn">
								<div class="btn">
									<p class="btn_box btn_box-innerSpaceXS btn_box-color">
										<a href="{$base_url}?data=1" class="focus" tabindex="1">取消</a>
									</p>
								</div>
							</td>
						</tr>
						<tr class="table_status table_status-lineColor table_status-color">
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
							<td class="table_data table_data-positionLeft">テキストテキストテキストテキストテキスト</td>
							<td class="table_data">定期配送</td>
							<td class="table_data table_data-btn">
								<div class="btn">
									<p class="btn_box btn_box-innerSpaceXS btn_box-color3">
										<a href="#js-modalItem" class="js-modalbtn focus" tabindex="1">配送</a>
									</p>
								</div>
							</td>
							<td class="table_data table_data-btn">
								<div class="btn">
									<p class="btn_box btn_box-innerSpaceXS btn_box-color">
										<a href="{$base_url}?data=1" class="focus" tabindex="1">取消</a>
									</p>
								</div>
							</td>
						</tr>
						<tr class="table_status table_status-lineColor table_status-color">
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
							<td class="table_data table_data-positionLeft">テキストテキストテキストテキストテキスト</td>
							<td class="table_data">店舗</td>
							<td class="table_data table_data-btn">
								<div class="btn">
									<p class="btn_box btn_box-innerSpaceXS btn_box-color3">
										<a href="#js-modalItem" class="js-modalbtn focus" tabindex="1">配送</a>
									</p>
								</div>
							</td>
							<td class="table_data table_data-btn">
								<div class="btn">
									<p class="btn_box btn_box-innerSpaceXS btn_box-color">
										<a href="{$base_url}?data=1" class="focus" tabindex="1">取消</a>
									</p>
								</div>
							</td>
						</tr>
						<tr class="table_status table_status-lineColor table_status-color">
							<td class="table_data">18/01/01 <span class="table_data_keep">17:18</span></td>
							<td class="table_data">1800002</td>
							<td class="table_data">1</td>
							<td class="table_data table_data-positionLeft"><a href="{$base_url}details/" class="focus" tabindex="1">テストテスト店舗</a></td>
							<td class="table_data">090-1234-5678</td>
							<td class="table_data">神奈川(02)</td>
							<td class="table_data">20番 <span class="table_data_keep">10枚</span></td>
							<td class="table_data">25番 <span class="table_data_keep">50枚</span></td>
							<td class="table_data">99番 <span class="table_data_keep">10枚</span></td>
							<td class="table_data">100番 <span class="table_data_keep">10枚</span></td>
							<td class="table_data table_data-positionLeft">テキストテキスト</td>
							<td class="table_data table_data-positionLeft">テキスト</td>
							<td class="table_data">店舗</td>
							<td class="table_data table_data-btn">
								<div class="btn">
									<p class="btn_box btn_box-innerSpaceXS btn_box-color3">
										<a href="{$base_url}details/" class="focus" tabindex="1">配送</a>
									</p>
								</div>
							</td>
							<td class="table_data table_data-btn">
								<div class="btn">
									<p class="btn_box btn_box-innerSpaceXS btn_box-color">
										<a href="{$base_url}?data=1" class="focus" tabindex="1">取消</a>
									</p>
								</div>
							</td>
						</tr>
{* 今後使用テンプレート *}
<!-- 						<tr class="js-delivery table_status table_status-lineColor table_status-color">
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
										<a href="{$base_url}details/" class="focus" tabindex="1">詳細</a>
									</p>
								</div>
							</td>
							<td class="table_data">2018/01/01</td>
							<td class="table_data">1</td>
							<td class="table_data">198</td>
							<td class="table_data">東京（01）</td>
							<td class="table_data table_data-positionLeft"><input type="text" name="view" value="テスト店舗テスト店舗テスト店舗テスト店舗テスト店舗テスト店舗テスト" class="form" readonly></td>
							<td class="table_data table_data-positionLeft"><input type="text" name="view" value="テスト テスト" class="form" readonly></td>
							<td class="table_data">090-1111-1111</td>
							<td class="table_data table_data-status">未対応</td>
							<td class="table_data table_data-btn">
								<div class="btn">
									<p class="btn_box btn_box-innerSpaceXS btn_box-color">
										<a href="{$base_url}?data=1" class="focus" tabindex="1">取消</a>
									</p>
								</div>
							</td>
						</tr> -->
					</tbody>
				</table>
			<!-- </div> --><!-- / block_inner_dataTable -->
		</div>
	</div>
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
	// $('.js-pop_up').colorbox({width:'300'});
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