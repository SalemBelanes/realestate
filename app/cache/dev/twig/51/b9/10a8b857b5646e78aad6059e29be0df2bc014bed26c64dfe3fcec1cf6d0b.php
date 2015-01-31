<?php

/* AgImAgenceBundle:Default:index.html.twig */
class __TwigTemplate_51b910a8b857b5646e78aad6059e29be0df2bc014bed26c64dfe3fcec1cf6d0b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=10\" />
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 15
        echo "
    </head>
    <body id=\"body\"> 
        <div class=\"wrapper\">
        <div class=\"center\">
            <div class=\"header\">
                <div class=\"logo\">
                    <img src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/agimagence/images/logo.png"), "html", null, true);
        echo "\" />
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
                            <input type=\"text\" name=\"location\"\"><br>
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
                <div class=\"content-bas\">
                    <h4>Deniérres Annances</h4>
                    <div class=\"annance-detail\">
                      
                         <img src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/agimagence/images/1.png"), "html", null, true);
        echo "\" />
                        <p>
                            Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 150
                        </p>
                        <a class=\"savoir\">En savoir plus</a>
                    </div>
                    <div class=\"annance-detail\">
                        <img src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/agimagence/images/2.png"), "html", null, true);
        echo "\" />
                        <p>
                            Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 150
                        </p>
                        <a class=\"savoir\">En savoir plus</a>
                    </div>
                    <div class=\"annance-detail\">
                       <img src=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/agimagence/images/3.png"), "html", null, true);
        echo "\" />
                        <p>
                            Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 150
                        </p>
                        <a class=\"savoir\">En savoir plus</a>
                    </div>
                    <div class=\"annance-detail\">
                       <img src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/agimagence/images/4.png"), "html", null, true);
        echo "\" />
                        <p>
                            Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 150
                        </p>
                        <a class=\"savoir\">En savoir plus</a>
                    </div>

                </div>
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

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo "Bienvenue";
    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 8
        echo "            ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "6e88fb9_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_6e88fb9_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/6e88fb9_styles_1.css");
            // line 10
            echo "           
            <link rel=\"stylesheet\" href=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" />
            ";
        } else {
            // asset "6e88fb9"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_6e88fb9") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/6e88fb9.css");
            // line 10
            echo "           
            <link rel=\"stylesheet\" href=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" />
            ";
        }
        unset($context["asset_url"]);
        // line 12
        echo "  

        ";
    }

    public function getTemplateName()
    {
        return "AgImAgenceBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  192 => 12,  186 => 11,  183 => 10,  176 => 11,  173 => 10,  168 => 8,  165 => 7,  159 => 6,  126 => 93,  116 => 86,  106 => 79,  96 => 72,  43 => 22,  34 => 15,  32 => 7,  28 => 6,  21 => 1,);
    }
}
