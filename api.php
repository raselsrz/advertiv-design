<?php include 'header.php'; ?>

<div class="main">
    <nav class="navbar navbar-expand navbar-light"><span class="sidebar-toggle d-flex"><i class="hamburger align-self-center"></i></span>
        <h1 class="h3 mt-2">API User Guide</h1>
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
                        <div class="card-body"><strong>API Secret Key:</strong><br>66819577-1c61-4166-992c-48a0e6141296 <button type="button" class="shadow-sm btn-sm  btn btn-outline-primary"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather"><rect x="9" y="9" width="13" height="13" rx="2" ry="2"></rect><path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path></svg></button>
                            <hr><button type="button" class="shadow-sm btn-sm  btn btn-outline-primary">Reset</button></div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <h3>API User Guide</h3>
                            <hr class="my-4">
                            <h4>Get Stats</h4>
                            <p class="text-lg"><span class="badge bg-success">GET</span> <code>https://access.advertiv.com/api/stats</code></p>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Parameters</th>
                                            <th>Mandatory</th>
                                            <th>Type</th>
                                            <th>Format</th>
                                            <th>Default</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>key</td>
                                            <td>Yes</td>
                                            <td>string</td>
                                            <td>XXXXXXXX-XXXX-XXXX-XXXX-XXXXXXXXXXXX</td>
                                            <td>-</td>
                                        </tr>
                                        <tr>
                                            <td>from</td>
                                            <td>No</td>
                                            <td>string</td>
                                            <td>YYYY-MM-DD</td>
                                            <td>2 days ago</td>
                                        </tr>
                                        <tr>
                                            <td>to</td>
                                            <td>No</td>
                                            <td>string</td>
                                            <td>YYYY-MM-DD</td>
                                            <td>Yesterday</td>
                                        </tr>
                                        <tr>
                                            <td>format</td>
                                            <td>No</td>
                                            <td>string</td>
                                            <td>json/csv</td>
                                            <td>csv</td>
                                        </tr>
                                        <tr>
                                            <td>columns</td>
                                            <td>No</td>
                                            <td>comma delimited string</td>
                                            <td>date, pub_id, sub_id, campaign_id, country_name, country_code, total_searches, monetized_searches, clicks, revenue, epc, rpm, monetized_ctr</td>
                                            <td>return all columns</td>
                                        </tr>
                                        <tr>
                                            <td>campaigns</td>
                                            <td>No</td>
                                            <td>comma delimited string</td>
                                            <td>Filtering by Campaigns ID</td>
                                            <td>return all campaigns</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <h3> Request Examples</h3>
                            <pre class="rounded p-3 border" style="display: block; background: white; padding: 0.5em; color: rgb(51, 51, 51); overflow-x: auto;"><code class="language-javascript" style="white-space: pre;"><span> curl --request GET \
