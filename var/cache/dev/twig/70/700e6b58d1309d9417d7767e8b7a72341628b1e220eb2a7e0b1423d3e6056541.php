<?php

/* GagneGrosBundle::layout.html.twig */
class __TwigTemplate_4576f1f8c1188ca876cbba8d96d3ec135afba86dd5cb4825fe2f0b8935f95546 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::layoutMain.html.twig", "GagneGrosBundle::layout.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'aside' => array($this, 'block_aside'),
            'aside_enfant' => array($this, 'block_aside_enfant'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layoutMain.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_955f4c58dc111f55e957a5af72aee6ed1ad0cda77edd464c9c7a60388c28c0ae = $this->env->getExtension("native_profiler");
        $__internal_955f4c58dc111f55e957a5af72aee6ed1ad0cda77edd464c9c7a60388c28c0ae->enter($__internal_955f4c58dc111f55e957a5af72aee6ed1ad0cda77edd464c9c7a60388c28c0ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GagneGrosBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_955f4c58dc111f55e957a5af72aee6ed1ad0cda77edd464c9c7a60388c28c0ae->leave($__internal_955f4c58dc111f55e957a5af72aee6ed1ad0cda77edd464c9c7a60388c28c0ae_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_3b0c21b10bd74bff5243ae0c0deb4ab3d7b1d77f701c6a56fa6772fe3c82d671 = $this->env->getExtension("native_profiler");
        $__internal_3b0c21b10bd74bff5243ae0c0deb4ab3d7b1d77f701c6a56fa6772fe3c82d671->enter($__internal_3b0c21b10bd74bff5243ae0c0deb4ab3d7b1d77f701c6a56fa6772fe3c82d671_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Gagne-Gros ";
        
        $__internal_3b0c21b10bd74bff5243ae0c0deb4ab3d7b1d77f701c6a56fa6772fe3c82d671->leave($__internal_3b0c21b10bd74bff5243ae0c0deb4ab3d7b1d77f701c6a56fa6772fe3c82d671_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_e28d64dd9690ec6b68e986438b69eb6d66787386d473f262e2449c4c58c017a4 = $this->env->getExtension("native_profiler");
        $__internal_e28d64dd9690ec6b68e986438b69eb6d66787386d473f262e2449c4c58c017a4->enter($__internal_e28d64dd9690ec6b68e986438b69eb6d66787386d473f262e2449c4c58c017a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo " ";
        
        $__internal_e28d64dd9690ec6b68e986438b69eb6d66787386d473f262e2449c4c58c017a4->leave($__internal_e28d64dd9690ec6b68e986438b69eb6d66787386d473f262e2449c4c58c017a4_prof);

    }

    // line 9
    public function block_aside($context, array $blocks = array())
    {
        $__internal_cd7cdbfa6cc11b874f0108bbbd6ad809540e6871f15ea6f803e671d369411266 = $this->env->getExtension("native_profiler");
        $__internal_cd7cdbfa6cc11b874f0108bbbd6ad809540e6871f15ea6f803e671d369411266->enter($__internal_cd7cdbfa6cc11b874f0108bbbd6ad809540e6871f15ea6f803e671d369411266_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "aside"));

        // line 10
        echo "  ";
        $this->displayBlock('aside_enfant', $context, $blocks);
        // line 11
        echo "
  <div class=\"aside\" id=\"extras\">
    <h1>EXTRAS</h1>
    <div class=\"aside_contenu\">
      <ul>
        <li><a href=\"#\">Règles Paris Sportif</a></li>
        <li><a href=\"#\">Conseil pratiques</a></li>
        <li><a href=\"#\">Divers</a></li>
      </ul>
    </div>
  </div>
";
        
        $__internal_cd7cdbfa6cc11b874f0108bbbd6ad809540e6871f15ea6f803e671d369411266->leave($__internal_cd7cdbfa6cc11b874f0108bbbd6ad809540e6871f15ea6f803e671d369411266_prof);

    }

    // line 10
    public function block_aside_enfant($context, array $blocks = array())
    {
        $__internal_e82c394d7e32beb47499644b0a263f7a26c88b225413e5ab93faf83674334682 = $this->env->getExtension("native_profiler");
        $__internal_e82c394d7e32beb47499644b0a263f7a26c88b225413e5ab93faf83674334682->enter($__internal_e82c394d7e32beb47499644b0a263f7a26c88b225413e5ab93faf83674334682_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "aside_enfant"));

        echo " ";
        
        $__internal_e82c394d7e32beb47499644b0a263f7a26c88b225413e5ab93faf83674334682->leave($__internal_e82c394d7e32beb47499644b0a263f7a26c88b225413e5ab93faf83674334682_prof);

    }

    // line 23
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a4c7c632c0310a4122e8afe0357a25e680e4fa66b14b15ad57baa5e3feda91e7 = $this->env->getExtension("native_profiler");
        $__internal_a4c7c632c0310a4122e8afe0357a25e680e4fa66b14b15ad57baa5e3feda91e7->enter($__internal_a4c7c632c0310a4122e8afe0357a25e680e4fa66b14b15ad57baa5e3feda91e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        echo "  ";
        
        $__internal_a4c7c632c0310a4122e8afe0357a25e680e4fa66b14b15ad57baa5e3feda91e7->leave($__internal_a4c7c632c0310a4122e8afe0357a25e680e4fa66b14b15ad57baa5e3feda91e7_prof);

    }

    public function getTemplateName()
    {
        return "GagneGrosBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 23,  89 => 10,  71 => 11,  68 => 10,  62 => 9,  50 => 7,  38 => 5,  11 => 3,);
    }
}
/* {# src/GagneGrosBundle/Resources/views/layout.html.twig #}*/
/* */
/* {% extends "::layoutMain.html.twig" %}*/
/* */
/* {% block title %} Gagne-Gros {% endblock %}*/
/* */
/* {% block body %} {% endblock %}*/
/* */
/* {% block aside %}*/
/*   {% block aside_enfant %} {% endblock %}*/
/* */
/*   <div class="aside" id="extras">*/
/*     <h1>EXTRAS</h1>*/
/*     <div class="aside_contenu">*/
/*       <ul>*/
/*         <li><a href="#">Règles Paris Sportif</a></li>*/
/*         <li><a href="#">Conseil pratiques</a></li>*/
/*         <li><a href="#">Divers</a></li>*/
/*       </ul>*/
/*     </div>*/
/*   </div>*/
/* {% endblock %}*/
/* {% block javascripts %}  {% endblock %}*/
/* */
