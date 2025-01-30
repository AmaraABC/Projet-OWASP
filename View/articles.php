<h1 class="owasp-page-title">Liste de nos produits</h1>

<!-- Afficher tous les produits disponibles -->
<div class="owasp-all-articles">
    <?php foreach ($articles as $article) { ?>
        <section class="owasp-article">
            <article class="owasp-article-img">
                <?php
                echo '<a href="/index.php?page=details&id=' . $article['id'] . '">
                    <img src="' . $article['picture'] . '" alt="' . $article['description'] . '">
                    </a>';
                ?>
            </article>
            <article class="owasp-article-text">
                <h2>
                    <?php echo $article['name']; ?>
                </h2>
                <p>
                    <?php echo $article['price']; ?> €
                </p>
            </article>
        </section>
    <?php } ?>
</div>