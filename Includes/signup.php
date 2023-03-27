<?php
$servername = "localhost"; 
$username = "root";
$password = "";
$database = "myshop";

$connection = new mysqli($servername, $username, $password, $database);

$first_name = "";
$last_name = "";
$email = "";
$phone = "";
$address = "";
$birthdate = "";
$country = "";

$errorMessage = "";
$successMessage = "";

if ( $_SERVER['REQUEST_METHOD'] == 'POST') {
	$first_name = $_POST ["first_name"];
	$last_name = $_POST ["last_name"];
	$email = $_POST ["email"];
	$phone = $_POST ["phone"];
	$address = $_POST ["address"];
	$birthdate = $_POST ["birthdate"];
	$country = $_POST ["country"];

	if(isset($_POST['birthdate"']))
	{
		$birthdate = date('Y-m-d', strtotime($_POST['birthdate']));

		$query = "INSERT INTO clients (birthdate) VALUES ('$birthdate')";
		$query_run = mysqli_query($con, $query);
	}



	do {
		if (empty($first_name) || empty($last_name) || empty($email) || empty($phone) || empty($address) || empty($birthdate) || empty($country))   {
			$errorMessage = "All the fields are required";
			break;
		}


		$sql = "INSERT INTO clients (first_name, last_name, email, phone, address, birthdate, country ) ".
				"VALUES ('$first_name', '$last_name', '$email', '$phone', '$address', '$birthdate', '$country')";
		$result = $connection->query($sql);

		if (!$result) {
			$errorMessage = "Invalid query: " . $connection->error;
			break;
		}


		$first_name = "";
		$last_name = "";
		$email = "";
		$phone = "";
		$address = "";
		$birthdate = "";
		$country = "";

		$successMessage = "Client added correctly";

		header("location: /Registration-form-in-PHP/Button/uSocial.php");
		exit;
	} while (false);
}
?>
<a href="../uSocial.php"></a>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>
	<a href="1.php"></a>
<map>
        <div class="ctn">
            <?php include "../Includes/map.php"; ?>
        </div>
</map>

