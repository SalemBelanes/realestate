<?php

/* ::base.html.twig */
class __TwigTemplate_3a477b5c2b1e45e36d1bb471a8f337e4dd9158ae4c300d518a6cb647d4e27dd3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        <div class=\"wrapper\">
            <div class=\"center\">
                <div class=\"header\">
                    <div class=\"logo\">
                        <a href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("ag_im_agence_homepage");
        echo "\">
                            <img src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/agimagence/images/logo.png"), "html", null, true);
        echo "\" />
                        </a>
                    </div>
                    <div class=\"search\">

                    </div>
                </div>
                <nav>
                    <li class=\"menu\">
                        <a href=\"#\">Immobilier Horizon</a>
                    </li>
                    <li class=\"menu\">
                        <a href=\"#\">Acheter</a>
                    </li>
                    <li class=\"menu\">
                        <a href=\"#\">Vendre</a>
                    </li>
                    <li class=\"menu\">
                        <a href=\"#\">Investir</a>
                    </li>
                    <li class=\"menu\">
                        <a href=\"#\">Contact</a>
                    </li>

                </nav>
                <div class=\"content\">
                    <div class=\"content-top\">
                        <div class=\"slideshow\">
                        </div>
                        <div class=\"mod-recherche\">
                            <form action=\"\">
                                Localisation<br>
                                <input type=\"text\" name=\"location\"><br>
                                Type de bien<br>                        
                                <input type=\"text\" name=\"LastName\"><br>
                                Pièces<br>                        
                                <input type=\"text\" name=\"LastName\"><br>
                                Salles de bain<br>                        
                                <input type=\"text\" name=\"LastName\"><br>
                                Environnement<br>                        
                                <input type=\"text\" name=\"LastName\"><br>
                                Prix<br>                        
                                <input type=\"text\" name=\"LastName\"><br>
                                <input type=\"submit\" value=\"Trouver des biens\">
                            </form>
                        </div>
                    </div>
                ";
        // line 68
        $this->displayBlock('body', $context, $blocks);
        // line 69
        echo "

            </div>
        </div>

        <div class=\"footer\">
            <div style=\"margin:0 auto;width:930px; bordre:1px solid red;\">
                <div class=\"lire-more\">
                    <a>Immobilier Horizon</a> | <a>Acheter | </a> <a>Vendre | </a><a>Investir  | </a> <a>Contact</a> 
                </div>
                <div class=\"reseaux\">
                    <a href=\"#\" class=\"reseau1\"></a>
                    <a href=\"#\" class=\"reseau2\"></a>
                    <a href=\"#\" class=\"reseau3\"></a>
                    <a href=\"#\" class=\"reseau4\"></a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Realstate";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        echo "          
            ";
        // line 7
        $this->env->loadTemplate("::communStyleSheet.html.twig")->display($context);
        echo "          
        ";
    }

    // line 9
    public function block_javascripts($context, array $blocks = array())
    {
        echo "  
            ";
        // line 10
        $this->env->loadTemplate("::communJavaScript.html.twig")->display($context);
        // line 11
        echo "        ";
    }

    // line 68
    public function block_body($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 68,  156 => 11,  154 => 10,  149 => 9,  143 => 7,  138 => 6,  132 => 5,  107 => 69,  105 => 68,  55 => 21,  51 => 20,  41 => 13,  38 => 12,  35 => 9,  33 => 6,  29 => 5,  23 => 1,);
    }
}
