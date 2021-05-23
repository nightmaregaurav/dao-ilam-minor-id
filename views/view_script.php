<script type="text/javascript">
	const print_doc = () => {
		$('#print_frame').get(0).contentWindow.print();
	};
	const delete_doc = () =>{
		let flag = confirm("Are Sure you want to delete? This action can not be undone and not recoverable.");
		if(flag == true){
			window.location.href='/view.php?id=<?php echo $id_details['id'] ?>&action=delete';
		}
	};
</script>