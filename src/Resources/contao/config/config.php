<?php
/**
 *  Copyright Information
 *  @copyright: 2019 agentur fipps e.K.
 *  @author   : Arne Borchert <arne.borchert@fipps.de>
 *  @license  : LGPL 3.0+
 */

$GLOBALS['TinyMCE']['menu']['insert']['Insert'] = 'hr | '. $GLOBALS['TinyMCE']['menu']['insert']['Insert'];
$GLOBALS['TinyMCE']['toolbar'] = str_replace('indent |', 'indent | hr |', $GLOBALS['TinyMCE']['toolbar']);
$GLOBALS['TinyMCE']['external'][] = array('hr'=> "/bundles/fippstinymcehr/plugin_de.js");