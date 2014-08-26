<!doctype HTML>
<html dir="ltr">
    <head lang="pt">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <title>Impacto Tecnologia - <?php echo $this->title; ?></title>
        <meta name="description" content="Impacto Tecnologia - Cursos de Tecnologia da Informação">	    
        <meta name="keywords" content="Cursos de Tecnologia, Impacto, Impacto Tecnologia, Web, Office, Gestão, Desenvolvimento">
        <meta name="robots" content="index,follow">
        <meta name="abstract" content="Impacto Tecnologia é uma empresa líder no setor de cursos e treinamentos">
        <meta name="subject" content="Cursos de Tecnologia e Capacitação"> 
        <meta name="rating" content="General">
        <meta name="copyright" content="MegaCode">
        <meta rel="publisher" content="MegaCode">
        <meta name="url" content="http://www.impacto.equipemegacode.com">
        <meta name="city" content="São Paulo"> 
        <meta name="country" content="Brasil"> 
        <meta name="distribution" content="Global">
        <meta name="service" content="MegaCode - Criação e desenvolvimento de sites, aplicativos, software, campanhas web e materiais gráficos"> 
        <meta name="geography" content="São Paulo">
        <meta name="author" content="MegaCode">
        <link rel="stylesheet" type="text/css" media="all" href="<?php \Impacto\StaticLoader::get_style("libs/bootstrap.min"); ?>">
        <link rel="stylesheet" type="text/css" media="all" href="<?php \Impacto\StaticLoader::get_style("style"); ?>">
	</head>
    <body>
        <?php include \Impacto\ClassLoader::get_view("base/header"); ?>
        <div class="container">
            <div class="row">
                <?php include \Impacto\ClassLoader::get_view("base/sidebar"); ?>
                <div class="col-md-9">
                    <?php $this->render_body(); ?>
                </div>
            </div>
        </div>
        <div class="container">
            <footer>
                <div class="row">
                    <div class="col-lg-12">
                        <p>Copyright © Your Website 2014</p>
                    </div>
                </div>
            </footer>
        </div>
        <script type="text/javascript" src="<?php \Impacto\StaticLoader::get_script("libs/jquery-1.11.1.min"); ?>"></script>
        <script type="text/javascript" src="<?php \Impacto\StaticLoader::get_script("libs/bootstrap.min"); ?>"></script>
        <?php $this->render_script(); ?>
    </body>
</html>