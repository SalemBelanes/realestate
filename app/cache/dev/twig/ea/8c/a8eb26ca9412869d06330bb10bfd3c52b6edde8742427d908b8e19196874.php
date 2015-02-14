<?php

/* AgImAgenceBundle:Annonce:show.html.twig */
class __TwigTemplate_ea8ca8eb26ca9412869d06330bb10bfd3c52b6edde8742427d908b8e19196874 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<h1>Annonce</h1>

    <table class=\"record_properties\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Titre</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "titre", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "description", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Date_creation</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "datecreation", array()), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Date_echeance</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "dateecheance", array()), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Ville</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "ville", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Rue</th>
                <td>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "rue", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Etat</th>
                <td>";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "etat", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Code_postal</th>
                <td>";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "codepostal", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Prix</th>
                <td>";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "prix", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Telephone</th>
                <td>";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "telephone", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Type</th>
                <td>";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "type", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nombre_piece</th>
                <td>";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "nombrepiece", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nombre_like</th>
                <td>";
        // line 62
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "nombrelike", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nombre_dislike</th>
                <td>";
        // line 66
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "nombredislike", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 73
        echo $this->env->getExtension('routing')->getPath("annonce");
        echo "\">
            Back to the list
        </a>
    </li>
    <li>
        <a href=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("annonce_edit", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id", array()))), "html", null, true);
        echo "\">
            Edit
        </a>
    </li>
    <li>";
        // line 82
        echo         $this->env->getExtension('form')->renderer->renderBlock($this->getContext($context, "delete_form"), 'form');
        echo "</li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "AgImAgenceBundle:Annonce:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 82,  155 => 78,  147 => 73,  137 => 66,  130 => 62,  123 => 58,  116 => 54,  109 => 50,  102 => 46,  95 => 42,  88 => 38,  81 => 34,  74 => 30,  67 => 26,  60 => 22,  53 => 18,  46 => 14,  39 => 10,  31 => 4,  28 => 3,);
    }
}
