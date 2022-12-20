<div class="card mb-2">
	<div class="card-body p-0">
 <a class="twitter-timeline" href="https://twitter.com/1C_Bitrix" data-widget-id="588359711570952192"></a>
		<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
	</div>
</div>
 <br>
<? $APPLICATION->IncludeComponent(
    "bitrix:form",
    "",
    array(
        "AJAX_MODE" => "Y",
        "AJAX_OPTION_ADDITIONAL" => "",
        "AJAX_OPTION_HISTORY" => "N",
        "AJAX_OPTION_JUMP" => "N",
        "AJAX_OPTION_STYLE" => "Y",
        "CACHE_TIME" => "3600",
        "CACHE_TYPE" => "N",
        "CHAIN_ITEM_LINK" => "",
        "CHAIN_ITEM_TEXT" => "",
        "EDIT_ADDITIONAL" => "N",
        "EDIT_STATUS" => "Y",
        "IGNORE_CUSTOM_TEMPLATE" => "N",
        "NAME_TEMPLATE" => "",
        "NOT_SHOW_FILTER" => array("", ""),
        "NOT_SHOW_TABLE" => array("", ""),
        "RESULT_ID" => $_REQUEST[RESULT_ID],
        "SEF_MODE" => "N",
        "SHOW_ADDITIONAL" => "N",
        "SHOW_ANSWER_VALUE" => "N",
        "SHOW_EDIT_PAGE" => "Y",
        "SHOW_LIST_PAGE" => "Y",
        "SHOW_STATUS" => "Y",
        "SHOW_VIEW_PAGE" => "Y",
        "START_PAGE" => "new",
        "SUCCESS_URL" => "",
        "USE_EXTENDED_ERRORS" => "Y",
        "VARIABLE_ALIASES" => array("action" => "action"),
        "WEB_FORM_ID" => "1"
    )
); ?>