<div class="footer-home clearfix">
		<div class="container clearfix">
			<div class="top-footer11">
				<div class="clearfix">
					<?php dynamic_sidebar('footer2'); ?>
				</div>
			</div>
			
		</div>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h5 class="modal-title" id="myModalLabel" style="color:red;text-align:center;">Yêu cầu báo giá</h5>
      </div>
      <div class="modal-body">
       <?php echo do_shortcode('[contact-form-7 id="3246" title="Bao Gia"]')?>
	 </div>  
	 </div>  
	 </div>  
	 </div>
	 <?php if(!wp_is_mobile()){?>
	 <ul class="list-unstyled none_margin list-check home-l-i">
                <li>
                    <div class="icon_1">
                        <a href="tel:01298556789" title="Mua xe" class="show_thongbao" id="btn_show_popup_buy_car_id"><strong>Tư vấn </strong><span>012.985.56789</span></a>
                    </div>
                </li>
                <li>
                    <div class="icon_2">
                        <a href="tel:18006695" class="popup_phutung" title=""><strong>CSKH</strong><span>1800 6695</span></a>
                    </div>
                </li>
				<li>
					<div class="icon_4">
						<a href="tel:0913201207" title="Chăm sóc khách hÃ ng"><strong>Dịch Vụ</strong><span>0913.201.207</span></a>
					</div>
				</li>
				<li>
					<div class="icon_4">
						<a href="tel:0989835399" title="Chăm sóc khách hÃ ng"><strong>Cứu Hộ</strong><span>0989.835.399</span></a>
					</div>
				</li>
        </ul>

<?php }?>
<div class="top-footer22"><div class="container clearfix">
				<div class=" clearfix">
<h3 style="text-align: center;">MITSUBISHI TRUNG THƯỢNG Hotline: 012.985.56789  <br>
Địa chỉ : Km 8 ,Đại Lộ Thăng Long, Hoài Đức, Hà Nội</h3>
					© 2016 Mitsubishi Trung Thượng, All rights reserved.

				</div>
			</div>
			
		</div>
									
<script type="text/javascript" src="<?php bloginfo('template_url' ); ?>/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url' ); ?>/js/owl.carousel.min.js"></script>
<script type="text/javascript">
(function($){
$('.contentx img').parent().attr('rel','lightbox');
$('.motors-1').hover(function(){
        $('.item-1').animate({
            top: 10,
			left: -60
        });
    },function(){
        $('.item-1').animate({
            top: 0,
			left: -30
        });
    });
    
	$('.motors-2').hover(function(){
        $('.item-2').animate({
            top: 10,
			left: 50
        });
    },function(){
        $('.item-2').animate({
            top: 0,
			left: 100
        });
    });
    
    $('.motors-3').hover(function(){
        $('.item-3').animate({
            left: 200,
            top: 0
        });
    },function(){
        $('.item-3').animate({
            left: 255,
            top: -20
        });
    });
	
    $('.motors-4').hover(function(){
        $('.item-4').animate({
            top: -50
        });
    },function(){
        $('.item-4').animate({
            top: -70
        });
    });
    
    $('.motors-5').hover(function(){
        $('.item-5').animate({
            right: 130,
            top: 10
        });
    },function(){
        $('.item-5').animate({
            right: 185,
            top: 0
        });
    });
    
    $('.motors-6').hover(function(){
        $('.item-6').animate({
            top: 10,
            right:-50
        });
    },function(){
        $('.item-6').animate({
            top: 0,
            right:-15
        });
    });
	
	var sections = $('body .autoscroll')
  , nav = $('.menu-fix-s')
  , nav_height = nav.outerHeight();

$(window).on('scroll', function () {
  var cur_pos = $(this).scrollTop();
  
  sections.each(function() {
    var top = $(this).offset().top - nav_height,
        bottom = top + $(this).outerHeight();
    
    if (cur_pos >= top && cur_pos <= bottom) {
      nav.find('a').removeClass('nav-active');
      sections.removeClass('nav-active');
      
      $(this).addClass('nav-active');
      nav.find('a[href="#'+$(this).attr('id')+'"]').addClass('nav-active');
    }
  });
});
$('table').addClass('table table-bordered');
nav.find('a').on('click', function () {
  var $el = $(this)
    , id = $el.attr('href');
  
  $('html, body').animate({
    scrollTop: $(id).offset().top - nav_height
  }, 500);
  
  return false;
});
setTimeout(function(){$('#myModal').modal('show');},<?php the_field('time','option')?>);


	$('.mau ul li a').click(function(){
		
		var anh=$(this).attr('href');
		$('.img-max img').attr({ src: anh})
		$('.mau ul li a').removeClass('img-active');
			$(this).addClass('img-active');
			return false;
	});
	
	$('.wpcf7 input[type=text],.wpcf7 input[type=email],.wpcf7 input[type=submit] , .wpcf7 textarea').addClass('form-control');
	 $('.mobile-menu a').click(function() {
						$('.con-m .menu').toggleClass('active');
						return false;
					}); })(jQuery);

</script>
	<?php wp_footer(); ?>
</body>
</html>

