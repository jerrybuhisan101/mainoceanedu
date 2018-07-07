<?php get_header(); $a=get_query_var('cat' );$queried_object = get_queried_object();?>
    <div id="maincontent">
        <div class=" clearfix">
                <div class="bg-f container">
            <div class="row">
         
            
            <div class="content col-md-9">
                <div class="all-box ">
                    <div class="breadcrumb">
                    <?php if(function_exists('bcn_display'))
                    { bcn_display();}?>
                </div>
                <h1 class="ttl-sanpham rs" hidden><?php echo single_cat_title();?></h1>
                </div>
                            
                            <?php if(get_field('loai','category_'.$a)!=2){ ?>
                            <div class="box-ttt">
                            <div class="sum-archive ">
                                <?php 
                                    if(have_posts()){
                                    while(have_posts()):the_post();
                                ?>
                                <div class="archive-child news-cat clearfix">
                                    <ul>
                                        <li class="archive1"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium'); ?></a><i class="fa fa-file-o"></i></li>
                                        
                                        <li class="archive2 rs"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                                        <li class="date-post"><i class="fa fa-clock-o"></i> <?php the_time('d/m/y'); ?> - <i class="fa fa-user"></i> <?php the_author(); ?> - <i class="fa fa-eye"></i> <?php echo getPostViews($post->ID); ?></li>
                                        <li class="archive4"><?php the_excerpt(); ?> <a href="<?php the_permalink(); ?>" class="xt"> Xem chi tiết »</a></li>
                                        
                                    </ul>
                                </div>
                                <?php endwhile;wp_reset_postdata();wp_pagenavi(); ?>
                                <?php }else{
                                    echo "Không có bài viết nào cả !";
                                } ?>
                            </div></div>
                            <?php }else{ ?>

    <div class="box-tintuc-cat">
<h1 class="entry-title title-xe">
    <?php echo single_cat_title( ); ?>
</h1>
<div class="img-max">
    <img src="<?php the_field('img_to','category_'.$a) ?>" alt="<?php the_title(); ?>">
</div>
<div class="tst clearfix"><a href="<?php echo get_option('link'); ?>">
    <div class="gia c1 clearfix">Giá từ : <strong><?php the_field('gia','category_'.$a); ?></strong></div>
    <div class="mau clearfix"><span>Màu xe: </span><?php the_field('mausac','category_'.$a) ?></div>
    <div class="dlbg c1 clearfix">
<?php $categories=get_categories(array('parent'=>$a,'hide_empty'=>0) ); if($categories){ ?>
        <span>Phiên bản:</span>
<?php  foreach($categories as $category){?>
    <a href="<?php echo get_category_link( $category ); ?>"><?php echo $category->name; ?></a>
<?php } }else{?>
<?php 
$categories=get_categories(array('parent'=>$queried_object->parent,'hide_empty'=>0) ); ?>
<span>Phiên bản Khác:</span>
<?php  foreach($categories as $category){?>
    <a href="<?php echo get_category_link( $category ); ?>"><?php echo $category->name; ?></a>
<?php } ?>

<?php } ?>

    </div><div class="uudai c1 clearfix"><span>Ưu đãi: </span><?php the_field('uudai','category_'.$a) ?></div>
</div>
</div>
<hr>
<div class="all-xe clearfix  post-content">
    <div id="GioiThieu"class="autoscroll content-xe clearfix">
        <div class="container">
        <div class="tskt-title">Giới thiệu MITSUBISHI <?php echo single_cat_title( ); ?></div>
        <?php echo category_description( ); ?></div>
    </div>
    
    <div id="NgoaiThat" class="autoscroll ngoaithat clearfix">
        
        <div class="container"><div class="tskt-title">Ngoại Thất MITSUBISHI <?php echo single_cat_title( ); ?></div>
        <?php the_field('nt','category_'.$a); ?></div>
    </div>
    <div id="NoiThat" class="autoscroll noithat clearfix">
        
        <div class="container"><div class="tskt-title">Nội Thất MITSUBISHI <?php echo single_cat_title( ); ?></div>
        <?php the_field('noit','category_'.$a); ?></div>
    </div>
    <div id="TinhNang" class="autoscroll tskt clearfix">
        
        <div class="container"><div class="tskt-title">Thông số kỹ thuật MITSUBISHI <?php echo single_cat_title( ); ?> </div>
        <?php the_field('tskt','category_'.$a); ?></div>
    </div>
    <div id="bvlq" class="da-archive clearfix autoscroll">
<div class="khung"><div class="chaysl">
                                <?php 
                                    if(have_posts()){
                                    while(have_posts()):the_post();
                                ?>
                                    <div class="archive-sp clearfix">
                                    <ul>
                                        <li class="archive1"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium'); ?></a></li>
                                        
                                        <li class="archive2 rs"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                                        
                                        <li class="archive4"><?php the_excerpt(); ?> </li>
                                        
                                    </ul>
                                </div>
                                <?php endwhile;wp_reset_postdata();wp_pagenavi(); ?>
                                <?php }else{
                                    echo "Không có bài viết nào cả !";
                                } ?></div></div>
                            </div>
</div></div>

<div class="sidebar col-md-3">
                <?php get_sidebar(); ?>
            </div>



<div class="clear"></div>
                            <!-- Code -->

                            <?php } ?>
                            

                    </div>      
            </div>
</div></div>
        </div>
    </div><!-- end #maincontent-->     
    <ul class="list-unstyled none_margin list-check menu-max">
            <li id="spyGioithieu" class="scollSpy">
                <a class="active" href="#GioiThieu" title="Thông tin chung "><strong><img src="http://mitsubishi-trungthuong.com.vn/icon/7-thongtinchung.png"/></strong><span>Thông tin chung</span></a>
            </li>
                            <li id="spyTinhNang" class="scollSpy">
                    <a href="#TinhNang" title="Thông số kỹ thuật" class="br">
                        <strong><img src="http://mitsubishi-trungthuong.com.vn/icon/8-thongsokythuat.png"/></strong><span>Thông số kỹ thuật</span>
                    </a>
                </li>
                                        <li id="spyNgoaiThat" class="scollSpy">
                    <a href="#NgoaiThat" title="Ngoại thất" class=""><strong><img src="http://mitsubishi-trungthuong.com.vn/icon/4-ngoaithat.png"/></strong><span>Ngoại thất</span></a>
                </li>
                                        <li id="spyNoiThat" class="scollSpy">
                    <a href="#NoiThat" title="Nội thất" class=""><strong><img src="http://mitsubishi-trungthuong.com.vn/icon/3-noithat.png"/></strong><span>Nội thất</span></a>
                </li> <li id="spylq" class="scollSpy">
                    <a href="#bvlq" title="Bài viết liên quan" class=""><strong><img src="http://mitsubishi-trungthuong.com.vn/icon/7-thongtinchung.png"/></strong><span>Bài viết liên quan</span></a>
                </li>
                    
                       
            
        </ul> 
<?php get_footer(); ?>      

