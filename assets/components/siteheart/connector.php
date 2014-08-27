<?php

require_once dirname(dirname(dirname(dirname(__FILE__)))) . '/config.core.php';
require_once MODX_CORE_PATH . 'config/' . MODX_CONFIG_KEY . '.inc.php';
require_once MODX_CONNECTORS_PATH . 'index.php';

$corePath = $modx->getOption('siteheart_core_path', null, $modx->getOption('core_path') . 'components/siteheart/');
require_once $corePath . 'model/siteheart/siteheart.class.php';
$modx->siteheart = new siteHeart($modx);

$modx->lexicon->load('siteheart:default');

/* handle request */
$path = $modx->getOption('processorsPath', $modx->siteheart->config, $corePath . 'processors/');
$modx->request->handleRequest(array(
	'processors_path' => $path,
	'location' => '',
));