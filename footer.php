</div> <!-- End Main -->
	<?php do_action( 'thb_after_main' ); ?>
	<?php
	$thb_id         = get_the_ID();
	$disable_footer = get_post_meta( $thb_id, 'disable_footer', true );
	if ( 'on' === ot_get_option( 'footer', 'on' ) && 'on' !== $disable_footer ) {
		get_template_part( 'inc/templates/footer/footer-style1' );
	}
	?>
	<?php
	if ( 'on' === ot_get_option( 'subfooter', 'on' ) ) {
		get_template_part( 'inc/templates/footer/subfooter-' . ot_get_option( 'subfooter_style', 'style1' ) );
	}
	?>
	<?php

		/*
		 * Always have wp_footer() just before the closing </body>
		 * tag of your theme, or you will break many plugins, which
		 * generally use this hook to reference JavaScript files.
		 */

		wp_footer();
	?>
</div> <!-- End Wrapper -->
<?php do_action( 'thb_after_wrapper' ); ?>
<!-- Finch + Flame Custom Code For Bayede Premium Lock-->
<?php if ( !is_user_logged_in () && get_field('is_this_a_premium_article') == 'Yes' ): ?>


    <script type="text/javascript">       
 window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    document.getElementById("subscribernator5000").style.bottom = "0";
	  document.body.classList.add("freezeme");
   
  } else {
    document.getElementById("subscribernator5000").style.bottom = "-500px";
    document.body.classList.remove("freezeme");
  }
}
</script>
<section id="subscribernator5000">
    <div class="subbex">
        <h2>Thanks for reading Bayede News</h2>
        <h5>Please subscribe to continue reading.</h5>
		<a id="mobsubz" class="btn pill-radius" href="https://bayedenews.com/subscribe/" target="_self" role="button" title="BHALISA MANJE">JOYINA ABAFUNDI BETHU BE-PREMIUM</a>
        <div id="thb-pricing-table-5f5fcf6cbd05d" class="thb-pricing-table style2 active">
    <div class="row">
            <div class="thb-pricing-column small-12 large-4 columns highlight-" id="thb-pricing-column-5f5fcf6cbd0ff">
    <div class="pricing-container has-button">
                    <img width="431" height="800" src="https://i0.wp.com/bayedenews.com/wp-content/uploads/2020/05/24-sub.png?fit=862%2C800&amp;ssl=1" class="retina_size attachment-full thb-lazyload lazyautosizes lazyloaded retina_active" alt="" sizes="259px" data-src="https://i0.wp.com/bayedenews.com/wp-content/uploads/2020/05/24-sub.png?fit=862%2C800&amp;ssl=1" data-sizes="auto" data-srcset="https://i0.wp.com/bayedenews.com/wp-content/uploads/2020/05/24-sub.png?w=862&amp;ssl=1 862w, https://i0.wp.com/bayedenews.com/wp-content/uploads/2020/05/24-sub.png?resize=754%2C700&amp;ssl=1 754w, https://i0.wp.com/bayedenews.com/wp-content/uploads/2020/05/24-sub.png?resize=768%2C713&amp;ssl=1 768w, https://i0.wp.com/bayedenews.com/wp-content/uploads/2020/05/24-sub.png?resize=370%2C343&amp;ssl=1 370w, https://i0.wp.com/bayedenews.com/wp-content/uploads/2020/05/24-sub.png?resize=800%2C742&amp;ssl=1 800w, https://i0.wp.com/bayedenews.com/wp-content/uploads/2020/05/24-sub.png?resize=20%2C19&amp;ssl=1 20w, https://i0.wp.com/bayedenews.com/wp-content/uploads/2020/05/24-sub.png?resize=185%2C172&amp;ssl=1 185w, https://i0.wp.com/bayedenews.com/wp-content/uploads/2020/05/24-sub.png?resize=740%2C687&amp;ssl=1 740w, https://i0.wp.com/bayedenews.com/wp-content/uploads/2020/05/24-sub.png?resize=400%2C371&amp;ssl=1 400w, https://i0.wp.com/bayedenews.com/wp-content/uploads/2020/05/24-sub.png?resize=52%2C48&amp;ssl=1 52w" srcset="https://i0.wp.com/bayedenews.com/wp-content/uploads/2020/05/24-sub.png?w=862&amp;ssl=1 862w, https://i0.wp.com/bayedenews.com/wp-content/uploads/2020/05/24-sub.png?resize=754%2C700&amp;ssl=1 754w, https://i0.wp.com/bayedenews.com/wp-content/uploads/2020/05/24-sub.png?resize=768%2C713&amp;ssl=1 768w, https://i0.wp.com/bayedenews.com/wp-content/uploads/2020/05/24-sub.png?resize=370%2C343&amp;ssl=1 370w, https://i0.wp.com/bayedenews.com/wp-content/uploads/2020/05/24-sub.png?resize=800%2C742&amp;ssl=1 800w, https://i0.wp.com/bayedenews.com/wp-content/uploads/2020/05/24-sub.png?resize=20%2C19&amp;ssl=1 20w, https://i0.wp.com/bayedenews.com/wp-content/uploads/2020/05/24-sub.png?resize=185%2C172&amp;ssl=1 185w, https://i0.wp.com/bayedenews.com/wp-content/uploads/2020/05/24-sub.png?resize=740%2C687&amp;ssl=1 740w, https://i0.wp.com/bayedenews.com/wp-content/uploads/2020/05/24-sub.png?resize=400%2C371&amp;ssl=1 400w, https://i0.wp.com/bayedenews.com/wp-content/uploads/2020/05/24-sub.png?resize=52%2C48&amp;ssl=1 52w">						<div class="thb_pricing_head">
                                <h4>IMVUME YOSUKU</h4>
                                                                        <h3 class="thb-price">R15.00</h3>
                                                            <p class="pricing_sub_title">Thola Usuku Lonke</p>
                                            </div>
       
                                            <a class="btn pill-radius" href="https://bayedenews.com/membership-account/membership-checkout/?level=4" target="_self" role="button" title="BHALISA MANJE">BHALISA MANJE</a>
                </div>
            <style>
                                                          </style>
