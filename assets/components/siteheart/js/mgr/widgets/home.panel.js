siteHeart.panel.Home = function(config) {
	config = config || {};
	Ext.apply(config,{
		border: false
		,baseCls: 'modx-formpanel'
		,items: [{
			html: '<h2>'+_('siteheart')+'</h2>'
			,border: false
			,cls: 'modx-page-header container'
		},{
			xtype: 'modx-tabs'
			,bodyStyle: 'padding: 10px'
			,defaults: { border: false ,autoHeight: true }
			,border: true
			,activeItem: 0
			,hideMode: 'offsets'
			,items: [{
				title: _('siteheart_items')
				,items: [{
					html: _('siteheart_intro_msg')
					,border: false
					,bodyCssClass: 'panel-desc'
					,bodyStyle: 'margin-bottom: 10px'
				},{
					xtype: 'siteheart-grid-items'
					,preventRender: true
				}]
			}]
		}]
	});
	siteHeart.panel.Home.superclass.constructor.call(this,config);
};
Ext.extend(siteHeart.panel.Home,MODx.Panel);
Ext.reg('siteheart-panel-home',siteHeart.panel.Home);
