<div id="experiencias-main" class="container">
  <h2 class="text-center"><?php echo $experiencias; ?></h2>
  <p class="lead text-center"><?php echo $descexperiencias; ?></p>
  <hr/>
  <div class="row">
  <?php $json = json_decode($experienciasdados, true); $i = 0; ?>
  <?php foreach ($json as $key => $value) : ?>
    <?php foreach ($value as $type => $array) : ?>
      <div class="col col-md-12 col-sm-12 col-12">
        <?php if($i > 0){ echo '<hr/>';} ?>
        <h3><?php echo $type; ?></h3>
        <?php $i++; ?>
      </div>
      <?php foreach ($array as $data => $content) : ?>
        <div class="col col-md-3 col-sm-12 col-12">
          <strong><?php echo $content['where']; ?></strong>
          <p class = "littlespacetop"> <?php echo $content['period']; ?> </p>
        </div>
        <div class="col col-md-9 col-sm-12 col-12">
          <strong><?php echo $content['name']; ?></strong>
          <p> <?php echo $content['desc']; ?> </p>
          <div class="colored">
            <i class="fas fa-map-marker-alt"></i>
            <strong><?php echo $content['place']; ?></strong>
            <?php if(isset($content['site'])) : ?>
              <a href="<?php echo $content['site']; ?>" class="nodecoration">
                 |  <i class="fas fa-globe"></i>
                <strong><?php echo $content['site']; ?></strong>
              </a>
            <?php endif; ?>
          </div>
        </div>
        <div class="col col-md-12 col-sm-12 col-12 morespace"></div>
      <?php endforeach; ?>
    <?php endforeach; ?>
  <?php endforeach; ?>
  </div>
</div>
