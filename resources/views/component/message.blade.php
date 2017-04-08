<div class="ui icon floating  {{ $type or '' }} {{ $color or '' }} {{ $size or '' }} message">
<i class="close icon"></i>
  @if(isset($icon))
    <i class="{{ $icon }} icon"></i>
  @endif
  	<div class="content">
  	
  		@if(isset($title))
		    <div class="header">
		      {{ $title }}
		    </div>
		@endif

    <p class="msg">{{ $slot }}</p>
  </div>
</div>