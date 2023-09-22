<!-- Modal -->
<div class="modal fade" id="createModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add Committee Member</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form onsubmit="ajaxStore(event, this, 'createModal')" action="{{ route('admin.committee-member.store') }}"
                method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label for="name" class="form-label required">Name </label>
                            <input type="text" name="name" class="form-control" value="{{ old('name') }}"
                                required />
                            @if ($errors->has('name'))
                                <div class="alert alert-danger">{{ $errors->first('name') }}</div>
                            @endif
                        </div>
                        <div class="col-md-6">
                            <label for="designation" class="form-label required">designation </label>
                            <input type="text" name="designation" class="form-control" value="{{ old('designation') }}"
                                required />
                            @if ($errors->has('designation'))
                                <div class="alert alert-danger">{{ $errors->first('designation') }}</div>
                            @endif
                        </div>
                        <div class="col-md-6">
                            <label for="phone" class="form-label required">phone </label>
                            <input type="text" name="phone" class="form-control" value="{{ old('phone') }}"
                                required />
                            @if ($errors->has('phone'))
                                <div class="alert alert-danger">{{ $errors->first('phone') }}</div>
                            @endif
                        </div>
                        <div class="col-md-6">
                            <label for="email" class="form-label required">email </label>
                            <input type="email" name="email" class="form-control" value="{{ old('email') }}"
                                required />
                            @if ($errors->has('email'))
                                <div class="alert alert-danger">{{ $errors->first('email') }}</div>
                            @endif
                        </div>
                        <div class="col-md-6">
                            <label for="type" class="form-label required">type </label>
                            <select name="type" class="form-control" required>
                                <option value="">Select</option>
                                <option value="Executives">Executives</option>
                                <option value="Dawah_Team">Dawah Team</option>
                                <option value="Sports_Team">Sports Team</option>
                                <option value="MSA_Publishing">MSA Publishing</option>
                            </select>
                            @if ($errors->has('type'))
                                <div class="alert alert-danger">{{ $errors->first('type') }}</div>
                            @endif
                        </div>
                        <div class="col-md-6">
                            <label for="joining_date" class="form-label required">Joining date </label>
                            <input type="date" name="joining_date" class="form-control" value="{{ old('joining_date') }}"
                                required />
                            @if ($errors->has('joining_date'))
                                <div class="alert alert-danger">{{ $errors->first('joining_date') }}</div>
                            @endif
                        </div>
                        <div class="col-md-6">
                            <label for="address" class="form-label required">address </label>
                            <input type="text" name="address" class="form-control" value="{{ old('address') }}"
                                required />
                            @if ($errors->has('address'))
                                <div class="alert alert-danger">{{ $errors->first('address') }}</div>
                            @endif
                        </div>
                        <div class="col-md-6">
                            <label for="image" class="form-label required">Image </label>
                            <input type="file" name="image" class="form-control" required/>
                            @if ($errors->has('image'))
                                <div class="alert alert-danger">{{ $errors->first('image') }}</div>
                            @endif
                        </div>

                        <div class="col-md-12">
                            <label for="text" class="form-label">Text </label>
                            <textarea name="text" class="form-control text"></textarea>
                            @if ($errors->has('text'))
                                <div class="alert alert-danger">{{ $errors->first('text') }}</div>
                            @endif
                        </div>

                        <div class="col-md-2 form-check form-switch">
                            <label for="status" class="form-label d-block">Status </label>
                            <input class="form-check-input" type="checkbox" id="status_input" value="1" name="status" checked>
                            <label class="form-check-label" for="status_input" id="status_label">Inactive</label>
                        </div>
                        <div class="col-md-2 form-check form-switch">
                            <label for="is_present" class="form-label d-block">is present </label>
                            <input class="form-check-input" type="checkbox" id="is_present_input" value="1" name="is_present" checked>
                            <label class="form-check-label" for="is_present_input" id="is_present_label">Active</label>
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
