<div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
    <div class="row">
        <div class="col">
            {!! Form::label('title', 'Назва', ['class' => 'col-md-8 control-label']) !!}


            {!! Form::text('title', null, array('placeholder'=>'Введіть назву ТМЦ/Інструмента', 'class' => 'form-control', 'required', 'autofocus')) !!}

            <span class="help-block">
            <strong>{{ $errors->first('title') }}</strong>
        </span>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            {!! Form::label('title', 'Бренд', ['class' => 'col-md-4 control-label']) !!}


            {!! Form::text('brand', null, array('placeholder'=>'Bocsh,Mokinf, Дніпро-М', 'class' => 'form-control', 'required', 'autofocus')) !!}

            <span class="help-block">
                <strong>{{ $errors->first('name') }}</strong>
            </span>
        </div>
        <div class="col-md-6">
            {!! Form::label('title', 'Модель', ['class' => 'col-md-4 control-label']) !!}


            {!! Form::text('model', null, array('placeholder'=>'Спочатку виберіть бренд', 'class' => 'form-control', 'required', 'autofocus')) !!}

            <span class="help-block">
                <strong>{{ $errors->first('name') }}</strong>
            </span>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            {!! Form::label('title', 'Тип ТМЦ', ['class' => 'col-md-4 control-label']) !!}

            {{Form::select('complekt',$invetory_types,0 ,  array('class' => 'form-control'))}}

            <span class="help-block">
                <strong>{{ $errors->first('name') }}</strong>
            </span>
        </div>
        <div class="col-md-6">
            {!! Form::label('title', 'Серійний номер', ['class' => 'col-md-4 control-label']) !!}

            {!! Form::text('serial', null, array('placeholder'=>'АА-ББББ-ВВВВВ', 'class' => 'form-control', 'required', 'autofocus')) !!}

            <span class="help-block">
                <strong>{{ $errors->first('name') }}</strong>
            </span>
        </div>
    </div>
</div>
<div class="row">
    <div class="col">
        Місце знаходження
    </div>
</div>
<div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
    <div class="row">
        <div class="col-md-6">
            {!! Form::label('title', 'Серійний номер', ['class' => 'col-md-4 control-label']) !!}

            {!! Form::text('serial', null, array('placeholder'=>'АА-ББББ-ВВВВВ', 'class' => 'form-control', 'required', 'autofocus')) !!}

            <span class="help-block">
                <strong>{{ $errors->first('name') }}</strong>
            </span>
        </div>
        <div class="col-md-6">
            {!! Form::label('title', 'Серійний номер', ['class' => 'col-md-4 control-label']) !!}

            {!! Form::text('serial', null, array('placeholder'=>'АА-ББББ-ВВВВВ', 'class' => 'form-control', 'required', 'autofocus')) !!}

            <span class="help-block">
                <strong>{{ $errors->first('name') }}</strong>
            </span>
        </div>
    </div>
</div>
