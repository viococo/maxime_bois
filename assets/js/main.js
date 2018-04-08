var project_txt = $('.txtArea > div')
var titres = []
for (var i = 0; i < project_txt.length; i++){
	var txt
	if(i == 0)
	txt = 'Maxime Bois'
	else
	txt = $(project_txt[i]).find('h2').text()
	titres.push(txt)
}

project_txt.fadeOut(0)
$(project_txt[0]).fadeIn()




$('.burgerContainer').bind('click', function(){
	$('nav.mobile').toggleClass('open')
});

// gestion de la couleur du menu

	var blocksToSearch = $('.toAsk');
	var classToAdd = 'black';
	var changeBlock = $( ".notHeader" );

	var  darkBlocks = new Array(new Array(0,0));
	function updateMenuColor(){
		darkBlocks = updateDarkBlocks();
		var o = $(document).scrollTop() ;

		for (var i =0; i < darkBlocks.length; i++){
			if (o >= darkBlocks[i][0] && o <= darkBlocks[i][1] ) {
				blocksToSearch.addClass(classToAdd);
				return true;
			}
		}
		blocksToSearch.removeClass(classToAdd);
		return true;
	}
	function updateDarkBlocks(){
		var a = new Array();
		changeBlock.each(function( index ) {
			var b = $(this).position().top;
			a.push(new Array(b, b+$(this).height()));
		});
		return a;
	}
	$(function() {
		var darkBlocks = updateDarkBlocks();
		updateMenuColor();

		$(window).resize(function() {updateMenuColor();});
		$(window).scroll(function (){updateMenuColor();});
	});
	$(window).load(function() {updateMenuColor();});

	$(document).ready(function() {
		if($('#fullpage .img').fullpage){
			$('#fullpage .img').fullpage({
				navigation: true,
				navigationTooltips: titres,
				onLeave: function(index, nextIndex, direction){
					var leavingSection = $(this);
					var id = nextIndex - 1
					var nextSection = $(project_txt[id])
					
					project_txt.fadeOut(300)
		
					setTimeout(function(){
						if(id > 0)
							$('.txtArea').addClass('project')
						else
							$('.txtArea').removeClass('project')
						
						nextSection.fadeIn()
					}, 300);			
				}
			});
		}
	
	});