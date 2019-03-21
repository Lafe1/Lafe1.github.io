
function check() {

    if ($('#name').val() != '' && $('#phone').val() != '' && $('#franchise').val() != '')

        $('.button').removeAttr('disabled');

    else

        $('.button').attr('disabled','disable');
};
function message() {
	console.log('123');
};