<?php
/**
 * Remove an Item
 */
class siteHeartItemRemoveProcessor extends modObjectRemoveProcessor {
	public $checkRemovePermission = true;
	public $objectType = 'siteHeartItem';
	public $classKey = 'siteHeartItem';
	public $languageTopics = array('siteheart');

}

return 'siteHeartItemRemoveProcessor';