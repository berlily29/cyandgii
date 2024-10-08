@extends('ECLC_Layout')

@section('content')
<div id="content">
                <div class="container-fluid">
                    <h3 class="text-dark mb-4"><a href="user.html"><i class="far fa-arrow-alt-circle-left" style="color: var(--bs-emphasis-color);margin-right: 10px;"></i></a><strong>Manage MOA/MOU</strong></h3>
                    <div class="card shadow">
                        <div class="card-header py-3">
                            <div class="row">
                                <div class="col">
                                    <p class="text-primary m-0 fw-bold" style="text-align: left;padding-bottom: 0px;padding-top: 0px;--bs-primary: rgb(141,0,0);--bs-primary-rgb: 141,0,0;">Projects info</p>
                                </div>
                                <div class="col"></div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6 text-nowrap">
                                    <div id="dataTable_length" class="dataTables_length" aria-controls="dataTable"><label class="form-label">Show&nbsp;<select class="d-inline-block form-select form-select-sm">
                                                <option value="10" selected="">10</option>
                                                <option value="25">25</option>
                                                <option value="50">50</option>
                                                <option value="100">100</option>
                                            </select>&nbsp;</label></div>
                                </div>
                                <div class="col-md-6">
                                    <div class="text-md-end dataTables_filter" id="dataTable_filter"><label class="form-label"><input type="search" class="form-control form-control-sm" aria-controls="dataTable" placeholder="Search"></label></div>
                                </div>
                            </div>
                            <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                                <table class="table my-0" id="dataTable">
                                    <thead>
                                        <tr>
                                            <th>Title</th>
                                            <th>Late Modified</th>
                                            <th>Date Uploaded</th>
                                            <th>Expiration</th>
                                            <th>DTS No.</th>
                                            <th>Status</th>
                                            <th style="width: 250px;">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><img class="rounded-circle me-2" width="30" height="30" src="assets/img/avatars/avatar1.jpeg">Airi Satou</td>
                                            <td>2008/11/28</td>
                                            <td>2008/11/28</td>
                                            <td>2008/11/28</td>
                                            <td>123</td>
                                            <td>Completed</td>
                                            <td>
                                                <div style="width: 250px;"><a class="btn btn-primary" role="button" style="width: 68.4167px;height: 31px;margin-left: 5px;padding: 4px 8px;border-radius: 4px;font-size: 14px;background: rgb(141,0,0);border-color: rgb(141,0,0);" href="EP_ECLC_Manage_MOA.html">Managel</a><a class="btn btn-primary" role="button" style="width: 68.4167px;height: 31px;margin-left: 5px;padding: 4px 8px;border-radius: 4px;font-size: 14px;border-color: rgb(141,0,0);background: rgb(141,0,0);" href="EP_ECLC_View_MOA.html">View</a></div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><img class="rounded-circle me-2" width="30" height="30" src="assets/img/avatars/avatar1.jpeg">Airi Satou</td>
                                            <td>2008/11/28</td>
                                            <td>2008/11/28</td>
                                            <td>2008/11/28</td>
                                            <td>234</td>
                                            <td>In-Progress</td>
                                            <td>
                                                <div style="width: 250px;"><a class="btn btn-primary" role="button" style="width: 68.4167px;height: 31px;margin-left: 5px;padding: 4px 8px;border-radius: 4px;font-size: 14px;background: rgb(141,0,0);border-color: rgb(141,0,0);" href="ECLC_Manage_MOA.html">Managel</a><a class="btn btn-primary" role="button" style="width: 68.4167px;height: 31px;margin-left: 5px;padding: 4px 8px;border-radius: 4px;font-size: 14px;border-color: rgb(141,0,0);background: rgb(141,0,0);" href="ECLC_View_MOA.html">View</a></div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><img class="rounded-circle me-2" width="30" height="30" src="assets/img/avatars/avatar1.jpeg">Airi Satou</td>
                                            <td>2008/11/28</td>
                                            <td>2008/11/28</td>
                                            <td>2008/11/28</td>
                                            <td>345</td>
                                            <td>Completed</td>
                                            <td>
                                                <div style="width: 250px;"><a class="btn btn-primary" role="button" style="width: 68.4167px;height: 31px;margin-left: 5px;padding: 4px 8px;border-radius: 4px;font-size: 14px;background: rgb(141,0,0);border-color: rgb(141,0,0);" href="ECLC_Manage_MOA.html">Managel</a><a class="btn btn-primary" role="button" style="width: 68.4167px;height: 31px;margin-left: 5px;padding: 4px 8px;border-radius: 4px;font-size: 14px;border-color: rgb(141,0,0);background: rgb(141,0,0);" href="ECLC_View_MOA.html">View</a></div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><img class="rounded-circle me-2" width="30" height="30" src="assets/img/avatars/avatar1.jpeg">Airi Satou</td>
                                            <td>2008/11/28</td>
                                            <td>2008/11/28</td>
                                            <td>2008/11/28</td>
                                            <td>456</td>
                                            <td>Completed</td>
                                            <td>
                                                <div style="width: 250px;"><a class="btn btn-primary" role="button" style="width: 68.4167px;height: 31px;margin-left: 5px;padding: 4px 8px;border-radius: 4px;font-size: 14px;background: rgb(141,0,0);border-color: rgb(141,0,0);" href="ECLC_Manage_MOA.html">Managel</a><a class="btn btn-primary" role="button" style="width: 68.4167px;height: 31px;margin-left: 5px;padding: 4px 8px;border-radius: 4px;font-size: 14px;border-color: rgb(141,0,0);background: rgb(141,0,0);" href="ECLC_View_MOA.html">View</a></div>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td><strong>Title</strong></td>
                                            <td><strong>Late Modified</strong></td>
                                            <td><strong>Date Uploaded</strong></td>
                                            <td><strong>Expiration</strong></td>
                                            <td><strong>DTS No.</strong></td>
                                            <td><strong>Status</strong></td>
                                            <td style="height: 40.5px;"><strong>Action</strong></td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <div class="row">
                                <div class="col-md-6 align-self-center">
                                    <p id="dataTable_info" class="dataTables_info" role="status" aria-live="polite">Showing 1 to 10 of 27</p>
                                </div>
                                <div class="col-md-6">
                                    <nav class="d-lg-flex justify-content-lg-end dataTables_paginate paging_simple_numbers">
                                        <ul class="pagination">
                                            <li class="page-item disabled"><a class="page-link" aria-label="Previous" href="#"><span aria-hidden="true">«</span></a></li>
                                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                            <li class="page-item"><a class="page-link" aria-label="Next" href="#"><span aria-hidden="true">»</span></a></li>
                                        </ul>
                                    </nav>
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