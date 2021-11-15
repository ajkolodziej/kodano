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

/* category/index.html.twig */
class __TwigTemplate_f9c464aba19b653a47bf50d527067092097f5e739129a741e1fd3fee3d90977a extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "category/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "category/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "List of categories";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<div class=\"container\">
    <div class=\"card\">
        <div class=\"card-header\">
            <h1>List of Categories</h1>
        </div>
        <div class=\"card-body\">
            <table class=\"table table-striped table-bordered table-hover table-sm\">
                <caption>List of Categories</caption>
                <thead  class=\"thead-dark\">
                    <tr>
                        <th scope=\"col\">lp.</th>
                        <th scope=\"col\">name</th>
                        <th scope=\"col\">actions</th>
                    </tr>
                </thead>
                <tfoot  class=\"thead-dark\">
                    <tr>
                        <th>lp.</th>
                        <th>code</th>
                        <th>actions</th>
                    </tr>
                </tfoot>
                <tbody>
                ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 29, $this->source); })()));
        foreach ($context['_seq'] as $context["key"] => $context["category"]) {
            // line 30
            echo "                <tr>
                    <td>";
            // line 31
            echo twig_escape_filter($this->env, ($context["key"] + 1), "html", null, true);
            echo " </td>
                    <td>";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "getCode", [], "method", false, false, false, 32), "html", null, true);
            echo "</td>
                    <td class=\"text-center\">
                        <a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("categories_show", ["id" => twig_get_attribute($this->env, $this->source, $context["category"], "getId", [], "method", false, false, false, 34)]), "html", null, true);
            echo "\" 
                        class=\"btn btn-outline-primary\">
                            View
                        </a>
                    </td>
                </tr>   
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "                </tbody>
            </table>
        </div>
    </div>
    
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "category/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 41,  114 => 34,  109 => 32,  105 => 31,  102 => 30,  98 => 29,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}List of categories{% endblock %}

{% block body %}
<div class=\"container\">
    <div class=\"card\">
        <div class=\"card-header\">
            <h1>List of Categories</h1>
        </div>
        <div class=\"card-body\">
            <table class=\"table table-striped table-bordered table-hover table-sm\">
                <caption>List of Categories</caption>
                <thead  class=\"thead-dark\">
                    <tr>
                        <th scope=\"col\">lp.</th>
                        <th scope=\"col\">name</th>
                        <th scope=\"col\">actions</th>
                    </tr>
                </thead>
                <tfoot  class=\"thead-dark\">
                    <tr>
                        <th>lp.</th>
                        <th>code</th>
                        <th>actions</th>
                    </tr>
                </tfoot>
                <tbody>
                {% for key, category in categories %}
                <tr>
                    <td>{{ key+1 }} </td>
                    <td>{{ category.getCode()}}</td>
                    <td class=\"text-center\">
                        <a href=\"{{ path('categories_show', { id: category.getId() }) }}\" 
                        class=\"btn btn-outline-primary\">
                            View
                        </a>
                    </td>
                </tr>   
                {% endfor %}
                </tbody>
            </table>
        </div>
    </div>
    
</div>
{% endblock %}
", "category/index.html.twig", "C:\\xampp\\htdocs\\symfony\\zadanie-szkla\\templates\\category\\index.html.twig");
    }
}
