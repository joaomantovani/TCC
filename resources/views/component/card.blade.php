<div class="ui fluid card {{ $class or '' }}">

  @if(isset($title))
    <div class="content">
      <div class="header">
          {{ $title }}
      </div>
    </div>
  @endif

  @if(isset($image))
    <div class="image lazy">
        <img src="{{ $image }}">
      </div>
  @endif

  <div class="content {{ $content or '' }}">
    {{ $slot }}
  </div>

  @if(isset($bottom))
    <div class="extra content">
      {{ $bottom }}
    </div>
  @endif

  @if(isset($extra_content))
    {{ $extra_content }}
  @endif

</div>