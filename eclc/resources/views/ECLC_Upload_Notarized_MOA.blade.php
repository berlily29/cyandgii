@extends('ECLC_Layout')

@section('section')
            <div id="content">
                <div class="container-fluid">
                    <h3 class="text-dark mb-4"><strong>MOA/MOU</strong></h3>
                    <div class="col">
                        <div class="card shadow mb-3">
                            <div class="card-header py-3">
                                <p class="text-primary m-0 fw-bold" style="--bs-primary: rgb(141,0,0);--bs-primary-rgb: 141,0,0;">MOA/MOU information</p>
                            </div>
                            <div class="card-body">
                                <form>
                                    <div class="row">
                                        <div class="col">
                                            <div class="mb-3"><label class="form-label" for="Title"><strong>In Charge</strong></label><input class="form-control" type="text" id="username-2" name="Title" style="width: 528px;height: 38px;padding: 6px 12px;color: rgb(133,135,150);border-width: 1px;border-color: rgb(133,135,150);border-radius: 5.6px;display: block;"></div>
                                            <div class="mb-3" style="margin-top: 15px;"><label class="form-label" for="Lead"><strong>College, Branch Campus</strong></label><input class="form-control" type="text" id="username-1" name="Lead" style="width: 528px;height: 38px;padding: 6px 12px;color: rgb(133,135,150);border-width: 1px;border-color: rgb(133,135,150);border-radius: 5.6px;display: block;"></div>
                                            <div class="mb-3" style="margin-top: 15px;"><label class="form-label" for="Proj_location"><strong>Name of Entity</strong></label><input class="form-control" type="text" id="username-6" name="Proj_location" style="width: 528px;height: 38px;padding: 6px 12px;color: rgb(133,135,150);border-width: 1px;border-color: rgb(133,135,150);border-radius: 5.6px;display: block;"></div>
                                            <div class="mb-3" style="margin-top: 15px;"><label class="form-label" for="Type_activity"><strong>Duration of Partnership</strong></label>
                                                <div class="row" style="width: 600PX;">
                                                    <div class="col-xxl-1" style="width: 100px;"><label class="form-label" for="Type_activity" style="width: 100px;padding-left: 18PX;">Days</label><input type="checkbox" style="margin-left: 30.5PX;"></div>
                                                    <div class="col-xxl-1" style="width: 100px;"><label class="form-label" for="Type_activity" style="width: 100px;padding-left: 15PX;">Months</label><input type="checkbox" style="margin-left: 30.5PX;"></div>
                                                    <div class="col-xxl-3" style="width: 100px;"><label class="form-label" for="Type_activity" style="width: 100px;padding-left: 10PX;">1-2 years</label><input type="checkbox" style="margin-left: 30.5PX;"></div>
                                                    <div class="col-xxl-3" style="width: 100px;"><label class="form-label" for="Type_activity" style="width: 100px;">3-5 years</label><input type="checkbox" style="margin-left: 30.5PX;"></div>
                                                    <div class="col-xxl-3" style="width: 150PX;"><label class="form-label" for="Type_activity" style="width: 150px;margin-right: 50px;">Upon Completion</label><input type="checkbox" style="margin-left: 55PX;"></div>
                                                </div>
                                            </div>
                                            <div class="mb-3" style="margin-top: 15px;"><label class="form-label" for="Proposal_Letter"><strong>MOA/MOU</strong></label><input class="form-control" type="file" style="width: 528px;height: 38px;padding: 6px 12px;padding-left: 0px;" name="Proposal_Letter"></div>
                                            <div class="mb-3" style="margin-top: 15px;"><label class="form-label" for="Proposal_Letter"><strong>Notarized MOA/MOU</strong></label><input class="form-control" type="file" style="width: 528px;height: 38px;padding: 6px 12px;padding-left: 0px;" name="Proposal_Letter"></div>
                                        </div>
                                        <div class="col">
                                            <div class="mb-3"><label class="form-label" for="Admin_Involved"><strong>Type of Partner Institution</strong></label><input class="form-control" type="text" id="username-3" name="Admin_Involved" style="width: 528px;height: 38px;padding: 6px 12px;color: rgb(133,135,150);border-width: 1px;border-color: rgb(133,135,150);border-radius: 5.6px;display: block;"></div>
                                            <div class="mb-3" style="margin-top: 15px;"><label class="form-label" for="Students_Involved"><strong>Nature of Collaboration</strong></label><input class="form-control" type="text" id="username-7" name="Students_Involved" style="width: 528px;height: 38px;padding: 6px 12px;color: rgb(133,135,150);border-width: 1px;border-color: rgb(133,135,150);border-radius: 5.6px;display: block;"></div>
                                            <div class="mb-3" style="margin-top: 15px;"><label class="form-label" for="Team_Leader"><strong>Deliverable/Desired Output</strong></label><input class="form-control" type="text" id="username-9" name="Team_Leader" style="width: 528px;height: 38px;padding: 6px 12px;color: rgb(133,135,150);border-width: 1px;border-color: rgb(133,135,150);border-radius: 5.6px;display: block;"></div>
                                            <div class="mb-3" style="margin-top: 15px;"><label class="form-label" for="Leader_Email"><strong>Target Beneficiaries</strong></label><input class="form-control" type="text" id="username-4" name="Team_Leader" style="width: 528px;height: 38px;padding: 6px 12px;color: rgb(133,135,150);border-width: 1px;border-color: rgb(133,135,150);border-radius: 5.6px;display: block;"></div>
                                            <div class="mb-3" style="margin-top: 15px;"><label class="form-label" for="Leader_Email"><strong>Target Beneficiaries</strong></label>
                                                <div class="dropdown"><button class="btn btn-primary dropdown-toggle" aria-expanded="false" data-bs-toggle="dropdown" type="button" style="width: 150px;color: rgb(133,135,150);background: rgb(255,255,255);border-color: rgb(133,135,150);">Target</button>
                                                    <div class="dropdown-menu dropdown-menu-dark"><a class="dropdown-item" href="#">First Item</a><a class="dropdown-item" href="#">Second Item</a><a class="dropdown-item" href="#">Third Item</a></div>
                                                </div>
                                            </div>
                                            <div class="row"></div>
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
                                <form>
                                    <div class="row">
                                        <div class="col-md-6 col-xxl-11" style="width: 100%;">
                                            <form>
                                                <div class="mb-3"><label class="form-label" for="signature"><strong>Project Remarks</strong></label><textarea class="form-control" id="signature" rows="4" name="signature"></textarea></div>
                                                <div class="col"><a class="btn btn-primary" role="button" style="margin-right: 5px;margin-left: 1040px;margin-top: 10px;border-color: rgb(141,0,0);background: rgb(141,0,0);" href="{{ asset('ECLC_LIST_MOA.html') }}">Back</a><button class="btn btn-primary" type="button" style="margin-top: 10px;margin-left: 10px;background: rgb(141,0,0);border-color: rgb(141,0,0);">Submit</button></div>
                                            </form>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="bg-white sticky-footer">
                <div class="container my-auto">
                    <div class="text-center my-auto copyright"><span>Copyright © LSO 2024</span></div>
                </div>
            </footer>
        </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
@endsection