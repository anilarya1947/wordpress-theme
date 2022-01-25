<?php
/*
Template Name: mainpg post
*/
get_header();
?>

		<script>
$(document).ready(function() {
    $('.accordionButton').click(function() {
        $('.accordionButton').removeClass('on');
        $('.accordionButton').removeClass('accrdn_frst');
        $('.accordionContent').slideUp('normal');
        $('.plusMinus').text('+');
        if($(this).next().is(':hidden') == true) {
            $(this).addClass('on');
            $(this).next().slideDown('normal');
            $(this).children('.plusMinus').text('-');
         } 
     });
    $('.accordionButton').mouseover(function() {
        $(this).addClass('over');
    }).mouseout(function() {
        $(this).removeClass('over');
    });
    $('.accordionContent').hide();
    $('.accrdn_frst').show();
    
});
</script>

<script>
$(document).ready(function () {
$('ul li').click( function(){
    if ( $(this).hasClass('current') ) {
        $(this).removeClass('current');
    } else {
        $('li.current').removeClass('current');
        $(this).addClass('current');    
    }
});
    $(window).on("resize", function (e) {
        checkScreenSize();
    });

    checkScreenSize();

    function checkScreenSize(){
        var newWindowWidth = $(window).width();
        if (newWindowWidth < 600) {
			$('a.ajax-click').click(function(e)
{

});
        }
        else
        {
					$('a.ajax-click').click(function(e)
{
            e.preventDefault();
});

        }
    }
});
    jQuery(document).ready(function($) {

        $(".ajax-click").click(function() {
            $("#loading-animation").show();
			$("#hed").show();
            var post_id = $(this).parent("li").attr("id");
            var ajaxURL = MyAjax.ajaxurl;

            $.ajax({
            type: 'POST',
            url: ajaxURL,
            data: {"action": "load-content", post_id: post_id },
            success: function(response) {
                $("#empty_div_in_content").html(response);
                $("#loading-animation").hide();
				$("#hed").hide();
            return false;
        }
    });    
   });
});

</script>

<style>
@font-face {
    font-family: 'Proxima Nova Rg';
    src: url('https://www.liferenu.com/wp-content/themes/nutricorp/fonts/ProximaNova-Regular.woff2') format('woff2'),
        url('https://www.liferenu.com/wp-content/themes/nutricorp/fonts/ProximaNova-Regular.woff') format('woff');
    font-weight: normal;
    font-style: normal;
}

@font-face {
    font-family: 'Proxima Nova Alt Rg';
    src: url('https://www.liferenu.com/wp-content/themes/nutricorp/fonts/ProximaNovaA-Bold.woff2') format('woff2'),
        url('https://www.liferenu.com/wp-content/themes/nutricorp/fonts/ProximaNovaA-Bold.woff') format('woff');
    font-weight: bold;
    font-style: normal;
}


