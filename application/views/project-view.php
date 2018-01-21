<header class="bgi" style="background-image: url(<?= base_url('assets/img/'.$project->image_header) ?>)">
	<div class="txtHeader">
		<h1><?= $project->name ?></h1>
		<p>
			<i class="fa"></i> <?= $project->speciality ?> 
			<i class="fa"></i> <?= $project->context ?> 
			<i class="fa"></i> <?php echo ($project->solo) ? 'solo' : 'Group' ?> 
			<i class="fa"></i> <?= $project->year ?> 
		</p>
	</div>
</header>
<main class="project">
    <div class="txtHeader">
        
			<?php 
			if(isset($project->goals) && !empty($project->goals))
				echo '<p><span class="bold">Project goals : </span>'.$project->goals.'</p>';
			if(isset($project->problematics) && !empty($project->problematics))
				echo '<p><span class="bold">Problematics : </span>'.$project->problematics.'</p>';
			if(isset($project->solutions) && !empty($project->solutions))
				echo '<p><span class="bold">Solution : </span>'.$project->solutions.'</p>';

			if(isset($project->strengths) && !empty($project->strengths))
				echo '<p><span class="bold">Our strenghts : </span></br>'.$project->strengths.'</p>';
			if(isset($project->result) && !empty($project->result))
				echo '<p><span class="bold">Result of the challenge : </span>'.$project->result.'</p>';
			?>
        
    </div>
</main>

<?php // var_dump($project) ?>
