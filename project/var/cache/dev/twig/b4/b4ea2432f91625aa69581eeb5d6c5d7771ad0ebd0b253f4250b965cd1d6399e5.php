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

/* admin_article/show.html.twig */
class __TwigTemplate_916ae9eefa542d3fee25b4a49d17ea5bbea7367b88f02594775e8f506c600b49 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin_article/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin_article/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Article";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h1>Article</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 12, $this->source); })()), "id", [], "any", false, false, false, 12), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nom</th>
                <td>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 16, $this->source); })()), "name", [], "any", false, false, false, 16), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 20, $this->source); })()), "description", [], "any", false, false, false, 20), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <h3>Photos du tournage</h3>
";
        // line 26
        if (twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "picture", [], "any", true, true, false, 26)) {
            // line 27
            echo "\t<p>Aucune affiche disponible</p>
";
        } else {
            // line 29
            echo "
";
            // line 30
            if ((1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 30, $this->source); })()), "setPicture", [], "any", false, false, false, 30)), 1))) {
                // line 31
                echo "<div data-slider>
<div id=\"carouselExampleIndicators\" class=\"carousel slide\" data-bs-ride=\"carousel\">
\t<div class=\"carousel-indicators\">
\t\t";
                // line 34
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 34, $this->source); })()), "setPicturearticles", [], "any", false, false, false, 34));
                $context['loop'] = [
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                ];
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["picture"]) {
                    // line 35
                    echo "\t\t\t<button type=\"button\" data-bs-target=\"#carouselExampleIndicators\" data-bs-slide-to=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 35), "html", null, true);
                    echo "\" ";
                    if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 35), 0))) {
                        echo " class=\"active\" ";
                    }
                    echo " aria-current=\"true\" aria-label=\"Slide 1\"></button>
\t\t";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['picture'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 37
                echo "\t</div>
\t<div class=\"carousel-inner\">
\t\t";
                // line 39
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 39, $this->source); })()), "setPicturearticles", [], "any", false, false, false, 39));
                $context['loop'] = [
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                ];
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["picture"]) {
                    // line 40
                    echo "\t\t\t<div ";
                    if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 40), 0))) {
                        echo " class=\"carousel-item active\" ";
                    } else {
                        echo " class=\"carousel-item\" ";
                    }
                    echo ">
\t\t\t\t";
                    // line 42
                    echo "\t\t\t</div>
\t\t";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['picture'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 44
                echo "\t</div>
\t<button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#carouselExampleIndicators\" data-bs-slide=\"prev\">
\t\t<span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
\t\t<span class=\"visually-hidden\">Précédente</span>
\t</button>
\t<button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#carouselExampleIndicators\" data-bs-slide=\"next\">
\t\t<span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
\t\t<span class=\"visually-hidden\">Suivante</span>
\t</button>
</div>
";
            } else {
                // line 55
                echo " ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 55, $this->source); })()), "setPicturearticles", [], "any", false, false, false, 55));
                foreach ($context['_seq'] as $context["_key"] => $context["picture"]) {
                    // line 56
                    echo "\t<div class=\"card\" style=\"wid\">
\t\t";
                    // line 58
                    echo "\t</div>
";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['picture'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 60
                echo "\t</dd>
";
            }
            // line 62
            echo "
";
        }
        // line 64
        echo "
    <a href=\"";
        // line 65
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_article_index");
        echo "\"  class=\"btn btn-primary\">Retour à la liste</a>

    <a href=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_article_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 67, $this->source); })()), "id", [], "any", false, false, false, 67)]), "html", null, true);
        echo "\"  class=\"btn btn-warning\">Modifier</a>

    ";
        // line 69
        echo twig_include($this->env, $context, "admin_article/_delete_form.html.twig");
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "admin_article/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  252 => 69,  247 => 67,  242 => 65,  239 => 64,  235 => 62,  231 => 60,  224 => 58,  221 => 56,  216 => 55,  203 => 44,  188 => 42,  179 => 40,  162 => 39,  158 => 37,  137 => 35,  120 => 34,  115 => 31,  113 => 30,  110 => 29,  106 => 27,  104 => 26,  95 => 20,  88 => 16,  81 => 12,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Article{% endblock %}

{% block body %}
    <h1>Article</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ article.id }}</td>
            </tr>
            <tr>
                <th>Nom</th>
                <td>{{ article.name }}</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>{{ article.description }}</td>
            </tr>
        </tbody>
    </table>

    <h3>Photos du tournage</h3>
{% if article.picture is defined %}
\t<p>Aucune affiche disponible</p>
{% else %}

{% if article.setPicture|length > 1 %}
<div data-slider>
<div id=\"carouselExampleIndicators\" class=\"carousel slide\" data-bs-ride=\"carousel\">
\t<div class=\"carousel-indicators\">
\t\t{% for picture in article.setPicturearticles %}
\t\t\t<button type=\"button\" data-bs-target=\"#carouselExampleIndicators\" data-bs-slide-to=\"{{ loop.index0 }}\" {% if loop.index0 == 0 %} class=\"active\" {% endif %} aria-current=\"true\" aria-label=\"Slide 1\"></button>
\t\t{% endfor %}
\t</div>
\t<div class=\"carousel-inner\">
\t\t{% for picture in article.setPicturearticles %}
\t\t\t<div {% if loop.index0 == 0 %} class=\"carousel-item active\" {% else %} class=\"carousel-item\" {% endif %}>
\t\t\t\t{# <img src=\"{{ asset('/uploads/articleSet/'~picture.name) }}\" alt=\"card-img-top\" style=\"width: 100%; height:auto;\"> #}
\t\t\t</div>
\t\t{% endfor %}
\t</div>
\t<button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#carouselExampleIndicators\" data-bs-slide=\"prev\">
\t\t<span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
\t\t<span class=\"visually-hidden\">Précédente</span>
\t</button>
\t<button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#carouselExampleIndicators\" data-bs-slide=\"next\">
\t\t<span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
\t\t<span class=\"visually-hidden\">Suivante</span>
\t</button>
</div>
{% else %}
 {% for picture in article.setPicturearticles %}
\t<div class=\"card\" style=\"wid\">
\t\t{# <img src=\"{{ asset('/uploads/articleSet/'~picture.name) }}\" alt=\"card-img-top\"  style=\"width=100%\"> #}
\t</div>
{% endfor %}
\t</dd>
{% endif %}

{% endif %}

    <a href=\"{{ path('app_admin_article_index') }}\"  class=\"btn btn-primary\">Retour à la liste</a>

    <a href=\"{{ path('app_admin_article_edit', {'id': article.id}) }}\"  class=\"btn btn-warning\">Modifier</a>

    {{ include('admin_article/_delete_form.html.twig') }}
{% endblock %}
", "admin_article/show.html.twig", "/var/www/project/templates/admin_article/show.html.twig");
    }
}
