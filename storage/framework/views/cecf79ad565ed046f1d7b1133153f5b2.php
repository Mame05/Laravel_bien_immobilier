<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD D'ARTICLE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col s12">
            <h1 class="text-center">Détails du bien N°<?php echo e($bien->id); ?></h1>
            <div class="card" style="width: 70rem">
                <img src="<?php echo e($bien->image); ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-title"><strong>Nom:</strong> <?php echo e($bien->nom); ?></p>
                    <p> <strong>Catégorie :</strong> <?php echo e($bien->categorie); ?> </p>
                    <p> <strong>Adresse :</strong> <?php echo e($bien->adresse); ?> </p>
                    <p> <strong>Description :</strong> <?php echo e($bien->description); ?> </p>
                    <p><strong> Date de l'ajout :</strong> <?php echo e($bien->date_ajout); ?></p>
                    <a href="/bien" class="btn btn-outline-success btn-sm">Revenir à la liste des biens</a>
                </div>
                <hr>
                <div class="d-flex card-body justify-content-between gap-3">
                    <div>
                        <div class="row form-group">
                        <h5 class="text-center">COMMENTAIRES</h5>
                        <ol class="list-group list-group-numbered">
                        <?php $__currentLoopData = $bien->commentaires; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $commentaire): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li class="list-group-item d-flex justify-content-between align-items-start">
                            <div class="ms-1 me-auto card-title">
                                <div class="fw-bold"><?php echo e($commentaire->auteur); ?></div>
                                <p class="card-text"><?php echo e($commentaire->contenu); ?></p>
                                <p class="card-text"><?php echo e($commentaire->date_publication); ?></p>
                            </div> 
                            <p class="d-inline-flex gap-3">  <!--C'est pour mettre des espacements entre les button-->
                                <a href="/modifier-commentaire/<?php echo e($commentaire->id); ?>"  class="btn btn-outline-primary btn-sm">Modifier</a>
                                <a href="/supprimer-commentaire/<?php echo e($commentaire->id); ?>"  class="btn btn-outline-danger btn-sm">Supprimer</a>
                                </p>                     
                            </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ol>
                    </div>
                </div>  
                <div>
                <br>
                  <form action="/ajouter/commentaire-traitement" method="POST" class="form-group">
                    <?php echo csrf_field(); ?>
                    <div class="form-group">
                      <input type="hidden" name="bien_id" value="<?php echo e($bien->id); ?>">
                      <label for="auteur">Présentez-vous!!!</label>
                      <input type="text" class="form-control" id="auteur" name="auteur">
                    </div>
                    <br>
                    <div class="form-group">
                      <label for="contenu">Que dites-vous???</label>
                      <textarea class="form-control" id="contenu" name="contenu"></textarea>
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="date_publication">Date de la publication</label>
                        <input type="date" class="form-control" id="date_publication" name="date_publication">
                    </div>
                    <br>
                    <br>
                    <div class="d-flex justify-content-end">
                      <button type="submit" class="btn btn-primary btn sm">Envoyer</button>
                    </div>
                  </form>
                </div>
            </div>
        </div>
       </div>
      </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html><?php /**PATH C:\Users\cheikh\Desktop\projet\Laravel_bien_immobilier\resources\views/bien/detail.blade.php ENDPATH**/ ?>