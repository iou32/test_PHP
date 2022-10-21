<h1>ajouter_livre</h1>

<form action="/ma-page-de-traitement" method="post">
    <div>
        <label for="titre">titre :</label>
        <input type="text" id="titre" name="titre_livre">
    </div>
    <div>
        <label for="auteur">auteur&nbsp;:</label>
        <input type="auteur" id="auteur" name="auteur_livre">
    </div>
    <div>
        <label for="synopsis">synopsis :</label>
        <textarea id="synopsis" name="synopsis_livre"></textarea>
    </div>

    <div class="button">
        <button type="submit">Envoyer le formulaire</button>
    </div>

</form>