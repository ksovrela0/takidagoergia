	$( "div.table" ).on('click','#edit', function() {
		var person_id = $( this ).attr("data-id");
		$('#edit-result').html(' ');
		$('#firstname2').val(' ');
		$('#surname2').val(' ');
		$('#age2').val(' ');
		$('#person_id').val(' ');
		$.ajax({
		  url: 'action.php',
		  type: 'post',
		  data: 'type=get&person_id='+person_id,
		  dataType: 'json',
		  beforeSend: function() {
			$('#sendajax').button('loading');
		  },
		  complete: function() {
			$('#sendajax').button('reset');
		  },
		  success: function(d) {
			//var resp = JSON.parse(json.responseText);
			if(d.success == 0)
			{
				$('#edit-result').html('<div class="form-error">'+d.comment+'</div>');
			}
			if(d.success == 1)
			{	
				$('#firstname2').val(d.name);
				$('#surname2').val(d.surname);
				$('#age2').val(d.age);
				$('#person_id').val(person_id);
				if(d.sex == 1)
				{
					$('#sex2').html('<option value="1">მამრობითი</option><option value="2">მდედრობითი</option>');
				}
				if(d.sex == 2)
				{
					$('#sex2').html('<option value="2">მდედრობითი</option><option value="1">მამრობითი</option>');
				}
			}
		  },
		});
	});
	
	$( "#edit2" ).click(function() {
			var name = $('#firstname2').val();
			var surname = $('#surname2').val();
			var age = $('#age2').val();
			var sex = $('#sex2').val();
			var person_id = $('#person_id').val();
			
	  $.ajax({
		  url: 'action.php',
		  type: 'post',
		  data: 'type=edit&name='+name+'&surname='+surname+'&age='+age+'&sex='+sex+'&person_id='+person_id,
		  dataType: 'json',
		  beforeSend: function() {
			$('#sendajax').button('loading');
		  },
		  complete: function() {
			$('#sendajax').button('reset');
		  },
		  success: function(d) {
			//var resp = JSON.parse(json.responseText);
			if(d.success == 0)
			{
				$('#edit-result').html('<div class="form-error">'+d.comment+'</div>');
			}
			if(d.success == 1)
			{
				$('#edit-result').html('<div class="form-success">'+d.comment+'</div>');
				 $.ajax({
					  url: 'update.php',
					  type: 'post',
					  data: 'type=edit',
					  success: function(d) {
						$('#person-listing').html(d);
					  },
					});
				
			}
		  },
		});
	});
	
	$( "div.table" ).on('click','a', function() {
		//alert('test123');
		$('#deleteID').html($( this ).attr("data-id"));
		$('#ex2 a').attr("data-del-id",$( this ).attr("data-id"))
		$('#del-result').html(' ');
	});
	
	$( ".deleteYes" ).on('click', function() {
		var item_del_id = $( this ).attr("data-del-id");
		$.ajax({
		  url: 'action.php',
		  type: 'post',
		  data: 'type=del&del_id='+item_del_id,
		  dataType: 'json',
		  beforeSend: function() {
			$('#sendajax').button('loading');
		  },
		  complete: function() {
			$('#sendajax').button('reset');
		  },
		  success: function(d) {
			//var resp = JSON.parse(json.responseText);
			if(d.success == 0)
			{
				$('#del-result').html('<div class="form-error">'+d.comment+'</div>');
			}
			if(d.success == 1)
			{	
				$('#del-result').html('<div class="form-success">'+d.comment+'</div>');
				$.ajax({
					  url: 'update.php',
					  type: 'post',
					  data: 'type=del',
					  success: function(d) {
						$('#person-listing').html(d);
					  },
					});
			}
		  },
		});
		
		
	});
	
	$( "#add" ).click(function() {
			var name = $('#firstname').val();
			var surname = $('#surname').val();
			var age = $('#age').val();
			var sex = $('#sex').val();
	  $.ajax({
		  url: 'action.php',
		  type: 'post',
		  data: 'type=add&name='+name+'&surname='+surname+'&age='+age+'&sex='+sex,
		  dataType: 'json',
		  beforeSend: function() {
			$('#sendajax').button('loading');
		  },
		  complete: function() {
			$('#sendajax').button('reset');
		  },
		  success: function(d) {
			//var resp = JSON.parse(json.responseText);
			if(d.success == 0)
			{
				$('#add-result').html('<div class="form-error">'+d.comment+'</div>');
			}
			if(d.success == 1)
			{
				$('#add-result').html('<div class="form-success">'+d.comment+'</div>');
				 $.ajax({
					  url: 'update.php',
					  type: 'post',
					  data: 'type=add',
					  success: function(d) {
						$('#person-listing').html(d);
					  },
					});
				
			}
		  },
		});
	});
	
	