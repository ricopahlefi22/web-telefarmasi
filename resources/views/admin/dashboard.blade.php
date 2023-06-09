@extends('admin.template.base')

@section('content')
    <div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <h2>Analytical</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="fa fa-dashboard"></i></a></li>
                            <li class="breadcrumb-item">Dashboard</li>
                            <li class="breadcrumb-item active">Analytical</li>
                        </ul>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="d-flex flex-row-reverse">
                            <div class="page_action">
                                <button type="button" class="btn btn-primary"><i class="fa fa-download"></i> Download
                                    report</button>
                                <button type="button" class="btn btn-secondary"><i class="fa fa-send"></i> Send
                                    report</button>
                            </div>
                            <div class="p-2 d-flex">

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row clearfix row-deck">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card number-chart">
                        <div class="body">
                            <span class="text-uppercase">New Sessions</span>
                            <h4 class="mb-0 mt-2">22,500 <i class="fa fa-level-up font-12"></i></h4>
                            <small class="text-muted">Analytics for last week</small>
                        </div>
                        <div class="sparkline" data-type="line" data-spot-Radius="0" data-offset="90" data-width="100%"
                            data-height="50px" data-line-Width="1" data-line-Color="#39afa6" data-fill-Color="#73cec7">
                            4,1,5,2,7,3,4</div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card number-chart">
                        <div class="body">
                            <span class="text-uppercase">Goal Completions</span>
                            <h4 class="mb-0 mt-2">1,12,500</h4>
                            <small class="text-muted">Analytics for last week</small>
                        </div>
                        <div class="sparkline" data-type="line" data-spot-Radius="0" data-offset="90" data-width="100%"
                            data-height="50px" data-line-Width="1" data-line-Color="#ffa901" data-fill-Color="#efc26b">
                            1,4,2,3,6,2</div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card number-chart">
                        <div class="body">
                            <span class="text-uppercase">TIME ON SITE</span>
                            <h4 class="mb-0 mt-2">1,070</h4>
                            <small class="text-muted">Analytics for last week</small>
                        </div>
                        <div class="sparkline" data-type="line" data-spot-Radius="0" data-offset="90" data-width="100%"
                            data-height="50px" data-line-Width="1" data-line-Color="#38c172" data-fill-Color="#84d4a6">
                            1,4,2,3,1,5</div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card number-chart">
                        <div class="body">
                            <span class="text-uppercase">BOUNCE RATE</span>
                            <h4 class="mb-0 mt-2">10K</h4>
                            <small class="text-muted">Analytics for last week</small>
                        </div>
                        <div class="sparkline" data-type="line" data-spot-Radius="0" data-offset="90" data-width="100%"
                            data-height="50px" data-line-Width="1" data-line-Color="#226fd8" data-fill-Color="#7ea7de">
                            1,3,5,1,4,2</div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card top_widget">
                        <div class="body">
                            <div class="icon"><i class="fa fa-flag"></i> </div>
                            <div class="content">
                                <div class="text mb-2 text-uppercase">Sessions</div>
                                <h4 class="number mb-0">3,251 <span class="font-12 text-muted"><i
                                            class="fa fa-level-up"></i> 13%</span></h4>
                                <small class="text-muted">Analytics for last week</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card top_widget">
                        <div class="body">
                            <div class="icon"><i class="fa fa-users"></i> </div>
                            <div class="content">
                                <div class="text mb-2 text-uppercase">Users</div>
                                <h4 class="number mb-0">25K <span class="font-12 text-muted"><i
                                            class="fa fa-level-down"></i> 7%</span></h4>
                                <small class="text-muted">Analytics for last week</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card top_widget">
                        <div class="body">
                            <div class="icon"><i class="fa fa-user"></i> </div>
                            <div class="content">
                                <div class="text mb-2 text-uppercase">VISITORS</div>
                                <h4 class="number mb-0">21K <span class="font-12 text-muted"><i
                                            class="fa fa-level-down"></i> 4%</span></h4>
                                <small class="text-muted">Analytics for last week</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card top_widget">
                        <div class="body">
                            <div class="icon"><i class="fa fa-thumbs-up"></i> </div>
                            <div class="content">
                                <div class="text mb-2 text-uppercase">LIKES</div>
                                <h4 class="number mb-0">53K <span class="font-12 text-muted"><i
                                            class="fa fa-level-up"></i> 15%</span></h4>
                                <small class="text-muted">Analytics for last week</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row clearfix row-deck">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2>Google Analytics Dashboard</h2>
                            <ul class="header-dropdown">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown"
                                        role="button" aria-haspopup="true" aria-expanded="false"></a>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another Action</a></li>
                                        <li><a href="javascript:void(0);">Something else</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <select class="custom-select custom-select-sm">
                                        <option>Open this select menu</option>
                                        <option value="1">Sessions</option>
                                        <option value="2">Users</option>
                                        <option selected value="3">Page Views</option>
                                        <option value="4">Bounce Rate</option>
                                        <option value="5">Location</option>
                                        <option value="6">Pages</option>
                                        <option value="7">Referrers</option>
                                        <option value="8">Searches</option>
                                        <option value="9">Technology</option>
                                        <option value="10">404 Errors</option>
                                    </select>
                                </div>
                                <div class="d-flex">
                                    <button type="button" class="btn btn-outline-primary mr-2"><i
                                            class="fa fa-download"></i> Download report</button>
                                    <button type="button" class="btn btn-outline-secondary"><i class="fa fa-send"></i>
                                        Send report</button>
                                </div>
                            </div>
                            <div id="Google-Analytics-Dashboard" style="height: 230px"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row clearfix row-deck">
                <div class="col-lg-4 col-md-12">
                    <div class="card">
                        <div class="header">
                            <h2>Use by Device</h2>
                            <ul class="header-dropdown">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown"
                                        role="button" aria-haspopup="true" aria-expanded="false"></a>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another Action</a></li>
                                        <li><a href="javascript:void(0);">Something else</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div id="Use-by-Device" style="height: 16rem"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="card">
                        <div class="header">
                            <h2>Use by Audience</h2>
                            <ul class="header-dropdown">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown"
                                        role="button" aria-haspopup="true" aria-expanded="false"></a>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another Action</a></li>
                                        <li><a href="javascript:void(0);">Something else</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div id="Use-by-Audience" style="height: 16rem"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="card">
                        <div class="header">
                            <h2>Use by Browser</h2>
                            <ul class="header-dropdown">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown"
                                        role="button" aria-haspopup="true" aria-expanded="false"></a>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another Action</a></li>
                                        <li><a href="javascript:void(0);">Something else</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <table class="table mb-0">
                                <thead>
                                    <tr>
                                        <th>Browser</th>
                                        <th>Sessions</th>
                                        <th>Bounce rate</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Chrome</td>
                                        <td>23,233 <i class="fa fa-level-up"></i></td>
                                        <td>47.12%</td>
                                    </tr>
                                    <tr>
                                        <td>Firefox</td>
                                        <td>13,901 <i class="fa fa-level-up"></i></td>
                                        <td>33.02%</td>
                                    </tr>
                                    <tr>
                                        <td>Safari</td>
                                        <td>3,015 <i class="fa fa-level-up"></i></td>
                                        <td>24.12%</td>
                                    </tr>
                                    <tr>
                                        <td>Edge</td>
                                        <td>233 <i class="fa fa-level-down"></i></td>
                                        <td>17.33%</td>
                                    </tr>
                                    <tr>
                                        <td>Opera</td>
                                        <td>821 <i class="fa fa-level-down"></i></td>
                                        <td>7.12%</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
