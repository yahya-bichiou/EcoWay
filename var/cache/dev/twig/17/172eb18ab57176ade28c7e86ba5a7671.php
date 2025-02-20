<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* backend/order.html.twig */
class __TwigTemplate_b1a4e1aa7290c4c1d4c714f20510a1d8 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "back.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend/order.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backend/order.html.twig"));

        $this->parent = $this->loadTemplate("back.html.twig", "backend/order.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Commande index";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "<body class=\"navbar-fixed sidebar-fixed\" id=\"body\">
    <script>
      NProgress.configure({ showSpinner: false });
      NProgress.start();
    </script>


    <div id=\"toaster\"></div>


    <!-- ====================================
    ——— WRAPPER
    ===================================== -->
    <div class=\"wrapper\">


        <!-- ====================================
          ——— LEFT SIDEBAR WITH OUT FOOTER
        ===================================== -->
        <aside class=\"left-sidebar sidebar-dark\" id=\"left-sidebar\">
          <div id=\"sidebar\" class=\"sidebar sidebar-with-footer\">
            <!-- Aplication Brand -->
            <div class=\"app-brand\">
              <a href=\"/index.html\">
                <img src=\"";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backend/images/logo.png"), "html", null, true);
        yield "\" alt=\"Mono\">
                <span class=\"brand-name\">MONO</span>
              </a>
            </div>
            <!-- begin sidebar scrollbar -->
            <div class=\"sidebar-left\" data-simplebar style=\"height: 100%;\">
              <!-- sidebar menu -->
              <ul class=\"nav sidebar-inner\" id=\"sidebar-menu\">

                  <li class=\"section-title\">
                    Dashboards
                  </li>

                  <li
                   class=\"active\"
                   >
                    <a class=\"sidenav-item-link\" href=\"/back/order\">
                      <i class=\"mdi mdi-package-variant-closed\"></i>
                      <span class=\"nav-text\">Order Dashboard</span>
                    </a>
                  </li>

                  <li>
                    <a class=\"sidenav-item-link\" href=\"/back/dropoff\">
                      <i class=\"mdi mdi-map-marker\"></i>
                      <span class=\"nav-text\">Drop-off Dashboard</span>
                    </a>
                  </li>

                  <li>
                    <a class=\"sidenav-item-link\" href=\"/back/products\">
                      <i class=\"mdi mdi-shopping-outline\"></i>
                      <span class=\"nav-text\">Products Dashboard</span>
                    </a>
                  </li>

                  <li>
                    <a class=\"sidenav-item-link\" href=\"/back/blog\">
                      <i class=\"mdi mdi-note-text-outline\"></i>
                      <span class=\"nav-text\">Blog Dashboard</span>
                    </a>
                  </li>

                  <li>
                    <a class=\"sidenav-item-link\" href=\"/back/event\">
                      <i class=\"mdi mdi-calendar\"></i>
                      <span class=\"nav-text\">Event Dashboard</span>
                    </a>
                  </li>

                  <li>
                    <a class=\"sidenav-item-link\" href=\"/back/user\">
                      <i class=\"mdi mdi-account\"></i>
                      <span class=\"nav-text\">User Dashboard</span>
                    </a>
                  </li>





                  <li class=\"section-title\">
                    Apps
                  </li>





                  <li
                   >
                    <a class=\"sidenav-item-link\" href=\"chat.html\">
                      <i class=\"mdi mdi-wechat\"></i>
                      <span class=\"nav-text\">Chat</span>
                    </a>
                  </li>





                  <li
                   >
                    <a class=\"sidenav-item-link\" href=\"contacts.html\">
                      <i class=\"mdi mdi-phone\"></i>
                      <span class=\"nav-text\">Contacts</span>
                    </a>
                  </li>





                  <li
                   >
                    <a class=\"sidenav-item-link\" href=\"team.html\">
                      <i class=\"mdi mdi-account-group\"></i>
                      <span class=\"nav-text\">Team</span>
                    </a>
                  </li>





                  <li
                   >
                    <a class=\"sidenav-item-link\" href=\"calendar.html\">
                      <i class=\"mdi mdi-calendar-check\"></i>
                      <span class=\"nav-text\">Calendar</span>
                    </a>
                  </li>





                  <li  class=\"has-sub\" >
                    <a class=\"sidenav-item-link\" href=\"javascript:void(0)\" data-toggle=\"collapse\" data-target=\"#email\"
                      aria-expanded=\"false\" aria-controls=\"email\">
                      <i class=\"mdi mdi-email\"></i>
                      <span class=\"nav-text\">email</span> <b class=\"caret\"></b>
                    </a>
                    <ul  class=\"collapse\"  id=\"email\"
                      data-parent=\"#sidebar-menu\">
                      <div class=\"sub-menu\">



                            <li >
                              <a class=\"sidenav-item-link\" href=\"email-inbox.html\">
                                <span class=\"nav-text\">Email Inbox</span>

                              </a>
                            </li>






                            <li >
                              <a class=\"sidenav-item-link\" href=\"email-details.html\">
                                <span class=\"nav-text\">Email Details</span>

                              </a>
                            </li>






                            <li >
                              <a class=\"sidenav-item-link\" href=\"email-compose.html\">
                                <span class=\"nav-text\">Email Compose</span>

                              </a>
                            </li>




                      </div>
                    </ul>
                  </li>





                  <li class=\"section-title\">
                    UI Elements
                  </li>





                  <li  class=\"has-sub\" >
                    <a class=\"sidenav-item-link\" href=\"javascript:void(0)\" data-toggle=\"collapse\" data-target=\"#ui-elements\"
                      aria-expanded=\"false\" aria-controls=\"ui-elements\">
                      <i class=\"mdi mdi-folder-outline\"></i>
                      <span class=\"nav-text\">UI Components</span> <b class=\"caret\"></b>
                    </a>
                    <ul  class=\"collapse\"  id=\"ui-elements\"
                      data-parent=\"#sidebar-menu\">
                      <div class=\"sub-menu\">



                            <li >
                              <a class=\"sidenav-item-link\" href=\"alert.html\">
                                <span class=\"nav-text\">Alert</span>

                              </a>
                            </li>






                            <li >
                              <a class=\"sidenav-item-link\" href=\"badge.html\">
                                <span class=\"nav-text\">Badge</span>

                              </a>
                            </li>






                            <li >
                              <a class=\"sidenav-item-link\" href=\"breadcrumb.html\">
                                <span class=\"nav-text\">Breadcrumb</span>

                              </a>
                            </li>





                        <li  class=\"has-sub\" >
                          <a class=\"sidenav-item-link\" href=\"javascript:void(0)\" data-toggle=\"collapse\" data-target=\"#buttons\"
                            aria-expanded=\"false\" aria-controls=\"buttons\">
                            <span class=\"nav-text\">Buttons</span> <b class=\"caret\"></b>
                          </a>
                          <ul  class=\"collapse\"  id=\"buttons\">
                            <div class=\"sub-menu\">

                              <li >
                                <a href=\"button-default.html\">Button Default</a>
                              </li>

                              <li >
                                <a href=\"button-dropdown.html\">Button Dropdown</a>
                              </li>

                              <li >
                                <a href=\"button-group.html\">Button Group</a>
                              </li>

                              <li >
                                <a href=\"button-social.html\">Button Social</a>
                              </li>

                              <li >
                                <a href=\"button-loading.html\">Button Loading</a>
                              </li>

                            </div>
                          </ul>
                        </li>





                            <li >
                              <a class=\"sidenav-item-link\" href=\"card.html\">
                                <span class=\"nav-text\">Card</span>

                              </a>
                            </li>






                            <li >
                              <a class=\"sidenav-item-link\" href=\"carousel.html\">
                                <span class=\"nav-text\">Carousel</span>

                              </a>
                            </li>






                            <li >
                              <a class=\"sidenav-item-link\" href=\"collapse.html\">
                                <span class=\"nav-text\">Collapse</span>

                              </a>
                            </li>






                            <li >
                              <a class=\"sidenav-item-link\" href=\"editor.html\">
                                <span class=\"nav-text\">Editor</span>

                              </a>
                            </li>






                            <li >
                              <a class=\"sidenav-item-link\" href=\"list-group.html\">
                                <span class=\"nav-text\">List Group</span>

                              </a>
                            </li>






                            <li >
                              <a class=\"sidenav-item-link\" href=\"modal.html\">
                                <span class=\"nav-text\">Modal</span>

                              </a>
                            </li>






                            <li >
                              <a class=\"sidenav-item-link\" href=\"pagination.html\">
                                <span class=\"nav-text\">Pagination</span>

                              </a>
                            </li>






                            <li >
                              <a class=\"sidenav-item-link\" href=\"popover-tooltip.html\">
                                <span class=\"nav-text\">Popover & Tooltip</span>

                              </a>
                            </li>






                            <li >
                              <a class=\"sidenav-item-link\" href=\"progress-bar.html\">
                                <span class=\"nav-text\">Progress Bar</span>

                              </a>
                            </li>






                            <li >
                              <a class=\"sidenav-item-link\" href=\"spinner.html\">
                                <span class=\"nav-text\">Spinner</span>

                              </a>
                            </li>






                            <li >
                              <a class=\"sidenav-item-link\" href=\"switches.html\">
                                <span class=\"nav-text\">Switches</span>

                              </a>
                            </li>





                        <li  class=\"has-sub\" >
                          <a class=\"sidenav-item-link\" href=\"javascript:void(0)\" data-toggle=\"collapse\" data-target=\"#tables\"
                            aria-expanded=\"false\" aria-controls=\"tables\">
                            <span class=\"nav-text\">Tables</span> <b class=\"caret\"></b>
                          </a>
                          <ul  class=\"collapse\"  id=\"tables\">
                            <div class=\"sub-menu\">

                              <li >
                                <a href=\"bootstarp-tables.html\">Bootstrap Tables</a>
                              </li>

                              <li >
                                <a href=\"data-tables.html\">Data Tables</a>
                              </li>

                            </div>
                          </ul>
                        </li>





                            <li >
                              <a class=\"sidenav-item-link\" href=\"tab.html\">
                                <span class=\"nav-text\">Tab</span>

                              </a>
                            </li>






                            <li >
                              <a class=\"sidenav-item-link\" href=\"toaster.html\">
                                <span class=\"nav-text\">Toaster</span>

                              </a>
                            </li>





                        <li  class=\"has-sub\" >
                          <a class=\"sidenav-item-link\" href=\"javascript:void(0)\" data-toggle=\"collapse\" data-target=\"#icons\"
                            aria-expanded=\"false\" aria-controls=\"icons\">
                            <span class=\"nav-text\">Icons</span> <b class=\"caret\"></b>
                          </a>
                          <ul  class=\"collapse\"  id=\"icons\">
                            <div class=\"sub-menu\">

                              <li >
                                <a href=\"material-icons.html\">Material Icon</a>
                              </li>

                              <li >
                                <a href=\"flag-icons.html\">Flag Icon</a>
                              </li>

                            </div>
                          </ul>
                        </li>




                        <li  class=\"has-sub\" >
                          <a class=\"sidenav-item-link\" href=\"javascript:void(0)\" data-toggle=\"collapse\" data-target=\"#forms\"
                            aria-expanded=\"false\" aria-controls=\"forms\">
                            <span class=\"nav-text\">Forms</span> <b class=\"caret\"></b>
                          </a>
                          <ul  class=\"collapse\"  id=\"forms\">
                            <div class=\"sub-menu\">

                              <li >
                                <a href=\"basic-input.html\">Basic Input</a>
                              </li>

                              <li >
                                <a href=\"input-group.html\">Input Group</a>
                              </li>

                              <li >
                                <a href=\"checkbox-radio.html\">Checkbox & Radio</a>
                              </li>

                              <li >
                                <a href=\"form-validation.html\">Form Validation</a>
                              </li>

                              <li >
                                <a href=\"form-advance.html\">Form Advance</a>
                              </li>

                            </div>
                          </ul>
                        </li>




                        <li  class=\"has-sub\" >
                          <a class=\"sidenav-item-link\" href=\"javascript:void(0)\" data-toggle=\"collapse\" data-target=\"#maps\"
                            aria-expanded=\"false\" aria-controls=\"maps\">
                            <span class=\"nav-text\">Maps</span> <b class=\"caret\"></b>
                          </a>
                          <ul  class=\"collapse\"  id=\"maps\">
                            <div class=\"sub-menu\">

                              <li >
                                <a href=\"google-maps.html\">Google Map</a>
                              </li>

                              <li >
                                <a href=\"vector-maps.html\">Vector Map</a>
                              </li>

                            </div>
                          </ul>
                        </li>




                        <li  class=\"has-sub\" >
                          <a class=\"sidenav-item-link\" href=\"javascript:void(0)\" data-toggle=\"collapse\" data-target=\"#widgets\"
                            aria-expanded=\"false\" aria-controls=\"widgets\">
                            <span class=\"nav-text\">Widgets</span> <b class=\"caret\"></b>
                          </a>
                          <ul  class=\"collapse\"  id=\"widgets\">
                            <div class=\"sub-menu\">

                              <li >
                                <a href=\"widgets-general.html\">General Widget</a>
                              </li>

                              <li >
                                <a href=\"widgets-chart.html\">Chart Widget</a>
                              </li>

                            </div>
                          </ul>
                        </li>



                      </div>
                    </ul>
                  </li>





                  <li  class=\"has-sub\" >
                    <a class=\"sidenav-item-link\" href=\"javascript:void(0)\" data-toggle=\"collapse\" data-target=\"#charts\"
                      aria-expanded=\"false\" aria-controls=\"charts\">
                      <i class=\"mdi mdi-chart-pie\"></i>
                      <span class=\"nav-text\">Charts</span> <b class=\"caret\"></b>
                    </a>
                    <ul  class=\"collapse\"  id=\"charts\"
                      data-parent=\"#sidebar-menu\">
                      <div class=\"sub-menu\">



                            <li >
                              <a class=\"sidenav-item-link\" href=\"apex-charts.html\">
                                <span class=\"nav-text\">Apex Charts</span>

                              </a>
                            </li>




                      </div>
                    </ul>
                  </li>





                  <li class=\"section-title\">
                    Pages
                  </li>





                  <li  class=\"has-sub\" >
                    <a class=\"sidenav-item-link\" href=\"javascript:void(0)\" data-toggle=\"collapse\" data-target=\"#users\"
                      aria-expanded=\"false\" aria-controls=\"users\">
                      <i class=\"mdi mdi-image-filter-none\"></i>
                      <span class=\"nav-text\">User</span> <b class=\"caret\"></b>
                    </a>
                    <ul  class=\"collapse\"  id=\"users\"
                      data-parent=\"#sidebar-menu\">
                      <div class=\"sub-menu\">



                            <li >
                              <a class=\"sidenav-item-link\" href=\"user-profile.html\">
                                <span class=\"nav-text\">User Profile</span>

                              </a>
                            </li>






                            <li >
                              <a class=\"sidenav-item-link\" href=\"user-activities.html\">
                                <span class=\"nav-text\">User Activities</span>

                              </a>
                            </li>






                            <li >
                              <a class=\"sidenav-item-link\" href=\"user-profile-settings.html\">
                                <span class=\"nav-text\">User Profile Settings</span>

                              </a>
                            </li>






                            <li >
                              <a class=\"sidenav-item-link\" href=\"user-account-settings.html\">
                                <span class=\"nav-text\">User Account Settings</span>

                              </a>
                            </li>






                            <li >
                              <a class=\"sidenav-item-link\" href=\"user-planing-settings.html\">
                                <span class=\"nav-text\">User Planing Settings</span>

                              </a>
                            </li>






                            <li >
                              <a class=\"sidenav-item-link\" href=\"user-billing.html\">
                                <span class=\"nav-text\">User billing</span>

                              </a>
                            </li>






                            <li >
                              <a class=\"sidenav-item-link\" href=\"user-notify-settings.html\">
                                <span class=\"nav-text\">User Notify Settings</span>

                              </a>
                            </li>




                      </div>
                    </ul>
                  </li>





                  <li  class=\"has-sub\" >
                    <a class=\"sidenav-item-link\" href=\"javascript:void(0)\" data-toggle=\"collapse\" data-target=\"#authentication\"
                      aria-expanded=\"false\" aria-controls=\"authentication\">
                      <i class=\"mdi mdi-account\"></i>
                      <span class=\"nav-text\">Authentication</span> <b class=\"caret\"></b>
                    </a>
                    <ul  class=\"collapse\"  id=\"authentication\"
                      data-parent=\"#sidebar-menu\">
                      <div class=\"sub-menu\">



                            <li >
                              <a class=\"sidenav-item-link\" href=\"sign-in.html\">
                                <span class=\"nav-text\">Sign In</span>

                              </a>
                            </li>






                            <li >
                              <a class=\"sidenav-item-link\" href=\"sign-up.html\">
                                <span class=\"nav-text\">Sign Up</span>

                              </a>
                            </li>






                            <li >
                              <a class=\"sidenav-item-link\" href=\"reset-password.html\">
                                <span class=\"nav-text\">Reset Password</span>

                              </a>
                            </li>




                      </div>
                    </ul>
                  </li>





                  <li  class=\"has-sub\" >
                    <a class=\"sidenav-item-link\" href=\"javascript:void(0)\" data-toggle=\"collapse\" data-target=\"#other-page\"
                      aria-expanded=\"false\" aria-controls=\"other-page\">
                      <i class=\"mdi mdi-file-multiple\"></i>
                      <span class=\"nav-text\">Other pages</span> <b class=\"caret\"></b>
                    </a>
                    <ul  class=\"collapse\"  id=\"other-page\"
                      data-parent=\"#sidebar-menu\">
                      <div class=\"sub-menu\">



                            <li >
                              <a class=\"sidenav-item-link\" href=\"invoice.html\">
                                <span class=\"nav-text\">Invoice</span>

                              </a>
                            </li>






                            <li >
                              <a class=\"sidenav-item-link\" href=\"404.html\">
                                <span class=\"nav-text\">404 page</span>

                              </a>
                            </li>






                            <li >
                              <a class=\"sidenav-item-link\" href=\"page-comingsoon.html\">
                                <span class=\"nav-text\">Coming Soon</span>

                              </a>
                            </li>






                            <li >
                              <a class=\"sidenav-item-link\" href=\"page-maintenance.html\">
                                <span class=\"nav-text\">Maintenance</span>

                              </a>
                            </li>




                      </div>
                    </ul>
                  </li>





                  <li class=\"section-title\">
                    Documentation
                  </li>





                  <li
                   >
                    <a class=\"sidenav-item-link\" href=\"getting-started.html\">
                      <i class=\"mdi mdi-airplane\"></i>
                      <span class=\"nav-text\">Getting Started</span>
                    </a>
                  </li>





                  <li  class=\"has-sub\" >
                    <a class=\"sidenav-item-link\" href=\"javascript:void(0)\" data-toggle=\"collapse\" data-target=\"#customization\"
                      aria-expanded=\"false\" aria-controls=\"customization\">
                      <i class=\"mdi mdi-square-edit-outline\"></i>
                      <span class=\"nav-text\">Customization</span> <b class=\"caret\"></b>
                    </a>
                    <ul  class=\"collapse\"  id=\"customization\"
                      data-parent=\"#sidebar-menu\">
                      <div class=\"sub-menu\">



                            <li >
                              <a class=\"sidenav-item-link\" href=\"navbar-customization.html\">
                                <span class=\"nav-text\">Navbar</span>

                              </a>
                            </li>






                            <li >
                              <a class=\"sidenav-item-link\" href=\"sidebar-customization.html\">
                                <span class=\"nav-text\">Sidebar</span>

                              </a>
                            </li>






                            <li >
                              <a class=\"sidenav-item-link\" href=\"styling.html\">
                                <span class=\"nav-text\">Styling</span>

                              </a>
                            </li>




                      </div>
                    </ul>
                  </li>



              </ul>

            </div>

            <div class=\"sidebar-footer\">
              <div class=\"sidebar-footer-content\">
                <ul class=\"d-flex\">
                  <li>
                    <a href=\"user-account-settings.html\" data-toggle=\"tooltip\" title=\"Profile settings\"><i class=\"mdi mdi-settings\"></i></a></li>
                  <li>
                    <a href=\"#\" data-toggle=\"tooltip\" title=\"No chat messages\"><i class=\"mdi mdi-chat-processing\"></i></a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </aside>



      <!-- ====================================
      ——— PAGE WRAPPER
      ===================================== -->
      <div class=\"page-wrapper\">

          <!-- Header -->
          <header class=\"main-header\" id=\"header\">
            <nav class=\"navbar navbar-expand-lg navbar-light\" id=\"navbar\">
              <!-- Sidebar toggle button -->
              <button id=\"sidebar-toggler\" class=\"sidebar-toggle\">
                <span class=\"sr-only\">Toggle navigation</span>
              </button>

              <span class=\"page-title\">dashboard</span>

              <div class=\"navbar-right \">

                <!-- search form -->
                <div class=\"search-form\">
                  <form action=\"index.html\" method=\"get\">
                    <div class=\"input-group input-group-sm\" id=\"input-group-search\">
                      <input type=\"text\" autocomplete=\"off\" name=\"query\" id=\"search-input\" class=\"form-control\" placeholder=\"Search...\" />
                      <div class=\"input-group-append\">
                        <button class=\"btn\" type=\"button\">/</button>
                      </div>
                    </div>
                  </form>
                  <ul class=\"dropdown-menu dropdown-menu-search\">

                    <li class=\"nav-item\">
                      <a class=\"nav-link\" href=\"index.html\">Morbi leo risus</a>
                    </li>
                    <li class=\"nav-item\">
                      <a class=\"nav-link\" href=\"index.html\">Dapibus ac facilisis in</a>
                    </li>
                    <li class=\"nav-item\">
                      <a class=\"nav-link\" href=\"index.html\">Porta ac consectetur ac</a>
                    </li>
                    <li class=\"nav-item\">
                      <a class=\"nav-link\" href=\"index.html\">Vestibulum at eros</a>
                    </li>

                  </ul>

                </div>

                <ul class=\"nav navbar-nav\">
                  <!-- Offcanvas -->
                  <li class=\"custom-dropdown\">
                    <a class=\"offcanvas-toggler active custom-dropdown-toggler\" data-offcanvas=\"contact-off\" href=\"javascript:\" >
                      <i class=\"mdi mdi-contacts icon\"></i>
                    </a>
                  </li>
                  <li class=\"custom-dropdown\">
                    <button class=\"notify-toggler custom-dropdown-toggler\">
                      <i class=\"mdi mdi-bell-outline icon\"></i>
                      <span class=\"badge badge-xs rounded-circle\">21</span>
                    </button>
                    <div class=\"dropdown-notify\">

                      <header>
                        <div class=\"nav nav-underline\" id=\"nav-tab\" role=\"tablist\">
                          <a class=\"nav-item nav-link active\" id=\"all-tabs\" data-toggle=\"tab\" href=\"#all\" role=\"tab\" aria-controls=\"nav-home\"
                            aria-selected=\"true\">All (5)</a>
                          <a class=\"nav-item nav-link\" id=\"message-tab\" data-toggle=\"tab\" href=\"#message\" role=\"tab\" aria-controls=\"nav-profile\"
                            aria-selected=\"false\">Msgs (4)</a>
                          <a class=\"nav-item nav-link\" id=\"other-tab\" data-toggle=\"tab\" href=\"#other\" role=\"tab\" aria-controls=\"nav-contact\"
                            aria-selected=\"false\">Others (3)</a>
                        </div>
                      </header>

                      <div class=\"\" data-simplebar style=\"height: 325px;\">
                        <div class=\"tab-content\" id=\"myTabContent\">

                          <div class=\"tab-pane fade show active\" id=\"all\" role=\"tabpanel\" aria-labelledby=\"all-tabs\">

                            <div class=\"media media-sm bg-warning-10 p-4 mb-0\">
                              <div class=\"media-sm-wrapper\">
                                <a href=\"user-profile.html\">
                                  <img src=\"";
        // line 1012
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backend/images/user/user-sm-02.jpg"), "html", null, true);
        yield "\" alt=\"User Image\">
                                </a>
                              </div>
                              <div class=\"media-body\">
                                <a href=\"user-profile.html\">
                                  <span class=\"title mb-0\">John Doe</span>
                                  <span class=\"discribe\">Extremity sweetness difficult behaviour he of. On disposal of as landlord horrible. Afraid at highly months do things on at.</span>
                                  <span class=\"time\">
                                    <time>Just now</time>...
                                  </span>
                                </a>
                              </div>
                            </div>

                            <div class=\"media media-sm p-4 bg-light mb-0\">
                              <div class=\"media-sm-wrapper bg-primary\">
                                <a href=\"user-profile.html\">
                                  <i class=\"mdi mdi-calendar-check-outline\"></i>
                                </a>
                              </div>
                              <div class=\"media-body\">
                                <a href=\"user-profile.html\">
                                  <span class=\"title mb-0\">New event added</span>
                                  <span class=\"discribe\">1/3/2014 (1pm - 2pm)</span>
                                  <span class=\"time\">
                                    <time>10 min ago...</time>...
                                  </span>
                                </a>
                              </div>
                            </div>

                            <div class=\"media media-sm p-4 mb-0\">
                              <div class=\"media-sm-wrapper\">
                                <a href=\"user-profile.html\">
                                  <img src=\"";
        // line 1046
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backend/images/user/user-sm-03.jpg"), "html", null, true);
        yield "\" alt=\"User Image\">
                                </a>
                              </div>
                              <div class=\"media-body\">
                                <a href=\"user-profile.html\">
                                  <span class=\"title mb-0\">Sagge Hudson</span>
                                  <span class=\"discribe\">On disposal of as landlord Afraid at highly months do things on at.</span>
                                  <span class=\"time\">
                                    <time>1 hrs ago</time>...
                                  </span>
                                </a>
                              </div>
                            </div>

                            <div class=\"media media-sm p-4 mb-0\">
                              <div class=\"media-sm-wrapper bg-info-dark\">
                                <a href=\"user-profile.html\">
                                  <i class=\"mdi mdi-account-multiple-check\"></i>
                                </a>
                              </div>
                              <div class=\"media-body\">
                                <a href=\"user-profile.html\">
                                  <span class=\"title mb-0\">Add request</span>
                                  <span class=\"discribe\">Add Dany Jones as your contact.</span>
                                  <div class=\"buttons\">
                                    <a href=\"#\" class=\"btn btn-sm btn-success shadow-none text-white\">accept</a>
                                    <a href=\"#\" class=\"btn btn-sm shadow-none\">delete</a>
                                  </div>
                                  <span class=\"time\">
                                    <time>6 hrs ago</time>...
                                  </span>
                                </a>
                              </div>
                            </div>

                            <div class=\"media media-sm p-4 mb-0\">
                              <div class=\"media-sm-wrapper bg-info\">
                                <a href=\"user-profile.html\">
                                  <i class=\"mdi mdi-playlist-check\"></i>
                                </a>
                              </div>
                              <div class=\"media-body\">
                                <a href=\"user-profile.html\">
                                  <span class=\"title mb-0\">Task complete</span>
                                  <span class=\"discribe\">Afraid at highly months do things on at.</span>
                                  <span class=\"time\">
                                    <time>1 hrs ago</time>...
                                  </span>
                                </a>
                              </div>
                            </div>

                          </div>

                          <div class=\"tab-pane fade\" id=\"message\" role=\"tabpanel\" aria-labelledby=\"message-tab\">

                            <div class=\"media media-sm p-4 mb-0\">
                              <div class=\"media-sm-wrapper\">
                                <a href=\"user-profile.html\">
                                  <img src=\"";
        // line 1105
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backend/images/user/user-sm-01.jpg"), "html", null, true);
        yield "\" alt=\"User Image\">
                                </a>
                              </div>
                              <div class=\"media-body\">
                                <a href=\"user-profile.html\">
                                  <span class=\"title mb-0\">Selena Wagner</span>
                                  <span class=\"discribe\">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</span>
                                  <span class=\"time\">
                                    <time>15 min ago</time>...
                                  </span>
                                </a>
                              </div>
                            </div>

                            <div class=\"media media-sm p-4 mb-0\">
                              <div class=\"media-sm-wrapper\">
                                <a href=\"user-profile.html\">
                                  <img src=\"";
        // line 1122
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backend/images/user/user-sm-03.jpg"), "html", null, true);
        yield "\" alt=\"User Image\">
                                </a>
                              </div>
                              <div class=\"media-body\">
                                <a href=\"user-profile.html\">
                                  <span class=\"title mb-0\">Sagge Hudson</span>
                                  <span class=\"discribe\">On disposal of as landlord Afraid at highly months do things on at.</span>
                                  <span class=\"time\">
                                    <time>1 hrs ago</time>...
                                  </span>
                                </a>
                              </div>
                            </div>

                            <div class=\"media media-sm bg-warning-10 p-4 mb-0\">
                              <div class=\"media-sm-wrapper\">
                                <a href=\"user-profile.html\">
                                  <img src=\"";
        // line 1139
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backend/images/user/user-sm-02.jpg"), "html", null, true);
        yield "\" alt=\"User Image\">
                                </a>
                              </div>
                              <div class=\"media-body\">
                                <a href=\"user-profile.html\">
                                  <span class=\"title mb-0\">John Doe</span>
                                  <span class=\"discribe\">Extremity sweetness difficult behaviour he of. On disposal of as landlord horrible. Afraid
                                    at highly months do things on at.</span>
                                  <span class=\"time\">
                                    <time>Just now</time>...
                                  </span>
                                </a>
                              </div>
                            </div>

                            <div class=\"media media-sm p-4 mb-0\">
                              <div class=\"media-sm-wrapper\">
                                <a href=\"user-profile.html\">
                                  <img src=\"";
        // line 1157
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backend/images/user/user-sm-04.jpg"), "html", null, true);
        yield "\" alt=\"User Image\">
                                </a>
                              </div>
                              <div class=\"media-body\">
                                <a href=\"user-profile.html\">
                                  <span class=\"title mb-0\">Albrecht Straub</span>
                                  <span class=\"discribe\"> Beatae quia natus assumenda laboriosam, nisi perferendis aliquid consectetur expedita non tenetur.</span>
                                  <span class=\"time\">
                                    <time>Just now</time>...
                                  </span>
                                </a>
                              </div>
                            </div>

                          </div>
                          <div class=\"tab-pane fade\" id=\"other\" role=\"tabpanel\" aria-labelledby=\"contact-tab\">

                            <div class=\"media media-sm p-4 bg-light mb-0\">
                              <div class=\"media-sm-wrapper bg-primary\">
                                <a href=\"user-profile.html\">
                                  <i class=\"mdi mdi-calendar-check-outline\"></i>
                                </a>
                              </div>
                              <div class=\"media-body\">
                                <a href=\"user-profile.html\">
                                  <span class=\"title mb-0\">New event added</span>
                                  <span class=\"discribe\">1/3/2014 (1pm - 2pm)</span>
                                  <span class=\"time\">
                                    <time>10 min ago...</time>...
                                  </span>
                                </a>
                              </div>
                            </div>

                            <div class=\"media media-sm p-4 mb-0\">
                              <div class=\"media-sm-wrapper bg-info-dark\">
                                <a href=\"user-profile.html\">
                                  <i class=\"mdi mdi-account-multiple-check\"></i>
                                </a>
                              </div>
                              <div class=\"media-body\">
                                <a href=\"user-profile.html\">
                                  <span class=\"title mb-0\">Add request</span>
                                  <span class=\"discribe\">Add Dany Jones as your contact.</span>
                                  <div class=\"buttons\">
                                    <a href=\"#\" class=\"btn btn-sm btn-success shadow-none text-white\">accept</a>
                                    <a href=\"#\" class=\"btn btn-sm shadow-none\">delete</a>
                                  </div>
                                  <span class=\"time\">
                                    <time>6 hrs ago</time>...
                                  </span>
                                </a>
                              </div>
                            </div>

                            <div class=\"media media-sm p-4 mb-0\">
                              <div class=\"media-sm-wrapper bg-info\">
                                <a href=\"user-profile.html\">
                                  <i class=\"mdi mdi-playlist-check\"></i>
                                </a>
                              </div>
                              <div class=\"media-body\">
                                <a href=\"user-profile.html\">
                                  <span class=\"title mb-0\">Task complete</span>
                                  <span class=\"discribe\">Afraid at highly months do things on at.</span>
                                  <span class=\"time\">
                                    <time>1 hrs ago</time>...
                                  </span>
                                </a>
                              </div>
                            </div>

                          </div>
                        </div>
                      </div>

                      <footer class=\"border-top dropdown-notify-footer\">
                        <div class=\"d-flex justify-content-between align-items-center py-2 px-4\">
                          <span>Last updated 3 min ago</span>
                          <a id=\"refress-button\" href=\"javascript:\" class=\"btn mdi mdi-cached btn-refress\"></a>
                        </div>
                      </footer>
                    </div>
                  </li>
                  <!-- User Account -->
                  <li class=\"dropdown user-menu\">
                    <button class=\"dropdown-toggle nav-link\" data-toggle=\"dropdown\">
                      <img src=\"";
        // line 1244
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backend/images/user/user-xs-01.jpg"), "html", null, true);
        yield "\" class=\"user-image rounded-circle\" alt=\"User Image\" />
                      <span class=\"d-none d-lg-inline-block\">John Doe</span>
                    </button>
                    <ul class=\"dropdown-menu dropdown-menu-right\">
                      <li>
                        <a class=\"dropdown-link-item\" href=\"user-profile.html\">
                          <i class=\"mdi mdi-account-outline\"></i>
                          <span class=\"nav-text\">My Profile</span>
                        </a>
                      </li>
                      <li>
                        <a class=\"dropdown-link-item\" href=\"email-inbox.html\">
                          <i class=\"mdi mdi-email-outline\"></i>
                          <span class=\"nav-text\">Message</span>
                          <span class=\"badge badge-pill badge-primary\">24</span>
                        </a>
                      </li>
                      <li>
                        <a class=\"dropdown-link-item\" href=\"user-activities.html\">
                          <i class=\"mdi mdi-diamond-stone\"></i>
                          <span class=\"nav-text\">Activitise</span></a>
                      </li>
                      <li>
                        <a class=\"dropdown-link-item\" href=\"user-account-settings.html\">
                          <i class=\"mdi mdi-settings\"></i>
                          <span class=\"nav-text\">Account Setting</span>
                        </a>
                      </li>

                      <li class=\"dropdown-footer\">
                        <a class=\"dropdown-link-item\" href=\"sign-in.html\"> <i class=\"mdi mdi-logout\"></i> Log Out </a>
                      </li>
                    </ul>
                  </li>
                </ul>
              </div>
            </nav>


          </header>

        <!-- ====================================
        ——— CONTENT WRAPPER
        ===================================== -->
        <div class=\"content-wrapper\">
          <div class=\"content\">
                <!-- Table Product -->
                <div class=\"row\">
                  <div class=\"col-12\">
                    <div class=\"card card-default\">
                      <div class=\"card-header\">
                        <h2>Liste des Commandes</h2>
                        <div class=\"dropdown\">
                          <a class=\"dropdown-toggle\" href=\"#\" role=\"button\" id=\"dropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\"
                            aria-expanded=\"false\"> Yearly Chart
                          </a>

                          <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"dropdownMenuLink\">
                            <a class=\"dropdown-item\" href=\"#\">Action</a>
                            <a class=\"dropdown-item\" href=\"#\">Another action</a>
                            <a class=\"dropdown-item\" href=\"#\">Something else here</a>
                          </div>
                        </div>
                      </div>
                      <div class=\"card-body\">
                        <table id=\"productsTable\" class=\"table table-hover table-product\" style=\"width:100%\">
                          ";
        // line 1310
        yield from $this->loadTemplate("commande/index.html.twig", "backend/order.html.twig", 1310)->unwrap()->yield($context);
        // line 1311
        yield "                        </table>
                        <a href=\"#\" class=\"btn btn-primary btn-pill\" data-toggle=\"modal\" data-target=\"#commande-modal\">Add Commande</a>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Table Product -->
                <div class=\"row\">
                  <div class=\"col-12\">
                    <div class=\"card card-default\">
                      <div class=\"card-header\">
                        <h2>Liste des Livraisons</h2>
                        <div class=\"dropdown\">
                          <a class=\"dropdown-toggle\" href=\"#\" role=\"button\" id=\"dropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\"
                            aria-expanded=\"false\"> Yearly Chart
                          </a>

                          <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"dropdownMenuLink\">
                            <a class=\"dropdown-item\" href=\"#\">Action</a>
                            <a class=\"dropdown-item\" href=\"#\">Another action</a>
                            <a class=\"dropdown-item\" href=\"#\">Something else here</a>
                          </div>
                        </div>
                      </div>
                      <div class=\"card-body\">
                        <table id=\"productsTable\" class=\"table table-hover table-product\" style=\"width:100%\">
                          ";
        // line 1337
        yield from $this->loadTemplate("livraison/index.html.twig", "backend/order.html.twig", 1337)->unwrap()->yield($context);
        // line 1338
        yield "                        </table>
                        <a href=\"#\" class=\"btn btn-primary btn-pill\" data-toggle=\"modal\" data-target=\"#livraison-modal\">Add Livraison</a>
                      </div>
                    </div>
                  </div>
                </div>

<!-- Commande Modal -->
<div class=\"modal fade\" id=\"commande-modal\" aria-labelledby=\"commande-modal\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-xl modal-dialog-centered d-flex justify-content-center\" style=\"max-width: 80vw;\">
        <form method=\"post\" novalidate>
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h2 class=\"modal-title\">Add Commande</h2>
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                </div>
                <div class=\"modal-body\">
                    ";
        // line 1357
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["commandeForm"]) || array_key_exists("commandeForm", $context) ? $context["commandeForm"] : (function () { throw new RuntimeError('Variable "commandeForm" does not exist.', 1357, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        yield "

                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            <div class=\"form-group\">
                                ";
        // line 1362
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["commandeForm"]) || array_key_exists("commandeForm", $context) ? $context["commandeForm"] : (function () { throw new RuntimeError('Variable "commandeForm" does not exist.', 1362, $this->source); })()), "clientId", [], "any", false, false, false, 1362), 'label');
        yield "
                                ";
        // line 1363
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["commandeForm"]) || array_key_exists("commandeForm", $context) ? $context["commandeForm"] : (function () { throw new RuntimeError('Variable "commandeForm" does not exist.', 1363, $this->source); })()), "clientId", [], "any", false, false, false, 1363), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                ";
        // line 1364
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["commandeForm"]) || array_key_exists("commandeForm", $context) ? $context["commandeForm"] : (function () { throw new RuntimeError('Variable "commandeForm" does not exist.', 1364, $this->source); })()), "clientId", [], "any", false, false, false, 1364), 'errors');
        yield "
                            </div>

                            <div class=\"form-group\">
                                ";
        // line 1368
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["commandeForm"]) || array_key_exists("commandeForm", $context) ? $context["commandeForm"] : (function () { throw new RuntimeError('Variable "commandeForm" does not exist.', 1368, $this->source); })()), "date", [], "any", false, false, false, 1368), 'label');
        yield "
                                ";
        // line 1369
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["commandeForm"]) || array_key_exists("commandeForm", $context) ? $context["commandeForm"] : (function () { throw new RuntimeError('Variable "commandeForm" does not exist.', 1369, $this->source); })()), "date", [], "any", false, false, false, 1369), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                ";
        // line 1370
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["commandeForm"]) || array_key_exists("commandeForm", $context) ? $context["commandeForm"] : (function () { throw new RuntimeError('Variable "commandeForm" does not exist.', 1370, $this->source); })()), "date", [], "any", false, false, false, 1370), 'errors');
        yield "
                            </div>

                            <div class=\"form-group\">
                                ";
        // line 1374
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["commandeForm"]) || array_key_exists("commandeForm", $context) ? $context["commandeForm"] : (function () { throw new RuntimeError('Variable "commandeForm" does not exist.', 1374, $this->source); })()), "status", [], "any", false, false, false, 1374), 'label');
        yield "
                                ";
        // line 1375
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["commandeForm"]) || array_key_exists("commandeForm", $context) ? $context["commandeForm"] : (function () { throw new RuntimeError('Variable "commandeForm" does not exist.', 1375, $this->source); })()), "status", [], "any", false, false, false, 1375), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                            </div>
                        </div>

                        <div class=\"col-md-6\">
                            <div class=\"form-group\">
                                ";
        // line 1381
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["commandeForm"]) || array_key_exists("commandeForm", $context) ? $context["commandeForm"] : (function () { throw new RuntimeError('Variable "commandeForm" does not exist.', 1381, $this->source); })()), "prix", [], "any", false, false, false, 1381), 'label');
        yield "
                                ";
        // line 1382
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["commandeForm"]) || array_key_exists("commandeForm", $context) ? $context["commandeForm"] : (function () { throw new RuntimeError('Variable "commandeForm" does not exist.', 1382, $this->source); })()), "prix", [], "any", false, false, false, 1382), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                ";
        // line 1383
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["commandeForm"]) || array_key_exists("commandeForm", $context) ? $context["commandeForm"] : (function () { throw new RuntimeError('Variable "commandeForm" does not exist.', 1383, $this->source); })()), "prix", [], "any", false, false, false, 1383), 'errors');
        yield "
                            </div>

                            <div class=\"form-group\">
                                ";
        // line 1387
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["commandeForm"]) || array_key_exists("commandeForm", $context) ? $context["commandeForm"] : (function () { throw new RuntimeError('Variable "commandeForm" does not exist.', 1387, $this->source); })()), "modePaiement", [], "any", false, false, false, 1387), 'label');
        yield "
                                ";
        // line 1388
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["commandeForm"]) || array_key_exists("commandeForm", $context) ? $context["commandeForm"] : (function () { throw new RuntimeError('Variable "commandeForm" does not exist.', 1388, $this->source); })()), "modePaiement", [], "any", false, false, false, 1388), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                            </div>
                        </div>
                    </div>
                    ";
        // line 1392
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["commandeForm"]) || array_key_exists("commandeForm", $context) ? $context["commandeForm"] : (function () { throw new RuntimeError('Variable "commandeForm" does not exist.', 1392, $this->source); })()), "save", [], "any", false, false, false, 1392), 'widget', ["attr" => ["style" => "display: none;"]]);
        yield "
                    ";
        // line 1393
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["commandeForm"]) || array_key_exists("commandeForm", $context) ? $context["commandeForm"] : (function () { throw new RuntimeError('Variable "commandeForm" does not exist.', 1393, $this->source); })()), 'form_end');
        yield "
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Cancel</button>
                    <button type=\"submit\" class=\"btn btn-primary\">Save</button>
                </div>
            </div>
        </form>
    </div>
