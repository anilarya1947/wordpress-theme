   <?php
/**
 *
 * Template Name: Category Related Post
 *
 * The template for displaying content from APP Template.
  **/

 // get_header(); ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<body>
<div class="container">
	<h1>jquery ui tabs click event example</h1><br>
   	        <?php 
   $termss = get_terms( array(
    'taxonomy' => 'category',
    'hide_empty' => false,
) );
   foreach($termss as $termd) {
      

    ?>
      <?php the_category(); ?>

<?php 
$args = array(
    'post_type' => 'post',
    'post_status' => 'publish',
    'posts_per_page' => -1,
    'tax_query' => array(
        array(
            'taxonomy' => 'category',
            'field'    => 'slug',
            'terms'    => $termd,
            'operator' => 'IN'
        ),
    ),
);
$query = new WP_Query( $args );
$i=1;
?>
	<?php 
 if($query->have_posts()) :
  while($query->have_posts()) :
  $query->the_post() ;
 
	?>
 <li><a data-toggle="tab" href="#menu<?php echo $i; ?>"><?php the_title(); ?></a></li>
   
  	<div class="tab-content">
 
 
    	<div id="menu<?php echo $i; ?>" class="tab-pane fade">
      		<h3><?php the_title(); ?></h3>
      		<p><?php the_content(); ?></p>
    	</div>
    	 <?php $i++; endwhile; 

?>

<?php 
 
endif; 
}
 ?>
     
  	</div>
</div>
<script type="text/javascript">
	$('.nav li a').click(function(){
		var data = $(this).attr("href");
		console.log(data);
	});
</script>
</body>
</html>

