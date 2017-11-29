@extends('master')

@section('css')
	@parent
	<link rel="stylesheet" href="{{ asset('css/escolher.css') }}">
	<style type='text/css'>
		body {
			background-image: linear-gradient(rgba(20,20,20, .7), rgba(20,20,20, .3)), url('https://images.pexels.com/photos/207691/pexels-photo-207691.jpeg?w=1260&h=750&auto=compress&cs=tinysrgb') !important;
			background-size:     cover !important;                      
		    background-repeat: repeat !important;
		    background-position: center center !important;	
		}
	    .kwicks .card-class{
	    	border-radius: .25em;
	    }

	    .mobile { display: none }
	    @media (max-width: 640px) {
	        .mobile { display: block }
	        .desktop { display: none }
	    }

	    .kwicks .k.content {
	    	padding: 2em;
	    	color: white;
	    }

	    .kwicks .k.content .header {
	    	width: 100%;
	    }

	    .kwicks-expanded img {
	    	/*width: 100%;
	    	height: auto;*/
	    }

	    .kwicks .k.content .description {
	    	/*padding: 2em;*/
	    }

	    .kwicks > li {
	        height: auto;
	    }

	    #panel-1 { background-color: #D24D57; }
	    #panel-2 { background-color: #5C97BF; }
	    #panel-3 { background-color: #03A678; }
	    #panel-4 { background-color: #bf7cc7; }
	</style>
@endsection

@section('navbar')
	
@endsection

@section('content')
	
	<div id='fluid-example-container'>

		<div class="ui raised segment">
			<h1 style="text-align: center">Escolha sua classe</h1>
		</div>

        <ul class='kwicks kwicks-horizontal'>

        	@foreach($classes as $class)
            <li class="card-class" id='panel-{{ $loop->iteration }}'>
            	{{-- <img src="{{ $class->image or 'http://semantic-ui.com/images/avatar/large/stevie.jpg' }}"> --}}

            	<div class="k content">
            			
            		<h2 class="mobile">{{ $class->short_name }}</h2>
            		<h2 class="desktop">{{ $class->name }}</h2>
            		<h4>{{ $class->slogan }}</h4>
            		
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
            		 	<p>{{ $class->getTotalNumber() }} pessoas se juntaram</p>
            		</div>

            	</div>

	  	        {!! Form::open(['url' => '/escolher/classe', 'method' => 'post']) !!}
	  	        {!! csrf_field() !!}
	  	        {!! Form::hidden('class_id', $class->id) !!}
  	          	<button type="submit" class="ui black fluid default bottom button choose-class" id="{{ $class->id }}">
	                <i class="add icon"></i>
	                Escolher classe
	              </button>
	            {{ Form::close() }}

            </li>
            @endforeach

        </ul>
    </div>
@endsection

@section('js')
	@parent
	<script src="{{ asset('js/escolher.js') }}" type="text/javascript"></script>

	<script type='text/javascript'>
		$('.pusher').removeClass('pusher');
	    $().ready(function() {
	        $('.kwicks').kwicks({
	            maxSize : '65%',
	            behavior: 'menu'
	        });


	    });
	</script>
@endsection