<?= $this->extend('main') ?>

<?= $this->section('isi') ?>

  <section class="section">

    <div class="section-header">
      <div class="section-header-info">
        <p class="section-pretitle"><?= $title ?></p>
        <h2 class="section-title">My Blogs <span class="highlighted">5</span></h2>
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

    <div class="grid grid-3-3-3-3 centered-on-mobile">

      <div class="event-preview">
        <figure class="event-preview-cover liquid">
          <img src="<?= base_url()?>/img/banner/02.png" alt="cover-43">
        </figure>
        <div class="event-preview-info">
          <div class="event-preview-info-top">
            <div class="date-sticker">
              <p class="date-sticker-day">Oct</p>
              <p class="date-sticker-month">2022</p>
            </div>
            <p class="event-preview-title popup-event-information-trigger">Cras ultricies ligula sed magna dictum porta. Sed porttitor</p>
            <!-- <p class="event-preview-text">Cras ultricies ligula sed magna dictum porta. Sed porttitor lectus nibh. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p> -->
            <div style="padding-top: 22px;" class="decorated-text">
              <svg class="decorated-text-icon icon-pinned">
                <use xlink:href="#svg-pinned"></use>
              </svg>
              <p class="decorated-text-content">Category 1</p>
            </div>
            <a href="" class="button secondary">Read</a>
          </div>
          
          <div class="event-preview-info-bottom">
            
          </div>
        </div>
      </div>

    </div>
  </section>
<?= $this->endSection('isi') ?>