<div class="form-group">
    <div id="{{$field->getMediaId()}}" class="media-field-wrapper">
        <h3>{{$field->getLabel()}}</h3>

        <a href="javascript:void(0)" class="btn btn-primary media-selector" data-media-route="{{$field->getModalRoute()}}">Add media</a>
    </div>
</div>