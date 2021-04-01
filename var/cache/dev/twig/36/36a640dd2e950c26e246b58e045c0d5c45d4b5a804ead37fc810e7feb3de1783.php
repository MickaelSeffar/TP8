<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* base.html.twig */
class __TwigTemplate_645c87e07e474bd65d3e05666505fa6eb2a12c7caa04c24bee1f78e9cbf26719 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'name' => [$this, 'block_name'],
            'container' => [$this, 'block_container'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!doctype html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"\">
    <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    <link rel=\"canonical\" href=\"https://getbootstrap.com/docs/5.0/examples/pricing/\">

    <!-- Bootstrap core CSS -->
    <link href=\"https://getbootstrap.com/docs/5.0/dist/css/bootstrap.min.css\" rel=\"stylesheet\" crossorigin=\"anonymous\">
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf\" crossorigin=\"anonymous\"></script>


    <!-- Favicons -->
    <link rel=\"apple-touch-icon\" href=\"https://getbootstrap.com/docs/5.0/assets/img/favicons/apple-touch-icon.png\" sizes=\"180x180\">
    <link rel=\"icon\" href=\"https://getbootstrap.com/docs/5.0/assets/img/favicons/favicon-32x32.png\" sizes=\"32x32\" type=\"image/png\">
    <link rel=\"icon\" href=\"https://getbootstrap.com/docs/5.0/assets/img/favicons/favicon-16x16.png\" sizes=\"16x16\" type=\"image/png\">
    <link rel=\"manifest\" href=\"https://getbootstrap.com/docs/5.0/assets/img/favicons/manifest.json\">
    <link rel=\"mask-icon\" href=\"https://getbootstrap.com/docs/5.0/assets/img/favicons/safari-pinned-tab.svg\" color=\"#7952b3\">
    <link rel=\"icon\" href=\"https://getbootstrap.com/docs/5.0/assets/img/favicons/favicon.ico\">
    <meta name=\"theme-color\" content=\"#7952b3\">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>

    <!-- Custom styles for this template -->
    <link href=\"https://getbootstrap.com/docs/5.0/examples/pricing/pricing.css\" rel=\"stylesheet\">
</head>
<body>

<header class=\"d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-body border-bottom shadow-sm\">
    <p class=\"h5 my-0 me-md-auto fw-normal\">";
        // line 47
        $this->displayBlock('name', $context, $blocks);
        echo "</p>
    <nav class=\"my-2 my-md-0 me-md-3\">
        <a class=\"p-2 text-dark\" href=\"/\">Accueil</a>
        <a class=\"p-2 text-dark\" href=\"";
        // line 50
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("idea_list");
        echo "\">Idées</a>
        <a class=\"p-2 text-dark\" href=\"";
        // line 51
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("home_about_us");
        echo "\">A Propos de</a>
        <a class=\"p-2 text-dark\" href=\"";
        // line 52
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("home_contact");
        echo "\">Contact</a>
        ";
        // line 53
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 53, $this->source); })()), "user", [], "any", false, false, false, 53)) {
            // line 54
            echo "        <a class=\"p-2 text-dark\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Logout</a>
            <a class=\"p-2 text-dark\" href=\"";
            // line 55
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("idea_new");
            echo "\">Add your idea</a>
            <span>Hello ";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 56, $this->source); })()), "user", [], "any", false, false, false, 56), "username", [], "any", false, false, false, 56), "html", null, true);
            echo "!</span>
        ";
        } else {
            // line 58
            echo "        <a class=\"p-2 text-dark\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">Login</a>
        <a class=\"p-2 text-dark\" href=\"";
            // line 59
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            echo "\">Register</a>
        ";
        }
        // line 61
        echo "    </nav>
    ";
        // line 63
        echo "</header>

