<?
	require_once ('config.php');

	//подключение к бд

	$conn = new mysqli($hostname, $username, $userpassword, $database);
	$conn->query("SET MAMES 'utf8'");
	if ($conn->connect_error){
		die ("Connection failed: " .$conn->connect_error);
	}

	//тестовый запрос к бд
	$sql = "SELECT * FROM users";
	$result = $conn->query($sql);

	$i = 0;
	if ($result->num_rows > 0){
		while ($row = $result->fetch_assoc()){
			print_r ($row);
		}	
	}
	// TODO::auth
?>