<form {{ $attributes->merge(['class' => 'modal fade modal-'.$variant]) }} id="{{ $name }}_modal">
    @csrf
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">{{ $title }}</h4>
            </div>

            <div class="modal-body">
                {{ $slot }}
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">{{ __('voyager::generic.cancel') }}</button>
                <button type="submit" class="btn btn-{{ $variant }}" id="{{ $name }}">{{ $actionLabel }}</button>
            </div>
        </div>
    </div>
</form>

@push('javascript')
<script>
$('document').ready(function () {
    $('#{{$name}}_button').on('click', function(){
        $('#{{$name}}_modal').modal('show');
    });
});
</script>
@endpush