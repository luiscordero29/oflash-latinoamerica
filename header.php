<html lang="en">
    <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php wp_title(); ?></title>
    <?php wp_head(); ?>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/vendor/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/vendor/font-awesome/web-fonts-with-css/css/fontawesome-all.min.css">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/vendor/owl.carousel/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/vendor/owl.carousel/dist/assets/owl.theme.default.min.css">
    <!-- Oflash Latino America -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
    </head>
    <body id="<?php echo oflash_body_id(); ?>">
        <section id="main-menu">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="menu">
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-bars fa-2x"></i>
                                </button>

                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <?php 
                                        $menu_name = 'main'; 
                                        if ( ( $locations = get_nav_menu_locations() ) && isset( $locations[ $menu_name ] ) ) {
                                            $menu = wp_get_nav_menu_object( $locations[ $menu_name ] );
                                         
                                            $menu_items = wp_get_nav_menu_items($menu->term_id);
                                            
                                            $this_item = current( wp_filter_object_list( $menu_items, array( 'object_id' => get_queried_object_id() ) ) );

                                            $menu_list = '<nav class="nav">';
                                         
                                            foreach ( (array) $menu_items as $key => $menu_item ) {
                                                if (get_queried_object_id() != $menu_item->object_id) {
                                                    $menu_list .= '<a class="nav-link" href="' . $menu_item->url . '">' . $menu_item->title . '</a>';
                                                }else{
                                                    $menu_list .= '<a class="nav-link active" href="' . $menu_item->url . '">' . $menu_item->title . '</a>';
                                                }
                                            }
                                            $menu_list .= '</nav>';
                                        } else {
                                            $menu_list = '<nav class="nav"><a class="nav-link disabled">Menu "' . $menu_name . '" not defined.</a></nav>';
                                        }
                                        echo $menu_list;
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="logo">
                            <a class="text-center" href="<?php echo esc_url( home_url( '/' ) ); ?>">
                                <span class="oflash">OFLASH</span><span class="latinoamerica">LATINOAMERICA</span>
                            </a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="follow-me">
                            <ul class="nav justify-content-end">
                                <li class="nav-item">
                                    <a class="nav-link active" href="http://www.instagram.com/oflash_la" target="_black">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" href="http://www.facebook.com/Oflash.Corporacion/" target="_black">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" href="http://www.twitter.com/Oflash_la" target="_black">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" href="http://www.youtube.com/channel/UC6m6BB2nb3qdW1LypBBcwQQ" target="_black">
                                        <i class="fab fa-youtube"></i>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" href="#">
                                        <i class="fas fa-search"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>