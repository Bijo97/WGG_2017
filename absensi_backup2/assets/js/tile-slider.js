$.easing.doubleSqrt=function(t,millisecondsSince,startValue,endValue,totalDuration){
var res=Math.sqrt(Math.sqrt(t));
return res;
};
(function($){
$.tileBlockSlider=function(element,options){
var defaults={
period:2000,
duration:1000,
direction:'up'
};
var plugin=this;
plugin.settings={};
var $element=$(element),
element=element; 
var blocks,
currentBlockIndex,
slideInPosition,
slideOutPosition,
tileWidth,
tileHeight;
plugin.init=function(){
plugin.settings=$.extend({},defaults,options);
blocks=$element.children(".tile-content");
if (blocks.length <=1){
return;
}
currentBlockIndex=0;
tileWidth=$element.innerWidth();
tileHeight=$element.innerHeight();
slideInPosition=getSlideInPosition();
slideOutPosition=getSlideOutPosition();
blocks.each(function (index,block){
block=$(block);
if (block.css('position') !=='absolute'){
block.css('position','absolute');
}
if (index!==0){
block.css('left',tileWidth);
}
});
setInterval(function(){
slideBlock();
},plugin.settings.period);
};
var slideBlock=function(){
var slideOutBlock,
slideInBlock,
mainPosition={'left':0,'top':0},
options;
slideOutBlock=$(blocks[currentBlockIndex]);
currentBlockIndex++;
if (currentBlockIndex >=blocks.length){
currentBlockIndex=0;
}
slideInBlock=$(blocks[currentBlockIndex]);
slideInBlock.css(slideInPosition);
options={
duration:plugin.settings.duration,
easing:'doubleSqrt'
};
slideOutBlock.animate(slideOutPosition,options);
slideInBlock.animate(mainPosition,options);
};
var getSlideInPosition=function(){
var pos;
if (plugin.settings.direction==='left'){
pos={
'left':tileWidth,
'top':0
}
}else if (plugin.settings.direction==='right'){
pos={
'left':-tileWidth,
'top':0
}
}else if (plugin.settings.direction==='up'){
pos={
'left':0,
'top':tileHeight
}
}else if (plugin.settings.direction==='down'){
pos={
'left':0,
'top':-tileHeight
}
}
return pos;
};

var getSlideOutPosition=function(){
var pos;
if (plugin.settings.direction==='left'){
pos={
'left':-tileWidth,
'top':0
}
}else if (plugin.settings.direction==='right'){
pos={
'left':tileWidth,
'top':0
}
}else if (plugin.settings.direction==='up'){
pos={
'left':0,
'top':-tileHeight
}
}else if (plugin.settings.direction==='down'){
pos={
'left':0,
'top':tileHeight
}
}
return pos;
};
plugin.getParams=function(){
}
plugin.init();
}
$.fn.tileBlockSlider=function(options){
return this.each(function(){
if (undefined==$(this).data('tileBlockSlider')){
var plugin=new $.tileBlockSlider(this,options);
$(this).data('tileBlockSlider',plugin);
}
});
}
})(jQuery);
$(window).ready(function(){
var slidedTiles=$('[data-role=tile-slider],.block-slider,.tile-slider');
slidedTiles.each(function (index,tile){
var params={};
tile=$(tile);
params.direction=tile.data('paramDirection');
params.duration=tile.data('paramDuration');
params.period=tile.data('paramPeriod');
tile.tileBlockSlider(params);
})
});