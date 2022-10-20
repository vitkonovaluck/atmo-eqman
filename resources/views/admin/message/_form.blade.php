<div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
    {!! Form::label('title', 'Назва', ['class' => 'col-md-2 control-label']) !!}

    <div class="col-md-8">
        {!! Form::text('title', null, ['class' => 'form-control', 'required', 'autofocus']) !!}

        <span class="help-block">
            <strong>{{ $errors->first('title') }}</strong>
        </span>
    </div>
    {!! Form::label('title', 'Комплект', ['class' => 'col-md-2 control-label']) !!}

    <div class="col-md-8">
        {{Form::select('complekt',['0'=>'Ні','1'=>'Так'], $selected = $invetoryType->complect ?? '0',  array('class' => 'form-control'))}}

        <span class="help-block">
            <strong>{{ $errors->first('name') }}</strong>
        </span>
    </div>
</div>
