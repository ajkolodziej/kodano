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

/* product/index.html.twig */
class __TwigTemplate_74d3d6079658f5486f2a3430962f5c1ff5fd2be2a6cf743c036f94e3eca5dd17 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "product/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Hello ProductController!";
        
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
    ";
        // line 8
        echo "    <table class=\"table table-striped table-bordered table-hover table-sm\">
    <caption>List of Products</caption>
        <thead  class=\"thead-dark\">
            <tr>
                <th scope=\"col\">lp.</th>
                <th scope=\"col\">name</th>
                <th scope=\"col\">price</th>
                <th scope=\"col\">categories</th>
                <th scope=\"col\">actions</th>
            </tr>
        </thead>
        <tfoot  class=\"thead-dark\">
            <tr>
                <th>lp.</th>
                <th>name</th>
                <th>price</th>
                <th>categories</th>
                <th>actions</th>
            </tr>
        </tfoot>
        <tbody>
        ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 29, $this->source); })()));
        foreach ($context['_seq'] as $context["key"] => $context["product"]) {
            // line 30
            echo "        <tr scope=\"row\">
            <td>";
            // line 31
            echo twig_escape_filter($this->env, ($context["key"] + 1), "html", null, true);
            echo "</td>
            <td>";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "getName", [], "method", false, false, false, 32), "html", null, true);
            echo "</td>
            <td>";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "getPrice", [], "method", false, false, false, 33), "html", null, true);
            echo "</td>
            <td>
                <ul class=\"list-unstyled\">
                    ";
            // line 36
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "getCategory", [], "method", false, false, false, 36));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 37
                echo "                        <li>
                            <a 
                            href=\"";
                // line 39
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("categories_show", ["id" => twig_get_attribute($this->env, $this->source, $context["category"], "getId", [], "method", false, false, false, 39)]), "html", null, true);
                echo "\"  class=\"text-info stretched-link\">
                            ";
                // line 40
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "getCode", [], "method", false, false, false, 40), "html", null, true);
                echo "
                            </a>
                        </li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            echo "                </ul>
            </td>
            <td>
                <a 
                href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("products_show", ["id" => twig_get_attribute($this->env, $this->source, $context["product"], "getId", [], "method", false, false, false, 48)]), "html", null, true);
            echo "\" 
                class=\"btn btn-outline-primary\">View</a>
            </td>
        </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "        </tbody>
    </table>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "product/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 53,  148 => 48,  142 => 44,  132 => 40,  128 => 39,  124 => 37,  120 => 36,  114 => 33,  110 => 32,  106 => 31,  103 => 30,  99 => 29,  76 => 8,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello ProductController!{% endblock %}

{% block body %}
<div class=\"container\">
    {# <h1>Products list:</h1> #}
    <table class=\"table table-striped table-bordered table-hover table-sm\">
    <caption>List of Products</caption>
        <thead  class=\"thead-dark\">
            <tr>
                <th scope=\"col\">lp.</th>
                <th scope=\"col\">name</th>
                <th scope=\"col\">price</th>
                <th scope=\"col\">categories</th>
                <th scope=\"col\">actions</th>
            </tr>
        </thead>
        <tfoot  class=\"thead-dark\">
            <tr>
                <th>lp.</th>
                <th>name</th>
                <th>price</th>
                <th>categories</th>
                <th>actions</th>
            </tr>
        </tfoot>
        <tbody>
        {% for key, product in products %}
        <tr scope=\"row\">
            <td>{{key+1}}</td>
            <td>{{ product.getName() }}</td>
            <td>{{ product.getPrice()}}</td>
            <td>
                <ul class=\"list-unstyled\">
                    {% for category in product.getCategory() %}
                        <li>
                            <a 
                            href=\"{{path('categories_show', {id:category.getId()})}}\"  class=\"text-info stretched-link\">
                            {{category.getCode()}}
                            </a>
                        </li>
                    {% endfor %}
                </ul>
            </td>
            <td>
                <a 
                href=\"{{ path('products_show', { id: product.getId() }) }}\" 
                class=\"btn btn-outline-primary\">View</a>
            </td>
        </tr>
        {% endfor %}
        </tbody>
    </table>
</div>
{% endblock %}
", "product/index.html.twig", "C:\\xampp\\htdocs\\symfony\\zadanie-szkla\\templates\\product\\index.html.twig");
    }
}
