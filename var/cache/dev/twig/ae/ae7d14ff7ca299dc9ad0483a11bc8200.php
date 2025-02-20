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

/* commande/edit.html.twig */
class __TwigTemplate_c4f36a74547259fd901abee87b90edb7 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "commande/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "commande/edit.html.twig"));

        $this->parent = $this->loadTemplate("back.html.twig", "commande/edit.html.twig", 1);
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

        yield "Edit Commande";
        
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


<!-- Livraison Modal -->
<div class=\"modal fade\" id=\"livraison-modal\" aria-labelledby=\"livraison-modal\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-xl modal-dialog-centered d-flex justify-content-center\" style=\"max-width: 80vw;\">
        <form method=\"post\" novalidate>
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h2 class=\"modal-title\">Edit Commande</h2>
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                </div>
                <div class=\"modal-body\">
                    ";
        // line 1298
        yield Twig\Extension\CoreExtension::include($this->env, $context, "commande/_form.html.twig", ["button_label" => "Update"]);
        yield "
                </div>
                <div class=\"modal-footer\">
                    <a href=\"#\" class=\"btn btn-secondary\" data-dismiss=\"modal\" onclick=\"window.location.href='";
        // line 1301
        yield "/back/order";
        yield "';\">Cancel</a>
                    <button type=\"submit\" class=\"btn btn-primary\">Save</button>
                </div>
            </div>
        </form>
    </div>
</div>

<script>
    // Trigger the modal to show on page load
    \$(document).ready(function() {
        \$('#livraison-modal').modal('show');
    });
</script>




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
        // line 1355
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
        // line 1370
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
        // line 1385
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
        // line 1399
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
        // line 1414
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
        // line 1429
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
        return "commande/edit.html.twig";
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
        return array (  1570 => 1429,  1552 => 1414,  1534 => 1399,  1517 => 1385,  1499 => 1370,  1481 => 1355,  1424 => 1301,  1418 => 1298,  1361 => 1244,  1271 => 1157,  1250 => 1139,  1230 => 1122,  1210 => 1105,  1148 => 1046,  1111 => 1012,  126 => 30,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'back.html.twig' %}

{% block title %}Edit Commande{% endblock %}

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


<!-- Livraison Modal -->
<div class=\"modal fade\" id=\"livraison-modal\" aria-labelledby=\"livraison-modal\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-xl modal-dialog-centered d-flex justify-content-center\" style=\"max-width: 80vw;\">
        <form method=\"post\" novalidate>
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h2 class=\"modal-title\">Edit Commande</h2>
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                </div>
                <div class=\"modal-body\">
                    {{ include('commande/_form.html.twig', {'button_label': 'Update'}) }}
                </div>
                <div class=\"modal-footer\">
                    <a href=\"#\" class=\"btn btn-secondary\" data-dismiss=\"modal\" onclick=\"window.location.href='{{ '/back/order' }}';\">Cancel</a>
                    <button type=\"submit\" class=\"btn btn-primary\">Save</button>
                </div>
            </div>
        </form>
    </div>
</div>

<script>
    // Trigger the modal to show on page load
    \$(document).ready(function() {
        \$('#livraison-modal').modal('show');
    });
</script>




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
", "commande/edit.html.twig", "C:\\Users\\User\\Desktop\\projet_pi\\templates\\commande\\edit.html.twig");
    }
}
