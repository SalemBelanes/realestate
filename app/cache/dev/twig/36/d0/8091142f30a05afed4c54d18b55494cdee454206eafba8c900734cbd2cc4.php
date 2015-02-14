<?php

/* ::communStyleSheet.html.twig */
class __TwigTemplate_36d08091142f30a05afed4c54d18b55494cdee454206eafba8c900734cbd2cc4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "ad66b83_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ad66b83_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/ad66b83_styles_1.css");
            // line 3
            echo "           
<link rel=\"stylesheet\" href=\"";
            // line 4
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" />
";
        } else {
            // asset "ad66b83"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ad66b83") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/ad66b83.css");
            // line 3
            echo "           
<link rel=\"stylesheet\" href=\"";
            // line 4
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" />
";
        }
        unset($context["asset_url"]);
    }

    public function getTemplateName()
    {
        return "::communStyleSheet.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 4,  33 => 3,  26 => 4,  23 => 3,  19 => 1,);
    }
}
