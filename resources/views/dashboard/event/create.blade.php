<!-- Modal -->
<div class="modal fade" id="createModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add Event</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form onsubmit="ajaxStore(event, this, 'createModal')" action="{{ route('admin.event.store') }}"
                method="POST">
                @csrf
                <div class="modal-body">
                    <div class="row g-3">
                        <div class="col-md-12">
                            <label for="title" class="form-label required">Title </label>
                            <input type="text" name="title" class="form-control" value="{{ old('title') }}"
                                required />
                            @if ($errors->has('title'))
                                <div class="alert alert-danger">{{ $errors->first('title') }}</div>
                            @endif
                        </div>
                        <div class="col-md-12">
                            <label for="text" class="form-label required">Text </label>
                            <textarea name="text" class="form-control text"></textarea>
                            @if ($errors->has('text'))
                                <div class="alert alert-danger">{{ $errors->first('text') }}</div>
                            @endif
                        </div>
                        <div class="col-md-6">
                            <label for="date" class="form-label required">Event Date </label>
                            <input type="date" name="date" class="form-control" required />
                            @if ($errors->has('date'))
                                <div class="alert alert-danger">{{ $errors->first('date') }}</div>
                            @endif
                        </div>
                        <div class="col-md-6">
                            <label for="image" class="form-label required">Image </label>
                            <input type="file" name="image" class="form-control" required/>
                            @if ($errors->has('image'))
                                <div class="alert alert-danger">{{ $errors->first('image') }}</div>
                            @endif
                        </div>
                        
                        <div class="col-md-6">
                            <label for="status" class="form-label d-block required">Status </label>
                            <input type="checkbox" class="form-control" name="status" checked data-toggle="toggle" data-onlabel="Active" data-offlabel="Inactive" data-onvalue="1" data-onvalue="0" data-onstyle="success" data-offstyle="danger" data-width="130" required>
                            @if ($errors->has('status'))
                                <div class="alert alert-danger">{{ $errors->first('status') }}</div>
                            @endif
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
