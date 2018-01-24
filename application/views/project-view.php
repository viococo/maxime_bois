<header class="bgi" style="background-image: url(<?= base_url('assets/img/'.$project['object'][0]->image_header) ?>)">
</header>
<main class="project">
    <div class="txtHeader">
		<h1><?= $project['object'][0]->name ?></h1>
		<p>
			<i class="si case"></i><span> <?= $project['object'][0]->speciality ?> </span>
			<i class="si book"></i><span> <?= $project['object'][0]->context ?> </span>
			<i class="si people"></i><span> <?php echo ($project['object'][0]->solo) ? 'solo' : 'Group' ?> </span>
			<i class="si calendar"></i><span> <?= $project['object'][0]->year ?> </span>
		</p>
		<?php 
		if(isset($project['object'][0]->goals) && !empty($project['object'][0]->goals))
			echo '<p><span class="bold">Project goals : </span>'.$project['object'][0]->goals.'</p>';
		if(isset($project['object'][0]->problematics) && !empty($project['object'][0]->problematics))
			echo '<p><span class="bold">Problematics : </span>'.$project['object'][0]->problematics.'</p>';
		if(isset($project['object'][0]->solutions) && !empty($project['object'][0]->solutions))
			echo '<p><span class="bold">Solution : </span>'.$project['object'][0]->solutions.'</p>';

		if(isset($project['object'][0]->strengths) && !empty($project['object'][0]->strengths))
			echo '<p><span class="bold">Our strenghts : </span></br>'.$project['object'][0]->strengths.'</p>';
		if(isset($project['object'][0]->result) && !empty($project->result))
			echo '<p><span class="bold">Result of the challenge : </span>'.$project['object'][0]->result.'</p>';
		if( isset($project['join']['items']) && $project['join']['items']){ 
			foreach($project['join']['items'] as $item) { ?><div class="col2">
			<h2><?= $item->title ?></h2>
			<span><img src="<?= base_url('assets/img/'.$item->image) ?>" alt="<?= $item->title ?>"></span>
		</div><?php }} ?>
        
    </div>
</main>
<?php // var_dump($project['join']['items']) ?>

<?php // var_dump($project) ?>
