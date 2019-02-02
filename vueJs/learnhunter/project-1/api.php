<?php
	header('Content-type: application/json');

	$datas['info'] = array(
		['Name' => 'Md Salahuddin Khan','Mobile' => '+8801707073341'],
		['Name' => 'Md Rony Khan','Mobile' => '+8801977073341'],
		['Name' => 'Md Kamal Uddin','Mobile' => '+8801977073340'],
		['Name' => 'Md Jamal Uddin','Mobile' => '+8801977073350']
	);

	echo json_encode($datas);
?>