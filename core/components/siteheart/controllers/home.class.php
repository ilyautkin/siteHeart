<?php
/**
 * The home manager controller for siteHeart.
 *
 */
class siteHeartHomeManagerController extends siteHeartMainController {
	/* @var siteHeart $siteHeart */
	public $siteHeart;


	/**
	 * @param array $scriptProperties
	 */
	public function process(array $scriptProperties = array()) {
	}


	/**
	 * @return null|string
	 */
	public function getPageTitle() {
		return $this->modx->lexicon('siteheart');
	}


	/**
	 * @return void
	 */
	public function loadCustomCssJs() {
		$this->addJavascript($this->siteHeart->config['jsUrl'] . 'mgr/widgets/items.grid.js');
		$this->addJavascript($this->siteHeart->config['jsUrl'] . 'mgr/widgets/home.panel.js');
		$this->addJavascript($this->siteHeart->config['jsUrl'] . 'mgr/sections/home.js');
		$this->addHtml('<script type="text/javascript">
		Ext.onReady(function() {
			MODx.load({ xtype: "siteheart-page-home"});
		});
		</script>');
	}


	/**
	 * @return string
	 */
	public function getTemplateFile() {
		return $this->siteHeart->config['templatesPath'] . 'home.tpl';
	}
}