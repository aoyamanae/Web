<?php 
$title='Search results';
$h='none'; $a='none'; $b='none'; $c='none';
require 'header.php'; 
?>

<section class="section-80 section-120">
  <div class="container container-wide text-left">
    <div class="row justify-content-sm-center">
      <div class="col-xl-6 col-lg-8 col-md-10">
        <!-- RD Search-->
        <form class="form-inline rd-search" action="search-results.php" method="GET">
          <div class="form-wrap">
            <label class="form-label rd-input-label" for="rd-search-form-input">Search</label>
            <input class="form-input" id="rd-search-form-input" type="text" name="s" autocomplete="off">
          </div>
          <button class="button button-primary button-sm button-naira button-naira-up" style="min-width: 160px;"
            type="submit"><span class="icon fa-search"></span><span>Search</span></button>
        </form>
        <div class="rd-search-results"></div>
      </div>
    </div>
  </div>
</section>

<?php require 'footer.php'; ?>