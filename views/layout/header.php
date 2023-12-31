<!DOCTYPE html>

<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Tienda de Comics</title>
<link rel="stylesheet" href="<?=base_url?>/css/styles.css">


    </head>
    <body>
        <div id="container">
            <!-- CABECERA -->

            <header id="header">
                <div id="logo">
                    <img src="<?=base_url?>/img/comics.png" alt="comics">
                    <a href="index.php">
                        Tienda de comics
                    </a>
                </div>
            </header>

            <!-- MENU -->

			<!-- MENU -->
			<?php $categorias = Utils::showCategorias(); ?>
			<nav id="menu">
				<ul>
					<li>
						<a href="<?=base_url?>">Inicio</a>
					</li>
					<?php while($cat = $categorias->fetch_object()): ?>
						<li>
							<a href="<?=base_url?>categoria/ver&id=<?=$cat->id?>"><?=$cat->nombre?></a>
						</li>
					<?php endwhile; ?>
				</ul>
			</nav>

			<div id="content">