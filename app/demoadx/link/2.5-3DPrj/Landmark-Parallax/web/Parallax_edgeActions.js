
(function($,Edge,compId){var Composition=Edge.Composition,Symbol=Edge.Symbol;
//Edge symbol: 'stage'
(function(symbolName){Symbol.bindSymbolAction(compId,symbolName,"creationComplete",function(sym,e){});
//Edge binding end
Symbol.bindElementAction(compId,symbolName,"${_tienich}","click",function(sym,e){window.ondeviceorientation=null;sym.play("frame2");console.log("frame2");});
//Edge binding end
Symbol.bindTriggerAction(compId,symbolName,"Default Timeline",180000,function(sym,e){sym.stop();document.addEventListener('touchstart',function(event){return false;});window.ondeviceorientation=function(event){var delta=Math.round(event.gamma);switch(window.orientation){case 0:delta=Math.round(event.gamma);break;case 180:delta=-Math.round(event.gamma);break;}
var position=190000+(delta*200);position=Math.floor(position);if(position<180200)position=180200;sym.stop(position);console.log(position);}});
//Edge binding end
Symbol.bindTriggerAction(compId,symbolName,"Default Timeline",0,function(sym,e){sym.stop();document.addEventListener('touchstart',function(event){return false;});window.ondeviceorientation=function(event){var delta=Math.round(event.beta);switch(window.orientation){case 0:delta=Math.round(event.gamma);break;case 180:delta=-Math.round(event.gamma);break;}
var position=12000+(delta*300);position=Math.floor(position);sym.stop(position);console.log(position);}});
//Edge binding end
})("stage");
//Edge symbol end:'stage'
})(jQuery,AdobeEdge,"EDGE-32624511");