<?php
/**
 * Template Name: Calculator Template
 * Template Post Type: post, page
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */
function enqueue_bootstrap_cdn() {
    wp_enqueue_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css');
    wp_enqueue_script('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'enqueue_bootstrap_cdn');

get_header();
?>
<!-- Hero -->
<style>
    .table>:not(caption)>*>*{
        padding:15px!important;
        text-align:center;
    }
    .table{
        margin-left:auto;
        margin-right:auto;
    }
</style>
<div class="p-5 text-center bg-image rounded-3" style="
    background-image: url('<?php echo get_template_directory_uri(); ?>/images/fit.jpg');
    height: 400px;background-position: center center;
    background-repeat: no-repeat;
    background-size: cover;     display: flex;
    flex-direction: column;
    flex-wrap: wrap;
    align-items: center;
    justify-content: center;
  ">
  <div class="mask>
    <div class="d-flex justify-content-center align-items-center h-100">
      <div class="text-white">
        <h1 class="mb-3 mt-4 container" style="color:white; font-size:48px;padding-bottom:15px">One Rep Max Calculator</h1>
        <h4 class="mb-3 container" style="color:white; font-size:16px">Calculate your one-rep max (1RM) for any lift. Your one-rep max is the max weight you can lift for a single repetition for a given exercise.</h4>
      </div>
    </div>
  </div>
</div>
<!-- Hero -->
<div class="container my-4" style="color:white">
    <div class="container-sm my-2 py-4" style="background-color:black!important;color:white">
    <div class="main" style="padding:18px;">
        <h3>Calculate Your One Rep Max</h3>
        <!-- <form> -->
          <div class="form-group">
            <label>WEIGHT</label>
            <input id="weight" type="text" name="weight" class="form-control" placeholder="0">
          </div>
          <div class="form-group">
            <label>REPS</label>
            <input id="reps" type="text" name="reps" class="form-control" placeholder="0">
          </div>
          <button  class="submit my-4 btn btn-outline-success" onclick="calculate()">CALCULATE</button>
        </div>
        <!-- </form> -->
      </div>
    </div>
<div class="container-sm py-4" style="color:white">
<div id="answer" class="answer my-4"></div>
</div>
<!--<div class="container my-4" style="color:white">-->
<!--<div class="container-sm my-4 py-4 px-4" style="background-color:black!important;color:white">-->
<!--<h3 class="py-2">Repetition Percentages of 1RM</h3>-->
<!--    <table class="table bdr py-4" style="color:white; border:0px solid white; border-radius:10px;width:90%">-->
<!--  <thead>-->
<!--    <tr>-->
<!--      <th scope="col">Repetitions</th>-->
<!--      <th scope="col">Percentage of 1RM</th>-->
<!--    </tr>-->
<!--  </thead>-->
<!--  <tbody>-->
<!--    <tr>-->
<!--      <th scope="row">1</th>-->
<!--      <td>100%</td>-->
<!--    </tr>-->
<!--    <tr>-->
<!--      <th scope="row">2</th>-->
<!--      <td>97%</td>-->
<!--    </tr>-->
<!--    <tr>-->
<!--      <th scope="row">3</th>-->
<!--      <td>94%</td>-->
<!--    </tr>-->
<!--    <tr>-->
<!--      <th scope="row">4</th>-->
<!--      <td>92%</td>-->
<!--    </tr>-->
<!--    <tr>-->
<!--      <th scope="row">5</th>-->
<!--      <td>89%</td>-->
<!--    </tr>-->
<!--    <tr>-->
<!--      <th scope="row">6</th>-->
<!--      <td>86%</td>-->
<!--    </tr>-->
<!--    <tr>-->
<!--      <th scope="row">1</th>-->
<!--      <td>83%</td>-->
<!--    </tr>-->
<!--    <tr>-->
<!--      <th scope="row">2</th>-->
<!--      <td>81%</td>-->
<!--    </tr>-->
<!--    <tr>-->
<!--      <th scope="row">3</th>-->
<!--      <td>78%</td>-->
<!--    </tr>-->
<!--    <tr>-->
<!--      <th scope="row">1</th>-->
<!--      <td>100%</td>-->
<!--    </tr>-->
<!--    <tr>-->
<!--      <th scope="row">2</th>-->
<!--      <td>97%</td>-->
<!--    </tr>-->
<!--    <tr>-->
<!--      <th scope="row">3</th>-->
<!--      <td>94</td>-->
<!--    </tr>-->
<!--  </tbody>-->
<!--</table>-->
<!--</div>-->
<!--</div>-->
<?php
get_footer();
?>