<main class=\"container\">
    ";
        // line 66
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 66, $this->source); })()), "flashes", [], "any", false, false, false, 66));
        foreach ($context['_seq'] as $context["status"] => $context["messages"]) {
            // line 67
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 68
                echo "            <div class=\"alert alert-";
                echo twig_escape_filter($this->env, $context["status"], "html", null, true);
                echo " alert-dismissible fade show\" role=\"alert\">
                ";
                // line 69
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 73
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['status'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "    <div class=\"pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center\">
        <h1 class=\"display-4\"></h1>
        ";
        // line 76
        $this->displayBlock('container', $context, $blocks);
        // line 77
        echo "    </div>

    <footer class=\"pt-4 my-md-5 pt-md-5 border-top\">
        <div class=\"row\">
            <div class=\"col-12 col-md\">
                <img class=\"mb-2\" src=\"https://getbootstrap.com/docs/5.0/assets/brand/bootstrap-logo.svg\" alt=\"\" width=\"24\" height=\"19\">
                <small class=\"d-block mb-3 text-muted\">&copy; 2017–2021</small>
            </div>
            <div class=\"col-6 col-md\">
                <h5>Features</h5>
                <ul class=\"list-unstyled text-small\">
                    <li><a class=\"link-secondary\" href=\"#\">Cool stuff</a></li>
                    <li><a class=\"link-secondary\" href=\"#\">Random feature</a></li>
                    <li><a class=\"link-secondary\" href=\"#\">Team feature</a></li>
                    <li><a class=\"link-secondary\" href=\"#\">Stuff for developers</a></li>
                    <li><a class=\"link-secondary\" href=\"#\">Another one</a></li>
                    <li><a class=\"link-secondary\" href=\"#\">Last time</a></li>
                </ul>
            </div>
            <div class=\"col-6 col-md\">
                <h5>Resources</h5>
                <ul class=\"list-unstyled text-small\">
                    <li><a class=\"link-secondary\" href=\"#\">Resource</a></li>
                    <li><a class=\"link-secondary\" href=\"#\">Resource name</a></li>
                    <li><a class=\"link-secondary\" href=\"#\">Another resource</a></li>
                    <li><a class=\"link-secondary\" href=\"#\">Final resource</a></li>
                </ul>
            </div>
            <div class=\"col-6 col-md\">
                <h5>About</h5>
                <ul class=\"list-unstyled text-small\">
                    <li><a class=\"link-secondary\" href=\"#\">Team</a></li>
                    <li><a class=\"link-secondary\" href=\"#\">Locations</a></li>
                    <li><a class=\"link-secondary\" href=\"#\">Privacy</a></li>
                    <li><a class=\"link-secondary\" href=\"#\">Terms</a></li>
                </ul>
            </div>
        </div>
    </footer>
</main>

</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 47
    public function block_name($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "name"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "name"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 76
    public function block_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "container"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "container"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  274 => 76,  256 => 47,  238 => 7,  185 => 77,  183 => 76,  179 => 74,  173 => 73,  163 => 69,  158 => 68,  153 => 67,  149 => 66,  144 => 63,  141 => 61,  136 => 59,  131 => 58,  126 => 56,  122 => 55,  117 => 54,  115 => 53,  111 => 52,  107 => 51,  103 => 50,  97 => 47,  54 => 7,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"\">
    <title>{% block title %}{% endblock %}</title>

    <link rel=\"canonical\" href=\"https://getbootstrap.com/docs/5.0/examples/pricing/\">

    <!-- Bootstrap core CSS -->
    <link href=\"https://getbootstrap.com/docs/5.0/dist/css/bootstrap.min.css\" rel=\"stylesheet\" crossorigin=\"anonymous\">
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf\" crossorigin=\"anonymous\"></script>


    <!-- Favicons -->
    <link rel=\"apple-touch-icon\" href=\"https://getbootstrap.com/docs/5.0/assets/img/favicons/apple-touch-icon.png\" sizes=\"180x180\">
    <link rel=\"icon\" href=\"https://getbootstrap.com/docs/5.0/assets/img/favicons/favicon-32x32.png\" sizes=\"32x32\" type=\"image/png\">
    <link rel=\"icon\" href=\"https://getbootstrap.com/docs/5.0/assets/img/favicons/favicon-16x16.png\" sizes=\"16x16\" type=\"image/png\">
    <link rel=\"manifest\" href=\"https://getbootstrap.com/docs/5.0/assets/img/favicons/manifest.json\">
    <link rel=\"mask-icon\" href=\"https://getbootstrap.com/docs/5.0/assets/img/favicons/safari-pinned-tab.svg\" color=\"#7952b3\">
    <link rel=\"icon\" href=\"https://getbootstrap.com/docs/5.0/assets/img/favicons/favicon.ico\">
    <meta name=\"theme-color\" content=\"#7952b3\">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>

    <!-- Custom styles for this template -->
    <link href=\"https://getbootstrap.com/docs/5.0/examples/pricing/pricing.css\" rel=\"stylesheet\">
</head>
<body>

<header class=\"d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-body border-bottom shadow-sm\">
    <p class=\"h5 my-0 me-md-auto fw-normal\">{% block name %}{% endblock %}</p>
    <nav class=\"my-2 my-md-0 me-md-3\">
        <a class=\"p-2 text-dark\" href=\"/\">Accueil</a>
        <a class=\"p-2 text-dark\" href=\"{{ url('idea_list') }}\">Idées</a>
        <a class=\"p-2 text-dark\" href=\"{{ url('home_about_us') }}\">A Propos de</a>
        <a class=\"p-2 text-dark\" href=\"{{ url('home_contact') }}\">Contact</a>
        {% if app.user %}
        <a class=\"p-2 text-dark\" href=\"{{ path('app_logout') }}\">Logout</a>
            <a class=\"p-2 text-dark\" href=\"{{ path('idea_new') }}\">Add your idea</a>
            <span>Hello {{ app.user.username }}!</span>
        {% else %}
        <a class=\"p-2 text-dark\" href=\"{{ path('app_login') }}\">Login</a>
        <a class=\"p-2 text-dark\" href=\"{{ path('app_register') }}\">Register</a>
        {% endif %}
    </nav>
    {# <a class=\"btn btn-outline-primary\" href=\"#\">Sign up</a>  #}
</header>

<main class=\"container\">
    {% for status, messages in app.flashes %}
        {% for message in messages %}
            <div class=\"alert alert-{{status}} alert-dismissible fade show\" role=\"alert\">
                {{message}}
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
            </div>
        {% endfor %}
    {% endfor %}
    <div class=\"pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center\">
        <h1 class=\"display-4\"></h1>
        {% block container %}{% endblock %}
    </div>

    <footer class=\"pt-4 my-md-5 pt-md-5 border-top\">
        <div class=\"row\">
            <div class=\"col-12 col-md\">
                <img class=\"mb-2\" src=\"https://getbootstrap.com/docs/5.0/assets/brand/bootstrap-logo.svg\" alt=\"\" width=\"24\" height=\"19\">
                <small class=\"d-block mb-3 text-muted\">&copy; 2017–2021</small>
            </div>
            <div class=\"col-6 col-md\">
                <h5>Features</h5>
                <ul class=\"list-unstyled text-small\">
                    <li><a class=\"link-secondary\" href=\"#\">Cool stuff</a></li>
                    <li><a class=\"link-secondary\" href=\"#\">Random feature</a></li>
                    <li><a class=\"link-secondary\" href=\"#\">Team feature</a></li>
                    <li><a class=\"link-secondary\" href=\"#\">Stuff for developers</a></li>
                    <li><a class=\"link-secondary\" href=\"#\">Another one</a></li>
                    <li><a class=\"link-secondary\" href=\"#\">Last time</a></li>
                </ul>
            </div>
            <div class=\"col-6 col-md\">
                <h5>Resources</h5>
                <ul class=\"list-unstyled text-small\">
                    <li><a class=\"link-secondary\" href=\"#\">Resource</a></li>
                    <li><a class=\"link-secondary\" href=\"#\">Resource name</a></li>
                    <li><a class=\"link-secondary\" href=\"#\">Another resource</a></li>
                    <li><a class=\"link-secondary\" href=\"#\">Final resource</a></li>
                </ul>
            </div>
            <div class=\"col-6 col-md\">
                <h5>About</h5>
                <ul class=\"list-unstyled text-small\">
                    <li><a class=\"link-secondary\" href=\"#\">Team</a></li>
                    <li><a class=\"link-secondary\" href=\"#\">Locations</a></li>
                    <li><a class=\"link-secondary\" href=\"#\">Privacy</a></li>
                    <li><a class=\"link-secondary\" href=\"#\">Terms</a></li>
                </ul>
            </div>
        </div>
    </footer>
</main>

</body>
</html>
", "base.html.twig", "C:\\Users\\mseffar2020\\Desktop\\Projects\\TP8\\templates\\base.html.twig");
    }
}
