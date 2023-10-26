<div class="app-menu navbar-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box">
    <a href="{{ route('dashboard.show')}}" class="logo logo-dark" data-key="t-analytics">  
            <span class="logo-sm">
                <img src="assets/images/logo-sm.png" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="assets/images/.png" alt="" height="50">
                <h5 >R.V.A GOMA</h5>
            </span>
        </a>
        <a href="{{ route('dashboard.show')}}" class="logo logo-light" data-key="t-analytics">  
            <span class="logo-sm">
                <!-- <img src="assets/images/logo-sm.png" alt="" height="22"> -->
            </span>
            <span class="logo-lg">
                <img src="assets/images/.png" alt="" height="50">
                <h5 class="nav-link">R.V.A GOMA</h5>
            </span>
        </a>
        <button type="button" class="btn btn-sm p-0 fs-3xl header-item float-end btn-vertical-sm-hover shadow-none" id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>

    <div id="scrollbar">
        <div class="container-fluid">

            <div id="two-column-menu">
            </div>
            <ul class="navbar-nav" id="navbar-nav">
            <a href="{{ route('dashboard.show')}}" class="nav-link menu-link collapsed" data-key="t-analytics">  
            <i class=" ti ti-brand-google-home "></i> <span data-key="t-dashboards">dashboard</span>
            </a>
                <li class="nav-item">
                    <a class="nav-link menu-link collapsed" href="#sidebarDashboards" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarDashboards">
                        <i class=" bi bi-coin "></i> <span data-key="t-dashboards">Paiement</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarDashboards">
                        <ul class="nav nav-sm flex-column">
                        
                           <li class="nav-item">
                               
                            </li>
                           
                           
                            <li class="nav-item">
                                <a href="{{ route('paiement.show')}}" class="nav-link" data-key="t-ecommerce"> Paiement</a>
                            </li>
                            
                            
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a href="#compagnie" class="nav-link menu-link collapsed" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarInvoices">
                        <i class="bi bi-airplane-fill "></i> <span data-key="t-invoices">Compagnie</span>
                    </a>
                    <div class="collapse menu-dropdown" id="compagnie">
                        <ul class="nav nav-sm flex-column">
                        <li class="nav-item">
                                <a href="{{ route('avion.show') }}" class="nav-link" data-key="t-ecommerce"> Avion </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('compagnie.show') }}" class="nav-link" data-key="t-ecommerce"> Compagnie </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('vol.show') }}" class="nav-link" data-key="t-ecommerce"> Vol</a>
                            </li>
                            
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a href="#passagers" class="nav-link menu-link collapsed" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarInvoices">
                        <i class=" bi bi-people-fill "></i> <span data-key="t-invoices">Passager</span>
                    </a>
                    <div class="collapse menu-dropdown" id="passagers">
                        <ul class="nav nav-sm flex-column">
                        <li class="nav-item">
                                <a href="{{ route('passager.show') }}" class="nav-link" data-key="t-ecommerce"> Passager</a>
                            </li>
                            
                        </ul>
                    </div>
                </li>
                
                
                <li class="nav-item">
                    <a href="#passagers" class="nav-link menu-link collapsed" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarInvoices">
                        <i class=" bi bi-people-fill "></i> <span data-key="t-invoices">Agent</span>
                    </a>
                    <div class="collapse menu-dropdown" id="passagers">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="{{ route('agent.show') }}" class="nav-link" data-key="t-analytics"> Agent </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a href="#authentification" class="nav-link menu-link collapsed" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarInvoices">
                        <i class=" bi bi-person-bounding-box "></i> <span data-key="t-invoices">Authentification</span>
                    </a>
                    <div class="collapse menu-dropdown" id="authentification">
                        <ul class="nav nav-sm flex-column">
                        <li class="nav-item">
                                <a href="#{{ route('avion.show') }}" class="nav-link" data-key="t-ecommerce"> Resset Password </a>
                            </li>
                            <li class="nav-item">
                                <a href="#{{route('compagnie.show') }}" class="nav-link" data-key="t-ecommerce"> Users </a>
                            </li>
                            <li class="nav-item">
                                <a href="#{{ route('vol.show') }}" class="nav-link" data-key="t-ecommerce"> Profil</a>
                            </li>
                        </ul>
                     
                
            </ul>
        </div>
        <!-- ======================================== -->
        <!--============== Sidebar ====================-->
    </div>

    <div class="sidebar-background"></div>
</div> 
    
    
    
    
    
    