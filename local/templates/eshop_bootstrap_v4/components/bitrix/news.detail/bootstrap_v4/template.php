<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}
?>
<div class="news-detail">
    <?= $arResult['DETAIL_TEXT']; ?>
    <? $arProps = $arResult['DISPLAY_PROPERTIES'] ?>
    <? if (arProps['DATE_CREATE']['VALUE']): ?>
        <div class="news-list-view news-list-post-params">
            <span class="news-list-param"><?= $arProps['DATE_CREATE']['NAME'] ?>:</span>
            <span class="news-list-value"><?= $arProps['DATE_CREATE']['VALUE'] ?></span>
        </div>
    <? endif; ?>
</div>
<div class="right">
    <script src="https://yastatic.net/share2/share.js" defer></script>
    <div class="ya-share2" data-curtain data-shape="round" data-services="messenger,vkontakte,odnoklassniki"></div>
</div>