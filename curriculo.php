<?php
$nome = 'Rafael Maia';
$profissao = 'Manager, Consultant, Developer and Design';
$especialidade = 'Management, Security, BPM, PHP, Javascrip, CSS, HTML5';

$contato = ['Email' => 'mailto:rafael7maia@gmail.com',
    'Twitter' => 'http://twitter.com/rafael7maia',
    'Linkedin' => 'http://linkedin.com/in/rafaelmaia',
    'Github' => 'http://github.com/rafael7maia'];

$formacao = [['inicio' => 2007,
    'termino' => 2010,
    'instituicao' => 'Universidade Estácio de Sá',
    'ocupacao' => 'Tecnologo em Redes de Computadores'],
    ['inicio' => '2006',
        'termino' => '2008',
        'instituicao' => 'Faculdade de Tecnologia do Nordeste',
        'ocupacao' => 'Gerência de Redes de Computadores']];

$experiencia = [['inicio' => 2016,
    'termino' => FALSE,
    'instituicao' => 'Brazilian Army',
    'ocupacao' => 'IT Infraestruture Manager'],
    ['inicio' => '2016',
        'termino' => FALSE,
        'instituicao' => 'Faculdades Cearenses',
        'ocupacao' => 'Professor']];

$portfolio = [['titulo' => 'Sucesu Ceará',
    'url' => 'http://www.sucesuce.org.br',
    'ano' => 2011],
    ['titulo' => 'Associação de Peritos em Computação Forense',
        'url' => 'http://www.apecof.org.br',
        'ano' => 2015]];

$profhabil = ['html' => 60, 'css' => 50, 'javascript' => 60, 'php' => 50];?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <title><?= $nome ?></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
  </head>
  <body>
    	<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-4">	
						<div class="jumbotron clearfix">
							<h1><?= $nome ?></h1>
							<p><?= $profissao .' &mdash; '.  $especialidade ?></p>
							<h2>Contato</h2>
							<div class="pull-right">
								<?php foreach ($contato as $canal => $url): ?>
									<a class="btn btn-lg btn-primary" href="<?= $url ?>"> <?= $canal ?></a>
								<?php endforeach; ?>
							</div> <!-- Alinha botões a direita-->
						</div><!-- /jumbotron -->
				</div><!-- /col-->
				<div class="col-sm-6 col-md-4">
						<h2>Formação e Experiência</h2>
							<?php foreach (array_merge($formacao, $experiencia) as $item): ?>
								<?php if (!$item['termino']) { $item['termino'] = 'Atual'; } ?>
								<h3> 
									<?= $item['ocupacao'] ?>
									<span class="small">
										<?= $item['inicio'] . ' &mdash; ' . $item['termino'] . ' ' . $item['instituicao'] ?>
									</span>
								</h3>
								
							<?php endforeach; ?>
				</div><!-- /col-->
				<div class="col-sm-6 col-md-4">
						<h2>Portfolio</h2>
						  <?php foreach ($portfolio as $item): ?>
							<div class="media clearfix">
							  <?php if (!empty($item['foto'])): ?>
								  <figure class="pull-left">
									<img class="media-object" src="<?= $item['foto'] ?>" />
								  </figure>
							  <?php endif; ?>
							  <div class="media-body">
								<h3><?= $item['titulo'] ?>
									<small>
											<?=$item['ano'] ?>
											<?php if (!empty($item['url'])): ?>
											&mdash;
											<a href="<?= $item['url'] ?>" target="_blank">Ver site</a>
											<?php endif; ?>
									</small>
								</h3>
							  </div> <!--media-body-->
							</div> <!-- /media-->
							<?php endforeach; ?>
				</div><!-- /col-->	
				<div class="col-sm-6 col-md-4">
					<?php foreach ($profhabil as $habilidade => $valor): ?>
						<div class="progress">
							<div class="progress-bar" style="width:<?= $valor ?>%">
								<?= $habilidade ?>
							</div>
						</div>
					<?php endforeach; ?>
				</div><!-- /col-->	
			</div><!--row-->
		</div> <!-- /container -->    
	</body>
</html>