var project_txt = $('.txtArea > div')
project_txt.fadeOut(0)
$(project_txt[0]).fadeIn()

$(document).ready(function() {
	$('#fullpage .img').fullpage({
		navigation: true,
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