<h1 class="page-title">Détail</h1>

<!-- Afficher tous les détails disponibles d'un produit -->
<div class="owasp-product-detail">
    <?php foreach ($details as $detail) { ?>
        <section class="owasp-product">
            <article class="owasp-product-img">
                <?php
                echo '<a href="/index.php?page=details&id=' . $detail['id'] . '">
                    <img src="' . $detail['picture'] . '" alt="' . $detail['alt'] . '">
                    </a>';
                ?>
            </article>
            <article class="owasp-product-text">
                <h2>
                    <?php echo $detail['name']; ?>
                </h2>
                <p>
                    Date d'ajout du produit : <?php echo $detail['created_at']; ?>
                </p>
                <p>
                    <?php echo $detail['description'] ?>
                </p>
                <p>
                    <?php echo $detail['price']; ?> €
                </p>
            </article>
        </section>
    <?php } ?>
</div>