<div class="login_Form">
    <h1>Login Utilisateur</h1>
    <form action="index.php?module=user&action=login" method="post">

        <label>
            Email / nomUtilisateur
            <input type="email" name="nomUtilisateur">
        </label>

        <label>
            Mot de passe
            <input type="password" name="motDePasse">
        </label>

        <input type="submit">
        <p>Pas encore Membre? <a href="?module=user&action=create"> Inscrit-toi!</a></p>
    </form>
</div>