<?= $this->extend('main') ?>

<?= $this->section('isi') ?>

  <section class="section">
    
    <div class="section-header">
      <div class="section-header-info">
        <p class="section-pretitle"><?= $title ?></p>
        <h2 class="section-title">My Projects <span class="highlighted"></span></h2>
      </div>
    </div>

    <div class="section-filters-bar centered v3">
      <div class="filter-tabs">

        <div class="filter-tab active">
          <p class="filter-tab-text">All</p>
        </div>
        <div class="filter-tab">
          <p class="filter-tab-text">Cat 1</p>
        </div>

      </div>

      <form class="form">
        <div class="form-select">
          <label for="store-filter-category">Filter By</label>
          <select id="store-filter-category" name="store_filter_category">
            <option value="0">All</option>
          </select>
          <svg class="form-select-icon icon-small-arrow">
            <use xlink:href="#svg-small-arrow"></use>
          </svg>
        </div>
      </form>

    </div>

    <div class="grid grid-3-3-3-3 centered">

      <div class="product-preview mb-2">
        <a href="#">
          <figure class="product-preview-image liquid">
            <!-- $pin1['berita_sampul'] -->
            <img src="<?= base_url('img/project/' . 'default.jpg')  ?>" alt="item-01">
          </figure>
        </a>
        <div class="product-preview-info">
          <p class="text-sticker"><span class="highlighted">Gov</span></p>
          <p class="product-preview-title"><a href="#">Official Website Dispendukcapil - Kota Mojokerto
          </a></p>
          <p class="product-preview-category digital">2022</p>
        </div>
        <div class="event-preview-info-bottom">
          <a style="width:260px; margin-bottom:20px; margin-left:10px;" href="#" class="button secondary">Read</a>
        </div>
      </div>

      <div class="product-preview mb-2">
        <a href="#">
          <figure class="product-preview-image liquid">
            <!-- $pin1['berita_sampul'] -->
            <img src="<?= base_url('img/project/' . 'default.jpg')  ?>" alt="item-01">
          </figure>
        </a>
        <div class="product-preview-info">
          <p class="text-sticker"><span class="highlighted">Gov</span></p>
          <p class="product-preview-title"><a href="#">Population Data Website - Kota Madiun
          </a></p>
          <p class="product-preview-category digital">2022</p>
        </div>
        <div class="event-preview-info-bottom">
          <a style="width:260px; margin-bottom:20px; margin-left:10px;" href="#" class="button secondary">Read</a>
        </div>
      </div>

      <div class="product-preview mb-2">
        <a href="#">
          <figure class="product-preview-image liquid">
            <!-- $pin1['berita_sampul'] -->
            <img src="<?= base_url('img/project/' . 'default.jpg')  ?>" alt="item-01">
          </figure>
        </a>
        <div class="product-preview-info">
          <p class="text-sticker"><span class="highlighted">Gov</span></p>
          <p class="product-preview-title"><a href="#">SIPR - Kab. Mojokerto
          </a></p>
          <p class="product-preview-category digital">2022</p>
        </div>
        <div class="event-preview-info-bottom">
          <a style="width:260px; margin-bottom:20px; margin-left:10px;" href="#" class="button secondary">Read</a>
        </div>
      </div>

      <div class="product-preview mb-2">
        <a href="#">
          <figure class="product-preview-image liquid">
            <!-- $pin1['berita_sampul'] -->
            <img src="<?= base_url('img/project/' . 'default.jpg')  ?>" alt="item-01">
          </figure>
        </a>
        <div class="product-preview-info">
          <p class="text-sticker"><span class="highlighted">Freelance</span></p>
          <p class="product-preview-title"><a href="#">Academic Information System - Alhaqq
          </a></p>
          <p class="product-preview-category digital">2022</p>
        </div>
        <div class="event-preview-info-bottom">
          <a style="width:260px; margin-bottom:20px; margin-left:10px;" href="#" class="button secondary">Read</a>
        </div>
      </div>

      <div class="product-preview mb-2">
        <a href="#">
          <figure class="product-preview-image liquid">
            <!-- $pin1['berita_sampul'] -->
            <img src="<?= base_url('img/project/' . 'default.jpg')  ?>" alt="item-01">
          </figure>
        </a>
        <div class="product-preview-info">
          <p class="text-sticker"><span class="highlighted">Freelance</span></p>
          <p class="product-preview-title"><a href="#">Company Profile Agribuana.com</a></p>
          <p class="product-preview-category digital">2022</p>
        </div>
        <div class="event-preview-info-bottom">
          <a style="width:260px; margin-bottom:20px; margin-left:10px;" href="#" class="button secondary">Read</a>
        </div>
      </div>

      <div class="product-preview mb-2">
        <a href="#">
          <figure class="product-preview-image liquid">
            <!-- $pin1['berita_sampul'] -->
            <img src="<?= base_url('img/project/' . 'default.jpg')  ?>" alt="item-01">
          </figure>
        </a>
        <div class="product-preview-info">
          <p class="text-sticker"><span class="highlighted">Research</span></p>
          <p class="product-preview-title"><a href="#">3D Blood Clots from Deep Vein Thrombosis Image Reconstruction Based on 2D Ultrasound Images</a></p>
          <p class="product-preview-category digital">Mar 2021 - Present</p>
        </div>
        <div class="event-preview-info-bottom">
          <a style="width:260px; margin-bottom:20px; margin-left:10px;" href="#" class="button secondary">Read</a>
        </div>
      </div>

      <div class="product-preview mb-2">
        <a href="#">
          <figure class="product-preview-image liquid">
            <!-- $pin1['berita_sampul'] -->
            <img src="<?= base_url('img/project/' . 'default.jpg')  ?>" alt="item-01">
          </figure>
        </a>
        <div class="product-preview-info">
          <p class="text-sticker"><span class="highlighted">Research</span></p>
          <p class="product-preview-title"><a href="#">Teledermatology Project</a></p>
          <p class="product-preview-category digital">Mar 2021 - Mar 2022</p>
        </div>
        <div class="event-preview-info-bottom">
          <a style="width:260px; margin-bottom:20px; margin-left:10px;" href="#" class="button secondary">Read</a>
        </div>
      </div>

      <div class="product-preview mb-2">
        <a href="#">
          <figure class="product-preview-image liquid">
            <!-- $pin1['berita_sampul'] -->
            <img src="<?= base_url('img/project/' . 'default.jpg')  ?>" alt="item-01">
          </figure>
        </a>
        <div class="product-preview-info">
          <p class="text-sticker"><span class="highlighted">Task</span></p>
          <p class="product-preview-title"><a href="#">Company Web Profile and Purchasing System Information</a></p>
          <p class="product-preview-category digital">2019 - 2021</p>
        </div>
        <div class="event-preview-info-bottom">
          <a style="width:260px; margin-bottom:20px; margin-left:10px;" href="#" class="button secondary">Read</a>
        </div>
      </div>

      <div class="product-preview mb-2">
        <a href="#">
          <figure class="product-preview-image liquid">
            <!-- $pin1['berita_sampul'] -->
            <img src="<?= base_url('img/project/' . 'default.jpg')  ?>" alt="item-01">
          </figure>
        </a>
        <div class="product-preview-info">
          <p class="text-sticker"><span class="highlighted">Task</span></p>
          <p class="product-preview-title"><a href="#">Web Classifier Skin Disease using CNN</a></p>
          <p class="product-preview-category digital">Feb 2019 - Aug 2019</p>
        </div>
        <div class="event-preview-info-bottom">
          <a style="width:260px; margin-bottom:20px; margin-left:10px;" href="#" class="button secondary">Read</a>
        </div>
      </div>

      <div class="product-preview mb-2">
        <a href="#">
          <figure class="product-preview-image liquid">
            <!-- $pin1['berita_sampul'] -->
            <img src="<?= base_url('img/project/' . 'default.jpg')  ?>" alt="item-01">
          </figure>
        </a>
        <div class="product-preview-info">
          <p class="text-sticker"><span class="highlighted">Freelance</span></p>
          <p class="product-preview-title"><a href="#">Airport Equipment & Maintenance Information System</a></p>
          <p class="product-preview-category digital">May 2019 - Jul 2019</p>
        </div>
        <div class="event-preview-info-bottom">
          <a style="width:260px; margin-bottom:20px; margin-left:10px;" href="#" class="button secondary">Read</a>
        </div>
      </div>

      <div class="product-preview mb-2">
        <a href="#">
          <figure class="product-preview-image liquid">
            <!-- $pin1['berita_sampul'] -->
            <img src="<?= base_url('img/project/' . 'default.jpg')  ?>" alt="item-01">
          </figure>
        </a>
        <div class="product-preview-info">
          <p class="text-sticker"><span class="highlighted">Experiment</span></p>
          <p class="product-preview-title"><a href="#">Crawling Data from E-Comerce use Scrapy</a></p>
          <p class="product-preview-category digital">Mar 2019 - Jun 2019</p>
        </div>
        <div class="event-preview-info-bottom">
          <a style="width:260px; margin-bottom:20px; margin-left:10px;" href="#" class="button secondary">Read</a>
        </div>
      </div>

      <div class="product-preview mb-2">
        <a href="#">
          <figure class="product-preview-image liquid">
            <!-- $pin1['berita_sampul'] -->
            <img src="<?= base_url('img/project/' . 'default.jpg')  ?>" alt="item-01">
          </figure>
        </a>
        <div class="product-preview-info">
          <p class="text-sticker"><span class="highlighted">Task</span></p>
          <p class="product-preview-title"><a href="#">Smart Attendence Gate using RFID</a></p>
          <p class="product-preview-category digital">Feb 2019 - Mar 2019</p>
        </div>
        <div class="event-preview-info-bottom">
          <a style="width:260px; margin-bottom:20px; margin-left:10px;" href="#" class="button secondary">Read</a>
        </div>
      </div>

      <div class="product-preview mb-2">
        <a href="#">
          <figure class="product-preview-image liquid">
            <!-- $pin1['berita_sampul'] -->
            <img src="<?= base_url('img/project/' . 'default.jpg')  ?>" alt="item-01">
          </figure>
        </a>
        <div class="product-preview-info">
          <p class="text-sticker"><span class="highlighted">Task</span></p>
          <p class="product-preview-title"><a href="#">CE-Service (Student Administration & Information Android Apps)</a></p>
          <p class="product-preview-category digital">Sep 2018 - Nov 2018</p>
        </div>
        <div class="event-preview-info-bottom">
          <a style="width:260px; margin-bottom:20px; margin-left:10px;" href="#" class="button secondary">Read</a>
        </div>
      </div>

      <div class="product-preview mb-2">
        <a href="#">
          <figure class="product-preview-image liquid">
            <!-- $pin1['berita_sampul'] -->
            <img src="<?= base_url('img/project/' . 'default.jpg')  ?>" alt="item-01">
          </figure>
        </a>
        <div class="product-preview-info">
          <p class="text-sticker"><span class="highlighted">Freelance</span></p>
          <p class="product-preview-title"><a href="#">Information System and Smart Gate using Face Recognize</a></p>
          <p class="product-preview-category digital">Oct 2018 - Nov 2018</p>
        </div>
        <div class="event-preview-info-bottom">
          <a style="width:260px; margin-bottom:20px; margin-left:10px;" href="#" class="button secondary">Read</a>
        </div>
      </div>

      <div class="product-preview mb-2">
        <a href="#">
          <figure class="product-preview-image liquid">
            <!-- $pin1['berita_sampul'] -->
            <img src="<?= base_url('img/project/' . 'default.jpg')  ?>" alt="item-01">
          </figure>
        </a>
        <div class="product-preview-info">
          <p class="text-sticker"><span class="highlighted">Task</span></p>
          <p class="product-preview-title"><a href="#">Magic Mirror</a></p>
          <p class="product-preview-category digital">Mar 2018 - Apr 2018</p>
        </div>
        <div class="event-preview-info-bottom">
          <a style="width:260px; margin-bottom:20px; margin-left:10px;" href="#" class="button secondary">Read</a>
        </div>
      </div>

    </div>
  </section>


<?= $this->endSection('isi') ?>