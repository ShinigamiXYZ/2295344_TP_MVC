<h1>inscription forum</h1>
<form action="index.php?module=user&action=insert" method="post">
        <label>
            Nom
            <input type="text" name="nom">
        </label>
        <label>
            Email / nomUtilisateur
            <input type="email" name="nomUtilisateur">
        </label>
     
        <label>
            Mot de passe
            <input type="password" name="motDePasse">
        </label>
        <div class="">
						<label class="">
							<input type="checkbox" class="checkbox" required="">
							<span>j'accepte les termes et conditions</span>
						</label>
						<div class=""> </div>
					</div>
					<input type="submit">
                    <p>Déja Membre? <a href="?module=user&action=login"> Connecte-toi!</a></p>
    </form>
 

  