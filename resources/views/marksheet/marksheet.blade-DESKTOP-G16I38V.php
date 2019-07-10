@extends('master')
@section('title')
    Marksheet
@endsection
@section('homeContant')
<script type="text/javascript">
    function subjectNumber1() {
        // Define those variables!
        var totalPoints = parseFloat(document.getElementById('subNumber1').value);
        
        // Select letter grade!
        if(totalPoints >= 80){ 
            document.getElementById('subject1Letter').value = "A+";
            document.getElementById('subject1Point').value = "5";
        }else if(79 >= totalPoints && totalPoints >= 70){
            document.getElementById('subject1Letter').value = "A";
            document.getElementById('subject1Point').value = "4";
        }else if(69 >= totalPoints && totalPoints >= 60){
            document.getElementById('subject1Letter').value = "A-";
            document.getElementById('subject1Point').value = "3.5";
        }else if(59 >= totalPoints && totalPoints >= 50){
            document.getElementById('subject1Letter').value = "B";
            document.getElementById('subject1Point').value = "3";
        }else if(49 >= totalPoints && totalPoints >= 40){
            document.getElementById('subject1Letter').value = "C";
            document.getElementById('subject1Point').value = "2";
        }else if(39 >= totalPoints && totalPoints >= 33){
            document.getElementById('subject1Letter').value = "D";
            document.getElementById('subject1Point').value = "1";
        }else{
            document.getElementById('subject1Letter').value = "F";
            document.getElementById('subject1Point').value = "0";
        }
    }

    function subjectNumber2() {
        // Define those variables!
        var totalPoints = parseFloat(document.getElementById('subNumber2').value);
        
        // Select letter grade!
        if(totalPoints >= 80){
            document.getElementById('subject2Letter').value = "A+";
            document.getElementById('subject2Point').value = "5";
        }else if(79 >= totalPoints && totalPoints >= 70){
            document.getElementById('subject2Letter').value = "A";
            document.getElementById('subject2Point').value = "4";
        }else if(69 >= totalPoints && totalPoints >= 60){
            document.getElementById('subject2Letter').value = "A-";
            document.getElementById('subject2Point').value = "3.5";
        }else if(59 >= totalPoints && totalPoints >= 50){
            document.getElementById('subject2Letter').value = "B";
            document.getElementById('subject2Point').value = "3";
        }else if(49 >= totalPoints && totalPoints >= 40){
            document.getElementById('subject2Letter').value = "C";
            document.getElementById('subject2Point').value = "2";
        }else if(39 >= totalPoints && totalPoints >= 33){
            document.getElementById('subject2Letter').value = "D";
            document.getElementById('subject2Point').value = "1";
        }else{
            document.getElementById('subject2Letter').value = "F";
            document.getElementById('subject2Point').value = "0";
        }
    }
</script>
<div class="container">
    <div class="row">
        <form action="{{ url('/create_marksheet') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>First Name</label>
                        <input  class="form-control input-lg" type='text' name="first_name"/>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Last Name</label>
                        <input  class="form-control input-lg" type='text' name="last_name"/>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Sex</label>
                        <select class="form-control" name="sex">
                            <option>Select Sex</option>
                            <option value="1">Mail</option>
                            <option value="2">Fremail</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <label>Subject Name</label>
                        <input  class="form-control input-lg" type='text' name="subject_name[]" multiple="multiple">
                    </div>
                </div>
                <div class="col-md-3">
                    <label>Subject Mark</label>
                    <div class="form-group">
                        <input  class="form-control input-lg" type='number' name="subject_mark" id='subNumber1' onkeyup='subjectNumber1();'/>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label>Subject Letter</label>
                        <input  class="form-control input-lg" type='text' name="subject_letter" id='subject1Letter'/>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label>Subject Point</label>
                        <input  class="form-control input-lg" type='text' name="subject_point" id='subject1Point'/>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <input  class="form-control input-lg" type='text' name="subject_name"/>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <input  class="form-control input-lg" type='number' name="subject_mark" id='subNumber2' onkeyup='subjectNumber2();'/>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <input  class="form-control input-lg" type='text' name="subject_letter" id='subject2Letter'/>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <input  class="form-control input-lg" type='text' name="subject_point" id='subject2Point'/>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-6 col-md-6">
                    <input type="submit" value="Add Marksheet" class="btn btn-success btn-block btn-lg">
                </div>
            </div>
        </form>
    </div>
</div>

@endsection
	