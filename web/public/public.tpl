<!doctype html>
<html>
<head>
    <title>{$SiteTitle}</title>
    <link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.17/themes/sunny/jquery-ui.css" />
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.18/jquery-ui.min.js"></script>
    {if $CssFile}
    	<link rel="stylesheet" href="{$CssFile}" />
    {/if}
	{if $JsFile}
    	<script type="text/javascript" src="{$JsFile}"></script>
    {/if}

</head>
<body>
    
<div id="header">
        <a href="{$URL}">Index</a>
        <a href="{$URL}login">Login</a>
        <a href="{$URL}45">error</a>
</div>
    
<div id="content">
    {include file = $Content}
</div>

<div id="footer">
    (C) Footer
</div>

</body>
</html>