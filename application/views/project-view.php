

<?php 

$p = $project[0]['object'];
?>

<header class="bgi" style="background-image: url(<?= base_url('assets/img/'.$p->image_header) ?>)">
</header>
<main class="project notHeader" style="background-image: url(<?= base_url('assets/img/'.$p->background) ?>)">
<section class="txtHeader">
	<h1><?= $p->name ?></h1>
	<p>
	<span><i class="si case"></i> <?= $p->speciality ?> </span>
	<span><i class="si book"></i> <?= $p->context ?> </span>
	<span><i class="si people"></i> <?php echo ($p->solo) ? 'solo' : 'Group' ?> </span>
	<span><i class="si calendar"></i> <?= $p->year ?> </span>
	</p>
	<?php 
	if(isset($p->goals) && !empty($p->goals)) echo '<p><span class="bold">Project goals : </span>'.$p->goals.'</p>';
	if(isset($p->problematics) && !empty($p->problematics)) echo '<p><span class="bold">Problematics : </span>'.$p->problematics.'</p>';
	if(isset($p->solutions) && !empty($p->solutions)) echo '<p><span class="bold">Solution : </span>'.$p->solutions.'</p>';
	if(isset($p->strengths) && !empty($p->strengths)) echo '<p><span class="bold">Our strenghts : </span></br>'.$p->strengths.'</p>';
	if(isset($p->result) && !empty($project->result)) echo '<p><span class="bold">Result of the challenge : </span>'.$p->result.'</p>';
	if( isset($project[0]['join']['items']) && $project[0]['join']['items']){ 
		foreach($project[0]['join']['items'] as $item) { ?><div class="col2">
		<h2><?= $item['object']->title ?></h2>
		<span>
			<?= pictureOrMovie($item['object']->image)['contenu'] ?>
			<a href="#">
			<i class="fa fa-long-arrow-right" aria-hidden="true"></i>
				
			</a>
		</span>
	</div><?php }} ?>
	
</section>
<?php 
if ( isset($project[0]['join']) && !empty($project[0]['join']) ) $j = $project[0]['join'];

if ( isset($j['sections']) && !empty($j['sections']) ){
	
	foreach( $j['sections'] as $s ){ ?>
		<section>
			<h2><?= $s['object']->name ?></h2>
			<?php foreach ( $s['join']['content'] as $key => $content ) { 
				
				foreach($content['join']['background'] as $bg){
					$obj = $bg['object'];
					if ($obj->container === 'ext'){
						$style = $obj->cote.':'.$obj->positionHorizontale.';'.$obj->hauteur.':'.$obj->positionVerticale;
						echo "<span class='bgProject' style='$style'>".pictureOrMovie($obj->image)['contenu']."</span>";
					}
				}
				$format = $s['object']->format ;
				if ($format !== 'mobile' || ( $format === 'mobile' && $key === 0) ) {
				?> 
					<div <?= ( $format == 'mobile') ? 'class="formatmobile"' : '' ?>>
				<?php }  
				$p =  pictureOrMovie($content['object']->file, 'content') ?>
				<span class="wrapContent <?= $p['type'] === 'video' ? 'youtube' : '' ?>">
					<?php
					foreach($content['join']['background'] as $bg){
						$obj = $bg['object'];
						if ($obj->container === 'int'){
							$style = $obj->cote.':'.$obj->positionHorizontale.';'.$obj->hauteur.':'.$obj->positionVerticale;
							echo "<span class='bgProject' style='$style'>".pictureOrMovie($obj->image)['contenu']."</span>";
						}
					} 
					echo $p['contenu'] ; ?>
				</span>
				<?php if ($format !== 'mobile' || ( $format === 'mobile' && $key === ( count( $s['join']['content'] ) - 1 ) ) ) { ?>
					</div>
				<?php }
			} ?>
		</section>
	<?php }
} 
$tab = [$prev, $next];
foreach ($tab as $t) { ?><div class="col2 nav">
	<div class="bgi" style="background-image:url(<?= base_url('assets/img/'.$t->image) ?>)"></div>
	<p class="middle">
		<?= $t->name ?>
	</p><span class="vmiddle"></span>
	<a href="<?= base_url('/project/'.$t->id) ?>" class="block"></a>
</div><?php } ?>
</main>
<?php  
echo '<pre>';
//var_dump() ;
echo '</pre>';
?>

<?php // var_dump($project) ?>
