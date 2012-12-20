
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
        <div id="logo"><a href="index.html"><img src="<?php echo base_url(); ?>images/logoKing1.png" alt="" title="" border="0" /></a></div>
        <div id="menu">
            <ul>                                                                                            
                <li><a class="current" href="index.html" title="">Página principal</a></li>
                <li><a href="about.html" title="">A Empresa</a></li>
                <li><a href="products.html" title="">Produtos</a></li>
                <li><a href="#" title="">Serviços</a></li>
                <li><a href="#" title="">Portefólio</a></li>
                <li><a href="contact.html" title="">Contatos</a></li>
            </ul>
        </div>


    </div>