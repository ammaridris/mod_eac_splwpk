<?php
/**
 * @package	mod_eac_splwpk
 * @author	Ammar Idris
 * @copyright	Copyright (C) 2021 Ammar Idris. All rights reserved.
 * @license	GNU General Public License version 2 or later.
 */
defined('_JEXEC') or die;

if($timestamp_papar) {
  $nameofcomponent = JRequest::getVar('option');
  $viewofcomponent = JRequest::getVar('view');
  
  if($nameofcomponent=="com_content" && $viewofcomponent=="article" ) {
    $idofarticle = JRequest::getInt('id');
    $model = JModelLegacy::getInstance('Article', 'ContentModel');
    $article = $model->getItem($idofarticle);
    $date = new JDate($article->modified);
    $timestamp = $date->format('Y-m-d H:i:s'); //Date Daripada Article
  }
  
  if(($txt_timestamp!='0000-00-00 00:00:00') && ($txt_timestamp!='')) {
    $timestamp = $txt_timestamp; //Date Daripada Module Input
  }
}
?>

<?php if(($tagging!='splwpk-search-function') && ($tagging!='seo-h1')) { ?>
  <i class="hdn-splw" <?php echo $tagging; ?>="<?php echo $tagging; ?>"<?php if($timestamp_papar) { echo " timestamp=".'"'.$timestamp.'"'; } ?>></i>
<?php } ?>

<?php if($tagging=='splwpk-search-function') { ?>
  <form class="hdn-splw" <?php echo $tagging.'="'.$tagging.'"'; ?>></form>
<?php } ?>

<?php if($tagging=='seo-h1') { ?>
  <h1 class="hdn-splw"><?php echo $seo_h1_text; ?></h1>
<?php } ?>

<?php if($tagging=='splwpk-open-data') { ?>
  <a class="hdn-splw" href="<?php echo $open_data_url; ?>" target="_blank" splwpk-open-data="splwpk-open-data" opendata="opendata" dataterbuka="dataterbuka"><?php echo $open_data_text; ?></a>
<?php } ?>
