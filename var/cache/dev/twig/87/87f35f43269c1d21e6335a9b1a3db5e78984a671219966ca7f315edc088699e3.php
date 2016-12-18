<?php

/* ::layoutMain.html.twig */
class __TwigTemplate_7d1b6629baba460cc1c3d679792469b5f8a6d69916d1e2876b844c2e4ab28d8a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'aside' => array($this, 'block_aside'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5e0a0f4ce3f01533fcbd1f78a1c0933d9cdd57d7739284fe02c7c354eacd58c3 = $this->env->getExtension("native_profiler");
        $__internal_5e0a0f4ce3f01533fcbd1f78a1c0933d9cdd57d7739284fe02c7c354eacd58c3->enter($__internal_5e0a0f4ce3f01533fcbd1f78a1c0933d9cdd57d7739284fe02c7c354eacd58c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layoutMain.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
          ";
        // line 6
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "d29f592_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_d29f592_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/d29f592_style_1.css");
            // line 7
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" media=\"all\" />
          ";
        } else {
            // asset "d29f592"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_d29f592") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/d29f592.css");
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" media=\"all\" />
          ";
        }
        unset($context["asset_url"]);
        // line 9
        echo "    </head>
    <body>
      <div class=\"contenu\">
        <header>
          <div id=\"logo\">
            ";
        // line 14
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "62d0bf9_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_62d0bf9_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/images/62d0bf9_Qt_1.jpg");
            // line 15
            echo "              <a href=\"";
            echo $this->env->getExtension('routing')->getPath("gagnegros_accueil");
            echo "\"><img src= \" ";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo " \" alt= \"Logo\" /></a>
            ";
        } else {
            // asset "62d0bf9"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_62d0bf9") : $this->env->getExtension('asset')->getAssetUrl("_controller/images/62d0bf9.jpg");
            echo "              <a href=\"";
            echo $this->env->getExtension('routing')->getPath("gagnegros_accueil");
            echo "\"><img src= \" ";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo " \" alt= \"Logo\" /></a>
            ";
        }
        unset($context["asset_url"]);
        // line 17
        echo "          </div>
          <h1 id=\"titre_principal\"> GAGNE GROS </h1>
        </header>

        <nav id=\"menu\">
          <ul>
            <li id=\"li_accueil\"><a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("gagnegros_accueil");
        echo "\">Accueil</a></li>
            <li id=\"li_paris\"><a href=\"#\">Paris sportif</a>
              <ul>
                <li><a href=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("paris_normal");
        echo "\">Normal</a></li>
                <li><a href=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("paris_mitemp");
        echo "\">Mi-temps</a></li>
                <li><a href=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("paris_scorefinal");
        echo "\">Score final</a></li>
              </ul>
            </li>
            <li id=\"li_hasard\"><a href=\"#\">Jeux de hasard</a>
              <ul>
                <li>Tirage
                  <ul>
                    <li><a href=\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("hasard_normal");
        echo "\">Normal</a></li>
                    <li><a href=\"";
        // line 36
        echo $this->env->getExtension('routing')->getPath("hasard_pognon");
        echo "\">Pognon</a></li>
                    <li><a href=\"";
        // line 37
        echo $this->env->getExtension('routing')->getPath("hasard_bigmoney");
        echo "\">Big Money</a></li>
                  </ul>
                </li>
                <li>Grattage
                  <ul>
                    <li><a href=\"";
        // line 42
        echo $this->env->getExtension('routing')->getPath("hasard_floush");
        echo "\">Floush</a></li>
                    <li><a href=\"";
        // line 43
        echo $this->env->getExtension('routing')->getPath("hasard_surprise");
        echo "\">Surprise</a></li>
                    <li><a href=\"";
        // line 44
        echo $this->env->getExtension('routing')->getPath("hasard_identique");
        echo "\">Identique</a></li>
                  </ul>
                </li>
              </ul>
            </li>
          </ul>
        </nav>

          <div class=\"aside\" id=\"acces_rapide\">
            <h1>Accès Rapide</h1>
            <div class=\"aside_contenu\">
              <ul>
                <li><a href=\"#\">Score Final</a></li>
                <li><a href=\"#\">Mi-Temps</a></li>
                <li><a href=\"#\">Pile ou Face</a></li>
                <li><a href=\"#\">Machine à sous</a></li>
                <li><a href=\"#\">Pogon</a></li>
              </ul>
            </div>
          </div>

          <div class=\"article\">
            ";
        // line 66
        $this->displayBlock('body', $context, $blocks);
        // line 67
        echo "          </div>

          <div class=\"aside_rigth\">
            ";
        // line 70
        $this->displayBlock('aside', $context, $blocks);
        // line 71
        echo "          </div>

        </div>

      ";
        // line 75
        $this->displayBlock('javascripts', $context, $blocks);
        // line 78
        echo "    </body>
