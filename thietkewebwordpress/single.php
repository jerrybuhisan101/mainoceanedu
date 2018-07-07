<?php get_header(); $format = get_post_format();setPostViews($post->ID);?>
<?php $term_list = wp_get_post_terms($post->ID, 'category', array("fields" => "ids"));;$a=$post->ID; ?>
    <div id="maincontent">
        <div class="container clearfix">
            <div class="bg-f">
                <div class="row">
            <?php if($format!='aside'){ ?>
            <div class="sidebar col-md-3">
                <?php get_sidebar(); ?>
            </div>  
            <div class="content col-md-9">
                <div class="all-box"><div class="breadcrumb">
                    <?php wp_reset_query();if(function_exists('bcn_display'))
                    { bcn_display();}?>
                </div>
                <div class="entry">
                    <?php 
                        while(have_posts()):the_post();
                    ?>
                    <h1 class="ttl-sanpham rs"><?php the_title(); ?></h1>

                    <div class="date-post"><i class="fa fa-clock-o"></i> <?php the_time('d/m/y'); ?> - <i class="fa fa-user"></i> <?php the_author(); ?> - <i class="fa fa-eye"></i> <?php echo getPostViews($post->ID); ?></div>
<img class="alignnone size-full wp-image-1070" src="http://mitsubishi-trungthuong.com.vn/wp-content/uploads/2016/03/tu-van-ban-hangxe.png" alt="mitsubishi" width="905" height="350" />
                    <div class="content-post">
                    <?php the_content(); ?></div>
                    
                    <?php endwhile; ?>


                
                    <div class="tags">
                        <?php the_tags('',' '); ?>
                    </div>
                    <div class="lq-post">
                        <div class="bg-h">
                            <span></span>
                        </div>
                    <h6 class="rs bvlq-t ttl-sanpham">Liên quan</h6>
                    <div class="bvlq clearfix">
                    
                        <ul class="lq-new-list">
                        <?php 
                            $bvlq= new WP_Query(array('showposts'=>6,'category__in'=>$term_list,'post__not_in'=>array($a))); while($bvlq->have_posts()) :$bvlq->the_post();
                        ?>
                        
                        
                                        <li class="lq-new"><a href="<?php the_permalink(); ?>"><i class="fa fa-angle-double-right"></i> <?php the_title(); ?></a></li>
                        
                        <?php endwhile; ?></ul>

                        
                    </div>
                </div>
                </div></div>
                
            </div>
<?php }else{while(have_posts()):the_post();?>
    <div class="col-md-12">
<h1 class="entry-title title-xe">
    <?php the_title(); ?>
</h1>
<div class="img-max">
    <img src="<?php the_field('img_to') ?>" alt="<?php the_title(); ?>">
</div>
<div class="tst clearfix">
    <div class="gia c1 clearfix">Giá từ : <strong><?php the_field('gia'); ?></strong></div>
    <div class="mau clearfix"><span>Màu xe: </span><?php the_field('mausac') ?></div>
    <div class="dlbg c1 clearfix"><a href="#">Tải bảng giá xe tại đây</a></div>
</div>

<hr>
<div class="all-xe">
    <div id="GioiThieu"class="autoscroll content-xe clearfix">
        <div class="tskt-title">Giới thiệu</div>
        <?php the_content( ); ?>
    </div>
    <div id="TinhNang" class="autoscroll tskt clearfix">
        <hr>
        <div class="tskt-title">Thông số kỹ thuật</div>
        <?php the_field('tskt'); ?>
    </div>
    <div id="NgoaiThat" class="autoscroll ngoaithat clearfix">
        <hr>
        <div class="tskt-title">Ngoại Thất</div>
        <?php the_field('nt'); ?>
    </div>
    <div id="NoiThat" class="autoscroll noithat clearfix">
        <hr>
        <div class="tskt-title">Ngoại Thất</div>
        <?php the_field('noit'); ?>
    </div>
    <div id="so-sanh" class="autoscroll sosanh clearfix">
        <hr>
        <div class="box-sosanh">
            <div class="tskt-title">So sánh</div>
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-9">
                    <div class="box-sosanh-left">Chọn xe cần so sánh</div>
                    <div class="box-sosanh-right">
                        <form action="" method="post" name="sosanh" class="form-sosanh">
                            <select name="id-xe" id="id-xe"><option value="0">Vui lòng chọn xe để so sánh !</option>
                                <?php 
                            $args = array(
                              'include' => '2,3,4,5,6,7,8,9,10,11',
                              'parent' => 0 , 'hide_empty'=>0,
                              'orderby'=>'id'
                              );
                            $categories = get_categories( $args );
                            foreach ( $categories as $category ) {
                                ?>
<option value="" disabled class="not-select"><?php echo $category->name; ?></option>
<?php $new=new WP_Query('showposts=5&cat='.$category->cat_ID); while($new->have_posts()) : $new->the_post();?>
    <option value="<?php echo $post->ID; ?>" > <?php the_title(); ?></option>
    <?php endwhile;wp_reset_postdata(); ?>
                                <?php } ?>
                            </select>
                            <input type="submit" name="button" id="button" class="tcp" value="So Sánh">
                        </form>
                            <script type="text/javascript">
    jQuery(function($){
         $('#fountainG').hide();
            $(".form-sosanh").submit(function() {
                        
                        var $xe=$('#id-xe').find('option:selected').val();
                        
                   $('#fountainG').show();
                     $(".khung-2").empty();
                        $.ajax({
                            url:"<?php bloginfo('url');?>/wp-admin/admin-ajax.php",
                            type:'POST',
                                                        data:'action=tinh_du_toan&id-xe=' + $xe,
 
                             success:function(results)
                                 {
                                    
                                $('#fountainG').hide();
                                    $(".khung-2").append(results);
                                        }
                                   });
                
                return false; // avoid to execute the actual submit of the form.
            });

});
</script>
                    </div>
                </div>
            </div>
        </div>
        <div class="khung-sosanh clearfix">
            <div class="khung-title">
                <ul class="khung-md">
                    <li></li>
                    <li></li>
                    <li>Động cơ/Dung tích (cc)</li>
                    <li>Công suất cực đại (kw(hp)/tại vòng phút)</li>
                    <li>Thời gian tăng tốc 0-100 km/h (giây)</li>
                    <li>Vận tốc tối đa (Km/h)</li>
                    <li>Tiêu hao nhiên liệu (l/100km)</li>
                    <li>Chiều dài cơ sở (mm)</li>
                    <li>Dẫn động</li>
                    <li>Kích thước (Dài x Rộng x Cao) (mm)</li>
                    <li>Giá bán từ (VNĐ)</li>
                </ul>
                <ul class="khung-1">
                    <li><?php the_post_thumbnail('medium' ); ?></li>
                    <li><?php the_title(); ?></li>
                    <li><?php the_field('dc') ?></li>
                    <li><?php the_field('cs') ?></li>
                    <li><?php the_field('tg') ?></li>
                    <li><?php the_field('vt') ?></li>
                    <li><?php the_field('nl') ?></li>
                    <li><?php the_field('cd') ?></li>
                    <li><?php the_field('dd') ?></li>
                    <li><?php the_field('kt') ?></li>
                    <li><?php the_field('gia') ?></li>
                </ul>
                <ul class="khung-1 khung-2">
                    
                </ul>
                <div id="fountainG">
    <div id="fountainG_1" class="fountainG"></div>
    <div id="fountainG_2" class="fountainG"></div>
    <div id="fountainG_3" class="fountainG"></div>
    <div id="fountainG_4" class="fountainG"></div>
    <div id="fountainG_5" class="fountainG"></div>
    <div id="fountainG_6" class="fountainG"></div>
    <div id="fountainG_7" class="fountainG"></div>
    <div id="fountainG_8" class="fountainG"></div>
</div>
            </div>
        </div>
 <hr>
        <div class="phukien clearfix">
            <a href="<?php the_field('phukien') ?>" title="Phụ tùng - Phụ kiện" class="btn btn-warning">Phụ tùng - Phụ kiện</a>
        </div>
    </div>
</div></div>
<ul class="list-check menu-fix-s">
            <li id="spyGioithieu" class="scollSpy">
                <a class="active" href="#GioiThieu" title="Thông tin chung "><span><img src="http://mitsubishi-trungthuong.com.vn/icon/7-thongtinchung.png"/></span></a>
            </li>
                            <li id="spyTinhNang" class="scollSpy">
                    <a href="#TinhNang" title="Thông số kỹ thuật" class="br">
                        <span><img src="http://mitsubishi-trungthuong.com.vn/icon/8-thongsokythuat.png"/></span>
                    </a>
                </li>
                                        <li id="spyNgoaiThat" class="scollSpy">
                    <a href="#NgoaiThat" title="Ngoại thất" class=""><span><img src="http://mitsubishi-trungthuong.com.vn/icon/4-ngoaithat.png"/></span></a>
                </li>
                                        <li id="spyNoiThat" class="scollSpy">
                    <a href="#NoiThat" title="Nội thất" class=""><span><img src="http://mitsubishi-trungthuong.com.vn/icon/3-noithat.png"/></span></a>
                </li>
                    
                       
            
        </ul>
<?php endwhile;} ?>
        </div>
        </div> </div>
    </div><!--end maincontent-->     

<?php get_footer(); ?> 