<!-- Modal -->
<div class="modal fade" id="editModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Committee Member</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form onsubmit="ajaxStore(event, this, 'editModal')" action="{{ route('admin.committee-member.update', $committee_member->id) }}"
                method="POST" enctype="multipart/form-data">
                @csrf @method('PUT')
                <input type="hidden" name="update" value="1">
                <div class="modal-body">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label for="name" class="form-label required">Name </label>
                            <input type="text" name="name" class="form-control" value="{{ $committee_member->name }}"
                                required />
                            @if ($errors->has('name'))
                                <div class="alert alert-danger">{{ $errors->first('name') }}</div>
                            @endif
                        </div>
                        <div class="col-md-6">
                            <label for="designation" class="form-label required">Designation </label>
                            <input type="text" name="designation" class="form-control" value="{{ $committee_member->designation }}"
                                required />
                            @if ($errors->has('designation'))
                                <div class="alert alert-danger">{{ $errors->first('designation') }}</div>
                            @endif
                        </div>
                        <div class="col-md-6">
                            <label for="phone" class="form-label required">Phone </label>
                            <input type="text" name="phone" class="form-control" value="{{ $committee_member->phone }}"
                                required />
                            @if ($errors->has('phone'))
                                <div class="alert alert-danger">{{ $errors->first('phone') }}</div>
                            @endif
                        </div>
                        <div class="col-md-6">
                            <label for="email" class="form-label required">Email </label>
                            <input type="text" name="email" class="form-control" value="{{ $committee_member->email }}"
                                required />
                            @if ($errors->has('email'))
                                <div class="alert alert-danger">{{ $errors->first('email') }}</div>
                            @endif
                        </div>
                        <div class="col-md-6">
                            <label for="type" class="form-label required">type </label>
                            <select name="type" class="form-control" required>
                                <option value="Executives" @selected($committee_member->type == "Executives")>Executives</option>
                                <option value="Dawah_Team" @selected($committee_member->type == "Dawah_Team")>Dawah Team</option>
                                <option value="Sports_Team" @selected($committee_member->type == "Sports_Team")>Sports Team</option>
                                <option value="MSA_Publishing" @selected($committee_member->type == "MSA_Publishing")>MSA Publishing</option>
                            </select>
                            @if ($errors->has('type'))
                                <div class="alert alert-danger">{{ $errors->first('type') }}</div>
                            @endif
                        </div>
                        <div class="col-md-6">
                            <label for="joining_date" class="form-label required">Joining Date </label>
                            <input type="date" name="joining_date" class="form-control" value="{{ $committee_member->joining_date }}"
                                required />
                            @if ($errors->has('joining_date'))
                                <div class="alert alert-danger">{{ $errors->first('joining_date') }}</div>
                            @endif
                        </div>
                        <div class="col-md-6">
                            <label for="address" class="form-label required">Address </label>
                            <input type="text" name="address" class="form-control" value="{{ $committee_member->address }}"
                                required />
                            @if ($errors->has('address'))
                                <div class="alert alert-danger">{{ $errors->first('address') }}</div>
                            @endif
                        </div>

                        <div class="col-md-3">
                            <label for="image" class="form-label">Image </label>
                            <img src="{{ imagePath('committee_member', $committee_member->image) }}" width="100px">
                        </div>
                        <div class="col-md-3">
                            <label for="image" class="form-label">Image </label>
                            <input type="file" name="image" class="form-control" />
                            @if ($errors->has('image'))
                                <div class="alert alert-danger">{{ $errors->first('image') }}</div>
                            @endif
                        </div>

                        <div class="col-md-12">
                            <label for="text" class="form-label">Text </label>
                            <textarea name="text" class="form-control text">{!! $committee_member->text !!}</textarea>
                            @if ($errors->has('text'))
                                <div class="alert alert-danger">{{ $errors->first('text') }}</div>
                            @endif
                        </div>

                        <div class="col-md-2 form-check form-switch">
                            <label for="image" class="form-label d-block">Status </label>
                            <input class="form-check-input" type="checkbox" id="status_input" value="{{ $committee_member->status }}" name="status" @checked($committee_member->status == 1)>
                            <label class="form-check-label" for="status_input" id="status_label">Active</label>
                        </div>

                        <div class="col-md-2 form-check form-switch">
                            <label for="is_present" class="form-label d-block">is present </label>
                            <input class="form-check-input" type="checkbox" id="is_present_input" name="is_present" value="{{ $committee_member->is_present }}" @checked($committee_member->is_present == 1)>
                            <label class="form-check-label" for="is_present_input" id="is_present_label">Active</label>
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

<script>
    $(document).ready(function() {
        $('#text_edit').summernote({
            height: 200,
        });
    });

    document.getElementById('status_input').addEventListener("click", function() {
        document.getElementById('status_label').innerHTML = this.checked ? 'Active' : 'Inactive';
    });
    document.getElementById('is_present_input').addEventListener("click", function() {
                document.getElementById('is_present_label').innerHTML = this.checked ? 'Active' : 'Inactive';
            });
</script>
