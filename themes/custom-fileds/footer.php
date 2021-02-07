<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package custom-fileds
 */

?>

<!--  footer -->
<footr id="footer_with_contact">
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-12 width">
                    <div class="address">
                        <h3>Contact Us</h3>
                        <ul class="locarion_icon">
                            <li><img src="icon/1.png" alt="icon" />104 New York , USA</li>
                            <li><img src="icon/2.png" alt="icon" />Phone : ( +71 5896547 )</li>
                            <li><img src="icon/3.png" alt="icon" />Email : demo@email.com</li>

                        </ul>

                        <ul class="contant_icon">
                            <li><img src="icon/fb.png" alt="icon" /></li>
                            <li><img src="icon/tw.png" alt="icon" /></li>
                            <li><img src="icon/lin(2).png" alt="icon" /></li>
                            <li><img src="icon/instagram.png" alt="icon" /></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 width">
                    <div class="address">
                        <h3>Get In Touch</h3>
                        <form>
                            <div class="row">
                                <div class="col-sm-12">
                                    <input class="contactus" placeholder="Name" type="text" name="Name">
                                </div>
                                <div class="col-sm-12">
                                    <input class="contactus" placeholder="Phone" type="text" name="Email">
                                </div>
                                <div class="col-sm-12">
                                    <input class="contactus" placeholder="Email" type="text" name="Email">
                                </div>
                                <div class="col-sm-12">
                                    <textarea class="textarea" placeholder="Message" type="text" name="Message"></textarea>
                                </div>
                                <div class="col-sm-12">
                                    <button class="send">Send</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 width">
                    <div class="address">
                        <h3>New Music </h3>
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 ">
                                <figure><img src="images/music1.jpg" /></figure>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 ">
                                <figure><img src="images/music2.jpg" /></figure>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 ">
                                <figure><img src="images/music3.jpg" /></figure>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 ">
                                <figure><img src="images/music4.jpg" /></figure>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="copyright">
            <p>© 2019 All Rights Reserved. <a href="https://html.design/">Free html Templates</a></p>
        </div>
    </div>
</footr>
<!-- end footer -->
<!-- Javascript files-->
<script src="/wp-content/themes/custom-fileds/js/jquery.min.js"></script>
<script src="/wp-content/themes/custom-fileds/js/popper.min.js"></script>
<script src="/wp-content/themes/custom-fileds/js/bootstrap.bundle.min.js"></script>
<script src="/wp-content/themes/custom-fileds/js/jquery-3.0.0.min.js"></script>
<script src="/wp-content/themes/custom-fileds/js/plugin.js"></script>
<!-- sidebar -->
<script src="/wp-content/themes/custom-fileds/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="/wp-content/themes/custom-fileds/js/custom.js"></script>
<script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
<script>
    $(document).ready(function() {
        $(".fancybox").fancybox({
            openEffect: "none",
            closeEffect: "none"
        });

        $(".zoom").hover(function() {

            $(this).addClass('transition');
        }, function() {

            $(this).removeClass('transition');
        });
    });
</script>

<?php wp_footer(); ?>

</body>
</html>
