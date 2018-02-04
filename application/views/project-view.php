<?php $p = $project['object'][0] ?>

<header class="bgi" style="background-image: url(<?= base_url('assets/img/'.$p->image_header) ?>)">
</header>
<main class="project">
    <div class="txtHeader">
		<h1><?= $p->name ?></h1>
		<p>
			<i class="si case"></i><span> <?= $p->speciality ?> </span>
			<i class="si book"></i><span> <?= $p->context ?> </span>
			<i class="si people"></i><span> <?php echo ($p->solo) ? 'solo' : 'Group' ?> </span>
			<i class="si calendar"></i><span> <?= $p->year ?> </span>
		</p>
		<?php 
		if(isset($p->goals) && !empty($p->goals))
			echo '<p><span class="bold">Project goals : </span>'.$p->goals.'</p>';
		if(isset($p->problematics) && !empty($p->problematics))
			echo '<p><span class="bold">Problematics : </span>'.$p->problematics.'</p>';
		if(isset($p->solutions) && !empty($p->solutions))
			echo '<p><span class="bold">Solution : </span>'.$p->solutions.'</p>';

		if(isset($p->strengths) && !empty($p->strengths))
			echo '<p><span class="bold">Our strenghts : </span></br>'.$p->strengths.'</p>';
		if(isset($p->result) && !empty($project->result))
			echo '<p><span class="bold">Result of the challenge : </span>'.$p->result.'</p>';
		if( isset($project['join']['items']) && $project['join']['items']){ 
			foreach($project['join']['items'] as $item) { ?><div class="col2">
			<h2><?= $item->title ?></h2>
			<span><img src="<?= base_url('assets/img/'.$item->image) ?>" alt="<?= $item->title ?>"></span>
		</div><?php }} ?>
        
    </div>
</main>
<?php // var_dump($project['join']['items']) ?>

<?php // var_dump($project) ?>
