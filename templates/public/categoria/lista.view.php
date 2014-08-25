<h1><?php echo $this->model->nome; ?></h1>

<h3>Certificações:</h3>

<ul>
<?php foreach ( $this->model->get_certificacoes() as $c ) : ?>
    <li><?php echo $c->nome; ?></li>
<?php endforeach; ?>
</ul>