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

$(document).ready(function() {
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

});