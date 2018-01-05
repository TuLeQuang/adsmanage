<!DOCTYPE html>
<html>
    <head>
        <title>VueJS Hello World</title>
        <meta charset="UTF-8">
    </head>
	<style type="text/css" media="screen">
		body {background-image: url("");background-size: 100%; }
		.wrapper{margin-left: 20px}
		.title{text-align: center}
		.content{position: relative;}
		.classline{width: 100%;padding-bottom: 5px;float:left;}
		.classtitle{font-weight: bold;width: 10%;display: inline-block;float:left;}
		.input{width: 20%;float:left;}
		.color-holder {
	  		background: #fff;
			cursor: pointer;
			border: 1px solid #AAA;
			width: 19px;
			height: 19px;
			float:left;
			margin-left:5px
		}
		.color-picker .color-item {
			cursor: pointer;
			width: 10px;
			height: 10px;
			list-style-type: none;
			float: left;
			margin: 2px;
			border: 1px solid #DDD;
		}
		.color-picker .color-item:hover {
			border: 1px solid #666;
			opacity: 0.8;
			-moz-opacity: 0.8;
			filter:alpha(opacity=8);
		}
	</style>
    <body>
    	<div class="wrapper">
			<div class="title">DEMO</div><br>
			<div class="content">
				<div class="classline">
					<span class="classtitle">Title</span>
					<input class="input" type="text"><br>
				</div>
				<div class="classline">
					<span class="classtitle">Background</span>
					<input class="input" type="text" name="custom_color" placeholder="#FFFFFF" id="pickcolor" >
					<div class="color-holder call-picker"></div>
					<div class="color-picker" id="color-picker" style="display: none"></div>
				</div>
				<div class="classline">
					<span class="classtitle">Logo</span>
					<input class="input" type="text"><br>
				</div>
				<div class="classline">
					<span class="classtitle">Image</span>
					<input class="input" type="text"><br>
				</div>
				<div class="classline">
					<span class="classtitle">Description</span>
					<input class="input" type="text"><br>
				</div>
				<div class="classline">
					<span class="classtitle">Content</span>
					<input class="input" type="text"><br>
				</div>
			</div>
		</div>
    </body>
</html>