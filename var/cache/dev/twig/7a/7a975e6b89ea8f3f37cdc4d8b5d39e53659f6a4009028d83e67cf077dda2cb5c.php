<?php

/* base.html.twig */
class __TwigTemplate_0533afd7299f15de7d4e7384990809385c19240dea620ae3557159fb6dfce49b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_93963bf63834511285f0eed6c235b852a8ec557ee732ffa0979444a609c9d3cf = $this->env->getExtension("native_profiler");
        $__internal_93963bf63834511285f0eed6c235b852a8ec557ee732ffa0979444a609c9d3cf->enter($__internal_93963bf63834511285f0eed6c235b852a8ec557ee732ffa0979444a609c9d3cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_93963bf63834511285f0eed6c235b852a8ec557ee732ffa0979444a609c9d3cf->leave($__internal_93963bf63834511285f0eed6c235b852a8ec557ee732ffa0979444a609c9d3cf_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_7357859c06a507352242d8db485acade7e0e360d0c3510be9f9112e063e4306d = $this->env->getExtension("native_profiler");
        $__internal_7357859c06a507352242d8db485acade7e0e360d0c3510be9f9112e063e4306d->enter($__internal_7357859c06a507352242d8db485acade7e0e360d0c3510be9f9112e063e4306d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_7357859c06a507352242d8db485acade7e0e360d0c3510be9f9112e063e4306d->leave($__internal_7357859c06a507352242d8db485acade7e0e360d0c3510be9f9112e063e4306d_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_75361e14cc69ba29a89d9cc9a8b4a5899e3383a3ee56999ba0812a9aac40d541 = $this->env->getExtension("native_profiler");
        $__internal_75361e14cc69ba29a89d9cc9a8b4a5899e3383a3ee56999ba0812a9aac40d541->enter($__internal_75361e14cc69ba29a89d9cc9a8b4a5899e3383a3ee56999ba0812a9aac40d541_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_75361e14cc69ba29a89d9cc9a8b4a5899e3383a3ee56999ba0812a9aac40d541->leave($__internal_75361e14cc69ba29a89d9cc9a8b4a5899e3383a3ee56999ba0812a9aac40d541_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_0d4a0aecf60e1ce7275a91314e16a2fe29f2c8db2c8f2590cdcfbf6e5c9b971c = $this->env->getExtension("native_profiler");
        $__internal_0d4a0aecf60e1ce7275a91314e16a2fe29f2c8db2c8f2590cdcfbf6e5c9b971c->enter($__internal_0d4a0aecf60e1ce7275a91314e16a2fe29f2c8db2c8f2590cdcfbf6e5c9b971c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_0d4a0aecf60e1ce7275a91314e16a2fe29f2c8db2c8f2590cdcfbf6e5c9b971c->leave($__internal_0d4a0aecf60e1ce7275a91314e16a2fe29f2c8db2c8f2590cdcfbf6e5c9b971c_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4edaa6a1f24367095cc40dff7529b6bd4997a1e88acd1d5783275466bd27badf = $this->env->getExtension("native_profiler");
        $__internal_4edaa6a1f24367095cc40dff7529b6bd4997a1e88acd1d5783275466bd27badf->enter($__internal_4edaa6a1f24367095cc40dff7529b6bd4997a1e88acd1d5783275466bd27badf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_4edaa6a1f24367095cc40dff7529b6bd4997a1e88acd1d5783275466bd27badf->leave($__internal_4edaa6a1f24367095cc40dff7529b6bd4997a1e88acd1d5783275466bd27badf_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
