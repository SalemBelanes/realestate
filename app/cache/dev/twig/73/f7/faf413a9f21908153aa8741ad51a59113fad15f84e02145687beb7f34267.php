<?php

/* ::base.html.twig */
class __TwigTemplate_73f7faf413a9f21908153aa8741ad51a59113fad15f84e02145687beb7f34267 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
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
        <div id=\"top\">
            <div class=\"header-top\"> 


                <div id=\"connexion\">


                </div>

            </div>
        </div>
        <div class=\"top-contenu\"></div>
        <div id=\"contenu\" style=\"display: none\">

            <ul id=\"mon-compte\">

                <li id=\"menu-coordonnee\"><a href=\"\"><p>Mes coordonnées</p></a></li>
                <li id=\"menu-change-password\"  ><a href=\"\"><p>Modifier mon mot de passe</p></a></li>
                <li id=\"menu-profile-utilisateur\"  ><a href=''><p>Mes médias</p></a></li>
                <li id=\"menu-Complement-utilisateur\"  ><a href=''><p>Ma société</p></a></li>
            </ul>

            <ul id=\"liste-informations\">



            </ul>
        </div>


    </div>
    ";
        // line 49
        $this->displayBlock('body', $context, $blocks);
        // line 52
        echo "    <div class=\"clearfooter\"></div>
</div>
<div class=\"bas-contenu\"></div>
<div id=\"footer\">  
    <div class=\"text-footer\"></div>
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
            // asset "475f50d_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_475f50d_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/475f50d_styles_1.css");
            // line 10
            echo "           
            <link rel=\"stylesheet\" href=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" />
            ";
        } else {
            // asset "475f50d"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_475f50d") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/475f50d.css");
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

    // line 49
    public function block_body($context, array $blocks = array())
    {
        // line 50
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  129 => 50,  126 => 49,  120 => 12,  114 => 11,  111 => 10,  104 => 11,  101 => 10,  96 => 8,  93 => 7,  87 => 6,  73 => 52,  71 => 49,  35 => 15,  33 => 7,  29 => 6,  22 => 1,);
    }
}
