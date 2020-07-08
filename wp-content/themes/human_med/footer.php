<footer class="footer ">
    <div class="container">
        <p class="grid-7"><?php bloginfo('name'); ?> <?php echo date('Y'); ?> - Todos os direitos reservados</p>
        <div class="redes_sociais">
            <ul>
                <?php if (have_rows('redes_sociais')) : while (have_rows('redes_sociais')) : the_row(); ?>
                        <li><a href="<?php the_sub_field('link_rede'); ?>" target="_blank"><img src="<?php the_sub_field('logo_rede'); ?>" ></a>
                        </li>
                <?php endwhile;
                else : endif; ?>
            </ul>
        </div>

    </div>
    <script>
        $(document).ready(function() {
            $('.sidenav').sidenav();
        });
    </script>

    <script src="/human_med/js/scroll.js"></script>


</footer>
<?php wp_footer(); ?>
</body>

</html>