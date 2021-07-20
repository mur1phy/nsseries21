<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1">

<link type="text/css" rel="stylesheet" href="http://code.jquery.com/mobile/latest/jquery.mobile.min.css">
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
<script type="text/javascript" src="http://code.jquery.com/mobile/latest/jquery.mobile.min.js"></script>
<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/style.css">
<script src="js/function.js"></script>
</head>
<?php
include "tamplate-parts/nscup-menu-bar.php";
include "../conn.php";
include "../setting.php";
?>

<body>
<div>
    <div>
        <span>You are in </span><span class="title">Forward S </span><span>page</span>
    </div>
    <div>
        <p>Player Infomation</p>
        <label id="playertInfo"></label>
        <label>Player: </label><input type="text" name="play"/><br><br>
        <label>Result: </label><input type="text" name="result"/><br><br>
        <label>Penalty: </label><input type="text" name="penatly"/><br><br>
        <input type="submit" value="Submit"/>
    </div>
</div>
<script>
    let jName = login();
    document.getElementById("judgeName").innerHTML = jName;
</script>
</body>
<?php
	//check input error
	if(isset($_POST["submit"])){
		if(!empty($_POST["result"])){
			$ckinClass = strtoupper($_POST["result"]);
		}else{
			echo "Pleae input player result";
		}

		if(!empty($_POST["penatly"])){
			$ckinCoach = strtoupper($_POST["penatly"]);
		}else{
			echo "Pleae input penatly. If no penatly, input 0.";
		}
	}

    if(!empty($ckinClass)){
		$sql_ckin = "INSERT INTO ns_coach_work2021(currentId, ckDate, ckTime, class, nscid) 
				VALUES('$currentId', '$ckDate', '$ckTime', '$ckinClass', '$ckinCoach')";
	

		if ($conn->query($sql_ckin) === TRUE) {
			echo "New record created successfully: <br>Crrent ID: ". $currentId . "<br>Time: " . $ckTime . "<br>Class: " . $ckinClass . "<br> Coach: " . $ckinCoach;
		}else {
			echo "Error: " . $sql_ckin . "<br>" . $conn->error;
		}
	}
	$ckinCl
?>
</html>