</div>
    <div class="thb-pricing-column small-12 large-4 columns highlight-true" id="thb-pricing-column-5f5fcf6cbd838">
    <div class="pricing-container has-button">
                      <div class="pricing-style2-highlight" style="top: 0px; height: 1137px; width: 370px; left: 400px;"></div>
                    <img width="431" height="800" src="https://i2.wp.com/bayedenews.com/wp-content/uploads/2020/05/digiti-print-sub02.png?fit=862%2C800&amp;ssl=1" class="retina_size attachment-full thb-lazyload lazyautosizes retina_active lazyloaded" alt="" sizes="259px" data-src="https://i2.wp.com/bayedenews.com/wp-content/uploads/2020/05/digiti-print-sub02.png?fit=862%2C800&amp;ssl=1" data-sizes="auto" data-srcset="https://i2.wp.com/bayedenews.com/wp-content/uploads/2020/05/digiti-print-sub02.png?w=862&amp;ssl=1 862w, https://i2.wp.com/bayedenews.com/wp-content/uploads/2020/05/digiti-print-sub02.png?resize=754%2C700&amp;ssl=1 754w, https://i2.wp.com/bayedenews.com/wp-content/uploads/2020/05/digiti-print-sub02.png?resize=768%2C713&amp;ssl=1 768w, https://i2.wp.com/bayedenews.com/wp-content/uploads/2020/05/digiti-print-sub02.png?resize=370%2C343&amp;ssl=1 370w, https://i2.wp.com/bayedenews.com/wp-content/uploads/2020/05/digiti-print-sub02.png?resize=800%2C742&amp;ssl=1 800w, https://i2.wp.com/bayedenews.com/wp-content/uploads/2020/05/digiti-print-sub02.png?resize=20%2C19&amp;ssl=1 20w, https://i2.wp.com/bayedenews.com/wp-content/uploads/2020/05/digiti-print-sub02.png?resize=185%2C172&amp;ssl=1 185w, https://i2.wp.com/bayedenews.com/wp-content/uploads/2020/05/digiti-print-sub02.png?resize=740%2C687&amp;ssl=1 740w, https://i2.wp.com/bayedenews.com/wp-content/uploads/2020/05/digiti-print-sub02.png?resize=400%2C371&amp;ssl=1 400w, https://i2.wp.com/bayedenews.com/wp-content/uploads/2020/05/digiti-print-sub02.png?resize=52%2C48&amp;ssl=1 52w" srcset="https://i2.wp.com/bayedenews.com/wp-content/uploads/2020/05/digiti-print-sub02.png?w=862&amp;ssl=1 862w, https://i2.wp.com/bayedenews.com/wp-content/uploads/2020/05/digiti-print-sub02.png?resize=754%2C700&amp;ssl=1 754w, https://i2.wp.com/bayedenews.com/wp-content/uploads/2020/05/digiti-print-sub02.png?resize=768%2C713&amp;ssl=1 768w, https://i2.wp.com/bayedenews.com/wp-content/uploads/2020/05/digiti-print-sub02.png?resize=370%2C343&amp;ssl=1 370w, https://i2.wp.com/bayedenews.com/wp-content/uploads/2020/05/digiti-print-sub02.png?resize=800%2C742&amp;ssl=1 800w, https://i2.wp.com/bayedenews.com/wp-content/uploads/2020/05/digiti-print-sub02.png?resize=20%2C19&amp;ssl=1 20w, https://i2.wp.com/bayedenews.com/wp-content/uploads/2020/05/digiti-print-sub02.png?resize=185%2C172&amp;ssl=1 185w, https://i2.wp.com/bayedenews.com/wp-content/uploads/2020/05/digiti-print-sub02.png?resize=740%2C687&amp;ssl=1 740w, https://i2.wp.com/bayedenews.com/wp-content/uploads/2020/05/digiti-print-sub02.png?resize=400%2C371&amp;ssl=1 400w, https://i2.wp.com/bayedenews.com/wp-content/uploads/2020/05/digiti-print-sub02.png?resize=52%2C48&amp;ssl=1 52w">						<div class="thb_pricing_head">
                                <h4>OKWEDIJITHALI NOKUGAYIWE</h4>
                                                                        <h3 class="thb-price">R30.00</h3>
                                                            <p class="pricing_sub_title">Thola Ngokungenamkhawulo</p>
                                            </div>
       
                                            <a class="btn pill-radius" href="https://bayedenews.com/membership-account/membership-checkout/?level=2" target="_self" role="button" title="BHALISA MANJE">BHALISA MANJE</a>
                </div>
            <style>
                                                          </style>
