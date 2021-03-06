<div class="br-sideleft sideleft-scrollbar">
    <label class="sidebar-label pd-x-10 mg-t-20 op-3">Navegación</label>
    <ul class="br-sideleft-menu">
        <li class="br-menu-item">
            <a href="{{ route('dashboard.admin') }}" class="br-menu-link {{request()->is('dashboard-root') ? 'active' : '' }}">
                <i class="fas fa-tachometer-alt"></i>
                <span class="menu-item-label">Dashboard</span>
            </a><!-- br-menu-link -->
        </li><!-- br-menu-item -->
        <li class="br-menu-item">
            <a href="mailbox.html" class="br-menu-link">
                <i class="fas fa-bullhorn"></i>
                <span class="menu-item-label">Gestor Marketing</span>
            </a><!-- br-menu-link -->
        </li><!-- br-menu-item -->
        <li class="br-menu-item">
            <a href="#" class="br-menu-link with-sub">
                <i class="far fa-images"></i>
                <span class="menu-item-label">Gestor Slide</span>
            </a><!-- br-menu-link -->
        </li>
        <li class="br-menu-item">
            <a href="#" class="br-menu-link with-sub {{request()->is('manage-categories*') ? 'active' : '' }}">
                <i class="fas fa-sitemap"></i>
                <span class="menu-item-label">Gestor Categorías</span>
            </a><!-- br-menu-link -->
            <ul class="br-menu-sub">
                <li class="sub-item"><a href="{{ route('manage_categories') }}" class="sub-link {{request()->is('manage-categories/categories') ? 'active' : '' }}">Categorías</a></li>
                <li class="sub-item"><a href="{{ route('manage_subcategories') }}" class="sub-link {{request()->is('manage-categories/sub-categories') ? 'active' : '' }}">Subcategorias</a></li>
            </ul>
        </li>
        <li class="br-menu-item">
            <a href="" class="br-menu-link with-sub {{request()->is('manage-products*') ? 'active' : '' }}">
                <i class="fas fa-sitemap"></i>
                <span class="menu-item-label">Gestor Productos</span>
            </a><!-- br-menu-link -->
            <ul class="br-menu-sub">
                <li class="sub-item"><a href="{{ route('manage_add_products') }}" class="sub-link {{request()->is('manage-products/add-products') ? 'active' : '' }}">Agregar Productos</a></li>
                <li class="sub-item"><a href="{{ route('listarProductos') }}" class="sub-link {{request()->is('manage-products/listar-producto') ? 'active' : '' }}">Productos</a></li>
            </ul>
        </li><!-- br-menu-item -->
        <li class="br-menu-item">
            <a href="#" class="br-menu-link with-sub">
                <i class="menu-item-icon ion-ios-redo-outline tx-24"></i>
                <span class="menu-item-label">Gestor Banner</span>
            </a><!-- br-menu-link -->
            <ul class="br-menu-sub">
                <li class="sub-item"><a href="navigation.html" class="sub-link">Basic Nav</a></li>
                <li class="sub-item"><a href="navigation-layouts.html" class="sub-link">Nav Layouts</a></li>
                <li class="sub-item"><a href="navigation-effects.html" class="sub-link">Nav Effects</a></li>
            </ul>
        </li><!-- br-menu-item -->
        <li class="br-menu-item">
            <a href="#" class="br-menu-link with-sub">
                <i class="menu-item-icon ion-ios-pie-outline tx-20"></i>
                <span class="menu-item-label">Gestor Ventas</span>
            </a><!-- br-menu-link -->
            <ul class="br-menu-sub">
                <li class="sub-item"><a href="chart-morris.html" class="sub-link">Morris Charts</a></li>
                <li class="sub-item"><a href="chart-flot.html" class="sub-link">Flot Charts</a></li>
                <li class="sub-item"><a href="chart-chartjs.html" class="sub-link">Chart JS</a></li>
                <li class="sub-item"><a href="chart-echarts.html" class="sub-link">ECharts</a></li>
                <li class="sub-item"><a href="chart-rickshaw.html" class="sub-link">Rickshaw</a></li>
                <li class="sub-item"><a href="chart-chartist.html" class="sub-link">Chartist</a></li>
                <li class="sub-item"><a href="chart-sparkline.html" class="sub-link">Sparkline</a></li>
                <li class="sub-item"><a href="chart-peity.html" class="sub-link">Peity</a></li>
            </ul>
        </li><!-- br-menu-item -->
        <li class="br-menu-item">
            <a href="#" class="br-menu-link with-sub ">
                <i class="menu-item-icon icon ion-ios-gear-outline tx-24"></i>
                <span class="menu-item-label">Gestor Visitas</span>
            </a><!-- br-menu-link -->
            <ul class="br-menu-sub">
                <li class="sub-item"><a href="form-elements.html" class="sub-link">Form Elements</a></li>
                <li class="sub-item"><a href="form-layouts.html" class="sub-link">Form Layouts</a></li>
                <li class="sub-item"><a href="form-validation.html" class="sub-link">Form Validation</a></li>
                <li class="sub-item"><a href="form-wizards.html" class="sub-link">Form Wizards</a></li>
                <li class="sub-item"><a href="form-editor-code.html" class="sub-link">Code Editor</a></li>
                <li class="sub-item"><a href="form-editor-text.html" class="sub-link">Text Editor</a></li>
            </ul>
        </li><!-- br-menu-item -->
        <li class="br-menu-item">
            <a href="#" class="br-menu-link with-sub {{request()->is('store-management*') ? 'active' : '' }}">
                <i class="fas fa-store"></i>
                <span class="menu-item-label">Gestor Tiendas</span>
            </a><!-- br-menu-link -->
            <ul class="br-menu-sub nav flex-column">
                <li class="sub-item"><a href="{{ route('dashboard.store_management.shops')  }}" class="sub-link {{request()->is('store-management/shops') ? 'active' : '' }}">Tiendas</a></li>
                <li class="sub-item"><a href="{{ route('dashboard.store_management.request') }}" class="sub-link {{request()->is('store-management/request') ? 'active' : '' }}">Solicitudes</a></li>
            </ul>
        </li><!-- br-menu-item -->
        <li class="br-menu-item">
            <a href="#" class="br-menu-link with-sub">
                <i class="menu-item-icon icon ion-ios-navigate-outline tx-24"></i>
                <span class="menu-item-label">Gestor Mensajes</span>
            </a><!-- br-menu-link -->
            <ul class="br-menu-sub">
                <li class="sub-item"><a href="map-google.html" class="sub-link">Google Maps</a></li>
                <li class="sub-item"><a href="map-leaflet.html" class="sub-link">Leaflet Maps</a></li>
                <li class="sub-item"><a href="map-vector.html" class="sub-link">Vector Maps</a></li>
            </ul>
        </li><!-- br-menu-item -->
        <li class="br-menu-item">
            <a href="#" class="br-menu-link with-sub {{request()->is('profiles*') ? 'active' : '' }}">
                <i class="fas fa-users"></i>
                <span class="menu-item-label">Gestor Usuarios</span>
            </a>
            <ul class="br-menu-sub">
                <li class="sub-item"><a href="{{ route('dashboard.profile.list') }}" class="sub-link {{request()->is('profiles/list-user') ? 'active' : '' }}">Usuarios</a></li>
                <li class="sub-item"><a href="{{ route('dashboard.profile.add') }}" class="sub-link {{request()->is('profiles/add-user') ? 'active' : '' }}">Agregar Usuarios</a></li>
            </ul>
        </li>
    </ul>

    <label class="sidebar-label pd-x-10 mg-t-25 mg-b-20 tx-info">Resumen de información</label>

    <div class="info-list">
        <div class="info-list-item">
            <div>
                <p class="info-list-label">Memory Usage</p>
                <h5 class="info-list-amount">32.3%</h5>
            </div>
            <span class="peity-bar" data-peity='{ "fill": ["#336490"], "height": 35, "width": 60 }'>8,6,5,9,8,4,9,3,5,9</span>
        </div><!-- info-list-item -->

        <div class="info-list-item">
            <div>
                <p class="info-list-label">CPU Usage</p>
                <h5 class="info-list-amount">140.05</h5>
            </div>
            <span class="peity-bar" data-peity='{ "fill": ["#1C7973"], "height": 35, "width": 60 }'>4,3,5,7,12,10,4,5,11,7</span>
        </div><!-- info-list-item -->

        <div class="info-list-item">
            <div>
                <p class="info-list-label">Disk Usage</p>
                <h5 class="info-list-amount">82.02%</h5>
            </div>
            <span class="peity-bar" data-peity='{ "fill": ["#8E4246"], "height": 35, "width": 60 }'>1,2,1,3,2,10,4,12,7</span>
        </div><!-- info-list-item -->

        <div class="info-list-item">
            <div>
                <p class="info-list-label">Daily Traffic</p>
                <h5 class="info-list-amount">62,201</h5>
            </div>
            <span class="peity-bar" data-peity='{ "fill": ["#9C7846"], "height": 35, "width": 60 }'>3,12,7,9,2,3,4,5,2</span>
        </div><!-- info-list-item -->
    </div><!-- info-list -->

    <br>
</div><