#empty_div_in_content h3 {
    margin-bottom: 27px;
}
#empty_div_in_content {
 
    padding: 0px 10px 30px 15px;
}
header {
    display: none;
}
footer {
    display: none;
}
.main_resrc {
   font-family: 'Muli' !Important;
}
.resrc_lft_prt {
 
}
#sidebar-ajax li a:hover {
    color: #ff00a7;
}
#empty_div_in_content h3 {
    margin-bottom: 27px;
    color: #d726b3;
    font-weight: bold;
}
.btr a {
text-decoration: none;
color: #fff;
font-weight: bold;
background: #d14a9a;
display: block;
border-radius: 26px;
padding: 10px;
}
.btr a:hover {
color: #d14a9a;
background: #000;
}
#sidebar-ajax li:last-child {
    border-bottom: 0;
}
#sidebar-ajax li {
    list-style: none;
    font-size: 16px;
	border-bottom:2px solid #f5f5f5;
	padding:10px 5px 6px 20px;
}
ul#sidebar-ajax {
    padding: 0;
}
.dnwl {
    margin-top: 50px;
    float: left;
    margin-bottom: 30px;
}
#sidebar-ajax li a {
    color: #000;
	text-decoration: none;
	display:block;
	width:100%;
}
.on {
    width: 100%;
    float: left;
    background: #555555;
    background: rgb(44, 117, 164);
    cursor: pointer;
}
.accordionButton {
width: 100%;
float: left;
background-color: #000;
margin-bottom: 2.5%;
min-height: 47px;
font-size: 1.3em;
color: #000;
font-weight: bold;
padding: 10px 20px;
    padding-right: 20px;
    padding-bottom: 10px;
padding-right: 20px;
padding-bottom: 10px;
padding-bottom: 8px;
cursor: pointer;
display: block;
padding-right: 0%;
}
.plusMinus {
    font-weight: bold;
    float: right;
    margin-right: 6%;
    content: "+";
    width: 18px;
    padding-left: 7px;
    display: inline-block;
    color:#fff;
}
.accordionButton span a {
    color: #000;
    font-size: 14px;
    pointer-events: none;
    width: 86%;
    display: inline-table;
}
.accordionContent {
    width: 100%;
    float: left;
    background: white;
    border-bottom-left-radius: 5px;
    border-bottom-right-radius: 5px;
    border-bottom: 2px solid rgba(0,0,0,0.1);
    margin-bottom: 4%;
    margin-top: -2%;
}
#loading-animation{display:none;}
.accordionContent p {
    color: #000;
    font-size: 1em;
    padding: 3% 3%;
        padding-left: 3%;
    margin-bottom: 0%;
    border-bottom-right-radius: 5px;
    border-bottom-left-radius: 5px;
    border-top: 1px solid rgba(0,0,0,0.1);
    padding-left: 3% !important;
    border-left: 3px solid transparent;
    background: #fafafa;
    width: 100%;
}

.resrc_lft_prt {
    width: 33%;
    float: left;
	display:table-footer-group;
}
.resrc_cont_srt {
    width: 95%;
    margin: 3% auto;
}
.main_resrc {
 
    width: 100%;
    padding-top: 2%;
    padding-bottom: 5%;
    float: left;
  
    padding-left: 2%;
    padding-right: 2%;
}
.accordionContent p a {
    color: #6E757F;
    padding: 0% 3%;
        padding-left: 3%;
    margin: 0.5% 0%;
    font-family: 'Muli';
    font-size: 14px;
    border-left: 3px solid transparent;
    padding-left: 0%;
    width: 86%;
    display: inline-table;
}
.accordionContent p .fa {
    color: #6E757F;
    float: right;
    display: inline-block;
    margin: 2% 0%;
}
.resrc_rgt_prt {
    width: 63%;
    float: left;
    margin-left: 3.5%;
    vertical-align: top;
    background: #FFFFFF;
    padding: 2% 1%;
        padding-bottom: 2%;
    padding-bottom: 2%;
    padding-bottom: 2%;
    text-align: center;
    border-bottom: 3px solid rgba(47, 47, 47, 0.14902);
    margin-bottom: 3%;
	display:table-header-group;
}
.accr_btn a {
    text-decoration: none;
    color: ;
}
.rghts a {
    text-decoration: none;
}
.accordionButton a {
    color: #fff !important;
    font-family: 'Muli';
    font-size: 17px !important;
}
.resrc_rgt_prt {
    text-align: center;
		min-height:630px;
}
.contprt11 {
    font-size: 15px;
    line-height: 25px;
    font-family: 'Muli';
}
.avtr {
    width: 22%;
    float: left;
}
.tops {
    float: left;
    width: 100%;
    background: #ddd;
    padding: 12px;
    margin-bottom: 8px;
}
.rghts {
    float: left;
    width: 60%;
    margin-left: 7%;
}
.rghts h3 {
    font-size: 21px;
}
.contprt11 {
    border: 2px solid rgb(225, 225, 225);
    background-color: rgb(249, 247, 249);
    padding: 5% 4%;
    border-radius: 5px;
    text-align: left;
    float: left;
    width: 100%;
    margin-top: 3%;
}
.hde {
    width: 13%;
    margin: 0 auto;
}
.hde img {
    width: 100%;
}
.current {
    background: #f5f5f5;
}
.neat-stuff {
    background: url('https://www.liferenu.com/wp-content/uploads/2020/05/lr-back.png');
    background-repeat: repeat;
    background-attachment: scroll;
    background-size: auto;
background-repeat: no-repeat;
background-size: cover;
background-attachment: fixed;
}
@media only screen and (max-width: 600px) {

.resrc_rgt_prt {
    width: 100%;
	margin-left:0px;
	float:unset

	}
.resrc_lft_prt {
    width: 100%;
	float:unset;
	position:relative;
	top:40px;
}

.btr a{
margin-top:20px;
}
.hde {
    width: 13%;
    margin: 0 auto;
}
}
</style>


