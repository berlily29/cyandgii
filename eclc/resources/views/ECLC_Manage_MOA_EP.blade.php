@extends('ECLC_Layout')

@section('content')
<div id="content">
                <div class="container-fluid">
                    <h3 class="text-dark mb-4"><a href="EP_ECLC_LIST_MOA.html"><i class="far fa-arrow-alt-circle-left" style="color: var(--bs-emphasis-color);margin-right: 10px;"></i></a><strong>MOA/MOU</strong></h3>
                    <div class="col">
                        <div class="card shadow mb-3">
                            <div class="card-header py-3">
                                <p class="text-primary m-0 fw-bold" style="--bs-primary: rgb(141,0,0);--bs-primary-rgb: 141,0,0;">MOA/MOU information</p>
                            </div>
                            <div class="card-body">
                                <form>
                                    <div class="row">
                                        <div class="col">
                                            <div class="mb-3"><label class="form-label" for="Title" style="color: var(--bs-emphasis-color);"><strong>In Charge</strong></label><input class="form-control" type="text" id="username-2" name="Title" style="width: 528px;height: 38px;padding: 6px 12px;color: rgb(133,135,150);border-radius: 5.6px;display: block;border-width: 0.666667px;border-color: rgb(133,135,150);" placeholder="Enter In Charge"></div>
                                            <div class="mb-3" style="margin-top: 15px;"><label class="form-label" for="Lead" style="color: var(--bs-emphasis-color);"><strong>College, Branch Campus</strong></label><input class="form-control" type="text" id="username-1" name="Lead" style="width: 528px;height: 38px;padding: 6px 12px;color: rgb(133,135,150);border-radius: 5.6px;display: block;border-width: 0.666667px;border-color: rgb(133,135,150);" placeholder="Enter Which Campus or College From"></div>
                                            <div class="mb-3" style="margin-top: 15px;"><label class="form-label" for="Proj_location" style="color: var(--bs-emphasis-color);"><strong>Name of Entity</strong></label><input class="form-control" type="text" id="username-6" name="Proj_location" style="width: 528px;height: 38px;padding: 6px 12px;color: rgb(133,135,150);border-radius: 5.6px;display: block;border-width: 0.666667px;border-color: rgb(133,135,150);" placeholder="Enter Entity's Name"></div>
                                            <div class="mb-3" style="margin-top: 15px;"><label class="form-label" for="Type_activity" style="color: var(--bs-emphasis-color);"><strong>Duration of Partnership</strong></label>
                                                <div class="dropdown"><button class="btn btn-primary dropdown-toggle" aria-expanded="false" data-bs-toggle="dropdown" type="button" style="border-color: rgb(133,135,150);background: var(--bs-body-bg);color: rgb(133,135,150);width: 300.7px;--bs-primary: rgb(133,135,150);--bs-primary-rgb: 133,135,150;">Duration of Partnership&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</button>
                                                    <div class="dropdown-menu" style="width: 300.7px;"><a class="dropdown-item" href="#" style="font-size: 16px;">Days</a><a class="dropdown-item" href="#" style="font-size: 16px;">Months</a><a class="dropdown-item" href="#" style="font-size: 16px;">1-2 Years</a><a class="dropdown-item" href="#" style="font-size: 16px;">3-5 Years</a><a class="dropdown-item" href="#" style="font-size: 16px;">Upon Completion</a></div>
                                                </div>
                                            </div>
                                            <div class="mb-3" style="margin-top: 15px;"><label class="form-label" for="Proposal_Letter" style="color: var(--bs-emphasis-color);"><strong>MOA/MOU</strong></label><input class="form-control" type="file" style="width: 528px;height: 38px;padding: 6px 12px;padding-left: 5px;" name="Proposal_Letter"></div>
                                        </div>
                                        <div class="col">
                                            <div class="mb-3"><label class="form-label" for="Admin_Involved" style="color: var(--bs-emphasis-color);"><strong>Type of Partner Institution</strong></label><input class="form-control" type="text" id="username-3" name="Admin_Involved" style="width: 528px;height: 38px;padding: 6px 12px;color: rgb(133,135,150);border-radius: 5.6px;display: block;border-width: 0.666667px;border-color: rgb(133,135,150);" placeholder="Enter Type of Partner Institution"></div>
                                            <div class="mb-3" style="margin-top: 15px;"><label class="form-label" for="Students_Involved" style="color: var(--bs-emphasis-color);"><strong>Nature of Collaboration</strong></label><input class="form-control" type="text" id="username-7" name="Students_Involved" style="width: 528px;height: 38px;padding: 6px 12px;color: rgb(133,135,150);border-radius: 5.6px;display: block;border-width: 0.666667px;border-color: rgb(133,135,150);" placeholder="Enter The Nature of Collaboration"></div>
                                            <div class="mb-3" style="margin-top: 15px;"><label class="form-label" for="Team_Leader" style="color: var(--bs-emphasis-color);"><strong>Deliverable/Desired Output</strong></label><input class="form-control" type="text" id="username-9" name="Team_Leader" style="width: 528px;height: 38px;padding: 6px 12px;color: rgb(133,135,150);border-radius: 5.6px;display: block;border-width: 0.666667px;border-color: rgb(133,135,150);" placeholder="Enter Deliverable or Desidered Output"></div>
                                            <div class="mb-3" style="margin-top: 15px;"><label class="form-label" for="Leader_Email" style="color: var(--bs-emphasis-color);"><strong>Target Beneficiaries</strong></label><input class="form-control" type="text" id="username-4" name="Team_Leader" style="width: 528px;height: 38px;padding: 6px 12px;color: rgb(133,135,150);border-radius: 5.6px;display: block;border-width: 0.666667px;border-color: rgb(133,135,150);" placeholder="Enter The Target Beneficiaries"></div>
                                            <div class="mb-3" style="margin-top: 15px;"><label class="form-label" for="Leader_Email" style="color: var(--bs-emphasis-color);"><strong>With Project or Without Project</strong></label>
                                                <div class="dropdown"><button class="btn btn-primary dropdown-toggle" aria-expanded="false" data-bs-toggle="dropdown" type="button" style="width: 150px;color: rgb(133,135,150);background: rgb(255,255,255);border-color: rgb(133,135,150);">Project&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</button>
                                                    <div class="dropdown-menu dropdown-menu-dark" style="background: rgb(255,255,255);width: 150px;"><a class="dropdown-item" href="#" style="background: #ffffff;color: rgb(133,135,150);">With Project</a><a class="dropdown-item" href="#" style="background: #ffffff;color: rgb(133,135,150);">Without Project</a></div>
                                                </div>
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
                                        <form>
                                            <div class="mb-3"><label class="form-label" for="signature" style="color: var(--bs-emphasis-color);"><strong>Project Remarks</strong></label><textarea class="form-control" id="signature" rows="4" name="signature"></textarea></div>
                                        </form>
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
            </div>
            <footer class="bg-white sticky-footer">
                <div class="container my-auto">
                    <div class="text-center my-auto copyright"><span>Copyright © LSO 2024</span></div>
                </div>
            </footer>
        </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
@endsection
