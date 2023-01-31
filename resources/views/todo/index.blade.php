@extends('todo.main_master')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">List</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <div id="example5_wrapper" class="dataTables_wrapper no-footer"><table id="example5" class="display dataTable no-footer" style="min-width: 845px" role="grid" aria-describedby="example5_info">
                            <thead>
                                <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="example5" rowspan="1" colspan="1" aria-sort="ascending" aria-label="

                                    : activate to sort column descending" style="width: 44.075px;">
                                        <div class="form-check custom-checkbox ms-2">
                                            <input type="checkbox" class="form-check-input" id="checkAll" required="">
                                            <label class="form-check-label" for="checkAll"></label>
                                        </div>
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="example5" rowspan="1" colspan="1" aria-label="Patient ID: activate to sort column ascending" style="width: 83.575px;">ID</th>
                                    <th class="sorting" tabindex="0" aria-controls="example5" rowspan="1" colspan="1" aria-label="Patient Name: activate to sort column ascending" style="width: 114.425px;">Title</th>
                                    <th class="sorting" tabindex="0" aria-controls="example5" rowspan="1" colspan="1" aria-label="Doctor Assgined: activate to sort column ascending" style="width: 138.4px;">Description</th>
                                    <th class="sorting" tabindex="0" aria-controls="example5" rowspan="1" colspan="1" aria-label="Disease: activate to sort column ascending" style="width: 97.4375px;">Deadline</th>
                                    <th class="sorting" tabindex="0" aria-controls="example5" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 103.938px;">Status</th>
                                    <th class="sorting" tabindex="0" aria-controls="example5" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending" style="width: 56.775px;">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                     
                                
                            <tr role="row" class="odd">
                                    <td class="sorting_1">
                                        <div class="form-check custom-checkbox ms-2">
                                            <input type="checkbox" class="form-check-input" id="customCheckBox2" required="">
                                            <label class="form-check-label" for="customCheckBox2"></label>
                                        </div>
                                    </td>
                                    <td>#P-00001</td>
                                    <td>26/02/2020, 12:42 AM</td>
                                    <td>Tiger Nixon</td>
                                    <td>Dr. Cedric</td>
                                    <td>Cold &amp; Flu</td>
                                    <td>
                                        <span class="badge light badge-danger">
                                            <i class="fa fa-circle text-danger me-1"></i>
                                            New Patient
                                        </span>
                                    </td>
                                    
                                    
                                </tr></tbody>
                        </table><div class="dataTables_info" id="example5_info" role="status" aria-live="polite">Showing 1 to 10 of 20 entries</div><div class="dataTables_paginate paging_simple_numbers" id="example5_paginate"><a class="paginate_button previous disabled" aria-controls="example5" data-dt-idx="0" tabindex="0" id="example5_previous">Previous</a><span><a class="paginate_button current" aria-controls="example5" data-dt-idx="1" tabindex="0">1</a><a class="paginate_button " aria-controls="example5" data-dt-idx="2" tabindex="0">2</a></span><a class="paginate_button next" aria-controls="example5" data-dt-idx="3" tabindex="0" id="example5_next">Next</a></div></div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>	
</div>
@endsection