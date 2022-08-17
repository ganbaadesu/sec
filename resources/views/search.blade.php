
    <div class="col-8" id="search_content">
        <div class="card search-content">
            <div class="search-title">
                <h1>Хайлтын хэсэг</h1>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-12">
                        <nav class="content-menu search-content-menu">
                            <div class="col-12 row">
                                <ul class="nav">
                                    <li class="nav-item active" name="search_ref_type_choice">
                                        <p class="nav-link" onclick="selection_changed('search_ref_type_choice', 'active', 0, search_ref_change(this))">All</p>
                                    </li>
                                    <li class="nav-item" name="search_ref_type_choice">
                                        <p class="nav-link" onclick="selection_changed('search_ref_type_choice', 'active', 1, search_ref_change(this))">Generation</p>
                                    </li>
                                    <li class="nav-item" name="search_ref_type_choice">
                                        <p class="nav-link" onclick="selection_changed('search_ref_type_choice', 'active', 2, search_ref_change(this))">Japan</p>
                                    </li>
                                    <li class="nav-item" name="search_ref_type_choice">
                                        <p class="nav-link" onclick="selection_changed('search_ref_type_choice', 'active', 3, search_ref_change(this))">Korean</p>
                                    </li>
                                    <li class="nav-item" name="search_ref_type_choice">
                                        <p class="nav-link" onclick="selection_changed('search_ref_type_choice', 'active', 4, search_ref_change(this))">Export</p>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
                <form class="form-sample" method="GET">
                <div class="row">
                    <div class="col-md-6 search-input">
                        <div class="form-group row">
                            <div class="col-sm-10">
                            <input type="text" class="form-control search-form" id="SearchRefNo" name="SearchRefNo" placeholder="RefNo"/>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 search-input">
                        <div class="form-group row">
                            <div class="col-sm-10">
                            <input type="text" class="form-control search-form" id="SearchBINo" name="SearchBINo" placeholder="B/I No"/>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 search-input">
                        <div class="form-group row">
                            <div class="col-sm-10">
                            <input type="text" class="form-control search-form" id="SearchCntrNo" name="SearchCntrNo" placeholder="CntrNo"/>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 search-input">
                        <div class="form-group row">
                            <div class="col-sm-10">
                            <input type="text" class="form-control search-form" id="SearchVehicleNo" name="SearchVehicleNo" placeholder="Vehicle No"/>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                            <p class="btn btn-primary row col-sm-6 mr-2 search-button" onclick="search()">Хайх</p>
                    </div>
                </div>
                </form>
                <div class="row">
                    <div class="col-md-12 stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="table-responsive">
                                            <table class="table table-hover table-striped" id="search_table">
                                                <thead>
                                                    <tr class="table-header">
                                                    <th>REF No</th>
                                                    <th>B/l No</th>
                                                    <th>Cntr No</th>
                                                    <th>Cargo Name</th>
                                                    <th>Cnee Name</th>
                                                    <th>Cnee Name</th>
                                                    <th>Status</th>
                                                    </tr>
                                                </thead>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>