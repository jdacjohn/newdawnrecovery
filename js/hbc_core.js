// JavaScript - horizontal bar chart plug-in

$(function() {
	
	$('#ed_chart li').each(function() {
	
		var answers = $(this).attr('title');
		answers = answers > 22 ? 22 : answers;
		$(this).children('.count').html(answers);
		var ww = $(this).width() - 80;
		var len = (parseInt(ww, 10) * parseInt(answers, 10))/22;
		$(this).children('.bar').animate({ 'width' : len + 'px'}, 1500);
		
	});
	
	$('#ad_chart li').each(function() {
	
		var answers = $(this).attr('title');
		answers = answers > 22 ? 22 : answers;
		$(this).children('.count').html(answers);
		var ww = $(this).width() - 80;
		var len = (parseInt(ww, 10) * parseInt(answers, 10))/9;
		$(this).children('.bar').animate({ 'width' : len + 'px'}, 1500);
		
	});

});