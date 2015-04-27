<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
        <?php include('include/header.php');?>
	</head>
	<body>
		<div class="container">
            <!--<div class="lemon"></div>-->
            <img class="logo" src="/resources/img/edu.png">
			<header>
				<h1>Лучшие в России курсы онлайн образования для поступающих. <span style="color: #fff">Бесплатно.</span></h1>

                <ul class="authorize">
                    <li><a href="#">Регистрация</a></li>
                    <li><a href="#" class="stat1">Вход</a></li>
                </ul>

                <div id="sb-search" class="sb-search">
                    <form>
                        <input class="sb-search-input" placeholder="Найти на сайте..." type="search" value="" name="search" id="search">
                        <input class="sb-search-submit" type="submit" value="">
                        <span class="sb-icon-search"></span>
                    </form>
                </div>
			</header>

            <div class="loginin">
                <form>
                    Логин<br/>
                    <input class=loginin-login" type="text" value="" name="login" id="loginin"><br/><br/>
                    Пароль<br/>
                    <input class=loginin-pwd" type="password" value="" name="password" id="loginin"><br/><br/>
                    <a href="#"><span class="loginin-forget">Забыли пароль?</span></a>
                    <input class="loginin-button" type="submit" value="Войти"><br/>

                </form>
            </div>

            <ul class="header_2"><!-- Main navigation menu -->
                <li class="first-item"><a href="#">ЕГЭ 2015</a></li>
                <li><a class="active" href="#">ОГЭ 2015</a></li>
                <li><a href="#">Поступление 2015</a></li>
                <li class="last-item"><a href="#">Олимпиады</a></li>
            </ul>

			<div class="main clearfix">

				<div class="column-left">
					<?php include('include/left-menu.php');?>
				</div>

				<div class="column-middle">
                    <?php include('include/middle-content.php');?>
				</div>

                <div class="column-right">
                    <?php include('include/right-col.php');?>
                </div>

			</div>

            <div class="footer">
                <p>&copy; <?php echo date("Y") ?>. Lorem ipsum dolor sit amet.</p>
            </div>

		</div><!-- /container -->
		<?php include('include/script.php') ?>
	</body>
</html>