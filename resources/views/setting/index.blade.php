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
		<div class="block_inner block_inner-1">
			<div class="title">
				<div class="title_leftMark">
					<h2 class="title_text title_text-size2L">商品設定</h2>
				</div>
			</div>
		</div>
		<div class="block_inner block_inner-1 block_inner-spaceS block_inner-titleBtn">
			<div class="btn">
				<p class="btn_box btn_box-color2">
					<a href="{$base_url}setting/create/" class="focus" tabindex="1"><i class="btn_icon btn_icon-2"></i>商品登録</a>
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
						<span class="focus"><i></i>商品設定</span>
					</p>
				</div>
			</li>
			<li class="tabMenu_box">
				<div class="btn">
					<p class="btn_box btn_box-sizeFixedS">
						<a href="{$base_url}setting/account/" class="focus" tabindex="1"><i></i>アカウント</a>
					</p>
				</div>
			</li>
		</ul>
	</nav>
	<form method="post" action="" class="js-insuranceSearchForm">
		<div class="block block-spaceM"><!-- 検索枠 -->
			<div class="block_inner block_inner-5">
				<table class="table">
					<colgroup style="width: 10%"></colgroup>
					<colgroup style="width: 15%"></colgroup>
					<colgroup style="width: 10%"></colgroup>
					<colgroup style="width: 65%"></colgroup>
					<tbody>
						<tr class="js-inputClear">
							<th class="table_title table_title-positionCenter">商品番号</th>
							<td class="table_data">
								<input type="text" name="" value="" maxlength="" class="form" placeholder="0000" tabindex="1">
							</td>
							<th class="table_title table_title-positionCenter">商品名</th>
							<td class="table_data">
								<input type="text" name="" value="" class="form" placeholder="ここに入力" tabindex="1">
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
		<div class="block_inner block_inner-7">
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
				<table class="table table-list table-center table-borderTopNone table-positionCenter js-dataTable">
					<colgroup style="width: 5%;"></colgroup>
					<colgroup style="width: 8%;"></colgroup>
					<colgroup style="width: 40%;"></colgroup>
					<colgroup style="width: 42%;"></colgroup>
					<colgroup style="width: 5%;"></colgroup>
					<thead>
						<tr>
							<th class="table_title"></th>
							<th class="table_title">商品番号</th>
							<th class="table_title">商品名</th>
							<th class="table_title">備考</th>
							<th class="table_title"></th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td colspan="5" class="table_data">該当データがありません</td>
						</tr>
						<tr class="table_status table_status-color">
							<td class="table_data table_data-btn">
								<div class="btn">
									<p class="btn_box btn_box-innerSpaceXS btn_box-color4">
										<a href="{$base_url}setting/details/" class="focus" tabindex="1">編集</a>
									</p>
								</div>
							</td>
							<td class="table_data table_data-positionCenter"><input type="text" name="view" value="9999" class="form" readonly></td>
							<td class="table_data table_data-positionLeft">太線（29ｘ17cm）</td>
							<td class="table_data table_data-positionLeft">テキストテキストテキストテキストテキストテキストテキスト</td>
							<td class="table_data table_data-btn">
								<div class="btn">
									<p class="btn_box btn_box-innerSpaceXS btn_box-color">
										<a href="#" class="focus" tabindex="1">削除</a>
									</p>
								</div>
							</td>
						</tr>
						<tr class="table_status table_status-color">
							<td class="table_data table_data-btn">
								<div class="btn">
									<p class="btn_box btn_box-innerSpaceXS btn_box-color4">
										<a href="{$base_url}setting/details/" class="focus" tabindex="1">編集</a>
									</p>
								</div>
							</td>
							<td class="table_data table_data-positionCenter"><input type="text" name="view" value="9999" class="form" readonly></td>
							<td class="table_data table_data-positionLeft">細線（34ｘ17cm）</td>
							<td class="table_data table_data-positionLeft">テキストテキストテキストテキストテキストテキストテキスト</td>
							<td class="table_data table_data-btn">
								<div class="btn">
									<p class="btn_box btn_box-innerSpaceXS btn_box-color">
										<a href="#" class="focus" tabindex="1">削除</a>
									</p>
								</div>
							</td>
						</tr>
						<tr class="table_status table_status-color">
							<td class="table_data table_data-btn">
								<div class="btn">
									<p class="btn_box btn_box-innerSpaceXS btn_box-color4">
										<a href="{$base_url}setting/details/" class="focus" tabindex="1">編集</a>
									</p>
								</div>
							</td>
							<td class="table_data table_data-positionCenter"><input type="text" name="view" value="9999" class="form" readonly></td>
							<td class="table_data table_data-positionLeft">太線（29ｘ17cm）</td>
							<td class="table_data table_data-positionLeft">テキストテキストテキストテキストテキストテキストテキスト</td>
							<td class="table_data table_data-btn">
								<div class="btn">
									<p class="btn_box btn_box-innerSpaceXS btn_box-color">
										<a href="#" class="focus" tabindex="1">削除</a>
									</p>
								</div>
							</td>
						</tr>
						<tr class="table_status table_status-color">
							<td class="table_data table_data-btn">
								<div class="btn">
									<p class="btn_box btn_box-innerSpaceXS btn_box-color4">
										<a href="{$base_url}setting/details/" class="focus" tabindex="1">編集</a>
									</p>
								</div>
							</td>
							<td class="table_data table_data-positionCenter"><input type="text" name="view" value="9999" class="form" readonly></td>
							<td class="table_data table_data-positionLeft">太線（29ｘ17cm）</td>
							<td class="table_data table_data-positionLeft">テキストテキストテキストテキストテキストテキストテキスト</td>
							<td class="table_data table_data-btn">
								<div class="btn">
									<p class="btn_box btn_box-innerSpaceXS btn_box-color">
										<a href="#" class="focus" tabindex="1">削除</a>
									</p>
								</div>
							</td>
						</tr>
					</tbody>
				</table>
			<!--</div>--><!-- / block_inner_dataTable -->
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