</span><span>     --url </span><span style="color: rgb(3, 47, 98);">'https://access.advertiv.com/api/stats?key=f658fef9-c00d-40a9-9cbe-d6d39b9dee8a&amp;from=2023-06-01&amp;columns=date,campaign_id,country_code,total_searches,monetized_searches,clicks,revenue&amp;campaigns=1290,1612'</span><span> \
</span><span>     --header </span><span style="color: rgb(3, 47, 98);">'accept: application/json'</span><span> </span></code></pre>
                            <h3> Response Examples</h3>
                            <pre class="rounded p-3 border" style="display: block; background: white; padding: 0.5em; color: rgb(51, 51, 51); overflow-x: auto;"><code class="language-javascript" style="white-space: pre;"><span>{
</span><span>    </span><span style="color: rgb(3, 47, 98);">"success"</span><span>: </span><span style="color: rgb(0, 134, 179);">true</span><span>,
</span><span>    </span><span style="color: rgb(3, 47, 98);">"results"</span><span>: [
</span>        [
            {
<span>                </span><span style="color: rgb(3, 47, 98);">"date"</span><span>: </span><span style="color: rgb(3, 47, 98);">"2023-06-20"</span><span>,
</span><span>                </span><span style="color: rgb(3, 47, 98);">"campaign_id"</span><span>: </span><span style="color: rgb(0, 92, 197);">1290</span><span>,
</span><span>                </span><span style="color: rgb(3, 47, 98);">"country_code"</span><span>: </span><span style="color: rgb(3, 47, 98);">"US"</span><span>,
</span><span>                </span><span style="color: rgb(3, 47, 98);">"total_searches"</span><span>: </span><span style="color: rgb(0, 92, 197);">6807</span><span>,
</span><span>                </span><span style="color: rgb(3, 47, 98);">"monetized_searches"</span><span>: </span><span style="color: rgb(0, 92, 197);">2337</span><span>,
</span><span>                </span><span style="color: rgb(3, 47, 98);">"clicks"</span><span>: </span><span style="color: rgb(0, 92, 197);">362</span><span>,
</span><span>                </span><span style="color: rgb(3, 47, 98);">"revenue"</span><span>: </span><span style="color: rgb(0, 92, 197);">61.62</span><span>
</span>            },
            {
<span>                </span><span style="color: rgb(3, 47, 98);">"date"</span><span>: </span><span style="color: rgb(3, 47, 98);">"2023-06-20"</span><span>,
</span><span>                </span><span style="color: rgb(3, 47, 98);">"campaign_id"</span><span>: </span><span style="color: rgb(0, 92, 197);">1290</span><span>,
</span><span>                </span><span style="color: rgb(3, 47, 98);">"country_code"</span><span>: </span><span style="color: rgb(3, 47, 98);">"CA"</span><span>,
</span><span>                </span><span style="color: rgb(3, 47, 98);">"total_searches"</span><span>: </span><span style="color: rgb(0, 92, 197);">2551</span><span>,
</span><span>                </span><span style="color: rgb(3, 47, 98);">"monetized_searches"</span><span>: </span><span style="color: rgb(0, 92, 197);">2168</span><span>,
</span><span>                </span><span style="color: rgb(3, 47, 98);">"clicks"</span><span>: </span><span style="color: rgb(0, 92, 197);">205</span><span>,
</span><span>                </span><span style="color: rgb(3, 47, 98);">"revenue"</span><span>: </span><span style="color: rgb(0, 92, 197);">83.47</span><span>
</span>            },
            {
<span>                </span><span style="color: rgb(3, 47, 98);">"date"</span><span>: </span><span style="color: rgb(3, 47, 98);">"2023-06-18"</span><span>,
</span><span>                </span><span style="color: rgb(3, 47, 98);">"campaign_id"</span><span>: </span><span style="color: rgb(0, 92, 197);">1612</span><span>,
</span><span>                </span><span style="color: rgb(3, 47, 98);">"campaign_name"</span><span>: </span><span style="color: rgb(3, 47, 98);">"Example campaign 2"</span><span>,
</span><span>                </span><span style="color: rgb(3, 47, 98);">"country_code"</span><span>: </span><span style="color: rgb(3, 47, 98);">"US"</span><span>,
</span><span>                </span><span style="color: rgb(3, 47, 98);">"total_searches"</span><span>: </span><span style="color: rgb(0, 92, 197);">9131</span><span>,
</span><span>                </span><span style="color: rgb(3, 47, 98);">"monetized_searches"</span><span>: </span><span style="color: rgb(0, 92, 197);">672</span><span>,
</span><span>                </span><span style="color: rgb(3, 47, 98);">"clicks"</span><span>: </span><span style="color: rgb(0, 92, 197);">54</span><span>,
</span><span>                </span><span style="color: rgb(3, 47, 98);">"revenue"</span><span>: </span><span style="color: rgb(0, 92, 197);">19.18</span><span>
</span>            }
        ]
    ]
}</code></pre>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <h3>Rate Limit</h3>
                            <hr class="my-4">
                            <p class="text-lg">In order to protect its API and ensure smooth and uninterrupted usage by its users.<br><br>An overall limit of <strong>60 requests per minute</strong> per account will be allowed.<br><br>The timeframe is a sliding window and
                                not a calendric one.<br><br>Upon failing to make an API call due to hitting the limit, the API will return a 429 error (Rate Limit Exceeded).</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <h3> Response Messages</h3>
                            <hr class="my-4">
                            <p class="text-lg">Each server response returns an http code and returns a json response (except when using csv format, returns http code and data if they exist).</p>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Code</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>200</td>
                                        <td>Request was successful, full or empty data is returned</td>
                                    </tr>
                                    <tr>
                                        <td>400</td>
                                        <td>Invalid request query string. Invalid or empty columns.</td>
                                    </tr>
                                    <tr>
                                        <td>401</td>
                                        <td>Invalid API key</td>
                                    </tr>
                                    <tr>
                                        <td>429</td>
                                        <td>Too Many Requests</td>
                                    </tr>
                                    <tr>
                                        <td>500</td>
                                        <td>Server error</td>
                                    </tr>
                                </tbody>
                            </table>
                            <h3> Response Example With Error</h3>
                            <pre class="rounded p-3 border" style="display: block; background: white; padding: 0.5em; color: rgb(51, 51, 51); overflow-x: auto;"><code class="language-javascript" style="white-space: pre;"><span>{
</span><span>    </span><span style="color: rgb(3, 47, 98);">"code"</span><span>: </span><span style="color: rgb(0, 92, 197);">429</span><span>,
</span><span>    </span><span style="color: rgb(3, 47, 98);">"success"</span><span>: </span><span style="color: rgb(0, 134, 179);">false</span><span>,
</span><span>    </span><span style="color: rgb(3, 47, 98);">"error"</span><span>: </span><span style="color: rgb(3, 47, 98);">"Rate Limit Exceeded"</span><span>
</span>}</code></pre>
                        </div>
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