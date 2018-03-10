(function (lib, img, cjs, ss) {

var p; // shortcut to reference prototypes
lib.webFontTxtFilters = {}; 

// library properties:
lib.properties = {
	width: 160,
	height: 600,
	fps: 20,
	color: "#FFFFFF",
	webfonts: {},
	manifest: [
		{src:"_300x6001.jpg", id:"_300x6001"},
		{src:"_300x6002.png", id:"_300x6002"}
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



(lib._300x6001 = function() {
	this.initialize(img._300x6001);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,160,600);


(lib._300x6002 = function() {
	this.initialize(img._300x6002);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,80,50);


(lib.Tween3 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.instance = new lib._300x6002();
	this.instance.setTransform(-150,-95);

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-150,-95,160,208);


(lib.Tween2 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.instance = new lib._300x6002();
	this.instance.setTransform(-150,-95);

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-150,-95,160,208);


(lib.Tween1 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.instance = new lib._300x6002();
	this.instance.setTransform(-150,-95);

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-150,-95,160,208);


(lib.Symbol12 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#0066CC").s().p("AzhJYIAAyvMAnDAAAIAASvg");
	this.shape.setTransform(125,60);

	this.timeline.addTween(cjs.Tween.get(this.shape).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(0,0,250.1,120.1);


(lib.Symbol10 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#0066CC").s().p("AnpHqIAAvTIPTAAIAAPTg");
	this.shape.setTransform(49,49);

	this.timeline.addTween(cjs.Tween.get(this.shape).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(0,0,98,98);


(lib.Symbol5 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#0066CC").s().p("A3MLUIAA2oMAuZAAAIAAWog");
	this.shape.setTransform(148.5,72.5);

	this.timeline.addTween(cjs.Tween.get(this.shape).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(0,0,297,145);


(lib.Symbol3 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.instance = new lib._300x6001();

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(0,0,160,600);


(lib.Symbol2 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("#0066CC").s().p("EgXbAu3MAAAhdtMAu2AAAMAAABdtg");
	this.shape.setTransform(150,300);

	this.timeline.addTween(cjs.Tween.get(this.shape).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(0,0,300,600);


(lib.shape79 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.lf(["rgba(255,255,255,0)","rgba(252,245,241,0.8)","rgba(252,248,241,0.8)","rgba(255,255,255,0)"],[0,0.169,0.827,1],0,-148.8,0,31).s().p("AgDE2IAAprIAHAAIAAJrg");
	this.shape.setTransform(0,37);

	this.shape_1 = new cjs.Shape();
	this.shape_1.graphics.lf(["rgba(255,255,255,0)","rgba(252,245,241,0.8)","rgba(252,248,241,0.8)","rgba(255,255,255,0)"],[0,0.169,0.827,1],-148.8,0,31,0).s().p("Ak1AEIAAgHIJrAAIAAAHg");
	this.shape_1.setTransform(37,0);

	this.shape_2 = new cjs.Shape();
	this.shape_2.graphics.lf(["rgba(255,255,255,0)","rgba(252,245,241,0.8)","rgba(252,248,241,0.8)","rgba(255,255,255,0)"],[0,0.169,0.827,1],0,-36.9,0,142.9).s().p("AgDFxIAAg3IAAgJIAAqhIAHAAIAAKhIAAAJIAAA3g");
	this.shape_2.setTransform(0,-31);

	this.shape_3 = new cjs.Shape();
	this.shape_3.graphics.lf(["rgba(255,255,255,0)","rgba(252,245,241,0.8)","rgba(252,248,241,0.8)","rgba(255,255,255,0)"],[0,0.169,0.827,1],-36.9,0,142.9,0).s().p("AE7AEIAAgHIA2AAIAAAHgAlwAEIAAgHIKhAAIAAAHg");
	this.shape_3.setTransform(-31,0);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.shape_3},{t:this.shape_2},{t:this.shape_1},{t:this.shape}]}).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-68,-68,136,136);


(lib.shape78 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("rgba(190,86,86,0.2)").s().p("AwcQdQlglghEnWQgQhwgBh3QAApnG1m1QG1m1JnAAQGJABE/CxQC3BlCeCeQG1G1AAJnQAAJom1G1Qm1G1poAAQpnAAm1m1gAvnvnQmeGfAAJIQgBDOA0C4QBeFWENEMQGfGeJIAAQJJAAGfmeQGemfAApJQAApImemfQhVhVhdhDQllkHnRABQpIAAmfGeg");

	this.timeline.addTween(cjs.Tween.get(this.shape).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-149,-149,298,298);


(lib.shape77 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.rf(["rgba(170,108,95,0)","rgba(194,95,95,0)","rgba(190,86,86,0.733)"],[0,0.678,1],0,0,0,0,0,97.2).s().p("AoHIHQjXjXAAkwQAAkvDXjYQDYjXEvAAQEwAADXDXQDYDYAAEvQAAEwjYDXQjXDYkwAAQkvAAjYjYg");

	this.timeline.addTween(cjs.Tween.get(this.shape).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-73.5,-73.5,147,147);


(lib.shape76 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.f("rgba(190,86,86,0.471)").s().p("AlFFGQiGiFgCi6IAAgHQAAi+CIiHQCHiIC+AAQCGAABsBDQAtAdAnAoQCHCHABC+QgBC/iHCHQiHCIi/AAQi+AAiHiIgAkvkvQh9B/gBCwQABBBAQA7QAeBkBPBQQB/B9CwABQCxgBB/h9QB9h/ABixQAAiohzh6IgLgNQh/h9ixgBQiwABh/B9g");

	this.timeline.addTween(cjs.Tween.get(this.shape).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-46.2,-46.2,92.5,92.5);


(lib.shape74 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.rf(["#FFFFFF","#F7ECEB","rgba(234,205,202,0.89)","rgba(191,145,138,0.459)","rgba(133,101,96,0.451)","rgba(104,78,77,0)"],[0.071,0.145,0.22,0.361,0.478,1],0,0,0,0,0,87.7).s().p("ApmJmQj/j+AAloQAAlnD/j/QD/j/FnAAQFoAAD+D/QEAD/AAFnQAAFokAD+Qj+EAloAAQlnAAj/kAg");

	this.timeline.addTween(cjs.Tween.get(this.shape).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-87,-87,174,174);


(lib.shape56 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.lf(["rgba(221,0,0,0)","rgba(221,0,0,0.663)","#FFFFFF","#FFFFFF","rgba(255,0,0,0.671)","rgba(255,0,0,0)"],[0,0.196,0.369,0.678,0.847,1],3.3,-2.3,-3.4,2.4).s().p("EgixAAXIAAgtMBFjAAAIAAAtg");

	this.timeline.addTween(cjs.Tween.get(this.shape).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-222.6,-2.4,445.3,4.8);


(lib.shape53 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.rf(["#FFE8EC","#00A6FF","rgba(80,0,230,0.6)","rgba(69,43,255,0)"],[0.071,0.18,0.388,1],0,0,0,0,0,139.2).s().p("AvLHPQmSjAAAkPQAAkOGSjAQGTjAI4AAQI5AAGSDAQGTDAAAEOQAAEPmTDAQmSDAo5AAQo4AAmTjAg");

	this.timeline.addTween(cjs.Tween.get(this.shape).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-137.4,-65.5,274.9,131);


(lib.shape52 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.rf(["#FFE8EC","#2FC7FF","rgba(0,0,223,0.6)","rgba(69,43,255,0)"],[0,0.231,0.388,1],20.9,17.6,0,20.9,17.6,67.7).s().p("AkckdIBhgTIHXJhg");
	this.shape.setTransform(-27.7,-29.4);

	this.timeline.addTween(cjs.Tween.get(this.shape).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-56.2,-60,57,61.2);


(lib.shape51 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.rf(["#FFE8EC","#2BA5FF","rgba(29,0,230,0.6)","rgba(101,43,255,0)"],[0,0.208,0.388,1],0,0,0,0,0,271.9).s().p("A9pA5QsSgYAAghQAAggMSgYQMSgYRXAAQRYAAMSAYQMSAYAAAgQAAAhsSAYQsSAXxYABQxXgBsSgXg");

	this.timeline.addTween(cjs.Tween.get(this.shape).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-268.4,-8.1,537,16.3);


(lib.shape49 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.shape = new cjs.Shape();
	this.shape.graphics.lf(["rgba(221,0,0,0)","rgba(221,0,0,0.663)","#FFFFFF","#FFFFFF","rgba(255,0,0,0.671)","rgba(255,0,0,0)"],[0,0.196,0.369,0.678,0.847,1],0.1,-14.2,0.1,15.1).s().p("EgpTACSIhSkjMBT6AAAIBREjg");
	this.shape.setTransform(105.5,14.7);

	this.timeline.addTween(cjs.Tween.get(this.shape).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-167.2,0,545.3,29.4);


(lib.Symbol6 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.instance = new lib.Tween3("synched",0);
	this.instance.setTransform(150,95);

	this.instance_1 = new lib.Tween1("synched",0);
	this.instance_1.setTransform(150,90);
	this.instance_1._off = true;

	this.instance_2 = new lib.Tween2("synched",0);
	this.instance_2.setTransform(150,95);
	this.instance_2._off = true;

	this.timeline.addTween(cjs.Tween.get(this.instance).to({_off:true,y:90},4).wait(6).to({_off:false,y:95},0).to({_off:true,y:90},4).wait(6).to({_off:false,y:95},0).to({_off:true,y:90},4).wait(6).to({_off:false,y:95},0).to({_off:true,y:90},4).wait(6).to({_off:false,y:95},0).to({_off:true,y:90},4).wait(6).to({_off:false,y:95},0).to({_off:true,y:90},4).wait(6).to({_off:false,y:95},0).to({_off:true,y:90},4).wait(6).to({_off:false,y:95},0).to({_off:true,y:90},4).wait(6).to({_off:false,y:95},0).to({_off:true,y:90},4).wait(6).to({_off:false,y:95},0).to({_off:true,y:90},4).wait(6).to({_off:false,y:95},0).to({_off:true,y:90},4).wait(6).to({_off:false,y:95},0).to({_off:true,y:90},4).wait(6).to({_off:false,y:95},0).to({_off:true,y:90},4).wait(6).to({_off:false,y:95},0).to({_off:true,y:90},4).wait(6).to({_off:false,y:95},0).to({_off:true,y:90},4).wait(6).to({_off:false,y:95},0).to({_off:true,y:90},4).wait(6).to({_off:false,y:95},0).to({_off:true,y:90},4).wait(6).to({_off:false,y:95},0).to({_off:true,y:90},4).wait(6).to({_off:false,y:95},0).to({_off:true,y:90},4).wait(6).to({_off:false,y:95},0).to({_off:true,y:90},4).wait(6).to({_off:false,y:95},0).to({_off:true,y:90},4).wait(6).to({_off:false,y:95},0).to({_off:true,y:90},4).wait(6).to({_off:false,y:95},0).to({_off:true,y:90},4).wait(6).to({_off:false,y:95},0).to({_off:true,y:90},4).wait(6).to({_off:false,y:95},0).to({_off:true,y:90},4).wait(6).to({_off:false,y:95},0).to({_off:true,y:90},4).wait(6).to({_off:false,y:95},0).to({_off:true,y:90},4).wait(6).to({_off:false,y:95},0).to({_off:true,y:90},4).wait(6).to({_off:false,y:95},0).to({_off:true,y:90},4).wait(6).to({_off:false,y:95},0).to({_off:true,y:90},4).wait(6).to({_off:false,y:95},0).to({_off:true,y:90},4).wait(6).to({_off:false,y:95},0).to({_off:true,y:90},4).wait(6).to({_off:false,y:95},0).to({_off:true,y:90},4).wait(6).to({_off:false,y:95},0).to({_off:true,y:90},4).wait(6).to({_off:false,y:95},0).to({_off:true,y:90},4).wait(6).to({_off:false,y:95},0).to({_off:true,y:90},4).wait(6).to({_off:false,y:95},0).to({_off:true,y:90},4).wait(6).to({_off:false,y:95},0).to({_off:true,y:90},4).wait(6).to({_off:false,y:95},0).to({_off:true,y:90},4).wait(6).to({_off:false,y:95},0).to({_off:true,y:90},4).wait(6));
	this.timeline.addTween(cjs.Tween.get(this.instance_1).to({_off:false},4).to({_off:true,y:95},5).wait(1).to({_off:false,y:90},4).to({_off:true,y:95},5).wait(1).to({_off:false,y:90},4).to({_off:true,y:95},5).wait(1).to({_off:false,y:90},4).to({_off:true,y:95},5).wait(1).to({_off:false,y:90},4).to({_off:true,y:95},5).wait(1).to({_off:false,y:90},4).to({_off:true,y:95},5).wait(1).to({_off:false,y:90},4).to({_off:true,y:95},5).wait(1).to({_off:false,y:90},4).to({_off:true,y:95},5).wait(1).to({_off:false,y:90},4).to({_off:true,y:95},5).wait(1).to({_off:false,y:90},4).to({_off:true,y:95},5).wait(1).to({_off:false,y:90},4).to({_off:true,y:95},5).wait(1).to({_off:false,y:90},4).to({_off:true,y:95},5).wait(1).to({_off:false,y:90},4).to({_off:true,y:95},5).wait(1).to({_off:false,y:90},4).to({_off:true,y:95},5).wait(1).to({_off:false,y:90},4).to({_off:true,y:95},5).wait(1).to({_off:false,y:90},4).to({_off:true,y:95},5).wait(1).to({_off:false,y:90},4).to({_off:true,y:95},5).wait(1).to({_off:false,y:90},4).to({_off:true,y:95},5).wait(1).to({_off:false,y:90},4).to({_off:true,y:95},5).wait(1).to({_off:false,y:90},4).to({_off:true,y:95},5).wait(1).to({_off:false,y:90},4).to({_off:true,y:95},5).wait(1).to({_off:false,y:90},4).to({_off:true,y:95},5).wait(1).to({_off:false,y:90},4).to({_off:true,y:95},5).wait(1).to({_off:false,y:90},4).to({_off:true,y:95},5).wait(1).to({_off:false,y:90},4).to({_off:true,y:95},5).wait(1).to({_off:false,y:90},4).to({_off:true,y:95},5).wait(1).to({_off:false,y:90},4).to({_off:true,y:95},5).wait(1).to({_off:false,y:90},4).to({_off:true,y:95},5).wait(1).to({_off:false,y:90},4).to({_off:true,y:95},5).wait(1).to({_off:false,y:90},4).to({_off:true,y:95},5).wait(1).to({_off:false,y:90},4).to({_off:true,y:95},5).wait(1).to({_off:false,y:90},4).to({_off:true,y:95},5).wait(1).to({_off:false,y:90},4).to({_off:true,y:95},5).wait(1).to({_off:false,y:90},4).to({_off:true,y:95},5).wait(1).to({_off:false,y:90},4).to({_off:true,y:95},5).wait(1).to({_off:false,y:90},4).to({_off:true,y:95},5).wait(1).to({_off:false,y:90},4).to({_off:true,y:95},5).wait(1).to({_off:false,y:90},4).to({_off:true,y:95},5).wait(1).to({_off:false,y:90},4).to({_off:true,y:95},5).wait(1).to({_off:false,y:90},4).to({_off:true,y:95},5).wait(1));
	this.timeline.addTween(cjs.Tween.get(this.instance_2).wait(4).to({_off:false},5).to({_off:true},1).wait(4).to({_off:false},5).to({_off:true},1).wait(4).to({_off:false},5).to({_off:true},1).wait(4).to({_off:false},5).to({_off:true},1).wait(4).to({_off:false},5).to({_off:true},1).wait(4).to({_off:false},5).to({_off:true},1).wait(4).to({_off:false},5).to({_off:true},1).wait(4).to({_off:false},5).to({_off:true},1).wait(4).to({_off:false},5).to({_off:true},1).wait(4).to({_off:false},5).to({_off:true},1).wait(4).to({_off:false},5).to({_off:true},1).wait(4).to({_off:false},5).to({_off:true},1).wait(4).to({_off:false},5).to({_off:true},1).wait(4).to({_off:false},5).to({_off:true},1).wait(4).to({_off:false},5).to({_off:true},1).wait(4).to({_off:false},5).to({_off:true},1).wait(4).to({_off:false},5).to({_off:true},1).wait(4).to({_off:false},5).to({_off:true},1).wait(4).to({_off:false},5).to({_off:true},1).wait(4).to({_off:false},5).to({_off:true},1).wait(4).to({_off:false},5).to({_off:true},1).wait(4).to({_off:false},5).to({_off:true},1).wait(4).to({_off:false},5).to({_off:true},1).wait(4).to({_off:false},5).to({_off:true},1).wait(4).to({_off:false},5).to({_off:true},1).wait(4).to({_off:false},5).to({_off:true},1).wait(4).to({_off:false},5).to({_off:true},1).wait(4).to({_off:false},5).to({_off:true},1).wait(4).to({_off:false},5).to({_off:true},1).wait(4).to({_off:false},5).to({_off:true},1).wait(4).to({_off:false},5).to({_off:true},1).wait(4).to({_off:false},5).to({_off:true},1).wait(4).to({_off:false},5).to({_off:true},1).wait(4).to({_off:false},5).to({_off:true},1).wait(4).to({_off:false},5).to({_off:true},1).wait(4).to({_off:false},5).to({_off:true},1).wait(4).to({_off:false},5).to({_off:true},1).wait(4).to({_off:false},5).to({_off:true},1).wait(4).to({_off:false},5).to({_off:true},1).wait(4).to({_off:false},5).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(0,0,160,208);


(lib.Symbol4 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 2
	this.instance = new lib.Symbol6();
	this.instance.setTransform(148.5,72.5,3.776,2.063,0,0,0,150,95);
	this.instance.filters = [new cjs.BlurFilter(150, 150, 1)];
	this.instance.cache(-2,-2,164,212);

	this.timeline.addTween(cjs.Tween.get(this.instance).to({scaleX:1,scaleY:1},9).wait(92).to({scaleX:3.78,scaleY:2.06},0).to({scaleX:1,scaleY:1},9).wait(92).to({scaleX:3.78,scaleY:2.06},0).to({scaleX:1,scaleY:1},9).wait(92).to({scaleX:3.78,scaleY:2.06},0).to({scaleX:1,scaleY:1},9).wait(92));

	// Layer 1
	this.instance_1 = new lib.Symbol5();
	this.instance_1.setTransform(148.5,72.5,1,1,0,0,0,148.5,72.5);
	this.instance_1.alpha = 0;

	this.timeline.addTween(cjs.Tween.get(this.instance_1).to({_off:true},1).wait(403));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-567.9,-273.4,910,735);


(lib.Symbol1 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 2
	this.instance = new lib.Symbol3();
	this.instance.setTransform(153,299,1,1,0,0,0,150,300);

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(9).to({scaleX:1.04,scaleY:1.05,x:154,y:297},2).to({scaleX:1,scaleY:1,x:153,y:299},3).wait(95).to({scaleX:1.04,scaleY:1.05,x:154,y:297},2).to({scaleX:1,scaleY:1,x:153,y:299},3).wait(95).to({scaleX:1.04,scaleY:1.05,x:154,y:297},2).to({scaleX:1,scaleY:1,x:153,y:299},3).wait(95).to({scaleX:1.04,scaleY:1.05,x:154,y:297},2).to({scaleX:1,scaleY:1,x:153,y:299},3).wait(86));

	// Layer 1
	this.instance_1 = new lib.Symbol2();
	this.instance_1.setTransform(150,299.9,1,1,0,0,0,150,299.9);
	this.instance_1.alpha = 0;

	this.timeline.addTween(cjs.Tween.get(this.instance_1).to({_off:true},1).wait(399));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(0,-1,300,601);


(lib.sprite75 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.instance = new lib.shape74("synched",0);

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-87,-87,174,174);


(lib.sprite57 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.instance = new lib.shape56("synched",0);

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-222.6,-2.4,445.3,4.8);


(lib.sprite54 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 7
	this.instance = new lib.shape53("synched",0);
	this.instance.setTransform(0.7,0.9);

	this.timeline.addTween(cjs.Tween.get(this.instance).to({scaleX:1.34,scaleY:1.34},1).wait(1));

	// Layer 6
	this.instance_1 = new lib.shape52("synched",0);
	this.instance_1.setTransform(0.2,0.2,1.28,1.28,-81.9);

	this.timeline.addTween(cjs.Tween.get(this.instance_1).wait(2));

	// Layer 5
	this.instance_2 = new lib.shape52("synched",0);
	this.instance_2.setTransform(0.2,0.2,1.28,1.28,173.1);

	this.timeline.addTween(cjs.Tween.get(this.instance_2).wait(2));

	// Layer 4
	this.instance_3 = new lib.shape52("synched",0);
	this.instance_3.setTransform(0.2,0.2,0.841,0.841,60);

	this.timeline.addTween(cjs.Tween.get(this.instance_3).wait(2));

	// Layer 3
	this.instance_4 = new lib.shape52("synched",0);
	this.instance_4.setTransform(0.2,0.2,0.811,0.811,0,41,49);

	this.timeline.addTween(cjs.Tween.get(this.instance_4).wait(2));

	// Layer 2
	this.instance_5 = new lib.shape52("synched",0);
	this.instance_5.setTransform(0.2,0.2);

	this.timeline.addTween(cjs.Tween.get(this.instance_5).wait(2));

	// Layer 1
	this.instance_6 = new lib.shape51("synched",0);
	this.instance_6.setTransform(1.4,0.5);

	this.timeline.addTween(cjs.Tween.get(this.instance_6).wait(2));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-267.1,-69.8,537,139.1);


(lib.sprite50 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.instance = new lib.shape49("synched",0);

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-167.2,0,545.3,29.4);


(lib.sprite80 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 7
	this.instance = new lib.shape78("synched",0);
	this.instance.setTransform(-171.5,-37.5,0.744,0.744);
	this.instance.alpha = 0;
	this.instance.filters = [new cjs.ColorFilter(1, 1, 1, 1, 213, 180, 162, 0)];
	this.instance.cache(-151,-151,302,302);

	this.timeline.addTween(cjs.Tween.get(this.instance).to({scaleX:0.75,scaleY:0.75,x:-167.2,y:-37.6,alpha:0.031},1).to({scaleX:0.77,scaleY:0.77,x:-154.2,y:-37.7,alpha:0.109},1).to({scaleX:0.81,scaleY:0.81,x:-132.5,y:-37.9,alpha:0.25},1).to({scaleX:0.86,scaleY:0.86,x:-102.2,y:-38.2,alpha:0.449},1).to({scaleX:0.92,scaleY:0.92,x:-63.2,y:-38.6,alpha:0.699},1).to({scaleX:1,scaleY:1,x:-15.6,y:-39.1,alpha:1},1).to({scaleX:0.5,scaleY:0.5,x:31.4,alpha:0.039},23).wait(1).to({scaleX:0.48,scaleY:0.48,x:33.4,alpha:0},0).wait(12).to({scaleX:0.74,scaleY:0.74,x:-171.5,y:-37.5},0).to({scaleX:0.75,scaleY:0.75,x:-167.2,y:-37.6,alpha:0.031},1).to({scaleX:0.77,scaleY:0.77,x:-154.2,y:-37.7,alpha:0.109},1).to({scaleX:0.81,scaleY:0.81,x:-132.5,y:-37.9,alpha:0.25},1).to({scaleX:0.86,scaleY:0.86,x:-102.2,y:-38.2,alpha:0.449},1).to({scaleX:0.92,scaleY:0.92,x:-63.2,y:-38.6,alpha:0.699},1).to({scaleX:1,scaleY:1,x:-15.6,y:-39.1,alpha:1},1).to({scaleX:0.5,scaleY:0.5,x:31.4,alpha:0.039},23).wait(1).to({scaleX:0.48,scaleY:0.48,x:33.4,alpha:0},0).wait(12).to({scaleX:0.74,scaleY:0.74,x:-171.5,y:-37.5},0).to({scaleX:0.75,scaleY:0.75,x:-167.2,y:-37.6,alpha:0.031},1).to({scaleX:0.77,scaleY:0.77,x:-154.2,y:-37.7,alpha:0.109},1).to({scaleX:0.81,scaleY:0.81,x:-132.5,y:-37.9,alpha:0.25},1).to({scaleX:0.86,scaleY:0.86,x:-102.2,y:-38.2,alpha:0.449},1).to({scaleX:0.92,scaleY:0.92,x:-63.2,y:-38.6,alpha:0.699},1).to({scaleX:1,scaleY:1,x:-15.6,y:-39.1,alpha:1},1).to({scaleX:0.5,scaleY:0.5,x:31.4,alpha:0.039},23).wait(1).to({scaleX:0.48,scaleY:0.48,x:33.4,alpha:0},0).wait(12).to({scaleX:0.74,scaleY:0.74,x:-171.5,y:-37.5},0).to({scaleX:0.75,scaleY:0.75,x:-167.2,y:-37.6,alpha:0.031},1).to({scaleX:0.77,scaleY:0.77,x:-154.2,y:-37.7,alpha:0.109},1).to({scaleX:0.81,scaleY:0.81,x:-132.5,y:-37.9,alpha:0.25},1).to({scaleX:0.86,scaleY:0.86,x:-102.2,y:-38.2,alpha:0.449},1).to({scaleX:0.92,scaleY:0.92,x:-63.2,y:-38.6,alpha:0.699},1).to({scaleX:1,scaleY:1,x:-15.6,y:-39.1,alpha:1},1).to({scaleX:0.5,scaleY:0.5,x:31.4,alpha:0.039},23).wait(1).to({scaleX:0.48,scaleY:0.48,x:33.4,alpha:0},0).wait(12).to({scaleX:0.74,scaleY:0.74,x:-171.5,y:-37.5},0).to({scaleX:0.75,scaleY:0.75,x:-167.2,y:-37.6,alpha:0.031},1).to({scaleX:0.77,scaleY:0.77,x:-154.2,y:-37.7,alpha:0.109},1).to({scaleX:0.81,scaleY:0.81,x:-132.5,y:-37.9,alpha:0.25},1).to({scaleX:0.86,scaleY:0.86,x:-102.2,y:-38.2,alpha:0.449},1).to({scaleX:0.92,scaleY:0.92,x:-63.2,y:-38.6,alpha:0.699},1).to({scaleX:1,scaleY:1,x:-15.6,y:-39.1,alpha:1},1).to({scaleX:0.5,scaleY:0.5,x:31.4,alpha:0.039},23).wait(1).to({scaleX:0.48,scaleY:0.48,x:33.4,alpha:0},0).wait(12).to({scaleX:0.74,scaleY:0.74,x:-171.5,y:-37.5},0).to({scaleX:0.75,scaleY:0.75,x:-167.2,y:-37.6,alpha:0.031},1).to({scaleX:0.77,scaleY:0.77,x:-154.2,y:-37.7,alpha:0.109},1).to({scaleX:0.81,scaleY:0.81,x:-132.5,y:-37.9,alpha:0.25},1).to({scaleX:0.86,scaleY:0.86,x:-102.2,y:-38.2,alpha:0.449},1).to({scaleX:0.92,scaleY:0.92,x:-63.2,y:-38.6,alpha:0.699},1).to({scaleX:1,scaleY:1,x:-15.6,y:-39.1,alpha:1},1).to({scaleX:0.5,scaleY:0.5,x:31.4,alpha:0.039},23).wait(1).to({scaleX:0.48,scaleY:0.48,x:33.4,alpha:0},0).wait(12).to({scaleX:0.74,scaleY:0.74,x:-171.5,y:-37.5},0).to({scaleX:0.75,scaleY:0.75,x:-167.2,y:-37.6,alpha:0.031},1).to({scaleX:0.77,scaleY:0.77,x:-154.2,y:-37.7,alpha:0.109},1).to({scaleX:0.81,scaleY:0.81,x:-132.5,y:-37.9,alpha:0.25},1).to({scaleX:0.86,scaleY:0.86,x:-102.2,y:-38.2,alpha:0.449},1).to({scaleX:0.92,scaleY:0.92,x:-63.2,y:-38.6,alpha:0.699},1).to({scaleX:1,scaleY:1,x:-15.6,y:-39.1,alpha:1},1).to({scaleX:0.5,scaleY:0.5,x:31.4,alpha:0.039},23).wait(1).to({scaleX:0.48,scaleY:0.48,x:33.4,alpha:0},0).wait(12).to({scaleX:0.74,scaleY:0.74,x:-171.5,y:-37.5},0).to({scaleX:0.75,scaleY:0.75,x:-167.2,y:-37.6,alpha:0.031},1).to({scaleX:0.77,scaleY:0.77,x:-154.2,y:-37.7,alpha:0.109},1).to({scaleX:0.81,scaleY:0.81,x:-132.5,y:-37.9,alpha:0.25},1).to({scaleX:0.86,scaleY:0.86,x:-102.2,y:-38.2,alpha:0.449},1).to({scaleX:0.92,scaleY:0.92,x:-63.2,y:-38.6,alpha:0.699},1).to({scaleX:1,scaleY:1,x:-15.6,y:-39.1,alpha:1},1).to({scaleX:0.5,scaleY:0.5,x:31.4,alpha:0.039},23).wait(1).to({scaleX:0.48,scaleY:0.48,x:33.4,alpha:0},0).wait(12).to({scaleX:0.74,scaleY:0.74,x:-171.5,y:-37.5},0).to({scaleX:0.75,scaleY:0.75,x:-167.2,y:-37.6,alpha:0.031},1).to({scaleX:0.77,scaleY:0.77,x:-154.2,y:-37.7,alpha:0.109},1).to({scaleX:0.81,scaleY:0.81,x:-132.5,y:-37.9,alpha:0.25},1).to({scaleX:0.86,scaleY:0.86,x:-102.2,y:-38.2,alpha:0.449},1).to({scaleX:0.92,scaleY:0.92,x:-63.2,y:-38.6,alpha:0.699},1).to({scaleX:1,scaleY:1,x:-15.6,y:-39.1,alpha:1},1).to({scaleX:0.5,scaleY:0.5,x:31.4,alpha:0.039},23).wait(1).to({scaleX:0.48,scaleY:0.48,x:33.4,alpha:0},0).wait(12).to({scaleX:0.74,scaleY:0.74,x:-171.5,y:-37.5},0).to({scaleX:0.75,scaleY:0.75,x:-167.2,y:-37.6,alpha:0.031},1).to({scaleX:0.77,scaleY:0.77,x:-154.2,y:-37.7,alpha:0.109},1).to({scaleX:0.81,scaleY:0.81,x:-132.5,y:-37.9,alpha:0.25},1).to({scaleX:0.86,scaleY:0.86,x:-102.2,y:-38.2,alpha:0.449},1).to({scaleX:0.92,scaleY:0.92,x:-63.2,y:-38.6,alpha:0.699},1).to({scaleX:1,scaleY:1,x:-15.6,y:-39.1,alpha:1},1).to({scaleX:0.5,scaleY:0.5,x:31.4,alpha:0.039},23).wait(1).to({scaleX:0.48,scaleY:0.48,x:33.4,alpha:0},0).wait(12));

	// Layer 6
	this.instance_1 = new lib.shape77("synched",0);
	this.instance_1.setTransform(-152.5,-37.5,0.487,0.487);
	this.instance_1.alpha = 0;
	this.instance_1.filters = [new cjs.ColorFilter(1, 1, 1, 1, 213, 180, 162, 0)];
	this.instance_1.cache(-75,-75,151,151);

	this.timeline.addTween(cjs.Tween.get(this.instance_1).to({scaleX:0.49,scaleY:0.49,x:-153,alpha:0.031},1).to({scaleX:0.51,scaleY:0.51,x:-154.5,alpha:0.109},1).to({scaleX:0.59,scaleY:0.59,x:-160.4,alpha:0.449},2).to({scaleX:0.71,scaleY:0.71,x:-170.2,alpha:1},2).to({x:-186.6,alpha:0.039},26).wait(1).to({x:-187.2,alpha:0},0).wait(9).to({scaleX:0.49,scaleY:0.49,x:-152.5},0).to({scaleX:0.49,scaleY:0.49,x:-153,alpha:0.031},1).to({scaleX:0.51,scaleY:0.51,x:-154.5,alpha:0.109},1).to({scaleX:0.59,scaleY:0.59,x:-160.4,alpha:0.449},2).to({scaleX:0.71,scaleY:0.71,x:-170.2,alpha:1},2).to({x:-186.6,alpha:0.039},26).wait(1).to({x:-187.2,alpha:0},0).wait(9).to({scaleX:0.49,scaleY:0.49,x:-152.5},0).to({scaleX:0.49,scaleY:0.49,x:-153,alpha:0.031},1).to({scaleX:0.51,scaleY:0.51,x:-154.5,alpha:0.109},1).to({scaleX:0.59,scaleY:0.59,x:-160.4,alpha:0.449},2).to({scaleX:0.71,scaleY:0.71,x:-170.2,alpha:1},2).to({x:-186.6,alpha:0.039},26).wait(1).to({x:-187.2,alpha:0},0).wait(9).to({scaleX:0.49,scaleY:0.49,x:-152.5},0).to({scaleX:0.49,scaleY:0.49,x:-153,alpha:0.031},1).to({scaleX:0.51,scaleY:0.51,x:-154.5,alpha:0.109},1).to({scaleX:0.59,scaleY:0.59,x:-160.4,alpha:0.449},2).to({scaleX:0.71,scaleY:0.71,x:-170.2,alpha:1},2).to({x:-186.6,alpha:0.039},26).wait(1).to({x:-187.2,alpha:0},0).wait(9).to({scaleX:0.49,scaleY:0.49,x:-152.5},0).to({scaleX:0.49,scaleY:0.49,x:-153,alpha:0.031},1).to({scaleX:0.51,scaleY:0.51,x:-154.5,alpha:0.109},1).to({scaleX:0.59,scaleY:0.59,x:-160.4,alpha:0.449},2).to({scaleX:0.71,scaleY:0.71,x:-170.2,alpha:1},2).to({x:-186.6,alpha:0.039},26).wait(1).to({x:-187.2,alpha:0},0).wait(9).to({scaleX:0.49,scaleY:0.49,x:-152.5},0).to({scaleX:0.49,scaleY:0.49,x:-153,alpha:0.031},1).to({scaleX:0.51,scaleY:0.51,x:-154.5,alpha:0.109},1).to({scaleX:0.59,scaleY:0.59,x:-160.4,alpha:0.449},2).to({scaleX:0.71,scaleY:0.71,x:-170.2,alpha:1},2).to({x:-186.6,alpha:0.039},26).wait(1).to({x:-187.2,alpha:0},0).wait(9).to({scaleX:0.49,scaleY:0.49,x:-152.5},0).to({scaleX:0.49,scaleY:0.49,x:-153,alpha:0.031},1).to({scaleX:0.51,scaleY:0.51,x:-154.5,alpha:0.109},1).to({scaleX:0.59,scaleY:0.59,x:-160.4,alpha:0.449},2).to({scaleX:0.71,scaleY:0.71,x:-170.2,alpha:1},2).to({x:-186.6,alpha:0.039},26).wait(1).to({x:-187.2,alpha:0},0).wait(9).to({scaleX:0.49,scaleY:0.49,x:-152.5},0).to({scaleX:0.49,scaleY:0.49,x:-153,alpha:0.031},1).to({scaleX:0.51,scaleY:0.51,x:-154.5,alpha:0.109},1).to({scaleX:0.59,scaleY:0.59,x:-160.4,alpha:0.449},2).to({scaleX:0.71,scaleY:0.71,x:-170.2,alpha:1},2).to({x:-186.6,alpha:0.039},26).wait(1).to({x:-187.2,alpha:0},0).wait(9).to({scaleX:0.49,scaleY:0.49,x:-152.5},0).to({scaleX:0.49,scaleY:0.49,x:-153,alpha:0.031},1).to({scaleX:0.51,scaleY:0.51,x:-154.5,alpha:0.109},1).to({scaleX:0.59,scaleY:0.59,x:-160.4,alpha:0.449},2).to({scaleX:0.71,scaleY:0.71,x:-170.2,alpha:1},2).to({x:-186.6,alpha:0.039},26).wait(1).to({x:-187.2,alpha:0},0).wait(9).to({scaleX:0.49,scaleY:0.49,x:-152.5},0).to({scaleX:0.49,scaleY:0.49,x:-153,alpha:0.031},1).to({scaleX:0.51,scaleY:0.51,x:-154.5,alpha:0.109},1).to({scaleX:0.59,scaleY:0.59,x:-160.4,alpha:0.449},2).to({scaleX:0.71,scaleY:0.71,x:-170.2,alpha:1},2).to({x:-186.6,alpha:0.039},26).wait(1).to({x:-187.2,alpha:0},0).wait(9));

	// Layer 5
	this.instance_2 = new lib.shape76("synched",0);
	this.instance_2.setTransform(-150.5,-37.5,0.412,0.412);
	this.instance_2.alpha = 0;
	this.instance_2.filters = [new cjs.ColorFilter(1, 1, 1, 1, 213, 180, 162, 0)];
	this.instance_2.cache(-48,-48,97,97);

	this.timeline.addTween(cjs.Tween.get(this.instance_2).to({scaleX:0.42,scaleY:0.42,x:-150.2,alpha:0.031},1).to({scaleX:0.45,scaleY:0.45,x:-149.3,alpha:0.109},1).to({scaleX:0.49,scaleY:0.49,x:-147.7,alpha:0.25},1).to({scaleX:0.62,scaleY:0.62,x:-142.8,alpha:0.699},2).to({scaleX:0.71,scaleY:0.71,x:-139.4,alpha:1},1).to({scaleX:0.42,scaleY:0.42,x:-133.6,alpha:0.039},28).wait(1).to({scaleX:0.41,scaleY:0.41,x:-133.4,alpha:0},0).wait(7).to({scaleX:0.41,scaleY:0.41,x:-150.5},0).to({scaleX:0.42,scaleY:0.42,x:-150.2,alpha:0.031},1).to({scaleX:0.45,scaleY:0.45,x:-149.3,alpha:0.109},1).to({scaleX:0.49,scaleY:0.49,x:-147.7,alpha:0.25},1).to({scaleX:0.62,scaleY:0.62,x:-142.8,alpha:0.699},2).to({scaleX:0.71,scaleY:0.71,x:-139.4,alpha:1},1).to({scaleX:0.42,scaleY:0.42,x:-133.6,alpha:0.039},28).wait(1).to({scaleX:0.41,scaleY:0.41,x:-133.4,alpha:0},0).wait(7).to({scaleX:0.41,scaleY:0.41,x:-150.5},0).to({scaleX:0.42,scaleY:0.42,x:-150.2,alpha:0.031},1).to({scaleX:0.45,scaleY:0.45,x:-149.3,alpha:0.109},1).to({scaleX:0.49,scaleY:0.49,x:-147.7,alpha:0.25},1).to({scaleX:0.62,scaleY:0.62,x:-142.8,alpha:0.699},2).to({scaleX:0.71,scaleY:0.71,x:-139.4,alpha:1},1).to({scaleX:0.42,scaleY:0.42,x:-133.6,alpha:0.039},28).wait(1).to({scaleX:0.41,scaleY:0.41,x:-133.4,alpha:0},0).wait(7).to({scaleX:0.41,scaleY:0.41,x:-150.5},0).to({scaleX:0.42,scaleY:0.42,x:-150.2,alpha:0.031},1).to({scaleX:0.45,scaleY:0.45,x:-149.3,alpha:0.109},1).to({scaleX:0.49,scaleY:0.49,x:-147.7,alpha:0.25},1).to({scaleX:0.62,scaleY:0.62,x:-142.8,alpha:0.699},2).to({scaleX:0.71,scaleY:0.71,x:-139.4,alpha:1},1).to({scaleX:0.42,scaleY:0.42,x:-133.6,alpha:0.039},28).wait(1).to({scaleX:0.41,scaleY:0.41,x:-133.4,alpha:0},0).wait(7).to({scaleX:0.41,scaleY:0.41,x:-150.5},0).to({scaleX:0.42,scaleY:0.42,x:-150.2,alpha:0.031},1).to({scaleX:0.45,scaleY:0.45,x:-149.3,alpha:0.109},1).to({scaleX:0.49,scaleY:0.49,x:-147.7,alpha:0.25},1).to({scaleX:0.62,scaleY:0.62,x:-142.8,alpha:0.699},2).to({scaleX:0.71,scaleY:0.71,x:-139.4,alpha:1},1).to({scaleX:0.42,scaleY:0.42,x:-133.6,alpha:0.039},28).wait(1).to({scaleX:0.41,scaleY:0.41,x:-133.4,alpha:0},0).wait(7).to({scaleX:0.41,scaleY:0.41,x:-150.5},0).to({scaleX:0.42,scaleY:0.42,x:-150.2,alpha:0.031},1).to({scaleX:0.45,scaleY:0.45,x:-149.3,alpha:0.109},1).to({scaleX:0.49,scaleY:0.49,x:-147.7,alpha:0.25},1).to({scaleX:0.62,scaleY:0.62,x:-142.8,alpha:0.699},2).to({scaleX:0.71,scaleY:0.71,x:-139.4,alpha:1},1).to({scaleX:0.42,scaleY:0.42,x:-133.6,alpha:0.039},28).wait(1).to({scaleX:0.41,scaleY:0.41,x:-133.4,alpha:0},0).wait(7).to({scaleX:0.41,scaleY:0.41,x:-150.5},0).to({scaleX:0.42,scaleY:0.42,x:-150.2,alpha:0.031},1).to({scaleX:0.45,scaleY:0.45,x:-149.3,alpha:0.109},1).to({scaleX:0.49,scaleY:0.49,x:-147.7,alpha:0.25},1).to({scaleX:0.62,scaleY:0.62,x:-142.8,alpha:0.699},2).to({scaleX:0.71,scaleY:0.71,x:-139.4,alpha:1},1).to({scaleX:0.42,scaleY:0.42,x:-133.6,alpha:0.039},28).wait(1).to({scaleX:0.41,scaleY:0.41,x:-133.4,alpha:0},0).wait(7).to({scaleX:0.41,scaleY:0.41,x:-150.5},0).to({scaleX:0.42,scaleY:0.42,x:-150.2,alpha:0.031},1).to({scaleX:0.45,scaleY:0.45,x:-149.3,alpha:0.109},1).to({scaleX:0.49,scaleY:0.49,x:-147.7,alpha:0.25},1).to({scaleX:0.62,scaleY:0.62,x:-142.8,alpha:0.699},2).to({scaleX:0.71,scaleY:0.71,x:-139.4,alpha:1},1).to({scaleX:0.42,scaleY:0.42,x:-133.6,alpha:0.039},28).wait(1).to({scaleX:0.41,scaleY:0.41,x:-133.4,alpha:0},0).wait(7).to({scaleX:0.41,scaleY:0.41,x:-150.5},0).to({scaleX:0.42,scaleY:0.42,x:-150.2,alpha:0.031},1).to({scaleX:0.45,scaleY:0.45,x:-149.3,alpha:0.109},1).to({scaleX:0.49,scaleY:0.49,x:-147.7,alpha:0.25},1).to({scaleX:0.62,scaleY:0.62,x:-142.8,alpha:0.699},2).to({scaleX:0.71,scaleY:0.71,x:-139.4,alpha:1},1).to({scaleX:0.42,scaleY:0.42,x:-133.6,alpha:0.039},28).wait(1).to({scaleX:0.41,scaleY:0.41,x:-133.4,alpha:0},0).wait(7).to({scaleX:0.41,scaleY:0.41,x:-150.5},0).to({scaleX:0.42,scaleY:0.42,x:-150.2,alpha:0.031},1).to({scaleX:0.45,scaleY:0.45,x:-149.3,alpha:0.109},1).to({scaleX:0.49,scaleY:0.49,x:-147.7,alpha:0.25},1).to({scaleX:0.62,scaleY:0.62,x:-142.8,alpha:0.699},2).to({scaleX:0.71,scaleY:0.71,x:-139.4,alpha:1},1).to({scaleX:0.42,scaleY:0.42,x:-133.6,alpha:0.039},28).wait(1).to({scaleX:0.41,scaleY:0.41,x:-133.4,alpha:0},0).wait(7));

	// Layer 3
	this.instance_3 = new lib.sprite75();
	this.instance_3.setTransform(-147.5,-37.5,0.313,0.313);
	this.instance_3.alpha = 0;
	this.instance_3.filters = [new cjs.ColorFilter(1, 1, 1, 1, 213, 180, 162, 0)];
	this.instance_3.cache(-89,-89,178,178);

	this.timeline.addTween(cjs.Tween.get(this.instance_3).to({scaleX:0.32,scaleY:0.32,alpha:0.031},1).to({scaleX:0.36,scaleY:0.36,alpha:0.109},1).to({scaleX:0.41,scaleY:0.41,alpha:0.25},1).to({scaleX:0.49,scaleY:0.49,alpha:0.449},1).to({scaleX:0.71,scaleY:0.71,alpha:1},2).to({scaleX:0.7,scaleY:0.7,y:-37.6,alpha:0.969},1).to({scaleX:0.63,scaleY:0.63,x:-147.6,y:-37.5,alpha:0.77},6).to({scaleX:0.59,scaleY:0.59,alpha:0.672},3).to({scaleX:0.57,scaleY:0.57,x:-147.5,alpha:0.641},1).to({scaleX:0.56,scaleY:0.56,y:-37.6,alpha:0.609},1).to({scaleX:0.53,scaleY:0.53,x:-147.6,alpha:0.512},3).to({scaleX:0.51,scaleY:0.51,alpha:0.48},1).to({scaleX:0.5,scaleY:0.5,alpha:0.449},1).to({scaleX:0.47,scaleY:0.47,x:-147.5,alpha:0.391},2).to({scaleX:0.46,scaleY:0.46,x:-147.6,y:-37.5,alpha:0.359},1).to({scaleX:0.45,scaleY:0.45,x:-147.5,alpha:0.328},1).to({scaleX:0.44,scaleY:0.44,x:-147.6,alpha:0.289},1).to({scaleX:0.39,scaleY:0.39,x:-147.5,alpha:0.16},4).to({scaleX:0.37,scaleY:0.37,alpha:0.129},1).to({scaleX:0.34,scaleY:0.34,alpha:0.031},3).wait(1).to({scaleX:0.32,scaleY:0.32,alpha:0},0).wait(5).to({scaleX:0.31,scaleY:0.31},0).to({scaleX:0.32,scaleY:0.32,alpha:0.031},1).to({scaleX:0.36,scaleY:0.36,alpha:0.109},1).to({scaleX:0.41,scaleY:0.41,alpha:0.25},1).to({scaleX:0.49,scaleY:0.49,alpha:0.449},1).to({scaleX:0.71,scaleY:0.71,alpha:1},2).to({scaleX:0.7,scaleY:0.7,y:-37.6,alpha:0.969},1).to({scaleX:0.63,scaleY:0.63,x:-147.6,y:-37.5,alpha:0.77},6).to({scaleX:0.59,scaleY:0.59,alpha:0.672},3).to({scaleX:0.57,scaleY:0.57,x:-147.5,alpha:0.641},1).to({scaleX:0.56,scaleY:0.56,y:-37.6,alpha:0.609},1).to({scaleX:0.53,scaleY:0.53,x:-147.6,alpha:0.512},3).to({scaleX:0.51,scaleY:0.51,alpha:0.48},1).to({scaleX:0.5,scaleY:0.5,alpha:0.449},1).to({scaleX:0.47,scaleY:0.47,x:-147.5,alpha:0.391},2).to({scaleX:0.46,scaleY:0.46,x:-147.6,y:-37.5,alpha:0.359},1).to({scaleX:0.45,scaleY:0.45,x:-147.5,alpha:0.328},1).to({scaleX:0.44,scaleY:0.44,x:-147.6,alpha:0.289},1).to({scaleX:0.39,scaleY:0.39,x:-147.5,alpha:0.16},4).to({scaleX:0.37,scaleY:0.37,alpha:0.129},1).to({scaleX:0.34,scaleY:0.34,alpha:0.031},3).wait(1).to({scaleX:0.32,scaleY:0.32,alpha:0},0).wait(5).to({scaleX:0.31,scaleY:0.31},0).to({scaleX:0.32,scaleY:0.32,alpha:0.031},1).to({scaleX:0.36,scaleY:0.36,alpha:0.109},1).to({scaleX:0.41,scaleY:0.41,alpha:0.25},1).to({scaleX:0.49,scaleY:0.49,alpha:0.449},1).to({scaleX:0.71,scaleY:0.71,alpha:1},2).to({scaleX:0.7,scaleY:0.7,y:-37.6,alpha:0.969},1).to({scaleX:0.63,scaleY:0.63,x:-147.6,y:-37.5,alpha:0.77},6).to({scaleX:0.59,scaleY:0.59,alpha:0.672},3).to({scaleX:0.57,scaleY:0.57,x:-147.5,alpha:0.641},1).to({scaleX:0.56,scaleY:0.56,y:-37.6,alpha:0.609},1).to({scaleX:0.53,scaleY:0.53,x:-147.6,alpha:0.512},3).to({scaleX:0.51,scaleY:0.51,alpha:0.48},1).to({scaleX:0.5,scaleY:0.5,alpha:0.449},1).to({scaleX:0.47,scaleY:0.47,x:-147.5,alpha:0.391},2).to({scaleX:0.46,scaleY:0.46,x:-147.6,y:-37.5,alpha:0.359},1).to({scaleX:0.45,scaleY:0.45,x:-147.5,alpha:0.328},1).to({scaleX:0.44,scaleY:0.44,x:-147.6,alpha:0.289},1).to({scaleX:0.39,scaleY:0.39,x:-147.5,alpha:0.16},4).to({scaleX:0.37,scaleY:0.37,alpha:0.129},1).to({scaleX:0.34,scaleY:0.34,alpha:0.031},3).wait(1).to({scaleX:0.32,scaleY:0.32,alpha:0},0).wait(5).to({scaleX:0.31,scaleY:0.31},0).to({scaleX:0.32,scaleY:0.32,alpha:0.031},1).to({scaleX:0.36,scaleY:0.36,alpha:0.109},1).to({scaleX:0.41,scaleY:0.41,alpha:0.25},1).to({scaleX:0.49,scaleY:0.49,alpha:0.449},1).to({scaleX:0.71,scaleY:0.71,alpha:1},2).to({scaleX:0.7,scaleY:0.7,y:-37.6,alpha:0.969},1).to({scaleX:0.63,scaleY:0.63,x:-147.6,y:-37.5,alpha:0.77},6).to({scaleX:0.59,scaleY:0.59,alpha:0.672},3).to({scaleX:0.57,scaleY:0.57,x:-147.5,alpha:0.641},1).to({scaleX:0.56,scaleY:0.56,y:-37.6,alpha:0.609},1).to({scaleX:0.53,scaleY:0.53,x:-147.6,alpha:0.512},3).to({scaleX:0.51,scaleY:0.51,alpha:0.48},1).to({scaleX:0.5,scaleY:0.5,alpha:0.449},1).to({scaleX:0.47,scaleY:0.47,x:-147.5,alpha:0.391},2).to({scaleX:0.46,scaleY:0.46,x:-147.6,y:-37.5,alpha:0.359},1).to({scaleX:0.45,scaleY:0.45,x:-147.5,alpha:0.328},1).to({scaleX:0.44,scaleY:0.44,x:-147.6,alpha:0.289},1).to({scaleX:0.39,scaleY:0.39,x:-147.5,alpha:0.16},4).to({scaleX:0.37,scaleY:0.37,alpha:0.129},1).to({scaleX:0.34,scaleY:0.34,alpha:0.031},3).wait(1).to({scaleX:0.32,scaleY:0.32,alpha:0},0).wait(5).to({scaleX:0.31,scaleY:0.31},0).to({scaleX:0.32,scaleY:0.32,alpha:0.031},1).to({scaleX:0.36,scaleY:0.36,alpha:0.109},1).to({scaleX:0.41,scaleY:0.41,alpha:0.25},1).to({scaleX:0.49,scaleY:0.49,alpha:0.449},1).to({scaleX:0.71,scaleY:0.71,alpha:1},2).to({scaleX:0.7,scaleY:0.7,y:-37.6,alpha:0.969},1).to({scaleX:0.63,scaleY:0.63,x:-147.6,y:-37.5,alpha:0.77},6).to({scaleX:0.59,scaleY:0.59,alpha:0.672},3).to({scaleX:0.57,scaleY:0.57,x:-147.5,alpha:0.641},1).to({scaleX:0.56,scaleY:0.56,y:-37.6,alpha:0.609},1).to({scaleX:0.53,scaleY:0.53,x:-147.6,alpha:0.512},3).to({scaleX:0.51,scaleY:0.51,alpha:0.48},1).to({scaleX:0.5,scaleY:0.5,alpha:0.449},1).to({scaleX:0.47,scaleY:0.47,x:-147.5,alpha:0.391},2).to({scaleX:0.46,scaleY:0.46,x:-147.6,y:-37.5,alpha:0.359},1).to({scaleX:0.45,scaleY:0.45,x:-147.5,alpha:0.328},1).to({scaleX:0.44,scaleY:0.44,x:-147.6,alpha:0.289},1).to({scaleX:0.39,scaleY:0.39,x:-147.5,alpha:0.16},4).to({scaleX:0.37,scaleY:0.37,alpha:0.129},1).to({scaleX:0.34,scaleY:0.34,alpha:0.031},3).wait(1).to({scaleX:0.32,scaleY:0.32,alpha:0},0).wait(5).to({scaleX:0.31,scaleY:0.31},0).to({scaleX:0.32,scaleY:0.32,alpha:0.031},1).to({scaleX:0.36,scaleY:0.36,alpha:0.109},1).to({scaleX:0.41,scaleY:0.41,alpha:0.25},1).to({scaleX:0.49,scaleY:0.49,alpha:0.449},1).to({scaleX:0.71,scaleY:0.71,alpha:1},2).to({scaleX:0.7,scaleY:0.7,y:-37.6,alpha:0.969},1).to({scaleX:0.63,scaleY:0.63,x:-147.6,y:-37.5,alpha:0.77},6).to({scaleX:0.59,scaleY:0.59,alpha:0.672},3).to({scaleX:0.57,scaleY:0.57,x:-147.5,alpha:0.641},1).to({scaleX:0.56,scaleY:0.56,y:-37.6,alpha:0.609},1).to({scaleX:0.53,scaleY:0.53,x:-147.6,alpha:0.512},3).to({scaleX:0.51,scaleY:0.51,alpha:0.48},1).to({scaleX:0.5,scaleY:0.5,alpha:0.449},1).to({scaleX:0.47,scaleY:0.47,x:-147.5,alpha:0.391},2).to({scaleX:0.46,scaleY:0.46,x:-147.6,y:-37.5,alpha:0.359},1).to({scaleX:0.45,scaleY:0.45,x:-147.5,alpha:0.328},1).to({scaleX:0.44,scaleY:0.44,x:-147.6,alpha:0.289},1).to({scaleX:0.39,scaleY:0.39,x:-147.5,alpha:0.16},4).to({scaleX:0.37,scaleY:0.37,alpha:0.129},1).to({scaleX:0.34,scaleY:0.34,alpha:0.031},3).wait(1).to({scaleX:0.32,scaleY:0.32,alpha:0},0).wait(5).to({scaleX:0.31,scaleY:0.31},0).to({scaleX:0.32,scaleY:0.32,alpha:0.031},1).to({scaleX:0.36,scaleY:0.36,alpha:0.109},1).to({scaleX:0.41,scaleY:0.41,alpha:0.25},1).to({scaleX:0.49,scaleY:0.49,alpha:0.449},1).to({scaleX:0.71,scaleY:0.71,alpha:1},2).to({scaleX:0.7,scaleY:0.7,y:-37.6,alpha:0.969},1).to({scaleX:0.63,scaleY:0.63,x:-147.6,y:-37.5,alpha:0.77},6).to({scaleX:0.59,scaleY:0.59,alpha:0.672},3).to({scaleX:0.57,scaleY:0.57,x:-147.5,alpha:0.641},1).to({scaleX:0.56,scaleY:0.56,y:-37.6,alpha:0.609},1).to({scaleX:0.53,scaleY:0.53,x:-147.6,alpha:0.512},3).to({scaleX:0.51,scaleY:0.51,alpha:0.48},1).to({scaleX:0.5,scaleY:0.5,alpha:0.449},1).to({scaleX:0.47,scaleY:0.47,x:-147.5,alpha:0.391},2).to({scaleX:0.46,scaleY:0.46,x:-147.6,y:-37.5,alpha:0.359},1).to({scaleX:0.45,scaleY:0.45,x:-147.5,alpha:0.328},1).to({scaleX:0.44,scaleY:0.44,x:-147.6,alpha:0.289},1).to({scaleX:0.39,scaleY:0.39,x:-147.5,alpha:0.16},4).to({scaleX:0.37,scaleY:0.37,alpha:0.129},1).to({scaleX:0.34,scaleY:0.34,alpha:0.031},3).wait(1).to({scaleX:0.32,scaleY:0.32,alpha:0},0).wait(5).to({scaleX:0.31,scaleY:0.31},0).to({scaleX:0.32,scaleY:0.32,alpha:0.031},1).to({scaleX:0.36,scaleY:0.36,alpha:0.109},1).to({scaleX:0.41,scaleY:0.41,alpha:0.25},1).to({scaleX:0.49,scaleY:0.49,alpha:0.449},1).to({scaleX:0.71,scaleY:0.71,alpha:1},2).to({scaleX:0.7,scaleY:0.7,y:-37.6,alpha:0.969},1).to({scaleX:0.63,scaleY:0.63,x:-147.6,y:-37.5,alpha:0.77},6).to({scaleX:0.59,scaleY:0.59,alpha:0.672},3).to({scaleX:0.57,scaleY:0.57,x:-147.5,alpha:0.641},1).to({scaleX:0.56,scaleY:0.56,y:-37.6,alpha:0.609},1).to({scaleX:0.53,scaleY:0.53,x:-147.6,alpha:0.512},3).to({scaleX:0.51,scaleY:0.51,alpha:0.48},1).to({scaleX:0.5,scaleY:0.5,alpha:0.449},1).to({scaleX:0.47,scaleY:0.47,x:-147.5,alpha:0.391},2).to({scaleX:0.46,scaleY:0.46,x:-147.6,y:-37.5,alpha:0.359},1).to({scaleX:0.45,scaleY:0.45,x:-147.5,alpha:0.328},1).to({scaleX:0.44,scaleY:0.44,x:-147.6,alpha:0.289},1).to({scaleX:0.39,scaleY:0.39,x:-147.5,alpha:0.16},4).to({scaleX:0.37,scaleY:0.37,alpha:0.129},1).to({scaleX:0.34,scaleY:0.34,alpha:0.031},3).wait(1).to({scaleX:0.32,scaleY:0.32,alpha:0},0).wait(5).to({scaleX:0.31,scaleY:0.31},0).to({scaleX:0.32,scaleY:0.32,alpha:0.031},1).to({scaleX:0.36,scaleY:0.36,alpha:0.109},1).to({scaleX:0.41,scaleY:0.41,alpha:0.25},1).to({scaleX:0.49,scaleY:0.49,alpha:0.449},1).to({scaleX:0.71,scaleY:0.71,alpha:1},2).to({scaleX:0.7,scaleY:0.7,y:-37.6,alpha:0.969},1).to({scaleX:0.63,scaleY:0.63,x:-147.6,y:-37.5,alpha:0.77},6).to({scaleX:0.59,scaleY:0.59,alpha:0.672},3).to({scaleX:0.57,scaleY:0.57,x:-147.5,alpha:0.641},1).to({scaleX:0.56,scaleY:0.56,y:-37.6,alpha:0.609},1).to({scaleX:0.53,scaleY:0.53,x:-147.6,alpha:0.512},3).to({scaleX:0.51,scaleY:0.51,alpha:0.48},1).to({scaleX:0.5,scaleY:0.5,alpha:0.449},1).to({scaleX:0.47,scaleY:0.47,x:-147.5,alpha:0.391},2).to({scaleX:0.46,scaleY:0.46,x:-147.6,y:-37.5,alpha:0.359},1).to({scaleX:0.45,scaleY:0.45,x:-147.5,alpha:0.328},1).to({scaleX:0.44,scaleY:0.44,x:-147.6,alpha:0.289},1).to({scaleX:0.39,scaleY:0.39,x:-147.5,alpha:0.16},4).to({scaleX:0.37,scaleY:0.37,alpha:0.129},1).to({scaleX:0.34,scaleY:0.34,alpha:0.031},3).wait(1).to({scaleX:0.32,scaleY:0.32,alpha:0},0).wait(5).to({scaleX:0.31,scaleY:0.31},0).to({scaleX:0.32,scaleY:0.32,alpha:0.031},1).to({scaleX:0.36,scaleY:0.36,alpha:0.109},1).to({scaleX:0.41,scaleY:0.41,alpha:0.25},1).to({scaleX:0.49,scaleY:0.49,alpha:0.449},1).to({scaleX:0.71,scaleY:0.71,alpha:1},2).to({scaleX:0.7,scaleY:0.7,y:-37.6,alpha:0.969},1).to({scaleX:0.63,scaleY:0.63,x:-147.6,y:-37.5,alpha:0.77},6).to({scaleX:0.59,scaleY:0.59,alpha:0.672},3).to({scaleX:0.57,scaleY:0.57,x:-147.5,alpha:0.641},1).to({scaleX:0.56,scaleY:0.56,y:-37.6,alpha:0.609},1).to({scaleX:0.53,scaleY:0.53,x:-147.6,alpha:0.512},3).to({scaleX:0.51,scaleY:0.51,alpha:0.48},1).to({scaleX:0.5,scaleY:0.5,alpha:0.449},1).to({scaleX:0.47,scaleY:0.47,x:-147.5,alpha:0.391},2).to({scaleX:0.46,scaleY:0.46,x:-147.6,y:-37.5,alpha:0.359},1).to({scaleX:0.45,scaleY:0.45,x:-147.5,alpha:0.328},1).to({scaleX:0.44,scaleY:0.44,x:-147.6,alpha:0.289},1).to({scaleX:0.39,scaleY:0.39,x:-147.5,alpha:0.16},4).to({scaleX:0.37,scaleY:0.37,alpha:0.129},1).to({scaleX:0.34,scaleY:0.34,alpha:0.031},3).wait(1).to({scaleX:0.32,scaleY:0.32,alpha:0},0).wait(5));

	// Layer 2
	this.instance_4 = new lib.shape79("synched",0);
	this.instance_4.setTransform(-147.5,-37.5,1.137,1.137,32.6);
	this.instance_4.alpha = 0;
	this.instance_4._off = true;
	this.instance_4.filters = [new cjs.ColorFilter(1, 1, 1, 1, 213, 180, 162, 0)];
	this.instance_4.cache(-70,-70,140,140);

	this.timeline.addTween(cjs.Tween.get(this.instance_4).wait(3).to({_off:false},0).to({scaleX:1.17,scaleY:1.17,rotation:42.8,alpha:0.102},1).to({scaleX:1.2,scaleY:1.2,rotation:53.1,alpha:0.199},1).to({scaleX:1.23,scaleY:1.23,rotation:63.2,x:-147.6,y:-37.4,alpha:0.301},1).to({scaleX:1.26,scaleY:1.26,rotation:73.4,x:-147.5,y:-37.6,alpha:0.398},1).to({scaleX:1.3,scaleY:1.3,rotation:83.5,y:-37.5,alpha:0.5},1).to({scaleX:1.33,scaleY:1.33,rotation:93.5,alpha:0.602},1).to({scaleX:1.36,scaleY:1.36,rotation:103.8,alpha:0.699},1).to({scaleX:1.39,scaleY:1.39,rotation:113.8,x:-147.6,alpha:0.801},1).to({scaleX:1.43,scaleY:1.43,rotation:124.1,alpha:0.898},1).to({scaleX:1.46,scaleY:1.46,rotation:134.4,x:-147.5,alpha:1},1).to({scaleX:1.43,scaleY:1.43,rotation:137.1,x:-147.6,alpha:0.949},1).to({scaleX:1.41,scaleY:1.41,rotation:139.9,alpha:0.891},1).to({scaleX:1.38,scaleY:1.38,rotation:142.4,x:-147.5,alpha:0.84},1).to({scaleX:1.36,scaleY:1.36,rotation:145.2,alpha:0.789},1).to({scaleX:1.33,scaleY:1.33,rotation:147.9,y:-37.6,alpha:0.738},1).to({scaleX:1.31,scaleY:1.31,rotation:150.7,y:-37.5,alpha:0.68},1).to({scaleX:1.28,scaleY:1.28,rotation:153.4,alpha:0.629},1).to({scaleX:1.26,scaleY:1.26,rotation:156.2,x:-147.6,alpha:0.578},1).to({scaleX:1.23,scaleY:1.23,rotation:158.9,x:-147.5,alpha:0.531},1).to({scaleX:1.21,scaleY:1.21,rotation:161.4,alpha:0.48},1).to({scaleX:1.19,scaleY:1.19,rotation:164.2,x:-147.6,y:-37.6,alpha:0.422},1).to({scaleX:1.16,scaleY:1.16,rotation:166.7,x:-147.5,alpha:0.371},1).to({scaleX:1.14,scaleY:1.14,rotation:169.5,y:-37.5,alpha:0.32},1).to({scaleX:1.11,scaleY:1.11,rotation:172.2,alpha:0.27},1).to({scaleX:1.09,scaleY:1.09,rotation:174.9,x:-147.6,alpha:0.211},1).to({scaleX:1.07,scaleY:1.07,rotation:177.5,x:-147.5,alpha:0.16},1).to({scaleX:1.04,scaleY:1.04,rotation:180,alpha:0.109},1).to({scaleX:1.02,scaleY:1.02,rotation:182.8,x:-147.6,alpha:0.051},1).wait(1).to({scaleX:0.99,scaleY:0.99,rotation:185.5,x:-147.5,alpha:0},0).to({_off:true},10).wait(3).to({_off:false,scaleX:1.14,scaleY:1.14,rotation:32.6},0).to({scaleX:1.17,scaleY:1.17,rotation:42.8,alpha:0.102},1).to({scaleX:1.2,scaleY:1.2,rotation:53.1,alpha:0.199},1).to({scaleX:1.23,scaleY:1.23,rotation:63.2,x:-147.6,y:-37.4,alpha:0.301},1).to({scaleX:1.26,scaleY:1.26,rotation:73.4,x:-147.5,y:-37.6,alpha:0.398},1).to({scaleX:1.3,scaleY:1.3,rotation:83.5,y:-37.5,alpha:0.5},1).to({scaleX:1.33,scaleY:1.33,rotation:93.5,alpha:0.602},1).to({scaleX:1.36,scaleY:1.36,rotation:103.8,alpha:0.699},1).to({scaleX:1.39,scaleY:1.39,rotation:113.8,x:-147.6,alpha:0.801},1).to({scaleX:1.43,scaleY:1.43,rotation:124.1,alpha:0.898},1).to({scaleX:1.46,scaleY:1.46,rotation:134.4,x:-147.5,alpha:1},1).to({scaleX:1.43,scaleY:1.43,rotation:137.1,x:-147.6,alpha:0.949},1).to({scaleX:1.41,scaleY:1.41,rotation:139.9,alpha:0.891},1).to({scaleX:1.38,scaleY:1.38,rotation:142.4,x:-147.5,alpha:0.84},1).to({scaleX:1.36,scaleY:1.36,rotation:145.2,alpha:0.789},1).to({scaleX:1.33,scaleY:1.33,rotation:147.9,y:-37.6,alpha:0.738},1).to({scaleX:1.31,scaleY:1.31,rotation:150.7,y:-37.5,alpha:0.68},1).to({scaleX:1.28,scaleY:1.28,rotation:153.4,alpha:0.629},1).to({scaleX:1.26,scaleY:1.26,rotation:156.2,x:-147.6,alpha:0.578},1).to({scaleX:1.23,scaleY:1.23,rotation:158.9,x:-147.5,alpha:0.531},1).to({scaleX:1.21,scaleY:1.21,rotation:161.4,alpha:0.48},1).to({scaleX:1.19,scaleY:1.19,rotation:164.2,x:-147.6,y:-37.6,alpha:0.422},1).to({scaleX:1.16,scaleY:1.16,rotation:166.7,x:-147.5,alpha:0.371},1).to({scaleX:1.14,scaleY:1.14,rotation:169.5,y:-37.5,alpha:0.32},1).to({scaleX:1.11,scaleY:1.11,rotation:172.2,alpha:0.27},1).to({scaleX:1.09,scaleY:1.09,rotation:174.9,x:-147.6,alpha:0.211},1).to({scaleX:1.07,scaleY:1.07,rotation:177.5,x:-147.5,alpha:0.16},1).to({scaleX:1.04,scaleY:1.04,rotation:180,alpha:0.109},1).to({scaleX:1.02,scaleY:1.02,rotation:182.8,x:-147.6,alpha:0.051},1).wait(1).to({scaleX:0.99,scaleY:0.99,rotation:185.5,x:-147.5,alpha:0},0).to({_off:true},10).wait(3).to({_off:false,scaleX:1.14,scaleY:1.14,rotation:32.6},0).to({scaleX:1.17,scaleY:1.17,rotation:42.8,alpha:0.102},1).to({scaleX:1.2,scaleY:1.2,rotation:53.1,alpha:0.199},1).to({scaleX:1.23,scaleY:1.23,rotation:63.2,x:-147.6,y:-37.4,alpha:0.301},1).to({scaleX:1.26,scaleY:1.26,rotation:73.4,x:-147.5,y:-37.6,alpha:0.398},1).to({scaleX:1.3,scaleY:1.3,rotation:83.5,y:-37.5,alpha:0.5},1).to({scaleX:1.33,scaleY:1.33,rotation:93.5,alpha:0.602},1).to({scaleX:1.36,scaleY:1.36,rotation:103.8,alpha:0.699},1).to({scaleX:1.39,scaleY:1.39,rotation:113.8,x:-147.6,alpha:0.801},1).to({scaleX:1.43,scaleY:1.43,rotation:124.1,alpha:0.898},1).to({scaleX:1.46,scaleY:1.46,rotation:134.4,x:-147.5,alpha:1},1).to({scaleX:1.43,scaleY:1.43,rotation:137.1,x:-147.6,alpha:0.949},1).to({scaleX:1.41,scaleY:1.41,rotation:139.9,alpha:0.891},1).to({scaleX:1.38,scaleY:1.38,rotation:142.4,x:-147.5,alpha:0.84},1).to({scaleX:1.36,scaleY:1.36,rotation:145.2,alpha:0.789},1).to({scaleX:1.33,scaleY:1.33,rotation:147.9,y:-37.6,alpha:0.738},1).to({scaleX:1.31,scaleY:1.31,rotation:150.7,y:-37.5,alpha:0.68},1).to({scaleX:1.28,scaleY:1.28,rotation:153.4,alpha:0.629},1).to({scaleX:1.26,scaleY:1.26,rotation:156.2,x:-147.6,alpha:0.578},1).to({scaleX:1.23,scaleY:1.23,rotation:158.9,x:-147.5,alpha:0.531},1).to({scaleX:1.21,scaleY:1.21,rotation:161.4,alpha:0.48},1).to({scaleX:1.19,scaleY:1.19,rotation:164.2,x:-147.6,y:-37.6,alpha:0.422},1).to({scaleX:1.16,scaleY:1.16,rotation:166.7,x:-147.5,alpha:0.371},1).to({scaleX:1.14,scaleY:1.14,rotation:169.5,y:-37.5,alpha:0.32},1).to({scaleX:1.11,scaleY:1.11,rotation:172.2,alpha:0.27},1).to({scaleX:1.09,scaleY:1.09,rotation:174.9,x:-147.6,alpha:0.211},1).to({scaleX:1.07,scaleY:1.07,rotation:177.5,x:-147.5,alpha:0.16},1).to({scaleX:1.04,scaleY:1.04,rotation:180,alpha:0.109},1).to({scaleX:1.02,scaleY:1.02,rotation:182.8,x:-147.6,alpha:0.051},1).wait(1).to({scaleX:0.99,scaleY:0.99,rotation:185.5,x:-147.5,alpha:0},0).to({_off:true},10).wait(3).to({_off:false,scaleX:1.14,scaleY:1.14,rotation:32.6},0).to({scaleX:1.17,scaleY:1.17,rotation:42.8,alpha:0.102},1).to({scaleX:1.2,scaleY:1.2,rotation:53.1,alpha:0.199},1).to({scaleX:1.23,scaleY:1.23,rotation:63.2,x:-147.6,y:-37.4,alpha:0.301},1).to({scaleX:1.26,scaleY:1.26,rotation:73.4,x:-147.5,y:-37.6,alpha:0.398},1).to({scaleX:1.3,scaleY:1.3,rotation:83.5,y:-37.5,alpha:0.5},1).to({scaleX:1.33,scaleY:1.33,rotation:93.5,alpha:0.602},1).to({scaleX:1.36,scaleY:1.36,rotation:103.8,alpha:0.699},1).to({scaleX:1.39,scaleY:1.39,rotation:113.8,x:-147.6,alpha:0.801},1).to({scaleX:1.43,scaleY:1.43,rotation:124.1,alpha:0.898},1).to({scaleX:1.46,scaleY:1.46,rotation:134.4,x:-147.5,alpha:1},1).to({scaleX:1.43,scaleY:1.43,rotation:137.1,x:-147.6,alpha:0.949},1).to({scaleX:1.41,scaleY:1.41,rotation:139.9,alpha:0.891},1).to({scaleX:1.38,scaleY:1.38,rotation:142.4,x:-147.5,alpha:0.84},1).to({scaleX:1.36,scaleY:1.36,rotation:145.2,alpha:0.789},1).to({scaleX:1.33,scaleY:1.33,rotation:147.9,y:-37.6,alpha:0.738},1).to({scaleX:1.31,scaleY:1.31,rotation:150.7,y:-37.5,alpha:0.68},1).to({scaleX:1.28,scaleY:1.28,rotation:153.4,alpha:0.629},1).to({scaleX:1.26,scaleY:1.26,rotation:156.2,x:-147.6,alpha:0.578},1).to({scaleX:1.23,scaleY:1.23,rotation:158.9,x:-147.5,alpha:0.531},1).to({scaleX:1.21,scaleY:1.21,rotation:161.4,alpha:0.48},1).to({scaleX:1.19,scaleY:1.19,rotation:164.2,x:-147.6,y:-37.6,alpha:0.422},1).to({scaleX:1.16,scaleY:1.16,rotation:166.7,x:-147.5,alpha:0.371},1).to({scaleX:1.14,scaleY:1.14,rotation:169.5,y:-37.5,alpha:0.32},1).to({scaleX:1.11,scaleY:1.11,rotation:172.2,alpha:0.27},1).to({scaleX:1.09,scaleY:1.09,rotation:174.9,x:-147.6,alpha:0.211},1).to({scaleX:1.07,scaleY:1.07,rotation:177.5,x:-147.5,alpha:0.16},1).to({scaleX:1.04,scaleY:1.04,rotation:180,alpha:0.109},1).to({scaleX:1.02,scaleY:1.02,rotation:182.8,x:-147.6,alpha:0.051},1).wait(1).to({scaleX:0.99,scaleY:0.99,rotation:185.5,x:-147.5,alpha:0},0).to({_off:true},10).wait(3).to({_off:false,scaleX:1.14,scaleY:1.14,rotation:32.6},0).to({scaleX:1.17,scaleY:1.17,rotation:42.8,alpha:0.102},1).to({scaleX:1.2,scaleY:1.2,rotation:53.1,alpha:0.199},1).to({scaleX:1.23,scaleY:1.23,rotation:63.2,x:-147.6,y:-37.4,alpha:0.301},1).to({scaleX:1.26,scaleY:1.26,rotation:73.4,x:-147.5,y:-37.6,alpha:0.398},1).to({scaleX:1.3,scaleY:1.3,rotation:83.5,y:-37.5,alpha:0.5},1).to({scaleX:1.33,scaleY:1.33,rotation:93.5,alpha:0.602},1).to({scaleX:1.36,scaleY:1.36,rotation:103.8,alpha:0.699},1).to({scaleX:1.39,scaleY:1.39,rotation:113.8,x:-147.6,alpha:0.801},1).to({scaleX:1.43,scaleY:1.43,rotation:124.1,alpha:0.898},1).to({scaleX:1.46,scaleY:1.46,rotation:134.4,x:-147.5,alpha:1},1).to({scaleX:1.43,scaleY:1.43,rotation:137.1,x:-147.6,alpha:0.949},1).to({scaleX:1.41,scaleY:1.41,rotation:139.9,alpha:0.891},1).to({scaleX:1.38,scaleY:1.38,rotation:142.4,x:-147.5,alpha:0.84},1).to({scaleX:1.36,scaleY:1.36,rotation:145.2,alpha:0.789},1).to({scaleX:1.33,scaleY:1.33,rotation:147.9,y:-37.6,alpha:0.738},1).to({scaleX:1.31,scaleY:1.31,rotation:150.7,y:-37.5,alpha:0.68},1).to({scaleX:1.28,scaleY:1.28,rotation:153.4,alpha:0.629},1).to({scaleX:1.26,scaleY:1.26,rotation:156.2,x:-147.6,alpha:0.578},1).to({scaleX:1.23,scaleY:1.23,rotation:158.9,x:-147.5,alpha:0.531},1).to({scaleX:1.21,scaleY:1.21,rotation:161.4,alpha:0.48},1).to({scaleX:1.19,scaleY:1.19,rotation:164.2,x:-147.6,y:-37.6,alpha:0.422},1).to({scaleX:1.16,scaleY:1.16,rotation:166.7,x:-147.5,alpha:0.371},1).to({scaleX:1.14,scaleY:1.14,rotation:169.5,y:-37.5,alpha:0.32},1).to({scaleX:1.11,scaleY:1.11,rotation:172.2,alpha:0.27},1).to({scaleX:1.09,scaleY:1.09,rotation:174.9,x:-147.6,alpha:0.211},1).to({scaleX:1.07,scaleY:1.07,rotation:177.5,x:-147.5,alpha:0.16},1).to({scaleX:1.04,scaleY:1.04,rotation:180,alpha:0.109},1).to({scaleX:1.02,scaleY:1.02,rotation:182.8,x:-147.6,alpha:0.051},1).wait(1).to({scaleX:0.99,scaleY:0.99,rotation:185.5,x:-147.5,alpha:0},0).to({_off:true},10).wait(3).to({_off:false,scaleX:1.14,scaleY:1.14,rotation:32.6},0).to({scaleX:1.17,scaleY:1.17,rotation:42.8,alpha:0.102},1).to({scaleX:1.2,scaleY:1.2,rotation:53.1,alpha:0.199},1).to({scaleX:1.23,scaleY:1.23,rotation:63.2,x:-147.6,y:-37.4,alpha:0.301},1).to({scaleX:1.26,scaleY:1.26,rotation:73.4,x:-147.5,y:-37.6,alpha:0.398},1).to({scaleX:1.3,scaleY:1.3,rotation:83.5,y:-37.5,alpha:0.5},1).to({scaleX:1.33,scaleY:1.33,rotation:93.5,alpha:0.602},1).to({scaleX:1.36,scaleY:1.36,rotation:103.8,alpha:0.699},1).to({scaleX:1.39,scaleY:1.39,rotation:113.8,x:-147.6,alpha:0.801},1).to({scaleX:1.43,scaleY:1.43,rotation:124.1,alpha:0.898},1).to({scaleX:1.46,scaleY:1.46,rotation:134.4,x:-147.5,alpha:1},1).to({scaleX:1.43,scaleY:1.43,rotation:137.1,x:-147.6,alpha:0.949},1).to({scaleX:1.41,scaleY:1.41,rotation:139.9,alpha:0.891},1).to({scaleX:1.38,scaleY:1.38,rotation:142.4,x:-147.5,alpha:0.84},1).to({scaleX:1.36,scaleY:1.36,rotation:145.2,alpha:0.789},1).to({scaleX:1.33,scaleY:1.33,rotation:147.9,y:-37.6,alpha:0.738},1).to({scaleX:1.31,scaleY:1.31,rotation:150.7,y:-37.5,alpha:0.68},1).to({scaleX:1.28,scaleY:1.28,rotation:153.4,alpha:0.629},1).to({scaleX:1.26,scaleY:1.26,rotation:156.2,x:-147.6,alpha:0.578},1).to({scaleX:1.23,scaleY:1.23,rotation:158.9,x:-147.5,alpha:0.531},1).to({scaleX:1.21,scaleY:1.21,rotation:161.4,alpha:0.48},1).to({scaleX:1.19,scaleY:1.19,rotation:164.2,x:-147.6,y:-37.6,alpha:0.422},1).to({scaleX:1.16,scaleY:1.16,rotation:166.7,x:-147.5,alpha:0.371},1).to({scaleX:1.14,scaleY:1.14,rotation:169.5,y:-37.5,alpha:0.32},1).to({scaleX:1.11,scaleY:1.11,rotation:172.2,alpha:0.27},1).to({scaleX:1.09,scaleY:1.09,rotation:174.9,x:-147.6,alpha:0.211},1).to({scaleX:1.07,scaleY:1.07,rotation:177.5,x:-147.5,alpha:0.16},1).to({scaleX:1.04,scaleY:1.04,rotation:180,alpha:0.109},1).to({scaleX:1.02,scaleY:1.02,rotation:182.8,x:-147.6,alpha:0.051},1).wait(1).to({scaleX:0.99,scaleY:0.99,rotation:185.5,x:-147.5,alpha:0},0).to({_off:true},10).wait(3).to({_off:false,scaleX:1.14,scaleY:1.14,rotation:32.6},0).to({scaleX:1.17,scaleY:1.17,rotation:42.8,alpha:0.102},1).to({scaleX:1.2,scaleY:1.2,rotation:53.1,alpha:0.199},1).to({scaleX:1.23,scaleY:1.23,rotation:63.2,x:-147.6,y:-37.4,alpha:0.301},1).to({scaleX:1.26,scaleY:1.26,rotation:73.4,x:-147.5,y:-37.6,alpha:0.398},1).to({scaleX:1.3,scaleY:1.3,rotation:83.5,y:-37.5,alpha:0.5},1).to({scaleX:1.33,scaleY:1.33,rotation:93.5,alpha:0.602},1).to({scaleX:1.36,scaleY:1.36,rotation:103.8,alpha:0.699},1).to({scaleX:1.39,scaleY:1.39,rotation:113.8,x:-147.6,alpha:0.801},1).to({scaleX:1.43,scaleY:1.43,rotation:124.1,alpha:0.898},1).to({scaleX:1.46,scaleY:1.46,rotation:134.4,x:-147.5,alpha:1},1).to({scaleX:1.43,scaleY:1.43,rotation:137.1,x:-147.6,alpha:0.949},1).to({scaleX:1.41,scaleY:1.41,rotation:139.9,alpha:0.891},1).to({scaleX:1.38,scaleY:1.38,rotation:142.4,x:-147.5,alpha:0.84},1).to({scaleX:1.36,scaleY:1.36,rotation:145.2,alpha:0.789},1).to({scaleX:1.33,scaleY:1.33,rotation:147.9,y:-37.6,alpha:0.738},1).to({scaleX:1.31,scaleY:1.31,rotation:150.7,y:-37.5,alpha:0.68},1).to({scaleX:1.28,scaleY:1.28,rotation:153.4,alpha:0.629},1).to({scaleX:1.26,scaleY:1.26,rotation:156.2,x:-147.6,alpha:0.578},1).to({scaleX:1.23,scaleY:1.23,rotation:158.9,x:-147.5,alpha:0.531},1).to({scaleX:1.21,scaleY:1.21,rotation:161.4,alpha:0.48},1).to({scaleX:1.19,scaleY:1.19,rotation:164.2,x:-147.6,y:-37.6,alpha:0.422},1).to({scaleX:1.16,scaleY:1.16,rotation:166.7,x:-147.5,alpha:0.371},1).to({scaleX:1.14,scaleY:1.14,rotation:169.5,y:-37.5,alpha:0.32},1).to({scaleX:1.11,scaleY:1.11,rotation:172.2,alpha:0.27},1).to({scaleX:1.09,scaleY:1.09,rotation:174.9,x:-147.6,alpha:0.211},1).to({scaleX:1.07,scaleY:1.07,rotation:177.5,x:-147.5,alpha:0.16},1).to({scaleX:1.04,scaleY:1.04,rotation:180,alpha:0.109},1).to({scaleX:1.02,scaleY:1.02,rotation:182.8,x:-147.6,alpha:0.051},1).wait(1).to({scaleX:0.99,scaleY:0.99,rotation:185.5,x:-147.5,alpha:0},0).to({_off:true},10).wait(3).to({_off:false,scaleX:1.14,scaleY:1.14,rotation:32.6},0).to({scaleX:1.17,scaleY:1.17,rotation:42.8,alpha:0.102},1).to({scaleX:1.2,scaleY:1.2,rotation:53.1,alpha:0.199},1).to({scaleX:1.23,scaleY:1.23,rotation:63.2,x:-147.6,y:-37.4,alpha:0.301},1).to({scaleX:1.26,scaleY:1.26,rotation:73.4,x:-147.5,y:-37.6,alpha:0.398},1).to({scaleX:1.3,scaleY:1.3,rotation:83.5,y:-37.5,alpha:0.5},1).to({scaleX:1.33,scaleY:1.33,rotation:93.5,alpha:0.602},1).to({scaleX:1.36,scaleY:1.36,rotation:103.8,alpha:0.699},1).to({scaleX:1.39,scaleY:1.39,rotation:113.8,x:-147.6,alpha:0.801},1).to({scaleX:1.43,scaleY:1.43,rotation:124.1,alpha:0.898},1).to({scaleX:1.46,scaleY:1.46,rotation:134.4,x:-147.5,alpha:1},1).to({scaleX:1.43,scaleY:1.43,rotation:137.1,x:-147.6,alpha:0.949},1).to({scaleX:1.41,scaleY:1.41,rotation:139.9,alpha:0.891},1).to({scaleX:1.38,scaleY:1.38,rotation:142.4,x:-147.5,alpha:0.84},1).to({scaleX:1.36,scaleY:1.36,rotation:145.2,alpha:0.789},1).to({scaleX:1.33,scaleY:1.33,rotation:147.9,y:-37.6,alpha:0.738},1).to({scaleX:1.31,scaleY:1.31,rotation:150.7,y:-37.5,alpha:0.68},1).to({scaleX:1.28,scaleY:1.28,rotation:153.4,alpha:0.629},1).to({scaleX:1.26,scaleY:1.26,rotation:156.2,x:-147.6,alpha:0.578},1).to({scaleX:1.23,scaleY:1.23,rotation:158.9,x:-147.5,alpha:0.531},1).to({scaleX:1.21,scaleY:1.21,rotation:161.4,alpha:0.48},1).to({scaleX:1.19,scaleY:1.19,rotation:164.2,x:-147.6,y:-37.6,alpha:0.422},1).to({scaleX:1.16,scaleY:1.16,rotation:166.7,x:-147.5,alpha:0.371},1).to({scaleX:1.14,scaleY:1.14,rotation:169.5,y:-37.5,alpha:0.32},1).to({scaleX:1.11,scaleY:1.11,rotation:172.2,alpha:0.27},1).to({scaleX:1.09,scaleY:1.09,rotation:174.9,x:-147.6,alpha:0.211},1).to({scaleX:1.07,scaleY:1.07,rotation:177.5,x:-147.5,alpha:0.16},1).to({scaleX:1.04,scaleY:1.04,rotation:180,alpha:0.109},1).to({scaleX:1.02,scaleY:1.02,rotation:182.8,x:-147.6,alpha:0.051},1).wait(1).to({scaleX:0.99,scaleY:0.99,rotation:185.5,x:-147.5,alpha:0},0).to({_off:true},10).wait(3).to({_off:false,scaleX:1.14,scaleY:1.14,rotation:32.6},0).to({scaleX:1.17,scaleY:1.17,rotation:42.8,alpha:0.102},1).to({scaleX:1.2,scaleY:1.2,rotation:53.1,alpha:0.199},1).to({scaleX:1.23,scaleY:1.23,rotation:63.2,x:-147.6,y:-37.4,alpha:0.301},1).to({scaleX:1.26,scaleY:1.26,rotation:73.4,x:-147.5,y:-37.6,alpha:0.398},1).to({scaleX:1.3,scaleY:1.3,rotation:83.5,y:-37.5,alpha:0.5},1).to({scaleX:1.33,scaleY:1.33,rotation:93.5,alpha:0.602},1).to({scaleX:1.36,scaleY:1.36,rotation:103.8,alpha:0.699},1).to({scaleX:1.39,scaleY:1.39,rotation:113.8,x:-147.6,alpha:0.801},1).to({scaleX:1.43,scaleY:1.43,rotation:124.1,alpha:0.898},1).to({scaleX:1.46,scaleY:1.46,rotation:134.4,x:-147.5,alpha:1},1).to({scaleX:1.43,scaleY:1.43,rotation:137.1,x:-147.6,alpha:0.949},1).to({scaleX:1.41,scaleY:1.41,rotation:139.9,alpha:0.891},1).to({scaleX:1.38,scaleY:1.38,rotation:142.4,x:-147.5,alpha:0.84},1).to({scaleX:1.36,scaleY:1.36,rotation:145.2,alpha:0.789},1).to({scaleX:1.33,scaleY:1.33,rotation:147.9,y:-37.6,alpha:0.738},1).to({scaleX:1.31,scaleY:1.31,rotation:150.7,y:-37.5,alpha:0.68},1).to({scaleX:1.28,scaleY:1.28,rotation:153.4,alpha:0.629},1).to({scaleX:1.26,scaleY:1.26,rotation:156.2,x:-147.6,alpha:0.578},1).to({scaleX:1.23,scaleY:1.23,rotation:158.9,x:-147.5,alpha:0.531},1).to({scaleX:1.21,scaleY:1.21,rotation:161.4,alpha:0.48},1).to({scaleX:1.19,scaleY:1.19,rotation:164.2,x:-147.6,y:-37.6,alpha:0.422},1).to({scaleX:1.16,scaleY:1.16,rotation:166.7,x:-147.5,alpha:0.371},1).to({scaleX:1.14,scaleY:1.14,rotation:169.5,y:-37.5,alpha:0.32},1).to({scaleX:1.11,scaleY:1.11,rotation:172.2,alpha:0.27},1).to({scaleX:1.09,scaleY:1.09,rotation:174.9,x:-147.6,alpha:0.211},1).to({scaleX:1.07,scaleY:1.07,rotation:177.5,x:-147.5,alpha:0.16},1).to({scaleX:1.04,scaleY:1.04,rotation:180,alpha:0.109},1).to({scaleX:1.02,scaleY:1.02,rotation:182.8,x:-147.6,alpha:0.051},1).wait(1).to({scaleX:0.99,scaleY:0.99,rotation:185.5,x:-147.5,alpha:0},0).to({_off:true},10).wait(3).to({_off:false,scaleX:1.14,scaleY:1.14,rotation:32.6},0).to({scaleX:1.17,scaleY:1.17,rotation:42.8,alpha:0.102},1).to({scaleX:1.2,scaleY:1.2,rotation:53.1,alpha:0.199},1).to({scaleX:1.23,scaleY:1.23,rotation:63.2,x:-147.6,y:-37.4,alpha:0.301},1).to({scaleX:1.26,scaleY:1.26,rotation:73.4,x:-147.5,y:-37.6,alpha:0.398},1).to({scaleX:1.3,scaleY:1.3,rotation:83.5,y:-37.5,alpha:0.5},1).to({scaleX:1.33,scaleY:1.33,rotation:93.5,alpha:0.602},1).to({scaleX:1.36,scaleY:1.36,rotation:103.8,alpha:0.699},1).to({scaleX:1.39,scaleY:1.39,rotation:113.8,x:-147.6,alpha:0.801},1).to({scaleX:1.43,scaleY:1.43,rotation:124.1,alpha:0.898},1).to({scaleX:1.46,scaleY:1.46,rotation:134.4,x:-147.5,alpha:1},1).to({scaleX:1.43,scaleY:1.43,rotation:137.1,x:-147.6,alpha:0.949},1).to({scaleX:1.41,scaleY:1.41,rotation:139.9,alpha:0.891},1).to({scaleX:1.38,scaleY:1.38,rotation:142.4,x:-147.5,alpha:0.84},1).to({scaleX:1.36,scaleY:1.36,rotation:145.2,alpha:0.789},1).to({scaleX:1.33,scaleY:1.33,rotation:147.9,y:-37.6,alpha:0.738},1).to({scaleX:1.31,scaleY:1.31,rotation:150.7,y:-37.5,alpha:0.68},1).to({scaleX:1.28,scaleY:1.28,rotation:153.4,alpha:0.629},1).to({scaleX:1.26,scaleY:1.26,rotation:156.2,x:-147.6,alpha:0.578},1).to({scaleX:1.23,scaleY:1.23,rotation:158.9,x:-147.5,alpha:0.531},1).to({scaleX:1.21,scaleY:1.21,rotation:161.4,alpha:0.48},1).to({scaleX:1.19,scaleY:1.19,rotation:164.2,x:-147.6,y:-37.6,alpha:0.422},1).to({scaleX:1.16,scaleY:1.16,rotation:166.7,x:-147.5,alpha:0.371},1).to({scaleX:1.14,scaleY:1.14,rotation:169.5,y:-37.5,alpha:0.32},1).to({scaleX:1.11,scaleY:1.11,rotation:172.2,alpha:0.27},1).to({scaleX:1.09,scaleY:1.09,rotation:174.9,x:-147.6,alpha:0.211},1).to({scaleX:1.07,scaleY:1.07,rotation:177.5,x:-147.5,alpha:0.16},1).to({scaleX:1.04,scaleY:1.04,rotation:180,alpha:0.109},1).to({scaleX:1.02,scaleY:1.02,rotation:182.8,x:-147.6,alpha:0.051},1).wait(1).to({scaleX:0.99,scaleY:0.99,rotation:185.5,x:-147.5,alpha:0},0).wait(10));

	// Layer 1
	this.instance_5 = new lib.shape79("synched",0);
	this.instance_5.setTransform(-147.5,-37.5,0.66,0.66,82.7);
	this.instance_5.alpha = 0;
	this.instance_5._off = true;
	this.instance_5.filters = [new cjs.ColorFilter(1, 1, 1, 1, 213, 180, 162, 0)];
	this.instance_5.cache(-70,-70,140,140);

	this.timeline.addTween(cjs.Tween.get(this.instance_5).wait(4).to({_off:false},0).to({rotation:92.8,alpha:0.09},1).to({scaleX:0.66,scaleY:0.66,rotation:102.8,y:-37.6,alpha:0.18},1).to({scaleX:0.66,scaleY:0.66,rotation:113,y:-37.5,alpha:0.27},1).to({rotation:123.1,x:-147.6,alpha:0.359},1).to({scaleX:0.66,scaleY:0.66,rotation:133.3,x:-147.5,alpha:0.461},1).to({rotation:143.4,x:-147.4,alpha:0.551},1).to({rotation:153.7,x:-147.5,y:-37.6,alpha:0.641},1).to({rotation:163.7,x:-147.6,y:-37.5,alpha:0.73},1).to({scaleX:0.66,scaleY:0.66,rotation:173.7,x:-147.5,alpha:0.82},1).to({scaleX:0.66,scaleY:0.66,rotation:183.5,alpha:0.91},1).to({scaleX:0.64,scaleY:0.64,rotation:204.3,y:-37.6,alpha:0.879},2).to({scaleX:0.61,scaleY:0.61,rotation:215.1,y:-37.5,alpha:0.75},1).to({scaleX:0.59,scaleY:0.59,rotation:225.7,alpha:0.629},1).to({scaleX:0.57,scaleY:0.57,rotation:236.4,alpha:0.5},1).to({scaleX:0.55,scaleY:0.55,rotation:247.2,alpha:0.379},1).to({scaleX:0.53,scaleY:0.53,rotation:257.7,alpha:0.25},1).to({scaleX:0.51,scaleY:0.51,rotation:268.5,alpha:0.129},1).wait(1).to({scaleX:0.49,scaleY:0.49,rotation:279,alpha:0},0).to({_off:true},19).wait(4).to({_off:false,scaleX:0.66,scaleY:0.66,rotation:442.7},0).to({rotation:452.8,alpha:0.09},1).to({scaleX:0.66,scaleY:0.66,rotation:462.8,y:-37.6,alpha:0.18},1).to({scaleX:0.66,scaleY:0.66,rotation:473,y:-37.5,alpha:0.27},1).to({rotation:483.1,x:-147.6,alpha:0.359},1).to({scaleX:0.66,scaleY:0.66,rotation:493.3,x:-147.5,alpha:0.461},1).to({rotation:503.4,x:-147.4,alpha:0.551},1).to({rotation:513.7,x:-147.5,y:-37.6,alpha:0.641},1).to({rotation:523.7,x:-147.6,y:-37.5,alpha:0.73},1).to({scaleX:0.66,scaleY:0.66,rotation:533.7,x:-147.5,alpha:0.82},1).to({scaleX:0.66,scaleY:0.66,rotation:543.5,alpha:0.91},1).to({scaleX:0.64,scaleY:0.64,rotation:564.3,y:-37.6,alpha:0.879},2).to({scaleX:0.61,scaleY:0.61,rotation:575.1,y:-37.5,alpha:0.75},1).to({scaleX:0.59,scaleY:0.59,rotation:585.7,alpha:0.629},1).to({scaleX:0.57,scaleY:0.57,rotation:596.4,alpha:0.5},1).to({scaleX:0.55,scaleY:0.55,rotation:607.2,alpha:0.379},1).to({scaleX:0.53,scaleY:0.53,rotation:617.7,alpha:0.25},1).to({scaleX:0.51,scaleY:0.51,rotation:628.5,alpha:0.129},1).wait(1).to({scaleX:0.49,scaleY:0.49,rotation:639,alpha:0},0).to({_off:true},19).wait(4).to({_off:false,scaleX:0.66,scaleY:0.66,rotation:802.7},0).to({rotation:812.8,alpha:0.09},1).to({scaleX:0.66,scaleY:0.66,rotation:822.8,y:-37.6,alpha:0.18},1).to({scaleX:0.66,scaleY:0.66,rotation:833,y:-37.5,alpha:0.27},1).to({rotation:843.1,x:-147.6,alpha:0.359},1).to({scaleX:0.66,scaleY:0.66,rotation:853.3,x:-147.5,alpha:0.461},1).to({rotation:863.4,x:-147.4,alpha:0.551},1).to({rotation:873.7,x:-147.5,y:-37.6,alpha:0.641},1).to({rotation:883.7,x:-147.6,y:-37.5,alpha:0.73},1).to({scaleX:0.66,scaleY:0.66,rotation:893.7,x:-147.5,alpha:0.82},1).to({scaleX:0.66,scaleY:0.66,rotation:903.5,alpha:0.91},1).to({scaleX:0.64,scaleY:0.64,rotation:924.3,y:-37.6,alpha:0.879},2).to({scaleX:0.61,scaleY:0.61,rotation:935.1,y:-37.5,alpha:0.75},1).to({scaleX:0.59,scaleY:0.59,rotation:945.7,alpha:0.629},1).to({scaleX:0.57,scaleY:0.57,rotation:956.4,alpha:0.5},1).to({scaleX:0.55,scaleY:0.55,rotation:967.2,alpha:0.379},1).to({scaleX:0.53,scaleY:0.53,rotation:977.7,alpha:0.25},1).to({scaleX:0.51,scaleY:0.51,rotation:988.5,alpha:0.129},1).wait(1).to({scaleX:0.49,scaleY:0.49,rotation:999,alpha:0},0).to({_off:true},19).wait(4).to({_off:false,scaleX:0.66,scaleY:0.66,rotation:1162.7},0).to({rotation:1172.8,alpha:0.09},1).to({scaleX:0.66,scaleY:0.66,rotation:1182.8,y:-37.6,alpha:0.18},1).to({scaleX:0.66,scaleY:0.66,rotation:1193,y:-37.5,alpha:0.27},1).to({rotation:1203.1,x:-147.6,alpha:0.359},1).to({scaleX:0.66,scaleY:0.66,rotation:1213.3,x:-147.5,alpha:0.461},1).to({rotation:1223.4,x:-147.4,alpha:0.551},1).to({rotation:1233.7,x:-147.5,y:-37.6,alpha:0.641},1).to({rotation:1243.7,x:-147.6,y:-37.5,alpha:0.73},1).to({scaleX:0.66,scaleY:0.66,rotation:1253.7,x:-147.5,alpha:0.82},1).to({scaleX:0.66,scaleY:0.66,rotation:1263.5,alpha:0.91},1).to({scaleX:0.64,scaleY:0.64,rotation:1284.3,y:-37.6,alpha:0.879},2).to({scaleX:0.61,scaleY:0.61,rotation:1295.1,y:-37.5,alpha:0.75},1).to({scaleX:0.59,scaleY:0.59,rotation:1305.7,alpha:0.629},1).to({scaleX:0.57,scaleY:0.57,rotation:1316.4,alpha:0.5},1).to({scaleX:0.55,scaleY:0.55,rotation:1327.2,alpha:0.379},1).to({scaleX:0.53,scaleY:0.53,rotation:1337.7,alpha:0.25},1).to({scaleX:0.51,scaleY:0.51,rotation:1348.5,alpha:0.129},1).wait(1).to({scaleX:0.49,scaleY:0.49,rotation:1359,alpha:0},0).to({_off:true},19).wait(4).to({_off:false,scaleX:0.66,scaleY:0.66,rotation:1522.7},0).to({rotation:1532.8,alpha:0.09},1).to({scaleX:0.66,scaleY:0.66,rotation:1542.8,y:-37.6,alpha:0.18},1).to({scaleX:0.66,scaleY:0.66,rotation:1553,y:-37.5,alpha:0.27},1).to({rotation:1563.1,x:-147.6,alpha:0.359},1).to({scaleX:0.66,scaleY:0.66,rotation:1573.3,x:-147.5,alpha:0.461},1).to({rotation:1583.4,x:-147.4,alpha:0.551},1).to({rotation:1593.7,x:-147.5,y:-37.6,alpha:0.641},1).to({rotation:1603.7,x:-147.6,y:-37.5,alpha:0.73},1).to({scaleX:0.66,scaleY:0.66,rotation:1613.7,x:-147.5,alpha:0.82},1).to({scaleX:0.66,scaleY:0.66,rotation:1623.5,alpha:0.91},1).to({scaleX:0.64,scaleY:0.64,rotation:1644.3,y:-37.6,alpha:0.879},2).to({scaleX:0.61,scaleY:0.61,rotation:1655.1,y:-37.5,alpha:0.75},1).to({scaleX:0.59,scaleY:0.59,rotation:1665.7,alpha:0.629},1).to({scaleX:0.57,scaleY:0.57,rotation:1676.4,alpha:0.5},1).to({scaleX:0.55,scaleY:0.55,rotation:1687.2,alpha:0.379},1).to({scaleX:0.53,scaleY:0.53,rotation:1697.7,alpha:0.25},1).to({scaleX:0.51,scaleY:0.51,rotation:1708.5,alpha:0.129},1).wait(1).to({scaleX:0.49,scaleY:0.49,rotation:1719,alpha:0},0).to({_off:true},19).wait(4).to({_off:false,scaleX:0.66,scaleY:0.66,rotation:1882.7},0).to({rotation:1892.8,alpha:0.09},1).to({scaleX:0.66,scaleY:0.66,rotation:1902.8,y:-37.6,alpha:0.18},1).to({scaleX:0.66,scaleY:0.66,rotation:1913,y:-37.5,alpha:0.27},1).to({rotation:1923.1,x:-147.6,alpha:0.359},1).to({scaleX:0.66,scaleY:0.66,rotation:1933.3,x:-147.5,alpha:0.461},1).to({rotation:1943.4,x:-147.4,alpha:0.551},1).to({rotation:1953.7,x:-147.5,y:-37.6,alpha:0.641},1).to({rotation:1963.7,x:-147.6,y:-37.5,alpha:0.73},1).to({scaleX:0.66,scaleY:0.66,rotation:1973.7,x:-147.5,alpha:0.82},1).to({scaleX:0.66,scaleY:0.66,rotation:1983.5,alpha:0.91},1).to({scaleX:0.64,scaleY:0.64,rotation:2004.3,y:-37.6,alpha:0.879},2).to({scaleX:0.61,scaleY:0.61,rotation:2015.1,y:-37.5,alpha:0.75},1).to({scaleX:0.59,scaleY:0.59,rotation:2025.7,alpha:0.629},1).to({scaleX:0.57,scaleY:0.57,rotation:2036.4,alpha:0.5},1).to({scaleX:0.55,scaleY:0.55,rotation:2047.2,alpha:0.379},1).to({scaleX:0.53,scaleY:0.53,rotation:2057.7,alpha:0.25},1).to({scaleX:0.51,scaleY:0.51,rotation:2068.5,alpha:0.129},1).wait(1).to({scaleX:0.49,scaleY:0.49,rotation:2079,alpha:0},0).to({_off:true},19).wait(4).to({_off:false,scaleX:0.66,scaleY:0.66,rotation:2242.7},0).to({rotation:2252.8,alpha:0.09},1).to({scaleX:0.66,scaleY:0.66,rotation:2262.8,y:-37.6,alpha:0.18},1).to({scaleX:0.66,scaleY:0.66,rotation:2273,y:-37.5,alpha:0.27},1).to({rotation:2283.1,x:-147.6,alpha:0.359},1).to({scaleX:0.66,scaleY:0.66,rotation:2293.3,x:-147.5,alpha:0.461},1).to({rotation:2303.4,x:-147.4,alpha:0.551},1).to({rotation:2313.7,x:-147.5,y:-37.6,alpha:0.641},1).to({rotation:2323.7,x:-147.6,y:-37.5,alpha:0.73},1).to({scaleX:0.66,scaleY:0.66,rotation:2333.7,x:-147.5,alpha:0.82},1).to({scaleX:0.66,scaleY:0.66,rotation:2343.5,alpha:0.91},1).to({scaleX:0.64,scaleY:0.64,rotation:2364.3,y:-37.6,alpha:0.879},2).to({scaleX:0.61,scaleY:0.61,rotation:2375.1,y:-37.5,alpha:0.75},1).to({scaleX:0.59,scaleY:0.59,rotation:2385.7,alpha:0.629},1).to({scaleX:0.57,scaleY:0.57,rotation:2396.4,alpha:0.5},1).to({scaleX:0.55,scaleY:0.55,rotation:2407.2,alpha:0.379},1).to({scaleX:0.53,scaleY:0.53,rotation:2417.7,alpha:0.25},1).to({scaleX:0.51,scaleY:0.51,rotation:2428.5,alpha:0.129},1).wait(1).to({scaleX:0.49,scaleY:0.49,rotation:2439,alpha:0},0).to({_off:true},19).wait(4).to({_off:false,scaleX:0.66,scaleY:0.66,rotation:2602.7},0).to({rotation:2612.8,alpha:0.09},1).to({scaleX:0.66,scaleY:0.66,rotation:2622.8,y:-37.6,alpha:0.18},1).to({scaleX:0.66,scaleY:0.66,rotation:2633,y:-37.5,alpha:0.27},1).to({rotation:2643.1,x:-147.6,alpha:0.359},1).to({scaleX:0.66,scaleY:0.66,rotation:2653.3,x:-147.5,alpha:0.461},1).to({rotation:2663.4,x:-147.4,alpha:0.551},1).to({rotation:2673.7,x:-147.5,y:-37.6,alpha:0.641},1).to({rotation:2683.7,x:-147.6,y:-37.5,alpha:0.73},1).to({scaleX:0.66,scaleY:0.66,rotation:2693.7,x:-147.5,alpha:0.82},1).to({scaleX:0.66,scaleY:0.66,rotation:2703.5,alpha:0.91},1).to({scaleX:0.64,scaleY:0.64,rotation:2724.3,y:-37.6,alpha:0.879},2).to({scaleX:0.61,scaleY:0.61,rotation:2735.1,y:-37.5,alpha:0.75},1).to({scaleX:0.59,scaleY:0.59,rotation:2745.7,alpha:0.629},1).to({scaleX:0.57,scaleY:0.57,rotation:2756.4,alpha:0.5},1).to({scaleX:0.55,scaleY:0.55,rotation:2767.2,alpha:0.379},1).to({scaleX:0.53,scaleY:0.53,rotation:2777.7,alpha:0.25},1).to({scaleX:0.51,scaleY:0.51,rotation:2788.5,alpha:0.129},1).wait(1).to({scaleX:0.49,scaleY:0.49,rotation:2799,alpha:0},0).to({_off:true},19).wait(4).to({_off:false,scaleX:0.66,scaleY:0.66,rotation:2962.7},0).to({rotation:2972.8,alpha:0.09},1).to({scaleX:0.66,scaleY:0.66,rotation:2982.8,y:-37.6,alpha:0.18},1).to({scaleX:0.66,scaleY:0.66,rotation:2993,y:-37.5,alpha:0.27},1).to({rotation:3003.1,x:-147.6,alpha:0.359},1).to({scaleX:0.66,scaleY:0.66,rotation:3013.3,x:-147.5,alpha:0.461},1).to({rotation:3023.4,x:-147.4,alpha:0.551},1).to({rotation:3033.7,x:-147.5,y:-37.6,alpha:0.641},1).to({rotation:3043.7,x:-147.6,y:-37.5,alpha:0.73},1).to({scaleX:0.66,scaleY:0.66,rotation:3053.7,x:-147.5,alpha:0.82},1).to({scaleX:0.66,scaleY:0.66,rotation:3063.5,alpha:0.91},1).to({scaleX:0.64,scaleY:0.64,rotation:3084.3,y:-37.6,alpha:0.879},2).to({scaleX:0.61,scaleY:0.61,rotation:3095.1,y:-37.5,alpha:0.75},1).to({scaleX:0.59,scaleY:0.59,rotation:3105.7,alpha:0.629},1).to({scaleX:0.57,scaleY:0.57,rotation:3116.4,alpha:0.5},1).to({scaleX:0.55,scaleY:0.55,rotation:3127.2,alpha:0.379},1).to({scaleX:0.53,scaleY:0.53,rotation:3137.7,alpha:0.25},1).to({scaleX:0.51,scaleY:0.51,rotation:3148.5,alpha:0.129},1).wait(1).to({scaleX:0.49,scaleY:0.49,rotation:3159,alpha:0},0).to({_off:true},19).wait(4).to({_off:false,scaleX:0.66,scaleY:0.66,rotation:3322.7},0).to({rotation:3332.8,alpha:0.09},1).to({scaleX:0.66,scaleY:0.66,rotation:3342.8,y:-37.6,alpha:0.18},1).to({scaleX:0.66,scaleY:0.66,rotation:3353,y:-37.5,alpha:0.27},1).to({rotation:3363.1,x:-147.6,alpha:0.359},1).to({scaleX:0.66,scaleY:0.66,rotation:3373.3,x:-147.5,alpha:0.461},1).to({rotation:3383.4,x:-147.4,alpha:0.551},1).to({rotation:3393.7,x:-147.5,y:-37.6,alpha:0.641},1).to({rotation:3403.7,x:-147.6,y:-37.5,alpha:0.73},1).to({scaleX:0.66,scaleY:0.66,rotation:3413.7,x:-147.5,alpha:0.82},1).to({scaleX:0.66,scaleY:0.66,rotation:3423.5,alpha:0.91},1).to({scaleX:0.64,scaleY:0.64,rotation:3444.3,y:-37.6,alpha:0.879},2).to({scaleX:0.61,scaleY:0.61,rotation:3455.1,y:-37.5,alpha:0.75},1).to({scaleX:0.59,scaleY:0.59,rotation:3465.7,alpha:0.629},1).to({scaleX:0.57,scaleY:0.57,rotation:3476.4,alpha:0.5},1).to({scaleX:0.55,scaleY:0.55,rotation:3487.2,alpha:0.379},1).to({scaleX:0.53,scaleY:0.53,rotation:3497.7,alpha:0.25},1).to({scaleX:0.51,scaleY:0.51,rotation:3508.5,alpha:0.129},1).wait(1).to({scaleX:0.49,scaleY:0.49,rotation:3519,alpha:0},0).wait(19));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-282.4,-148.4,221.7,221.7);


(lib.sprite55 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.instance = new lib.sprite54();
	this.instance.setTransform(-3.5,16,0.391,0.877,178.2);

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(10));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-109.1,-51,210.1,129.3);


(lib.Symbol9 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// loe sang
	this.InstanceName_6 = new lib.sprite80();
	this.InstanceName_6.setTransform(128.5,60.7,0.56,0.56);

	this.timeline.addTween(cjs.Tween.get(this.InstanceName_6).wait(115));

	// Layer 1
	this.instance = new lib.Symbol10();
	this.instance.setTransform(49,49,1,1,0,0,0,49,49);
	this.instance.alpha = 0;

	this.timeline.addTween(cjs.Tween.get(this.instance).to({_off:true},1).wait(114));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-29.6,-22.4,127.6,124.1);


(lib.sprite58 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 5
	this.instance = new lib.sprite55();
	this.instance.setTransform(55.8,-158,10.045,9.266,0,-0.2,-8.5);
	this.instance.compositeOperation = "lighter";
	this.instance._off = true;

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(3).to({_off:false},0).to({scaleY:2.18,x:56.1,y:-61.6},2).to({_off:true},1).wait(6));

	// Layer 3
	this.instance_1 = new lib.sprite55();
	this.instance_1.setTransform(77.8,-42.7,9.581,4.159,0,41,23.1);
	this.instance_1.compositeOperation = "lighter";

	this.instance_2 = new lib.sprite50();
	this.instance_2.setTransform(-129.4,-15.3,1.87,2.139,0,-0.4,-8.5);
	this.instance_2.compositeOperation = "lighter";
	this.instance_2._off = true;

	this.instance_3 = new lib.sprite57();
	this.instance_3.setTransform(12,-0.1,1.533,1.746,-8.5);
	this.instance_3.compositeOperation = "lighter";
	this.instance_3._off = true;

	this.timeline.addTween(cjs.Tween.get(this.instance_1).to({scaleY:0.98,x:49.5,y:-10},1).to({_off:true},1).wait(10));
	this.timeline.addTween(cjs.Tween.get(this.instance_2).wait(3).to({_off:false},0).to({scaleX:1.27,scaleY:0.45,skewX:42.8,x:-116,y:14.9},3).to({_off:true},1).wait(5));
	this.timeline.addTween(cjs.Tween.get(this.instance_3).wait(7).to({_off:false},0).to({scaleX:1.53,scaleY:1.37},1).to({scaleY:0.99},1).to({scaleY:0.61,x:11.9},1).to({scaleX:1.53,scaleY:0.23,x:12},1).wait(1));

	// Layer 1
	this.instance_4 = new lib.sprite50();
	this.instance_4.setTransform(-120.7,-73.8,1.784,0.959,0,40.6,23.1);
	this.instance_4.compositeOperation = "lighter";

	this.instance_5 = new lib.sprite57();
	this.instance_5.setTransform(-5.9,-7.9,1.46,0.552,23);
	this.instance_5.compositeOperation = "lighter";
	this.instance_5._off = true;

	this.timeline.addTween(cjs.Tween.get(this.instance_4).to({scaleX:1.21,scaleY:0.36,skewX:93.1,x:-118.3,y:-57.8},4).to({_off:true},1).wait(7));
	this.timeline.addTween(cjs.Tween.get(this.instance_5).wait(5).to({_off:false},0).to({scaleX:1.46,scaleY:0.35,rotation:23.1,y:-8},1).to({scaleX:1.46,scaleY:0.23,rotation:23},1).to({scaleX:1.46,scaleY:0.1,rotation:23.1,y:-8.1},1).to({_off:true},1).wait(3));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-951.2,-415.3,1900.7,812.6);


(lib.sprite59 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 1
	this.instance = new lib.sprite58();
	this.instance.setTransform(506.9,105.2,1.45,1.45);
	this.instance._off = true;

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(15).to({_off:false},0).to({_off:true},12).wait(10).to({_off:false,x:510.9,y:123.2},0).to({_off:true},14).wait(31).to({_off:false,x:500.9,y:107.2},0).to({_off:true},12).wait(31).to({_off:false,x:504.9,y:111.2},0).to({_off:true},7).wait(15).to({_off:false,x:506.9,y:105.2},0).to({_off:true},12).wait(10).to({_off:false,x:510.9,y:123.2},0).to({_off:true},14).wait(31).to({_off:false,x:500.9,y:107.2},0).to({_off:true},12).wait(31).to({_off:false,x:504.9,y:111.2},0).to({_off:true},7).wait(15).to({_off:false,x:506.9,y:105.2},0).to({_off:true},12).wait(10).to({_off:false,x:510.9,y:123.2},0).to({_off:true},14).wait(31).to({_off:false,x:500.9,y:107.2},0).to({_off:true},12).wait(31).to({_off:false,x:504.9,y:111.2},0).wait(7));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = null;


(lib.Symbol11 = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// Layer 2
	this.instance = new lib.sprite59();
	this.instance.setTransform(-242.5,56.1,0.491,0.491);

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(115));

	// Layer 1
	this.instance_1 = new lib.Symbol12();
	this.instance_1.setTransform(125,60,1,1,0,0,0,125,60);
	this.instance_1.alpha = 0;

	this.timeline.addTween(cjs.Tween.get(this.instance_1).to({_off:true},1).wait(114));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(0,0,250.1,120.1);


// stage content:



(lib._160x600_Canvas = function(mode,startPosition,loop) {
	this.initialize(mode,startPosition,loop,{});

	// hieu ung
	this.instance = new lib.Symbol11();
	this.instance.setTransform(222.7,411.6,0.608,0.608,0,0,0,125.1,60);

	this.timeline.addTween(cjs.Tween.get(this.instance).wait(1));

	// loe sang
	this.instance_1 = new lib.Symbol9();
	this.instance_1.setTransform(70,53,1,1,0,0,0,49,50);

	this.timeline.addTween(cjs.Tween.get(this.instance_1).wait(1));

	// text
	this.instance_2 = new lib.Symbol4();
	this.instance_2.setTransform(150.5,448.5,1,1,0,0,0,148.5,72.5);

	this.timeline.addTween(cjs.Tween.get(this.instance_2).wait(1));

	// bg
	this.instance_3 = new lib.Symbol1();
	this.instance_3.setTransform(148,300.9,1,1,0,0,0,150,299.9);

	this.timeline.addTween(cjs.Tween.get(this.instance_3).wait(1));

}).prototype = p = new cjs.MovieClip();
p.nominalBounds = new cjs.Rectangle(-410.9,280.6,789.9,780);

})(lib = lib||{}, images = images||{}, createjs = createjs||{}, ss = ss||{});
var lib, images, createjs, ss;