<div class="container my-5">
	<h2>New Clients</h2>

	<?php
	if ( !empty($errorMessage)) {
		echo "
		<div class='alert alert-warning alert-dismisible fade show' role='alert'>
			<strong>$errorMessage</strong>
			<button type='button' class='btn-close' data-bs-dimiss='alert' aria-label='Close'></button>
		</div>
		";
	}
	?>

	<form method="post">
		<div class="row mb-3">
			<label class="col-sm-3 col-form-label">First name</label>
			<div class="col-sm-6">
				<input type="text" class="form-control" name="first_name" value="<?php echo $first_name; ?>">
			</div>
		</div>
		<div class="row mb-3">
			<label class="col-sm-3 col-form-label">Last name</label>
			<div class="col-sm-6">
				<input type="text" class="form-control" name="last_name" value="<?php echo $last_name; ?>">
			</div>
		</div>
		<div class="row mb-3">
			<label class="col-sm-3 col-form-label">Email</label>
			<div class="col-sm-6">
				<input type="text" class="form-control" name="email" value="<?php echo $email; ?>">
			</div>
		</div>
		<div class="row mb-3">
			<label class="col-sm-3 col-form-label">Phone</label>
			<div class="col-sm-6">
				<input type="text" class="form-control" name="phone" value="<?php echo $phone; ?>">
			</div>
		</div>
		<div class="row mb-3">
			<label class="col-sm-3 col-form-label">Address</label>
			<div class="col-sm-6">
				<input type="text" class="form-control" name="address" value="<?php echo $address; ?>">
			</div>
		</div>
		<div class="row mb-3">
			<label class="col-sm-3 col-form-label">Birthdate</label>
			<div class="col-sm-6">
				<input type="date" class="form-control" name="birthdate" >
			</div>
		</div>
		<div class="row mb-3">
			<label class="col-sm-3 col-form-label">Country</label>
			<div class="col-sm-6">
				<!-- <select type="text" name="country" id="country" class="form-control">

				</select> -->
				<select  name="country" >
  <option value="Австралийский Союз">Австралийский Союз</option>
  <option value="Австрийская Республика">Австрийская Республика</option>
  <option value="Азербайджанская Республика">Азербайджанская Республика</option>
  <option value="Республика Албания">Республика Албания</option>
  <option value="Алжирская Народная Демократическая Республика">Алжирская Народная Демократическая Республика</option>
  <option value="	Республика Ангола">	Республика Ангола</option>
	<option value="	Княжество Андорра">	Княжество Андорра</option>
	<option value="Антигуа и Барбуда">Антигуа и Барбуда</option>
	<option value="Аргентинская Республика">Аргентинская Республика</option>
	<option value="Республика Армения">Республика Армения</option>
	<option value="	Исламский Эмират Афганистан">	Исламский Эмират Афганистан</option>
	<option value="Содружество Багамских Островов">Содружество Багамских Островов</option>
	<option value="	Народная Республика Бангладеш">	Народная Республика Бангладеш</option>
	<option value="Барбадос">Барбадос</option>
	<option value="Королевство Бахрейн">Королевство Бахрейн</option>
	<option value="	Белиз">Белиз</option>
	<option value="Королевство Бельгия">Королевство Бельгия</option>
	<option value="	Республика Бенин">	Республика Бенин</option>
	<option value="Республика Болгария">Республика Болгария</option>
	<option value="Многонациональное Государство Боливия">Многонациональное Государство Боливия</option>
	<option value="Босния и Герцеговина">Босния и Герцеговина</option>
	<option value="Республика Ботсвана">Республика Ботсвана</option>
	<option value="Федеративная Республика Бразилия">Федеративная Республика Бразилия</option>
	<option value="Государство Бруней-Даруссалам">	Государство Бруней-Даруссалам</option>
	<option value="Буркина-Фасо">Буркина-Фасо</option>
	<option value="Республика Бурунди">Республика Бурунди</option>
	<option value="Королевство Бутан">Королевство Бутан</option>
	<option value="Республика Вануату">Республика Вануату</option>
	<option value="Соединённое Королевство Великобритании и Северной Ирландии">Соединённое Королевство Великобритании и Северной Ирландии</option>
	<option value="Венгрия">Венгрия</option>
	<option value="Боливарианская Республика Венесуэла">Боливарианская Республика Венесуэла</option>
	<option value="Демократическая Республика Восточный Тимор">Демократическая Республика Восточный Тимор</option>
	<option value="Социалистическая Республика Вьетнам">Социалистическая Республика Вьетнам</option>
	<option value="Габонская Республика">Габонская Республика</option>
	<option value="Республика Гаити">Республика Гаити</option>
	<option value="Кооперативная Республика Гайана">Кооперативная Республика Гайана</option>
	<option value="Республика Гамбия">Республика Гамбия</option>
	<option value="Республика Гана">Республика Гана</option>
	<option value="Республика Гватемала">Республика Гватемала</option>
	<option value="Гвинейская Республика">Гвинейская Республика</option>
	<option value="Республика Гвинея-Бисау">Республика Гвинея-Бисау</option>
	<option value="	Федеративная Республика Германия">	Федеративная Республика Германия</option>
	<option value="Республика Гондурас">Республика Гондурас</option>
	<option value="Гренада">Гренада</option>
	<option value="Греческая Республика">Греческая Республика</option>
	<option value="Грузия">Грузия</option>
	<option value="Королевство Дания">Королевство Дания</option>
	<option value="Республика Джибути">Республика Джибути</option>
	<option value="Содружество Доминики">Содружество Доминики</option>
	<option value="Доминиканская Республика">Доминиканская Республика</option>
	<option value="Арабская Республика Египет">Арабская Республика Египет</option>
	<option value="Республика Замбия">Республика Замбия</option>
	<option value="Республика Зимбабве">Республика Зимбабве</option>
	<option value="Государство Израиль">Государство Израиль</option>
	<option value="Республика Индия">Республика Индия</option>
	<option value="Республика Индонезия">Республика Индонезия</option>
	<option value="Иорданское Хашимитское Королевство">Иорданское Хашимитское Королевство</option>
	<option value="Республика Ирак">Республика Ирак</option>
	<option value="Исламская Республика Иран">Исламская Республика Иран</option>
	<option value="Республика Ирландия">Республика Ирландия</option>
	<option value="Исландия">Исландия</option>
	<option value="Королевство Испания">Королевство Испания</option>
	<option value="Итальянская Республика">Итальянская Республика</option>
	<option value="Республика Кабо-Верде">Республика Кабо-Верде</option>
	<option value="Республика Казахстан">Республика Казахстан</option>
	<option value="Королевство Камбоджа">Королевство Камбоджа</option>
	<option value="Республика Камерун">Республика Камерун</option>
	<option value="Канада">Канада</option>
	<option value="Государство Катар">Государство Катар</option>
	<option value="Республика Кения">Республика Кения</option>
	<option value="Республика Кипр">Республика Кипр</option>
	<option value="Киргизская Республика">Киргизская Республика</option>
	<option value="Республика Кирибати">Республика Кирибати</option>
	<option value="Китайская Народная Республика">Китайская Народная Республика</option>
	<option value="Республика Колумбия">Республика Колумбия</option>
	<option value="Союз Коморских Островов">Союз Коморских Островов</option>
	<option value="Республика Конго">Республика Конго</option>
	<option value="Демократическая Республика Конго">Демократическая Республика Конго</option>
	<option value="Корейская Народно-Демократическая Республика">Корейская Народно-Демократическая Республика</option>
	<option value="Республика Корея">Республика Корея</option>
	<option value="Республика Коста-Рика">Республика Коста-Рика</option>
	<option value="Республика Кот-д’Ивуар">Республика Кот-д’Ивуар</option>
	<option value="Республика Куба">Республика Куба</option>
	<option value="Государство Кувейт">Государство Кувейт</option>
	<option value="Лаосская Народно-Демократическая Республика">Лаосская Народно-Демократическая Республика</option>
	<option value="Латвийская Республика">Латвийская Республика</option>
	<option value="Королевство Лесото">Королевство Лесото</option>
	<option value="Республика Либерия">Республика Либерия</option>
	<option value="Ливанская Республика">Ливанская Республика</option>
	<option value="Государство Ливия">Государство Ливия</option>
	<option value="Литовская Республика">Литовская Республика</option>
	<option value="Княжество Лихтенштейн">Княжество Лихтенштейн</option>
	<option value="Великое Герцогство Люксембург">Великое Герцогство Люксембург</option>
	<option value="Республика Маврикий">Республика Маврикий</option>
	<option value="Исламская Республика Мавритания">Исламская Республика Мавритания</option>
	<option value="Республика Мадагаскар">Республика Мадагаскар</option>
	<option value="Республика Малави">Республика Малави</option>
	<option value="Малайзия">Малайзия</option>
	<option value="Республика Мали">Республика Мали</option>
	<option value="Мальдивская Республика">Мальдивская Республика</option>
	<option value="Республика Мальта">Республика Мальта</option>
	<option value="Королевство Марокко">Королевство Марокко</option>
	<option value="Республика Маршалловы Острова">Республика Маршалловы Острова</option>
	<option value="Мексиканские Соединённые Штаты">Мексиканские Соединённые Штаты</option>
	<option value="Федеративные Штаты Микронезии">Федеративные Штаты Микронезии</option>
	<option value="Республика Мозамбик">Республика Мозамбик</option>
	<option value="Республика Молдова">Республика Молдова</option>
	<option value="Княжество Монако">Княжество Монако</option>
	<option value="Монголия">Монголия</option>
	<option value="Республика Союз Мьянма">Республика Союз Мьянма</option>
	<option value="Республика Намибия">Республика Намибия</option>
	<option value="Республика Науру">Республика Науру</option>
	<option value="Федеративная Демократическая Республика Непал">Федеративная Демократическая Республика Непал</option>
	<option value="Республика Нигер">Республика Нигер</option>
	<option value="Федеративная Республика Нигерия">Федеративная Республика Нигерия</option>
	<option value="Королевство Нидерландов">Королевство Нидерландов</option>
	<option value="Республика Никарагуа">Республика Никарагуа</option>
	<option value="Новая Зеландия">Новая Зеландия</option>
	<option value="Королевство Норвегия">Королевство Норвегия</option>
	<option value="Объединённые Арабские Эмираты">Объединённые Арабские Эмираты</option>
	<option value="Султанат Оман">Султанат Оман</option>
	<option value="Исламская Республика Пакистан">Исламская Республика Пакистан</option>
	<option value="Республика Палау">Республика Палау</option>
	<option value="Республика Панама">Республика Панама</option>
	<option value="Независимое Государство Папуа — Новая Гвинея">Независимое Государство Папуа — Новая Гвинея</option>
	<option value="Республика Парагвай">Республика Парагвай</option>
	<option value="Республика Перу">Республика Перу</option>
	<option value="Республика Польша">Республика Польша</option>
	<option value="Португальская Республика">Португальская Республика</option>
	<option value="Республика Руанда">Республика Руанда</option>
	<option value="Румыния">Румыния</option>
	<option value="Республика Эль-Сальвадор">Республика Эль-Сальвадор</option>
	<option value="Независимое Государство Самоа">Независимое Государство Самоа</option>
	<option value="Республика Сан-Марино">Республика Сан-Марино</option>
	<option value="Демократическая Республика Сан-Томе и Принсипи">Демократическая Республика Сан-Томе и Принсипи</option>
	<option value="Королевство Саудовская Аравия">Королевство Саудовская Аравия</option>
	<option value="Республика Северная Македония">Республика Северная Македония</option>
	<option value="Республика Сейшельские Острова">Республика Сейшельские Острова</option>
	<option value="Республика Сенегал">Республика Сенегал</option>
	<option value="Сент-Винсент и Гренадины">Сент-Винсент и Гренадины</option>
	<option value="Федерация Сент-Китс и Невис">Федерация Сент-Китс и Невис</option>
	<option value="Сент-Люсия">Сент-Люсия</option>
	<option value="Республика Сербия">Республика Сербия</option>
	<option value="Республика Сингапур">Республика Сингапур</option>
	<option value="Сирийская Арабская Республика">Сирийская Арабская Республика</option>
	<option value="Словацкая Республика">Словацкая Республика</option>
	<option value="Республика Словения">Республика Словения</option>
	<option value="Соединённые Штаты Америки">Соединённые Штаты Америки</option>
	<option value="Соломоновы Острова">Соломоновы Острова</option>
	<option value="Федеративная Республика Сомали">Федеративная Республика Сомали</option>
	<option value="Республика Судан">Республика Судан</option>
	<option value="Республика Суринам">Республика Суринам</option>
	<option value="Республика Сьерра-Леоне">Республика Сьерра-Леоне</option>
	<option value="Республика Таджикистан">Республика Таджикистан</option>
	<option value="Королевство Таиланд">Королевство Таиланд</option>
	<option value="Объединённая Республика Танзания">Объединённая Республика Танзания</option>
	<option value="Тоголезская Республика">Тоголезская Республика</option>
	<option value="Королевство Тонга">Королевство Тонга</option>
	<option value="Республика Тринидад и Тобаго">Республика Тринидад и Тобаго</option>
	<option value="Тувалу">Тувалу</option>
	<option value="Тунисская Республика">Тунисская Республика</option>
	<option value="Туркменистан">Туркменистан</option>
	<option value="Турецкая Республика">Турецкая Республика</option>
	<option value="Республика Уганда">Республика Уганда</option>
	<option value="Республика Узбекистан">Республика Узбекистан</option>
	<option value="Украина">Украина</option>
	<option value="Восточная Республика Уругвай">Восточная Республика Уругвай</option>
	<option value="Республика Фиджи">Республика Фиджи</option>
	<option value="Республика Филиппины">Республика Филиппины</option>
	<option value="Финляндская Республика">Финляндская Республика</option>
	<option value="Французская Республика">Французская Республика</option>
	<option value="Республика Хорватия">Республика Хорватия</option>
	<option value="Центральноафриканская Республика">Центральноафриканская Республика</option>
	<option value="Республика Чад">Республика Чад</option>
	<option value="Черногория">Черногория</option>
	<option value="Чешская Республика">Чешская Республика</option>
	<option value="Республика Чили">Республика Чили</option>
	<option value="Швейцарская Конфедерация">Швейцарская Конфедерация</option>
	<option value="Королевство Швеция">Королевство Швеция</option>
	<option value="Демократическая Социалистическая Республика Шри-Ланка">Демократическая Социалистическая Республика Шри-Ланка</option>
	<option value="Республика Эквадор">Республика Эквадор</option>
	<option value="Республика Экваториальная Гвинея">Республика Экваториальная Гвинея</option>
	<option value="Государство Эритрея">Государство Эритрея</option>
	<option value="Королевство Эсватини">Королевство Эсватини</option>
	<option value="Эстонская Республика">Эстонская Республика</option>
	<option value="	Федеративная Демократическая Республика Эфиопия">	Федеративная Демократическая Республика Эфиопия</option>
	<option value="Южно-Африканская Республика">Южно-Африканская Республика</option>
	<option value="Республика Южный Судан">Республика Южный Судан</option>
	<option value="Ямайка">Ямайка</option>
	<option value="Государство Япония">Государство Япония</option>
</select>

</div>
</div>
 

		

		<?php
		if ( !empty($successMessage) ) {
			echo "
			<div class='row mb-3'>
				<div class='offset-sm-3 col-sm-6'>
					<div class='alert alert-success alert-dismissible fade show' role='alert'>
						<strong>$successMessage</strong>
						<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label=''></button>
					</div>
				</div>
			</div>
			";
		}
		?>
		<div class="row mb-3">
			<div class="offset-sm-3 col-sm-3 d-grid">
				<button type="submit" class="btn btn-primary">Next</button>
			</div>
			<div class="col-sm-3 d-grid">
				<a class="btn btn-outline-primary" href="./all-members.php" role="button">Cancel</a>
			</div>
		</div>
	</form>
</div>



</body>
</html>