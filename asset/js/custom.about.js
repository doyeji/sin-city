

$('div#directors').hide();

$('#story').click(function() {

	$('div#directors').addClass('hide');
	$('#synopsis').show();

});

$('#film-makers').click(function() {
	$('#directors').show();
	$('#synopsis').addClass('hide');

});
