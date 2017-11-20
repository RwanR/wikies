<?php
require_once '../bdd/connexion.php';
include '../inc/header.php';
include '../inc/sidebar.php';
?>

          <div class="row">

            <?php foreach(getNotes() as $notes): ?>
            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="#"><?= htmlspecialchars($notes['title']) ?></a>
                  </h4>
                  <h5><?= htmlspecialchars($notes['description']) ?></h5>
                  <p class="card-text"><?= htmlspecialchars($notes['content']) ?></p>
                </div>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
              </div>
            </div>
            <?php endforeach; ?>

          </div>
          <!-- /.row -->

<?php
include '../inc/footer.php';
