<header>
        
    <nav>
        <ul class="nav d-flex justify-content-between">
            <li class="nav-item m-3">
                <a href="index.php"><h1>JEAN FORTEROCHE</h1></a>
            </li>
            <li class="nav-item m-3">
                <a class="nav-link btn btn-outline-light" data-toggle="modal" data-target="#connexion" href="#"><i class="fas fa-sign-in-alt"></i> Connexion</a>
            </li>
        </ul>
    </nav>
                
    <div class="text-center hero pt-5 d-flex justify-content-around flex-wrap">
        <div class="w-50 pt-4 mt-5">
            <img class="img-fluid cover" src="public/img/livre.jpg" alt="" />
        </div>
        <div class="text-left pt-4 w-50 mt-5">
            <p class="livre mb-3">BILLET SIMPLE POUR L'ALASKA</p>
            <p class="mb-5">Inédit ! Un nouvel épisode chaque semaine...<br/>Inscrivez vous pour commenter les épisodes être informé dès la publication</p>
            <a class="btn btn-lg" id="callToAction" data-toggle="modal" data-target="#registration">S'inscrire</a>
        </div>
            
    </div>
    
</header>


<!-- MODAL -->

    <!-- MODAL connexion -->
<section class="modal fade" id="connexion">
	<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Connection</h4>
			</div>
			<div class="modal-body">
				<form action="index.php?action=login" method="post">
                    <label class="pb-1" for="pseudo">Votre pseudo:</label><input class="form-control" type="text" name="pseudo" id="pseudo" placeholder="pseudo" <?php echo htmlspecialchars('pseudo'); ?> required>
                    
                    <label class="pb-1 pt-2" for="password">Mot de passe:</label><input class="form-control" type="password" name="password" id="password" placeholder="password" <?php echo htmlspecialchars('password'); ?> required>

                    <div class="form-group form-check">
					    <label class="pt-4 form-check-label" for="checkbox"><input class="form-check-input" type="checkbox" name="checkbox"> se souvenir de moi</label>
                    </div>
					<input class="mt-4 btn btn-block" type="submit" value="se connecter">
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-outline-danger" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</section>

    <!-- MODAL registration -->
<section class="modal fade" id="registration">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
			    <h4 class="modal-title">Inscription</h4>
            </div>
            <div class="modal-body">
                <form action="index.php?action=registration" method="post">
                    <label class="pb-1" for="pseudo">Votre pseudo</label><input class="form-control" type="text" name="pseudo" id="pseudo" placeholder="pseudo" <?php echo htmlspecialchars('pseudo'); ?> required>

                    <label class="pb-1 pt-2" for="mail">Votre adresse mail</label><input class="form-control" type="mail" name="mail" id="mail" placeholder="adresse@mail.fr" <?php echo htmlspecialchars('mail'); ?> required>

                    <label class="pb-1 pt-2" for="password">Mot de passe</label><input class="form-control" type="password" name="password" id="password" placeholder="password" <?php echo htmlspecialchars('password'); ?> required>

                    <label class="pt-2" for="passwordConfirm">Confirmer votre mot de passe</label><input class="form-control" type="password" name="passwordConfirm" id="passwordConfirm" placeholder="password" <?php echo htmlspecialchars('passwordConfirm'); ?> required>

                    <input class="mt-4 btn btn-block" type="submit" value="s'inscrire">
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</section>