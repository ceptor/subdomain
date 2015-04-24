<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
        <?php include('include/header.php');?>
	</head>
	<body>
		<div class="container">
			<header>
				<h1>Lorem ipsum dolor sit amet, <span>consectetur adipiscing elit. Etiam dolor</span></h1>

                <ul class="authorize">
                    <li><a href="#">Регистрация</a></li>
                    <li><a href="#">Вход</a></li>
                </ul>

                <div id="sb-search" class="sb-search">
                    <form>
                        <input class="sb-search-input" placeholder="Найти на сайте..." type="search" value="" name="search" id="search">
                        <input class="sb-search-submit" type="submit" value="">
                        <span class="sb-icon-search"></span>
                    </form>
                </div>
			</header>

			<div class="main clearfix">

				<div class="column-left">
					<?php include('include/left-menu.php');?>
				</div>

				<div class="column-middle">
                    <?php include('include/fish.php');?>
				</div>

                <div class="column-right">
                    <?php include('include/fish1.php');?>
                </div>

			</div>

            <div class="footer">
                <h1>Lorem ipsum dolor sit amet, <span>consectetur adipiscing elit. Etiam dolor</span></h1>
            </div>

		</div><!-- /container -->
		<?php include('include/script.php') ?>
	</body>
</html>