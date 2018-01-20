var txt
$(document).ready(function() {
	$('#fullpage .img').fullpage({
		navigation: true,
		onLeave: function(index, nextIndex, direction){
			var leavingSection = $(this);
			console.log(nextIndex)
			//after leaving section 2 
		}
	});
});