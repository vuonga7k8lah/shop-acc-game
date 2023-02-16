<div class="col-md-6">
    <div class="card ">
        <div class="card-header">
            <h4 class="card-title">2015 Sales</h4>
            <p class="category">All products including Taxes</p>
        </div>
        <div class="card-content">
            <div id="chartActivity" class="ct-chart"></div>
        </div>
        <div class="card-footer">
            <div class="chart-legend">
                <i class="fa fa-circle text-info"></i> Tesla Model S
                <i class="fa fa-circle text-warning"></i> BMW 5 Series
            </div>
            <hr>
            <div class="stats">
                <i class="ti-check"></i> Data information certified
            </div>
        </div>
    </div>
</div>

<div class="col-md-6">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Users Behavior</h4>
            <p class="category">24 Hours performance</p>
        </div>
        <div class="content">
            <div id="chartHours" class="ct-chart"></div>
        </div>
        <div class="card-footer">
            <div class="chart-legend">
                <i class="fa fa-circle text-info"></i> Open
                <i class="fa fa-circle text-danger"></i> Click
                <i class="fa fa-circle text-warning"></i> Click Second Time
            </div>
            <hr>
            <div class="stats">
                <i class="ti-reload"></i> Updated 3 minutes ago
            </div>
        </div>
    </div>
</div>

