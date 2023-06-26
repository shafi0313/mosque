<!-- Modal -->
<div class="modal fade" id="editModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add Admin User</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form onsubmit="ajaxStore(event, this, 'editModal')" action="{{ route('admin.slider.update', $slider->id) }}"
                method="POST" enctype="multipart/form-data">
                @csrf @method('PUT')
                <input type="hidden" name="update" value="1">
                <div class="modal-body">
                    <div class="row g-3">
                        <div class="col-md-12">
                            <label for="title" class="form-label required">Title </label>
                            <input type="text" name="title" class="form-control" value="{{ $slider->title }}"
                                required />
                            @if ($errors->has('title'))
                                <div class="alert alert-danger">{{ $errors->first('title') }}</div>
                            @endif
                        </div>
                        <div class="col-md-12">
                            <label for="sub_title" class="form-label">Sub Title </label>
                            <input type="text" name="sub_title" class="form-control" value="{{ $slider->sub_title }}"/>
                            @if ($errors->has('sub_title'))
                                <div class="alert alert-danger">{{ $errors->first('sub_title') }}</div>
                            @endif
                        </div>
                        <div class="col-md-6">
                            <img src="{{ imagePath('sliders', $slider->image) }}" alt="" width="70px">
                        </div>
                        <div class="col-md-6">
                            <label for="image" class="form-label ">Background Image </label>
                            <input type="file" name="image" class="form-control" />
                            @if ($errors->has('image'))
                                <div class="alert alert-danger">{{ $errors->first('image') }}</div>
                            @endif
                        </div>
                        <div class="col-md-6">
                            <img src="{{ imagePath('sliders', $slider->icon) }}" alt="" width="70px">
                        </div>
                        <div class="col-md-6">
                            <label for="icon" class="form-label">Icon </label>
                            <input type="file" name="icon" class="form-control"/>
                            @if ($errors->has('icon'))
                                <div class="alert alert-danger">{{ $errors->first('icon') }}</div>
                            @endif
                        </div>
                        {{-- <div class="col-md-6">
                            <label for="is_active" class="form-label">Status &nbsp;</label>
                            <input type="checkbox" class="form-control" name="is_active" checked data-toggle="toggle" data-onlabel="Publish" data-offlabel="Unpublished" data-onstyle="success" data-offstyle="danger" data-width="130" required>
                            @if ($errors->has('is_active'))
                                <div class="alert alert-danger">{{ $errors->first('is_active') }}</div>
                            @endif
                        </div> --}}
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
