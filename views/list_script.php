<script type="text/javascript">
	$(document).ready(function() {
    	$('#id_detail_table').DataTable( {
    	    "processing": true,
        	"serverSide": true,
        	"ajax": "/list_id_details.php"
    	});
    	$('tbody').on('click', 'tr', function(){
			window.location.href = '/view.php?id=' + this.firstChild.innerText;
		});
	});
</script>