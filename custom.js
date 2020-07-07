$(document).ready(function(){

	 $('#editStudentform').hide();
	getStudentlist();

	function getStudentlist(){
		$.get('studentlist.json',function(response){
			if(response){
				console.log(typeof(response));
				//string
				var studentObjArray =JSON.parse(response);

				//obj
				// var studentObjArray = response;

				var studentObjArray = JSON.parse(response);
				var html=''; var j=1;
				$.each(studentObjArray,function(i,v){
					html+=`<tr>
								<td>${j++}</td>
								<td>${v.name}</td>
								<td>${v.gender}</td>
								<td>${v.email}</td>
								<td>
									<button class="btn btn-outline-primary"  >
										<i class="fas fa-info-circle"></i>
									</button>
									<button class="btn btn-outline-warning" id="edit_student" >
										<i class="fas fa-edit"></i>
									</button>
									<button class="btn btn-outline-danger delete" data-id="${i}">
										<i class="fas fa-trash-alt"></i>
									</button>
								</td>
							</tr>`;
					})
				$('#table_data').html(html);
			}
		})
	}

	$('#table_data').on('click','.delete',function(){
		var id= $(this).data('id');
		console.log(id);
	});

        $('#table_data').on('click','#edit_student',function(){
        	
			$('#addStu').hide();
			$('#editStudentform').show();
        
      });
    

});