<?php 
// Template Name: Case Status


?>
<?php get_header(); ?>


<?php 
    $loop = new WP_Query([
        "post_type"=>"case",
        "orderby"=>"post_id",
        "order"=>"DESC",
      
    ]);
?>

<div class="container mt-3">
  <h2 class='case-h2'>Filterable Table</h2>
  <p>Please type your input id to find out more about your case</p>  
  <input class="form-control" id="myInput" type="text" placeholder="Search..">
  <br>
  <table class="table table-bordered">
    <thead>
      <tr>
      <th>Case ID</th>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Court</th>
        <th>Case Status</th>
      </tr>
    </thead>
    <tbody id="myTable">
        <?php if($loop->have_posts()): ?>
            <?php while($loop->have_posts()): $loop->the_post(); ?>
                <tr>
                    <td><?php the_field("case_id"); ?></td>
                    <td><?php the_field("first_name"); ?></td>
                    <td><?php the_field("last_name"); ?></td>
                    <td><?php the_field("court_name"); ?></td>
                    <td><a href="<?php the_permalink() ?>" class="case-a"><?php the_field("case_status"); ?></a></td>
                   
                </tr>
        <?php endwhile; ?>
        <?php endif; ?>
    </tbody>
  </table>
  
  <p>Note that we start the search in tbody, to prevent filtering the table headers.</p>
</div>


<?php get_footer(); ?>