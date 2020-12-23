<?php
  $currentPage = 'Contact';
  $pageTitle = 'Contact | Sylva Nwachokor — Designer';
  include('inc/header.php');
?>

<section id="home">
  <div class="home container">
    <img class="avatar" src="img/memoji-love.svg" alt="Sylva Nwachokor Memoji with love">
    <h1>You're finally here</h1>
  </div>
</section>

<section id="contact">
  <div class="contact container">
    <h3>Kindly fill this form</h3>
    <form action="" method="post" name="contact" class="contact-form">
       <input type="text" placeholder="What's your name?" name="name" id="name"> <br>
       <input type="email" placeholder="Enter our email" name="email" id="email"> <br>
       <textarea name="message" id="message" cols="30" rows="10" placeholder="Tell me about your project" ></textarea><br>
       <div>
        <input type="submit" class="btn" value="submit"> 
       </div>
      </form>
  </div>
</section>

<section id="project">
  <div class="project container">
    <div class="project-deets">
     
      <div class="circle-img">
        <div>
          <img class="avatar" src="img/memoji-fist.svg" alt="Memoji Fist">
        </div>
        <div class="circle-text">
          <h2>Trying to collaborate on a project. I freelance.</h2>
          <a href="#"><h2 class="talk">Let's Talk Asap</h2></a>
        </div>
      </div>
      
      <div class="circle">
        <span class="circle-circle caramel"></span>
      </div>

    </div>
  </div>
</section>

<?php  include('inc/footer.php');?>