$(function(){

	$("#studentTable").DataTable({
		'ajax' : getBaseUrl() + 'tables/datatables/getUsers',
		'scrollY': 300,
		"aoColumnDefs": [{
			'bSortable': true
		}]
	});

})

function getBaseUrl(){
	return window.location.origin + '/sis/';
}