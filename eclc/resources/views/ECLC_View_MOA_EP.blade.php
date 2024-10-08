@extends('ECLC_Layout')

@section('content')

<div id="content">
                <div class="container-fluid">
                    <h3 class="text-dark mb-4"><a href="EP_ECLC_LIST_MOA.html"><i class="far fa-arrow-alt-circle-left" style="color: var(--bs-emphasis-color);margin-right: 10px;"></i></a><strong>MOA/MOU</strong></h3>
                    <div class="col">
                        <div class="card shadow mb-5">
                            <div class="card-header py-3">
                                <div class="row">
                                    <div class="col">
                                        <p class="text-primary m-0 fw-bold" style="--bs-primary: rgb(141,0,0);--bs-primary-rgb: 141,0,0;">Optional</p>
                                    </div>
                                    <div class="col"></div>
                                    <div class="col"></div>
                                    <div class="col"></div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6 col-xxl-11" style="width: 100%;">
                                        <form style="margin-top: 20px;">
                                            <div class="mb-3"><label class="form-label" for="signature" style="color: var(--bs-emphasis-color);"><strong>Extension Partner Project Remarks</strong></label><textarea class="form-control" id="signature" rows="4" name="signature"></textarea></div>
                                        </form>
                                    </div>
                                </div>
                                <div class="col" style="height: 700px;"></div>
                                <div class="col" style="height: 100px;margin-top: 20px;"><button class="btn btn-primary" type="button" style="margin-top: 5px;background: rgb(141,0,0);border-color: rgb(141,0,0);">Download</button></div>
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