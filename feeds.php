<?php include 'header.php'; ?>

<div class="main">
    <nav class="navbar navbar-expand navbar-light"><span class="sidebar-toggle d-flex"><i class="hamburger align-self-center"></i></span>
        <h1 class="h3 mt-2">Allocated Feeds</h1>
        <div class="navbar-collapse collapse">
            <div class="navbar-align navbar-nav">
                <div class="nav-item dropdown"><span class="d-inline-block d-sm-none"><a class="nav-link dropdown-toggle" id="react-aria7096544096-:r0:" aria-expanded="false"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="align-middle"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path></svg></a></span>
                    <span class="d-none d-sm-inline-block"><a class="nav-link dropdown-toggle" id="react-aria7096544096-:r1:" aria-expanded="false"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="stat stat-sm lign-middle me-1"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg><span class="text-dark">lrtechnologyltd@gmail.com</span></a>
                    </span>
                </div>
            </div>
        </div>
    </nav>
    <div class="content">
        <div class="p-0 container-fluid">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-body" style="padding-top: 0px;">
                            <div class="row"></div>
                            <div class="mb-2 mt-3 mb-xl-3 row">
                                <div class="ms-auto text-end col-auto">
                                    <div class="row">
                                        <div class="ms-auto text-end  col-auto"><button type="button" id="filters" class="shadow-sm me-1 btn btn-primary"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather"><polygon points="22 3 2 3 10 12.46 10 19 14 21 14 12.46 22 3"></polygon></svg></button>
                                            <button type="button" id="refresh-table" class="shadow-sm me-1  btn btn-primary"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather"><polyline points="23 4 23 10 17 10"></polyline><polyline points="1 20 1 14 7 14"></polyline><path d="M3.51 9a9 9 0 0 1 14.85-3.36L23 10M1 14l4.64 4.36A9 9 0 0 0 20.49 15"></path></svg></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="row">
                                    <div class="col-md-3"><input type="search" placeholder="Search" class="input input-bordered input-sm w-full max-w-xs focus:outline-0 mb-2 self-end form-control" value=""></div>
                                </div>
                            </div>
                            <div id="statistics-table" class="table-wrapper" style="height: 207px;">
                                <table role="table" class="sticky big-row table table-hover">
                                    <thead>
                                        <tr role="row">
                                            <th colspan="1" role="columnheader" class="light" style="position: relative;">
                                                <div>Actions<span></span></div>
                                            </th>
                                            <th colspan="1" role="columnheader" class="light" style="position: relative;">
                                                <div title="Toggle SortBy" style="cursor: pointer;">Feed Status<span><svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="sort" class="svg-inline--fa fa-sort ms-2" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path fill="currentColor" d="M137.4 41.4c12.5-12.5 32.8-12.5 45.3 0l128 128c9.2 9.2 11.9 22.9 6.9 34.9s-16.6 19.8-29.6 19.8H32c-12.9 0-24.6-7.8-29.6-19.8s-2.2-25.7 6.9-34.9l128-128zm0 429.3l-128-128c-9.2-9.2-11.9-22.9-6.9-34.9s16.6-19.8 29.6-19.8H288c12.9 0 24.6 7.8 29.6 19.8s2.2 25.7-6.9 34.9l-128 128c-12.5 12.5-32.8 12.5-45.3 0z"></path></svg></span></div>
                                            </th>
                                            <th colspan="1" role="columnheader" class="light" style="position: relative;">
                                                <div title="Toggle SortBy" style="cursor: pointer;">Source<span><svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="sort" class="svg-inline--fa fa-sort ms-2" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path fill="currentColor" d="M137.4 41.4c12.5-12.5 32.8-12.5 45.3 0l128 128c9.2 9.2 11.9 22.9 6.9 34.9s-16.6 19.8-29.6 19.8H32c-12.9 0-24.6-7.8-29.6-19.8s-2.2-25.7 6.9-34.9l128-128zm0 429.3l-128-128c-9.2-9.2-11.9-22.9-6.9-34.9s16.6-19.8 29.6-19.8H288c12.9 0 24.6 7.8 29.6 19.8s2.2 25.7-6.9 34.9l-128 128c-12.5 12.5-32.8 12.5-45.3 0z"></path></svg></span></div>
                                            </th>
                                            <th colspan="1" role="columnheader" class="light" style="position: relative;">
                                                <div title="Toggle SortBy" style="cursor: pointer;">Source CAP<span><svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="sort" class="svg-inline--fa fa-sort ms-2" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path fill="currentColor" d="M137.4 41.4c12.5-12.5 32.8-12.5 45.3 0l128 128c9.2 9.2 11.9 22.9 6.9 34.9s-16.6 19.8-29.6 19.8H32c-12.9 0-24.6-7.8-29.6-19.8s-2.2-25.7 6.9-34.9l128-128zm0 429.3l-128-128c-9.2-9.2-11.9-22.9-6.9-34.9s16.6-19.8 29.6-19.8H288c12.9 0 24.6 7.8 29.6 19.8s2.2 25.7-6.9 34.9l-128 128c-12.5 12.5-32.8 12.5-45.3 0z"></path></svg></span></div>
                                            </th>
                                            <th colspan="1" role="columnheader" class="light" style="position: relative;">
                                                <div title="Toggle SortBy" style="cursor: pointer;">Pub Total CAP<span><svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="sort" class="svg-inline--fa fa-sort ms-2" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path fill="currentColor" d="M137.4 41.4c12.5-12.5 32.8-12.5 45.3 0l128 128c9.2 9.2 11.9 22.9 6.9 34.9s-16.6 19.8-29.6 19.8H32c-12.9 0-24.6-7.8-29.6-19.8s-2.2-25.7 6.9-34.9l128-128zm0 429.3l-128-128c-9.2-9.2-11.9-22.9-6.9-34.9s16.6-19.8 29.6-19.8H288c12.9 0 24.6 7.8 29.6 19.8s2.2 25.7-6.9 34.9l-128 128c-12.5 12.5-32.8 12.5-45.3 0z"></path></svg></span></div>
                                            </th>
                                            <th colspan="1" role="columnheader" class="light" style="position: relative;">
                                                <div title="Toggle SortBy" style="cursor: pointer;">Yesterday Gross Searches<span><svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="sort" class="svg-inline--fa fa-sort ms-2" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path fill="currentColor" d="M137.4 41.4c12.5-12.5 32.8-12.5 45.3 0l128 128c9.2 9.2 11.9 22.9 6.9 34.9s-16.6 19.8-29.6 19.8H32c-12.9 0-24.6-7.8-29.6-19.8s-2.2-25.7 6.9-34.9l128-128zm0 429.3l-128-128c-9.2-9.2-11.9-22.9-6.9-34.9s16.6-19.8 29.6-19.8H288c12.9 0 24.6 7.8 29.6 19.8s2.2 25.7-6.9 34.9l-128 128c-12.5 12.5-32.8 12.5-45.3 0z"></path></svg></span></div>
                                            </th>
                                            <th colspan="1" role="columnheader" class="light" style="position: relative;">
                                                <div title="Toggle SortBy" style="cursor: pointer;">Date<span><svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="sort-down" class="svg-inline--fa fa-sort-down ms-2" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path fill="currentColor" d="M182.6 470.6c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-9.2-9.2-11.9-22.9-6.9-34.9s16.6-19.8 29.6-19.8H288c12.9 0 24.6 7.8 29.6 19.8s2.2 25.7-6.9 34.9l-128 128z"></path></svg></span></div>
                                            </th>
                                            <th colspan="1" role="columnheader" class="light" style="position: relative;">
                                                <div title="Toggle SortBy" style="cursor: pointer;">Type<span><svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="sort" class="svg-inline--fa fa-sort ms-2" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path fill="currentColor" d="M137.4 41.4c12.5-12.5 32.8-12.5 45.3 0l128 128c9.2 9.2 11.9 22.9 6.9 34.9s-16.6 19.8-29.6 19.8H32c-12.9 0-24.6-7.8-29.6-19.8s-2.2-25.7 6.9-34.9l128-128zm0 429.3l-128-128c-9.2-9.2-11.9-22.9-6.9-34.9s16.6-19.8 29.6-19.8H288c12.9 0 24.6 7.8 29.6 19.8s2.2 25.7-6.9 34.9l-128 128c-12.5 12.5-32.8 12.5-45.3 0z"></path></svg></span></div>
                                            </th>
                                            <th colspan="1" role="columnheader" class="light" style="position: relative;">
                                                <div title="Toggle SortBy" style="cursor: pointer;">Campaign ID<span><svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="sort" class="svg-inline--fa fa-sort ms-2" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path fill="currentColor" d="M137.4 41.4c12.5-12.5 32.8-12.5 45.3 0l128 128c9.2 9.2 11.9 22.9 6.9 34.9s-16.6 19.8-29.6 19.8H32c-12.9 0-24.6-7.8-29.6-19.8s-2.2-25.7 6.9-34.9l128-128zm0 429.3l-128-128c-9.2-9.2-11.9-22.9-6.9-34.9s16.6-19.8 29.6-19.8H288c12.9 0 24.6 7.8 29.6 19.8s2.2 25.7-6.9 34.9l-128 128c-12.5 12.5-32.8 12.5-45.3 0z"></path></svg></span></div>
                                            </th>
                                            <th colspan="1" role="columnheader" class="light" style="position: relative;">
                                                <div>Allowed Devices<span></span></div>
                                            </th>
                                            <th colspan="1" role="columnheader" class="light" style="position: relative;">
                                                <div>Allowed Browsers<span></span></div>
                                            </th>
                                            <th colspan="1" role="columnheader" class="light" style="position: relative;">
                                                <div title="Toggle SortBy" style="cursor: pointer;">Allowed GEO<span><svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="sort" class="svg-inline--fa fa-sort ms-2" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path fill="currentColor" d="M137.4 41.4c12.5-12.5 32.8-12.5 45.3 0l128 128c9.2 9.2 11.9 22.9 6.9 34.9s-16.6 19.8-29.6 19.8H32c-12.9 0-24.6-7.8-29.6-19.8s-2.2-25.7 6.9-34.9l128-128zm0 429.3l-128-128c-9.2-9.2-11.9-22.9-6.9-34.9s16.6-19.8 29.6-19.8H288c12.9 0 24.6 7.8 29.6 19.8s2.2 25.7-6.9 34.9l-128 128c-12.5 12.5-32.8 12.5-45.3 0z"></path></svg></span></div>
                                            </th>
                                            <th colspan="1" role="columnheader" class="light" style="position: relative;">
                                                <div title="Toggle SortBy" style="cursor: pointer;">Allowed Sources<span><svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="sort" class="svg-inline--fa fa-sort ms-2" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path fill="currentColor" d="M137.4 41.4c12.5-12.5 32.8-12.5 45.3 0l128 128c9.2 9.2 11.9 22.9 6.9 34.9s-16.6 19.8-29.6 19.8H32c-12.9 0-24.6-7.8-29.6-19.8s-2.2-25.7 6.9-34.9l128-128zm0 429.3l-128-128c-9.2-9.2-11.9-22.9-6.9-34.9s16.6-19.8 29.6-19.8H288c12.9 0 24.6 7.8 29.6 19.8s2.2 25.7-6.9 34.9l-128 128c-12.5 12.5-32.8 12.5-45.3 0z"></path></svg></span></div>
                                            </th>
                                            <th colspan="1" role="columnheader" class="light" style="position: relative;">
                                                <div>Referrer<span></span></div>
                                            </th>
                                            <th colspan="1" role="columnheader" class="light" style="position: relative;">
                                                <div>Link<span></span></div>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody role="rowgroup">
                                        <tr role="row" class="">
                                            <td role="cell" style="width: 80px;">
                                                <div class="ms-auto col-auto"><button type="button" class="shadow-sm me-1 btn-xs  t-copy btn btn-outline-primary"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather"><rect x="9" y="9" width="13" height="13" rx="2" ry="2"></rect><path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path></svg></button></div>
                                            </td>
                                            <td role="cell" style="width: 120px;"><span class="badge bg-success">Active</span></td>
                                            <td role="cell" style="width: 80px;">929</td>
                                            <td role="cell" style="width: 80px;">10,000</td>
                                            <td role="cell" style="width: 130px;">10,000</td>
                                            <td role="cell" style="width: 200px;">0</td>
                                            <td role="cell" style="width: 155px;">03-Jul-2024 09:27:30</td>
                                            <td role="cell" style="width: 85px;">ARB</td>
                                            <td role="cell" style="width: 120px;"><span class="badge bg-info">6824</span></td>
                                            <td role="cell" style="width: 150px;">Desktop, Mobile</td>
                                            <td role="cell" style="width: 200px;">All Browsers</td>
                                            <td role="cell" style="width: 120px;">US</td>
                                            <td role="cell" style="width: 140px;">Facebook</td>
                                            <td role="cell" style="width: 200px;">Mandatory and from allowed sources only</td>
                                            <td role="cell" style="width: 500px;"><a rel="noopener noreferrer" href="https://bestresults.us/click?campaign_id=6824&amp;pub_id=929&amp;source=929&amp;p1=KEYWORD" target="_blank">https://bestresults.us/click?campaign_id=6824&amp;pub_id=929&amp;source=929&amp;p1=KEYWORD</a></td>
                                        </tr>
                                        <tr role="row" class="">
                                            <td role="cell" style="width: 80px;">
                                                <div class="ms-auto col-auto"><button type="button" class="shadow-sm me-1 btn-xs  t-copy btn btn-outline-primary"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather"><rect x="9" y="9" width="13" height="13" rx="2" ry="2"></rect><path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path></svg></button></div>
                                            </td>
                                            <td role="cell" style="width: 120px;"><span class="badge bg-success">Active</span></td>
                                            <td role="cell" style="width: 80px;">929</td>
                                            <td role="cell" style="width: 80px;">10,000</td>
                                            <td role="cell" style="width: 130px;">10,000</td>
                                            <td role="cell" style="width: 200px;">0</td>
                                            <td role="cell" style="width: 155px;">20-Jun-2024 08:23:33</td>
                                            <td role="cell" style="width: 85px;">ARB</td>
                                            <td role="cell" style="width: 120px;"><span class="badge bg-info">7122</span></td>
                                            <td role="cell" style="width: 150px;">Desktop, Mobile</td>
                                            <td role="cell" style="width: 200px;">All Browsers</td>
                                            <td role="cell" style="width: 120px;">US, UK, CA, EU, AU</td>
                                            <td role="cell" style="width: 140px;">No Restrictions</td>
                                            <td role="cell" style="width: 200px;">Mandatory</td>
                                            <td role="cell" style="width: 500px;"><a rel="noopener noreferrer" href="https://bestresults.us/click?campaign_id=7122&amp;pub_id=929&amp;source=929&amp;p1=KEYWORD" target="_blank">https://bestresults.us/click?campaign_id=7122&amp;pub_id=929&amp;source=929&amp;p1=KEYWORD</a></td>
                                        </tr>
                                        <tr role="row" class="">
                                            <td role="cell" style="width: 80px;">
                                                <div class="ms-auto col-auto"><button type="button" class="shadow-sm me-1 btn-xs  t-copy btn btn-outline-primary"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather"><rect x="9" y="9" width="13" height="13" rx="2" ry="2"></rect><path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path></svg></button></div>
                                            </td>
                                            <td role="cell" style="width: 120px;"><span class="badge bg-success">Active</span></td>
                                            <td role="cell" style="width: 80px;">929</td>
                                            <td role="cell" style="width: 80px;">10,000</td>
                                            <td role="cell" style="width: 130px;">10,000</td>
                                            <td role="cell" style="width: 200px;">0</td>
                                            <td role="cell" style="width: 155px;">07-Jun-2024 08:08:11</td>
                                            <td role="cell" style="width: 85px;">ARB</td>
                                            <td role="cell" style="width: 120px;"><span class="badge bg-info">6420</span></td>
                                            <td role="cell" style="width: 150px;">Desktop, Mobile</td>
                                            <td role="cell" style="width: 200px;">All Browsers</td>
                                            <td role="cell" style="width: 120px;">US</td>
                                            <td role="cell" style="width: 140px;">No Restrictions</td>
                                            <td role="cell" style="width: 200px;">Mandatory</td>
                                            <td role="cell" style="width: 500px;"><a rel="noopener noreferrer" href="https://bestresults.us/click?campaign_id=6420&amp;pub_id=929&amp;source=929&amp;p1=KEYWORD" target="_blank">https://bestresults.us/click?campaign_id=6420&amp;pub_id=929&amp;source=929&amp;p1=KEYWORD</a></td>
                                        </tr>
                                        <tr role="row" class="">
                                            <td role="cell" style="width: 80px;">
                                                <div class="ms-auto col-auto"><button type="button" class="shadow-sm me-1 btn-xs  t-copy btn btn-outline-primary"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather"><rect x="9" y="9" width="13" height="13" rx="2" ry="2"></rect><path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path></svg></button></div>
                                            </td>
                                            <td role="cell" style="width: 120px;"><span class="badge bg-success">Active</span></td>
                                            <td role="cell" style="width: 80px;">929</td>
                                            <td role="cell" style="width: 80px;">20,000</td>
                                            <td role="cell" style="width: 130px;">20,000</td>
                                            <td role="cell" style="width: 200px;">0</td>
                                            <td role="cell" style="width: 155px;">04-Apr-2024 09:33:44</td>
                                            <td role="cell" style="width: 85px;">ARB</td>
                                            <td role="cell" style="width: 120px;"><span class="badge bg-info">5863</span></td>
                                            <td role="cell" style="width: 150px;">Desktop, Mobile</td>
                                            <td role="cell" style="width: 200px;">All Browsers</td>
                                            <td role="cell" style="width: 120px;">US</td>
                                            <td role="cell" style="width: 140px;">No Restrictions</td>
                                            <td role="cell" style="width: 200px;">Mandatory</td>
                                            <td role="cell" style="width: 500px;"><a rel="noopener noreferrer" href="https://bestresults.us/click?campaign_id=5863&amp;pub_id=929&amp;source=929&amp;p1=KEYWORD" target="_blank">https://bestresults.us/click?campaign_id=5863&amp;pub_id=929&amp;source=929&amp;p1=KEYWORD</a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="row">
                                <div class="mt-2 col-md-8">
                                    <div class="row">
                                        <div class="col-auto"><span class="me-3">Page <strong>1 of 1</strong></span></div>
                                        <div class="col-auto"><span class="me-2">Show:</span><select class="d-inline-block w-auto mb-1 form-select"><option value="50">50</option><option value="100">100</option><option value="200">200</option><option value="300">300</option><option value="400">400</option><option value="500">500</option></select>
                                            <span class="ms-3 me-2">Go to page:</span><input type="number" class="d-inline-block form-control" value="1" style="width: 75px;"></div>
                                    </div>
                                </div>
                                <div class="mt-2 col-md-4">
                                    <ul class="float-end pagination">
                                        <li class="page-item disabled"><span class="page-link"><span aria-hidden="true">«</span><span class="visually-hidden">First</span></span>
                                        </li>
                                        <li class="page-item disabled"><span class="page-link"><span aria-hidden="true">‹</span><span class="visually-hidden">Previous</span></span>
                                        </li>
                                        <li class="page-item disabled"><span class="page-link"><span aria-hidden="true">›</span><span class="visually-hidden">Next</span></span>
                                        </li>
                                        <li class="page-item disabled"><span class="page-link"><span aria-hidden="true">»</span><span class="visually-hidden">Last</span></span>
                                        </li>
                                    </ul>
                                </div>
                                <pre></pre>
                            </div><span class="card-subtitle text-muted"><b>* Temp Paused</b>  - means that Feed reached it's CAP and automatically paused on Trackier, will be reactivated at 12am automatically</span></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer fixed-footer">
        <div class="container-fluid">
            <div class="text-muted row">
                <div class="text-start col-6">
                    <ul class="list-inline">
                        <li class="list-inline-item"><b>All numbers are subject to change upon receiving final monthly traffic statistics and payments from advertisers.</b></li>
                    </ul>
                </div>
                <div class="text-end col-6">
                    <p class="mb-0">© 2024 - <span class="text-muted">Advertiv</span></p>
                </div>
            </div>
        </div>
    </footer>
</div>
</div>
</div>

<?php include 'footer.php'; ?>