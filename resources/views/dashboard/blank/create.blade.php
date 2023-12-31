@extends('dashboard.layout.app')
@section('title', '')
@section('content')
    <!--start breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0 align-items-center">
                    <li class="breadcrumb-item">
                        <a href="{{ route('admin.dashboard') }}">
                            <ion-icon name="home-outline"></ion-icon>
                        </a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">
                        Validations
                    </li>
                </ol>
            </nav>
        </div>
    </div>
    <!--end breadcrumb-->

    <div class="row">
        <div class="col-xl-12 mx-auto">
            <h6 class="mb-0 text-uppercase">Basic Validation</h6>
            <hr />
            <div class="card">
                <div class="card-body">
                    <div class="p-4 border rounded">
                        <form action="" method="post" class="row g-3 needs-validation">
                            <div class="col-md-4">
                                <label for="f_name" class="form-label required">First name </label>
                                <input type="text" name="f_name" class="form-control" value="{{ old('f_name') }}"
                                    required />
                                @if ($errors->has('f_name'))
                                    <div class="alert alert-danger">{{ $errors->first('f_name') }}</div>
                                @endif
                            </div>

                            <div class="col-md-4">
                                <label for="validationCustom02" class="form-label">Last name</label>
                                <input type="text" class="form-control" id="validationCustom02" value="Otto"
                                    required />
                                <div class="valid-feedback">Looks good!</div>
                            </div>
                            <div class="col-md-4">
                                <label for="validationCustomUsername" class="form-label">Username</label>
                                <div class="input-group has-validation">
                                    <span class="input-group-text" id="inputGroupPrepend">@</span>
                                    <input type="text" class="form-control" id="validationCustomUsername"
                                        aria-describedby="inputGroupPrepend" required />
                                    <div class="invalid-feedback">
                                        Please choose a username.
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="validationCustom03" class="form-label">City</label>
                                <input type="text" class="form-control" id="validationCustom03" required />
                                <div class="invalid-feedback">
                                    Please provide a valid city.
                                </div>
                            </div>
                            <div class="col-md-3">
                                <label for="validationCustom04" class="form-label">State</label>
                                <select class="form-select" id="validationCustom04" required>
                                    <option selected disabled value="">Choose...</option>
                                    <option>...</option>
                                </select>
                                <div class="invalid-feedback">
                                    Please select a valid state.
                                </div>
                            </div>
                            <div class="col-md-3">
                                <label for="validationCustom05" class="form-label">Zip</label>
                                <input type="text" class="form-control" id="validationCustom05" required />
                                <div class="invalid-feedback">
                                    Please provide a valid zip.
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck"
                                        required />
                                    <label class="form-check-label" for="invalidCheck">Agree to terms and
                                        conditions</label>
                                    <div class="invalid-feedback">
                                        You must agree before submitting.
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary" type="submit">
                                    Submit form
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end row-->
    @push('custom_scripts')
    @endpush
@endsection
