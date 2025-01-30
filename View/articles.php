<h1 class="owasp-page-title">Liste de nos produits</h1>

<!-- Afficher tous les produits disponibles -->
<div class="owasp-all-products">
    <?php foreach ($products as $product) { ?>
        <section class="owasp-product">
            <article class="owasp-product-img">
                <?php
                echo '<a href="/index.php?page=details&id=' . $product['id'] . '">
                    <img src="' . $product['picture'] . '" alt="' . $product['alt'] . '">
                    </a>';
                ?>
            </article>
            <article class="owasp-product-text">
                <h2>
                    <?php echo $product['name']; ?>
                </h2>
                <p>
                    Date d'ajout du produit : <?php echo $product['created_at']; ?>
                </p>
                <p>
                    <?php echo $product['price']; ?> €
                </p>
            </article>
        </section>
    <?php } ?>
</div>