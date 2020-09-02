@csrf
<div class="form-group">
    <label for="question-title">Question Title</label>
    <input type="text" id="question-title" name="title" value="{{ old('title',$questions->title) }}" class="form-control {{ $errors->has('title') ? 'is-invalid' :'' }}">
    @if($errors->has('title'))
        <div class="invalid-feedback">
            <strong>{{ $errors->first('title') }}</strong>
        </div>
    @endif
</div>
<div class="form-group">
    <label for="question-body">Explain your Question</label>
    <textarea class="form-control  {{ $errors->has('body') ? 'is-invalid' :'' }}" id="question-body" name="body" rows="10">{{ old('body',$questions->body) }}</textarea>
    @if($errors->has('body'))
        <div class="invalid-feedback">
            <strong>{{ $errors->first('body') }}</strong>
        </div>
    @endif
</div>
<div class="form-group">
    <button class="btn btn-outline-primary btn-lg" type="submit"> {{ $buttonText }}</button>
</div>
