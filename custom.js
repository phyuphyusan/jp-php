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
					<button class="btn btn-outline-warning editStu" id="edit_student"  data-id="${i}"
					>
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
	// Delete
	$('#table_data').on('click','.delete',function(){
		var id= $(this).data('id');
		console.log(id);
		var ans = confirm('Are you sure you want to delete')
		if(ans){
			$.post('deletestudent.php',{eid:id},function(data){
				getStudentlist();

			})

		}
	});

	// //Edit
	// $('#table_data').on('click','.editStu',function(){
	// 	var id= $(this).data('id');
	// 	console.log(id);
	// });

	$('#table_data').on('click','.editStu',function(){
		var id= $(this).data('id');

		$.get('studentlist.json',function(response){
			var studentObjArray=JSON.parse(response)

			var name=studentObjArray[id].name;
			var email=studentObjArray[id].email;
			var address=studentObjArray[id].address;
			var gender=studentObjArray[id].gender;
			var profile=studentObjArray[id].profile;

			console.log("Name ="+name);
			console.log("Email ="+email);
			console.log("Address ="+address);
			console.log("Gender ="+gender);
			console.log("Profile ="+profile);

			$('#edit_name').val(name);
			$('#edit_email').val(email);
			$('#edit_address').val(address);
			if(gender=="Male"){
				$('#edit_male').attr('checked','checked');
			}else
			{
				$('#edit_female').attr('checked','checked');
			}

			//image
			$('#oldphoto').attr('src',profile);

			$('#edit_id').val(id);
			$('#edit_oldprofile').val(profile);

		});
	});


	$('#table_data').on('click','#edit_student',function(){
		$('#addStu').hide();
		$('#editStudentform').show();
	});	
});