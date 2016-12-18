<?php

/* GagneGrosBundle:GG_Views:index.html.twig */
class __TwigTemplate_dd31782bf25279fec15225ed21df7545f333a765a4eb936424bb717e86e63455 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("GagneGrosBundle::layout.html.twig", "GagneGrosBundle:GG_Views:index.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'aside_enfant' => array($this, 'block_aside_enfant'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "GagneGrosBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a6e5046185376af62a063e31d26cb071e62564d415094eb2980775d8fe811d17 = $this->env->getExtension("native_profiler");
        $__internal_a6e5046185376af62a063e31d26cb071e62564d415094eb2980775d8fe811d17->enter($__internal_a6e5046185376af62a063e31d26cb071e62564d415094eb2980775d8fe811d17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GagneGrosBundle:GG_Views:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a6e5046185376af62a063e31d26cb071e62564d415094eb2980775d8fe811d17->leave($__internal_a6e5046185376af62a063e31d26cb071e62564d415094eb2980775d8fe811d17_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_7b3a85bfdc73029d6bb5f6d07db77ecf71e955ba0b6b2e8370f341f3e70697d8 = $this->env->getExtension("native_profiler");
        $__internal_7b3a85bfdc73029d6bb5f6d07db77ecf71e955ba0b6b2e8370f341f3e70697d8->enter($__internal_7b3a85bfdc73029d6bb5f6d07db77ecf71e955ba0b6b2e8370f341f3e70697d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Accueil ";
        
        $__internal_7b3a85bfdc73029d6bb5f6d07db77ecf71e955ba0b6b2e8370f341f3e70697d8->leave($__internal_7b3a85bfdc73029d6bb5f6d07db77ecf71e955ba0b6b2e8370f341f3e70697d8_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_497282f2b998e8dd6ba8508de02b6763fc09c0ecfa698c90952ee8231c042648 = $this->env->getExtension("native_profiler");
        $__internal_497282f2b998e8dd6ba8508de02b6763fc09c0ecfa698c90952ee8231c042648->enter($__internal_497282f2b998e8dd6ba8508de02b6763fc09c0ecfa698c90952ee8231c042648_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "  <h1>RESULTATS DES MATCHS</h1>
  ";
        // line 9
        if (array_key_exists("liste_matchs", $context)) {
            // line 10
            echo "    <table width=\"550px\" cellpadding=\"5\">
      <tr>
        <th width=\"300px\">Nom des équipes</th>
        <th colspan=\"2\">Score Mi-temps</th>
        <th colspan=\"2\">Score final</th>
      </tr>
        ";
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["liste_matchs"]) ? $context["liste_matchs"] : $this->getContext($context, "liste_matchs")));
            foreach ($context['_seq'] as $context["_key"] => $context["match"]) {
                // line 17
                echo "        <tr>
          <td>";
                // line 18
                echo twig_escape_filter($this->env, $this->getAttribute($context["match"], "equipe1", array()), "html", null, true);
                echo " --> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["match"], "equipe2", array()), "html", null, true);
                echo "</td>
          <td align=\"center\">";
                // line 19
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["match"], "scoreMatchs", array()), "butMitemp1", array()), "html", null, true);
                echo "</td>
          <td align=\"center\">";
                // line 20
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["match"], "scoreMatchs", array()), "butMitemp2", array()), "html", null, true);
                echo "</td>
          <td align=\"center\">";
                // line 21
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["match"], "scoreMatchs", array()), "butFinal1", array()), "html", null, true);
                echo "</td>
          <td align=\"center\">";
                // line 22
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["match"], "scoreMatchs", array()), "butFinal2", array()), "html", null, true);
                echo "</td>
        </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['match'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "    </table>
  ";
        } else {
            // line 27
            echo "    <p style=\"text-align:center;\"> Aucun Match terminé pour l'instant ! </p>
  ";
        }
        
        $__internal_497282f2b998e8dd6ba8508de02b6763fc09c0ecfa698c90952ee8231c042648->leave($__internal_497282f2b998e8dd6ba8508de02b6763fc09c0ecfa698c90952ee8231c042648_prof);

    }

    // line 31
    public function block_aside_enfant($context, array $blocks = array())
    {
        $__internal_733a5f0745144843e4b834aa6f6b37150bdf4512393e35334f25ff469c8afd39 = $this->env->getExtension("native_profiler");
        $__internal_733a5f0745144843e4b834aa6f6b37150bdf4512393e35334f25ff469c8afd39->enter($__internal_733a5f0745144843e4b834aa6f6b37150bdf4512393e35334f25ff469c8afd39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "aside_enfant"));

        // line 32
        echo "<div class=\"aside\">
  <h1>Connexion</h1>
  <div class=\"aside_contenu\">
    <form action=\"#\" method=\"post\">
      <input type=\"text\" name=\"id_connect\" placeholder=\"Identifiant\" />
      <br><input type=\"password\" name=\"pass_connect\" placeholder=\"Mot de Passe\" />
      <br><input type=\"submit\" value=\"Connecter\">
    </form>
    <p><a href=\"#\">Identifiant/Mot de passe perdu ?</a></p>
  </div>