<div class="col-md-12">
    <div class="card ">
        <div class="card-header">
            <h4 class="card-title">Global Sales by Top Locations</h4>
            <p class="category">All products that were shipped</p>
        </div>
        <div class="card-content">
            <div class="row">
                <div class="col-md-5">
                    <div class="table-responsive">
                        <table class="table">
                            <tbody>
                            <tr>
                                <td>
                                    <div class="flag">
                                        <img src="{{ asset('') }}assets/img/flags/US.png"
                                    </div>
                                </td>
                                <td>USA</td>
                                <td class="text-right">
                                    2.920
                                </td>
                                <td class="text-right">
                                    53.23%
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="flag">
                                        <img src="{{ asset('') }}assets/img/flags/DE.png"
                                    </div>
                                </td>
                                <td>Germany</td>
                                <td class="text-right">
                                    1.300
                                </td>
                                <td class="text-right">
                                    20.43%
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="flag">
                                        <img src="{{ asset('') }}assets/img/flags/AU.png"
                                    </div>
                                </td>
                                <td>Australia</td>
                                <td class="text-right">
                                    760
                                </td>
                                <td class="text-right">
                                    10.35%
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="flag">
                                        <img src="{{ asset('') }}assets/img/flags/GB.png"
                                    </div>
                                </td>
                                <td>United Kingdom</td>
                                <td class="text-right">
                                    690
                                </td>
                                <td class="text-right">
                                    7.87%
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="flag">
                                        <img src="{{ asset('') }}assets/img/flags/RO.png"
                                    </div>
                                </td>
                                <td>Romania</td>
                                <td class="text-right">
                                    600
                                </td>
                                <td class="text-right">
                                    5.94%
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="flag">
                                        <img src="{{ asset('') }}assets/img/flags/BR.png"
                                    </div>
                                </td>
                                <td>Brasil</td>
                                <td class="text-right">
                                    550
                                </td>
                                <td class="text-right">
                                    4.34%
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-md-6 col-md-offset-1">
                    <div id="worldMap" style="height: 300px;"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-md-6">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Tasks</h4>
            <p class="category">Backend development</p>
        </div>
        <div class="card-content">
            <div class="table-full-width table-tasks">
                <table class="table">
                    <tbody>
                    <tr>
                        <td>
                            <label class="checkbox">
                                <input type="checkbox" value="" data-toggle="checkbox">
                            </label>
                        </td>
                        <td>Sign contract for "What are conference organizers afraid of?"</td>
                        <td class="td-actions text-right">
                            <div class="table-icons">
                                <button type="button" rel="tooltip" title="Edit Task" class="btn btn-info btn-simple btn-xs">
                                    <i class="ti-pencil-alt"></i>
                                </button>
                                <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
                                    <i class="ti-close"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label class="checkbox">
                                <input type="checkbox" value="" data-toggle="checkbox" checked="">
                            </label>
                        </td>
                        <td>Lines From Great Russian Literature? Or E-mails From My Boss?</td>
                        <td class="td-actions text-right">
                            <div class="table-icons">
                                <button type="button" rel="tooltip" title="Edit Task" class="btn btn-info btn-simple btn-xs">
                                    <i class="ti-pencil-alt"></i>
                                </button>
                                <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
                                    <i class="ti-close"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label class="checkbox">
                                <input type="checkbox" value="" data-toggle="checkbox" checked="">
                            </label>
                        </td>
                        <td>Flooded: One year later, assessing what was lost and what was found when a ravaging rain swept through metro Detroit</td>
                        <td class="td-actions text-right">
                            <div class="table-icons">
                                <button type="button" rel="tooltip" title="Edit Task" class="btn btn-info btn-simple btn-xs">
                                    <i class="ti-pencil-alt"></i>
                                </button>
                                <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
                                    <i class="ti-close"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label class="checkbox">
                                <input type="checkbox" value="" data-toggle="checkbox">
                            </label>
                        </td>
                        <td>Create 4 Invisible User Experiences you Never Knew About</td>
                        <td class="td-actions text-right">
                            <div class="table-icons">
                                <button type="button" rel="tooltip" title="Edit Task" class="btn btn-info btn-simple btn-xs">
                                    <i class="ti-pencil-alt"></i>
                                </button>
                                <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
                                    <i class="ti-close"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label class="checkbox">
                                <input type="checkbox" value="" data-toggle="checkbox">
                            </label>
                        </td>
                        <td>Read "Following makes Medium better"</td>
                        <td class="td-actions text-right">
                            <div class="icons-table">
                                <button type="button" rel="tooltip" title="Edit Task" class="btn btn-info btn-simple btn-xs">
                                    <i class="ti-pencil-alt"></i>
                                </button>
                                <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
                                    <i class="ti-close"></i>
                                </button>
                            </div>

                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label class="checkbox">
                                <input type="checkbox" value="" data-toggle="checkbox">
                            </label>
                        </td>
                        <td>Unfollow 5 enemies from twitter</td>
                        <td class="td-actions text-right">
                            <div class="table-icons">
                                <button type="button" rel="tooltip" title="Edit Task" class="btn btn-info btn-simple btn-xs">
                                    <i class="ti-pencil-alt"></i>
                                </button>
                                <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
                                    <i class="ti-close"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="card-footer">
            <hr>
            <div class="stats">
                <i class="fa fa-history"></i> Updated 3 minutes ago
            </div>
        </div>
    </div>
    <div class="card card-chat">
        <div class="card-header">
            <h4 class="card-title">Chat</h4>
            <p class="category">With Tania Andrew</p>
        </div>
        <div class="card-content">
            <ol class="chat">
                <li class="other">
                    <div class="avatar">
                        <img src="{{ asset('') }}assets/img/faces/face-2.jpg" alt="crash"/>
                    </div>
                    <div class="msg">
                        <p>
                            Hola!
                            How are you?
                        </p>
                        <div class="card-footer">
                            <i class="ti-check"></i>
                            <h6>11:20</h6>
                        </div>
                    </div>
                </li>
                <li class="self">
                    <div class="msg">
                        <p>
                            Puff...
                            I'm alright. How are you?
                        </p>
                        <div class="card-footer">
                            <i class="ti-check"></i>
                            <h6>11:22</h6>
                        </div>
                    </div>
                    <div class="avatar">
                        <img src="{{ asset('') }}assets/img/default-avatar.png" alt="crash"/>
                    </div>
                </li>
                <li class="other">
                    <div class="avatar">
                        <img src="{{ asset('') }}assets/img/faces/face-2.jpg" alt="crash"/>
                    </div>
                    <div class="msg">
                        <p>
                            I'm ok too!
                        </p>
                        <div class="card-footer">
                            <i class="ti-check"></i>
                            <h6>11:24</h6>
                        </div>
                    </div>
                </li>
                <li class="self">
                    <div class="msg">
                        <p>
                            Well, it was nice hearing from you.
                        </p>
                        <div class="card-footer">
                            <i class="ti-check"></i>
                            <h6>11:25</h6>
                        </div>
                    </div>
                    <div class="no-avatar"></div>
                </li>
                <li class="self">
                    <div class="msg">
                        <p>
                            OK, bye-bye
                            See you!
                        </p>
                        <div class="card-footer">
                            <i class="ti-check"></i>
                            <h6>11:25</h6>
                        </div>
                    </div>
                    <div class="avatar">
                        <img src="{{ asset('') }}assets/img/default-avatar.png" alt="crash"/>
                    </div>
                </li>
            </ol>
            <hr>
            <div class="send-message">
                <div class="avatar">
                    <img src="{{ asset('') }}assets/img/default-avatar.png" alt="crash"/>
                </div>
                <input class="form-control textarea" type="text" placeholder="Type here!"/>
                <div class="send-button">
                    <button class="btn btn-primary btn-fill">Send</button>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-md-6">
    <div class="card card-timeline card-plain">
        <div class="card-content">
            <ul class="timeline timeline-simple">
                <li class="timeline-inverted">
                    <div class="timeline-badge danger">
                        <i class="ti-gallery"></i>
                    </div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <span class="label label-danger">Some title</span>
                        </div>
                        <div class="timeline-body">
                            <p>Wifey made the best Father's Day meal ever. So thankful so happy so blessed. Thank you for making my family We just had fun with the “future” theme !!!   It was a fun night all together ... The always rude Kanye Show at 2am Sold Out Famous viewing @ Figueroa and 12th in downtown.</p>
                        </div>
                        <h6>
                            <i class="ti-time"></i>
                            11 hours ago via Twitter
                        </h6>
                    </div>
                </li>
                <li class="timeline-inverted">
                    <div class="timeline-badge success">
                        <i class="ti-check-box"></i>
                    </div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <span class="label label-success">Another One</span>
                        </div>
                        <div class="timeline-body">
                            <p>Thank God for the support of my wife and real friends. I also wanted to point out that it’s the first album to go number 1 off of streaming!!! I love you Ellen and also my number one design rule of anything I do from shoes to music to homes is that Kim has to like it....</p>
                        </div>
                    </div>
                </li>
                <li class="timeline-inverted">
                    <div class="timeline-badge info">
                        <i class="ti-credit-card"></i>
                    </div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <span class="label label-info">Another Title</span>
                        </div>
                        <div class="timeline-body">
                            <p>Called I Miss the Old Kanye That’s all it was Kanye And I love you like Kanye loves Kanye Famous viewing @ Figueroa and 12th in downtown LA 11:10PM</p>
                            <p>What if Kanye made a song about Kanye Royère doesn't make a Polar bear bed but the Polar bear couch is my favorite piece of furniture we own It wasn’t any Kanyes Set on his goals Kanye</p>
                            <hr>
                            <div class="dropdown">
                                <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
                                    <i class="ti-settings"></i> <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-left" role="menu">
                                    <li><a href="#action">Action</a></li>
                                    <li><a href="#action">Another action</a></li>
                                    <li><a href="#here">Something else here</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#link">Separated link</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
