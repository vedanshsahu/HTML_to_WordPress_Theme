<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>

</head>

<body>
    <!-- Header -->
    <nav id="main_nav" class="navbar navbar-expand-lg navbar-light bg-white shadow">
        <div class="container d-flex justify-content-between align-items-center">
            <a class="navbar-brand h1 logo" href="<?php echo get_site_url(); ?>">
            <?php
                            $custom_logo_id = get_theme_mod( 'custom_logo' );
                            $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                             
                            if ( has_custom_logo() ) {
                                echo '<img src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '">';
                            } else {?>
                                <i class='bx bx-buildings bx-sm text-dark'></i>
                                <span class="text-dark h4">Purple</span> <span class="text-primary h4">Buzz</span>
                            <?php
                            }?>
            </a>
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-toggler-success" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="align-self-center collapse navbar-collapse flex-fill  d-lg-flex justify-content-lg-between" id="navbar-toggler-success">
                <?php
                        wp_nav_menu( array( 
                            'theme_location' => 'main-menu', 
                            'container' => 'div',
                            'container_class' => 'flex-fill mx-xl-5 mb-2',
                            'menu_class'      => 'nav navbar-nav d-flex justify-content-between mx-xl-5 text-center text-dark',
                            'list_item_class' => 'nav-item',
                            'link_class'   => 'nav-link btn-outline-primary rounded-pill px-3'
                        ) );
                ?>   
                
                <div class="navbar align-self-center d-flex">
                    <a class="nav-link" href="<?php echo get_site_url().'/wp-admin/edit-comments.php' ?>"><i class='bx bx-bell bx-sm bx-tada-hover text-primary'></i></a>
                    <a class="nav-link" href="<?php echo get_site_url().'/wp-admin/index.php' ?>"><i class='bx bx-cog bx-sm text-primary'></i></a>
                    <a class="nav-link" href="<?php echo get_site_url().'/wp-admin/users.php' ?>"><i class='bx bx-user-circle bx-sm text-primary'></i></a>
                </div>
            </div>
        </div>
    </nav>
    <!-- Close Header -->