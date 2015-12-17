@if($now < $created_atf)
    <audio src="sound/Doorbell.mp3" autoplay></audio>
@endif
@foreach($results as $result)
    @if($result->student->category_id == 1)
        <div class="col-lg-6">
            <div id="1" class="panel panel-danger">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-6 col-sm-6"><h4 align="left">Turno <strong>{{ $result->Student->category->acronym.''.$result->student->id }}</strong></h4></div>
                        <div class="col-xs-6 col-sm-6"><h4 align="right">Modulo # <strong>{{ $result->User->module}}</strong></h4></div>
                    </div>
                </div>
                <div class="panel-body">
                    <h3 align="center"><strong>{{$result->student->full_name}}</strong></h3>
                </div>
            </div>
        </div>
    @endif
    @if($result->student->category_id == 2)
        <div class="col-lg-6">
            <div id="1" class="panel panel-danger">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-6 col-sm-6"><h4 align="left">Turno <strong>{{ $result->Student->category->acronym.''.$result->student->id }}</strong></h4></div>
                        <div class="col-xs-6 col-sm-6"><h4 align="right">Modulo # <strong>{{ $result->User->module}}</strong></h4></div>
                    </div>
                </div>
                <div class="panel-body">
                    <h3 align="center"><strong>{{$result->student->full_name}}</strong></h3>
                </div>
            </div>
        </div>
    @endif
    @if($result->student->category_id == 3)
        <div class="col-lg-6">
            <div id="1" class="panel panel-danger">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-6 col-sm-6"><h4 align="left">Turno <strong>{{ $result->Student->category->acronym.''.$result->student->id }}</strong></h4></div>
                        <div class="col-xs-6 col-sm-6"><h4 align="right">Modulo # <strong>{{ $result->User->module}}</strong></h4></div>
                    </div>
                </div>
                <div class="panel-body">
                    <h3 align="center"><strong>{{$result->student->full_name}}</strong></h3>
                </div>
            </div>
        </div>
    @endif
    @if($result->student->category_id == 4)
        <div class="col-lg-6">
            <div id="1" class="panel panel-danger">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-6 col-sm-6"><h4 align="left">Turno <strong>{{ $result->Student->category->acronym.''.$result->student->id }}</strong></h4></div>
                        <div class="col-xs-6 col-sm-6"><h4 align="right">Modulo # <strong>{{ $result->User->module}}</strong></h4></div>
                    </div>
                </div>
                <div class="panel-body">
                    <h3 align="center"><strong>{{$result->student->full_name}}</strong></h3>
                </div>
            </div>
        </div>
    @endif
    @if($result->student->category_id == 5)
        <div class="col-lg-6">
            <div id="1" class="panel panel-danger">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-6 col-sm-6"><h4 align="left">Turno <strong>{{ $result->Student->category->acronym.''.$result->student->id }}</strong></h4></div>
                        <div class="col-xs-6 col-sm-6"><h4 align="right">Modulo # <strong>{{ $result->User->module}}</strong></h4></div>
                    </div>
                </div>
                <div class="panel-body">
                    <h3 align="center"><strong>{{$result->student->full_name}}</strong></h3>
                </div>
            </div>
        </div>
    @endif
    @if($result->student->category_id == 6)
        <div class="col-lg-6">
            <div id="1" class="panel panel-danger">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-6 col-sm-6"><h4 align="left">Turno <strong>{{ $result->Student->category->acronym.''.$result->student->id }}</strong></h4></div>
                        <div class="col-xs-6 col-sm-6"><h4 align="right">Modulo # <strong>{{ $result->User->module}}</strong></h4></div>
                    </div>
                </div>
                <div class="panel-body">
                    <h3 align="center"><strong>{{$result->student->full_name}}</strong></h3>
                </div>
            </div>
        </div>
    @endif
    @if($result->student->category_id == 7)
        <div class="col-lg-6">
            <div id="1" class="panel panel-danger">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-6 col-sm-6"><h4 align="left">Turno <strong>{{ $result->Student->category->acronym.''.$result->student->id }}</strong></h4></div>
                        <div class="col-xs-6 col-sm-6"><h4 align="right">Modulo # <strong>{{ $result->User->module}}</strong></h4></div>
                    </div>
                </div>
                <div class="panel-body">
                    <h3 align="center"><strong>{{$result->student->full_name}}</strong></h3>
                </div>
            </div>
        </div>
    @endif
    @if($result->student->category_id == 8)
        <div class="col-lg-6">
            <div id="1" class="panel panel-danger">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-6 col-sm-6"><h4 align="left">Turno <strong>{{ $result->Student->category->acronym.''.$result->student->id }}</strong></h4></div>
                        <div class="col-xs-6 col-sm-6"><h4 align="right">Modulo # <strong>{{ $result->User->module}}</strong></h4></div>
                    </div>
                </div>
                <div class="panel-body">
                    <h3 align="center"><strong>{{$result->student->full_name}}</strong></h3>
                </div>
            </div>
        </div>
    @endif
@endforeach
