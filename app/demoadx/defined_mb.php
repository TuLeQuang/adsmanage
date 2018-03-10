<?php 

	 
	  $admin_login = true;

$arrTemplate=array(
					array(
						'domain'=>'dantri',
						'temp'=>'m-dantri-vanhoa.html',
						'title'=>'Dantri-Văn hóa'
					),
					
				);
$jsonTemplate=json_encode($arrTemplate);
$arrDefined=array(
		array(
			'type'=>'3',
			'width'=>980,
			'height'=>90,
			'sticky'=>false
		),
		array(
			'type'=>'4',
			'width'=>980,
			'height'=>90,
			'sticky'=>false
		),
		array(
			'type'=>'10',
			'width'=>980,
			'height'=>90,
			'sticky'=>false
		),
		array(
			'type'=>'9',
			'width'=>980,
			'height'=>90,
			'sticky'=>false
		),
		array(
			'type'=>'15',
			'width'=>980,
			'height'=>90,
			'sticky'=>false
		)
);
$jsonDefined=json_encode($arrDefined);

?>