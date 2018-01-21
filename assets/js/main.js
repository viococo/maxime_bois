var project_txt = $('[data-project]')
project_txt.fadeOut(0)

$(document).ready(function() {
	$('#fullpage .img').fullpage({
		navigation: true,
		onLeave: function(index, nextIndex, direction){
			var leavingSection = $(this);
			var id = nextIndex - 1
			var nextSection = $(project_txt[id])
			project_txt.fadeOut(300)
			setTimeout(function(){
				console.log(id)
				if(id > 0)
					$('.txtArea').addClass('project')
				else
					$('.txtArea').removeClass('project')
				
				nextSection.fadeIn()
			}, 300);			
		}
	});
});