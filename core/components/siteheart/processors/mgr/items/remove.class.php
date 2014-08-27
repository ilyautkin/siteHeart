<?php
/**
 * Remove an Items
 */
class siteHeartItemsRemoveProcessor extends modProcessor {
    public $checkRemovePermission = true;
	public $objectType = 'siteHeartItem';
	public $classKey = 'siteHeartItem';
	public $languageTopics = array('siteheart');

	public function process() {

        foreach (explode(',',$this->getProperty('items')) as $id) {
            $item = $this->modx->getObject($this->classKey, $id);
            $item->remove();
        }
        
        return $this->success();

	}

}

return 'siteHeartItemsRemoveProcessor';