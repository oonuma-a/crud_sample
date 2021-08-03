{if $is_ie}
<meta http-equiv="X-UA-Compatible" content="IE=edge">
{/if}
<meta name="viewport" content="width=1260">
<meta name = "format-detection" content = "telephone=no">
<meta name="apple-mobile-web-app-title" content="Ken Order System">
{if !empty($head_keywords)}
<meta name="keywords" content="{$head_keywords},Ken Order System">
{/if}
{if !empty($description)}
<meta name="description" content="{$description}">
{/if}
{if empty($head_title)}
<meta property="og:title" content="Ken Order System">
<meta property="og:type" content="website">
{else}
<meta property="og:title" content="{$head_title} | Ken Order System">
<meta property="og:type" content="article">
{/if}
{if !empty($description)}
<meta property="og:description" content="{$description}">
{/if}
<meta property="og:site_name" content="Ken Order System">
<meta property="og:locale" content="ja_JP">
{if empty($head_title)}
<title>Ken Order System</title>
{else}
<title>{$head_title} | Ken Order System</title>
{/if}
{*
<!-- <meta property="og:image" content="{$base_url}img/kencs.png"> -->
<!-- <link rel="icon" href="{$base_url}favicon.ico"> -->
<!-- <link rel="apple-touch-icon" href="/img/apple-touch-icon.png"> -->
*}
{if !empty($canonical)}
<link rel="canonical" href="{$canonical}">
{/if}
{if !empty($page_css1)}
<link rel="stylesheet" href="{$base_url}css/{$page_css1}">
{/if}
{if !empty($page_css2)}
<link rel="stylesheet" href="{$base_url}css/{$page_css2}">
{/if}
<link rel="stylesheet" href="{$base_url}css/style.css{* ?ver={$smarty.now|date_format:'%H%M%S'} *}" media="all">
{if !empty($page_css3)}
<link rel="stylesheet" href="{$base_url}css/{$page_css3}">
{/if}
{if !empty($page_css4)}
<link rel="stylesheet" href="{$base_url}css/{$page_css4}">
{/if}
<script src="{$base_url}js/plugins/plugins_pc.js"></script>
{if !empty($js_file1)}
<script src="{$base_url}js/{$js_file1}"></script>
{/if}
{if !empty($js_file2)}
<script src="{$base_url}js/{$js_file2}"></script>
{/if}
{if !empty($js_file3)}
<script src="{$base_url}js/{$js_file3}"></script>
{/if}
{if !empty($js_file4)}
<script src="{$base_url}js/{$js_file4}"></script>
{/if}
{if ($is_ie6 || $is_ie7 || $is_ie8)}
<link rel="stylesheet" href="{$base_url}css/ie.css" media="all">
<script src="{$base_url}js/plugins/ie/html5shiv-printshiv.js"></script>
<script src="{$base_url}js/plugins/ie/css3-mediaqueries.js"></script>
{/if}
<script src="{$base_url}js/script_pc.js{* ?ver={$smarty.now|date_format:'%H%M%S'} *}"></script>