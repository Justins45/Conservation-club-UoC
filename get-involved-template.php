<?php
/**
 * Template Name: Get Involved Template
 */

get_header();
$post_thumbnail = get_the_post_thumbnail_url(); 
?>

<main id="primary" class="site-main">
  <div style="background-image: url('<?php echo $post_thumbnail; ?>');" class="page-banner alt-banner-text">
    <h1>Get Involved</h1>
  </div>
  <div class="get-involved content-container">
    <div>
      <h2>How to get involved!</h2>
      <p>There are many ways of getting started.</p>
      <ul>
        <li>You can start even just sitting at home, reducing or even fully eliminating the consumption of one time use plastic utensils and cutlery will minimize the amount being put into landfills which can end up all over the globe.</li>
        <li>Picking up trash left outside.</li>
        <li>Just talking about it more, The more the people talk the larger the mental impact is.</li>
        <li>Helping volunteer with the club or outside organizations</li>
        <li>Donating items in need to outside organizations. Sometimes other groups need more than just money, they need time, food donations, toys or even clothes for animals. </li>
        <li>Just think of how cold those small penguins are in winter.</li>
      </ul>
    </div>
      <div>
        <h2>Support our Cause!</h2>
        <p>One big way is by helping us in general! We always need people who are willing to volunteer for the club. Reach out us and just ask</p>
        <p>Another way that you can get involved is by helping us when we take on larger projects or events, take the Bow River Shoreline clean up as an example. We always need people to help out as its too large of a task for 2-5 people. Helping us with these larger projects makes them happen both faster and more frequent.</p>
      </div>
    <div>
      <h2>Groups we support outside the club!</h2>
      <p></p>
      <ul>
        <li>
          <a href="https://www.calgarywildlife.org/" target="_blank">Calgary Wildlife Rehabilitation Society</a>
        </li>
        <li>
          <a href="https://www.aiwc.ca/" target="_blank">Alberta Institute For Wildlife Conservation</a>
        </li>
        <li>
          <a href="https://burrowingowl.com/content.php?p=home" target="_blank">Alberta Birds of Prey Foundation</a>
        </li>
      </ul>
    </div>
  </div>
</main>

<?php
get_sidebar();
get_footer();