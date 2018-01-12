<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<title>Demotitle</title>
		<style>
		.container{
			margin-top: 50px;
		}
		.col-md-8{
			border: 1px solid #ccc;
		}
		.col-md-4{
			border: 1px solid #ccc;
		}
		.contentform{
			position: relative;
		}
		.contentform,
		.formnhap,
		.contentfix
		li{
			list-style: none;
		}
		.crud{
		position: absolute;
		top: 0;
		right: 0;
		}
		.formnhap{
		border-radius: 5px;
		margin-top: 0;
		box-shadow: inset 0 0 0 1px #c5c5c5;
		}
		.contentfix{
			border: 1px solid #ccc;
			border-radius: 5px;
		}
		</style>
	</head>
	<body>
		<div class="container">
			<div class="row">
				<div class="col-md-8" id="element">
					<div id="clearform">
						<div id="showtitle" style="display: block;">
						<!-- 	p id="bar">Title</p>
						<div class="crud">
							<button onclick="clicksua()" type="button" class="btn btn-default btn-sm">
							<span class="glyphicon glyphicon-wrench"></span>
							</button>
							<button type="button" class="btn btn-default btn-sm" id="xoa" onclick="removeform()">
							<span class="glyphicon glyphicon-remove"></span>
							</button> -->
						</div>
							<div id="formconfix" style="display: none;">
							<form action="title.blade.php" method="get" id="myForm" name="myForm">
								<table  style="width:750px;border:1px solid #ccc;border-radius: 10px;">
									<tr>
										<td>Label:</td>
										<td><input type="text" id="title" required class="form-control" onkeyup="changelength()" name="tieude" value="title"></td>
									</tr>
									<tr>
										<td>Titlecolor:</td>
										<td><input type="color" id="color" value="#000000" onchange="doimau()" name="color"></td>
									</tr>
									<tr>
										<td>Fontsize:</td>
										<td>
											<input id="fontsize" type="range" min="8" max="50" step="1" style="width:100px;display: inline-block;" name="fontsize" />
											<input type="text" id="textFont" style="width:30px"  /><span>px</span>
										</td>
									</tr>
									<tr>
										<td>MaxLength:</td>
										<td><input type="number" id="max" name="max"></td>
									</tr>
									<tr>
										<td>MinLength:</td>
										<td><input type="number" id="min" name="min"></td>
									</tr>
								</table>
								<button type="button" class="btn btn-primary" onclick="save()">Save</button>
							</form>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<ul class="formnhap">
						<button type="button" onclick="clicktitle()">Title</button>
					</ul>
				</div>
			</div>
			<button type="button" onclick="myFunction()">Lấy script</button>
			<textarea name="demo" id="demo" cols="30" rows="2"></textarea>
		</div>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://vuejs.org/js/vue.js"></script>
		<script>
function clicktitle() {
	if(document.getElementById('title-item')=== null){
		var x = document.getElementById("showtitle");
		x.innerHTML='<div id="title-item"><p id="bar">Title</p><div class="crud"><button onclick="clicksua()" type="button" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-wrench"></span></button><button type="button" class="btn btn-default btn-sm" id="xoa" onclick="removeform()"><span class="glyphicon glyphicon-remove"></span></button></div></div>';
	}
};
function clicksua() {
	var a = document.getElementById("formconfix");
			if(a.style.display 	== "none"){
		a.style.display = "block";
	}
	else {
		a.style.display = "none";
	}
}
function doimau(){
	document.getElementById('bar').style.color = document.getElementById('color').value;
};
function changelength() {
	document.getElementById('title').maxLength = document.getElementById('max').value;
	document.getElementById('title').minLength = document.getElementById('min').value;
};
function removeform() {
	document.getElementById("formconfix").style.display = "none";
	document.getElementById("myForm").reset();
	$("#title-item").remove();
	$('#xoa').click(function(){
		$('title-item')[0].reset();
	});
};
function save() {
	document.getElementById("myForm").submit();
};
	 $('#fontsize').on('input change',function(){
	var f_size =$(this).val();
	$('#bar').css('font-size',f_size+'px');
	document.getElementById("textFont").value = f_size;
});
	$('#title').on('click blur keydown keyup keypress change',function(){
	var title_value=$(this).val();
	console.log(title_value);
	$('#bar').text(title_value);
});
	var data = {
		"items": [{
			 	"title": "",
			 	"color": "",
			 	"fontsize": "",
			 	"max": "",
			 	"min": "",
				 	}],

	}
	function myFunction(){
		data.items [0].title = document.getElementById("title").value;
		data.items [0].color = document.getElementById("color").value;
		data.items [0].fontsize = document.getElementById("fontsize").value;
		data.items [0].max = document.getElementById("max").value;
		data.items [0].min = document.getElementById("min").value;
		document.getElementById("demo").innerHTML = '&lt;script>var data='+JSON.stringify(data)+'&lt;/script>';
	};
		</script>
		<script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.min.js"></script>
	</body>
</html>