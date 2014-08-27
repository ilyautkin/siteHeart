<?php

switch ($modx->event->name) {

	case 'OnManagerPageInit':
		$cssFile = MODX_ASSETS_URL.'components/siteheart/css/mgr/main.css';
		$modx->regClientCSS($cssFile);
		break;

}