<main class="main">

  <!-- Page Title -->
  <?= $this->session->flashdata('message'); ?>
  <div class="page-title" data-aos="fade">
    <section id="hero" class="hero section dark-background">

      <img src="<?php echo base_url('assets/'); ?>img/background-start.jpg" alt="" data-aos="fade-in">



      <div class="heading">
        <div class="container">
          <div class="row d-flex justify-content-center text-center">
            <div class="col-lg-8">
              <h1>Learning</h1>
              <p class="mb-0">Vendor kursus belajar online kami, Menawarkan berbagai layanan berkualitas tinggi. Kami menyediakan berbagai kursus yang dirancang untuk meningkatkan keterampilan dan pengetahuan Anda. Kursus-kursus ini dibuat oleh para ahli di bidangnya, memastikan kontennya relevan dan terbaru. Selain itu, layanan pelanggan kami responsif dan siap membantu dengan pertanyaan atau masalah yang mungkin timbul selama proses pembelajaran. Dengan platform yang mudah digunakan, Anda dapat mengakses materi kursus kapan saja dan di mana saja, menjadikannya pilihan yang ideal untuk pembelajaran yang fleksibel dan efektif.</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <nav class="breadcrumbs">
      <div class="container">
        <ol>
          <li><a href="<?php echo base_url('users/home'); ?>">Home</a></li>
          <li class="current">Starter Page</li>
        </ol>
      </div>
    </nav>
  </div><!-- End Page Title -->

  <!-- Starter Section Section -->
  <section id="starter-section" class="starter-section section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
      <h2>Starter Section</h2>
      <p>Your Description Here<br></p>
    </div><!-- End Section Title -->

    <div class="container" data-aos="fade-up">
      <p>Use this page as a starter for your own custom pages.</p>
    </div>

  </section><!-- /Starter Section Section -->

</main>