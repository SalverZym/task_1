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
  <div id="barba-wrapper">
    <?php foreach($arResult["ITEMS"] as $aritem):?>
    <div class="article-list">
        <a class="article-item article-list__item" href="<?= isset($aritem["DETAIL_PAGE_URL"])? $aritem["DETAIL_PAGE_URL"] : '' ;?>" data-anim="anim-3">
            <div class="article-item__background">
              <?php if(!empty($aritem['PREVIEW_PICTURE']['SRC'])):?>
                <img src="<?= $aritem['PREVIEW_PICTURE']['SRC']?>"
                                                       data-src="xxxHTMLLINKxxx0.39186223192351520.41491856731872767xxx"
                                                       alt=""/></div>
              <?php endif;?>
            <div class="article-item__wrapper">
                <div class="article-item__title"><?=isset($aritem["NAME"])? $aritem["NAME"] : '' ;?></div>
                <div class="article-item__content"><?=isset($aritem["PREVIEW_TEXT"])? $aritem["PREVIEW_TEXT"] : '' ;?>
                </div>
            </div>
        </a>
    <?php endforeach;?>
    </div>
  </div>
