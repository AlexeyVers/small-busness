<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}
$this->addExternalJS("https://code.jquery.com/jquery-3.6.2.slim.min.js");
?>
<div class="col">
    <div class="slider row">
        <ul>
            <? foreach ($arResult['ITEMS'] as $arItem): ?>
                <li>
                    <div class="card">
                        <img src="<?= $arItem['PREVIEW_PICTURE']['SRC'] ?>" class="card-img-top"/>
                        <div class="card-body">
                            <div class="card-title"><a
                                        href="<?= $arItem['DETAIL_PAGE_URL'] ?>"><?= $arItem['NAME'] ?></a></div>
                            <p class="card-text"><?= $arItem['PREVIEW_TEXT']; ?></p>
                            <div class="news-list-more">
                                <a class="btn btn-primary btn-sm"
                                   href="<?= $arItem['DETAIL_PAGE_URL'] ?>"><?= GetMessage(
                                        'CT_BNL_GOTO_DETAIL'
                                    ) ?></a>
                            </div>
                        </div>
                    </div>
                </li>
            <? endforeach; ?>
        </ul>
    </div>
    <?= $arResult['NAV_STRING'] ?>
</div>
<script type="text/javascript" src="local/templates/eshop_bootstrap_v4/components/bitrix/news.list/slider/slider.js" async></script>