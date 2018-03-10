<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>test Script Run</title>
<script language="javascript">
</script>
<style>
	.decode{
		clear:both;
	}
	.txtdecode{
		width:500px;
		height:100px;
	}
</style>

</head>
<body>
<?php 
$file=file_get_contents('file_template.js');
?>
<div class="decode">
	
    <div class="title">
    	Mã code bs-serving
    </div>
    <div>
    	<textarea class="txtdecode" name="txtcode" id="txtcode"></textarea>
        <br />
        <input type="button" onclick="decode();" name="encode" value="Lấy code" />
    </div>
    <div class="title">
    	Mã code cần lấy
    </div>
    <div>
    	<textarea class="txtdecode" style="display: none;" name="template" id="template"><?php echo $file;?></textarea>
    	<textarea class="txtdecode" name="getcode" id="getcode"></textarea>
    </div>
</div>
<script language="javascript">
function decode(){
	var idcode=document.getElementById('txtcode');
	var valueCode=idcode.value;
	var idgetcode=document.getElementById('getcode');
	var txttemplate=document.getElementById('template').value;
	
	var arrhref=/href="([^\"]+)"/.exec(valueCode);
	var arrimage=/img src="([^\"]+)"/.exec(valueCode);
	var arrscript=/script src="([^\"]+)"/.exec(valueCode);

	txttemplate=txttemplate.replace('{click}',arrhref[1].replace(/http:|https:/,''));
	txttemplate=txttemplate.replace('{script}',arrscript[1].replace(/http:|https:/,''));
	txttemplate=txttemplate.replace('{image}',arrimage[1].replace(/http:|https:/,''));

	idgetcode.value=txttemplate;
}

</script>
</body>
</html>
