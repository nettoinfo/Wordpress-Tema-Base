<?php
/**
 * Arquivo de modelo principal.
 *
 * Este é o arquivo mais genérico do tema
 * E é um dos dois ficheiros necessarios para um tema (o outro é o style.css)
 * É usado para exibir qualquer tipo de conteúdo na ausência de outros templates
 * Por exemplo:
 * Serve como lista de categoria quando o arquivo category.php não existe
 * Saiba mais: http://codex.wordpress.org/pt-br:Hierarquia_de_Temas_Wordpress
 *
 * PHP version 5
 *
 * @category Base
 * @package  Wordpress_Tema_Base
 * @author   Wordpress Tema Base <username@domain.com>
 * @license  GPL-2 http://www.gnu.org/licenses/gpl-2.0.html
 * @link     https://github.com/sergiovilar/Wordpress-Tema-Base/
 */
get_header();
?>

    <div id="primary">
        <div id="content" role="main">

            <?php if (have_posts()) : ?>

                <?php /* Inicia o loop de posts */ ?>
                <?php while (have_posts()) : the_post(); ?>

                    <?php get_template_part('loop'); ?>

                <?php endwhile; ?>

            <?php else : ?>

                <?php get_template_part('not-found'); ?>

            <?php endif; ?>

        </div><!-- #content -->
    </div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
