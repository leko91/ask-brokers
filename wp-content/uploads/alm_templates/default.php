<a href="<?php the_permalink(); ?>" class="home-article">
                    <img src="http://via.placeholder.com/200x200" alt="" class="home-article__image">

                    <div class="home-article__content">
                        <span class="home-article__title"><?php the_title(); ?></span>

                        <p class="home-article__text"><?php echo wp_trim_words(get_the_content(), 50); ?></p>

                        <span class="home-article__source">Bloomberg</span>
                    </div>
                </a>