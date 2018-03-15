(function (lib, img, cjs, ss) {

var pauseFlag = false;
var p; // shortcut to reference prototypes
lib.webFontTxtFilters = {}; 

// library properties:
lib.properties = {
	width: 300,
	height: 125,
	fps: 24,
	color: "#FFFFFF",
	webfonts: {},
	manifest: [
		{src:"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEgAAAAZCAMAAACl4ZgnAAAABGdBTUEAALGPC/xhBQAAAAFzUkdCAK7OHOkAAAAqUExURUxpcdnZ2fv7++np6fn5+fT09PDw8Pn5+fj4+Pv7+/b29vv7+/v7+////7qGXbkAAAANdFJOUwAT7CKLRDF3Z6ZWvtRxdk6uAAAB+0lEQVQ4y62Vy4IjIQhFARFB5f9/t4HKoyrTm06NiyQqHvAKBODXgWs3uD+mbSJaivcwfftj7HkrHPL3GDfi8cvQbzlIVxB9q/kwEXY3W0xuXZi/vVl+xGlyVKuFO0+HGDcU+DuiSRyeDcQWvqSS2qg5llCtXEA7LcU0l9shZFcjbMu126IzqC9y4lgxCmonBtw2nPIlrV5hbVCaHMkrkcXalomNzSw03o/XhLwUB9ge0qkvkMxSSv0tU6z7hniZbWEJyQoocpwIByeQJaNRQM6gcUiXjKKxb4wZ5WLEixJmPex5QuMeIJI6XsZn0DOvtksYIfDhLkHqFvPgbsur6450DptODxCfQU8RYfjoyeDYP0BIwYB4nuYT1jKb0UFS7FX1kdgdO3HiAmq0V/LfIC7H1YMUuk3IREyN1Kk3ziJZvmTSCzSWVKixcAbNd684vIVkMzK7pWkUW7iZ+W1PUDgZR3XrC3SIfc1q200UtGyZtcSNHwIjkCO9Ti6PZRJPkxb6T5dAJoX/MQZXlaDqq39UmVzrrrdjuWSprc9eOnXpEXBWfeecjDjV814i/UHXUHtm7eTqKKk+L8breFxOh9oH1ilkHLk78A1Kfs659PmIqO0tD2JebcrEh/tSeTzNo1NAGuT/TAUL/bOvyTO29sq8CqPuNH/tUGWJP3hhEvEZFiBhAAAAAElFTkSuQmCC",type: 'image', id:"image1"},
		{src:"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGEAAAAUCAMAAACqN6PjAAAABGdBTUEAALGPC/xhBQAAAAFzUkdCAK7OHOkAAAA/UExURXl5VwICAfT0tPX1td/fpvPzsyQkGs3Nm+/vsOrqrPb2tlpaQjo6Km9vUZOTbRERDff3tsfHkoyMZra2hpOTbFbaGU8AAAAVdFJOUwL9bYAYQNUNLyJUwZyAremTWzh/aYcMGBAAAALRSURBVDjLtVXtkqQwCBzygTEhRo3v/6zXgO7NVF3t/rllppxJbOmGAL5eP9oCe/0Pg59kH3Wol3uZzD5J7Pbygyp187FMab3NfX4tCwyb5tGJl2So5TuxLstl3Ev1lM3UobrNz4btJQtNgQYFKC23tuXTADn7qV7W5LLSKRBVDhE5wsW9wqFIrpdIr1VYrWfzqNCSSlZoWe9Iy1fI9x8oY4Gsi9ekDGkVwW4eLExxI5qhVpbaSYRabGPrXUhA4dC8ljEAvd5iLZ4A38kVNmaFxLIaQWGEVGSEEEfbaHAMgVsYLYSNZtNlEDpycSgCpAMIVs/9OPrUNF79uK7aj5wPoRBmD5E6Ir8ZVIJICLsy4BMjGGgLcafNGSr1nB1aizB2Gqtj4sEEKax/OBDS2mlE2+WNqjGULogOT0Lu2DfaGylDVGvAjdZ60LRVh1akAQxDGSpxACjgGwJxhCrEjXPDszTAkF8v6JJu6VMG2sCwU9uNAQ+27Y3BoSiEGrZBlzEg3o1cUOPdl/jZ464xBGcYVlil1rAzKwPyxE1/QLVblnByxqBQMBxIyqzOEB6G/Z0hvjOcbAQQiYCxCzVIY0OyLFNNk14nJFeH1nyMsYWatXqoa1r+weC+PEtaq2CQgQLRk4bDqeqNQE8UG4dmvTq0Zi07ZUBh6tGCQY8uDrZnUPKszyDDdtJp5VM7BfpIY+/gRZuRlS3sEj044gPuHJoz6xaLVqCWGERFryUwaRWF6RXWKaMf0sk6YhIa9eoXMtCtefo8utlx2VVbuji0FNvql4au0+Hodc65WT6nNgga7vGFnl7O0+bKPWxsyFlj3uPobll1vTrU75b1az7iQGTMOEfTw39a/B5d92C9559Pls9B+4zbZ6Qj6mcGPZNOR44QkVQbG3pLVf4d+p9DfPn7P/nbwq8GXL59HTxvDOA06ZYDG32/YfYK8QH/+j2KO0t/ACtFLi6SefTMAAAAAElFTkSuQmCC",type: 'image', id:"image10"},
		{src:"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEcAAAAaCAMAAADSfrEEAAAABGdBTUEAALGPC/xhBQAAAAFzUkdCAK7OHOkAAABpUExUReT//9T//x+Z13W+5uf3//P//2y54NT//+D//7z/4GW86CGLvySCrxiRz5DM61CXuoKwxmex0CqVzcf7/3e21yB3nFm04DWf1Wepwx5qiFWOpLfw/U6hyT54kCZfc2+hsJLG2KDi+rPb6KEUqKEAAAAKdFJOU/v///9gWP/MmjCNbp8iAAAC00lEQVQ4y6WVi7KbIBCGRVrPaTQKLN5AQH3/h+zugomnnWmn0z8jsrdvFyaZVD8+hahuElkVecXXUPVL3jv/43v1qXalknrJWnJ8Ffq+mvbtQ8NK9VF9qL7f9/4X/e75o1RFHGlvaqS0EnV3PR7NJTLvhtU8D3KsbBr5FoYl2m+XlX/TxaHqB/XkR0r97kie2wCXV14TPhpNUxBHy8f0YDW83AhNdmd+UXONShu0+QQLz0PhKdfhoyXoo3/RXp1ffa4bstlJF2HpnmXppHWjScsBfll4q5vpMeWdnrBgmi5LW3JNU6YvmYPJmGD1wkouubxbKBW9KakFXwP2oD6JAhzmQoRp4ljeT7oHVJ9SAjid8+C98FiA7j15cKkX4A+sBrEnCUdS4Lft8RtnsbC7HWuSEOAckdywbIMFcToh0g7KJTzwTrY7xH6C3bYtz0AcnTmbFXsIHoKqdpECcYIbtq0BXymAAJ7gg/PiFHj0CnHDsE0vzrLNpG3Ak4iwgwPhoA+MDN3QabH7kzj9is7g/JlAxaCEcKFr21x85yxij/GEQD9gjzUHLl3XLaBSVUH0PuL9OUu36Nc1iDOOXWvMnVPPxlBBxFY4Eb6WdT18GDMnnsJHBSn24A4IEVPWAPs6dhnDHD3XdT3PbadBgEjx8DE6ONbx8IRBt0UbnRoHOTAS4+KbdfT9ON7PxZzamLYLayStcUWNmIWctuvG9a5xzEGKd53h4hunNm1bUtbBy5WzWhLNNJbK8UopTYwxXFs4ZDyp8zi+WzHFMGnkUMfEvLQcNs8nz1DzPc8ZOpfevJRZMM+YPBUdHF8tZ7Q5WmfMk+dZkIoeVvuSIUadA7jNgyHL8MswI2dQcKBzlekKq+a6Z8tWzR1Lfl2alVc5E/ce+PtjynXl+56pXYtrPq/hTVkuzfwx+HV58oDI+VRuwN/JwNrK+9+0Dfi/Q/+D/yOg5+PbT0SMZrg6UBL6AAAAAElFTkSuQmCC",type: 'image', id:"image12"},
		{src:"data:image/jpg;base64,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",type: 'image', id:"image2"},
		{src:"data:image/png;base64,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",type: 'image', id:"image4"},
		{src:"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADMAAAAkCAMAAAATrPI7AAAABGdBTUEAALGPC/xhBQAAAAFzUkdCAK7OHOkAAABOUExURUxpcfUAAPUAAP8AAPgAAPgAAOoAAPcYF/AAAPYAAPz//d8DBNkEBfkAAeQFBeoCAvEBAfQ5OfmYl/lWVfvb2fl/f/zw7vy/vvqwrvhwb4/TWH0AAAAKdFJOUwDYZP/Api79RIKeNTs5AAACSUlEQVQ4y5WTi5aiMBBEcVAjjeT9/P8f3eqExwR1160zJzJSt7oScBj+Q/fHNF3F+KX78TPdLuOqL6JviO701+jrZXynL6M/M5+j3zA1+nSnJLdeieJemJ/32dlgSb6MlujMXF/tDnZHHleENb0wt96dbIEzj5yOK/iN92Q65tH3IRjsGBO38rF+kSlRt6F+jIF/DAbpmGUd/gsUMI9Cx3RjAkqElIwl4J6IhCOHdhy1ahmXnikoEdE+8J8NgZIhl8nY1m1p6hlBXmDzAelcb7RZOLGbbXKN6V8SHBZO15jkwhGNa4EPQXGdc3o6LuxmYapD8L4ioEJ20azT4zlahwgndwnkcQxFa09OV2iYjvPgGjbZGh+oClCiBHvWhqJuas90PRCRNuOCKTZja1pbLMxZshtzXw7xCXAlgVAk806cLnhKPIerValhOBABu9EpZqGxg6A1ClotIic5VFPK5WIUmMuytK2xcRsfKoNpSWsRkhUK1Vp1A+bKnoqxUWQcQsXZDYtahWr8FqElmEnrI9zXIoYneBgPhqvhPsZFiV/pzhQebT3b1wlxZ1BNYY4EB+axnkatT6UaDapgUakxUkpUk7hf2pwB/iZRd4hICrxYJfGFrEI1rPUMwgxGqWOfcHPtoHhmwEPNjUE1Oc/S2WxmZq47E3j/kp+klLm9PAbAPM/Rw7sJzK36JbeOzehbNP8q5pOeEJhJyU2mQphV768fv9zP59yYh/ylkm2Rr9G7f51zb+75VZv1wDZm+GRm78m+M5d/R3f6AxmgRgplezKdAAAAAElFTkSuQmCC",type: 'image', id:"image6"},
		{src:"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGUAAAAXCAMAAAAlSHE3AAAABGdBTUEAALGPC/xhBQAAAAFzUkdCAK7OHOkAAAAzUExURX9/Wvf3tvbxsbw2KPTzs/r5t/n3t9PTn+fnq/DvsOWzhdF1V9eLZ7QcFcZTPuOwgq8FBWGx4REAAAAQdFJOUwNheOlLu5UQHzLK15ny0pM3xsOBAAACVElEQVRIx71W22KDIAwtAaJy0///2uVGQWftnsbW9kBOOGBI8LVQW7kxeMnfomP9V639V2jc1Losb5oZ5tHeZHjdqDHN3Nf3gMJ1hsZ6jf4yw+XM6o0pgRsZu2joA9vb9Gatqy7ZbGq6gctZZAsO9lLABTHJgPQd0Z1C8nvDC4tNN/Ass6zBtYNbI5Ps2JXKfb8DwC4wk2SHnRXAixeZ3G94kaFJVYSmdWRZtrBbvyImgxmxj2ZjQdV+Q8Qb6MJqB0lUgiNDiom+d7Koao7R87d8sVQcEDg2wvLilWK+gcVt/VSKCrAhsr3QwyB/z5PyhJk+lWA7Q/LXrSTxavEW0mKkiczKfPPfHakEaJ3JU9sCZsj+Do6+Fh9vIcrh8UXiQ7PyLnMTA+0yAC+b+1XmRImOn6CoFOYj8rTpFiK44v1RSUZUokUsmgracUh/UMEx9QVGhNLK0QKrbA757HlWIhVKKt6b9tNHlfAHlXTU2jjWolI0rl4jFpywJQL1gwo9cfj6xGIl/lDRg2sRo7SyOHen39EXFn6Lfjp2RJhVWlehbEc7s6Zi28wTpLgS7dtJTgfP1lUk1TUrM4eo8CqznGyvqZhHVjJEZWn+HSMVLzAdXKAkByX3/ago3d8O2W2FQRAWPlcYhNqAUk/zhSpSr5akzf4Aj9USgJdVHDxWS2IVPWOjhGvlp1JfSglMfar8QVgn090lwDz61wpj15GTq6e3p1vswvp0i2164W6XG3id2/VGXubL2Urt3TV8gqMkjxcFewcY7xfTS8QZTuQH1uD9V/sB7YNJ98s6PmAAAAAASUVORK5CYII=",type: 'image', id:"image8"}
	]
};



lib.webfontAvailable = function(family) { 
	lib.properties.webfonts[family] = true;
	var txtFilters = lib.webFontTxtFilters && lib.webFontTxtFilters[family] || [];
	for(var f = 0; f < txtFilters.length; ++f) {
		txtFilters[f].updateCache();
	}
};
// symbols:



(lib.image1 = function() {
	this.initialize(img.image1);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,72,25);


(lib.image10 = function() {
	this.initialize(img.image10);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,97,20);


(lib.image12 = function() {
	this.initialize(img.image12);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,71,26);


(lib.image2 = function() {
	this.initialize(img.image2);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,300,125);


(lib.image4 = function() {
	this.initialize(img.image4);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,300,19);


(lib.image6 = function() {
	this.initialize(img.image6);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,51,36);


(lib.image8 = function() {
	this.initialize(img.image8);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,101,23);


(lib.shape13 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.bf(img.image12, null, new cjs.Matrix2D(1,0,0,1,-35.5,-13)).s().p("AlhCBIAAkBILDAAIAAEBg");

	this.timeline.addTween(cjs.Tween.get(this.shape).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-35.5,-13,71,26);


(lib.shape11 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.bf(img.image10, null, new cjs.Matrix2D(1,0,0,1,-48.5,-10)).s().p("AnkBjIAAjFIPJAAIAADFg");
	this.shape.setTransform(-9,0);

	this.timeline.addTween(cjs.Tween.get(this.shape).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-57.5,-10,97,20);


(lib.shape9 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.bf(img.image8, null, new cjs.Matrix2D(1,0,0,1,-50.5,-11.5)).s().p("An3BzIAAjlIPvAAIAADlg");

	this.timeline.addTween(cjs.Tween.get(this.shape).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-50.5,-11.5,101,23);


(lib.shape7 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.bf(img.image6, null, new cjs.Matrix2D(1,0,0,1,-25.5,-18)).s().p("Aj9C0IAAlnIH7AAIAAFng");

	this.timeline.addTween(cjs.Tween.get(this.shape).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-25.5,-18,51,36);


(lib.shape5 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.bf(img.image4, null, new cjs.Matrix2D(1,0,0,1,-150,-9.5)).s().p("A3bBfIAAi9MAu3AAAIAAC9g");

	this.timeline.addTween(cjs.Tween.get(this.shape).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-150,-9.5,300,19);


(lib.shape3 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 2
	this.shape = new cjs.Shape();
	this.shape.graphics.bf(img.image1, null, new cjs.Matrix2D(1,0,0,1,-36,-12.5)).s().p("AlnB9IAAj4ILOAAIAAD4g");
	this.shape.setTransform(37,110.5);

	this.timeline.addTween(cjs.Tween.get(this.shape).wait(1));

	// Layer 1
	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.bf(img.image2, null, new cjs.Matrix2D(1,0,0,1,-150,-62.5)).s().p("A3bJxIAAzhMAu2AAAIAAThg");
	this.shape_1.setTransform(150,62.5);

	this.timeline.addTween(cjs.Tween.get(this.shape_1).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(0,0,300,125);


(lib.button_1 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#000000").s().p("AiVBAIAAh/IErAAIAAB/g");

	this.timeline.addTween(cjs.Tween.get(this.shape).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-15,-6.5,30,13);


(lib.Symbol1 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.instance = new lib.shape13("synched",0);
	this.instance.setTransform(0,0,0.5,0.5);
	this.instance._off = true;

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(72).to({_off:false},0).to({scaleX:0.95,scaleY:0.95,x:-1.3,y:0.5},9).wait(1).to({scaleX:1,scaleY:1,x:-1.5},0).to({startPosition:0},5).to({scaleX:0.5,scaleY:0.5,x:-6.3,y:1},1).to({scaleX:0.95,scaleY:0.95,x:3.4,y:0.6},9).wait(1).to({scaleX:1,scaleY:1,x:4.5,y:0.5},0).wait(64));

	// Layer 2
	this.instance_1 = new lib.shape11("synched",0);
	this.instance_1.setTransform(10.5,-72.5);
	this.instance_1._off = true;

	this.timeline.addTween(cjs.Tween.get(this.instance_1).wait(32).to({_off:false},0).to({y:-26.3},12).wait(1).to({y:-22.5},0).wait(117));

	// Layer 3
	this.instance_2 = new lib.shape9("synched",0);
	this.instance_2.setTransform(-200.5,-24);
	this.instance_2._off = true;

	this.timeline.addTween(cjs.Tween.get(this.instance_2).wait(32).to({_off:false},0).to({x:-105.4},12).wait(1).to({x:-97.5},0).wait(117));

	// Layer 4
	this.instance_3 = new lib.shape7("synched",0);
	this.instance_3.setTransform(124.5,80.5);
	this.instance_3._off = true;

	this.timeline.addTween(cjs.Tween.get(this.instance_3).wait(21).to({_off:false},0).to({y:47.8},10).wait(1).to({y:44.5},0).to({startPosition:0},29).to({scaleX:0.33,scaleY:0.33,x:141.5,y:56.5},1).to({scaleX:0.93,scaleY:0.93,x:126.2,y:45.7},9).wait(1).to({scaleX:1,scaleY:1,x:124.5,y:44.5},0).wait(90));

	// Layer 5
	this.instance_4 = new lib.shape5("synched",0);
	this.instance_4.setTransform(0,-77);

	this.timeline.addTween(cjs.Tween.get(this.instance_4).to({y:-46.5},20).wait(1).to({y:-45},0).wait(141));

	// Layer 6
	this.instance_5 = new lib.shape3("synched",0);
	this.instance_5.setTransform(-150,-62.5);

	this.timeline.addTween(cjs.Tween.get(this.instance_5).wait(162));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-150,-86.5,300,149);


// stage content:
(lib._300x125 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// timeline functions:
	this.frame_0 = function() {
		
		
		if (!pauseFlag) {
			window.addEventListener("message", receiveMessage, false);
			pauseFlag = true;
		}

		function receiveMessage (event) {
				console.log("Event = " + event.data);
				//var result = slpit(event.src);
				//switch (event)
				if(event.data.indexOf('pause')!=-1){
					createjs.Ticker.removeAllEventListeners();
				}else
					createjs.Ticker.addEventListener("tick", stage)
		}
		if(typeof(window.checker)=='undefined'){
			window.addEventListener("message", receiveMessage, false);
			window.checker=1;
		}


		
		var self = this;
		var count = 0;
		
		this.button_1.addEventListener("click", onClickStop);
		
		function onClickStop(e)
		{
			if (count % 2 == 0) {
				createjs.Ticker.removeAllEventListeners();
			}
			else  createjs.Ticker.addEventListener("tick", stage);
			
			count++;
			//self.stop();
		}
	}

	// actions tween:
	this.timeline.addTween(cjs.Tween.get(this).call(this.frame_0).wait(1));

	// Layer 2
	this.button_1 = new lib.button_1();
	this.button_1.setTransform(24,14.5);
	new cjs.ButtonHelper(this.button_1, 0, 1, 1);

	this.timeline.addTween(cjs.Tween.get(this.button_1).wait(1));

	// Layer 1
	this.instance = new lib.Symbol1();
	this.instance.setTransform(150,50.5,1,1,0,0,0,0,-12);

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(150,38.5,300,149);

})(lib = lib||{}, images = images||{}, createjs = createjs||{}, ss = ss||{});
var lib, images, createjs, ss;