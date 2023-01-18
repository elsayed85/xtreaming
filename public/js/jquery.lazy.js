/*!
* jQuery & Zepto Lazy - v1.7.10
* http://jquery.eisbehr.de/lazy/
*
* Copyright 2012 - 2018, Daniel 'Eisbehr' Kern
*
* Dual licensed under the MIT and GPL-2.0 licenses:
* http://www.opensource.org/licenses/mit-license.php
* http://www.gnu.org/licenses/gpl-2.0.html
*
* $("img.lazy").lazy();
*/;(function(window,undefined){"use strict";var $=window.jQuery||window.Zepto,lazyInstanceId=0,windowLoaded=false;$.fn.Lazy=$.fn.lazy=function(settings){return new LazyPlugin(this,settings);};$.Lazy=$.lazy=function(names,elements,loader){if($.isFunction(elements)){loader=elements;elements=[];}
if(!$.isFunction(loader)){return;}
names=$.isArray(names)?names:[names];elements=$.isArray(elements)?elements:[elements];var config=LazyPlugin.prototype.config,forced=config._f||(config._f={});for(var i=0,l=names.length;i<l;i++){if(config[names[i]]===undefined||$.isFunction(config[names[i]])){config[names[i]]=loader;}}
for(var c=0,a=elements.length;c<a;c++){forced[elements[c]]=names[0];}};function _executeLazy(instance,config,items,events,namespace){var _awaitingAfterLoad=0,_actualWidth=-1,_actualHeight=-1,_isRetinaDisplay=false,_afterLoad='afterLoad',_load='load',_error='error',_img='img',_src='src',_srcset='srcset',_sizes='sizes',_backgroundImage='background-image';function _initialize(){_isRetinaDisplay=window.devicePixelRatio>1;items=_prepareItems(items);if(config.delay>=0){setTimeout(function(){_lazyLoadItems(true);},config.delay);}
if(config.delay<0||config.combined){events.e=_throttle(config.throttle,function(event){if(event.type==='resize'){_actualWidth=_actualHeight=-1;}
_lazyLoadItems(event.all);});events.a=function(additionalItems){additionalItems=_prepareItems(additionalItems);items.push.apply(items,additionalItems);};events.g=function(){return(items=$(items).filter(function(){return!$(this).data(config.loadedName);}));};events.f=function(forcedItems){for(var i=0;i<forcedItems.length;i++){var item=items.filter(function(){return this===forcedItems[i];});if(item.length){_lazyLoadItems(false,item);}}};_lazyLoadItems();$(config.appendScroll).on('scroll.'+namespace+' resize.'+namespace,events.e);}}
function _prepareItems(items){var defaultImage=config.defaultImage,placeholder=config.placeholder,imageBase=config.imageBase,srcsetAttribute=config.srcsetAttribute,loaderAttribute=config.loaderAttribute,forcedTags=config._f||{};items=$(items).filter(function(){var element=$(this),tag=_getElementTagName(this);return!element.data(config.handledName)&&(element.attr(config.attribute)||element.attr(srcsetAttribute)||element.attr(loaderAttribute)||forcedTags[tag]!==undefined);}).data('plugin_'+config.name,instance);for(var i=0,l=items.length;i<l;i++){var element=$(items[i]),tag=_getElementTagName(items[i]),elementImageBase=element.attr(config.imageBaseAttribute)||imageBase;if(tag===_img&&elementImageBase&&element.attr(srcsetAttribute)){element.attr(srcsetAttribute,_getCorrectedSrcSet(element.attr(srcsetAttribute),elementImageBase));}
if(forcedTags[tag]!==undefined&&!element.attr(loaderAttribute)){element.attr(loaderAttribute,forcedTags[tag]);}
if(tag===_img&&defaultImage&&!element.attr(_src)){element.attr(_src,defaultImage);}
else if(tag!==_img&&placeholder&&(!element.css(_backgroundImage)||element.css(_backgroundImage)==='none')){element.css(_backgroundImage,"url('"+placeholder+"')");}}
return items;}
function _lazyLoadItems(allItems,forced){if(!items.length){if(config.autoDestroy){instance.destroy();}
return;}
var elements=forced||items,loadTriggered=false,imageBase=config.imageBase||'',srcsetAttribute=config.srcsetAttribute,handledName=config.handledName;for(var i=0;i<elements.length;i++){if(allItems||forced||_isInLoadableArea(elements[i])){var element=$(elements[i]),tag=_getElementTagName(elements[i]),attribute=element.attr(config.attribute),elementImageBase=element.attr(config.imageBaseAttribute)||imageBase,customLoader=element.attr(config.loaderAttribute);if(!element.data(handledName)&&(!config.visibleOnly||element.is(':visible'))&&((attribute||element.attr(srcsetAttribute))&&((tag===_img&&(elementImageBase+attribute!==element.attr(_src)||element.attr(srcsetAttribute)!==element.attr(_srcset)))||(tag!==_img&&elementImageBase+attribute!==element.css(_backgroundImage)))||customLoader))
{loadTriggered=true;element.data(handledName,true);_handleItem(element,tag,elementImageBase,customLoader);}}}
if(loadTriggered){items=$(items).filter(function(){return!$(this).data(handledName);});}}
function _handleItem(element,tag,imageBase,customLoader){++_awaitingAfterLoad;var errorCallback=function(){_triggerCallback('onError',element);_reduceAwaiting();errorCallback=$.noop;};_triggerCallback('beforeLoad',element);var srcAttribute=config.attribute,srcsetAttribute=config.srcsetAttribute,sizesAttribute=config.sizesAttribute,retinaAttribute=config.retinaAttribute,removeAttribute=config.removeAttribute,loadedName=config.loadedName,elementRetina=element.attr(retinaAttribute);if(customLoader){var loadCallback=function(){if(removeAttribute){element.removeAttr(config.loaderAttribute);}
element.data(loadedName,true);_triggerCallback(_afterLoad,element);setTimeout(_reduceAwaiting,1);loadCallback=$.noop;};element.off(_error).one(_error,errorCallback).one(_load,loadCallback);if(!_triggerCallback(customLoader,element,function(response){if(response){element.off(_load);loadCallback();}
else{element.off(_error);errorCallback();}})){element.trigger(_error);}}
else{var imageObj=$(new Image());imageObj.one(_error,errorCallback).one(_load,function(){element.hide();if(tag===_img){element.attr(_sizes,imageObj.attr(_sizes)).attr(_srcset,imageObj.attr(_srcset)).attr(_src,imageObj.attr(_src));}
else{element.css(_backgroundImage,"url('"+imageObj.attr(_src)+"')");}
element[config.effect](config.effectTime);if(removeAttribute){element.removeAttr(srcAttribute+' '+srcsetAttribute+' '+retinaAttribute+' '+config.imageBaseAttribute);if(sizesAttribute!==_sizes){element.removeAttr(sizesAttribute);}}
element.data(loadedName,true);_triggerCallback(_afterLoad,element);imageObj.remove();_reduceAwaiting();});var imageSrc=(_isRetinaDisplay&&elementRetina?elementRetina:element.attr(srcAttribute))||'';imageObj.attr(_sizes,element.attr(sizesAttribute)).attr(_srcset,element.attr(srcsetAttribute)).attr(_src,imageSrc?imageBase+imageSrc:null);imageObj.complete&&imageObj.trigger(_load);}}
function _isInLoadableArea(element){var elementBound=element.getBoundingClientRect(),direction=config.scrollDirection,threshold=config.threshold,vertical=((_getActualHeight()+threshold)>elementBound.top)&&(-threshold<elementBound.bottom),horizontal=((_getActualWidth()+threshold)>elementBound.left)&&(-threshold<elementBound.right);if(direction==='vertical'){return vertical;}
else if(direction==='horizontal'){return horizontal;}
return vertical&&horizontal;}
function _getActualWidth(){return _actualWidth>=0?_actualWidth:(_actualWidth=$(window).width());}
function _getActualHeight(){return _actualHeight>=0?_actualHeight:(_actualHeight=$(window).height());}
function _getElementTagName(element){return element.tagName.toLowerCase();}
function _getCorrectedSrcSet(srcset,imageBase){if(imageBase){var entries=srcset.split(',');srcset='';for(var i=0,l=entries.length;i<l;i++){srcset+=imageBase+entries[i].trim()+(i!==l-1?',':'');}}
return srcset;}
function _throttle(delay,callback){var timeout,lastExecute=0;return function(event,ignoreThrottle){var elapsed=+new Date()-lastExecute;function run(){lastExecute=+new Date();callback.call(instance,event);}
timeout&&clearTimeout(timeout);if(elapsed>delay||!config.enableThrottle||ignoreThrottle){run();}
else{timeout=setTimeout(run,delay-elapsed);}};}
function _reduceAwaiting(){--_awaitingAfterLoad;if(!items.length&&!_awaitingAfterLoad){_triggerCallback('onFinishedAll');}}
function _triggerCallback(callback,element,args){if((callback=config[callback])){callback.apply(instance,[].slice.call(arguments,1));return true;}
return false;}
if(config.bind==='event'||windowLoaded){_initialize();}
else{$(window).on(_load+'.'+namespace,_initialize);}}
function LazyPlugin(elements,settings){var _instance=this,_config=$.extend({},_instance.config,settings),_events={},_namespace=_config.name+'-'+(++lazyInstanceId);_instance.config=function(entryName,value){if(value===undefined){return _config[entryName];}
_config[entryName]=value;return _instance;};_instance.addItems=function(items){_events.a&&_events.a($.type(items)==='string'?$(items):items);return _instance;};_instance.getItems=function(){return _events.g?_events.g():{};};_instance.update=function(useThrottle){_events.e&&_events.e({},!useThrottle);return _instance;};_instance.force=function(items){_events.f&&_events.f($.type(items)==='string'?$(items):items);return _instance;};_instance.loadAll=function(){_events.e&&_events.e({all:true},true);return _instance;};_instance.destroy=function(){$(_config.appendScroll).off('.'+_namespace,_events.e);$(window).off('.'+_namespace);_events={};return undefined;};_executeLazy(_instance,_config,elements,_events,_namespace);return _config.chainable?elements:_instance;}
LazyPlugin.prototype.config={name:'lazy',chainable:true,autoDestroy:true,bind:'load',threshold:500,visibleOnly:false,appendScroll:window,scrollDirection:'both',imageBase:null,defaultImage:'data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==',placeholder:null,delay:-1,combined:false,attribute:'data-src',srcsetAttribute:'data-srcset',sizesAttribute:'data-sizes',retinaAttribute:'data-retina',loaderAttribute:'data-loader',imageBaseAttribute:'data-imagebase',removeAttribute:true,handledName:'handled',loadedName:'loaded',effect:'show',effectTime:0,enableThrottle:true,throttle:250,beforeLoad:undefined,afterLoad:undefined,onError:undefined,onFinishedAll:undefined};$(window).on('load',function(){windowLoaded=true;});})(window);