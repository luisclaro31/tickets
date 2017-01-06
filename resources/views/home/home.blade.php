    @if($now < $created_atf)
        <audio src="sound/Doorbell.mp3" autoplay></audio>
    @endif
    @foreach($results as $result)
        <div class="col-lg-6">
            <div id="1" class="panel panel-primary">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-6 col-sm-6"><h4 align="left">Turno <strong>{{ $result->Student->category->acronym.''.$result->student->id }}</strong></h4></div>
                        <div class="col-xs-6 col-sm-6"><h4 align="right">Modulo # <strong>{{ $result->User->module}}</strong></h4></div>
                    </div>
                </div>
                <div class="panel-body">
                    <h3 align="center"><strong>{{ strtoupper(ucwords(substr($result->student->full_name,0,15))) }}</strong></h3>
                </div>
            </div>
        </div>
    @endforeach
