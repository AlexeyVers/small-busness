<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}
?>
<div class="col">
    <div class="row">
        <? foreach ($arResult['ITEMS'] as $arItem): ?>
            <? $arProps = $arItem['DISPLAY_PROPERTIES'] ?>
            <div class="card normal-width">
                <? if ($arItem['PREVIEW_PICTURE']): ?>
                    <img src="<?= $arItem['PREVIEW_PICTURE']['SRC'] ?>" class="card-img-top"/>
                <? endif; ?>
                <div class="card-body">
                    <div class="card-title">
                        <? if ($arItem['DETAIL_PAGE_URL']): ?>
                            <a href="<?= $arItem['DETAIL_PAGE_URL'] ?>"><?= $arItem['NAME'] ?></a>
                        <? else: ?>
                            <div><?= $arItem['NAME'] ?></div>
                        <? endif; ?>
                    </div>
                    <? if ($arItem['PREVIEW_TEXT']): ?>
                        <p class="card-text"><?= $arItem['PREVIEW_TEXT']; ?></p>
                    <? endif; ?>
                    <? if ($arProps['DATE_CREATE']): ?>
                        <div class="news-list-view news-list-post-params">
                            <span class="news-list-param"><?= $arProps['DATE_CREATE']['NAME'] ?>:</span>
                            <span class="news-list-value"><?= $arProps['DATE_CREATE']['VALUE'] ?></span>
                        </div>
                    <? endif; ?>
                    <div class="news-list-more">
                        <? if ($arItem['DETAIL_PAGE_URL']): ?>
                            <a class="btn btn-primary btn-sm" href="<?= $arItem['DETAIL_PAGE_URL'] ?>"><?= GetMessage(
                                    'CT_BNL_GOTO_DETAIL'
                                ) ?></a>
                        <? else: ?>
                            <div class="btn btn-primary btn-sm"><?= GetMessage(
                                    'CT_BNL_GOTO_DETAIL'
                                ) ?></div>
                        <? endif; ?>
                    </div>
                </div>
            </div>
        <? endforeach; ?>
    </div>
    <?= $arResult['NAV_STRING'] ?>
</div>