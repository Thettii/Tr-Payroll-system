			    	<?php 

			    	require 'config.php';
			    	header('Location: index.php');

			    	//     foreach ($section as $multi_section) {
			    	//     //query prepare
			    	//     $section = $multi_section;
					//     $sql = "SELECT * FROM section WHERE section = :section";
					//     $stmt = $pdo->prepare($sql);

					//     //bind statement
					//     $stmt->bindValue(':section',$section);
					//     //execute statement
					//     $stmt->execute();

					//     $row = $stmt->fetchAll();
					//     if (empty($row)) {
					//     	echo $section;
					//     	if (!empty($_POST['add_new'])) {
					//     			$tr_id = $_POST['tr_id'];
					// 				$time = date_default_timezone_set("Asia/Yangon");
					// 				$created_at = date("h:i:sa");

					// 	    		foreach ($section as $multi_section) {
					// 		    	$section = $multi_section;
					// 		  	  	$sql = "INSERT INTO section(tr_id,section,created_at) VALUES (:tr_id,:section,:created_at)";
					// 		  	  	$stmt = $pdo->prepare($sql);
					// 			    $stmt->bindValue(':tr_id',$tr_id);
					// 			    $stmt->bindValue(':section',$section);
					// 			    $stmt->bindValue(':created_at',$created_at);
					// 			    $result = $stmt->execute();
					// 				}
					//     	}
					//     	if ($result) {
					//     		echo "done";
					//     	}
					//     }
					// }

			    	?>