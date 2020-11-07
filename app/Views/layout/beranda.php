<?= $this->extend('layout/main') ?>
<?= $this->extend('layout/menu') ?>
<?= $this->section('content') ?>
<div class="col-sm-12">
  <div class="page-title-box">
    <h4 class="page-title">Selamat Beranda</h4>
  </div>
</div>

<div class="col-sm-12">
  <div class="card m-b-30">
    <h4 class="card-header mt-0">Beranda</h4>
    <div class="card-body">
      <p class="card-text">
        <div class="alert alert-info">
          Ini latihan saya membuat CRUD di CI 4 Full Ajax Jquery<BR>
          <!-- TradingView Widget BEGIN -->
          <div class="tradingview-widget-container">
            <div class="tradingview-widget-container__widget"></div>
            <div class="tradingview-widget-copyright"><a href="https://id.tradingview.com/symbols/IDX-BBCA/technicals/" rel="noopener" target="_blank"><span class="blue-text">Analisis Teknikal untuk BBCA</span></a> oleh TradingView</div>
            <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-technical-analysis.js" async>
              {
                "interval";
                "1m",
                "width";
                "100%",
                "isTransparent";
                true,
                "height";
                "100%",
                "symbol";
                "IDX:BBCA",
                "showIntervalTabs";
                true,
                "locale";
                "id",
                "colorTheme";
                "light"
              }
            </script>
          </div>
          <!-- TradingView Widget END -->
        </div>
      </p>
    </div>
  </div>
</div>
<?= $this->endSection('') ?>