<?php
/*
* Template Name: Home
*/
get_header();

var_dump(get_field('hero_button'));
?>
<section class="banner_section">
    <div class="banner-main">
        <img style="width: 100%; height: 100%; object-fit: cover" src="<?php echo get_field('hero_image')['url']; ?>" />
        <div class="container">

            <div class="text-bg relative">
                <h1>Mp3<br><span class="Perfect">
                        <?php echo get_field('hero_title') ?>
                    </span><br>Welcome To The Music</h1>
                <p>Lorem ipsum dolor sit amet consec tetur adipiscing elit elit at felis lacinia nec et est
                    <br> aptent taciti sociosqu ad litora torquent per conubia nostra</p>
                <a href="<?php echo get_field('hero_button')['url'] ?>">
                    <?php echo get_field('hero_button')['title']?>
                </a>
            </div>

        </div>
    </div>

</section>

<!-- music-box  -->
<div class="music-box">
    <div class="container">

        <?php if( have_rows('icons') ): ?>
            <div class="row">
                <?php while( have_rows('icons') ): the_row();
                    ?>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                        <div class="for-box">
                            <i><img src="<?php echo get_sub_field('icon')['url'] ?>" alt="icon"/></i>
                            <h3><?php echo get_sub_field('title') ?></h3>
                            <p><?php echo get_sub_field('description') ?></p>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        <?php endif; ?>

    </div>
</div>
<!-- end music-box  -->

<div class="container-fluid">
    <div class="row">
        <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 padding">
            <div class="img-box">
                <figure><img src="/wp-content/themes/custom-fileds/images/musicbg.jpg" alt="img" /></figure>
            </div>
        </div>
        <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 padding">
            <div class="text-box">
                <div class="box">
                    <i><img src="/wp-content/themes/custom-fileds/images/5.png"/></i>
                    <h3>MEET OUR Music STARS</h3>
                    <p>It is a long established fact that a reader will be distracted by the readable
                        <br> content of a page when looking at its layout. The point of using Lorem </p>
                    <a href="#">Read More</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Download -->
<div id="screenshot" class="Lastestnews">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="titlepage">
                    <h2>Latest News</h2>
                    <span>It is a long established fact that a reader will be distracted by the readable <br>content of a page when looking at its layout. The point of using Lorem </span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                <div class="news-box">
                    <figure><img src="/wp-content/themes/custom-fileds/images/1.jpg" alt="img" /></figure>
                    <h3>Live With Music</h3>
                    <span> March 20</span><span>Comment</span>
                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, </p>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                <div class="news-box">
                    <figure><img src="/wp-content/themes/custom-fileds/images/2.jpg" alt="img" /></figure>
                    <h3>Best Music</h3>
                    <span> March 20</span><span>Comment</span>
                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, </p>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                <div class="news-box">
                    <figure><img src="/wp-content/themes/custom-fileds/images/3.jpg" alt="img" /></figure>
                    <h3>Live With Music</h3>
                    <span> March 20</span><span>Comment</span>
                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end Download -->

<!-- Albums -->
<div id="screenshot" class="Albums">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="titlepage">
                    <h2>Albums-box </h2>
                    <span>It is a long established fact that a reader will be distracted by the readable <br>content of a page when looking at its layout. The point of using Lorem </span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 margin">
                <div class="Albums-box">
                    <figure>
                        <a href="images/album1.jpg" class="fancybox" rel="ligthbox">
                            <img src="/wp-content/themes/custom-fileds/images/album1.jpg" class="zoom img-fluid " alt="">
                        </a>
                        <span class="hoverle">
                        <a href="images/album1.jpg" class="fancybox" rel="ligthbox"><img src="/wp-content/themes/custom-fileds/images/search.png"></a>
                        </span>
                    </figure>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 margin">
                <div class="Albums-box">
                    <figure>
                        <a href="images/album2.jpg" class="fancybox" rel="ligthbox ">
                            <img src="/wp-content/themes/custom-fileds/images/album2.jpg" class="zoom img-fluid " alt="">
                        </a>
                        <span class="hoverle">
                        <a href="images/album2.jpg" class="fancybox" rel="ligthbox"><img src="/wp-content/themes/custom-fileds/images/search.png"></a>
                        </span>
                    </figure>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- end Albums -->

<!-- Newsletter -->
<div class="Newsletter">
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <h2>Newsletter</h2>
                <div class="row">
                    <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9 padding-right">
                        <input class="email" placeholder="Enter Your Email" type="text" name="Enter Your Email">
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 padding-left">
                        <button class="submit-btn">Subscribe</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- end Newsletter -->
<?php get_footer() ?>
