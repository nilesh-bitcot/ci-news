<div class="container mt-5">
  <div class="row">
    <?php echo view('templates/sidebar'); ?>
    <div class="col-sm-8">
        <h2><?= esc($news['title']) ?></h2>
        <p><?= esc($news['body']) ?></p>
    </div>
  </div>
</div>