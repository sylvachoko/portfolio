<?php
  $currentPage = 'Work';
  $pageTitle = 'Work | Sylva Nwachokor — Designer';
  include('inc/header.php');
?>

<section id="home">
  <div class="home container">
   <h1 style="width: 60%;">Here's some of the work I've done.</h1>
  </div>
</section>

<section id="work">
  <div class="work container">
    <div class="work-ly">

      <div class="work-cl">
        <div class="work-deets">
          <a href="works/learnafrica" class="project-wrap">
            <div class="project-box">
              <img src="img/learnAfrica.png" alt="" class="project-img">
            </div>
            <div class="project-text">
              <h4>LearnAfrica</h4>
              <p>UI/UX design, Web design</p>
            </div>
          </a>
        </div>
      </div>

      <div class="work-cl">
        <div class="work-deets">
          <a href="works/afrisoc" class="project-wrap">
            <div class="project-box">
              <img src="img/afrisoc-web.png" alt="" class="project-img">
            </div>
            <div class="project-text">
              <h4>Afrisoc</h4>
              <p>UI/UX design, Web design/development, WordPress Theme development.</p>
            </div>
          </a>
        </div>
      </div>
      
    </div>
  </div>
</section>

<?php  include('inc/footer.php');?>