@extends('layouts.layout')
</head>
<body{if !empty($pageID)} id="{$pageID}"{/if}>
<div class="l-wrapper"><!-- L-WRAPPER  -->
<div id="js-modalItem">
</div>
@section('content')
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
                    <a href="{{route('order.create')}}" class="focus" tabindex="1"><i class="btn_icon btn_icon-2"></i>電話注文登録</a>
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
    <form method="get" action="{{route('order.index')}}" name="searchForm">
        @csrf
        <input type="hidden" name="searchOrderFlg" value="1">
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
                                <input type="text" name="start_day" value="" >～
                                <input type="text" name="end_day" value="" >
                            </td>
                            <th class="table_title table_title-positionCenter">注文番号</th>
                            <td class="table_data">
                                <input type="tel" name="searchOrderNum" value="" class="form" placeholder="ここに入力" autocomplete="off" tabindex="1">
                            </td>
                            <th class="table_title table_title-positionCenter">店舗番号</th>
                            <td class="table_data">
                                <input type="tel" name="searchShopId" value="" class="form" placeholder="ここに入力" autocomplete="off" tabindex="1">
                            </td>
                            <th class="table_title table_title-positionCenter">配送地域</th>
                            <td class="table_data">
                                <select name="searchArea" class="form" tabindex="1">
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
                        <a href="javascript:searchForm.submit()" class="focus js-btnSearch" tabindex="1"><i class="btn_icon btn_icon-3"></i>検索</a>
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
					@if(isset($searchList))
						{{$searchList->appends(request()->input())->links()}}
					@else
						{{$orderDatas->links()}}
					@endif
					<div class="block_inner_page">
						<form action="{{route('order.index')}}" method="get">
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
						@if(isset($searchList))
							@foreach($searchList as $data)
								<tr class="table_status table_status-lineColor table_status-color">
								<form action=""></form>
									<input type="hidden" name="updateFlg" value="1">
									<td class="table_data"><span class="table_data_keep">{{$data->inserted_at}}</span></td>
									<td class="table_data">{{$data->order_number}}</td>
									<td class="table_data table_data-positionLeft">
									<form action="{{route('client.edit')}}" method="post" name="updateForm">
										<input type="hidden" name="editId" value="{{$data->id}}">
											@csrf
											<a href="javascript:updateForm.submit()" class="focus" tabindex="1">{{$data->shop_id}}</a>
										</td>
									</form>
									<td class="table_data">{{$data->tel1}}-{{$data->tel2}}-{{$data->tel3}}</td>
									<td class="table_data">({{$data->area1}}({{$data->area1}}))</td>
									<td class="table_data">{{$data->item1}}番 <span class="table_data_keep">枚</span></td>
									<td class="table_data">{{$data->item2}}番 <span class="table_data_keep">枚</span></td>
									<td class="table_data">{{$data->item3}}番 <span class="table_data_keep">枚</span></td>
									<td class="table_data">{{$data->item4}}番 <span class="table_data_keep">枚</span></td>
									<td class="table_data table_data-positionLeft">{{$data->Notices}}</td>
									<td class="table_data table_data-positionLeft">{{$data->remarks}}</td>
									<td class="table_data">{{$data->user_id}}</td>
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
												<form action="{{route('client.edit')}}" method="post" name="updateForm">
														@csrf
														<input type="hidden" name="editId" value="{{$data->id}}">		
														<td class="table_data">
															<a href="javascript:updateForm.submit()" class="focus" tabindex="1">{{$data->shop_id}}</a>
															<input type="submit" value="{{$data->shop_id}}">
														</td>
												</form>
											</p>
										</div>
									</td>
								</tr>
							@endforeach
						@else
							@foreach($orderDatas as $data)
								<tr class="table_status table_status-lineColor table_status-color">
									<td class="table_data"><span class="table_data_keep">{{$data->inserted_at}}</span></td>
									<td class="table_data">{{$data->order_number}}</td>	
									<td class="table_data">
										<form action="{{route('client.edit')}}" method="post" name="updateForm">
											@csrf
											<input type="hidden" name="editId" value="{{$data->id}}">
											<input type="hidden" name="updateFlg" value="1">
												<a href="javascript:updateForm.submit()" class="focus" tabindex="1">{{$data->shop_id}}</a>
											<input type="submit" value="{{$data->shop_id}}">
										</form>
									</td>
									<td class="table_data">{{$data->tel1}}-{{$data->tel2}}-{{$data->tel3}}</td>
									<td class="table_data">({{$data->area1}}({{$data->area1}}))</td>
									<td class="table_data">{{$data->item1}}番 <span class="table_data_keep">枚</span></td>
									<td class="table_data">{{$data->item2}}番 <span class="table_data_keep">枚</span></td>
									<td class="table_data">{{$data->item3}}番 <span class="table_data_keep">枚</span></td>
									<td class="table_data">{{$data->item4}}番 <span class="table_data_keep">枚</span></td>
									<td class="table_data table_data-positionLeft">{{$data->Notices}}</td>
									<td class="table_data table_data-positionLeft">{{$data->remarks}}</td>
									<td class="table_data">{{$data->user_id}}</td>
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
												<form action="{{route('order.index')}}" name="deleteForm1" method="post">
													@csrf
													<input type="hidden" name="deleteFlg" value="1">
													<input type="hidden" name="deleteId" value="{{$data->id}}">
														<a href="javascript:deleteForm1.submit()" class="focus" tabindex="1">取消</a>
													<input type="submit" value="取消">
												</form>
											</p>
										</div>
									</td>
								</tr>
							@endforeach
						@endif
					</tbody>
				</table>
			<!-- </div> --><!-- / block_inner_dataTable -->
		</div>
	</div>
</div><!-- / CONTENTS -->
</section><!-- / SECTION -->
</div><!-- / B-CONTENTS -->
@endsection