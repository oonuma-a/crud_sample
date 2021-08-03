<!-- <div class="loadPage"><img src="{$base_url}img/loading.gif" class="loadPage_img" alt=""></div> -->
<header class="l-header">
	<div class="header">
		<div class="header_left">
			<h1 class="header_left_logo"><a href="{$base_url}order/" tabindex="-1"><img src="{$base_url}img/system_logo.png" alt="Ken Order System"></a></h1>
			<div class="header_left_menuBtn"><img src="{$base_url}img/menu_left.png" alt=""></div>
		</div>
{if !empty($headerNav) && $headerNav == 'navMemberMenu'}
		<form name="" method="get" action="">{* action先 class="js-parentsForm"が付いている場合は指定URLにPOSTします *}
			<input type="hidden" name="hoge" value="000123456789">
			<ul class="header_block header_block-left">
				<li class="header_block_box">
					<div class="btn btn-header">
						<div class="btn_box btn_box-header btn_box-color4 btn_box-inline js-pulldown">
							<a href="javascript:void(0)" class="focus" tabindex="1" id="js-menu"><i class="btn_icon btn_icon-7"></i>メニュー</a>
							<ul class="btn_box_pulldownMenu js-pulldownChild">
								<li><a href="{$base_url}payment-search/" class="js-parentsForm js-move" target="_blank" id="first">入金充当</a></li>
								<li><a href="{$base_url}direct-search/" class="js-parentsForm js-move" target="_blank">直紹介者</a></li>
								<li><a href="{$base_url}above-search/" class="js-parentsForm js-move" target="_blank">上位検索</a></li>
								<li><a href="{$base_url}doc-deficiency/" class="js-parentsForm js-move" target="_blank">書類不備</a></li>	
								<li><a href="#" class="js-parentsForm js-move" target="_blank">組織図（前月）</a></li>
								<li><a href="#" class="js-parentsForm js-move" target="_blank">組織図（当月）</a></li>
								<li><a href="{$base_url}chart-search/" class="js-parentsForm js-move" target="_blank">組織図（縦型）</a></li>
								<li><a href="{$base_url}offerlist/" class="js-parentsForm js-move" target="_blank">種別変更</a></li>
								<li><a href="{$base_url}offerlist/" class="js-parentsForm js-move" target="_blank">登録者変更</a></li>
								<li><a href="{$base_url}offerlist/" class="js-parentsForm js-move" target="_blank">口座変更</a></li>
								<li><a href="{$base_url}offerlist/" class="js-parentsForm js-move" target="_blank">口座不備</a></li>
								<li><a href="{$base_url}offerlist/" class="js-parentsForm js-move" target="_blank">解約</a></li>
								<li><a href="{$base_url}status-change/" class="js-parentsForm js-move" target="_blank">ステータス変更</a></li>
							</ul>
						</div>
					</div>
				</li>
				<li class="header_block_box">
					<div class="btn btn-header">
						<p class="btn_box btn_box-header btn_box-color4 btn_box-inline">
							<a href="{$base_url}change-history-search/" class="focus js-parentsForm" target="_blank" tabindex="1"><i class="btn_icon btn_icon-6"></i>変更履歴</a>
						</p>
					</div>
				</li>
				<li class="header_block_box">
					<div class="btn btn-header">
						<p class="btn_box btn_box-header btn_box-color4 btn_box-inline">
							<a href="{$base_url}member_change/" class="focus js-parentsForm" tabindex="1"><i class="btn_icon btn_icon-4"></i>基本情報変更</a>
						</p>
					</div>
				</li>
				<li class="header_block_box">
					<div class="btn btn-header">
						<p class="btn_box btn_box-header btn_box-color4 btn_box-inline">
							<a href="{$base_url}search-history/" class="focus js-parentsForm" target="_blank" tabindex="1"><i class="btn_icon btn_icon-3"></i>検索履歴</a>
						</p>
					</div>
				</li>
				<li class="header_block_box">
					<div class="btn btn-header">
						<p class="btn_box btn_box-header btn_box-color4 btn_box-inline">
							<a href="" class="focus js-parentsForm" tabindex="1"><i class="btn_icon btn_icon-5"></i>マイページ</a>
						</p>
					</div>
				</li>
			</ul>
		</form>
{/if}
		<ul class="header_right">
			<li class="header_right_name">管理者<span>〇〇〇 〇〇〇</span>様</li>
			<li class="header_right_logout"><a href="{$base_url}admin/" tabindex="-1"><span></span>ログアウト</a></li>
		</ul>
	</div>
</header>