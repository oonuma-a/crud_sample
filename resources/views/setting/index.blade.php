@extends('layouts.layout')
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
					<h2 class="title_text title_text-size2L">商品設定</h2>
				</div>
			</div>
		</div>
		<div class="block_inner block_inner-1 block_inner-spaceS block_inner-titleBtn">
			<div class="btn">
				<p class="btn_box btn_box-color2">
					<a href="{{route('setting.create')}}" class="focus" tabindex="1"><i class="btn_icon btn_icon-2"></i>商品登録</a>
				</p>
			</div>
		</div>
	</div>
</div>
@section('content')
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
						<a href="{{route('setting.account')}}" class="focus" tabindex="1"><i></i>アカウント</a>
					</p>
				</div>
			</li>
		</ul>
	</nav>
	<form method="get" action="{{route('setting.index')}}" class="js-insuranceSearchForm"　name="settingform">
		@csrf
		<input type="hidden" name="searchSendFlg" value="1">
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
								<input type="text" name="searchItemNumber" value="" maxlength="" class="form" placeholder="0000" tabindex="1">
							</td>
							<th class="table_title table_title-positionCenter">商品名</th>
							<td class="table_data">
								<input type="text" name="searchItemName" value="" class="form" placeholder="ここに入力" tabindex="1">
							</td>
						</tr>
					</tbody>
				</table>
			</div>
			<div class="block_inner block_inner-btn block_inner-spaceS">
				<div class="btn">
					<p class="btn_box btn_box-color6">
						<a href="javascript:settingform.submit()" class="focus js-btnSearch" tabindex="1"><i class="btn_icon btn_icon-3"></i>検索</a>
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
				@if(isset($searchList))
					{{$searchList->appends(request()->input())->links()}}
				@else
					{{$itemList->links()}}
				@endif
					<div class="block_inner_page">
						<form action="{{route('setting.index')}}" method="get">
							表示件数：<select name="paginateValue" class="form form-maxSizeS" tabindex="1" onchange="submit();">
							<option value="5" selected>5件</option>
							<option value="25">25件</option>
							<option value="50">50件</option>
							<option value="75">75件</option>
							<option value="100">100件</option>
							<option value="200">200件</option>
							</select>
						</form>
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
						@if(isset($searchList))
							@if(count($searchList) == 0)
								<tr>
									<td colspan="5" class="table_data">該当データがありません</td>
								</tr>
							@else
								@foreach($searchList as $item)
									<tr class="table_status table_status-color">
										<td class="table_data table_data-btn">
											<div class="btn">
												<p class="btn_box btn_box-innerSpaceXS btn_box-color4">
													<form action="{{route('setting.details')}}" method="post" name="searchform">
														@csrf
														<input type="hidden" name="updateFlg" value="1">
														<input type="hidden" name="updateId" value="{{$item->id}}">
														<p class="btn_box btn_box-innerSpaceXS btn_box-color4">
															<a href="javascript:searchform.submit()" class="focus" tabindex="1">編集</a>
														</p>
													</form>
												</p>
											</div>
										</td>
										<td class="table_data table_data-positionCenter">{{$item->item_number}}</td>
										<td class="table_data table_data-positionLeft">{{$item->item_name}}</td>
										<td class="table_data table_data-positionLeft">{{$item->remarks}}</td>
										<td class="table_data table_data-btn">
											<div class="btn">
												<p class="btn_box btn_box-innerSpaceXS btn_box-color">
													<form action="{{route('setting.index')}}" method="post" name="deletesearchform">
														@csrf
														<input type="hidden" name="deleteFlg" value="1">
														<input type="hidden" name="deleteId" value="{{$item->id}}">
														<p class="btn_box btn_box-innerSpaceXS btn_box-color">
															<a href="javascript:deletesearchForm.submit()" class="focus" tabindex="1">削除</a>
														</p>
													</form>
												</p>
											</div>
										</td>
									</tr>
								@endforeach	
							@endif
						@else
							@if(count($itemList) == 0)
								<tr>
									<td colspan="5" class="table_data">該当データがありません</td>
								</tr>
							@else
								@foreach($itemList as $item)
									<tr class="table_status table_status-color">
										<td class="table_data table_data-btn">
											<div class="btn">
												<p class="btn_box btn_box-innerSpaceXS btn_box-color4">
													<form action="{{route('setting.details')}}" method="get" name="settingForm">
														@csrf
														<input type="hidden" name="updateFlg" value="1">
														<input type="hidden" name="updateId" value="{{$item->id}}">
														<p class="btn_box btn_box-innerSpaceXS btn_box-color4">
															<a href="javascript:settingform.submit()" class="focus" tabindex="1">編集</a>
														</p>
													</form>
												</p>
											</div>
										</td>
										<td class="table_data table_data-positionCenter">{{$item->item_number}}</td>
										<td class="table_data table_data-positionLeft">{{$item->item_name}}</td>
										<td class="table_data table_data-positionLeft">{{$item->remarks}}</td>
										<td class="table_data table_data-btn">
											<div class="btn">
												<p class="btn_box btn_box-innerSpaceXS btn_box-color">
													<form action="{{route('setting.index')}}" method="post" name="deleteform">
														@csrf
														<input type="hidden" name="deleteFlg" value="1">
														<input type="hidden" name="deleteId" value="{{$item->id}}">
														<p class="btn_box btn_box-innerSpaceXS btn_box-color">
														<a href="javascript:deleteform.submit()" class="focus" tabindex="1">削除</a>
														</p>
													</form>
												</p>
											</div>
										</td>
									</tr>
								@endforeach	
							@endif
						@endif
					</tbody>
				</table>
			<!--</div>--><!-- / block_inner_dataTable -->
		</div>
	</div>
</div><!-- / CONTENTS -->
</section><!-- / SECTION -->
</div><!-- / B-CONTENTS -->
@endsection