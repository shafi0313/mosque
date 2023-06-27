<!-- Modal -->
<div class="modal fade" id="editModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Event</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form onsubmit="ajaxStore(event, this, 'editModal')" action="{{ route('admin.event.update', $event->id) }}"
                method="POST" enctype="multipart/form-data">
                @csrf @method('PUT')
                <input type="hidden" name="update" value="1">
                <div class="modal-body">
                    <div class="row g-3">
                        <div class="col-md-12">
                            <label for="title" class="form-label required">Title </label>
                            <input type="text" name="title" class="form-control" value="{{ $event->title }}"
                                required />
                            @if ($errors->has('title'))
                                <div class="alert alert-danger">{{ $errors->first('title') }}</div>
                            @endif
                        </div>
                        <div class="col-md-12">
                            <label for="text" class="form-label required">Text </label>
                            <textarea name="text" id="text_edit" class="form-control text">{!! $event->text !!}</textarea>
                            @if ($errors->has('text'))
                                <div class="alert alert-danger">{{ $errors->first('text') }}</div>
                            @endif
                        </div>
                        <div class="col-md-3">
                            <label for="date" class="form-label required">Event Date </label>
                            <input type="date" name="date" class="form-control" value="{{ $event->date }}"
                                required />
                            @if ($errors->has('date'))
                                <div class="alert alert-danger">{{ $errors->first('date') }}</div>
                            @endif
                        </div>
                        <div class="col-md-3">
                            <label for="image" class="form-label">Image </label>
                            <img src="{{ imagePath('events', $event->image) }}" width="100px">
                        </div>
                        <div class="col-md-3">
                            <label for="image" class="form-label">Image </label>
                            <input type="file" name="image" class="form-control" />
                            @if ($errors->has('image'))
                                <div class="alert alert-danger">{{ $errors->first('image') }}</div>
                            @endif
                        </div>

                        <div class="col-md-2 form-check form-switch">
                            <label for="image" class="form-label d-block">Status </label>
                            <input class="form-check-input" type="checkbox" id="status_input" value="1" name="status" checked>
                            <label class="form-check-label" for="status_input" id="status_label">Active</label>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('#text_edit').summernote({
            height: 200,
        });
    });
    
    document.getElementById('status_input').addEventListener("click", function() {
        document.getElementById('status_label').innerHTML = this.checked ? 'Active' : 'Inactive';
    });
</script>
