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
      <button class="ui black deny button btn_deny">
        {{ $left_button }}
      </button>
    @endif

    @if(isset($right_button))
      <button value="submit" class="ui positive right labeled icon button btn_approve">
        {{ $right_button }}
        <i class="checkmark icon"></i>
      </button>
    @endif
  </div>
</div>