</div>
";
        
        $__internal_733a5f0745144843e4b834aa6f6b37150bdf4512393e35334f25ff469c8afd39->leave($__internal_733a5f0745144843e4b834aa6f6b37150bdf4512393e35334f25ff469c8afd39_prof);

    }

    public function getTemplateName()
    {
        return "GagneGrosBundle:GG_Views:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 32,  116 => 31,  107 => 27,  103 => 25,  94 => 22,  90 => 21,  86 => 20,  82 => 19,  76 => 18,  73 => 17,  69 => 16,  61 => 10,  59 => 9,  56 => 8,  50 => 7,  36 => 5,  11 => 3,);
    }
}
/* {# src/GagneGrosBundle/Resources/views/GG_Views/index.html.twig #}*/
/* */
/* {% extends "GagneGrosBundle::layout.html.twig" %}*/
/* */
/* {% block title %} {{ parent() }} - Accueil {% endblock %}*/
/* */
/* {% block body %}*/
/*   <h1>RESULTATS DES MATCHS</h1>*/
/*   {% if liste_matchs is defined %}*/
/*     <table width="550px" cellpadding="5">*/
/*       <tr>*/
/*         <th width="300px">Nom des équipes</th>*/
/*         <th colspan="2">Score Mi-temps</th>*/
/*         <th colspan="2">Score final</th>*/
/*       </tr>*/
/*         {% for match in liste_matchs %}*/
/*         <tr>*/
/*           <td>{{match.equipe1}} --> {{match.equipe2}}</td>*/
/*           <td align="center">{{ match.scoreMatchs.butMitemp1 }}</td>*/
/*           <td align="center">{{match.scoreMatchs.butMitemp2}}</td>*/
/*           <td align="center">{{match.scoreMatchs.butFinal1}}</td>*/
/*           <td align="center">{{match.scoreMatchs.butFinal2}}</td>*/
/*         </tr>*/
/*         {% endfor %}*/
/*     </table>*/
/*   {% else %}*/
/*     <p style="text-align:center;"> Aucun Match terminé pour l'instant ! </p>*/
/*   {% endif %}*/
/* {% endblock %}*/
/* */
/* {% block aside_enfant %}*/
/* <div class="aside">*/
/*   <h1>Connexion</h1>*/
/*   <div class="aside_contenu">*/
/*     <form action="#" method="post">*/
/*       <input type="text" name="id_connect" placeholder="Identifiant" />*/
/*       <br><input type="password" name="pass_connect" placeholder="Mot de Passe" />*/
/*       <br><input type="submit" value="Connecter">*/
/*     </form>*/
/*     <p><a href="#">Identifiant/Mot de passe perdu ?</a></p>*/
/*   </div>*/
/* </div>*/
/* {% endblock %}*/
/* */
