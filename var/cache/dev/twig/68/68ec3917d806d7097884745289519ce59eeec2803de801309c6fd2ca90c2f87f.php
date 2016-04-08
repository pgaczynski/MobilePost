<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_f5692de168da5c4c58cd187aa9282b4c071f872f63f599dd54497d89a61ab463 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3c20cfd95c9f0cd5f0cf882c7402fae48ceb8aebb9f1b5e9e8e7448dc3d76137 = $this->env->getExtension("native_profiler");
        $__internal_3c20cfd95c9f0cd5f0cf882c7402fae48ceb8aebb9f1b5e9e8e7448dc3d76137->enter($__internal_3c20cfd95c9f0cd5f0cf882c7402fae48ceb8aebb9f1b5e9e8e7448dc3d76137_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3c20cfd95c9f0cd5f0cf882c7402fae48ceb8aebb9f1b5e9e8e7448dc3d76137->leave($__internal_3c20cfd95c9f0cd5f0cf882c7402fae48ceb8aebb9f1b5e9e8e7448dc3d76137_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_2a215c6d4721614ce792735d9b5cb6632321b6d06836bbd70dd2502fc587cc36 = $this->env->getExtension("native_profiler");
        $__internal_2a215c6d4721614ce792735d9b5cb6632321b6d06836bbd70dd2502fc587cc36->enter($__internal_2a215c6d4721614ce792735d9b5cb6632321b6d06836bbd70dd2502fc587cc36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_2a215c6d4721614ce792735d9b5cb6632321b6d06836bbd70dd2502fc587cc36->leave($__internal_2a215c6d4721614ce792735d9b5cb6632321b6d06836bbd70dd2502fc587cc36_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_065a6d67d1216eb0451c863595ca8c311927238d2678a19750ffabfcafa1d61f = $this->env->getExtension("native_profiler");
        $__internal_065a6d67d1216eb0451c863595ca8c311927238d2678a19750ffabfcafa1d61f->enter($__internal_065a6d67d1216eb0451c863595ca8c311927238d2678a19750ffabfcafa1d61f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_065a6d67d1216eb0451c863595ca8c311927238d2678a19750ffabfcafa1d61f->leave($__internal_065a6d67d1216eb0451c863595ca8c311927238d2678a19750ffabfcafa1d61f_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_fbcfa7934d9ded9981f978caf4a1c36588b6116b009f0f79a393da76e2ba22f0 = $this->env->getExtension("native_profiler");
        $__internal_fbcfa7934d9ded9981f978caf4a1c36588b6116b009f0f79a393da76e2ba22f0->enter($__internal_fbcfa7934d9ded9981f978caf4a1c36588b6116b009f0f79a393da76e2ba22f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_fbcfa7934d9ded9981f978caf4a1c36588b6116b009f0f79a393da76e2ba22f0->leave($__internal_fbcfa7934d9ded9981f978caf4a1c36588b6116b009f0f79a393da76e2ba22f0_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
