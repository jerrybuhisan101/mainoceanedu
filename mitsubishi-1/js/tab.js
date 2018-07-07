$(document).ready(function(){
	$('.noidung:not(:first)').hide();
	$('.control li a').click(function(){
		$('.control li a').removeClass('active');
		$(this).addClass('active');
		$('.noidung').hide();

		var activeTab=$(this).attr('href');
		//activeTab = #news //activetab =#random
		$(activeTab).fadeIn();
		return false;
	});
})