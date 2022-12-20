<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

$this->addExternalJS("https://cdn.jsdelivr.net/npm/jquery@3.2.1/dist/jquery.min.js");
$this->addExternalJS("https://cdn.jsdelivr.net/npm/jquery.maskedinput@1.4.1/src/jquery.maskedinput.js");

?>

<?if ($arResult["isFormErrors"] == "Y"):?><?=$arResult["FORM_ERRORS_TEXT"];?><?endif;?>

<?=$arResult["FORM_NOTE"]?>

<?if ($arResult["isFormNote"] != "Y")
{
?>
<?=$arResult["FORM_HEADER"]?>

<table>
<?
if ($arResult["isFormDescription"] == "Y" || $arResult["isFormTitle"] == "Y" || $arResult["isFormImage"] == "Y")
{
?>
	<tr>
		<td><?
/***********************************************************************************
					form header
***********************************************************************************/
if ($arResult["isFormTitle"])
{
?>
	<h3><?=$arResult["FORM_TITLE"]?></h3>
<?
} //endif ;

	if ($arResult["isFormImage"] == "Y")
	{
	?>
	<a href="<?=$arResult["FORM_IMAGE"]["URL"]?>" target="_blank" alt="<?=GetMessage("FORM_ENLARGE")?>"><img src="<?=$arResult["FORM_IMAGE"]["URL"]?>" <?if($arResult["FORM_IMAGE"]["WIDTH"] > 300):?>width="300"<?elseif($arResult["FORM_IMAGE"]["HEIGHT"] > 200):?>height="200"<?else:?><?=$arResult["FORM_IMAGE"]["ATTR"]?><?endif;?> hspace="3" vscape="3" border="0" /></a>
	<?//=$arResult["FORM_IMAGE"]["HTML_CODE"]?>
	<?
	} //endif
	?>

			<p><?=$arResult["FORM_DESCRIPTION"]?></p>
		</td>
	</tr>
	<?
} // endif
	?>
</table>
<br />
<?
/***********************************************************************************
						form questions
***********************************************************************************/
?>



<div class="center">
    <label for="name">Имя</label>
    <input id="name" type="text" minlength="3" maxlength="20" name="form_text_10" placeholder="Имя" required>
    <label for="tel" type="text">Номер</label>
    <input type="text" id="tel" minlength="10" placeholder="Телефон" class="phone_mask" name="form_text_11">
    <label for="email">Email</label>
    <input id="email" type="email" name="form_email_12" placeholder="email@ya.eu" required>
    <label for="story">Комментарий:</label>
    <textarea id="story" rows="5" minlength="20" maxlength="150" cols="33" name="form_textarea_13" placeholder="Комментарий" required></textarea>
    <div>
        <input <?=(intval($arResult["F_RIGHT"]) < 10 ? "disabled=\"disabled\"" : "");?> type="submit" name="web_form_submit" value="<?=htmlspecialcharsbx(trim($arResult["arForm"]["BUTTON"]) == '' ? GetMessage("FORM_ADD") : $arResult["arForm"]["BUTTON"]);?>" />
        <input type="reset" value="<?=GetMessage("FORM_RESET");?>" />
        <?if ($arResult["F_RIGHT"] >= 15):?>
            <input type="hidden" name="web_form_apply" value="Y" />
        <?endif;?>
    </div>
</div>

<?=$arResult["FORM_FOOTER"]?>
<?
} //endif (isFormNote)
?>
<script>
    $(".phone_mask").mask("+7(999)999-99-99");
</script>
