<div id="habilidades-main" class="container">
  <h2 class="text-center"><?php echo $habilidades; ?></h2>
  <p class="lead text-center"><?php echo $deschabilidades; ?></p>
  <hr/>
  <div class="row">
  <?php $json = json_decode($habilidadesdados, true); $i = 0; ?>
  <?php foreach ($json as $key => $value) : ?>
    <?php foreach ($value as $type => $array) : ?>
      <div class="col col-md-12 col-sm-12 col-12">
        <?php if($i > 0){ echo '<hr/>';} ?>
        <h3><?php echo $type; ?></h3>
        <?php $i++; ?>
      </div>
      <?php foreach ($array as $data => $content) : ?>
        <div class="col col-md-6 col-sm-12 col-12 divstar">
            <strong><?php echo $content['name']; ?></strong>
            <span class = "float-right">
              <?php $full  = $content['stars']; ?>
              <?php $empty = 5 - $full; ?>
              <?php for($j = 0; $j < $full; $j++) : ?>
                <i class="fas fa-star"></i>
              <?php endfor; ?>
              <?php for($j = 0; $j < $empty; $j++) : ?>
                <i class="far fa-star"></i>
              <?php endfor; ?>
            </span>
        </div>
      <?php endforeach; ?>
    <?php endforeach; ?>
  <?php endforeach; ?>
  </div>
</div>
