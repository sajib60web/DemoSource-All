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
        <form action="{{ url('/create_marksheet') }}" method="post">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <input  class="form-control input-lg" type='text' name="name"/>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <input  class="form-control input-lg" type='text' name="roll"/>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <input  class="form-control input-lg" type='text' name="subject1"/>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <input  class="form-control input-lg" type='text' name="subNumber1" id='subNumber1' value='0' onkeyup='subjectNumber1();'/>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <input  class="form-control input-lg" type='text' name="subject1Letter" id='subject1Letter' value='Letter' />
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <input  class="form-control input-lg" type='text' name="subject1Point" id='subject1Point' value='Point' />
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <input  class="form-control input-lg" type='text' name="subject2"/>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <input  class="form-control input-lg" type='text' name="subNumber2" id='subNumber2' value='0' onkeyup='subjectNumber2();'/>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <input  class="form-control input-lg" type='text' name="subject2Letter" id='subject2Letter' value='Letter' />
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <input  class="form-control input-lg" type='text' name="subject2Point" id='subject2Point' value='Point' />
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <input  class="form-control input-lg" type='text' name="fourSubject"/>
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
	