</div>


<!-- Livraison Modal -->
<div class=\"modal fade\" id=\"livraison-modal\" aria-labelledby=\"livraison-modal\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-xl modal-dialog-centered d-flex justify-content-center\" style=\"max-width: 80vw;\">
        <form method=\"post\" novalidate>
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h2 class=\"modal-title\">Add Livraison</h2>
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                </div>
                <div class=\"modal-body\">
                    ";
        // line 1417
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["livraisonForm"]) || array_key_exists("livraisonForm", $context) ? $context["livraisonForm"] : (function () { throw new RuntimeError('Variable "livraisonForm" does not exist.', 1417, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        yield "

                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            <div class=\"form-group\">
                                ";
        // line 1422
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["livraisonForm"]) || array_key_exists("livraisonForm", $context) ? $context["livraisonForm"] : (function () { throw new RuntimeError('Variable "livraisonForm" does not exist.', 1422, $this->source); })()), "livreur", [], "any", false, false, false, 1422), 'label');
        yield "
                                ";
        // line 1423
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["livraisonForm"]) || array_key_exists("livraisonForm", $context) ? $context["livraisonForm"] : (function () { throw new RuntimeError('Variable "livraisonForm" does not exist.', 1423, $this->source); })()), "livreur", [], "any", false, false, false, 1423), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                ";
        // line 1424
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["livraisonForm"]) || array_key_exists("livraisonForm", $context) ? $context["livraisonForm"] : (function () { throw new RuntimeError('Variable "livraisonForm" does not exist.', 1424, $this->source); })()), "livreur", [], "any", false, false, false, 1424), 'errors');
        yield "
                            </div>

                            <div class=\"form-group\">
                                ";
        // line 1428
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["livraisonForm"]) || array_key_exists("livraisonForm", $context) ? $context["livraisonForm"] : (function () { throw new RuntimeError('Variable "livraisonForm" does not exist.', 1428, $this->source); })()), "adresse", [], "any", false, false, false, 1428), 'label');
        yield "
                                ";
        // line 1429
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["livraisonForm"]) || array_key_exists("livraisonForm", $context) ? $context["livraisonForm"] : (function () { throw new RuntimeError('Variable "livraisonForm" does not exist.', 1429, $this->source); })()), "adresse", [], "any", false, false, false, 1429), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                ";
        // line 1430
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["livraisonForm"]) || array_key_exists("livraisonForm", $context) ? $context["livraisonForm"] : (function () { throw new RuntimeError('Variable "livraisonForm" does not exist.', 1430, $this->source); })()), "adresse", [], "any", false, false, false, 1430), 'errors');
        yield "
                            </div>

                            <div class=\"form-group\">
                                ";
        // line 1434
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["livraisonForm"]) || array_key_exists("livraisonForm", $context) ? $context["livraisonForm"] : (function () { throw new RuntimeError('Variable "livraisonForm" does not exist.', 1434, $this->source); })()), "date", [], "any", false, false, false, 1434), 'label');
        yield "
                                ";
        // line 1435
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["livraisonForm"]) || array_key_exists("livraisonForm", $context) ? $context["livraisonForm"] : (function () { throw new RuntimeError('Variable "livraisonForm" does not exist.', 1435, $this->source); })()), "date", [], "any", false, false, false, 1435), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                ";
        // line 1436
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["livraisonForm"]) || array_key_exists("livraisonForm", $context) ? $context["livraisonForm"] : (function () { throw new RuntimeError('Variable "livraisonForm" does not exist.', 1436, $this->source); })()), "date", [], "any", false, false, false, 1436), 'errors');
        yield "
                            </div>
                        </div>

                        <div class=\"col-md-6\">
                            <div class=\"form-group\">
                                ";
        // line 1442
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["livraisonForm"]) || array_key_exists("livraisonForm", $context) ? $context["livraisonForm"] : (function () { throw new RuntimeError('Variable "livraisonForm" does not exist.', 1442, $this->source); })()), "status", [], "any", false, false, false, 1442), 'label');
        yield "
                                ";
        // line 1443
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["livraisonForm"]) || array_key_exists("livraisonForm", $context) ? $context["livraisonForm"] : (function () { throw new RuntimeError('Variable "livraisonForm" does not exist.', 1443, $this->source); })()), "status", [], "any", false, false, false, 1443), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                            </div>

                            <div class=\"form-group\">
                                ";
        // line 1447
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["livraisonForm"]) || array_key_exists("livraisonForm", $context) ? $context["livraisonForm"] : (function () { throw new RuntimeError('Variable "livraisonForm" does not exist.', 1447, $this->source); })()), "mode", [], "any", false, false, false, 1447), 'label');
        yield "
                                ";
        // line 1448
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["livraisonForm"]) || array_key_exists("livraisonForm", $context) ? $context["livraisonForm"] : (function () { throw new RuntimeError('Variable "livraisonForm" does not exist.', 1448, $this->source); })()), "mode", [], "any", false, false, false, 1448), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                            </div>
                                ";
        // line 1450
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["livraisonForm"]) || array_key_exists("livraisonForm", $context) ? $context["livraisonForm"] : (function () { throw new RuntimeError('Variable "livraisonForm" does not exist.', 1450, $this->source); })()), "prix", [], "any", false, false, false, 1450), 'widget', ["attr" => ["style" => "display: none;"]]);
        yield "
                        </div>
                    </div>
                    ";
        // line 1453
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["livraisonForm"]) || array_key_exists("livraisonForm", $context) ? $context["livraisonForm"] : (function () { throw new RuntimeError('Variable "livraisonForm" does not exist.', 1453, $this->source); })()), "save", [], "any", false, false, false, 1453), 'widget', ["attr" => ["style" => "display: none;"]]);
        yield "
                    ";
        // line 1454
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["livraisonForm"]) || array_key_exists("livraisonForm", $context) ? $context["livraisonForm"] : (function () { throw new RuntimeError('Variable "livraisonForm" does not exist.', 1454, $this->source); })()), 'form_end');
        yield "
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Cancel</button>
                    <button type=\"submit\" class=\"btn btn-primary\">Save</button>
                </div>
            </div>
        </form>
    </div>
