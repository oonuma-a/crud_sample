!function(o){var t=function(t,e){this.element=o(t),this.options=o.extend({},o.fn.smTheadfixed.defaults,e),this.window=o(window),this.document=o(document),this.objs={table:this.element,head:this.element.find("thead"),head_clone:this.element.find("thead").clone(),head_cols:[],body:this.element.find("tbody"),body_cols:o(this.element.find("tr:eq("+this.options.tbody_row+")")).children("th,td")},this.points={scroll:{p:0,l:0},table:{p:0,l:0},head:{p:0,l:0},cols:[]};var i=this;i.initial(),o(window).resize(function(){i.setPosition()}),o(window).scroll(function(){i.setPosition()}),o(function(){var t=o.cookie("hp_layout")||{};o.isEmptyObject(t.side)||setTimeout(function(){i.setPosition()},200),o(".header_left_menuBtn").click(function(){setTimeout(function(){i.setPosition()},245)})})};t.prototype={initial:function(){this.setPosition()},setFixed:function(t){var e=this;t&&(e.objs.table.css("position","relative"),e.objs.table.append(e.objs.head_clone),e.objs.head_clone.css({display:"block",position:"absolute",left:e.options.border_left+"px"}),e.objs.head_cols=o(e.objs.head_clone.find("tr:eq("+this.options.thead_row+")")).children("th,td"));var i=e.points.scroll.l-(e.points.table.op-e.options.border_top),s=e.points.scroll.l-(e.points.table.op+e.points.table.l-e.points.head.l),n=e.options.border_top;i>=0&&s<=0&&(n=i-e.options.border_top),s>0&&(n=e.points.table.l-e.points.head.l),e.objs.head_clone.css("top",n+"px");var l=0;e.objs.head_cols.each(function(){o(this).css("width",e.points.cols[l].l+"px"),l++})},setPosition:function(){var t=this,e=!t.points.cols.length;t.points.scroll={p:0,l:t.window.scrollTop()},t.points.table={p:t.objs.table.position().top,op:t.objs.table.offset().top,l:t.objs.table.height()},t.points.head={p:t.objs.head.position().top,op:t.objs.head.offset().top,l:t.objs.head.height()};var i=0;t.objs.body_cols.each(function(){var e=o(this);t.points.cols[i]={p:0,l:e.width()},i++}),t.setFixed(e)}},o.fn.smTheadfixed=function(o){return this.each(function(){new t(this,o)})},o.fn.smTheadfixed.defaults={border_top:0,border_left:0,thead_row:0,tbody_row:0}}(jQuery);