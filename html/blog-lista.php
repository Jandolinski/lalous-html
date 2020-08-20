<?php include('header.php'); ?>

<div class="container">
    <section class="blog">
        <div class="blog__top">

        </div>

        <div class="blog__center">
            <div class="posts">
                <?php for ($i = 1; $i <= 16; $i++) : ?>
                    <article class="posts__item post">
                        <div class="post__img">
                            <img src="<?php asset('blog--menu.png');?>" alt="">
                        </div>

                        <div class="post__content description">
                            <div class="description__top">
                                <div class="description__label description__label--green"> 
                                    <!-- green , pink , yellow , blue -->
                                    NOWOŚCI
                                </div>

                                <div class="description__date">
                                    24.06.2020
                                </div>
                            </div>

                            <div class="description__center">
                                <div class="text">
                                    <h4>
                                        QUIS ELEIFEND PEDE URNA 
                                        ELIT GRAVIDA JUSTO
                                    </h4>

                                    <p>
                                        Cras adipiscing wisi. Curabitur quis nibh. Donec libero dui, eget est a wisi. Praesent justo. Suspendisse sed leo facilisis pharetra. Morbi aliquam euismod nonummy. Class aptent taciti sociosqu ad litora torquent per inceptos hymenaeos. Fusce tellus. Donec consectetuer mollis. Suspendisse semper nisl, blandit lectus. Vivamus dignissim erat at nunc semper erat, fringilla purus sit amet ligula. Sed ultricies quis, feugiat sapien, non dolor...
                                        bibendum wisi bibendum pede. Vestibulum ante pretium justo. Curabitur ut malesuada id, wisi. Nam eu libero auctor quis, eleifend pede urna elit, gravida justo, at sapien. In hac habitasse platea dictumst. Praesent est ullamcorper ligula eleifend.
                                    </p>
                                </div>
                            </div>

                            <div class="description__bottom">
                                <a href="" class="link_std">
                                    więcej
                                </a>
                            </div>
                        </div>
                    </article>
                <?php endfor; ?>
            </div>
        </div>

        <div class="blog__bottom">

        </div>
    </section>

</div>


<?php include('footer.php'); ?>