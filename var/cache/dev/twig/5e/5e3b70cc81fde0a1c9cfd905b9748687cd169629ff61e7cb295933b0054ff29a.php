<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_413807748183d8d165fbfa75f17528cbaf50fd41d92e5b2dad2fbbbf0c047d47 extends Twig_Template
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
        $__internal_9fed44ee623a5a39e66618f87428e540e16b05902909b174c5c33adc2a980127 = $this->env->getExtension("native_profiler");
        $__internal_9fed44ee623a5a39e66618f87428e540e16b05902909b174c5c33adc2a980127->enter($__internal_9fed44ee623a5a39e66618f87428e540e16b05902909b174c5c33adc2a980127_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9fed44ee623a5a39e66618f87428e540e16b05902909b174c5c33adc2a980127->leave($__internal_9fed44ee623a5a39e66618f87428e540e16b05902909b174c5c33adc2a980127_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a01adfb124bc3be8e0735cef8f3ce1f9420c917bca1a7170969868859e86e405 = $this->env->getExtension("native_profiler");
        $__internal_a01adfb124bc3be8e0735cef8f3ce1f9420c917bca1a7170969868859e86e405->enter($__internal_a01adfb124bc3be8e0735cef8f3ce1f9420c917bca1a7170969868859e86e405_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_a01adfb124bc3be8e0735cef8f3ce1f9420c917bca1a7170969868859e86e405->leave($__internal_a01adfb124bc3be8e0735cef8f3ce1f9420c917bca1a7170969868859e86e405_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_10d577f4f7a976642c6f0bf90e1f952ee70e852c9edae3f083c74a0236cc4a9b = $this->env->getExtension("native_profiler");
        $__internal_10d577f4f7a976642c6f0bf90e1f952ee70e852c9edae3f083c74a0236cc4a9b->enter($__internal_10d577f4f7a976642c6f0bf90e1f952ee70e852c9edae3f083c74a0236cc4a9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_10d577f4f7a976642c6f0bf90e1f952ee70e852c9edae3f083c74a0236cc4a9b->leave($__internal_10d577f4f7a976642c6f0bf90e1f952ee70e852c9edae3f083c74a0236cc4a9b_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_460fcbfaac3fb4fa7baf3a8c851861045c9d86ac10037fadeec4b42aa0ebfe18 = $this->env->getExtension("native_profiler");
        $__internal_460fcbfaac3fb4fa7baf3a8c851861045c9d86ac10037fadeec4b42aa0ebfe18->enter($__internal_460fcbfaac3fb4fa7baf3a8c851861045c9d86ac10037fadeec4b42aa0ebfe18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_460fcbfaac3fb4fa7baf3a8c851861045c9d86ac10037fadeec4b42aa0ebfe18->leave($__internal_460fcbfaac3fb4fa7baf3a8c851861045c9d86ac10037fadeec4b42aa0ebfe18_prof);

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
