<?php
/**
 * @package	mod_eac_splwpk
 * @author	Ammar Idris
 * @copyright	Copyright (C) 2021 Ammar Idris. All rights reserved.
 * @license	GNU General Public License version 2 or later.
 */

defined('_JEXEC') or die;

$document = JFactory::getDocument();
$document->addStyleSheet( JUri::root() . 'modules/mod_eac_splwpk/style.css' );

$tagging= htmlspecialchars($params->get('tagging'));
$timestamp_papar = htmlspecialchars($params->get('timestamp_papar'));
$seo_h1_text = htmlspecialchars($params->get('seo_h1_text'));
$open_data_text = htmlspecialchars($params->get('open_data_text'));
$open_data_url = htmlspecialchars($params->get('open_data_url'));
$txt_timestamp = htmlspecialchars($params->get('txt_timestamp'));

$module->showtitle = 0;

require JModuleHelper::getLayoutPath('mod_eac_splwpk', $params->get('layout', 'default'));
?>