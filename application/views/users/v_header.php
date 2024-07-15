<header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

      <a href="<?php echo base_url('start') ?>" class="logo d-flex align-items-center me-auto">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1 class="sitename">Learning</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
        <li><a href="<?php echo base_url('home'); ?>" class="<?php if($page=='home'){echo 'active';}; ?>">Home</a></li>
          <li><a href="<?php echo base_url('about'); ?>" class="<?php if($page=='about'){echo 'active';}; ?>">About</a></li>
          <li><a href="<?php echo base_url('course'); ?>" class="<?php if($page=='course'){echo 'active';}; ?>">Course</a></li>
          <li><a href="<?php echo base_url('trainers'); ?>" class="<?php if($page=='trainers'){echo 'active';}; ?>">Trainers</a></li>
          <li><a href="<?php echo base_url('events'); ?>" class="<?php if($page=='events'){echo 'active';}; ?>">Events</a></li>
          <li><a href="<?php echo base_url('pricing'); ?>" class="<?php if($page=='pricing'){echo 'active';}; ?>">Pricing</a></li>
          <li class="dropdown"><a href="#"><span>Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="#">Dropdown 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                <ul>
                  <li><a href="#">Deep Dropdown 1</a></li>
                  <li><a href="#">Deep Dropdown 2</a></li>
                  <li><a href="#">Deep Dropdown 3</a></li>
                  <li><a href="#">Deep Dropdown 4</a></li>
                  <li><a href="#">Deep Dropdown 5</a></li>
                </ul>
              </li>
              <li><a href="#">Dropdown 2</a></li>
              <li><a href="#">Dropdown 3</a></li>
              <li><a href="#">Dropdown 4</a></li>
            </ul>
          </li>
          <li><a href="<?php echo base_url('contact'); ?>" class="<?php if($page=='cotact'){echo 'active';}; ?>">Contact</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <a class="btn-getstarted" href="<?php echo base_url('login'); ?>" class="">Get Started</a>

    </div>
  </header>