<?php/*
$user = wp_get_current_user();

// Get user levels from WishlistMembers
$levels = WLMAPI::GetUserLevels($user->ID);
print_r($levels);


if(in_array('Membership Level 1 - $14 / mo.', $levels)){
echo "hellpe";
    
    
}


*/
?>
<div class="mainpg_cont">
	
	<!--div class="main_conthd11">
		<h3>Serve Fundamentals Righty Membership Area</h3>
		<!--<p><a href="http://trickstrade.cashflowguys.com/2017/11/08/wordpress-resources-at-siteground/">Get Started Now</a></p>
	</div-->
	

<div class="main_resrc">

		<div class="resrc_cont_srt">
			
	<div class="resrc_lft_prt">		
	
	<div class="tops">
<div class="avtr">
    <img src="https://dogevolution.tv/wp-content/uploads/2021/10/icon-5359553_1280.webp">
    </div>
    <div class="rghts">
        <?php $current_user = wp_get_current_user();?>
        <h3>Hi,<?php echo $current_user->user_nicename; ?> </h3>
        <a href="https://dogevolution.tv/dashboard/" class="logut">Dashboard |</a>
        <a href="<?php echo esc_url( wp_logout_url() ); ?>" class="logut">Logout</a>
        </div>

</div>


	
		<section class="category-section">
			<div class="row">
			<?php $i=1; ?>
				<?php
							//$categories = get_terms('category');
							
							$categories = get_categories( array(
    'orderby' => 'ID',
    'order'   => 'ASC'
) );
							foreach($categories as $category) :		?>		
				<?php if($i==1) { $ccls="accrdn_frst";}	else{$ccls="";}	?>
			<div class="accr_btn">
				<div class="accordionButton">
					<?php echo '<span><a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a></span>';   ?>
				<span class="plusMinus">+</span>
			</div>
	
<div class="accordionContent cars_dropdown_content  <?php echo $ccls;?>">
			<?php
			
						$catt = $category->term_id;
					$args = array(
							'post_type' => 'post',
							'post_status'=>'publish',
							'order' => 'ASC',
							//'category' => $catt,	
							'posts_per_page' => -1,  //show all posts
							 'tax_query' => array(
            array(
                'taxonomy' => 'category',
                'field' => 'slug',
                'terms' => $category->slug,
            ),
        ),
						);
						//$posts = new WP_Query($args);	 
						$postss = get_posts( $args );?>
					<ul id="sidebar-ajax">
						<?php $j=1;
							foreach ( $postss as $post ) : setup_postdata( $post ); ?>
																 
  <li id="<?php echo get_the_ID() ?>" class="dd">
  <a class="ajax-click" href="#"><?php echo get_the_title()?></a>
  </li>
  <?php $j++;	?>
  <?php  endforeach;?>
 </ul>
							  
					<?php //endforeach; //endwhile; endif; ?>
					</div></div>
					<?php $i++;	endforeach; ?>
			</div>
		</section>
			</div>
					
				<div class="resrc_rgt_prt">
				<div id="loading-animation"><img src="https://dogevolution.tv/wp-content/uploads/2021/10/giphy.gif"></div>
 <div id="empty_div_in_content">
 
 <div class="posts">
 <div class="hed">
<h1>Welcome To Dog Evolution</h1>
<p>Click to post to check the episode</p>
</div>
 
 </div>
 
 <?php if ( have_posts() ) {
	while ( have_posts() ) {
		the_post(); 
		the_content();
	} // end while
} // end if
?>

 
 
 </div>

	</div>
	</div>



</div>


</div>	




<?php

get_footer();

?>