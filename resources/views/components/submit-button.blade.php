<div class="border-top pt-3">
    <button type="submit" class="btn btn-success mr-half">
        <i class="fa fa-save" aria-hidden="true"></i> {{ $saveText ?? 'Save' }}
    </button>
    <a href="{{ $cancelRoute }}" class="btn btn-danger">
        {{ $cancelText ?? 'Cancel' }}
    </a>
</div>
