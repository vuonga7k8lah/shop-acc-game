
<div class="sidebar-wrapper">
    <div class="user">
        <div class="photo">
            <img src="{{ asset('') }}assets/img/faces/face-2.jpg" />
        </div>
        <div class="info">
            <a data-toggle="collapse" href="#collapseExample" class="collapsed">
	                        <span>
								Vuong Kma
		                        <b class="caret"></b>
							</span>
            </a>
            <div class="clearfix"></div>

            <div class="collapse" id="collapseExample">
                <ul class="nav">
                    <li>
                        <a href="#profile">
                            <span class="sidebar-mini">Mp</span>
                            <span class="sidebar-normal">My Profile</span>
                        </a>
                    </li>
                    <li>
                        <a href="#edit">
                            <span class="sidebar-mini">Ep</span>
                            <span class="sidebar-normal">Edit Profile</span>
                        </a>
                    </li>
                    <li>
                        <a href="#settings">
                            <span class="sidebar-mini">S</span>
                            <span class="sidebar-normal">Settings</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <ul class="nav">
        <li>
            <a data-toggle="collapse" href="#dashboardOverview">
                <i class="ti-panel"></i>
                <p>Dashboard
                    <b class="caret"></b>
                </p>
            </a>
            <div class="collapse" id="dashboardOverview">
                <ul class="nav">
                    <li>
                        <a href="../dashboard/overview.html">
                            <span class="sidebar-mini">O</span>
                            <span class="sidebar-normal">Overview</span>
                        </a>
                    </li>
                    <li >
                        <a href="../dashboard/stats.html">
                            <span class="sidebar-mini">S</span>
                            <span class="sidebar-normal">Stats</span>
                        </a>
                    </li>
                </ul>
            </div>
        </li>

        <li class="<?=strpos(\Illuminate\Support\Facades\Route::currentRouteName(),'categoryProduct')!==false?'active':''?>">
            <a data-toggle="collapse" href="#categoryProduct">
                <i class="ti-package"></i>
                <p>Category Product<b class="caret"></b>
                </p>
            </a>
            <div class="collapse <?=strpos(\Illuminate\Support\Facades\Route::currentRouteName(),'categoryProduct')
            !==false?'in':''?>"
                 id="categoryProduct">
                <ul class="nav">
                    <li class="<?=\Illuminate\Support\Facades\Route::currentRouteName()=='categoryProduct.index'?'active':''?>">
                        <a href="{{route('categoryProduct.index')}}">
                            <span class="sidebar-mini">Rf</span>
                            <span class="sidebar-normal">List</span>
                        </a>
                    </li>
                    <li class="<?=\Illuminate\Support\Facades\Route::currentRouteName()=='categoryProduct.create'?'active':''?>">
                        <a href="{{route('categoryProduct.create')}}">
                            <span class="sidebar-mini">Rf</span>
                            <span class="sidebar-normal">Add</span>
                        </a>
                    </li>

                </ul>
            </div>
        </li>
        <li class="<?=strpos(\Illuminate\Support\Facades\Route::currentRouteName(),'adminMenu')!==false?'active':''?>">
            <a data-toggle="collapse" href="#adminMenu">
                <i class="ti-clipboard"></i>
                <p>Menu<b class="caret"></b>
                </p>
            </a>
            <div class="collapse <?=strpos(\Illuminate\Support\Facades\Route::currentRouteName(),'adminMenu')
            !==false?'in':''?>"
                 id="adminMenu">
                <ul class="nav">
                    <li class="<?=\Illuminate\Support\Facades\Route::currentRouteName()=='adminMenu.index'?'active':''?>">
                        <a href="{{route('adminMenu.index')}}">
                            <span class="sidebar-mini">MN</span>
                            <span class="sidebar-normal">List</span>
                        </a>
                    </li>
                    <li class="<?=\Illuminate\Support\Facades\Route::currentRouteName()=='adminMenu.create'?'active':''?>">
                        <a href="{{route('adminMenu.create')}}">
                            <span class="sidebar-mini">MN</span>
                            <span class="sidebar-normal">Add</span>
                        </a>
                    </li>

                </ul>
            </div>
        </li>
        <li class="<?=strpos(\Illuminate\Support\Facades\Route::currentRouteName(),'adminProduct')
        !==false?'active':''?>">
            <a data-toggle="collapse" href="#adminProducts">
                <i class="ti-harddrives"></i>
                <p>Products
                    <b class="caret"></b>
                </p>
            </a>
            <div class="collapse <?=strpos(\Illuminate\Support\Facades\Route::currentRouteName(),'adminProduct')
            !==false?'in':''?>" id="adminProducts">
                <ul class="nav ">
                    <li class="<?=\Illuminate\Support\Facades\Route::currentRouteName()=='adminProduct.index'?'active':''?>">
                        <a href="{{route('adminProduct.index')}}">
                            <span class="sidebar-mini">MN</span>
                            <span class="sidebar-normal">List</span>
                        </a>
                    </li>
                    <li class="<?=\Illuminate\Support\Facades\Route::currentRouteName()=='adminProduct.create'?'active':''?>">
                        <a href="{{route('adminProduct.create')}}">
                            <span class="sidebar-mini">MN</span>
                            <span class="sidebar-normal">Add</span>
                        </a>
                    </li>
                </ul>
            </div>
        </li>
        <li>
            <a data-toggle="collapse" href="#formsExamples">
                <i class="ti-clipboard"></i>
                <p>
                    Forms
                    <b class="caret"></b>
                </p>
            </a>
            <div class="collapse" id="formsExamples">
                <ul class="nav">
                    <li>
                        <a href="../forms/regular.html">
                            <span class="sidebar-mini">Rf</span>
                            <span class="sidebar-normal">Regular Forms</span>
                        </a>
                    </li>
                    <li>
                        <a href="../forms/extended.html">
                            <span class="sidebar-mini">Ef</span>
                            <span class="sidebar-normal">Extended Forms</span>
                        </a>
                    </li>
                    <li>
                        <a href="../forms/validation.html">
                            <span class="sidebar-mini">Vf</span>
                            <span class="sidebar-normal">Validation Forms</span>
                        </a>
                    </li>
                    <li>
                        <a href="../forms/wizard.html">
                            <span class="sidebar-mini">W</span>
                            <span class="sidebar-normal">Wizard</span>
                        </a>
                    </li>
                </ul>
            </div>
        </li>
        <li>
            <a data-toggle="collapse" href="#tablesExamples">
                <i class="ti-view-list-alt"></i>
                <p>
                    Table list
                    <b class="caret"></b>
                </p>
            </a>
            <div class="collapse" id="tablesExamples">
                <ul class="nav">
                    <li>
                        <a href="../tables/regular.html">
                            <span class="sidebar-mini">RT</span>
                            <span class="sidebar-normal">Regular Tables</span>
                        </a>
                    </li>
                    <li>
                        <a href="../tables/extended.html">
                            <span class="sidebar-mini">ET</span>
                            <span class="sidebar-normal">Extended Tables</span>
                        </a>
                    </li>
                    <li>
                        <a href="../tables/bootstrap-table.html">
                            <span class="sidebar-mini">BT</span>
                            <span class="sidebar-normal">Bootstrap Table</span>
                        </a>
                    </li>
                    <li>
                        <a href="../tables/datatables.net.html">
                            <span class="sidebar-mini">DT</span>
                            <span class="sidebar-normal">DataTables.net</span>
                        </a>
                    </li>
                </ul>
            </div>
        </li>
        <li>
            <a data-toggle="collapse" href="#mapsExamples">
                <i class="ti-map"></i>
                <p>
                    Maps
                    <b class="caret"></b>
                </p>
            </a>
            <div class="collapse" id="mapsExamples">
                <ul class="nav">
                    <li>
                        <a href="../maps/google.html">
                            <span class="sidebar-mini">GM</span>
                            <span class="sidebar-normal">Google Maps</span>
                        </a>
                    </li>
                    <li>
                        <a href="../maps/vector.html">
                            <span class="sidebar-mini">VM</span>
                            <span class="sidebar-normal">Vector maps</span>
                        </a>
                    </li>
                    <li>
                        <a href="../maps/fullscreen.html">
                            <span class="sidebar-mini">FSM</span>
                            <span class="sidebar-normal">Full Screen Map</span>
                        </a>
                    </li>
                </ul>
            </div>
        </li>
        <li>
            <a href="../charts.html">
                <i class="ti-bar-chart-alt"></i>
                <p>Charts</p>
            </a>
        </li>
        <li>
            <a href="../calendar.html">
                <i class="ti-calendar"></i>
                <p>Calendar</p>
            </a>
        </li>
        <li>
            <a data-toggle="collapse" href="#pagesExamples">
                <i class="ti-gift"></i>
                <p>
                    Pages
                    <b class="caret"></b>
                </p>
            </a>
            <div class="collapse" id="pagesExamples">
                <ul class="nav">
                    <li>
                        <a href="../pages/timeline.html">
                            <span class="sidebar-mini">TP</span>
                            <span class="sidebar-normal">Timeline Page</span>
                        </a>
                    </li>
                    <li>
                        <a href="../pages/user.html">
                            <span class="sidebar-mini">UP</span>
                            <span class="sidebar-normal">User Page</span>
                        </a>
                    </li>
                    <li>
                        <a href="../pages/login.html">
                            <span class="sidebar-mini">LP</span>
                            <span class="sidebar-normal">Login Page</span>
                        </a>
                    </li>
                    <li>
                        <a href="../pages/register.html">
                            <span class="sidebar-mini">RP</span>
                            <span class="sidebar-normal">Register Page</span>
                        </a>
                    </li>
                    <li>
                        <a href="../pages/lock.html">
                            <span class="sidebar-mini">LSP</span>
                            <span class="sidebar-normal">Lock Screen Page</span>
                        </a>
                    </li>
                </ul>
            </div>
        </li>
    </ul>
</div>

