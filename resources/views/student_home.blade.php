@extends('layouts.student_sidebar')
@extends('layouts.app')
@section('content2')
<script>
    var element = document.getElementById("home");
    element.classList.add("show");

</script>
<body>
    <div class="container-fluid">
        <!-- <div style="margin-top:30px;" class="row">
    
        <input style="width:75%;margin: 0 auto;" type="text" class="inputDesign text-center" name="Search" placeholder="Search"><button class="btn btn-outline"><i class="fa fa-search"></i></button>
    </div>-->
        <div style="margin-top:30px;margin-left:75px;" class="row">
            <div class="col-12 col-md-auto">
                <input type="text" class="inputDesign" name="Search" placeholder="Search"><button style="margin-left:5px;" class="btn btn-outline"><i class="fa fa-search"></i></button>
            </div>
            
        </div>

        <div style="margin-top:30px;margin-left:px;max-width:110vh;" class="row text-center">
            <div class="turningButtonContainer">
                <div class="turningButtonContainerInner">
                    <div class="turningButton"><i style="font-size:35px;margin-top:55px;" class="icons far fa-dot-circle"></i><span>SE</span></div>
                    <div class="turnedButton">
                        <p>
                            <p class="text-center">Course name</p>
                            <p class="text-center">Software engeering</p><br>
                            <p class="text-center">Instructors</p>
                            <p class="text-center">Doctor Essam, TA Nada</p>
                        </p>
                        
                        <button style="margin-left:40%;padding:5px;width:40px;" class="btn btn-light norms" data-toggle="tooltip" title="view course contet"><i class="fas fa-eye"></i></button>
                    </div>
                </div>
            </div>
            <div class="turningButtonContainer">
                <div class="turningButtonContainerInner">
                    <div class="turningButton"><i style="font-size:35px;margin-top:55px;" class="icons far fa-dot-circle"></i><span>HCI</span></div>
                    <div class="turnedButton">
                        <p>
                            <p class="text-center">Course name</p>
                            <p class="text-center">Human computer interaction</p><br>
                            <p class="text-center">Instructors</p>
                            <p class="text-center">Doctor Yomna, TA Nada</p>
                        </p>
                        <button style="margin-left:50%;padding:5px;width:40px" class="btn btn-light norms" data-toggle="tooltip" title="view course contet"><i class="fas fa-eye"></i></button>
                    </div>
                </div>
            </div>


        </div>
    </div>
</body>
@endsection