</div>



</div>

        </div>

          <!-- Footer -->
          <footer class=\"footer mt-auto\">
            <div class=\"copyright bg-white\">
              <p>
                &copy; <span id=\"copy-year\"></span> Copyright ECOWAY
              </p>
            </div>
            <script>
                var d = new Date();
                var year = d.getFullYear();
                document.getElementById(\"copy-year\").innerHTML = year;
            </script>
          </footer>

      </div>
    </div>

                    <!-- Card Offcanvas -->
                    <div class=\"card card-offcanvas\" id=\"contact-off\" >
                      <div class=\"card-header\">
                        <h2>Contacts</h2>
                        <a href=\"#\" class=\"btn btn-primary btn-pill px-4\">Add New</a>
                      </div>
                      <div class=\"card-body\">

                        <div class=\"mb-4\">
                          <input type=\"text\" class=\"form-control form-control-lg form-control-secondary rounded-0\" placeholder=\"Search contacts...\">
                        </div>

                        <div class=\"media media-sm\">
                          <div class=\"media-sm-wrapper\">
                            <a href=\"user-profile.html\">
                              <img src=\"";
        // line 1503
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backend/images/user/user-sm-01.jpg"), "html", null, true);
        yield "\" alt=\"User Image\">
                              <span class=\"active bg-primary\"></span>
                            </a>
                          </div>
                          <div class=\"media-body\">
                            <a href=\"user-profile.html\">
                              <span class=\"title\">Selena Wagner</span>
                              <span class=\"discribe\">Designer</span>
                            </a>
                          </div>
                        </div>

                        <div class=\"media media-sm\">
                          <div class=\"media-sm-wrapper\">
                            <a href=\"user-profile.html\">
                              <img src=\"";
        // line 1518
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backend/images/user/user-sm-02.jpg"), "html", null, true);
        yield "\" alt=\"User Image\">
                              <span class=\"active bg-primary\"></span>
                            </a>
                          </div>
                          <div class=\"media-body\">
                            <a href=\"user-profile.html\">
                              <span class=\"title\">Walter Reuter</span>
                              <span>Developer</span>
                            </a>
                          </div>
                        </div>

                        <div class=\"media media-sm\">
                          <div class=\"media-sm-wrapper\">
                            <a href=\"user-profile.html\">
                              <img src=\"";
        // line 1533
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backend/images/user/user-sm-03.jpg"), "html", null, true);
        yield "\" alt=\"User Image\">
                            </a>
                          </div>
                          <div class=\"media-body\">
                            <a href=\"user-profile.html\">
                              <span class=\"title\">Larissa Gebhardt</span>
                              <span>Cyber Punk</span>
                            </a>
                          </div>
                        </div>

                        <div class=\"media media-sm\">
                          <div class=\"media-sm-wrapper\">
                            <a href=\"user-profile.html\">
                              <img src=\"";
        // line 1547
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backend/images/user/user-sm-04.jpg"), "html", null, true);
        yield "\" alt=\"User Image\">
                            </a>

                          </div>
                          <div class=\"media-body\">
                            <a href=\"user-profile.html\">
                              <span class=\"title\">Albrecht Straub</span>
                              <span>Photographer</span>
                            </a>
                          </div>
                        </div>

                        <div class=\"media media-sm\">
                          <div class=\"media-sm-wrapper\">
                            <a href=\"user-profile.html\">
                              <img src=\"";
        // line 1562
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backend/images/user/user-sm-05.jpg"), "html", null, true);
        yield "\" alt=\"User Image\">
                              <span class=\"active bg-danger\"></span>
                            </a>
                          </div>
                          <div class=\"media-body\">
                            <a href=\"user-profile.html\">
                              <span class=\"title\">Leopold Ebert</span>
                              <span>Fashion Designer</span>
                            </a>
                          </div>
                        </div>

                        <div class=\"media media-sm\">
                          <div class=\"media-sm-wrapper\">
                            <a href=\"user-profile.html\">
                              <img src=\"";
        // line 1577
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backend/images/user/user-sm-06.jpg"), "html", null, true);
        yield "\" alt=\"User Image\">
                              <span class=\"active bg-primary\"></span>
                            </a>
                          </div>
                          <div class=\"media-body\">
                            <a href=\"user-profile.html\">
                              <span class=\"title\">Selena Wagner</span>
                              <span>Photographer</span>
                            </a>
                          </div>
                        </div>

                      </div>
                    </div>
  </body>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "backend/order.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  1817 => 1577,  1799 => 1562,  1781 => 1547,  1764 => 1533,  1746 => 1518,  1728 => 1503,  1676 => 1454,  1672 => 1453,  1666 => 1450,  1661 => 1448,  1657 => 1447,  1650 => 1443,  1646 => 1442,  1637 => 1436,  1633 => 1435,  1629 => 1434,  1622 => 1430,  1618 => 1429,  1614 => 1428,  1607 => 1424,  1603 => 1423,  1599 => 1422,  1591 => 1417,  1564 => 1393,  1560 => 1392,  1553 => 1388,  1549 => 1387,  1542 => 1383,  1538 => 1382,  1534 => 1381,  1525 => 1375,  1521 => 1374,  1514 => 1370,  1510 => 1369,  1506 => 1368,  1499 => 1364,  1495 => 1363,  1491 => 1362,  1483 => 1357,  1462 => 1338,  1460 => 1337,  1432 => 1311,  1430 => 1310,  1361 => 1244,  1271 => 1157,  1250 => 1139,  1230 => 1122,  1210 => 1105,  1148 => 1046,  1111 => 1012,  126 => 30,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'back.html.twig' %}

{% block title %}Commande index{% endblock %}

{% block body %}
<body class=\"navbar-fixed sidebar-fixed\" id=\"body\">
    <script>
      NProgress.configure({ showSpinner: false });
      NProgress.start();
    </script>


    <div id=\"toaster\"></div>


    <!-- ====================================
    ——— WRAPPER
    ===================================== -->
    <div class=\"wrapper\">


        <!-- ====================================
          ——— LEFT SIDEBAR WITH OUT FOOTER
        ===================================== -->
        <aside class=\"left-sidebar sidebar-dark\" id=\"left-sidebar\">
          <div id=\"sidebar\" class=\"sidebar sidebar-with-footer\">
            <!-- Aplication Brand -->
            <div class=\"app-brand\">
              <a href=\"/index.html\">
                <img src=\"{{asset('backend/images/logo.png')}}\" alt=\"Mono\">
                <span class=\"brand-name\">MONO</span>
              </a>
            </div>
            <!-- begin sidebar scrollbar -->
            <div class=\"sidebar-left\" data-simplebar style=\"height: 100%;\">
              <!-- sidebar menu -->
              <ul class=\"nav sidebar-inner\" id=\"sidebar-menu\">

                  <li class=\"section-title\">
                    Dashboards
                  </li>

                  <li
                   class=\"active\"
                   >
                    <a class=\"sidenav-item-link\" href=\"/back/order\">
                      <i class=\"mdi mdi-package-variant-closed\"></i>
                      <span class=\"nav-text\">Order Dashboard</span>
                    </a>
                  </li>

                  <li>
                    <a class=\"sidenav-item-link\" href=\"/back/dropoff\">
                      <i class=\"mdi mdi-map-marker\"></i>
                      <span class=\"nav-text\">Drop-off Dashboard</span>
                    </a>
                  </li>

                  <li>
                    <a class=\"sidenav-item-link\" href=\"/back/products\">
                      <i class=\"mdi mdi-shopping-outline\"></i>
                      <span class=\"nav-text\">Products Dashboard</span>
                    </a>
                  </li>

                  <li>
                    <a class=\"sidenav-item-link\" href=\"/back/blog\">
                      <i class=\"mdi mdi-note-text-outline\"></i>
                      <span class=\"nav-text\">Blog Dashboard</span>
                    </a>
                  </li>

                  <li>
                    <a class=\"sidenav-item-link\" href=\"/back/event\">
                      <i class=\"mdi mdi-calendar\"></i>
                      <span class=\"nav-text\">Event Dashboard</span>
                    </a>
                  </li>

                  <li>
                    <a class=\"sidenav-item-link\" href=\"/back/user\">
                      <i class=\"mdi mdi-account\"></i>
                      <span class=\"nav-text\">User Dashboard</span>
                    </a>
                  </li>





                  <li class=\"section-title\">
                    Apps
                  </li>





                  <li
                   >
                    <a class=\"sidenav-item-link\" href=\"chat.html\">
                      <i class=\"mdi mdi-wechat\"></i>
                      <span class=\"nav-text\">Chat</span>
                    </a>
                  </li>





                  <li
                   >
                    <a class=\"sidenav-item-link\" href=\"contacts.html\">
                      <i class=\"mdi mdi-phone\"></i>
                      <span class=\"nav-text\">Contacts</span>
                    </a>
                  </li>





                  <li
                   >
                    <a class=\"sidenav-item-link\" href=\"team.html\">
                      <i class=\"mdi mdi-account-group\"></i>
                      <span class=\"nav-text\">Team</span>
                    </a>
                  </li>





                  <li
                   >
                    <a class=\"sidenav-item-link\" href=\"calendar.html\">
                      <i class=\"mdi mdi-calendar-check\"></i>
                      <span class=\"nav-text\">Calendar</span>
                    </a>
                  </li>





                  <li  class=\"has-sub\" >
                    <a class=\"sidenav-item-link\" href=\"javascript:void(0)\" data-toggle=\"collapse\" data-target=\"#email\"
                      aria-expanded=\"false\" aria-controls=\"email\">
                      <i class=\"mdi mdi-email\"></i>
                      <span class=\"nav-text\">email</span> <b class=\"caret\"></b>
                    </a>
                    <ul  class=\"collapse\"  id=\"email\"
                      data-parent=\"#sidebar-menu\">
                      <div class=\"sub-menu\">



                            <li >
                              <a class=\"sidenav-item-link\" href=\"email-inbox.html\">
                                <span class=\"nav-text\">Email Inbox</span>

                              </a>
                            </li>






                            <li >
                              <a class=\"sidenav-item-link\" href=\"email-details.html\">
                                <span class=\"nav-text\">Email Details</span>

                              </a>
                            </li>






                            <li >
                              <a class=\"sidenav-item-link\" href=\"email-compose.html\">
                                <span class=\"nav-text\">Email Compose</span>

                              </a>
                            </li>




                      </div>
                    </ul>
                  </li>





                  <li class=\"section-title\">
                    UI Elements
                  </li>





                  <li  class=\"has-sub\" >
                    <a class=\"sidenav-item-link\" href=\"javascript:void(0)\" data-toggle=\"collapse\" data-target=\"#ui-elements\"
                      aria-expanded=\"false\" aria-controls=\"ui-elements\">
                      <i class=\"mdi mdi-folder-outline\"></i>
                      <span class=\"nav-text\">UI Components</span> <b class=\"caret\"></b>
                    </a>
                    <ul  class=\"collapse\"  id=\"ui-elements\"
                      data-parent=\"#sidebar-menu\">
                      <div class=\"sub-menu\">



                            <li >
                              <a class=\"sidenav-item-link\" href=\"alert.html\">
                                <span class=\"nav-text\">Alert</span>

                              </a>
                            </li>






                            <li >
                              <a class=\"sidenav-item-link\" href=\"badge.html\">
                                <span class=\"nav-text\">Badge</span>

                              </a>
                            </li>






                            <li >
                              <a class=\"sidenav-item-link\" href=\"breadcrumb.html\">
                                <span class=\"nav-text\">Breadcrumb</span>

                              </a>
                            </li>





                        <li  class=\"has-sub\" >
                          <a class=\"sidenav-item-link\" href=\"javascript:void(0)\" data-toggle=\"collapse\" data-target=\"#buttons\"
                            aria-expanded=\"false\" aria-controls=\"buttons\">
                            <span class=\"nav-text\">Buttons</span> <b class=\"caret\"></b>
                          </a>
                          <ul  class=\"collapse\"  id=\"buttons\">
                            <div class=\"sub-menu\">

                              <li >
                                <a href=\"button-default.html\">Button Default</a>
                              </li>

                              <li >
                                <a href=\"button-dropdown.html\">Button Dropdown</a>
                              </li>

                              <li >
                                <a href=\"button-group.html\">Button Group</a>
                              </li>

                              <li >
                                <a href=\"button-social.html\">Button Social</a>
                              </li>

                              <li >
                                <a href=\"button-loading.html\">Button Loading</a>
                              </li>

                            </div>
                          </ul>
                        </li>





                            <li >
                              <a class=\"sidenav-item-link\" href=\"card.html\">
                                <span class=\"nav-text\">Card</span>

                              </a>
                            </li>






                            <li >
                              <a class=\"sidenav-item-link\" href=\"carousel.html\">
                                <span class=\"nav-text\">Carousel</span>

                              </a>
                            </li>






                            <li >
                              <a class=\"sidenav-item-link\" href=\"collapse.html\">
                                <span class=\"nav-text\">Collapse</span>

                              </a>
                            </li>






                            <li >
                              <a class=\"sidenav-item-link\" href=\"editor.html\">
                                <span class=\"nav-text\">Editor</span>

                              </a>
                            </li>






                            <li >
                              <a class=\"sidenav-item-link\" href=\"list-group.html\">
                                <span class=\"nav-text\">List Group</span>

                              </a>
                            </li>






                            <li >
                              <a class=\"sidenav-item-link\" href=\"modal.html\">
                                <span class=\"nav-text\">Modal</span>

                              </a>
                            </li>






                            <li >
                              <a class=\"sidenav-item-link\" href=\"pagination.html\">
                                <span class=\"nav-text\">Pagination</span>

                              </a>
                            </li>






                            <li >
                              <a class=\"sidenav-item-link\" href=\"popover-tooltip.html\">
                                <span class=\"nav-text\">Popover & Tooltip</span>

                              </a>
                            </li>






                            <li >
                              <a class=\"sidenav-item-link\" href=\"progress-bar.html\">
                                <span class=\"nav-text\">Progress Bar</span>

                              </a>
                            </li>






                            <li >
                              <a class=\"sidenav-item-link\" href=\"spinner.html\">
                                <span class=\"nav-text\">Spinner</span>

                              </a>
                            </li>






                            <li >
                              <a class=\"sidenav-item-link\" href=\"switches.html\">
                                <span class=\"nav-text\">Switches</span>

                              </a>
                            </li>





                        <li  class=\"has-sub\" >
                          <a class=\"sidenav-item-link\" href=\"javascript:void(0)\" data-toggle=\"collapse\" data-target=\"#tables\"
                            aria-expanded=\"false\" aria-controls=\"tables\">
                            <span class=\"nav-text\">Tables</span> <b class=\"caret\"></b>
                          </a>
                          <ul  class=\"collapse\"  id=\"tables\">
                            <div class=\"sub-menu\">

                              <li >
                                <a href=\"bootstarp-tables.html\">Bootstrap Tables</a>
                              </li>

                              <li >
                                <a href=\"data-tables.html\">Data Tables</a>
                              </li>

                            </div>
                          </ul>
                        </li>





                            <li >
                              <a class=\"sidenav-item-link\" href=\"tab.html\">
                                <span class=\"nav-text\">Tab</span>

                              </a>
                            </li>






                            <li >
                              <a class=\"sidenav-item-link\" href=\"toaster.html\">
                                <span class=\"nav-text\">Toaster</span>

                              </a>
                            </li>





                        <li  class=\"has-sub\" >
                          <a class=\"sidenav-item-link\" href=\"javascript:void(0)\" data-toggle=\"collapse\" data-target=\"#icons\"
                            aria-expanded=\"false\" aria-controls=\"icons\">
                            <span class=\"nav-text\">Icons</span> <b class=\"caret\"></b>
                          </a>
                          <ul  class=\"collapse\"  id=\"icons\">
                            <div class=\"sub-menu\">

                              <li >
                                <a href=\"material-icons.html\">Material Icon</a>
                              </li>

                              <li >
                                <a href=\"flag-icons.html\">Flag Icon</a>
                              </li>

                            </div>
                          </ul>
                        </li>




                        <li  class=\"has-sub\" >
                          <a class=\"sidenav-item-link\" href=\"javascript:void(0)\" data-toggle=\"collapse\" data-target=\"#forms\"
                            aria-expanded=\"false\" aria-controls=\"forms\">
                            <span class=\"nav-text\">Forms</span> <b class=\"caret\"></b>
                          </a>
                          <ul  class=\"collapse\"  id=\"forms\">
                            <div class=\"sub-menu\">

                              <li >
                                <a href=\"basic-input.html\">Basic Input</a>
                              </li>

                              <li >
                                <a href=\"input-group.html\">Input Group</a>
                              </li>

                              <li >
                                <a href=\"checkbox-radio.html\">Checkbox & Radio</a>
                              </li>

                              <li >
                                <a href=\"form-validation.html\">Form Validation</a>
                              </li>

                              <li >
                                <a href=\"form-advance.html\">Form Advance</a>
                              </li>

                            </div>
                          </ul>
                        </li>




                        <li  class=\"has-sub\" >
                          <a class=\"sidenav-item-link\" href=\"javascript:void(0)\" data-toggle=\"collapse\" data-target=\"#maps\"
                            aria-expanded=\"false\" aria-controls=\"maps\">
                            <span class=\"nav-text\">Maps</span> <b class=\"caret\"></b>
                          </a>
                          <ul  class=\"collapse\"  id=\"maps\">
                            <div class=\"sub-menu\">

                              <li >
                                <a href=\"google-maps.html\">Google Map</a>
                              </li>

                              <li >
                                <a href=\"vector-maps.html\">Vector Map</a>
                              </li>

                            </div>
                          </ul>
                        </li>




                        <li  class=\"has-sub\" >
                          <a class=\"sidenav-item-link\" href=\"javascript:void(0)\" data-toggle=\"collapse\" data-target=\"#widgets\"
                            aria-expanded=\"false\" aria-controls=\"widgets\">
                            <span class=\"nav-text\">Widgets</span> <b class=\"caret\"></b>
                          </a>
                          <ul  class=\"collapse\"  id=\"widgets\">
                            <div class=\"sub-menu\">

                              <li >
                                <a href=\"widgets-general.html\">General Widget</a>
                              </li>

                              <li >
                                <a href=\"widgets-chart.html\">Chart Widget</a>
                              </li>

                            </div>
                          </ul>
                        </li>



                      </div>
                    </ul>
                  </li>





                  <li  class=\"has-sub\" >
                    <a class=\"sidenav-item-link\" href=\"javascript:void(0)\" data-toggle=\"collapse\" data-target=\"#charts\"
                      aria-expanded=\"false\" aria-controls=\"charts\">
                      <i class=\"mdi mdi-chart-pie\"></i>
                      <span class=\"nav-text\">Charts</span> <b class=\"caret\"></b>
                    </a>
                    <ul  class=\"collapse\"  id=\"charts\"
                      data-parent=\"#sidebar-menu\">
                      <div class=\"sub-menu\">



                            <li >
                              <a class=\"sidenav-item-link\" href=\"apex-charts.html\">
                                <span class=\"nav-text\">Apex Charts</span>

                              </a>
                            </li>




                      </div>
                    </ul>
                  </li>





                  <li class=\"section-title\">
                    Pages
                  </li>





                  <li  class=\"has-sub\" >
                    <a class=\"sidenav-item-link\" href=\"javascript:void(0)\" data-toggle=\"collapse\" data-target=\"#users\"
                      aria-expanded=\"false\" aria-controls=\"users\">
                      <i class=\"mdi mdi-image-filter-none\"></i>
                      <span class=\"nav-text\">User</span> <b class=\"caret\"></b>
                    </a>
                    <ul  class=\"collapse\"  id=\"users\"
                      data-parent=\"#sidebar-menu\">
                      <div class=\"sub-menu\">



                            <li >
                              <a class=\"sidenav-item-link\" href=\"user-profile.html\">
                                <span class=\"nav-text\">User Profile</span>

                              </a>
                            </li>






                            <li >
                              <a class=\"sidenav-item-link\" href=\"user-activities.html\">
                                <span class=\"nav-text\">User Activities</span>

                              </a>
                            </li>






                            <li >
                              <a class=\"sidenav-item-link\" href=\"user-profile-settings.html\">
                                <span class=\"nav-text\">User Profile Settings</span>

                              </a>
                            </li>






                            <li >
                              <a class=\"sidenav-item-link\" href=\"user-account-settings.html\">
                                <span class=\"nav-text\">User Account Settings</span>

                              </a>
                            </li>






                            <li >
                              <a class=\"sidenav-item-link\" href=\"user-planing-settings.html\">
                                <span class=\"nav-text\">User Planing Settings</span>

                              </a>
                            </li>






                            <li >
                              <a class=\"sidenav-item-link\" href=\"user-billing.html\">
                                <span class=\"nav-text\">User billing</span>

                              </a>
                            </li>






                            <li >
                              <a class=\"sidenav-item-link\" href=\"user-notify-settings.html\">
                                <span class=\"nav-text\">User Notify Settings</span>

                              </a>
                            </li>




                      </div>
                    </ul>
                  </li>





                  <li  class=\"has-sub\" >
                    <a class=\"sidenav-item-link\" href=\"javascript:void(0)\" data-toggle=\"collapse\" data-target=\"#authentication\"
                      aria-expanded=\"false\" aria-controls=\"authentication\">
                      <i class=\"mdi mdi-account\"></i>
                      <span class=\"nav-text\">Authentication</span> <b class=\"caret\"></b>
                    </a>
                    <ul  class=\"collapse\"  id=\"authentication\"
                      data-parent=\"#sidebar-menu\">
                      <div class=\"sub-menu\">



                            <li >
                              <a class=\"sidenav-item-link\" href=\"sign-in.html\">
                                <span class=\"nav-text\">Sign In</span>

                              </a>
                            </li>






                            <li >
                              <a class=\"sidenav-item-link\" href=\"sign-up.html\">
                                <span class=\"nav-text\">Sign Up</span>

                              </a>
                            </li>






                            <li >
                              <a class=\"sidenav-item-link\" href=\"reset-password.html\">
                                <span class=\"nav-text\">Reset Password</span>

                              </a>
                            </li>




                      </div>
                    </ul>
                  </li>





                  <li  class=\"has-sub\" >
                    <a class=\"sidenav-item-link\" href=\"javascript:void(0)\" data-toggle=\"collapse\" data-target=\"#other-page\"
                      aria-expanded=\"false\" aria-controls=\"other-page\">
                      <i class=\"mdi mdi-file-multiple\"></i>
                      <span class=\"nav-text\">Other pages</span> <b class=\"caret\"></b>
                    </a>
                    <ul  class=\"collapse\"  id=\"other-page\"
                      data-parent=\"#sidebar-menu\">
                      <div class=\"sub-menu\">



                            <li >
                              <a class=\"sidenav-item-link\" href=\"invoice.html\">
                                <span class=\"nav-text\">Invoice</span>

                              </a>
                            </li>






                            <li >
                              <a class=\"sidenav-item-link\" href=\"404.html\">
                                <span class=\"nav-text\">404 page</span>

                              </a>
                            </li>






                            <li >
                              <a class=\"sidenav-item-link\" href=\"page-comingsoon.html\">
                                <span class=\"nav-text\">Coming Soon</span>

                              </a>
                            </li>






                            <li >
                              <a class=\"sidenav-item-link\" href=\"page-maintenance.html\">
                                <span class=\"nav-text\">Maintenance</span>

                              </a>
                            </li>




                      </div>
                    </ul>
                  </li>





                  <li class=\"section-title\">
                    Documentation
                  </li>





                  <li
                   >
                    <a class=\"sidenav-item-link\" href=\"getting-started.html\">
                      <i class=\"mdi mdi-airplane\"></i>
                      <span class=\"nav-text\">Getting Started</span>
                    </a>
                  </li>





                  <li  class=\"has-sub\" >
                    <a class=\"sidenav-item-link\" href=\"javascript:void(0)\" data-toggle=\"collapse\" data-target=\"#customization\"
                      aria-expanded=\"false\" aria-controls=\"customization\">
                      <i class=\"mdi mdi-square-edit-outline\"></i>
                      <span class=\"nav-text\">Customization</span> <b class=\"caret\"></b>
                    </a>
                    <ul  class=\"collapse\"  id=\"customization\"
                      data-parent=\"#sidebar-menu\">
                      <div class=\"sub-menu\">



                            <li >
                              <a class=\"sidenav-item-link\" href=\"navbar-customization.html\">
                                <span class=\"nav-text\">Navbar</span>

                              </a>
                            </li>






                            <li >
                              <a class=\"sidenav-item-link\" href=\"sidebar-customization.html\">
                                <span class=\"nav-text\">Sidebar</span>

                              </a>
                            </li>






                            <li >
                              <a class=\"sidenav-item-link\" href=\"styling.html\">
                                <span class=\"nav-text\">Styling</span>

                              </a>
                            </li>




                      </div>
                    </ul>
                  </li>



              </ul>

            </div>

            <div class=\"sidebar-footer\">
              <div class=\"sidebar-footer-content\">
                <ul class=\"d-flex\">
                  <li>
                    <a href=\"user-account-settings.html\" data-toggle=\"tooltip\" title=\"Profile settings\"><i class=\"mdi mdi-settings\"></i></a></li>
                  <li>
                    <a href=\"#\" data-toggle=\"tooltip\" title=\"No chat messages\"><i class=\"mdi mdi-chat-processing\"></i></a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </aside>



      <!-- ====================================
      ——— PAGE WRAPPER
      ===================================== -->
      <div class=\"page-wrapper\">

          <!-- Header -->
          <header class=\"main-header\" id=\"header\">
            <nav class=\"navbar navbar-expand-lg navbar-light\" id=\"navbar\">
              <!-- Sidebar toggle button -->
              <button id=\"sidebar-toggler\" class=\"sidebar-toggle\">
                <span class=\"sr-only\">Toggle navigation</span>
              </button>

              <span class=\"page-title\">dashboard</span>

              <div class=\"navbar-right \">

                <!-- search form -->
                <div class=\"search-form\">
                  <form action=\"index.html\" method=\"get\">
                    <div class=\"input-group input-group-sm\" id=\"input-group-search\">
                      <input type=\"text\" autocomplete=\"off\" name=\"query\" id=\"search-input\" class=\"form-control\" placeholder=\"Search...\" />
                      <div class=\"input-group-append\">
                        <button class=\"btn\" type=\"button\">/</button>
                      </div>
                    </div>
                  </form>
                  <ul class=\"dropdown-menu dropdown-menu-search\">

                    <li class=\"nav-item\">
                      <a class=\"nav-link\" href=\"index.html\">Morbi leo risus</a>
                    </li>
                    <li class=\"nav-item\">
                      <a class=\"nav-link\" href=\"index.html\">Dapibus ac facilisis in</a>
                    </li>
                    <li class=\"nav-item\">
                      <a class=\"nav-link\" href=\"index.html\">Porta ac consectetur ac</a>
                    </li>
                    <li class=\"nav-item\">
                      <a class=\"nav-link\" href=\"index.html\">Vestibulum at eros</a>
                    </li>

                  </ul>

                </div>

                <ul class=\"nav navbar-nav\">
                  <!-- Offcanvas -->
                  <li class=\"custom-dropdown\">
                    <a class=\"offcanvas-toggler active custom-dropdown-toggler\" data-offcanvas=\"contact-off\" href=\"javascript:\" >
                      <i class=\"mdi mdi-contacts icon\"></i>
                    </a>
                  </li>
                  <li class=\"custom-dropdown\">
                    <button class=\"notify-toggler custom-dropdown-toggler\">
                      <i class=\"mdi mdi-bell-outline icon\"></i>
                      <span class=\"badge badge-xs rounded-circle\">21</span>
                    </button>
                    <div class=\"dropdown-notify\">

                      <header>
                        <div class=\"nav nav-underline\" id=\"nav-tab\" role=\"tablist\">
                          <a class=\"nav-item nav-link active\" id=\"all-tabs\" data-toggle=\"tab\" href=\"#all\" role=\"tab\" aria-controls=\"nav-home\"
                            aria-selected=\"true\">All (5)</a>
                          <a class=\"nav-item nav-link\" id=\"message-tab\" data-toggle=\"tab\" href=\"#message\" role=\"tab\" aria-controls=\"nav-profile\"
                            aria-selected=\"false\">Msgs (4)</a>
                          <a class=\"nav-item nav-link\" id=\"other-tab\" data-toggle=\"tab\" href=\"#other\" role=\"tab\" aria-controls=\"nav-contact\"
                            aria-selected=\"false\">Others (3)</a>
                        </div>
                      </header>

                      <div class=\"\" data-simplebar style=\"height: 325px;\">
                        <div class=\"tab-content\" id=\"myTabContent\">

                          <div class=\"tab-pane fade show active\" id=\"all\" role=\"tabpanel\" aria-labelledby=\"all-tabs\">

                            <div class=\"media media-sm bg-warning-10 p-4 mb-0\">
                              <div class=\"media-sm-wrapper\">
                                <a href=\"user-profile.html\">
                                  <img src=\"{{asset('backend/images/user/user-sm-02.jpg')}}\" alt=\"User Image\">
                                </a>
                              </div>
                              <div class=\"media-body\">
                                <a href=\"user-profile.html\">
                                  <span class=\"title mb-0\">John Doe</span>
                                  <span class=\"discribe\">Extremity sweetness difficult behaviour he of. On disposal of as landlord horrible. Afraid at highly months do things on at.</span>
                                  <span class=\"time\">
                                    <time>Just now</time>...
                                  </span>
                                </a>
                              </div>
                            </div>

                            <div class=\"media media-sm p-4 bg-light mb-0\">
                              <div class=\"media-sm-wrapper bg-primary\">
                                <a href=\"user-profile.html\">
                                  <i class=\"mdi mdi-calendar-check-outline\"></i>
                                </a>
                              </div>
                              <div class=\"media-body\">
                                <a href=\"user-profile.html\">
                                  <span class=\"title mb-0\">New event added</span>
                                  <span class=\"discribe\">1/3/2014 (1pm - 2pm)</span>
                                  <span class=\"time\">
                                    <time>10 min ago...</time>...
                                  </span>
                                </a>
                              </div>
                            </div>

                            <div class=\"media media-sm p-4 mb-0\">
                              <div class=\"media-sm-wrapper\">
                                <a href=\"user-profile.html\">
                                  <img src=\"{{asset('backend/images/user/user-sm-03.jpg')}}\" alt=\"User Image\">
                                </a>
                              </div>
                              <div class=\"media-body\">
                                <a href=\"user-profile.html\">
                                  <span class=\"title mb-0\">Sagge Hudson</span>
                                  <span class=\"discribe\">On disposal of as landlord Afraid at highly months do things on at.</span>
                                  <span class=\"time\">
                                    <time>1 hrs ago</time>...
                                  </span>
                                </a>
                              </div>
                            </div>

                            <div class=\"media media-sm p-4 mb-0\">
                              <div class=\"media-sm-wrapper bg-info-dark\">
                                <a href=\"user-profile.html\">
                                  <i class=\"mdi mdi-account-multiple-check\"></i>
                                </a>
                              </div>
                              <div class=\"media-body\">
                                <a href=\"user-profile.html\">
                                  <span class=\"title mb-0\">Add request</span>
                                  <span class=\"discribe\">Add Dany Jones as your contact.</span>
                                  <div class=\"buttons\">
                                    <a href=\"#\" class=\"btn btn-sm btn-success shadow-none text-white\">accept</a>
                                    <a href=\"#\" class=\"btn btn-sm shadow-none\">delete</a>
                                  </div>
                                  <span class=\"time\">
                                    <time>6 hrs ago</time>...
                                  </span>
                                </a>
                              </div>
                            </div>

                            <div class=\"media media-sm p-4 mb-0\">
                              <div class=\"media-sm-wrapper bg-info\">
                                <a href=\"user-profile.html\">
                                  <i class=\"mdi mdi-playlist-check\"></i>
                                </a>
                              </div>
                              <div class=\"media-body\">
                                <a href=\"user-profile.html\">
                                  <span class=\"title mb-0\">Task complete</span>
                                  <span class=\"discribe\">Afraid at highly months do things on at.</span>
                                  <span class=\"time\">
                                    <time>1 hrs ago</time>...
                                  </span>
                                </a>
                              </div>
                            </div>

                          </div>

                          <div class=\"tab-pane fade\" id=\"message\" role=\"tabpanel\" aria-labelledby=\"message-tab\">

                            <div class=\"media media-sm p-4 mb-0\">
                              <div class=\"media-sm-wrapper\">
                                <a href=\"user-profile.html\">
                                  <img src=\"{{asset('backend/images/user/user-sm-01.jpg')}}\" alt=\"User Image\">
                                </a>
                              </div>
                              <div class=\"media-body\">
                                <a href=\"user-profile.html\">
                                  <span class=\"title mb-0\">Selena Wagner</span>
                                  <span class=\"discribe\">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</span>
                                  <span class=\"time\">
                                    <time>15 min ago</time>...
                                  </span>
                                </a>
                              </div>
                            </div>

                            <div class=\"media media-sm p-4 mb-0\">
                              <div class=\"media-sm-wrapper\">
                                <a href=\"user-profile.html\">
                                  <img src=\"{{asset('backend/images/user/user-sm-03.jpg')}}\" alt=\"User Image\">
                                </a>
                              </div>
                              <div class=\"media-body\">
                                <a href=\"user-profile.html\">
                                  <span class=\"title mb-0\">Sagge Hudson</span>
                                  <span class=\"discribe\">On disposal of as landlord Afraid at highly months do things on at.</span>
                                  <span class=\"time\">
                                    <time>1 hrs ago</time>...
                                  </span>
                                </a>
                              </div>
                            </div>

                            <div class=\"media media-sm bg-warning-10 p-4 mb-0\">
                              <div class=\"media-sm-wrapper\">
                                <a href=\"user-profile.html\">
                                  <img src=\"{{asset('backend/images/user/user-sm-02.jpg')}}\" alt=\"User Image\">
                                </a>
                              </div>
                              <div class=\"media-body\">
                                <a href=\"user-profile.html\">
                                  <span class=\"title mb-0\">John Doe</span>
                                  <span class=\"discribe\">Extremity sweetness difficult behaviour he of. On disposal of as landlord horrible. Afraid
                                    at highly months do things on at.</span>
                                  <span class=\"time\">
                                    <time>Just now</time>...
                                  </span>
                                </a>
                              </div>
                            </div>

                            <div class=\"media media-sm p-4 mb-0\">
                              <div class=\"media-sm-wrapper\">
                                <a href=\"user-profile.html\">
                                  <img src=\"{{asset('backend/images/user/user-sm-04.jpg')}}\" alt=\"User Image\">
                                </a>
                              </div>
                              <div class=\"media-body\">
                                <a href=\"user-profile.html\">
                                  <span class=\"title mb-0\">Albrecht Straub</span>
                                  <span class=\"discribe\"> Beatae quia natus assumenda laboriosam, nisi perferendis aliquid consectetur expedita non tenetur.</span>
                                  <span class=\"time\">
                                    <time>Just now</time>...
                                  </span>
                                </a>
                              </div>
                            </div>

                          </div>
                          <div class=\"tab-pane fade\" id=\"other\" role=\"tabpanel\" aria-labelledby=\"contact-tab\">

                            <div class=\"media media-sm p-4 bg-light mb-0\">
                              <div class=\"media-sm-wrapper bg-primary\">
                                <a href=\"user-profile.html\">
                                  <i class=\"mdi mdi-calendar-check-outline\"></i>
                                </a>
                              </div>
                              <div class=\"media-body\">
                                <a href=\"user-profile.html\">
                                  <span class=\"title mb-0\">New event added</span>
                                  <span class=\"discribe\">1/3/2014 (1pm - 2pm)</span>
                                  <span class=\"time\">
                                    <time>10 min ago...</time>...
                                  </span>
                                </a>
                              </div>
                            </div>

                            <div class=\"media media-sm p-4 mb-0\">
                              <div class=\"media-sm-wrapper bg-info-dark\">
                                <a href=\"user-profile.html\">
                                  <i class=\"mdi mdi-account-multiple-check\"></i>
                                </a>
                              </div>
                              <div class=\"media-body\">
                                <a href=\"user-profile.html\">
                                  <span class=\"title mb-0\">Add request</span>
                                  <span class=\"discribe\">Add Dany Jones as your contact.</span>
                                  <div class=\"buttons\">
                                    <a href=\"#\" class=\"btn btn-sm btn-success shadow-none text-white\">accept</a>
                                    <a href=\"#\" class=\"btn btn-sm shadow-none\">delete</a>
                                  </div>
                                  <span class=\"time\">
                                    <time>6 hrs ago</time>...
                                  </span>
                                </a>
                              </div>
                            </div>

                            <div class=\"media media-sm p-4 mb-0\">
                              <div class=\"media-sm-wrapper bg-info\">
                                <a href=\"user-profile.html\">
                                  <i class=\"mdi mdi-playlist-check\"></i>
                                </a>
                              </div>
                              <div class=\"media-body\">
                                <a href=\"user-profile.html\">
                                  <span class=\"title mb-0\">Task complete</span>
                                  <span class=\"discribe\">Afraid at highly months do things on at.</span>
                                  <span class=\"time\">
                                    <time>1 hrs ago</time>...
                                  </span>
                                </a>
                              </div>
                            </div>

                          </div>
                        </div>
                      </div>

                      <footer class=\"border-top dropdown-notify-footer\">
                        <div class=\"d-flex justify-content-between align-items-center py-2 px-4\">
                          <span>Last updated 3 min ago</span>
                          <a id=\"refress-button\" href=\"javascript:\" class=\"btn mdi mdi-cached btn-refress\"></a>
                        </div>
                      </footer>
                    </div>
                  </li>
                  <!-- User Account -->
                  <li class=\"dropdown user-menu\">
                    <button class=\"dropdown-toggle nav-link\" data-toggle=\"dropdown\">
                      <img src=\"{{asset('backend/images/user/user-xs-01.jpg')}}\" class=\"user-image rounded-circle\" alt=\"User Image\" />
                      <span class=\"d-none d-lg-inline-block\">John Doe</span>
                    </button>
                    <ul class=\"dropdown-menu dropdown-menu-right\">
                      <li>
                        <a class=\"dropdown-link-item\" href=\"user-profile.html\">
                          <i class=\"mdi mdi-account-outline\"></i>
                          <span class=\"nav-text\">My Profile</span>
                        </a>
                      </li>
                      <li>
                        <a class=\"dropdown-link-item\" href=\"email-inbox.html\">
                          <i class=\"mdi mdi-email-outline\"></i>
                          <span class=\"nav-text\">Message</span>
                          <span class=\"badge badge-pill badge-primary\">24</span>
                        </a>
                      </li>
                      <li>
                        <a class=\"dropdown-link-item\" href=\"user-activities.html\">
                          <i class=\"mdi mdi-diamond-stone\"></i>
                          <span class=\"nav-text\">Activitise</span></a>
                      </li>
                      <li>
                        <a class=\"dropdown-link-item\" href=\"user-account-settings.html\">
                          <i class=\"mdi mdi-settings\"></i>
                          <span class=\"nav-text\">Account Setting</span>
                        </a>
                      </li>

                      <li class=\"dropdown-footer\">
                        <a class=\"dropdown-link-item\" href=\"sign-in.html\"> <i class=\"mdi mdi-logout\"></i> Log Out </a>
                      </li>
                    </ul>
                  </li>
                </ul>
              </div>
            </nav>


          </header>

        <!-- ====================================
        ——— CONTENT WRAPPER
        ===================================== -->
        <div class=\"content-wrapper\">
          <div class=\"content\">
                <!-- Table Product -->
                <div class=\"row\">
                  <div class=\"col-12\">
                    <div class=\"card card-default\">
                      <div class=\"card-header\">
                        <h2>Liste des Commandes</h2>
                        <div class=\"dropdown\">
                          <a class=\"dropdown-toggle\" href=\"#\" role=\"button\" id=\"dropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\"
                            aria-expanded=\"false\"> Yearly Chart
                          </a>

                          <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"dropdownMenuLink\">
                            <a class=\"dropdown-item\" href=\"#\">Action</a>
                            <a class=\"dropdown-item\" href=\"#\">Another action</a>
                            <a class=\"dropdown-item\" href=\"#\">Something else here</a>
                          </div>
                        </div>
                      </div>
                      <div class=\"card-body\">
                        <table id=\"productsTable\" class=\"table table-hover table-product\" style=\"width:100%\">
                          {% include \"commande/index.html.twig\" %}
                        </table>
                        <a href=\"#\" class=\"btn btn-primary btn-pill\" data-toggle=\"modal\" data-target=\"#commande-modal\">Add Commande</a>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Table Product -->
                <div class=\"row\">
                  <div class=\"col-12\">
                    <div class=\"card card-default\">
                      <div class=\"card-header\">
                        <h2>Liste des Livraisons</h2>
                        <div class=\"dropdown\">
                          <a class=\"dropdown-toggle\" href=\"#\" role=\"button\" id=\"dropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\"
                            aria-expanded=\"false\"> Yearly Chart
                          </a>

                          <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"dropdownMenuLink\">
                            <a class=\"dropdown-item\" href=\"#\">Action</a>
                            <a class=\"dropdown-item\" href=\"#\">Another action</a>
                            <a class=\"dropdown-item\" href=\"#\">Something else here</a>
                          </div>
                        </div>
                      </div>
                      <div class=\"card-body\">
                        <table id=\"productsTable\" class=\"table table-hover table-product\" style=\"width:100%\">
                          {% include \"livraison/index.html.twig\" %}
                        </table>
                        <a href=\"#\" class=\"btn btn-primary btn-pill\" data-toggle=\"modal\" data-target=\"#livraison-modal\">Add Livraison</a>
                      </div>
                    </div>
                  </div>
                </div>

<!-- Commande Modal -->
<div class=\"modal fade\" id=\"commande-modal\" aria-labelledby=\"commande-modal\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-xl modal-dialog-centered d-flex justify-content-center\" style=\"max-width: 80vw;\">
        <form method=\"post\" novalidate>
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h2 class=\"modal-title\">Add Commande</h2>
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                </div>
                <div class=\"modal-body\">
                    {{ form_start(commandeForm, {'attr': {'novalidate': 'novalidate'}}) }}

                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            <div class=\"form-group\">
                                {{ form_label(commandeForm.clientId) }}
                                {{ form_widget(commandeForm.clientId, {'attr': {'class': 'form-control'}}) }}
                                {{ form_errors(commandeForm.clientId) }}
                            </div>

                            <div class=\"form-group\">
                                {{ form_label(commandeForm.date) }}
                                {{ form_widget(commandeForm.date, {'attr': {'class': 'form-control'}}) }}
                                {{ form_errors(commandeForm.date) }}
                            </div>

                            <div class=\"form-group\">
                                {{ form_label(commandeForm.status) }}
                                {{ form_widget(commandeForm.status, {'attr': {'class': 'form-control'}}) }}
                            </div>
                        </div>

                        <div class=\"col-md-6\">
                            <div class=\"form-group\">
                                {{ form_label(commandeForm.prix) }}
                                {{ form_widget(commandeForm.prix, {'attr': {'class': 'form-control'}}) }}
                                {{ form_errors(commandeForm.prix) }}
                            </div>

                            <div class=\"form-group\">
                                {{ form_label(commandeForm.modePaiement) }}
                                {{ form_widget(commandeForm.modePaiement, {'attr': {'class': 'form-control'}}) }}
                            </div>
                        </div>
                    </div>
                    {{ form_widget(commandeForm.save, {'attr': {'style': 'display: none;'}}) }}
                    {{ form_end(commandeForm) }}
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Cancel</button>
                    <button type=\"submit\" class=\"btn btn-primary\">Save</button>
                </div>
            </div>
        </form>
    </div>
</div>


<!-- Livraison Modal -->
<div class=\"modal fade\" id=\"livraison-modal\" aria-labelledby=\"livraison-modal\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-xl modal-dialog-centered d-flex justify-content-center\" style=\"max-width: 80vw;\">
        <form method=\"post\" novalidate>
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h2 class=\"modal-title\">Add Livraison</h2>
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                </div>
                <div class=\"modal-body\">
                    {{ form_start(livraisonForm, {'attr': {'novalidate': 'novalidate'}}) }}

                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            <div class=\"form-group\">
                                {{ form_label(livraisonForm.livreur) }}
                                {{ form_widget(livraisonForm.livreur, {'attr': {'class': 'form-control'}}) }}
                                {{ form_errors(livraisonForm.livreur) }}
                            </div>

                            <div class=\"form-group\">
                                {{ form_label(livraisonForm.adresse) }}
                                {{ form_widget(livraisonForm.adresse, {'attr': {'class': 'form-control'}}) }}
                                {{ form_errors(livraisonForm.adresse) }}
                            </div>

                            <div class=\"form-group\">
                                {{ form_label(livraisonForm.date) }}
                                {{ form_widget(livraisonForm.date, {'attr': {'class': 'form-control'}}) }}
                                {{ form_errors(livraisonForm.date) }}
                            </div>
                        </div>

                        <div class=\"col-md-6\">
                            <div class=\"form-group\">
                                {{ form_label(livraisonForm.status) }}
                                {{ form_widget(livraisonForm.status, {'attr': {'class': 'form-control'}}) }}
                            </div>

                            <div class=\"form-group\">
                                {{ form_label(livraisonForm.mode) }}
                                {{ form_widget(livraisonForm.mode, {'attr': {'class': 'form-control'}}) }}
                            </div>
                                {{ form_widget(livraisonForm.prix, {'attr': {'style': 'display: none;'}}) }}
                        </div>
                    </div>
                    {{ form_widget(livraisonForm.save, {'attr': {'style': 'display: none;'}}) }}
                    {{ form_end(livraisonForm) }}
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Cancel</button>
                    <button type=\"submit\" class=\"btn btn-primary\">Save</button>
                </div>
            </div>
        </form>
    </div>
</div>



</div>

        </div>

          <!-- Footer -->
          <footer class=\"footer mt-auto\">
            <div class=\"copyright bg-white\">
              <p>
                &copy; <span id=\"copy-year\"></span> Copyright ECOWAY
              </p>
            </div>
            <script>
                var d = new Date();
                var year = d.getFullYear();
                document.getElementById(\"copy-year\").innerHTML = year;
            </script>
          </footer>

      </div>
    </div>

                    <!-- Card Offcanvas -->
                    <div class=\"card card-offcanvas\" id=\"contact-off\" >
                      <div class=\"card-header\">
                        <h2>Contacts</h2>
                        <a href=\"#\" class=\"btn btn-primary btn-pill px-4\">Add New</a>
                      </div>
                      <div class=\"card-body\">

                        <div class=\"mb-4\">
                          <input type=\"text\" class=\"form-control form-control-lg form-control-secondary rounded-0\" placeholder=\"Search contacts...\">
                        </div>

                        <div class=\"media media-sm\">
                          <div class=\"media-sm-wrapper\">
                            <a href=\"user-profile.html\">
                              <img src=\"{{asset('backend/images/user/user-sm-01.jpg')}}\" alt=\"User Image\">
                              <span class=\"active bg-primary\"></span>
                            </a>
                          </div>
                          <div class=\"media-body\">
                            <a href=\"user-profile.html\">
                              <span class=\"title\">Selena Wagner</span>
                              <span class=\"discribe\">Designer</span>
                            </a>
                          </div>
                        </div>

                        <div class=\"media media-sm\">
                          <div class=\"media-sm-wrapper\">
                            <a href=\"user-profile.html\">
                              <img src=\"{{asset('backend/images/user/user-sm-02.jpg')}}\" alt=\"User Image\">
                              <span class=\"active bg-primary\"></span>
                            </a>
                          </div>
                          <div class=\"media-body\">
                            <a href=\"user-profile.html\">
                              <span class=\"title\">Walter Reuter</span>
                              <span>Developer</span>
                            </a>
                          </div>
                        </div>

                        <div class=\"media media-sm\">
                          <div class=\"media-sm-wrapper\">
                            <a href=\"user-profile.html\">
                              <img src=\"{{asset('backend/images/user/user-sm-03.jpg')}}\" alt=\"User Image\">
                            </a>
                          </div>
                          <div class=\"media-body\">
                            <a href=\"user-profile.html\">
                              <span class=\"title\">Larissa Gebhardt</span>
                              <span>Cyber Punk</span>
                            </a>
                          </div>
                        </div>

                        <div class=\"media media-sm\">
                          <div class=\"media-sm-wrapper\">
                            <a href=\"user-profile.html\">
                              <img src=\"{{asset('backend/images/user/user-sm-04.jpg')}}\" alt=\"User Image\">
                            </a>

                          </div>
                          <div class=\"media-body\">
                            <a href=\"user-profile.html\">
                              <span class=\"title\">Albrecht Straub</span>
                              <span>Photographer</span>
                            </a>
                          </div>
                        </div>

                        <div class=\"media media-sm\">
                          <div class=\"media-sm-wrapper\">
                            <a href=\"user-profile.html\">
                              <img src=\"{{asset('backend/images/user/user-sm-05.jpg')}}\" alt=\"User Image\">
                              <span class=\"active bg-danger\"></span>
                            </a>
                          </div>
                          <div class=\"media-body\">
                            <a href=\"user-profile.html\">
                              <span class=\"title\">Leopold Ebert</span>
                              <span>Fashion Designer</span>
                            </a>
                          </div>
                        </div>

                        <div class=\"media media-sm\">
                          <div class=\"media-sm-wrapper\">
                            <a href=\"user-profile.html\">
                              <img src=\"{{asset('backend/images/user/user-sm-06.jpg')}}\" alt=\"User Image\">
                              <span class=\"active bg-primary\"></span>
                            </a>
                          </div>
                          <div class=\"media-body\">
                            <a href=\"user-profile.html\">
                              <span class=\"title\">Selena Wagner</span>
                              <span>Photographer</span>
                            </a>
                          </div>
                        </div>

                      </div>
                    </div>
  </body>

{% endblock %}
", "backend/order.html.twig", "C:\\Users\\User\\Downloads\\EcoWay-produit (1)\\EcoWay-produit\\templates\\backend\\order.html.twig");
    }
}
