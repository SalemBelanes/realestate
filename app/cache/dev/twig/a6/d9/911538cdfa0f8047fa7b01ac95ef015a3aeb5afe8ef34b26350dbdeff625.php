<?php

/* ::communJavaScript.html.twig */
class __TwigTemplate_a6d9911538cdfa0f8047fa7b01ac95ef015a3aeb5afe8ef34b26350dbdeff625 extends Twig_Template
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
            // asset "2aa9ee2_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_2aa9ee2_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/2aa9ee2_jquery_1.js");
            // line 4
            echo "<script src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"></script>
";
        } else {
            // asset "2aa9ee2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_2aa9ee2") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/2aa9ee2.js");
            echo "<script src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"></script>
";
        }
        unset($context["asset_url"]);
        // line 6
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "230e221_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_230e221_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/230e221_script_1.js");
            // line 11
            echo "<script src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"></script>
";
        } else {
            // asset "230e221"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_230e221") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/230e221.js");
            echo "<script src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"></script>
";
        }
        unset($context["asset_url"]);
    }

    public function getTemplateName()
    {
        return "::communJavaScript.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 11,  37 => 6,  23 => 4,  19 => 1,);
    }
}