</div>
    <div class="thb-pricing-column small-12 large-4 columns highlight-" id="thb-pricing-column-5f5fcf6cbdebb">
    <div class="pricing-container has-button">
                    <img width="431" height="800" src="https://i2.wp.com/bayedenews.com/wp-content/uploads/2020/05/digital-sub.png?fit=862%2C800&amp;ssl=1" class="retina_size attachment-full thb-lazyload lazyautosizes lazyloaded retina_active" alt="" sizes="259px" data-src="https://i2.wp.com/bayedenews.com/wp-content/uploads/2020/05/digital-sub.png?fit=862%2C800&amp;ssl=1" data-sizes="auto" data-srcset="https://i2.wp.com/bayedenews.com/wp-content/uploads/2020/05/digital-sub.png?w=862&amp;ssl=1 862w, https://i2.wp.com/bayedenews.com/wp-content/uploads/2020/05/digital-sub.png?resize=754%2C700&amp;ssl=1 754w, https://i2.wp.com/bayedenews.com/wp-content/uploads/2020/05/digital-sub.png?resize=768%2C713&amp;ssl=1 768w, https://i2.wp.com/bayedenews.com/wp-content/uploads/2020/05/digital-sub.png?resize=370%2C343&amp;ssl=1 370w, https://i2.wp.com/bayedenews.com/wp-content/uploads/2020/05/digital-sub.png?resize=800%2C742&amp;ssl=1 800w, https://i2.wp.com/bayedenews.com/wp-content/uploads/2020/05/digital-sub.png?resize=20%2C19&amp;ssl=1 20w, https://i2.wp.com/bayedenews.com/wp-content/uploads/2020/05/digital-sub.png?resize=185%2C172&amp;ssl=1 185w, https://i2.wp.com/bayedenews.com/wp-content/uploads/2020/05/digital-sub.png?resize=740%2C687&amp;ssl=1 740w, https://i2.wp.com/bayedenews.com/wp-content/uploads/2020/05/digital-sub.png?resize=400%2C371&amp;ssl=1 400w, https://i2.wp.com/bayedenews.com/wp-content/uploads/2020/05/digital-sub.png?resize=52%2C48&amp;ssl=1 52w" srcset="https://i2.wp.com/bayedenews.com/wp-content/uploads/2020/05/digital-sub.png?w=862&amp;ssl=1 862w, https://i2.wp.com/bayedenews.com/wp-content/uploads/2020/05/digital-sub.png?resize=754%2C700&amp;ssl=1 754w, https://i2.wp.com/bayedenews.com/wp-content/uploads/2020/05/digital-sub.png?resize=768%2C713&amp;ssl=1 768w, https://i2.wp.com/bayedenews.com/wp-content/uploads/2020/05/digital-sub.png?resize=370%2C343&amp;ssl=1 370w, https://i2.wp.com/bayedenews.com/wp-content/uploads/2020/05/digital-sub.png?resize=800%2C742&amp;ssl=1 800w, https://i2.wp.com/bayedenews.com/wp-content/uploads/2020/05/digital-sub.png?resize=20%2C19&amp;ssl=1 20w, https://i2.wp.com/bayedenews.com/wp-content/uploads/2020/05/digital-sub.png?resize=185%2C172&amp;ssl=1 185w, https://i2.wp.com/bayedenews.com/wp-content/uploads/2020/05/digital-sub.png?resize=740%2C687&amp;ssl=1 740w, https://i2.wp.com/bayedenews.com/wp-content/uploads/2020/05/digital-sub.png?resize=400%2C371&amp;ssl=1 400w, https://i2.wp.com/bayedenews.com/wp-content/uploads/2020/05/digital-sub.png?resize=52%2C48&amp;ssl=1 52w">						<div class="thb_pricing_head">
                                <h4>OKWEDIJITHALI</h4>
                                                                        <h3 class="thb-price">R20.00</h3>
                                                            <p class="pricing_sub_title">Ngenyanga</p>
                                            </div>
        
                                            <a class="btn pill-radius" href="https://bayedenews.com/membership-account/membership-checkout/?level=3" target="_self" role="button" title="BHALISA MANJE">BHALISA MANJE</a>
                </div>
            <style>
                                                          </style>
</div>
        </div>
</div>
  </div>
	
</section>

<?php else : ?>

<?php endif; ?>
<!-- End of Finch + Flame Custom Code -->
</body>
</html>
