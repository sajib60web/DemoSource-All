@extends('master')
@section('title')
Home
@endsection
@section('homeContant')
@include('students.addStudent')
<div class="container">
    <div class="row">
    	<div class="panel panel-default">
	  		<div class="panel-heading">
			<button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal" id="addData"> + Student</button>
			<button class="btn btn-info pull-right btn-sm" id="readData">Load Data By Ajax</button>
	  		</div>
	        <table class="table table-bordered" id="readData">
	        	<thead>
	        		<tr>
	        			<th>Id</th>
	        			<th>First Name</th>
	        			<th>Last Name</th>
	        			<th>Full Name</th>
	        			<th>Sex</th>
	        			<th>Action</th>
	        		</tr>
	        	</thead>
	        	<tbody id="students">
	        	</tbody>
	        </table>
	    </div>
    </div>
</div>
<script type="text/javascript">
    window.onload = function () {
        $(document).ready(function(){
        	// CSRF-TOKEN
        	$.ajaxSetup({
	        	headers: {
	            	'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	            }
	        });

        	// read Data
            $('#readData').on('click', function () {
            	$.get("{{URL::to('/read/data')}}", function (data) {
        			$("#students").empty().html(data);
        			// console.log(data);
     //                $.each(data, function(i,value) {
     //                	var tr = $("<tr/>");
     //                	tr.append($("<td/>",{
     //                		text:value.id
     //                	})).append($("<td/>",{
     //                		text:value.country_code
     //                	})).append($("<td/>",{
     //                		text:value.country_name
     //                	})).append($("<td/>",{
     //                		html:"<a href='#'>View</a> || <a href='#'>Edit</a> || <a href='#'>Delete</a>"
     //                	}))
     //                	$("#students").append(tr);
					// });
                });
            });

            // Insert Data
            $('#fromInsert').on('submit', function (e) {
                e.preventDefault();
                var data = $(this).serialize();
                var url  = $(this).attr('action');
                var post  = $(this).attr('method');
                
                $.ajax({
                    type : post,
                    url : url,
                    data : data,
                    dataTy : 'json',
                    success:function(data) {
                        // console.log(data);
                    }
                });
            });

            // Delete Data
            $(document).on('click', '#del', function () {
                var id  = $(this).data('id');
                $.post("{{'delete/student'}}",{id:id}, function(data) {
                    console.log(data);
                });
            });









        });
        
    };
</script>
@endsection
	