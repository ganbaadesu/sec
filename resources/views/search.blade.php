<div class="col-12 grid-margin">
    <div class="card search-content">
        <div class="card-body">
            <div class="row">
                <div class="col-lg-12 row">
                    <div class="col-lg-8">
                        <nav class="content-menu">
                            <ul class="nav">
                                <li class="nav-item active">
                                    <p class="nav-link" id="search_date"></p>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <nav class="content-menu">
                        <div class="col-12 row">
                            <ul class="nav">
                                <li class="nav-item active" name="search_date_choice">
                                    <p class="nav-link" onclick="change_date('search_date_choice', 'active',0, 'search_date')">Өнөөдөр</p>
                                </li>
                                <li class="nav-item search-date-choice" name="search_date_choice">
                                    <p class="nav-link" onclick="change_date('search_date_choice', 'active',7, 'search_date')">7 хоног</p>
                                </li>
                                <li class="nav-item search-date-choice" name="search_date_choice">
                                    <p class="nav-link" onclick="change_date('search_date_choice', 'active',14, 'search_date')">14 хоног</p>
                                </li>
                                <li class="nav-item search-date-choice" name="search_date_choice">
                                    <p class="nav-link" onclick="change_date('search_date_choice', 'active',21, 'search_date')">21 хоног</p>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
            <form class="form-sample" method="GET">
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label" >Name</label>
                        <div class="col-sm-8">
                        <input type="text" class="form-control" name="name"/>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label" >Email</label>
                        <div class="col-sm-8">
                        <input type="text" class="form-control" name="email"/>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label" >Usertype</label>
                        <div class="col-sm-8">
                        <input type="text" class="form-control" name="usertype"/>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label" >Phone</label>
                        <div class="col-sm-8">
                        <input type="text" class="form-control" name="phone"/>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label" >Name</label>
                        <div class="col-sm-8">
                        <input type="text" class="form-control" name="name"/>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label" >Email</label>
                        <div class="col-sm-8">
                        <input type="text" class="form-control" name="email"/>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label" >Usertype</label>
                        <div class="col-sm-8">
                        <input type="text" class="form-control" name="usertype"/>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label" >Phone</label>
                        <div class="col-sm-8">
                        <input type="text" class="form-control" name="phone"/>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label" >Name</label>
                        <div class="col-sm-8">
                        <input type="text" class="form-control" name="name"/>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label" >Email</label>
                        <div class="col-sm-8">
                        <input type="text" class="form-control" name="email"/>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label" >Usertype</label>
                        <div class="col-sm-8">
                        <input type="text" class="form-control" name="usertype"/>
                        </div>
                    </div>
                </div>
                <div class="button-submit col-md-4">
                        <p class="btn btn-primary row col-sm-12 mr-2 save" onclick="search()">Хайх</p>
                </div>
            </div>
            </form>
            <div class="row">
                <div class="col-md-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <div class="table-responsive">
                                        <table class="table table-hover table-striped">
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