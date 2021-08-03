<nav class="l-side">
	<div class="side">
		<ul class="js-accordion sideBox {if !empty($sideNav)}sideNav-{$sideNav}{/if}">
			<li class="sideBox_list">
				<a href="{$base_url}order/" class="sideBox_listAnchor1" tabindex="-1">
					<div class="sideBox_listIcon-1"></div><p><span>注文管理</span><i class="sideArrow1"></i></p>
				</a>
			</li>
<!-- 			<li class="sideBox_list">
				<a href="{$base_url}history/" class="sideBox_listAnchor2" tabindex="-1">
					<div class="sideBox_listIcon-2"></div><p><span>発送履歴</span><i class="sideArrow1"></i></p>
				</a>
			</li> -->
			<li class="sideBox_list">
				<a href="{$base_url}client/" class="sideBox_listAnchor3" tabindex="-1">
					<div class="sideBox_listIcon-3"></div><p><span>店舗管理</span><i class="sideArrow1"></i></p>
				</a>
			</li>
<!-- 			<li class="sideBox_list">
				<a href="{$base_url}stock/" class="sideBox_listAnchor4" tabindex="-1">
					<div class="sideBox_listIcon-4"></div><p><span>在庫管理</span><i class="sideArrow1"></i></p>
				</a>
			</li> -->
			<li class="sideBox_list">
				<a href="{$base_url}setting/" class="sideBox_listAnchor5" tabindex="-1">
					<div class="sideBox_listIcon-5"></div><p><span>設定</span><i class="sideArrow1"></i></p>
				</a>
			</li>
{* 開くボタンを使用するとき
<!-- 			<li class="sideBox_list">
				<a href="#" class="js-accordion_btn sideBox_listAnchor2" tabindex="-1">
					<div class="sideBox_listIcon-2"></div><p><span>〇〇</span><i class="sideArrow"></i></p>
				</a>
				<div class="js-openMenu sideBox_accordionMenu">
					<ul>
						<li>
							<a href="{$base_url}stock/" target="_blank" tabindex="-1">テキスト
								{if !empty($pageID) && $pageID == 'range-search'}<img src="{$base_url}img/side_mark.png" alt="">{/if}</a>
						</li>
					</ul>
				</div>
			</li>
			<li class="sideBox_list">
				<a href="#" class="js-accordion_btn sideBox_listAnchor3" tabindex="-1">
					<div class="sideBox_listIcon-3"></div><p><span>〇〇</span><i class="sideArrow"></i></p>
				</a>
				<div class="js-openMenu sideBox_accordionMenu">
					<ul>
						<li>
							<a href="{$base_url}stock/" target="_blank" tabindex="-1">新規顧客登録
							{if $pageID|default:'' == 'member-regist'}<img src="{$base_url}img/side_mark.png" alt="">{/if}</a>
						</li>
					</ul>
				</div>
			</li> -->
*}
		</ul>
	</div>
</nav>