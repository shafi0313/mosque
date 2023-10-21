<!-- Modal -->
<div class="modal fade" id="createModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add Weekly Event</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form onsubmit="ajaxStore(event, this, 'createModal')" action="{{ route('admin.weekly-events.store') }}"
                method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="row g-3">
                        <div class="col-md-12">
                            <label for="title" class="form-label required">Title </label>
                            <input type="text" name="title" class="form-control" value="{{ old('title') }}" required />
                            @if ($errors->has('title'))
                                <div class="alert alert-danger">{{ $errors->first('title') }}</div>
                            @endif
                        </div>
                        <div class="col-md-12">
                            <label for="content" class="form-label required">Content </label>
                            <textarea name="content" class="form-control content" required>{{ old('content') }}</textarea>
                            @if ($errors->has('content'))
                                <div class="alert alert-danger">{{ $errors->first('content') }}</div>
                            @endif
                        </div>
                        <div class="col-md-6">
                            <label for="image" class="form-label required">Image </label>
                            <input type="file" name="image" class="form-control" required/>
                            @if ($errors->has('image'))
                                <div class="alert alert-danger">{{ $errors->first('image') }}</div>
                            @endif
                        </div>
                        <div class="col-md-6 status">
                            <label for="status" class="form-label">Status &nbsp;</label>
                            <input type="checkbox" class="form-control" name="status" checked data-toggle="toggle" data-onlabel="Publish" data-offlabel="Unpublished" data-onstyle="success" data-offstyle="danger" data-width="130" required>
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
