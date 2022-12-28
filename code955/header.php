<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php wp_head();?>
    </head>
    <body >
        <header>
            
    <nav class="navbar navbar-expand-md navbar-light  py-5 ">
            <div class="container  ">
                
              <a class="navbar-brand "  style="color:#fff;" href="#"><?php the_title()?></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
             
              <div class="collapse navbar-collapse " id="navbarScroll">
                <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll ms-auto" style="--bs-scroll-height: 100px;">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">About us</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Dropdwon
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                    <?php
	wp_nav_menu(
		array(
			'theme_location' => 'primary',
			'items_wrap'     => '%3$s',
			'container'      => false,
			'depth'          => 1,
			'link_before'    => '<span>',
			'link_after'     => '</span>',
			'fallback_cb'    => false,
		)
	);
	
	?>

                    </ul>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link disabled">Link</a>
                  </li>
                  <li class="nav-item">
                  <button type="button" class="btn btn-primary">Primary</button>
                  </li>
                </ul>
              
              </div>
            </div>
          </nav>
          <section id="Hero" class="text-light   text-start  header   py-5">
            <div class="container">
                <div class="row raw-cols-lg-2  " >
                    <div class="col col-lg-6  " >
                        <h1 class="py-5"><?php the_title()?> </h1>
                        <p class="fs-6">
                            <?php
                            if(is_home()){
                                
                                the_content();

                            } else{
                                the_excerpt();
                            }
                            ?>
                            </p>

                    </div>
                   <a class="d-flex justify-content-md-center justify-content-lg-start py-5" href="<?php echo get_permalink();?>"> <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M512 256c0 141.4-114.6 256-256 256S0 397.4 0 256S114.6 0 256 0S512 114.6 512 256zM188.3 147.1c-7.6 4.2-12.3 12.3-12.3 20.9V344c0 8.7 4.7 16.7 12.3 20.9s16.8 4.1 24.3-.5l144-88c7.1-4.4 11.5-12.1 11.5-20.5s-4.4-16.1-11.5-20.5l-144-88c-7.4-4.5-16.7-4.7-24.3-.5z"></path></svg>
                    <p > watch Video</p>
                </a>
                </div>
            </div>
          </section>
        </section>
                   </header>

       <script src="wp-content\themes\code955\assets\js\bootstrap.bundle.js"></script>