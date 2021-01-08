@extends('templates.srtdash.template')

@section('content')

    @if(isset($errors) && count($errors) > 0)

    <div class="alert alert-danger">
    	@foreach( $errors->all() as $error )
    	<p>{{$error}}</p>
    	@endforeach
    </div>

    @endif

    @if(isset($contact))
        {!! Form::open(['route' => ['contacts.update', $contact->id], 'class' => 'form', 'files' => true, 'enctype' => 'multipart/form-data', 'method' => 'PUT']) !!}
    @else
        {!! Form::open(['route' => 'contacts.store', 'class' => 'form', 'files' => true, 'enctype' => 'multipart/form-data',]) !!}
    @endif
    <div class='row justify-content-center mt-3 form-row align-items-center'>
    	<div class="col-sm-12 my-1"><div class="form-group">
            {!! Form::label('name', 'Nome', ['class' => 'custom-control']) !!}
            {!! Form::text('name', $contact->name ?? null, ['class' => 'form-control', 'placeholder' => 'Escreva seu nome...']) !!}</div></div>
        <div class="col-sm-6 my-1"><div class="form-group">
            {!! Form::label('phone', 'Telefone', ['class' => 'custom-control']) !!}
            {!! Form::text('phone', $contact->phone ?? null, ['class' => 'form-control', 'placeholder' => 'Apenas números...']) !!}</div></div>
        <div class="col-sm-6 my-1"><div class="form-group">
            {!! Form::label('email', 'E-mail', ['class' => 'custom-control']) !!}
            {!! Form::text('email', $contact->email ?? null, ['class' => 'form-control', 'placeholder' => 'Exemplo: email@exemplo.com.br']) !!}</div></div>
        <div class="col-md-12"><div class="form-group">
            {!! Form::label('message', 'Mensagem', ['class' => 'custom-control']) !!}
            {!! Form::textarea('message', $contact->message ?? null, ['class' => 'form-control', 'placeholder' => 'Escreva sua mensagem...', 'id' => 'message', 'rows' => 5, 'style' => 'resize:none']) !!}</div></div>

        <div class="col-md-6"><div class="form-group">
            {!! Form::label('archive', 'Anexo', ['class' => 'custom-control']) !!}
            {!! Form::file('archive', ['class' => 'form-control', 'id' => 'archive']) !!}</div></div>

            {!! Form::hidden('archive', $contact->ip_address ?? null) !!}

        <div class="col-md-6 ">{!! Form::submit('Salvar',['class' => 'btn btn-primary pull-right']) !!}</div>
    </div>
    {!! Form::close() !!}

@endsection