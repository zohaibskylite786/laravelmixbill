
@if (Session::has('notify'))
    @if (Session::has('ntype'))

        @if (Session::get('ntype') == 'e')
            <div class="alert alert-info">
                <button type="button" class="close" data-dismiss="alert">
                <span aria-hidden="true">×</span>
                </button>
                <div>{{ Session::get('notify') }}</div>
            </div>
        @else
        <div class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert">
            <span aria-hidden="true">×</span>
            </button>
            <div>{{ Session::get('notify') }}</div>
        </div>
        @endif
    @else
        <div class="alert alert-info">
            <button type="button" class="close" data-dismiss="alert">
            <span aria-hidden="true">×</span>
            </button>
            <div>{{ Session::get('notify') }}</div>
        </div>
    @endif

@endif
