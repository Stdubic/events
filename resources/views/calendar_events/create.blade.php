@extends('layout')

@section('content')
    <div class="page-header">
        <h1>Zakaži novog pacijenta </h1>
    </div>


    <div class="row">
        <div class="col-md-12">

            <form action="{{ route('calendar_events.store') }}" method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="form-group">
                     <label for="title">Pacijent</label>
                     <input type="text" name="title" class="form-control" value="" required/>
                </div>
                <div class="form-group">

                                     <label for="dr">Lekar</label>
                                     <select name="dr" class="form-control">
                                     @foreach($doctors as $doctor)
                                       <option value='{{$doctor->id}}'>{{$doctor->name}}</option>
                                    @endforeach
                                     </select>

                 </div>
                    <div class="form-group">
                     <label for="start">Pocetak Pregleda</label>
                     <input type="text" name="start" id="time" class="form-control" value="" required/>
                </div>
                    <div class="form-group">
                     <label for="end">Kraj Pregleda</label>
                     <input type="text" name="end" id="time1" class="form-control" value="" required/>
                </div>
                     <div class="form-group">
                     <label for="background_color">Ordinacija</label>
                     <select name="background_color" class="form-control">
                       <option value='Blue'>Ordinacija Blue</option>
                       <option value='Red'>Ordinacija Red</option>
                       <option value='Green'>Ordinacija Green</option>
                     </select>
                </div>

            <a class="btn btn-default" href="{{ route('calendar_events.index') }}">Nazad</a>
            <button class="btn btn-primary" type="submit" >Zakaži</button>
            </form>
        </div>
    </div>




<script>
    $('#time').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            sideBySide: true,
            stepping: 10
    });
    $('#time1').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            sideBySide: true,
            stepping: 10
    });
</script>
@endsection