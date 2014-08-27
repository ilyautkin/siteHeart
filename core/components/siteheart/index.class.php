<?php

/**
 * Class siteHeartMainController
 */
abstract class siteHeartMainController extends modExtraManagerController {
	/** @var siteHeart $siteHeart */
	public $siteHeart;


	/**
	 * @return void
	 */
	public function initialize() {
		$corePath = $this->modx->getOption('siteheart_core_path', null, $this->modx->getOption('core_path') . 'components/siteheart/');
		require_once $corePath . 'model/siteheart/siteheart.class.php';

		$this->siteHeart = new siteHeart($this->modx);

		$this->addCss($this->siteHeart->config['cssUrl'] . 'mgr/main.css');
		$this->addJavascript($this->siteHeart->config['jsUrl'] . 'mgr/siteheart.js');
		$this->addHtml('<script type="text/javascript">
		Ext.onReady(function() {
			siteHeart.config = ' . $this->modx->toJSON($this->siteHeart->config) . ';
			siteHeart.config.connector_url = "' . $this->siteHeart->config['connectorUrl'] . '";
		});
		</script>');

		parent::initialize();
	}


	/**
	 * @return array
	 */
	public function getLanguageTopics() {
		return array('siteheart:default');
	}


	/**
	 * @return bool
	 */
	public function checkPermissions() {
		return true;
	}
}


/**
 * Class IndexManagerController
 */
class IndexManagerController extends siteHeartMainController {

	/**
	 * @return string
	 */
	public static function getDefaultController() {
		return 'home';
	}
}