<div id="projetos-topo" class="container">
  <h2 class="text-center"><?php echo $projetos; ?></h2>
  <p class="lead text-center"><?php echo $descprojetos; ?></p>
  <hr/>
  <div class="row">
  <?php $json = json_decode($projetosdados, true); $i = 0; ?>
  <?php foreach ($json as $key => $value) : ?>
    <div class="col col-md-6 col-sm-12 col-12">
      <div class="project">
        <img src="images/projects/<?php echo $value['img']; ?>" alt="<?php echo $value['name']; ?>" class="image-project">
        <div class="overlay">
          <a href="<?php echo $value['url']; ?>" target="_blank">
            <div class="col col-md-12 col-sm-12 col-12 text">
              <strong><?php echo $value['name']; ?></strong><br/><br/>
              <?php echo $value['desc']; ?>
            </div>
          </a>
        </div>
      </div>
	  </div>
  <?php endforeach; ?>
  </div>
</div>
