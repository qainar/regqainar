<!DOCTYPE html>
<html>
<head>
	<title>reg</title>
</head>
<link rel="stylesheet" href="style.css">
<body>

<?php
    require ('connect.php');

    if (isset($_POST['name']) && isset($_POST['pass'])){
        $name=$_POST['name'];
        $email=$_POST['email'];
        $pass=$_POST['pass'];

        $query="INSERT INTO users (username, password, email) VALUES ('$name','$email', '$pass')";

        $result=mysqli_query($connection, $query);

        if ($result){
            $su="Регистрация прошла успешна";
        } else{
            $fu="Ошибка";
        }
    }
?>

		<div class="main">
			<div class="reg">
				<div class="kek">
					<form class="for" method="POST">
						<span class="spa">Присоединяйся к нам</span>


                        <div class="global">

                            <div class="in">
							<label class="lab">Полное имя</label><br>
							<input class="input" type="text" name="name" placeholder="Введите имя">
						</div>

						<div class="in">
							<label class="lab">Почта</label><br>
							<input class="input" type="text" name="email" placeholder="Введите почту">
						</div>

						<div class="in">
							<label class="lab">Пароль</label><br>
							<input class="input" type="text" name="pass" placeholder="********" required>
						</div>

                            <button type="submit" id="knop">
                                Зарегаться
                            </button>

                        </div>


						<div class="sig">
							<a href="#" id="knop">Войти</a>
						</div>

					</form>
				</div>
			</div>
		</div>
</body>
</html>