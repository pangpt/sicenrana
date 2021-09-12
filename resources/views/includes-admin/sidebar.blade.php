<!-- NAVIGATION
    ================================================== -->


    <nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light" id="sidebar">
        <div class="container-fluid">

          <!-- Toggler -->
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidebarCollapse" aria-controls="sidebarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <!-- Brand -->
          <a class="navbar-brand" href="./index.html">
            <img src="./assets/img/logo.svg" class="navbar-brand-img
            mx-auto" alt="...">
          </a>

          <!-- User (xs) -->
          <div class="navbar-user d-md-none">

            <!-- Dropdown -->
            <div class="dropdown">

              <!-- Toggle -->
              <a href="#" id="sidebarIcon" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="avatar avatar-sm avatar-online">
                  <img src="./assets/img/avatars/profiles/avatar-1.jpg" class="avatar-img rounded-circle" alt="...">
                </div>
              </a>

              <!-- Menu -->
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="sidebarIcon">
                <a href="./profile-posts.html" class="dropdown-item">Profile</a>
                <a href="./account-general.html" class="dropdown-item">Settings</a>
                <hr class="dropdown-divider">
                <a href="./sign-in.html" class="dropdown-item">Logout</a>
              </div>

            </div>

          </div>

          <!-- Collapse -->
          <div class="collapse navbar-collapse" id="sidebarCollapse">

            <!-- Form -->
            <form class="mt-4 mb-3 d-md-none">
              <div class="input-group input-group-rounded input-group-merge">
                <input type="search" class="form-control form-control-rounded form-control-prepended" placeholder="Search" aria-label="Search">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <span class="fe fe-search"></span>
                  </div>
                </div>
              </div>
            </form>

            <!-- Navigation -->
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="#sidebarDashboards" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="sidebarDashboards">
                  <i class="fe fe-home"></i> Dashboards
                </a>
                <div class="collapse show" id="sidebarDashboards">
                  <ul class="nav nav-sm flex-column">
                    <li class="nav-item">
                      <a href="./index.html" class="nav-link active">
                        Default
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="./dashboard-project-management.html" class="nav-link ">
                        Project Management
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="./dashboard-ecommerce.html" class="nav-link ">
                        E-Commerce
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#sidebarPages" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarPages">
                  <i class="fe fe-file"></i> Pages
                </a>
                <div class="collapse " id="sidebarPages">
                  <ul class="nav nav-sm flex-column">
                    <li class="nav-item">
                      <a href="#sidebarProfile" class="nav-link" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarProfile">
                        Profile
                      </a>
                      <div class="collapse " id="sidebarProfile">
                        <ul class="nav nav-sm flex-column">
                          <li class="nav-item">
                            <a href="./profile-posts.html" class="nav-link ">
                              Posts
                            </a>
                          </li>
                          <li class="nav-item">
                            <a href="./profile-groups.html" class="nav-link ">
                              Groups
                            </a>
                          </li>
                          <li class="nav-item">
                            <a href="./profile-projects.html" class="nav-link ">
                              Projects
                            </a>
                          </li>
                          <li class="nav-item">
                            <a href="./profile-files.html" class="nav-link ">
                              Files
                            </a>
                          </li>
                          <li class="nav-item">
                            <a href="./profile-subscribers.html" class="nav-link ">
                              Subscribers
                            </a>
                          </li>
                        </ul>
                      </div>
                    </li>
                    <li class="nav-item">
                      <a href="#sidebarProject" class="nav-link" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarProject">
                        Project
                      </a>
                      <div class="collapse " id="sidebarProject">
                        <ul class="nav nav-sm flex-column">
                          <li class="nav-item">
                            <a href="./project-overview.html" class="nav-link ">
                              Overview
                            </a>
                          </li>
                          <li class="nav-item">
                            <a href="./project-files.html" class="nav-link ">
                              Files
                            </a>
                          </li>
                          <li class="nav-item">
                            <a href="./project-reports.html" class="nav-link ">
                              Reports
                            </a>
                          </li>
                          <li class="nav-item">
                            <a href="./project-new.html" class="nav-link ">
                              New project
                            </a>
                          </li>
                        </ul>
                      </div>
                    </li>
                    <li class="nav-item">
                      <a href="#sidebarTeam" class="nav-link" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarTeam">
                        Team
                      </a>
                      <div class="collapse " id="sidebarTeam">
                        <ul class="nav nav-sm flex-column">
                          <li class="nav-item">
                            <a href="./team-overview.html" class="nav-link ">
                              Overview
                            </a>
                          </li>
                          <li class="nav-item">
                            <a href="./team-projects.html" class="nav-link ">
                              Projects
                            </a>
                          </li>
                          <li class="nav-item">
                            <a href="./team-members.html" class="nav-link ">
                              Members
                            </a>
                          </li>
                          <li class="nav-item">
                            <a href="./team-new.html" class="nav-link ">
                              New team
                            </a>
                          </li>
                        </ul>
                      </div>
                    </li>
                    <li class="nav-item">
                      <a href="#sidebarFeed" class="nav-link" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarFeed">
                        Feed
                      </a>
                      <div class="collapse " id="sidebarFeed">
                        <ul class="nav nav-sm flex-column">
                          <li class="nav-item">
                            <a href="./feed.html" class="nav-link ">
                              Platform
                            </a>
                          </li>
                          <li class="nav-item">
                            <a href="./social-feed.html" class="nav-link ">
                              Social
                            </a>
                          </li>
                        </ul>
                      </div>
                    </li>
                    <li class="nav-item">
                      <a href="#sidebarAccount" class="nav-link" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarAccount">
                        Account <span class="badge badge-soft-success ml-2">New</span>
                      </a>
                      <div class="collapse " id="sidebarAccount">
                        <ul class="nav nav-sm flex-column">
                          <li class="nav-item">
                            <a href="./account-general.html" class="nav-link ">
                              General
                            </a>
                          </li>
                          <li class="nav-item">
                            <a href="./account-billing.html" class="nav-link ">
                              Billing
                            </a>
                          </li>
                          <li class="nav-item">
                            <a href="./account-members.html" class="nav-link ">
                              Members
                            </a>
                          </li>
                          <li class="nav-item">
                            <a href="./account-security.html" class="nav-link ">
                              Security
                            </a>
                          </li>
                          <li class="nav-item">
                            <a href="./account-notifications.html" class="nav-link ">
                              Notifications
                            </a>
                          </li>
                        </ul>
                      </div>
                    </li>
                    <li class="nav-item">
                      <a href="#sidebarCrm" class="nav-link" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarCrm">
                        CRM <span class="badge badge-soft-success ml-2">New</span>
                      </a>
                      <div class="collapse " id="sidebarCrm">
                        <ul class="nav nav-sm flex-column">
                          <li class="nav-item">
                            <a href="./crm-contacts.html" class="nav-link ">
                              Contacts
                            </a>
                          </li>
                          <li class="nav-item">
                            <a href="./crm-companies.html" class="nav-link ">
                              Companies
                            </a>
                          </li>
                          <li class="nav-item">
                            <a href="./crm-deals.html" class="nav-link ">
                              Deals
                            </a>
                          </li>
                        </ul>
                      </div>
                    </li>
                    <li class="nav-item">
                      <a href="./wizard.html" class="nav-link ">
                        Wizard
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="./kanban.html" class="nav-link ">
                        Kanban
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="./orders.html" class="nav-link ">
                        Orders
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="./invoice.html" class="nav-link ">
                        Invoice
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="./pricing.html" class="nav-link ">
                        Pricing
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="./widgets.html">
                  <i class="fe fe-grid"></i> Widgets
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#sidebarAuth" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarAuth">
                  <i class="fe fe-user"></i> Authentication
                </a>
                <div class="collapse" id="sidebarAuth">
                  <ul class="nav nav-sm flex-column">
                    <li class="nav-item">
                      <a href="#sidebarSignIn" class="nav-link" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarSignIn">
                        Sign in
                      </a>
                      <div class="collapse" id="sidebarSignIn">
                        <ul class="nav nav-sm flex-column">
                          <li class="nav-item">
                            <a href="./sign-in-cover.html" class="nav-link">
                              Cover
                            </a>
                          </li>
                          <li class="nav-item">
                            <a href="./sign-in-illustration.html" class="nav-link">
                              Illustration
                            </a>
                          </li>
                          <li class="nav-item">
                            <a href="./sign-in.html" class="nav-link">
                              Basic
                            </a>
                          </li>
                        </ul>
                      </div>
                    </li>
                    <li class="nav-item">
                      <a href="#sidebarSignUp" class="nav-link" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarSignUp">
                        Sign up
                      </a>
                      <div class="collapse" id="sidebarSignUp">
                        <ul class="nav nav-sm flex-column">
                          <li class="nav-item">
                            <a href="./sign-up-cover.html" class="nav-link">
                              Cover
                            </a>
                          </li>
                          <li class="nav-item">
                            <a href="./sign-up-illustration.html" class="nav-link">
                              Illustration
                            </a>
                          </li>
                          <li class="nav-item">
                            <a href="./sign-up.html" class="nav-link">
                              Basic
                            </a>
                          </li>
                        </ul>
                      </div>
                    </li>
                    <li class="nav-item">
                      <a href="#sidebarPassword" class="nav-link" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarPassword">
                        Password reset
                      </a>
                      <div class="collapse" id="sidebarPassword">
                        <ul class="nav nav-sm flex-column">
                          <li class="nav-item">
                            <a href="./password-reset-cover.html" class="nav-link">
                              Cover
                            </a>
                          </li>
                          <li class="nav-item">
                            <a href="./password-reset-illustration.html" class="nav-link">
                              Illustration
                            </a>
                          </li>
                          <li class="nav-item">
                            <a href="./password-reset.html" class="nav-link">
                              Basic
                            </a>
                          </li>
                        </ul>
                      </div>
                    </li>
                    <li class="nav-item">
                      <a href="#sidebarError" class="nav-link" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarError">
                        Error
                      </a>
                      <div class="collapse" id="sidebarError">
                        <ul class="nav nav-sm flex-column">
                          <li class="nav-item">
                            <a href="./error-illustration.html" class="nav-link">
                              Illustration
                            </a>
                          </li>
                          <li class="nav-item">
                            <a href="./error.html" class="nav-link">
                              Basic
                            </a>
                          </li>
                        </ul>
                      </div>
                    </li>
                  </ul>
                </div>
              </li>
              <li class="nav-item d-md-none">
                <a class="nav-link" href="#sidebarModalActivity" data-toggle="modal">
                  <span class="fe fe-bell"></span> Notifications
                </a>
              </li>
            </ul>

            <!-- Divider -->
            <hr class="navbar-divider my-3">

            <!-- Heading -->
            <h6 class="navbar-heading">
              Documentation
            </h6>

            <!-- Navigation -->
            <ul class="navbar-nav mb-md-4">
              <li class="nav-item">
                <a class="nav-link" href="#sidebarBasics" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarBasics">
                  <i class="fe fe-clipboard"></i> Basics
                </a>
                <div class="collapse " id="sidebarBasics">
                  <ul class="nav nav-sm flex-column">
                    <li class="nav-item ">
                      <a href="./docs/getting-started.html" class="nav-link">
                        Getting Started
                      </a>
                    </li>
                    <li class="nav-item ">
                      <a href="./docs/design-file.html" class="nav-link">
                        Design File
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#sidebarComponents" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarComponents">
                  <i class="fe fe-book-open"></i> Components
                </a>
                <div class="collapse " id="sidebarComponents">
                  <ul class="nav nav-sm flex-column">
                    <li>
                      <a href="./docs/components.html#alerts" class="nav-link">
                        Alerts
                      </a>
                    </li>
                    <li>
                      <a href="./docs/components.html#autosize" class="nav-link">
                        Autosize
                      </a>
                    </li>
                    <li>
                      <a href="./docs/components.html#avatars" class="nav-link">
                        Avatars
                      </a>
                    </li>
                    <li>
                      <a href="./docs/components.html#badges" class="nav-link">
                        Badges
                      </a>
                    </li>
                    <li>
                      <a href="./docs/components.html#breadcrumb" class="nav-link">
                        Breadcrumb
                      </a>
                    </li>
                    <li>
                      <a href="./docs/components.html#buttons" class="nav-link">
                        Buttons
                      </a>
                    </li>
                    <li>
                      <a href="./docs/components.html#buttonGroup" class="nav-link">
                        Button group
                      </a>
                    </li>
                    <li>
                      <a href="./docs/components.html#cards" class="nav-link">
                        Cards
                      </a>
                    </li>
                    <li>
                      <a href="./docs/components.html#charts" class="nav-link">
                        Charts
                      </a>
                    </li>
                    <li>
                      <a href="./docs/components.html#checklist" class="nav-link">
                        Checklist
                      </a>
                    </li>
                    <li>
                      <a href="./docs/components.html#dropdowns" class="nav-link">
                        Dropdowns
                      </a>
                    </li>
                    <li>
                      <a href="./docs/components.html#forms" class="nav-link">
                        Forms
                      </a>
                    </li>
                    <li>
                      <a href="./docs/components.html#icons" class="nav-link">
                        Icons
                      </a>
                    </li>
                    <li>
                      <a href="./docs/components.html#kanban" class="nav-link">
                        Kanban
                      </a>
                    </li>
                    <li>
                      <a href="./docs/components.html#lists" class="nav-link">
                        Lists
                      </a>
                    </li>
                    <li>
                      <a href="./docs/components.html#map" class="nav-link">
                        Map
                      </a>
                    </li>
                    <li>
                      <a href="./docs/components.html#modals" class="nav-link">
                        Modal
                      </a>
                    </li>
                    <li>
                      <a href="./docs/components.html#navs" class="nav-link">
                        Navs
                      </a>
                    </li>
                    <li>
                      <a href="./docs/components.html#navbarDocs" class="nav-link">
                        Navbar
                      </a>
                    </li>
                    <li>
                      <a href="./docs/components.html#pageHeaders" class="nav-link">
                        Page headers
                      </a>
                    </li>
                    <li>
                      <a href="./docs/components.html#pagination" class="nav-link">
                        Pagination
                      </a>
                    </li>
                    <li>
                      <a href="./docs/components.html#popovers" class="nav-link">
                        Popovers
                      </a>
                    </li>
                    <li>
                      <a href="./docs/components.html#progress" class="nav-link">
                        Progress
                      </a>
                    </li>
                    <li>
                      <a href="./docs/components.html#socialPosts" class="nav-link">
                        Social post
                      </a>
                    </li>
                    <li>
                      <a href="./docs/components.html#spinners" class="nav-link">
                        Spinners
                      </a>
                    </li>
                    <li>
                      <a href="./docs/components.html#tables" class="nav-link">
                        Tables
                      </a>
                    </li>
                    <li>
                      <a href="./docs/components.html#toasts" class="nav-link">
                        Toasts
                      </a>
                    </li>
                    <li>
                      <a href="./docs/components.html#tooltips" class="nav-link">
                        Tooltips
                      </a>
                    </li>
                    <li>
                      <a href="./docs/components.html#typography" class="nav-link">
                        Typography
                      </a>
                    </li>
                    <li>
                      <a href="./docs/components.html#utilities" class="nav-link">
                        Utilities
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="./docs/changelog.html">
                  <i class="fe fe-git-branch"></i> Changelog <span class="badge badge-primary ml-auto">v1.6.1</span>
                </a>
              </li>
            </ul>

            <!-- Push content down -->
            <div class="mt-auto"></div>




            <!-- User (md) -->
            <div class="navbar-user d-none d-md-flex" id="sidebarUser">

              <!-- Icon -->
              <a href="#sidebarModalActivity" class="navbar-user-link" data-toggle="modal">
                <span class="icon">
                  <i class="fe fe-bell"></i>
                </span>
              </a>

              <!-- Dropup -->
              <div class="dropup">

                <!-- Toggle -->
                <a href="#" id="sidebarIconCopy" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <div class="avatar avatar-sm avatar-online">
                    <img src="./assets/img/avatars/profiles/avatar-1.jpg" class="avatar-img rounded-circle" alt="...">
                  </div>
                </a>

                <!-- Menu -->
                <div class="dropdown-menu" aria-labelledby="sidebarIconCopy">
                  <a href="./profile-posts.html" class="dropdown-item">Profile</a>
                  <a href="./account-general.html" class="dropdown-item">Settings</a>
                  <hr class="dropdown-divider">
                  <a href="./sign-in.html" class="dropdown-item">Logout</a>
                </div>

              </div>

              <!-- Icon -->
              <a href="#sidebarModalSearch" class="navbar-user-link" data-toggle="modal">
                <span class="icon">
                  <i class="fe fe-search"></i>
                </span>
              </a>

            </div>


          </div> <!-- / .navbar-collapse -->

        </div>
      </nav>
