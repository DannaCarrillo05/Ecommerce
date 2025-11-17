 <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-radius-lg fixed-start my-2 ms-2 bg-white"
     id="sidenav-main">
     <div class="sidenav-header">
         <i class="fas fa-times text-dark position-absolute d-none d-xl-none end-0 top-0 cursor-pointer p-3 opacity-5"
             aria-hidden="true" id="iconSidenav"></i>
         <a class="navbar-brand m-0 px-4 py-3" href=" https://demos.creative-tim.com/material-dashboard/pages/dashboard "
             target="_blank">
             <img style="max-height: fit-content!important;"
                 src="{{ asset('/assets/img/logos/LogoUNAB/unab_logo.png') }}" alt="Ecommerce UNAB"
                 class="img-fluid border-radius-lg shadow-sm">

         </a>
     </div>
     <hr class="horizontal dark mb-2 mt-0">
     <div class="navbar-collapse collapse w-auto" id="sidenav-collapse-main">
         <ul class="navbar-nav">
             <li class="nav-item">
                 <a class="nav-link {{ Request::is('admin') ? 'active bg-gradient-dark text-white' : 'text-dark' }}"
                     href="{{ route('admin.index') }}">
                     <i class="material-symbols-rounded opacity-5">dashboard</i>
                     <span class="nav-link-text ms-1">Dashboard</span>
                 </a>
             </li>
             <li class="nav-item">
                 <a class="nav-link {{ Request::is('admin/products') ? 'active bg-gradient-dark text-white' : 'text-dark' }}"
                     href="{{ route('admin.products.table') }}">
                     <i class="material-symbols-rounded opacity-5">table_view</i>
                     <span class="nav-link-text ms-1">Products</span>
                 </a>
             </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('admin/category*') ? 'active bg-gradient-dark text-white' : 'text-dark' }}"
                    href="{{ route('admin.category.table') }}">
                    <i class="material-symbols-rounded opacity-5">receipt_long</i>
                    <span class="nav-link-text ms-1">Categories</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('admin/brand*') ? 'active bg-gradient-dark text-white' : 'text-dark' }}"
                    href="{{ route('admin.brand.table') }}">
                    <i class="material-symbols-rounded opacity-5">view_in_ar</i>
                    <span class="nav-link-text ms-1">Brands</span>
                </a>
            </li>
         </ul>
     </div>
     <div class="sidenav-footer position-absolute w-100 bottom-0">
         <div class="mx-3">
             <a class="btn btn-outline-dark w-100 mt-4"
                 href="https://www.creative-tim.com/learning-lab/bootstrap/overview/material-dashboard?ref=sidebarfree"
                 type="button">Documentation</a>
             <a class="btn bg-gradient-dark w-100" href="#" type="button">Contact</a>
         </div>
     </div>
 </aside>
