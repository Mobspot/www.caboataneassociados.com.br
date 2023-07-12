<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once("commons/header.html"); ?>
</head>
<body>
    <header class="site-header">
		<?php include_once("commons/submenu.html"); ?>
        <?php include_once("commons/menu.html"); ?>      
    </header>
	
    <div class="bread_area">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <ol class="breadcrumb">
                        <li><a href="index.php">Home</a></li>
                        <li class="active">Quem Somos</li>
                    </ol>                    
                </div>
            </div>
        </div>
    </div>
    <main class="site-main page-main">
        <div class="container">
            <div class="row">
                <section class="page col-sm-9">
                    <h2 class="page-title">Quem Somos Nós</h2>
                    <div class="entry">
                        <p><h2>A CABOATAN & ASSOCIADOS é uma organização de prestação de serviços de auditoria e contabilidade.</h2></p>
						<img src="img/mvv.png" style="width:50%;"/>
						<h4>
							<p>Formada por profissionais com mais de 27 anos de experiência em auditoria e consultoria empresarial, adquirida em empresas nacionais e multinacionais, tendo prestado seus serviços a empresas de renome.</p>

							<p>Oferecemos inovação e serviços de alta qualidade através do conhecimento técnico e vivência profissional.</p>

							<p>Esse enfoque especial qualifica nossos profissionais para que possam prestar aos clientes quaisquer dos serviços por nós oferecidos de modo que atendam ou supere as suas expectativas.</p>

							<p>Temos certeza de que os conhecimentos, as habilidades, a atenção e os recursos de nossos profissionais farão com que prestemos o tipo e nível de serviços que nossos clientes desejam.</p>    

							<p>Em nosso quadro funcional contamos com profissionais especializados e com vasta vivência na área, o que nos permite garantir tratamento essencialmente técnico aos assuntos que nos forem confiados.</p>
						</h4>
                    </div>
                </section>
                <aside class="sidebar col-sm-3">
                    <div class="widget">
                        <h4>CABOATAN</h4>
                        <ul>
                            <li class="current"><a href="#" title="">Missão</a></li>
                            <li><a href="#" title="">Visão</a></li>
                            <li><a href="#" title="">Valores</a></li>
                        </ul>
                    </div>
                </aside>
            </div>
        </div>
		<?php include_once("commons/prefooter.html"); ?>
    </main>
    
    <footer class="site-footer">
		<?php include_once("commons/footer.html"); ?>
		<?php include_once("commons/foot.html"); ?>
	</footer>
	<?php include_once("commons/scripts.html"); ?>
	
</body>
</html>