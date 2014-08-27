siteHeart.page.Home = function(config) {
	config = config || {};
	Ext.applyIf(config,{
		components: [{
			xtype: 'siteheart-panel-home'
			,renderTo: 'siteheart-panel-home-div'
		}]
	}); 
	siteHeart.page.Home.superclass.constructor.call(this,config);
};
Ext.extend(siteHeart.page.Home,MODx.Component);
Ext.reg('siteheart-page-home',siteHeart.page.Home);