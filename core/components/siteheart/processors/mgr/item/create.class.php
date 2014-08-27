<?php
/**
 * Create an Item
 */
class siteHeartItemCreateProcessor extends modObjectCreateProcessor {
	public $objectType = 'siteHeartItem';
	public $classKey = 'siteHeartItem';
	public $languageTopics = array('siteheart');
	public $permission = 'new_document';


	/**
	 * @return bool
	 */
	public function beforeSet() {
		$alreadyExists = $this->modx->getObject('siteHeartItem', array(
			'name' => $this->getProperty('name'),
		));
		if ($alreadyExists) {
			$this->modx->error->addField('name', $this->modx->lexicon('siteheart_item_err_ae'));
		}

		return !$this->hasErrors();
	}

}

return 'siteHeartItemCreateProcessor';