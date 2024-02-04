<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
    <title>{{ $title }}</title>

    <style>
      #loader {
        transition: all 0.3s ease-in-out;
        opacity: 1;
        visibility: visible;
        position: fixed;
        height: 100vh;
        width: 100%;
        background: #fff;
        z-index: 90000;
      }

      #loader.fadeOut {
        opacity: 0;
        visibility: hidden;
      }

      .spinner {
        width: 40px;
        height: 40px;
        position: absolute;
        top: calc(50% - 20px);
        left: calc(50% - 20px);
        background-color: #333;
        border-radius: 100%;
        -webkit-animation: sk-scaleout 1.0s infinite ease-in-out;
        animation: sk-scaleout 1.0s infinite ease-in-out;
      }

      @-webkit-keyframes sk-scaleout {
        0% { -webkit-transform: scale(0) }
        100% {
          -webkit-transform: scale(1.0);
          opacity: 0;
        }
      }

      @keyframes sk-scaleout {
        0% {
          -webkit-transform: scale(0);
          transform: scale(0);
        } 100% {
          -webkit-transform: scale(1.0);
          transform: scale(1.0);
          opacity: 0;
        }
      }
    </style>
  <script defer="defer" src="/assets/main.js"></script><link href="/assets/style.css" rel="stylesheet"></head>
  <body class="app">

    <div id="loader">
      <div class="spinner"></div>
    </div>

    <script>
      window.addEventListener('load', function load() {
        const loader = document.getElementById('loader');
        setTimeout(function() {
          loader.classList.add('fadeOut');
        }, 300);
      });
    </script>

    <div>
      <!-- #Left Sidebar ==================== -->
      <div class="sidebar">
        <div class="sidebar-inner">
          <!-- ### $Sidebar Header ### -->
          <div class="sidebar-logo">
            <div class="peers ai-c fxw-nw">
              <div class="peer peer-greed">
                <a class="sidebar-link td-n" href="/">
                  <div class="peers ai-c fxw-nw">
                    <div class="peer">
                      <div class="logo">
                        <img src="/assets/logo.png" alt="">
                      </div>
                    </div>
                    <div class="peer peer-greed">
                      <h5 class="lh-1 mB-0 logo-text">Sistem Kasir</h5>
                    </div>
                  </div>
                </a>
              </div>
              <div class="peer">
                <div class="mobile-toggle sidebar-toggle">
                  <a href="" class="td-n">
                    <i class="ti-arrow-circle-left"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>

          <!-- ### $Sidebar Menu ### -->
          <ul class="sidebar-menu scrollable pos-r">
            <li class="nav-item mT-30 actived">
              <a class="sidebar-link" href="/">
                <span class="icon-holder">
                  <i class="c-blue-500 ti-home"></i>
                </span>
                <span class="title">Dashboard</span>
              </a>
            </li>
            <li class="nav-item dropdown">
              <a class="dropdown-toggle" href="javascript:void(0);">
                <span class="icon-holder">
                  <i class="c-orange-500 ti-layout-list-thumb"></i>
                </span>
                <span class="title">Data Master</span>
                <span class="arrow">
                  <i class="ti-angle-right"></i>
                </span>
              </a>
              <ul class="dropdown-menu">
                <li>
                  <a class="sidebar-link" href="#">Data User</a>
                </li>
                <li>
                  <a class="sidebar-link" href="#">Data Jenis Barang</a>
                </li>
                <li>
                  <a class="sidebar-link" href="#">Data Barang</a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="sidebar-link" href="#">
                <span class="icon-holder">
                  <i class="c-indigo-500 ti-bar-chart"></i>
                </span>
                <span class="title">Setting Diskon</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="sidebar-link" href="#">
                <span class="icon-holder">
                  <i class="c-deep-orange-500 ti-calendar"></i>
                </span>
                <span class="title">Data Laporan</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="sidebar-link" href="#">
                <span class="icon-holder">
                  <i class="c-light-blue-500 ti-pencil"></i>
                </span>
                <span class="title">Data Transaksi</span>
              </a>
            </li>
          </ul>
        </div>
      </div>

      <!-- #Main ============================ -->
      <div class="page-container">
        <!-- ### $Topbar ### -->
        <div class="header navbar">
          <div class="header-container">
            <ul class="nav-left">
              <li>
                <a id="sidebar-toggle" class="sidebar-toggle" href="javascript:void(0);">
                  <i class="ti-menu"></i>
                </a>
              </li>
              <li class="search-box">
                <a class="search-toggle no-pdd-right" href="javascript:void(0);">
                  <i class="search-icon ti-search pdd-right-10"></i>
                  <i class="search-icon-close ti-close pdd-right-10"></i>
                </a>
              </li>
              <li class="search-input">
                <input class="form-control" type="text" placeholder="Search...">
              </li>
            </ul>
            <ul class="nav-right">
              <li class="dropdown">
                <a href="" class="dropdown-toggle no-after peers fxw-nw ai-c lh-1" data-bs-toggle="dropdown">
                  <div class="peer mR-10">
                    <img class="w-2r bdrs-50p" src="https://randomuser.me/api/portraits/men/10.jpg" alt="">
                  </div>
                  <div class="peer">
                    <span class="fsz-sm c-grey-900">John Doe</span>
                  </div>
                </a>
                <ul class="dropdown-menu fsz-sm">
                  <li>
                    <a href="" class="d-b td-n pY-5 bgcH-grey-100 c-grey-700">
                      <i class="ti-settings mR-10"></i>
                      <span>Setting</span>
                    </a>
                  </li>
                  <li>
                    <a href="" class="d-b td-n pY-5 bgcH-grey-100 c-grey-700">
                      <i class="ti-user mR-10"></i>
                      <span>Profile</span>
                    </a>
                  </li>
                  <li>
                    <a href="email.html" class="d-b td-n pY-5 bgcH-grey-100 c-grey-700">
                      <i class="ti-email mR-10"></i>
                      <span>Messages</span>
                    </a>
                  </li>
                  <li role="separator" class="divider"></li>
                  <li>
                    <a href="" class="d-b td-n pY-5 bgcH-grey-100 c-grey-700">
                      <i class="ti-power-off mR-10"></i>
                      <span>Logout</span>
                    </a>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </div>

        <!-- ### $App Screen Content ### -->
        <main class="main-content bgc-grey-100">
          <div id="mainContent">
            <div class="row gap-20 masonry pos-r">
              <div class="masonry-sizer col-md-6"></div>
              <div class="masonry-item w-100">
                <div class="row gap-20">

                  <div class="col-md-3">
                    <div class="layers bd bgc-white p-20">
                      <div class="layer w-100 mB-10">
                        <h6 class="lh-1">Total User</h6>
                      </div>
                      <div class="layer w-100">
                        <div class="peers ai-sb fxw-nw">
                          <div class="peer peer-greed">
                            <span id="sparklinedash"></span>
                          </div>
                          <div class="peer">
                            <span class="d-ib lh-0 va-m fw-600 bdrs-10em pX-15 pY-15 bgc-green-50 c-green-500">+10%</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-3">
                    <div class="layers bd bgc-white p-20">
                      <div class="layer w-100 mB-10">
                        <h6 class="lh-1">Total Jenis Barang</h6>
                      </div>
                      <div class="layer w-100">
                        <div class="peers ai-sb fxw-nw">
                          <div class="peer peer-greed">
                            <span id="sparklinedash2"></span>
                          </div>
                          <div class="peer">
                            <span class="d-ib lh-0 va-m fw-600 bdrs-10em pX-15 pY-15 bgc-red-50 c-red-500">-7%</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-3">
                    <div class="layers bd bgc-white p-20">
                      <div class="layer w-100 mB-10">
                        <h6 class="lh-1">Total Barang</h6>
                      </div>
                      <div class="layer w-100">
                        <div class="peers ai-sb fxw-nw">
                          <div class="peer peer-greed">
                            <span id="sparklinedash3"></span>
                          </div>
                          <div class="peer">
                            <span class="d-ib lh-0 va-m fw-600 bdrs-10em pX-15 pY-15 bgc-purple-50 c-purple-500">~12%</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-3">
                    <div class="layers bd bgc-white p-20">
                      <div class="layer w-100 mB-10">
                        <h6 class="lh-1">Total Transaksi</h6>
                      </div>
                      <div class="layer w-100">
                        <div class="peers ai-sb fxw-nw">
                          <div class="peer peer-greed">
                            <span id="sparklinedash4"></span>
                          </div>
                          <div class="peer">
                            <span class="d-ib lh-0 va-m fw-600 bdrs-10em pX-15 pY-15 bgc-blue-50 c-blue-500">33%</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="masonry-item col-md-6">
                <!-- #Monthly Stats ==================== -->
                <div class="bd bgc-white">
                  <div class="layers">
                    <div class="layer w-100 pX-20 pT-20">
                      <h6 class="lh-1">Monthly Stats</h6>
                    </div>
                    <div class="layer w-100 p-20">
                      <canvas id="line-chart" height="220"></canvas>
                    </div>
                    <div class="layer bdT p-20 w-100">
                      <div class="peers ai-c jc-c gapX-20">
                        <div class="peer">
                          <span class="fsz-def fw-600 mR-10 c-grey-800">10% <i class="fa fa-level-up c-green-500"></i></span>
                          <small class="c-grey-500 fw-600">APPL</small>
                        </div>
                        <div class="peer fw-600">
                          <span class="fsz-def fw-600 mR-10 c-grey-800">2% <i class="fa fa-level-down c-red-500"></i></span>
                          <small class="c-grey-500 fw-600">Average</small>
                        </div>
                        <div class="peer fw-600">
                          <span class="fsz-def fw-600 mR-10 c-grey-800">15% <i class="fa fa-level-up c-green-500"></i></span>
                          <small class="c-grey-500 fw-600">Sales</small>
                        </div>
                        <div class="peer fw-600">
                          <span class="fsz-def fw-600 mR-10 c-grey-800">8% <i class="fa fa-level-down c-red-500"></i></span>
                          <small class="c-grey-500 fw-600">Profit</small>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="masonry-item col-md-6">
                <!-- #Todo ==================== -->
                <div class="bd bgc-white p-20">
                  <div class="layers">
                    <div class="layer w-100 mB-10">
                      <h6 class="lh-1">Todo List</h6>
                    </div>
                    <div class="layer w-100">
                      <ul class="list-task list-group" data-role="tasklist">
                        <li class="list-group-item bdw-0" data-role="task">
                          <div class="checkbox checkbox-circle checkbox-info peers ai-c">
                            <input type="checkbox" id="inputCall1" name="inputCheckboxesCall" class="peer">
                            <label for="inputCall1" class="form-label peers peer-greed js-sb ai-c">
                              <span class="peer peer-greed">Call John for Dinner</span>
                            </label>
                          </div>
                        </li>
                        <li class="list-group-item bdw-0" data-role="task">
                          <div class="checkbox checkbox-circle checkbox-info peers ai-c">
                            <input type="checkbox" id="inputCall2" name="inputCheckboxesCall" class="peer">
                            <label for="inputCall2" class="form-label peers peer-greed js-sb ai-c">
                              <span class="peer peer-greed">Book Boss Flight</span>
                              <span class="peer">
                                <span class="badge rounded-pill fl-r bg-success lh-0 p-10">2 Days</span>
                              </span>
                            </label>
                          </div>
                        </li>
                        <li class="list-group-item bdw-0" data-role="task">
                          <div class="checkbox checkbox-circle checkbox-info peers ai-c">
                            <input type="checkbox" id="inputCall3" name="inputCheckboxesCall" class="peer">
                            <label for="inputCall3" class="form-label peers peer-greed js-sb ai-c">
                              <span class="peer peer-greed">Hit the Gym</span>
                              <span class="peer">
                                <span class="badge rounded-pill fl-r bg-danger lh-0 p-10">3 Minutes</span>
                              </span>
                            </label>
                          </div>
                        </li>
                        <li class="list-group-item bdw-0" data-role="task">
                          <div class="checkbox checkbox-circle checkbox-info peers ai-c">
                            <input type="checkbox" id="inputCall4" name="inputCheckboxesCall" class="peer">
                            <label for="inputCall4" class="form-label peers peer-greed js-sb ai-c">
                              <span class="peer peer-greed">Give Purchase Report</span>
                              <span class="peer">
                                <span class="badge rounded-pill fl-r bg-warning lh-0 p-10">not important</span>
                              </span>
                            </label>
                          </div>
                        </li>
                        <li class="list-group-item bdw-0" data-role="task">
                          <div class="checkbox checkbox-circle checkbox-info peers ai-c">
                            <input type="checkbox" id="inputCall5" name="inputCheckboxesCall" class="peer">
                            <label for="inputCall5" class="form-label peers peer-greed js-sb ai-c">
                              <span class="peer peer-greed">Watch Game of Thrones Episode</span>
                              <span class="peer">
                                <span class="badge rounded-pill fl-r bg-info lh-0 p-10">Tomorrow</span>
                              </span>
                            </label>
                          </div>
                        </li>
                        <li class="list-group-item bdw-0" data-role="task">
                          <div class="checkbox checkbox-circle checkbox-info peers ai-c">
                            <input type="checkbox" id="inputCall6" name="inputCheckboxesCall" class="peer">
                            <label for="inputCall6" class="form-label peers peer-greed js-sb ai-c">
                              <span class="peer peer-greed">Give Purchase report</span>
                              <span class="peer">
                                <span class="badge rounded-pill fl-r bg-success lh-0 p-10">Done</span>
                              </span>
                            </label>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="masonry-item col-md-6">
                <!-- #Sales Report ==================== -->
                <div class="bd bgc-white">
                  <div class="layers">
                    <div class="layer w-100 p-20">
                      <h6 class="lh-1">Sales Report</h6>
                    </div>
                    <div class="layer w-100">
                      <div class="bgc-light-blue-500 c-white p-20">
                        <div class="peers ai-c jc-sb gap-40">
                          <div class="peer peer-greed">
                            <h5>January 2024</h5>
                            <p class="mB-0">Sales Report</p>
                          </div>
                          <div class="peer">
                            <h3 class="text-end">$6,000</h3>
                          </div>
                        </div>
                      </div>
                      <div class="table-responsive p-20">
                        <table class="table">
                          <thead>
                            <tr>
                              <th class="bdwT-0">Name</th>
                              <th class="bdwT-0">Status</th>
                              <th class="bdwT-0">Date</th>
                              <th class="bdwT-0">Price</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td class="fw-600">Item #1 Name</td>
                              <td><span class="badge bgc-red-50 c-red-700 p-10 lh-0 tt-c rounded-pill">Unavailable</span> </td>
                              <td>Jan 18</td>
                              <td><span class="text-success">$12</span></td>
                            </tr>
                            <tr>
                              <td class="fw-600">Item #2 Name</td>
                              <td><span class="badge bgc-deep-purple-50 c-deep-purple-700 p-10 lh-0 tt-c rounded-pill">New</span></td>
                              <td>Jan 19</td>
                              <td><span class="text-info">$34</span></td>
                            </tr>
                            <tr>
                              <td class="fw-600">Item #3 Name</td>
                              <td><span class="badge bgc-pink-50 c-pink-700 p-10 lh-0 tt-c rounded-pill">New</span></td>
                              <td>Jan 20</td>
                              <td><span class="text-danger">-$45</span></td>
                            </tr>
                            <tr>
                              <td class="fw-600">Item #4 Name</td>
                              <td><span class="badge bgc-green-50 c-green-700 p-10 lh-0 tt-c rounded-pill">Unavailable</span></td>
                              <td>Jan 21</td>
                              <td><span class="text-success">$65</span></td>
                            </tr>
                            <tr>
                              <td class="fw-600">Item #5 Name</td>
                              <td><span class="badge bgc-red-50 c-red-700 p-10 lh-0 tt-c rounded-pill">Used</span></td>
                              <td>Jan 22</td>
                              <td><span class="text-success">$78</span></td>
                            </tr>
                            <tr>
                              <td class="fw-600">Item #6 Name</td>
                              <td><span class="badge bgc-orange-50 c-orange-700 p-10 lh-0 tt-c rounded-pill">Used</span> </td>
                              <td>Jan 23</td>
                              <td><span class="text-danger">-$88</span></td>
                            </tr>
                            <tr>
                              <td class="fw-600">Item #7 Name</td>
                              <td><span class="badge bgc-yellow-50 c-yellow-700 p-10 lh-0 tt-c rounded-pill">Old</span></td>
                              <td>Jan 24</td>
                              <td><span class="text-success">$56</span></td>
                            </tr>
                          </tbody>
                        </table>
                       </div>
                    </div>
                  </div>
                  <div class="ta-c bdT w-100 p-20">
                    <a href="#">Check all the sales</a>
                  </div>
                </div>
              </div>

              <div class="masonry-item col-md-6">
                <!-- #Chat ==================== -->
                <div class="bd bgc-white">
                  <div class="layers">
                    <div class="layer w-100 p-20">
                      <h6 class="lh-1">Quick Chat</h6>
                    </div>
                    <div class="layer w-100">
                      
                      <div class="bgc-grey-200 p-20 gapY-15">
                        
                        <div class="peers fxw-nw">
                          <div class="peer mR-20">
                            <img class="w-2r bdrs-50p" src="https://randomuser.me/api/portraits/men/11.jpg" alt="">
                          </div>
                          <div class="peer peer-greed">
                            <div class="layers ai-fs gapY-5">
                              <div class="layer">
                                <div class="peers fxw-nw ai-c pY-3 pX-10 bgc-white bdrs-2 lh-3/2">
                                  <div class="peer mR-10">
                                    <small>10:00 AM</small>
                                  </div>
                                  <div class="peer-greed">
                                    <span>Lorem Ipsum is simply dummy text of</span>
                                  </div>
                                </div>
                              </div>
                              <div class="layer">
                                <div class="peers fxw-nw ai-c pY-3 pX-10 bgc-white bdrs-2 lh-3/2">
                                  <div class="peer mR-10">
                                    <small>10:00 AM</small>
                                  </div>
                                  <div class="peer-greed">
                                    <span>the printing and typesetting industry.</span>
                                  </div>
                                </div>
                              </div>
                              <div class="layer">
                                <div class="peers fxw-nw ai-c pY-3 pX-10 bgc-white bdrs-2 lh-3/2">
                                  <div class="peer mR-10">
                                    <small>10:00 AM</small>
                                  </div>
                                  <div class="peer-greed">
                                    <span>Lorem Ipsum has been the industry's</span>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>

                        
                        <div class="peers fxw-nw ai-fe">
                          <div class="peer ord-1 mL-20">
                            <img class="w-2r bdrs-50p" src="https://randomuser.me/api/portraits/men/12.jpg" alt="">
                          </div>
                          <div class="peer peer-greed ord-0">
                            <div class="layers ai-fe gapY-10">
                              <div class="layer">
                                <div class="peers fxw-nw ai-c pY-3 pX-10 bgc-white bdrs-2 lh-3/2">
                                  <div class="peer mL-10 ord-1">
                                    <small>10:00 AM</small>
                                  </div>
                                  <div class="peer-greed ord-0">
                                    <span>Heloo</span>
                                  </div>
                                </div>
                              </div>
                              <div class="layer">
                                <div class="peers fxw-nw ai-c pY-3 pX-10 bgc-white bdrs-2 lh-3/2">
                                  <div class="peer mL-10 ord-1">
                                    <small>10:00 AM</small>
                                  </div>
                                  <div class="peer-greed ord-0">
                                    <span>??</span>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      
                      <div class="p-20 bdT bgc-white">
                        <div class="pos-r">
                          <input type="text" class="form-control bdrs-10em m-0" placeholder="Say something...">
                          <button type="button" class="btn btn-primary bdrs-50p w-2r p-0 h-2r pos-a r-1 t-1">
                            <i class="fa fa-paper-plane-o"></i>
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </main>

        <!-- ### $App Screen Footer ### -->
        <footer class="bdT ta-c p-30 lh-0 fsz-sm c-grey-600">
          <span>Copyright © 2024 Sistem Kasir. All rights reserved.</span>
        </footer>
      </div>
    </div>
  </body>
</html>
