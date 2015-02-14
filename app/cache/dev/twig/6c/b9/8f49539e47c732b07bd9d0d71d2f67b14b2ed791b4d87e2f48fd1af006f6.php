<?php

/* AgImAgenceBundle:Default:index.html.twig */
class __TwigTemplate_6cb98f49539e47c732b07bd9d0d71d2f67b14b2ed791b4d87e2f48fd1af006f6 extends Twig_Template
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
        echo "<div class=\"content-bas\">
                    <h4>Deniérres Annances</h4>
                    <div class=\"annance-detail\">
                      
                         <img src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/agimagence/images/1.png"), "html", null, true);
        echo "\" />
                        <p>
                            Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 150
                        </p>
                        <a class=\"savoir\">En savoir plus</a>
                    </div>
                    <div class=\"annance-detail\">
                        <img src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/agimagence/images/2.png"), "html", null, true);
        echo "\" />
                        <p>
                            Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 150
                        </p>
                        <a class=\"savoir\">En savoir plus</a>
                    </div>
                    <div class=\"annance-detail\">
                       <img src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/agimagence/images/3.png"), "html", null, true);
        echo "\" />
                        <p>
                            Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 150
                        </p>
                        <a class=\"savoir\">En savoir plus</a>
                    </div>
                    <div class=\"annance-detail\">
                       <img src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/agimagence/images/4.png"), "html", null, true);
        echo "\" />
                        <p>
                            Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 150
                        </p>
                        <a class=\"savoir\">En savoir plus</a>
                    </div>

                </div>
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
        return array (  67 => 29,  57 => 22,  47 => 15,  37 => 8,  31 => 4,  28 => 3,);
    }
}
