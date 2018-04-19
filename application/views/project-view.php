<?php 
	$p = $project[0]['object'];
?>

<header class="bgi" style="background-image: url(<?= base_url('assets/img/'.$p->image_header) ?>)">
</header>
<main class="project notHeader">
    <section class="txtHeader">
		<h1><?= $p->name ?></h1>
		<p>
		<span><i class="si case"></i> <?= $p->speciality ?> </span>
		<span><i class="si book"></i> <?= $p->context ?> </span>
		<span><i class="si people"></i> <?php echo ($p->solo) ? 'solo' : 'Group' ?> </span>
		<span><i class="si calendar"></i> <?= $p->year ?> </span>
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
		if( isset($project[0]['join']['items']) && $project[0]['join']['items']){ 
			foreach($project[0]['join']['items'] as $item) { ?><div class="col2">
			<h2><?= $item['object']->title ?></h2>
			<span><img src="<?= base_url('assets/img/'.$item['object']->image) ?>" alt="<?= $item['object']->title ?>"></span>
		</div><?php }} ?>
        
	</section>
	<?php 
	if ( isset($project[0]['join']) && !empty($project[0]['join']) )
		$j = $project[0]['join'] ;
	
	if ( isset($j['sections']) && !empty($j['sections']) ){
		
		foreach( $j['sections'] as $s ){ ?>
			<section>
				<h2><?= $s['object']->name ?></h2>
				<div <?php echo ($s['object']->format == 'mobile') ? 'class="formatmobile"' : '' ?>>
				<?php  $bool = true;
					foreach ($s['join']['content'] as $content ) {
						
						if($s['object']->format !== 'mobile' && !$bool) {
							echo '</div><div>';
						} else{
							$bool = false;
						}
						?>
						<span class="wrapContent">
							<?php
							foreach($content['join']['background'] as $bg){
								$obj = $bg['object'];
								$url = base_url('assets/img/'.$obj->image);
								$style = $obj->cote.':'.$obj->positionHorizontale.';'.$obj->hauteur.':'.$obj->positionVerticale;
								echo "<span class='bgProject' style='$style'><img src='$url'></span>";
							}
							?>
							<img class="content" src="<?= base_url('assets/img/'.$content['object']->file) ?>" alt="">
						</span>
				<?php } ?>
				</div>
			</section>
		<?php }
	} ?>
	<?php
	$tab = [$prev, $next];
	foreach ($tab as $t) { ?><div class="col2 nav">
		<div class="bgi" style="background-image:url(<?= base_url('assets/img/'.$t->image) ?>)"></div>
		<p class="middle">
			<?= $t->name ?>
		</p><span class="vmiddle"></span>
		<a href="<?= base_url('Welcome/project/'.$t->id) ?>" class="block"></a>
	</div><?php } ?>
</main>
<?php  
echo '<pre>';
//var_dump() ;
echo '</pre>';
?>

<?php // var_dump($project) ?>
