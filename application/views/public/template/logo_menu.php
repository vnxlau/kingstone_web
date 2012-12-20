
<body>
    <script>
        $( function() {
        $.vegas({
            src:'<?php echo base_url(); ?>images/images_vegas/canyon.jpg'
        });
        $.vegas({
            src:'<?php echo base_url(); ?>images/images_vegas/stone.jpg'
        });
        $.vegas('overlay', {
            src:'<?php echo base_url(); ?>imagesoverlays/13.png'
        });
        });
</script>
<div id="wrap">
<div class="top_corner"></div>
<div id="main_container">

    <div id="header">
        <div id="logo"><a href="<?php echo site_url("main_controller"); ?>"><img src="<?php echo base_url(); ?>images/logoKing1.png" alt="" title="" border="0" /></a></div>
        <div id="menu">
            <ul>                                                                                            
                <li><a class="current" href="<?php echo site_url("main_controller"); ?>" title="">Página principal</a></li>
                <li><a href="<?php echo site_url("main_controller/empresa"); ?>" title="">A Empresa</a></li>
                <li><a href="<?php echo site_url("main_controller/produtos"); ?>" title="">Produtos</a></li>
                <li><a href="<?php echo site_url("main_controller/servicos"); ?>" title="">Serviços</a></li>
                <li><a href="<?php echo site_url("main_controller/portfolio"); ?>" title="">Portefólio</a></li>
                <li><a href="<?php echo site_url("main_controller/contactos"); ?>" title="">Contactos</a></li>
            </ul>
        </div>


    </div>