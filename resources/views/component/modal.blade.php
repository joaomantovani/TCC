<div class="ui modal" id="{{ $id or '' }}">
  <i class="close icon"></i>

  @if(isset($title))
    <div class="header">
      {{ $title }}
    </div>
  @endif

  <div class="content">
    {{ $slot }}
  </div>

  <div class="actions">

    @if(isset($left_button))
      <div class="ui black deny button">
        {{ $left_button }}
      </div>
    @endif

    @if(isset($right_button))
      <div class="ui positive right labeled icon button">
        {{ $right_button }}
        <i class="checkmark icon"></i>
      </div>
    @endif
  </div>
</div>