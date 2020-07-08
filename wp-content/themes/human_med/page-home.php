<?php
//Template Name: Home
?>


<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <?php $imagem_id = get_field('imagem_de_fundo');
        $imagem_grande = wp_get_attachment_image_src($imagem_id, 'large');
        $imagem_media = wp_get_attachment_image_src($imagem_id, 'medium'); ?>

        <style type="text/css">
            .introducao {
                background: url("<?php echo $imagem_grande[0]; ?>") no-repeat center;
            }

            @media only screen and (max-width: 430px) {
                .introducao {
                    background: url("<?php echo $imagem_media[0]; ?>") no-repeat;
                }
            }
        </style>
        <section class="introducao clear">

        </section>

        <section class="especialidades" id="especialidades">
            <div class="container">
                <h1><?php the_field('titulo_1'); ?></h1>

                <ul>
                    <?php if (have_rows('tipo_de_especialidades')) : while (have_rows('tipo_de_especialidades')) : the_row(); ?>


                            <li class="lista01_espec grid-8">
                                <p><?php the_sub_field('nome_da_especialidade'); ?></p>
                            </li>
                            <li class="lista01_espec grid-8">
                                <p><?php the_sub_field('nome_da_especialidade_2'); ?></p>
                            </li>
                            <li class="lista01_espec grid-2">
                                <p><?php the_sub_field('nome_da_especialidade_3'); ?></p>
                            </li>

                    <?php endwhile;
                    else : endif; ?>
                </ul>
            </div>
            <!--container-->

        </section>

        <section class="sobre" id="sobre">
            <div class="container">
                <h1><?php the_field('titulo_2'); ?></h1>
                <img src="<?php the_field('foto_da_fachada'); ?>" alt="humammed" class="grid-8">

                <p class="grid-10 "> <?php the_field('texto_sobre'); ?>
                </p>

                <div class="clear"></div>
                <div class="lista ">
                    <ul>
                        <?php if (have_rows('itens_sobre')) : while (have_rows('itens_sobre')) : the_row(); ?>
                                <li class="grid-6 visao">
                                    <h2><?php the_sub_field('titulo_item'); ?></h2>
                                    <p><?php the_sub_field('texto_item'); ?></p>
                                </li>
                        <?php endwhile;
                        else : endif; ?>
                    </ul>
                </div>
                <div class="clear"></div>

                <div class="medico">

                    <ul>
                        <?php if (have_rows('dados_medico')) : while (have_rows('dados_medico')) : the_row(); ?>
                                <li>
                                    <img src="<?php the_sub_field('imagem_medico'); ?>">
                                    <?php if (have_rows('lista_dados_medico')) : while (have_rows('lista_dados_medico')) : the_row(); ?>
                                            <ul>
                                                <li><?php the_sub_field('texto_dados_medico'); ?></li>
                                        <?php endwhile;
                                    else : endif; ?>
                                            </ul>
                                </li>

                        <?php endwhile;
                        else : endif; ?>
                    </ul>

                </div>
                <div class="clear"></div>

            </div>
            <!--container-->

        </section>

        <section class="contato" id="contato">
            <div class="container">
                <h2>Formulário de Contato</h2>
                <div id="form" class="grid-10">
                    <?php echo do_shortcode('[contact-form-7 id="58" title="Formulário de Contato"]'); ?>
                    <!--<form action="enviar.php" name="form" method="POST" class="formphp contact-form-7">
                        <label for="nome">Nome:</label>
                        <input type="text" id="nome" for="nome">
                        <label for="nome">E-mail:</label>
                        <input type="email" id="email" for="email">
                        <label for="nome">Mensagem:</label>
                        <textarea id="mensagem" name="mensagem"></textarea>

                        <label class="nao-aparece">Se você não é um robô, deixe em branco.</label>
                        <input type="text" class="nao-aparece" name="leaveblank">
                        <label class="nao-aparece">Se você não é um robô, não mude este campo.</label>
                        <input type="text" class="nao-aparece" name="dontchange" value="http://">

                        <button id="enviar" name="enviar" type="submit" class="btn">Enviar</button>
                    </form>
        -->
                    <div class="telefone">
                        <p><?php the_field('whatsapp'); ?> <?php the_field('num_celular'); ?> | <?php the_field('telefone'); ?> <?php the_field('num_telefone'); ?>
                            <?php the_field('endereco'); ?></p>
                    </div>
                </div>

                <div class="mapa grid-8">
                    <!--<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3839.253988460784!2d-47.89496668514507!3d-15.790555989053601!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x935a3af012a11759%3A0xc8d36192814ae3b2!2sTorre%20de%20TV%20de%20Bras%C3%ADlia%20-%20Bras%C3%ADlia%2C%20DF%2C%2070297-400!5e0!3m2!1spt-BR!2sbr!4v1592519113860!5m2!1spt-BR!2sbr" width="500" height="400" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0" style="margin: 0 auto;"></iframe> -->
                    <?php the_field('link_mapa'); ?> 
                </div>


            </div>
        </section>

    <?php endwhile;
else : ?>
    <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>

<?php get_footer(); ?>