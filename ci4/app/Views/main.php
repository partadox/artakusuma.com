<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- bootstrap 4.3.1 -->
  <link rel="stylesheet" href="<?= base_url()?>/assets/css/vendor/bootstrap.min.css">
  <!-- styles -->
  <link rel="stylesheet" href="<?= base_url()?>/assets/css/styles.min.css">
  <!-- simplebar styles -->
  <link rel="stylesheet" href="<?= base_url()?>/assets/css/vendor/simplebar.css">
  <!-- tiny-slider styles -->
  <link rel="stylesheet" href="<?= base_url()?>/assets/css/vendor/tiny-slider.css">
  <!-- favicon -->
  <link rel="icon" href="<?= base_url()?>/assets/images/favicon.ico">
  <title>Arta Kusuma Hernanda | Profile</title>
</head>
<body>

  <!-- PAGE LOADER -->
  <div class="page-loader">
    <div class="page-loader-info">
      <p class="page-loader-info-title">artakusuma.com</p>

      <p class="page-loader-info-text">Loading...</p>
    </div>
    
    <div class="page-loader-indicator loader-bars">
      <div class="loader-bar"></div>
      <div class="loader-bar"></div>
      <div class="loader-bar"></div>
      <div class="loader-bar"></div>
      <div class="loader-bar"></div>
      <div class="loader-bar"></div>
      <div class="loader-bar"></div>
      <div class="loader-bar"></div>
    </div>
  </div>
  <!-- /PAGE LOADER -->

  <!-- CONTENT GRID -->
  <div class="content-grid">

    <!-- PROFILE HEADER -->
    <div class="profile-header">
      <div class="profile-header-info">
        <div class="user-short-description big">
          <a class="user-short-description-avatar user-avatar big">
            <div class="user-avatar-border">
              <div class="hexagon-148-164"></div>
            </div>
            <div class="user-avatar-content">
              <div class="hexagon-image-100-110" data-src="<?= base_url()?>/img/avatar/arta7.jpg"></div>
            </div>
            <div class="user-avatar-progress">
              <div class="hexagon-progress-124-136"></div>
            </div>
        
            <div class="user-avatar-progress-border">
              <div class="hexagon-border-124-136"></div>
            </div>
          </a>
  
          <!-- Mobile Ver. -->
          <a class="user-short-description-avatar user-short-description-avatar-mobile user-avatar medium">
            <div class="user-avatar-border">
              <div class="hexagon-120-132"></div>
            </div>
        
            <div class="user-avatar-content">
              <div class="hexagon-image-82-90" data-src="<?= base_url()?>/img/avatar/arta7.jpg"></div>
            </div>
        
            <div class="user-avatar-progress">
              <div class="hexagon-progress-100-110"></div>
            </div>
        
            <div class="user-avatar-progress-border">
              <div class="hexagon-border-100-110"></div>
            </div>
          </a>
          <!-- /Mobile Ver. -->
    
          <p class="user-short-description-title"><a href="profile-timeline.html">Arta Kusuma Hernanda</a></p>
    
          <p class="user-short-description-text"><a href="#">www.artakusuma.com</a></p>
        </div>
  
        <!-- PROFILE HEADER SOCIAL -->
        <div class="profile-header-social-links-wrap">
          <div id="profile-header-social-links-slider" class="profile-header-social-links">
            <div class="profile-header-social-link">
              <!-- SOCIAL LINK -->
              <a class="social-link facebook" target="_blank" href="<?= $profile['facebook'] ?>">
                <!-- ICON FACEBOOK -->
                <svg class="icon-facebook">
                  <use xlink:href="#svg-facebook"></use>
                </svg>
                <!-- /ICON FACEBOOK -->
              </a>
              <!-- /SOCIAL LINK -->
            </div>
  
            <div class="profile-header-social-link">
              <a class="social-link instagram" target="_blank" href="<?= $profile['instagram'] ?>">
                <svg class="icon-instagram">
                  <use xlink:href="#svg-instagram"></use>
                </svg>
              </a>
            </div>
      
            <div class="profile-header-social-link">
              <a class="social-link youtube"  target="_blank" href="<?= $profile['youtube'] ?>">
                <svg class="icon-youtube">
                  <use xlink:href="#svg-youtube"></use>
                </svg>
              </a>
            </div>

            <div class="profile-header-social-link">
              <a class="social-link icon-star" target="_blank" href="<?= $profile['linkedin'] ?>">
                <svg xmlns="http://www.w3.org/2000/svg" fill="#fff" aria-label="LinkedIn" viewBox="0 0 512 512"><rect width="512" height="512" fill="#0077b5" rx="15%"/><circle cx="142" cy="138" r="37"/><path stroke="#fff" stroke-width="66" d="M244 194v198M142 194v198"/><path d="M276 282c0-20 13-40 36-40 24 0 33 18 33 45v105h66V279c0-61-32-89-76-89-34 0-51 19-59 32"/></svg>
              </a>
            </div>
  
            <div class="profile-header-social-link">
              <a class="social-link icon-star" target="_blank" href="<?= $profile['github'] ?>">
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-4.466 19.59c-.405.078-.534-.171-.534-.384v-2.195c0-.747-.262-1.233-.55-1.481 1.782-.198 3.654-.875 3.654-3.947 0-.874-.312-1.588-.823-2.147.082-.202.356-1.016-.079-2.117 0 0-.671-.215-2.198.82-.64-.18-1.324-.267-2.004-.271-.68.003-1.364.091-2.003.269-1.528-1.035-2.2-.82-2.2-.82-.434 1.102-.16 1.915-.077 2.118-.512.56-.824 1.273-.824 2.147 0 3.064 1.867 3.751 3.645 3.954-.229.2-.436.552-.508 1.07-.457.204-1.614.557-2.328-.666 0 0-.423-.768-1.227-.825 0 0-.78-.01-.055.487 0 0 .525.246.889 1.17 0 0 .463 1.428 2.688.944v1.489c0 .211-.129.459-.528.385-3.18-1.057-5.472-4.056-5.472-7.59 0-4.419 3.582-8 8-8s8 3.581 8 8c0 3.533-2.289 6.531-5.466 7.59z"/></svg>
              </a>
            </div>

            <div class="profile-header-social-link">
              <a class="social-link void facebook" target="_blank" href="<?= $profile['kaggle'] ?>">
                <svg height="100px" style="enable-background:new 0 0 512 512;" version="1.1" viewBox="0 0 512 512" width="100px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g id="_x31_89-kaggle"><g><path d="M385.708,476.478L254.742,313.713l125.578-121.534c2.334-2.426,1.526-9.433-4.761-9.433h-62.16    c-3.145,0-6.288,1.618-9.433,4.761L185.128,307.604V32.738c0-4.491-2.247-6.737-6.738-6.737h-46.618    c-4.492,0-6.737,2.246-6.737,6.737v446.433c0,4.491,2.246,6.738,6.737,6.738h46.618c4.491,0,6.738-2.247,6.738-6.738v-97.91    l27.666-26.317l99.257,126.294c2.695,3.145,5.839,4.762,9.432,4.762h60.095c3.143,0,4.939-0.899,5.389-2.696L385.708,476.478z" style="fill:#20BEFF;"/></g></g><g id="Layer_1"/></svg>
              </a>
            </div>

          </div>
  
          <!-- SLIDER CONTROLS -->
          <div id="profile-header-social-links-slider-controls" class="slider-controls">
            <div class="slider-control left">
              <svg class="slider-control-icon icon-small-arrow">
                <use xlink:href="#svg-small-arrow"></use>
              </svg>
            </div>
            <div class="slider-control right">
              <svg class="slider-control-icon icon-small-arrow">
                <use xlink:href="#svg-small-arrow"></use>
              </svg>
            </div>
          </div>
        </div>
        <!-- /PROFILE HEADER SOCIAL -->
  
        <!-- USER STATS -->
        <div class="user-stats">
  
          <div class="user-stat big">
            <img class="user-stat-image" src="<?= base_url()?>/img/flag/indonesia.png" alt="flag-idn">
    
            <p class="user-stat-text">idn</p>
          </div>
        </div>
        <!-- /USER STATS -->
  
      </div>
    </div>
    <!-- /PROFILE HEADER -->

    <!-- SECTION NAVIGATION -->
    <nav class="section-navigation">
      <div id="section-navigation-slider" class="section-menu">

        <a class="section-menu-item <?= $about_active ?>" href="<?= base_url('home') ?>">
          <svg class="section-menu-item-icon icon-profile">
            <use xlink:href="#svg-profile"></use>
          </svg>
          <p class="section-menu-item-text">About</p>
        </a>

        <a class="section-menu-item <?= $project_active ?>" href="<?= base_url('home/project') ?>">
          <svg class="section-menu-item-icon icon-grid">
            <use xlink:href="#svg-grid"></use>
          </svg>
          <p class="section-menu-item-text">Project</p>
        </a>

        <a class="section-menu-item <?= $blog_active ?>" href="<?= base_url('home/blog') ?>">
          <svg class="section-menu-item-icon icon-blog-posts">
            <use xlink:href="#svg-blog-posts"></use>
          </svg>
          <p class="section-menu-item-text">Blog</p>
        </a>

        <a class="section-menu-item <?= $publication_active ?>" href="<?= base_url('home/publication') ?>">
          <svg class="section-menu-item-icon icon-forum">
            <use xlink:href="#svg-forum"></use>
          </svg>
          <p class="section-menu-item-text">Publication</p>
        </a>
  
      </div>
  
      <!-- Sliders Controls -->
      <div id="section-navigation-slider-controls" class="slider-controls">
        <div class="slider-control left">
          <svg class="slider-control-icon icon-small-arrow">
            <use xlink:href="#svg-small-arrow"></use>
          </svg>
        </div>
        <div class="slider-control right">
          <svg class="slider-control-icon icon-small-arrow">
            <use xlink:href="#svg-small-arrow"></use>
          </svg>
        </div>
      </div>
    </nav>
    <!-- /SECTION NAVIGATION -->

    <?= $this->renderSection('isi') ?>

  </div>
  <!-- /CONTENT GRID -->

