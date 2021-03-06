              <aside class="main-sidebar sidebar-dark-primary elevation-4">
                  <!-- Brand Logo -->
                  <a href="index3.html" class="brand-link">
                      <img src="{{ asset('assets/dist/img/covid19.jpg') }}" alt="covid-19"
                          class="brand-image img-convid19.jpg" style="opacity: .8">
                      <span class="brand-text font-weight-light">TRACKING COVID-19</span>
                  </a>

                  <!-- Sidebar -->
                  <div class="sidebar">
                      <!-- Sidebar user panel (optional) -->
                      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                          <div class="image">
                              <img src="{{ asset('assets/dist/img/user8-128x128.jpg') }}"
                                  class="img-circle elevation-2" alt="User Image">
                          </div>
                          <div class="info">
                              <a href="#" class="d-block">{{ Auth::user()->name }}</a>
                          </div>
                      </div>

                      <!-- Sidebar Menu -->
                      <nav class="mt-1">
                          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                              data-accordion="false">
                              <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                              <!-- kanan menu -->
                              <nav class="mt-2">
                                  <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                                      data-accordion="false">
                                      <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                                      <li class="nav-item has-treeview menu-open">
                                          <a href="#" class="nav-link active">
                                              <p>
                                                  Tracking COVID-19 Local
                                              </p>
                                          </a>
                                          <ul class="nav nav-treeview">
                                              <li class="nav-item">
                                                  <a href="/provinsi" class="nav-link ">
                                                      <i class="far fa-circle nav-icon"></i>
                                                      <p>Provinsi</p>
                                                  </a>
                                              </li>
                                              <ul class="nav nav-treeview">
                                                  <li class="nav-item">
                                                      <a href="/kota" class="nav-link">
                                                          <i class="far fa-circle nav-icon"></i>
                                                          <p>Kota</p>
                                                      </a>
                                                  </li>
                                                  <ul class="nav nav-treeview">
                                                      <li class="nav-item">
                                                          <a href="/kecamatan" class="nav-link">
                                                              <i class="far fa-circle nav-icon"></i>
                                                              <p>Kecamatan</p>
                                                          </a>
                                                      </li>
                                                      <ul class="nav nav-treeview">
                                                          <li class="nav-item">
                                                              <a href="/kelurahan" class="nav-link">
                                                                  <i class="far fa-circle nav-icon"></i>
                                                                  <p>Desa/Kelurahan</p>
                                                              </a>
                                                          </li>
                                                          <ul class="nav nav-treeview">
                                                              <li class="nav-item">
                                                                  <a href="/rw" class="nav-link">
                                                                      <i class="far fa-circle nav-icon"></i>
                                                                      <p>Rw</p>
                                                                  </a>
                                                              </li>
                                                              <ul class="nav nav-treeview">
                                                                  <li class="nav-item">
                                                                      <a href="/kasus2" class="nav-link">
                                                                          <i class="far fa-circle nav-icon"></i>
                                                                          <p>Kasus Local</p>
                                                                      </a>
                                                                  </li>
                                                              </ul>
                                      </li>

                              </nav>
                              <!-- /.sidebar-menu -->
                  </div>
                  <!-- /.sidebar -->
              </aside>
