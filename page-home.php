<?php 
// Template name: Home
?>


    <?php get_header()?>

    <?php if (have_posts()) : while (have_posts( )): the_post( ); ?>
    
    <section class="hero" style="background-image: url('<?php the_field('imagem_de_fundo_section_banner')?>')">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="text " data-aos="fade-right">
                        <h1><?php the_field('titulo_section_hero')?></h1>
                        <p><?php the_field('subtitle-section-hero')?></p>
                        <a href="<? the_field('link_butao_section_hero')?>">
                            <button><?php the_field('texto_butao_section_hero')?></button>
                        </a>
                    </div>  
                </div>
            </div>
        </div>
   
    </section>

    <section class="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12" data-aos="fade-in">
                    <img src="<?php the_field('imagem_section_about'); ?>" alt="<?php the_field('alt_imagem_section_about'); ?>" />
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 ">
                    <div class="text " data-aos="fade-left">
                        <div class="line"></div>
                        <h2><?php the_field('titulo_section_about')?></h2>
                        <p><?php the_field('texto_section_about')?></p>
                        <a href="<?php the_field('link_butao_section_about')?>">
                            <button><?php the_field('butao_section_about')?></button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="services">
        <div class="container">

            <div class="row">
                <div class="col-12">
                    <div class="text">
                        <div class="line"></div>
                        <h4><?php the_field('titulo_section_services');?></h4>
                    </div> 
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="list-service owl-service-carrosel owl-carousel owl-theme">
                        <div class="card-service">
                            <a href="<?php the_field('link_butao_um_card_section_services');?>">
                                <div class="card" data-aos="fade-right">
                                    <div class="image">
                                        <img src="<?php the_field('imagem_card_um_section_services');?>" alt="<?php the_field('alt_imagem_card_um_section_services');?>">
                                    </div>
                                    <div class="text">
                                        <h5><?php the_field('titulo_card_um_section_services');?></h5>
                                        <p><?php the_field('texto_card_um_section_services');?></p>
                                        <button><?php the_field('butao_um_card_section_services');?></button>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="card-service">
                            <a href="<?php the_field('link_butao_dois_card_section_services');?>">
                                <div class="card" data-aos="fade-right">
                                    <div class="image">
                                        <img src="<?php the_field('imagem_card_dois_section_services');?>" alt="<?php the_field('alt_imagem_card_dois_section_services');?>">
                                    </div>
                                    <div class="text">
                                        <h5><?php the_field('titulo_card_dois_section_services');?></h5>
                                        <p><?php the_field('texto_card_dois_section_services');?></p>
                                        <button><?php the_field('texto_butao_dois_card_section_services');?></button>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="card-service">
                            <a href="<?php the_field('link_butao_tres_card_section_services');?>">
                                <div class="card" data-aos="fade-right">
                                    <div class="image">
                                        <img src="<?php the_field('imagem_card_tres_section_services');?>" alt="<?php the_field('alt_imagem_card_tres_section_services');?>">
                                    </div>
                                    <div class="text">
                                        <h5><?php the_field('titulo_card_tres_section_services');?></h5>
                                        <p><?php the_field('texto_card_tres_section_services');?></p>

                                            <button>
                                                <?php the_field('texto_butao_tres_card_section_services');?>
                                            </button>
                                    </div>
                                </div>
                            </a>
                        </div>

                        
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="owl-dots buttons-dots-service" id="dotsService">
                        
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="plans">
        <div class="container">
            <div class="row">
                <div class="col-12 plans-top">
                    <div class="text">
                        <div class="line"></div>
                        <h4><?php the_field('titulo_section_plans');?></h4>
                    </div>
                    <div class="arrows owl-nav" id="arrowsPrevNext">
                        
                    </div>
                </div>  
            </div>

            <div class="row">
                <div class="col-12 plans-botton">
                    <div class="logos-plans owl-carousel owl-carousel-plans owl-theme">
                        <div class="logo">
                            <img src="<?php the_field('imagem_logo_um_section_plans');?>" alt="<?php the_field('alt_imagem_logo_um_section_plans');?>">
                        </div>
                        <div class="logo">
                            <img src="<?php the_field('imagem_logo_dois_section_plans');?>" alt="<?php the_field('');?>">
                        </div>
                        <div class="logo">
                            <img src="<?php the_field('imagem_logo_tres_section_plans');?>" alt="<?php the_field('');?>">
                        </div>
                        <div class="logo">
                            <img src="<?php the_field('imagem_logo_quatro_section_plans');?>" alt="<?php the_field('');?>">
                        </div>
                    </div>
                    
                </div>
            </div>

            <div class="row">
                <div class="col-12 plans-button">
                    <a href="<?php the_field('');?>">
                        <button><?php the_field('texto_butao_section_plans');?></button>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="differential">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-12 card-differential-large">
                    <div class="text">
                        <div class="line"></div>
                        <h4><?php the_field('titulo_section_differential');?></h4>

                        <p><?php the_field('subtitulo_section_differential');?></p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12 card-differential-small">
                    <div class="description-icons">
                        <img src="<?php the_field('icone_diferencial_um_section_differential');?>" alt="Nossos Diferenciais">
                        <p><?php the_field('titulo_diferencial_um_section_differential');?></p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-3 col-sm-12 card-differential-small">
                    <div class="description-icons">
                        <img src="<?php the_field('icone_diferencial_dois_section_differential');?>" alt="Nossos Diferenciais">
                        <p><?php the_field('titulo_diferencial_dois_section_differential');?></p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-3 col-sm-12 card-differential-small">
                    <div class="description-icons">
                        <img src="<?php the_field('icone_tres_section_differential');?>" alt="Nossos Diferenciais">
                        <p><?php the_field('titulo_diferencial_tres_section_differential');?></p>
                    </div>
                </div> 
            </div>
        </div>
    </section>

    <section class="testimony">
        <div class="container">
            <div class="row">
                <div class="text">
                    <div class="line"></div>
                    <h4><?php the_field('titulo_section_testimony');?></h4>
                </div>
            </div>

            <div class="row">
                <div class="col-12" >
                    <div class="list owl-carousel owl-carousel-testimonys owl-theme" >
                        
                            
                                <div class="card-testimony" data-aos="fade-right">
                                    <img src="<?php the_field('imagem_depoimento_um_section_testimony');?>" class="avatar-position" alt="icon-avatar">
                                    <p><?php the_field('depoimento_um_section_testimony');?></p>
                                
                                    <div class="user-name">
                                        <h6><?php the_field('nome_usuario_depoimento_um_section_testimony');?></h6>
                                        <p><?php the_field('tipo_depoimento_um_section_testimony');?></p>
                                    </div>
                                </div>

                                <div class="card-testimony" data-aos="fade-right">
                                    <img src="<?php the_field('imagem_depoimento_dois_section_testimony');?>" class="avatar-position" alt="icon-avatar">
                                    <p><?php the_field('depoimento_dois_section_testimony');?></p>
                                
                                    <div class="user-name">
                                        <h6><?php the_field('nome_usuario_depoimento_dois_section_testimony');?></h6>
                                        <p><?php the_field('tipo_depoimento_dois_section_testimony');?></p>
                                    </div>
                                </div>

                                <div class="card-testimony" data-aos="fade-right">
                                    <img src="<?php the_field('imagem_depoimento_tres_section_testimony');?>" class="avatar-position" alt="icon-avatar">
                                    <p><?php the_field('depoimento_tres_section_testimony');?></p>
                                
                                    <div class="user-name">
                                        <h6><?php the_field('nome_usuario_depoimento_tres_section_testimony');?></h6>
                                        <p><?php the_field('tipo_tres_section_testimony');?></p>
                                    </div>
                                </div>
                            </div>
                    
                    
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="owl-dots buttons-carrosel" id="dotsPersonal">
                        
                    </div>
                </div>
            </div>
        </div>

    </section>

    <!-- section blog -->
    <?php include(get_template_directory() . '/includes/blog.php'); ?>
   
    <section class="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-5 col-sm-12">
                    <div class="text" data-aos="fade-right">
                        <div class="line"></div>
                        <h3><?php the_field('titulo_section_contact');?></h3>
                        <p><?php the_field('texto_section_contact');?></p>

                        <div class="icons-contact">
                            <div class="item-icons-contact">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/icon-whatsapp.svg" alt="whatsapp">
                                <p><?php the_field('whatsapp_section_contact');?></p>
                            </div>

                            <div class="item-icons-contact">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/icon-local.svg" alt="localização">
                                <p><?php the_field('endereco_section_contact');?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-md-7 col-sm-12">
                    <form class="form-contact">
                        <h4><?php the_field('titulo_form_section_contact');?></h4>

                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="input-form">
                                    <label>Nome</label>
                                    <input type="text">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="input-form">
                                    <label>Email</label>
                                    <input type="email">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="input-form">
                                    <label>Telefone</label>
                                    <input type="tel">
                                </div>
                                
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="input-form">
                                    <label>Endereço</label>
                                    <input type="text">
                                </div>
                                
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="input-form">
                                    <label>Mensagem</label>
                                    <textarea id="message"></textarea>
                                </div>
                            </div>
                            
                        </div>

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="term-policy">
                                    <div class="input-checkbox">
                                        <input type="checkbox">
                                        <p>Aceito as Políticas de Privacidade.</p>
                                    </div>
                                    <button>Enviar</button>
                                </div>
                                
                            </div>
                            
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </section>
    
    <?php endwhile; else: endif; ?>

    <?php get_footer()?>
   