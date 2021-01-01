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
    <p class="title-text">Kindly fill this form</p>
    <form action="forms/contact.php" method="post" name="contact" class="contact-form">
       <input type="text" placeholder="What's your name?" name="name" id="name" required> <br>
       <input type="email" placeholder="Enter our email" name="email" id="email" required> <br>
       <input type="tel" placeholder="your phone number?" name="phone" id="phone" required> <br>
       <textarea name="message" id="message" cols="30" rows="10" placeholder="Talk to me" ></textarea><br>
       <div>
        <input type="submit" name="submit" class="btn" value="submit"> 
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
          <a href="mailto:sylvanwachokor@icloud.com"><h2 class="talk">Let's Talk Asap</h2></a>
        </div>
      </div>
      
      <div class="circle">
        <span class="circle-circle caramel"></span>
      </div>

    </div>
  </div>
</section>

<?php  include('inc/footer.php');?>