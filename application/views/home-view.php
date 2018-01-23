<main id="fullpage">
	<div class="col2">
		<div class="txtArea middle">
			<span>
				<i class="fa fa-long-arrow-right" aria-hidden="true"></i>
			</span>
			<div> 
				<h1>
					Hi, my name is Maxime,<br>
					I’m a UX Designer
				</h1>
			</div>
			<?php foreach ($projects as $project){ ?>
				<div> 
					<h3><?= $project->speciality ?></h3>
					<h2><?= $project->name ?></h2>
					<p>
						<?= $project->texte_home ?>
					</p>
					<a href="<?= base_url('index.php/welcome/project/'.$project->id_project) ?>"></a>
				</div>
			<?php } ?>
		</div><span class="vmiddle"></span>
	</div><div class="col2 img">
		<div class="bgi section" style="background-image: url(<?= base_url('assets/img/home.jpg') ?>)"></div>
		<?php foreach ($projects as $project){ ?>
			<div class="bgi section" style="background-image: url(<?= base_url('assets/img/'.$project->image_home) ?>)"></div>
		<?php } ?>
		<div id="menu"></div>
	</div>
</main>