</html>
";
        
        $__internal_5e0a0f4ce3f01533fcbd1f78a1c0933d9cdd57d7739284fe02c7c354eacd58c3->leave($__internal_5e0a0f4ce3f01533fcbd1f78a1c0933d9cdd57d7739284fe02c7c354eacd58c3_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_c5bae8aa055b19a42944463c4bacdb2ec5f84942fecdcd2d967e970f62fd4cdd = $this->env->getExtension("native_profiler");
        $__internal_c5bae8aa055b19a42944463c4bacdb2ec5f84942fecdcd2d967e970f62fd4cdd->enter($__internal_c5bae8aa055b19a42944463c4bacdb2ec5f84942fecdcd2d967e970f62fd4cdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        
        $__internal_c5bae8aa055b19a42944463c4bacdb2ec5f84942fecdcd2d967e970f62fd4cdd->leave($__internal_c5bae8aa055b19a42944463c4bacdb2ec5f84942fecdcd2d967e970f62fd4cdd_prof);

    }

    // line 66
    public function block_body($context, array $blocks = array())
    {
        $__internal_864eeeb9d3f5568fca912a80d5d1ec37f762890cb5f273bc927149824d4092ca = $this->env->getExtension("native_profiler");
        $__internal_864eeeb9d3f5568fca912a80d5d1ec37f762890cb5f273bc927149824d4092ca->enter($__internal_864eeeb9d3f5568fca912a80d5d1ec37f762890cb5f273bc927149824d4092ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo "  ";
        
        $__internal_864eeeb9d3f5568fca912a80d5d1ec37f762890cb5f273bc927149824d4092ca->leave($__internal_864eeeb9d3f5568fca912a80d5d1ec37f762890cb5f273bc927149824d4092ca_prof);

    }

    // line 70
    public function block_aside($context, array $blocks = array())
    {
        $__internal_a723ca5ae3a431fda0c9cd18bf0b87c4050db7d0516ded66ebe8fcd67e7e8f86 = $this->env->getExtension("native_profiler");
        $__internal_a723ca5ae3a431fda0c9cd18bf0b87c4050db7d0516ded66ebe8fcd67e7e8f86->enter($__internal_a723ca5ae3a431fda0c9cd18bf0b87c4050db7d0516ded66ebe8fcd67e7e8f86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "aside"));

        echo "  ";
        
        $__internal_a723ca5ae3a431fda0c9cd18bf0b87c4050db7d0516ded66ebe8fcd67e7e8f86->leave($__internal_a723ca5ae3a431fda0c9cd18bf0b87c4050db7d0516ded66ebe8fcd67e7e8f86_prof);

    }

    // line 75
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_23210e59a9b63112a013469f808e9853b61879995641cdd159511a914492577f = $this->env->getExtension("native_profiler");
        $__internal_23210e59a9b63112a013469f808e9853b61879995641cdd159511a914492577f->enter($__internal_23210e59a9b63112a013469f808e9853b61879995641cdd159511a914492577f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 76
        echo "
      ";
        
        $__internal_23210e59a9b63112a013469f808e9853b61879995641cdd159511a914492577f->leave($__internal_23210e59a9b63112a013469f808e9853b61879995641cdd159511a914492577f_prof);

    }

    public function getTemplateName()
    {
        return "::layoutMain.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  232 => 76,  226 => 75,  214 => 70,  202 => 66,  190 => 5,  181 => 78,  179 => 75,  173 => 71,  171 => 70,  166 => 67,  164 => 66,  139 => 44,  135 => 43,  131 => 42,  123 => 37,  119 => 36,  115 => 35,  105 => 28,  101 => 27,  97 => 26,  91 => 23,  83 => 17,  65 => 15,  61 => 14,  54 => 9,  40 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />*/
/*         <title>{% block title %} {% endblock %}</title>*/
/*           {% stylesheets filter='cssrewrite' '@GagneGrosBundle/Resources/public/css/style.css' %}*/
/*             <link rel="stylesheet" href="{{ asset_url }}" type="text/css" media="all" />*/
/*           {% endstylesheets %}*/
/*     </head>*/
/*     <body>*/
/*       <div class="contenu">*/
/*         <header>*/
/*           <div id="logo">*/
/*             {% image '@GagneGrosBundle/Resources/public/images/Qt.jpg' %}*/
/*               <a href="{{ path('gagnegros_accueil') }}"><img src= " {{ asset_url }} " alt= "Logo" /></a>*/
/*             {% endimage %}*/
/*           </div>*/
/*           <h1 id="titre_principal"> GAGNE GROS </h1>*/
/*         </header>*/
/* */
/*         <nav id="menu">*/
/*           <ul>*/
/*             <li id="li_accueil"><a href="{{ path('gagnegros_accueil') }}">Accueil</a></li>*/
/*             <li id="li_paris"><a href="#">Paris sportif</a>*/
/*               <ul>*/
/*                 <li><a href="{{ path('paris_normal') }}">Normal</a></li>*/
/*                 <li><a href="{{ path('paris_mitemp') }}">Mi-temps</a></li>*/
/*                 <li><a href="{{ path('paris_scorefinal') }}">Score final</a></li>*/
/*               </ul>*/
/*             </li>*/
/*             <li id="li_hasard"><a href="#">Jeux de hasard</a>*/
/*               <ul>*/
/*                 <li>Tirage*/
/*                   <ul>*/
/*                     <li><a href="{{ path('hasard_normal') }}">Normal</a></li>*/
/*                     <li><a href="{{ path('hasard_pognon') }}">Pognon</a></li>*/
/*                     <li><a href="{{ path('hasard_bigmoney') }}">Big Money</a></li>*/
/*                   </ul>*/
/*                 </li>*/
/*                 <li>Grattage*/
/*                   <ul>*/
/*                     <li><a href="{{ path('hasard_floush') }}">Floush</a></li>*/
/*                     <li><a href="{{ path('hasard_surprise') }}">Surprise</a></li>*/
/*                     <li><a href="{{ path('hasard_identique') }}">Identique</a></li>*/
/*                   </ul>*/
/*                 </li>*/
/*               </ul>*/
/*             </li>*/
/*           </ul>*/
/*         </nav>*/
/* */
/*           <div class="aside" id="acces_rapide">*/
/*             <h1>Accès Rapide</h1>*/
/*             <div class="aside_contenu">*/
/*               <ul>*/
/*                 <li><a href="#">Score Final</a></li>*/
/*                 <li><a href="#">Mi-Temps</a></li>*/
/*                 <li><a href="#">Pile ou Face</a></li>*/
/*                 <li><a href="#">Machine à sous</a></li>*/
/*                 <li><a href="#">Pogon</a></li>*/
/*               </ul>*/
/*             </div>*/
/*           </div>*/
/* */
/*           <div class="article">*/
/*             {% block body %}  {% endblock %}*/
/*           </div>*/
/* */
/*           <div class="aside_rigth">*/
/*             {% block aside %}  {% endblock %}*/
/*           </div>*/
/* */
/*         </div>*/
/* */
/*       {% block javascripts %}*/
/* */
/*       {% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
