<?= $this->extend('main') ?>

<?= $this->section('isi') ?>

  <section class="section">

    <div class="section-header">
      <div class="section-header-info">
        <p class="section-pretitle">List of All</p>
        <h2 class="section-title">My Publication</h2>
      </div>
    </div>

    <div class="grid grid-3-3-3-3 centered">

      <div class="quest-item">
        <figure class="quest-item-cover liquid">
          <img src="<?= base_url()?>/img/banner/01.png" alt="cover-01">
        </figure>
        <p class="text-sticker small-text">
          2019
        </p>
        <div class="quest-item-info">
          <div class="quest-item-badge">
            <img src="<?= base_url()?>/img/badge/completedq-b.png" alt="completedq-b">
          </div>
          <p class="quest-item-title">Disease Classification based on Dermoscopic Skin Images Using Convolutional Neural Network in Teledermatology System </p>
          <p class="quest-item-text">Event : CENIM 2019</p>
          <p class="quest-item-text">Type : Conference</p>
          <p class="quest-item-text">Publisher : IEEE</p>
          <div class="progress-stat">
            <a class="button full secondary" target="_blank" href="https://ieeexplore.ieee.org/document/8973303">
              Publisher Page
            </a>
          </div>
          <div class="quest-item-meta">
          </div>
        </div>
      </div>

    </div>

  </section>
<?= $this->endSection('isi') ?>