<!-- app -->
<script src="<?= base_url()?>/assets/js/utils/app.js"></script>
<!-- page loader -->
<script src="<?= base_url()?>/assets/js/utils/page-loader.js"></script>
<!-- simplebar -->
<script src="<?= base_url()?>/assets/js/vendor/simplebar.min.js"></script>
<!-- liquidify -->
<script src="<?= base_url()?>/assets/js/utils/liquidify.js"></script>
<!-- XM_Plugins -->
<script src="<?= base_url()?>/assets/js/vendor/xm_plugins.min.js"></script>
<!-- tiny-slider -->
<script src="<?= base_url()?>/assets/js/vendor/tiny-slider.min.js"></script>
<!-- chartJS -->
<script src="<?= base_url()?>/assets/js/vendor/Chart.bundle.min.js"></script>
<!-- global.hexagons -->
<script src="<?= base_url()?>/assets/js/global/global.hexagons.js"></script>
<!-- global.tooltips -->
<script src="<?= base_url()?>/assets/js/global/global.tooltips.js"></script>
<!-- global.charts -->
<script src="<?= base_url()?>/assets/js/global/global.charts.js"></script>
<!-- header -->
<script src="<?= base_url()?>/assets/js/header/header.js"></script>
<!-- sidebar -->
<script src="<?= base_url()?>/assets/js/sidebar/sidebar.js"></script>
<!-- content -->
<script src="<?= base_url()?>/assets/js/content/content.js"></script>
<!-- form.utils -->
<script src="<?= base_url()?>/assets/js/form/form.utils.js"></script>
<!-- SVG icons -->
<script src="<?= base_url()?>/assets/js/utils/svg-loader.js"></script>

<script>
  app.plugins.createPopup({
  container: '.popup-project',
  trigger: '.popup-<?= $arta ?>',
  overlay: {
    color: '21, 21, 31',
    opacity: .96
  },
  animation: {
    type: 'translate-in-fade',
    speed: .3,
    translateOffset: 40
  }
});
</script>

</body>
</html>