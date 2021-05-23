<script type="text/javascript">
	const birth_district_changed = (select) => {
	    let district_id = select.value;
	    
	    district_id = parseInt(district_id);
	    if (isNaN(district_id)){
	        let birth_muni = $("#birth_muni")[0];
	        birth_muni.innerHTML = '';
	        return false;
	    }

	    $.ajax({
	        url: "/get_local_levels.php",
	        timeout: 10000,
	        type: 'POST',
	        data: {
	            'district_id': district_id,
	        },
	        beforeSend: function(_){
	            showLoader();
	        },
	        success: function(result, status, _){
	            let birth_muni = $("#birth_muni")[0];
	            let html = '';
	            let i=1;
	            birth_muni.innerHTML = '';
	            for(; i<result.length; i++){
	                html += '<option value="' + result[i].id + '">' + result[i].english + ' | ' + result[i].nepali + '</option>';
	            }
	            birth_muni.innerHTML += html;
	        },
	        error: function(_, status, error){
	            alert('Error occurred. Error status: ' + status + "; Error: " + error);
	        },
	        complete: function(_, __){
	            hideLoader();
	        },
	    });
	};

	const permanent_district_changed = (select) => {
	    let district_id = select.value;
	    
	    district_id = parseInt(district_id);
	    if (isNaN(district_id)){
	        let muni = $("#muni")[0];
	        muni.innerHTML = '';
	        return false;
	    }

	    $.ajax({
	        url: "/get_local_levels.php",
	        timeout: 10000,
	        type: 'POST',
	        data: {
	            'district_id': district_id,
	        },
	        beforeSend: function(_){
	            showLoader();
	        },
	        success: function(result, status, _){
	            let muni = $("#muni")[0];
	            let html = '';
	            let i=1;
	            muni.innerHTML = '';
	            for(; i<result.length; i++){
	                html += '<option value="' + result[i].id + '">' + result[i].english + ' | ' + result[i].nepali + '</option>';
	            }
	            muni.innerHTML += html;
	        },
	        error: function(_, status, error){
	            alert('Error occurred. Error status: ' + status + "; Error: " + error);
	        },
	        complete: function(_, __){
	            hideLoader();
	        },
	    });
	};

	const same_as_birth_changed = (checkbox) =>{
		if(checkbox.checked){
			$('#place_en')[0].value = $('#birth_place_en')[0].value;
			$('#place_ne')[0].value = $('#birth_place_ne')[0].value;
			$('#district')[0].value = $('#birth_district')[0].value;
			$('#muni')[0].innerHTML = $('#birth_muni')[0].innerHTML;
			$('#muni')[0].value = $('#birth_muni')[0].value;
			$('#ward')[0].value = $('#birth_ward')[0].value;
		}
	};
</script>
