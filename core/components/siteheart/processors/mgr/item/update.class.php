<?php
/**
 * Update an Item
 */
class siteHeartItemUpdateProcessor extends modObjectUpdateProcessor {
	public $objectType = 'siteHeartItem';
	public $classKey = 'siteHeartItem';
	public $languageTopics = array('siteheart');
	public $permission = 'edit_document';
}

return 'siteHeartItemUpdateProcessor';
