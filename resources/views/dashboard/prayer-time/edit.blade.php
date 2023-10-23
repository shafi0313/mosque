<!-- Modal -->
<div class="modal fade" id="editModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Custom Prayer adhan_time</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form onsubmit="ajaxStore(event, this, 'editModal')" action="{{ route('admin.prayer-adhan_times.update', $prayeradhan_time->id) }}"
                method="POST" enctype="multipart/form-data">
                @csrf @method('PUT')
                <input type="hidden" name="update" value="1">
                <div class="modal-body">
                    <div class="row g-3">
                        <div class="col-md-12">
                            <label for="name" class="form-label required">Prayer </label>
                            <input type="text" name="name" class="form-control" value="{{ $prayeradhan_time->name }}"
                                required />
                            @if ($errors->has('name'))
                                <div class="alert alert-danger">{{ $errors->first('name') }}</div>
                            @endif
                        </div>
                        <div class="col-md-12">
                            <label for="adhan_time" class="form-label required">Adhan Time </label>
                            <input type="text" name="adhan_time" class="form-control" value="{{ $prayeradhan_time->adhan_time }}" required />
                            @if ($errors->has('adhan_time'))
                                <div class="alert alert-danger">{{ $errors->first('adhan_time') }}</div>
                            @endif
                        </div>
                        <div class="col-md-12">
                            <label for="iqama_time" class="form-label required">iIqama Time </label>
                            <input type="text" name="iqama_time" class="form-control" value="{{ $prayertime->iqama_time }}" required />
                            @if ($errors->has('iqama_time'))
                                <div class="alert alert-danger">{{ $errors->first('iqama_time') }}</div>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>
