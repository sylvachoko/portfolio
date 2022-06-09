<?php require_once 'forms/newsletter.php'; ?>
<?php
$currentPage = 'home';
$pageTitle = 'I Build digital products and experiences.';
include('inc/header.php');
?>

<section id="home">
  <div class="home container">
    <img class="avatar" src="img/memoji.svg" alt="Sylva Nwachokor Memoji">
    <h3 class="title">Hi, I'm Sylva 🤟🏽</h3>
    <h1>I Build digital <br> products and experiences.</h1>
    <p class="title-text">a <b>Product Designer</b> and <b>Frontend Developer</b> in 🇳🇬 <br>
      I specialize in designing digital products like mobile apps and websites.
      <br> <br>
      Passionate about solving problems.
    </p>

    <a href="mailto:sylvanwachokor@icloud.com" class="btn">Connect</a>
  </div>
</section>

<section id="features">
  <div class="features container">
    <a href="https://headsbybnxn.com" target="_blank">
      <div class="features-box bnxn">
        <div class="features-text">
          <div class="text-only">
            <h2>Heads By BNXN</h2>
            <p>Buju Heads is a collection of 1,001 Buju Heads NFTs—unique digital collectibles on the blockchain.</p>
            <a href="https://headsbybnxn.com" target="_blank" class="see-project">See Project</a>
          </div>
        </div>
        <div class="features-img">
          <img src="img/bnxn-head.svg" alt="HeadsbyBNXN">
        </div>
      </div>
    </a>

    <!-- <a href="https://rotexofficial.com" target="_blank">
      <div class="features-box rotex">
        <div class="features-text">
          <div class="text-only">
            <h2>Rotex Official</h2>
            <p>Official website for Rotimi "Rotex" Omotayo-Ojo. A Nigerian Alternative music Artist.</p>
            <a href="https://rotexofficial.com" target="_blank" class="see-project">See Project</a>
          </div>
        </div>
        <div class="features-img">
          <img src="img/rotex.svg" alt="Rotex">
        </div>
      </div>
    </a> -->

    <a href="https://bamboocoin.org" target="_blank">
      <div class="features-box rotex">
        <div class="features-text">
          <div class="text-only">
            <h2>Bamboo Coin</h2>
            <p>Bamboo coin is a memecoin on the Solana network with the aim to be community owned.</p>
            <a href="https://bamboocoin.org" target="_blank" class="see-project">See Project</a>
          </div>
        </div>
        <div class="features-img">
          <img src="img/panda.svg" alt="Panda">
        </div>
      </div>
    </a>

    <a target="_blank" href="https://timtechville.com">
      <div class="features-box tim">
        <div class="features-text">
          <div class="text-only">
            <h2>Timtechville</h2>
            <p>A dynamic company that provides expertise in engineering solutions in aspects relating to mechanical auto workshop, building and construction and real estate.</p>
            <a target="_blank" href="https://timtechville.com" class="see-project">See Project</a>
          </div>
        </div>
        <div class="features-img">
          <img src="img/timtech.svg" alt="Timtechville">
        </div>
      </div>
    </a>

    <a target="_blank" href="works/justproduce">
      <div class="features-box just">
        <div class="features-text">
          <div class="text-only">
            <h2>Justproduce.it</h2>
            <p>Learn essential skills from Africa's best creators and rent top gear from the best production companies and owners near you</p>
            <a target="_blank" href="works/justproduce" class="see-project">See Project</a>
          </div>
        </div>
        <div class="features-img">
          <img src="img/statement-gradient.svg" alt="Just">
        </div>
      </div>
    </a>

    <a href="https://mortgage.luvanexbuilds.com" target="_blank">
      <div class="features-box luvanex">
        <div class="features-text">
          <div class="text-only">
            <h2>Luvanex Mortgage</h2>
            <p>Help the middle income people of Nigeria looking to purchase homes to start and sustain their families.</p>
            <a href="https://mortgage.luvanexbuilds.com" target="_blank" class="see-project">See Project</a>
          </div>
        </div>
        <div class="features-img">
          <img src="img/borrow-home.svg" alt="Mortgage">
        </div>
      </div>
    </a>

  </div>
</section>

<!-- <section id="newsletter">
  <div class="newsletter container">
    <div class="newsletter-form">
      <h1>Get notified when I launch something new</h1>
      <form action="" method="post" name="newsletter-form" class="newsletter-form">
        <div class="form-style news-form">
          <div class="form-input">
            <input type="email" placeholder="What's your email?" name="email" id="email">
          </div>
          <div class="form-submit">
            <input type="image" name="submit" src="img/submit.png"  alt="submit" border="0" style="width: 70%;">
          </div>
        </div>
      </form>
      <div class="successful">
        <?php if (!empty($statusMsg)) { ?>
        <h3 class="statusMsg <?php echo !empty($msgClass) ? $msgClass : ''; ?>"><?php echo $statusMsg; ?></h3>
        <?php } ?>
      </div>
    </div>
  </div>
</section> -->

<?php include('inc/footer.php'); ?>

<!-- <script>
  $(".features-box").click(function() {
  window.location = $(this).find("a").attr("href"); 
  return false;
});
</script> -->