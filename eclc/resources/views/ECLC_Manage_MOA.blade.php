@extends('ECLC_Layout')

@section('content')
            <div class="container-fluid">
                <form action="{{ route('manage.moa.update', $eclc_inputs->eclc_id)}}" method = 'POST' enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <h3 class="text-dark mb-4"><a href="{{url('/list')}}"> <i class="far fa-arrow-alt-circle-left" style="color: var(--bs-emphasis-color);margin-right: 10px;"></i></a><strong>MOA/MOU</strong></h3>
                    <div class="col">
                        <div class="card shadow mb-3">
                            <div class="card-header py-3">
                                <p class="text-primary m-0 fw-bold" style="--bs-primary: rgb(141,0,0);--bs-primary-rgb: 141,0,0;">MOA/MOU information</p>
                            </div>
                            <div class="card-body">

                                    <div class="row">
                                        <div class="col">
                                            <div class="mb-3"><label class="form-label" for="Title" style="color: var(--bs-emphasis-color);"><strong>In Charge</strong></label><input class="form-control" type="text" id="username-2" name="in_charge" value="{{$eclc_inputs->in_charge}}" style="width: 528px;height: 38px;padding: 6px 12px;color: rgb(133,135,150);border-radius: 5.6px;display: block;border-width: 0.666667px;border-color: rgb(133,135,150);" placeholder="Enter In Charge">
                                            <div class="mb-3" style="margin-top: 15px;"><label class="form-label" for="Lead" style="color: var(--bs-emphasis-color);"><strong>College, Branch Campus</strong></label></div>
                                                <select class="form-select" style="width: 528px;height: 38px;padding: 6px 12px;color: rgb(133,135,150);border-radius: 5.6px;display: block;border-width: 0.666667px;border-color: rgb(133,135,150);" name="college_id" required>
                                                    <option value="" {{ $eclc_inputs->college_id == '' ? 'selected' : '' }}>Select College</option> 
                                                    @foreach ($collegeBranches as $Branch)
                                                        <option value="{{ $Branch->college_id }}" {{ $eclc_inputs->college_id == $Branch->college_id ? 'selected' : '' }}>
                                                            {{ $Branch->college_branch }} 
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>

                                            <div class="mb-3" style="margin-top: 15px;"><label class="form-label" for="Proj_location" style="color: var(--bs-emphasis-color);"><strong>Name of Entity</strong></label><input class="form-control" type="text" id="username-6" value="{{$eclc_inputs->noe}}" name="noe" style="width: 528px;height: 38px;padding: 6px 12px;color: rgb(133,135,150);border-radius: 5.6px;display: block;border-width: 0.666667px;border-color: rgb(133,135,150);" placeholder="Enter Entity's Name"></div>
                                            <div class="mb-3" style="margin-top: 15px;">
                                            <label class="form-label" for="duration" style="color: var(--bs-emphasis-color);">
                                                <strong>Duration of Partnership</strong>
                                            </label>
                                            <select class="form-select" id="duration" name="dop" style="width: 300.7px; color: rgb(133,135,150);">
                                                <option value="" disabled {{ $eclc_inputs->dop == '' ? 'selected' : '' }}>Select Duration</option>
                                                <option value="Days" {{ $eclc_inputs->dop == 'days' ? 'selected' : '' }}>Days</option>
                                                <option value="Months" {{ $eclc_inputs->dop == 'Months' ? 'selected' : '' }}>Months</option>
                                                <option value="1-2 Years" {{ $eclc_inputs->dop == '1-2 Years' ? 'selected' : '' }}>1-2 Years</option>
                                                <option value="3-5 Years" {{ $eclc_inputs->dop == '3-5 Years' ? 'selected' : '' }}>3-5 Years</option>
                                                <option value="Upon Completion" {{ $eclc_inputs->dop == 'Upon Completion' ? 'selected' : '' }}>Upon Completion</option>
                                            </select>
                                        </div>
                                            <div class="mb-3" style="margin-top: 15px;"><label class="form-label" for="Proposal_Letter" style="color: var(--bs-emphasis-color);"><strong>MOA/MOU</strong></label> 
                                            @if ($eclc_inputs->MOA)
                                            <p>Current File: <a href="{{ asset('storage/' . $eclc_inputs->MOA)}}" target="_blank">{{ basename($eclc_inputs->MOA) }}</a></p>
                                            <p>Leave blank to keep the current file.</p>
                                             @else
                                            <p>No file uploaded yet.</p>
                                             @endif

                                        <!-- File input field (allows user to upload a new file) -->
                                        <input type="file" name="MOA" class="form-control">
                                                </div>
                                        </div>
                                        <div class="col">
                                            <div class="mb-3"><label class="form-label" for="Admin_Involved" style="color: var(--bs-emphasis-color);"><strong>Type of Partner Institution</strong></label><input class="form-control" type="text" id="username-3" name="Type_PI" value="{{$eclc_inputs->Type_PI}}" style="width: 528px;height: 38px;padding: 6px 12px;color: rgb(133,135,150);border-radius: 5.6px;display: block;border-width: 0.666667px;border-color: rgb(133,135,150);" placeholder="Enter Type of Partner Institution"></div>
                                            <div class="mb-3" style="margin-top: 15px;"><label class="form-label" for="Students_Involved" style="color: var(--bs-emphasis-color);"><strong>Nature of Collaboration</strong></label><input class="form-control" type="text" id="username-7" name="noc" value="{{$eclc_inputs->noc}}" style="width: 528px;height: 38px;padding: 6px 12px;color: rgb(133,135,150);border-radius: 5.6px;display: block;border-width: 0.666667px;border-color: rgb(133,135,150);" placeholder="Enter The Nature of Collaboration"></div>
                                            <div class="mb-3" style="margin-top: 15px;"><label class="form-label" for="Team_Leader" style="color: var(--bs-emphasis-color);"><strong>Deliverable/Desired Output</strong></label><input class="form-control" type="text" id="username-9" name="des_out" value="{{$eclc_inputs->des_out}}" style="width: 528px;height: 38px;padding: 6px 12px;color: rgb(133,135,150);border-radius: 5.6px;display: block;border-width: 0.666667px;border-color: rgb(133,135,150);" placeholder="Enter Deliverable or Desidered Output"></div>
                                            <div class="mb-3" style="margin-top: 15px;"><label class="form-label" for="Leader_Email" style="color: var(--bs-emphasis-color);"><strong>Target Beneficiaries</strong></label><input class="form-control" type="text" id="username-4" name="tar_ben" value="{{$eclc_inputs->tar_ben}}" style="width: 528px;height: 38px;padding: 6px 12px;color: rgb(133,135,150);border-radius: 5.6px;display: block;border-width: 0.666667px;border-color: rgb(133,135,150);" placeholder="Enter The Target Beneficiaries"></div>
                                            <div class="mb-3" style="margin-top: 15px;">
                                                <label class="form-label" for="projectStatus" style="color: var(--bs-emphasis-color);">
                                                    <strong>With Project or Without Project</strong>
                                                </label>
                                                <select class="form-select" id="projectStatus" name="wwp" style="width: 150px; color: rgb(133,135,150);">
                                                    <option value="" disabled {{ $eclc_inputs->wwp == '' ? 'selected' : '' }}>Select Project Status</option>
                                                    <option value="With Project" {{ $eclc_inputs->wwp == 'With Project' ? 'selected' : '' }}>With Project</option>
                                                    <option value="Without Project" {{ $eclc_inputs->wwp == 'Without Project' ? 'selected' : '' }}>Without Project</option>
                                                </select>
                                            </div>
                                            <div class="row" style="background: rgb(255,255,255);"></div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="card shadow mb-5">
                            <div class="card-header py-3">
                                <p class="text-primary m-0 fw-bold" style="--bs-primary: rgb(141,0,0);--bs-primary-rgb: 141,0,0;">Optional</p>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6 col-xxl-11" style="width: 100%;">
                                        
                                            <div class="mb-3"><label class="form-label" for="signature" style="color: var(--bs-emphasis-color);"><strong>Project Remarks</strong></label><textarea class="form-control" id="signature" rows="4" name="signature"></textarea></div>
                                       
                                        <div class="row">
                                            <div class="col"></div>
                                            <div class="col"></div>
                                            <div class="col"></div>
                                            <div class="col"><button class="btn btn-primary" type="submit" style="margin-top: 10px;margin-left: 220px;background: rgb(141,0,0);border-color: rgb(141,0,0);">Submit</button></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>

            </div>
            <footer class="bg-white sticky-footer">
                <div class="container my-auto">
                    <div class="text-center my-auto copyright"><span>Copyright © LSO 2024</span></div>
                </div>
            </footer>
        </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>

@endsection