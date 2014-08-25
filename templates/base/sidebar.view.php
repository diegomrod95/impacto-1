<aside class="col-md-3">
    <p class="lead">Shop Name</p>
    <div class="list-group">
        <?php foreach ($this->categorias as $cat): ?>
            <a href="<?php \Impacto\Html\Utils::get_url("categoria/lista/" . $cat["id"]); ?>" class="list-group-item">
                <?php echo $cat["nome"]; ?>
            </a>
        <?php endforeach; ?>
    </div>
</aside>