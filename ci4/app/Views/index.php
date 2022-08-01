<?= $this->extend('main') ?>

<?= $this->section('isi') ?>

<!-- GRID-->
<div class="grid grid-3-6-3">
    
    <!-- GRID LEFLT-->
    <div class="grid-column">
      <div class="widget-box">
        <p class="widget-box-title">About Me</p>
        <div class="widget-box-content">
          <p class="paragraph"><?= $profile['about_me'] ?></p>
        </div>
      </div>

      <div class="widget-box">
        <p class="widget-box-title">Personal Info</p>
        <div class="widget-box-content">
          <div class="information-line-list">

            <div class="information-line">
              <p class="information-line-title">City</p>
              <p class="information-line-text"><?= $profile['city'] ?></p>
            </div>

            <div class="information-line">
              <p class="information-line-title">Email</p>
              <p class="information-line-text"><?= $profile['email'] ?></p>
            </div>

            <div class="information-line">
              <p class="information-line-title">Age</p>
              <p class="information-line-text"><?= umur($profile['born']) ?></p>
            </div>

            <div class="information-line">
              <p class="information-line-title">Status</p>
              <p class="information-line-text"><?= $profile['status'] ?></p>
            </div>

            <div class="information-line">
              <p class="information-line-title">Birthplace</p>
              <p class="information-line-text"><?= $profile['birthplace'] ?></p>
            </div>

            <div class="information-line">
              <p class="information-line-title">Web</p>
              <p class="information-line-text"><a href="#">www.artakusuma.com</a></p>
            </div>

          </div>
        </div>
      </div>
    </div>
    <!-- /GRID LEFT -->

    <!-- GRID CENTER -->
    <div class="grid-column">

      <div class="widget-box">
        <p class="widget-box-title">Education</p>
        <div class="widget-box-content">
          <div class="timeline-information-list">

            <div class="timeline-information">
              <p class="timeline-information-title">Master's Degree</p>
              <p class="timeline-information-date">2021 - Present</p>
              <p class="timeline-information-text">Multimedia Intelligent Network, Departemen of Electrical Engineering, ITS</p>
            </div>

            <div class="timeline-information">
              <p class="timeline-information-title">Bachelor's Degree</p>
              <p class="timeline-information-date">2015 - 2019</p>
              <p class="timeline-information-text">Departemen of Computer Engineering, Institut Tekonologi Sepuluh Nopember (ITS)</p>
            </div>

            <div class="timeline-information">
              <p class="timeline-information-title">Senior High School</p>
              <p class="timeline-information-date">2013 - 2015</p>
              <p class="timeline-information-text">SMAN 1 Kertosono</p>
            </div>

            <div class="timeline-information">
              <p class="timeline-information-title">Junior High School</p>
              <p class="timeline-information-date">2009 - 2012</p>
              <p class="timeline-information-text">SMPN 1 Tanjunganom</p>
            </div>

            <div class="timeline-information">
              <p class="timeline-information-title">Elementary School</p>
              <p class="timeline-information-date">2003 - 2009</p>
              <p class="timeline-information-text">SDN 1 Kurungrejo</p>
            </div>

          </div>
        </div>
      </div>

      <div class="widget-box">
        <p class="widget-box-title">Jobs</p>
        <div class="widget-box-content">
          <div class="timeline-information-list">


            <div class="timeline-information">
              <p class="timeline-information-title">Research Assistant - ITS</p>
              <p class="timeline-information-date">2022 - Present</p>
              <p class="timeline-information-text">Manage research on Intelligent Teledermatology System for Smart Hospital and Blood Clot Volume Determination System in Deep Vein Thrombosis based on Three Dimensional Ultrasound Image.</p>
            </div>

            <div class="timeline-information">
              <p class="timeline-information-title">Freelance Web Developer</p>
              <p class="timeline-information-date">2020 - Present</p>
              <p class="timeline-information-text">Developing website project.</p>
            </div>

            <div class="timeline-information">
              <p class="timeline-information-title">IT Support - PT Brilliant Jaya Wood Industry</p>
              <p class="timeline-information-date">2019 - 2021</p>
              <p class="timeline-information-text">Networking installation and maintenance (Mikrotik & Fiber Optic). Software and operating system troubleshooting. Computer and other peripheral maintenance and repair. Server company management and maintenance. Company website profile and System Information developing. CCTV installation and maintenance.</p>
            </div>

          </div>
        </div>
      </div>

    </div>
    <!-- /GRID CENTER -->

    <!-- GRID RIGHT-->
    <div class="grid-column">

      <div class="widget-box">
        <p class="widget-box-title">Occupation</p>
        <div class="widget-box-content">
          <div class="stat-block-list">

            <div class="stat-block">
              <div class="stat-block-decoration-icon mr-2">
                <img class="achievement-status-image" src="<?= base_url()?>/img/badge/gold-s.png">
              </div>
              <div class="stat-block-info">
                <p class="stat-block-title">2021 - Present</p>
                <p class="stat-block-text">Master Degree Student</p>
              </div>
            </div>

            <div class="stat-block">
              <div class="stat-block-decoration-icon mr-2">
                <img class="achievement-status-image" src="<?= base_url()?>/img/badge/gold-s.png">
              </div>
              <div class="stat-block-info">
                <p class="stat-block-title">2021 - Present</p>
                <p class="stat-block-text">Research Assitant</p>
              </div>
            </div>

            <div class="stat-block">
              <div class="stat-block-decoration-icon mr-2">
                <img class="achievement-status-image" src="<?= base_url()?>/img/badge/gold-s.png">
              </div>
              <div class="stat-block-info">
                <p class="stat-block-title">2020 - Present</p>
                <p class="stat-block-text">Freelance Web Developer</p>
              </div>
            </div>

          </div>
        </div>
      </div>

      <div class="widget-box">
        <p class="widget-box-title">Skills</p>
        <div class="widget-box-content">
          <div class="stat-block-list">

          <div class="stat-block">
              <div class="stat-block-decoration-icon mr-2">
              <img class="achievement-status-image" src="<?= base_url()?>/img/programing/c.png" alt="bdage-completedq-s">
              </div>
              <div class="stat-block-info">
                <p class="stat-block-text">CPP</p>
              </div>
            </div>

            <div class="stat-block">
              <div class="stat-block-decoration-icon mr-2">
              <img class="achievement-status-image" src="<?= base_url()?>/img/programing/php.png" alt="bdage-completedq-s">
              </div>
              <div class="stat-block-info">
                <p class="stat-block-text">PHP</p>
              </div>
            </div>

            <div class="stat-block">
              <div class="stat-block-decoration-icon mr-2">
              <img class="achievement-status-image" src="<?= base_url()?>/img/programing/python.png" alt="bdage-completedq-s">
              </div>
              <div class="stat-block-info">
                <p class="stat-block-text">Python</p>
              </div>
            </div>

            <div class="stat-block">
              <div class="stat-block-decoration-icon mr-2">
              <img class="achievement-status-image" src="<?= base_url()?>/img/programing/javascript.png" alt="bdage-completedq-s">
              </div>
              <div class="stat-block-info">
                <p class="stat-block-text">Javascript</p>
              </div>
            </div>

            <div class="stat-block">
              <div class="stat-block-decoration-icon mr-2">
              <img class="achievement-status-image" src="<?= base_url()?>/img/programing/matlab.png" alt="bdage-completedq-s">
              </div>
              <div class="stat-block-info">
                <p class="stat-block-text">Matlab</p>
              </div>
            </div>

            <div class="stat-block">
              <div class="stat-block-decoration-icon mr-2">
              <img class="achievement-status-image" src="<?= base_url()?>/img/programing/android-studio.png" alt="bdage-completedq-s">
              </div>
              <div class="stat-block-info">
                <p class="stat-block-text">Android Studio</p>
              </div>
            </div>

            <div class="stat-block">
              <div class="stat-block-decoration-icon mr-2">
              <img class="achievement-status-image" src="<?= base_url()?>/img/programing/tensorflow.png" alt="bdage-completedq-s">
              </div>
              <div class="stat-block-info">
                <p class="stat-block-text">Tensorflow</p>
              </div>
            </div>

            <div class="stat-block">
              <div class="stat-block-decoration-icon mr-2">
              <img class="achievement-status-image" src="<?= base_url()?>/img/programing/network.png" alt="bdage-completedq-s">
              </div>
              <div class="stat-block-info">
                <p class="stat-block-text">Networkin</p>
              </div>
            </div>

          </div>
        </div>
      </div>

    </div>
    <!-- /GRID RIGHT -->

  </div>
  <!-- /GRID -->


<?= $this->endSection('isi') ?>