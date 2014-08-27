var siteHeart = function(config) {
	config = config || {};
	siteHeart.superclass.constructor.call(this,config);
};
Ext.extend(siteHeart,Ext.Component,{
	page:{},window:{},grid:{},tree:{},panel:{},combo:{},config: {},view: {}
});
Ext.reg('siteheart',siteHeart);

siteHeart = new siteHeart();