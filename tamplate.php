<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>

<?if(!empty($arResult["ITEMS"])):?>

	<div class="news-list">
		<?php foreach($arResult["ITEMS"] as $aritem):?>
		<p class="news-item" id="<?=$this->GetEditAreaId($arItem['ID']);?>" title="Двойной щелчок - Изменить тему">
			<a href="<?=$aritem["DETAIL_PAGE_URL"]?>">
				<?php if(!empty($aritem['PREVIEW_PICTURE']['SRC'])):?>
				<?php $name = isset($aritem["NAME"])? $aritem["NAME"] : '' ;?>
				<img class="preview_picture" border="0" src="<?= $aritem['PREVIEW_PICTURE']['SRC']?>" width="298" height="181" alt="<?= $name;?>" title="<?= $name;?>" style="float:left">
				<?endif;?>
				</a>
			<a href="<?= isset($aritem["DETAIL_PAGE_URL"])? $aritem["DETAIL_PAGE_URL"] : '' ;?>"><b><?= $name;?></b></a><br>
				</p><div style="clear:both"></div>
							<p></p>
		<?php endforeach;?>
	<br>
	</div>
<?endif?>
