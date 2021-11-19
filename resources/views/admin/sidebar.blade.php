  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="{{ URL::to('/') }}" class="brand-link">
          <img src="/template/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
          <span class="brand-text font-weight-light">Home</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
          <!-- Sidebar user (optional) -->
          <div class="user-panel mt-3 pb-3 mb-3 d-flex">
              <div class="image">
                  <img src="/template/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
              </div>
              <div class="info">
                  <a href="{{ URL::to('admin') }}" class="d-block">Hello, Admin</a>
              </div>
          </div>

          <!-- SidebarSearch Form -->
          <div class="form-inline">
              <div class="input-group" data-widget="sidebar-search">
                  <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                  <div class="input-group-append">
                      <button class="btn btn-sidebar">
                          <i class="fas fa-search fa-fw"></i>
                      </button>
                  </div>
              </div>
          </div>

          <!-- Sidebar Menu -->
          <nav class="mt-2">
              <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          
                  <li class="nav-item">
                      <a href="#" class="nav-link">
                          <i class="fas fa-align-justify"></i>
                          <p>
                              Danh mục
                              <i class="right fas fa-angle-left"></i>
                          </p>
                      </a>
                      <ul class="nav nav-treeview">
                          <li class="nav-item">
                              <a href="{{ URL::to('/admin/categories/add') }}" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Thêm danh mục</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="{{ URL::to('/admin/categories/list') }}" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Xem danh mục</p>
                              </a>
                          </li>
                      </ul>
                    </li>
                
                    
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fas fa-pen-alt"></i>
                        <p>
                            Bài viết
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ URL::to('/admin/news/add') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Tạo bài viết</p>
                            </a>
                        </li>
                         <li class="nav-item">
                            <a href="{{ URL::to('/admin/news/list') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Danh sách các bài viết</p>
                            </a>
                        </li>
                    </ul>
                  </li>

                   <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fas fa-pen-alt"></i>
                        <p>
                            Danh sách đăng ký tiêm
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ URL::to('admin/register_tiem/list') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Danh sách người tiêm</p>
                            </a>
                        </li>
                    </ul>
                  </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fas fa-pen-alt"></i>
                        <p>
                            Danh sách khai báo y tế
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ URL::to('admin/khaibaoyte/list') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Danh sách người khai báo</p>
                            </a>
                        </li>
                    </ul>
                  </li>

                </ul>
          </nav>
          <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
  </aside>
