@extends('main.layout')

@section('title', 'Dashboard Page')

@section('content') 
                <!-- Summary of No. of Projects Area -->
                <div class="jumbotron jumbotron-fluid">
                    <div class="container">
                        <div class="row mt-2">
                            <div class="col-md-2 mx-2">
                                <div class="card" style="width: 14rem; height:10rem;">
                                    <div class="card-body text-center">
                                        <h6 class="card-title border-bottom fw-bolder">Total No. of Projects</h6>
                                        <p class="card-text h1 pt-3">0</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2 mx-2">
                                <div class="card" style="width: 14rem; height:10rem;">
                                    <div class="card-body text-center">
                                        <h6 class="card-title border-bottom fw-bolder">On-going Projects</h6>
                                        <p class="card-text h1 pt-3">0</p>
                                    </div>
                                </div>                            
                            </div>
                            <div class="col-md-2 mx-2">
                                <div class="card" style="width: 14rem; height:10rem;">
                                    <div class="card-body text-center">
                                        <h6 class="card-title border-bottom fw-bolder">Completed Projects</h6>
                                        <p class="card-text h1 pt-3">0</p>
                                    </div>
                                </div>                            
                            </div>
                            <div class="col-md-2 mx-2">
                                <div class="card" style="width: 14rem; height:10rem;">
                                    <div class="card-body text-center">
                                        <h6 class="card-title border-bottom fw-bolder">Discontinued Projects</h6>
                                        <p class="card-text h1 pt-3">0</p>
                                    </div>
                                </div>                            
                            </div>
                            <div class="col-md-3 mx-2">
                                <div class="row">
                                    <div class="d-flex justify-content-lg-end">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Search" aria-label="Search">
                                            <button class="btn btn-danger btn-outline-light" type="button" id="button-search">
                                                <span class="fa fa-search"></span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="d-flex justify-content-lg-end">
                                        <button type="button"  class="badge rounded-pill text-bg-warning" data-bs-toggle="modal" data-bs-target="#filterSearch">
                                            <span class="fa fa-filter fw-bolder"></span>&nbsp;Filter
                                        </button>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="d-flex justify-content-lg-end">
                                        <button type="button" style="width:20rem" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#addNewProjectModal">
                                            <span class="fa fa-plus fw-bolder"></span>&nbsp;New Project
                                        </button>
                                    </div>
                                </div>                               
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="mx-2">
                <div class="container-fluid px-3">
                    <div class="col-md-12 m-2">
                        <div class="row">
                            <h4 class="p-2">Recent Projects</h4>
                            <hr>
                        </div>
                        <div class="row">
                            <div class="table-responsive">
                                <table id="projectdata" class="display nowrap table table-striped" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Project Title</th>
                                            <th>Location</th>
                                            <th>Source of Fund</th>
                                            <th>Appropriation</th>
                                            <th>Contract</th>
                                            <th>Rev.Contract</th>
                                            <th>Expenditure</th>
                                            <th>Date Started</th>
                                            <th>Original Expiry</th>
                                            <th>Rev. Expiry</th>
                                            <th>Status</th>
                                            <th>Date Completed</th>
                                            <th>Project Description</th>
                                            <th>Mode of Implementation</th>
                                            <th>Contractor</th>
                                            <th>Project Duration</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Project Title</td>
                                            <td>Location</td>
                                            <th>Source of Fund</th>
                                            <td>Appropriation</td>
                                            <td>Contract</td>
                                            <td>Rev.Contract</td>
                                            <td>Expenditure</td>
                                            <td>Date Started</td>
                                            <td>Original Expiry</td>
                                            <td>Rev. Expiry</td>
                                            <td>Status</td>
                                            <td>Date Completed</td>
                                            <td>Project Description</td>
                                            <td>Mode of Implementation</td>
                                            <td>Contractor</td>
                                            <td>Project Duration</td>
                                        </tr>
                                    </tbody>
                                    <tbody>
                                        <!-- DataTables will fill the data here via Ajax -->
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>



        <!-- Add New Project Modal -->
        <div class="modal fade" id="filterSearch" tabindex="-1" aria-labelledby="newProjectLabel" aria-hidden="true">
            <div class="modal-dialog  modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="newProjectLabel"><span class="fa fa-filer"></span>&nbsp;Filter</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form>
                        <div class></div>
                    <div class="modal-body">
           
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                            <button type="button" class="btn btn-primary">Search</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>div>
        <!-- Add New Project Modal -->
        <div class="modal fade" id="addNewProjectModal" tabindex="-1" aria-labelledby="newProjectLabel" aria-hidden="true">
            <div class="modal-dialog  modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="newProjectLabel">Add New Project</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form>
                    <form>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="" class="form-label fw-bolder">Project Title</label>
                                    <input type="text" class="form-control" id="projectTitle" aria-describedby="projectTitle" placeholder="Project Title">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="location" class="form-label fw-bolder">Location</label>
                                    <input type="text" class="form-control" id="location" placeholder="Location">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="fundSource" class="form-label fw-bolder">Select Fund Source</label>
                                    <select id="fundSource" class="form-select" alt="source">
                                        <option value="">-- --</option>
                                        <option value="Wages">Wages</option>
                                        <option value="% Mobilization">% Mobilization</option>
                                        <option value="1st Partial Billing">1st Partial Billing</option>
                                        <option value="Trust Fund">Trust Fund</option>
                                        <option value="Final Billing">Final Billing</option>
                                        <option value="Others" id="otherFundContainer">Others</option>
                                    </select>

                                    <!-- Hidden text input for 'Others' -->
                                    <div id="otherFundContainer" class="mt-2 fw-bolder" style="display: none;">
                                        <label for="otherFund" class="form-label">Please specify:</label>
                                        <input type="text" id="otherFund" class="form-control" placeholder="Enter fund source">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <!-- Appropriation -->
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="appropriation" class="form-label fw-bolder">Appropriation</label>
                                        <input type="number" id="appropriation" class="form-control" placeholder="Enter appropriation amount">
                                    </div>
                                </div>

                                <!-- Contract Amount -->
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="contract" class="form-label fw-bolder">Contract</label>
                                        <input type="text" id="contract" class="form-control" placeholder="">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <!-- Revised Contract Amount -->
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="revContract" class="form-label fw-bolder">Revised Contract</label>
                                        <input type="text" id="revContract" class="form-control" placeholder="">
                                    </div>
                                </div>

                                <!-- Expenditure -->
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="expenditure" class="form-label fw-bolder">Expenditure</label>
                                        <input type="number" id="expenditure" class="form-control" placeholder="Enter expenditure">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <!-- Date Started -->
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="dateStarted" class="form-label fw-bolder">Date Started</label>
                                        <input type="date" id="dateStarted" class="form-control">
                                    </div>
                                </div>

                                <!-- Original Expiry -->
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="originalExpiry" class="form-label fw-bolder">Original Expiry</label>
                                        <input type="text" id="originalExpiry" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <!-- Revised Expiry -->
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="revExpiry" class="form-label fw-bolder">Revised Expiry</label>
                                        <input type="date" id="revExpiry" class="form-control">
                                    </div>
                                </div>

                                <!-- Status -->
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="status" class="form-label fw-bolder">Status</label>
                                        <select id="status" class="form-select">
                                            <option value="Ongoing">Ongoing</option>
                                            <option value="Completed">Completed</option>
                                            <option value="Cancelled">Discontinued</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <!-- Date Completed -->
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="dateCompleted" class="form-label fw-bolder">Date Completed</label>
                                        <input type="date" id="dateCompleted" class="form-control">
                                    </div>
                                </div>

                                <!-- Project Duration -->
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="projectDuration" class="form-label fw-bolder">Project Duration (Days)</label>
                                        <input type="number" id="projectDuration" class="form-control" placeholder="Enter project duration">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <!-- Mode of Implementation -->
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="modeOfImplementation" class="form-label fw-bolder">Mode of Implementation</label>
                                        <input type="text" id="modeOfImplementation" class="form-control" placeholder="Enter mode of implementation">
                                    </div>
                                </div>

                                <!-- Contractor -->
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="contractor" class="form-label fw-bolder">Contractor</label>
                                        <input type="text" id="contractor" class="form-control" placeholder="Enter contractor name">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <!-- Description -->
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label for="description" class="form-label fw-bolder">Project Description</label>
                                        <textarea id="description" class="form-control" rows="3" placeholder="Enter project description"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- DataTable Initialization -->
        <script>    
            $(document).ready(function() {
                $('#fundSource').on('change', function() {
                    if ($(this).val() === 'Others') {
                        $('#otherFundContainer').slideDown(); // Show input with animation
                    } else {
                        $('#otherFundContainer').slideUp(); // Hide input with animation
                    }
                });
            });        
            $(document).ready(function() {
                $('#projectdata').DataTable({
                    responsive: true,
                    scrollX: true, // Optional: enables horizontal scrolling if needed
                    paging: true,  // Optional: enables pagination
                    searching: true, // Optional: enables searching
                });
            });
        </script>
@endsection