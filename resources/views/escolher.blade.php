@extends('master')

@section('css')
	@parent
	<link rel="stylesheet" href="{{ asset('css/escolher.css') }}">
@endsection

@section('content')
	
	<div class="ui stackable three column grid">
		@foreach($classes as $class)
	  <div class="column">
	  	<div class="ui fluid people shape">
	  	  <div class="sides">
	  	    <div class="side active">
	  	      <div class="ui fluid card">
  	  	        <div class="image">
  	  	          <img src="{{ $class->image or 'http://semantic-ui.com/images/avatar/large/stevie.jpg' }}">
  	  	        </div>
  	  	        <div class="content">
  	  	          <a class="header">{{ $class->name }}</a>
  	  	          <div class="meta">
  	  	            <span class="date">{{ $class->slogan }}</span>
  	  	          </div>
  	  	        </div>
  	  	        <div class="extra content">
  	  	          <a>
  	  	            <i class="user icon"></i>
  	  	            {{ $class->getTotalNumber() }} pessoas se juntaram
  	  	          </a>
  	  	        </div>
  	  	      </div>
	  	    </div>
	  	    <div class="side">
	  	      <div class="ui fluid card">
	  	        <div class="image">
	  	          <img src="{{ $class->image or 'http://semantic-ui.com/images/avatar/large/stevie.jpg' }}">
	  	        </div>
	  	        <div class="content">
	  	          <a class="header">{{ $class->name }}</a>
	  	          <div class="description">
	  	            {!! $class->description !!}
	  	            <h4>Vantagens:</h4>
	  	            <div class="ui bulleted list">
	  	            	@foreach($class->advantages as $advantage)
	  	            	<div class="item">{{ $advantage }}</div>
	  	            	@endforeach
	  	            </div>
	  	            <h4>Desvantagens:</h4>
	  	            <div class="ui bulleted list">
	  	            	@foreach($class->disadvantages as $disadvantage)
	  	            	<div class="item">{{ $disadvantage }}</div>
	  	            	@endforeach
	  	            </div>
	  	          </div>
	  	        </div>
  	          	<div class="ui bottom attached button">
	                <i class="add icon"></i>
	                Escolher classe
	              </div>
	  	      </div>
	  	    </div>
	  	  </div>
	  	</div>
	  </div>
	  @endforeach
	</div>

@endsection

@section('js')
	@parent
	<script src="{{ asset('js/escolher.js') }}" type="text/javascript"></script>
@endsection