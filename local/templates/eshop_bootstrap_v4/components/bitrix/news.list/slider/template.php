<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}
?>
<div class="slider">
    <ul>
        <? foreach ($arResult["ITEMS"] as $arItem): ?>
            <? $arProperty = $arItem["DISPLAY_PROPERTIES"]['VIDNO_NOWOST']['ID']; ?>
            <? if ($arProperty > 1): ?>
                <li>
                    <img src="<?= $arItem['PREVIEW_PICTURE']['SRC'] ?>" class="card-img-top"/>
                    <a href="<?= $arItem["DETAIL_PAGE_URL"] ?>"><b><?= $arItem["NAME"] ?></b></a><br/>
                    <?= $arItem["PREVIEW_TEXT"]; ?>
                </li>
            <? endif; ?>
        <? endforeach; ?>
    </ul>
</div>
<script type="text/javascript" src="local/templates/eshop_bootstrap_v4/components/bitrix/news.list/slider/slider.js"
        async></script>