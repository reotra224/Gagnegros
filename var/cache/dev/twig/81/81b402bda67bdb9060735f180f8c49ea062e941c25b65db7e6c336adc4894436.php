<?php

/* GagneGrosBundle:GG_Views:parisNormal.html.twig */
class __TwigTemplate_94e65f32c7016bb77f430b027b18bb3d09c3e88d18eff39668928df122e959f8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("GagneGrosBundle::layout.html.twig", "GagneGrosBundle:GG_Views:parisNormal.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'aside_enfant' => array($this, 'block_aside_enfant'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "GagneGrosBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f546b570d68fc60aa9527aad5a463c36e8023fce2dd63917fc902e7d2cfd4c56 = $this->env->getExtension("native_profiler");
        $__internal_f546b570d68fc60aa9527aad5a463c36e8023fce2dd63917fc902e7d2cfd4c56->enter($__internal_f546b570d68fc60aa9527aad5a463c36e8023fce2dd63917fc902e7d2cfd4c56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GagneGrosBundle:GG_Views:parisNormal.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f546b570d68fc60aa9527aad5a463c36e8023fce2dd63917fc902e7d2cfd4c56->leave($__internal_f546b570d68fc60aa9527aad5a463c36e8023fce2dd63917fc902e7d2cfd4c56_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_36d539da3da0a2c7f60a72b3db08856716a5e8a9f835e5d408250b6ccf3b1b64 = $this->env->getExtension("native_profiler");
        $__internal_36d539da3da0a2c7f60a72b3db08856716a5e8a9f835e5d408250b6ccf3b1b64->enter($__internal_36d539da3da0a2c7f60a72b3db08856716a5e8a9f835e5d408250b6ccf3b1b64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " | Paris Normal ";
        
        $__internal_36d539da3da0a2c7f60a72b3db08856716a5e8a9f835e5d408250b6ccf3b1b64->leave($__internal_36d539da3da0a2c7f60a72b3db08856716a5e8a9f835e5d408250b6ccf3b1b64_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_4b906c9cdb504319b404483acdd2220a7c959bfea14cb80414c675984a4fa7a6 = $this->env->getExtension("native_profiler");
        $__internal_4b906c9cdb504319b404483acdd2220a7c959bfea14cb80414c675984a4fa7a6->enter($__internal_4b906c9cdb504319b404483acdd2220a7c959bfea14cb80414c675984a4fa7a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "  <h1>PARIS NORMAL</h1>
  ";
        // line 9
        if (array_key_exists("liste_matchs", $context)) {
            // line 10
            echo "    <table width=\"550px\" cellpadding=\"5\">
      <tr>
        <th width=\"250px\">Nom des équipes</th>
        <th>Equipe 1</th>
        <th>Match Nul</th>
        <th>Equipe 2</th>
      </tr>
      ";
            // line 17
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["liste_matchs"]) ? $context["liste_matchs"] : $this->getContext($context, "liste_matchs")));
            foreach ($context['_seq'] as $context["_key"] => $context["match"]) {
                // line 18
                echo "        <tr>
          <td>";
                // line 19
                echo twig_escape_filter($this->env, $this->getAttribute($context["match"], "equipe1", array()), "html", null, true);
                echo " --> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["match"], "equipe2", array()), "html", null, true);
                echo "</td>
          <td align=\"center\">
            <a href=\"#\" class = \"";
                // line 21
                echo twig_escape_filter($this->env, (((((((($this->getAttribute($context["match"], "id", array()) . ";") . twig_title_string_filter($this->env, $this->getAttribute($context["match"], "equipe1", array()))) . ";") . twig_title_string_filter($this->env, $this->getAttribute($context["match"], "equipe2", array()))) . ";") . twig_title_string_filter($this->env, $this->getAttribute($context["match"], "equipe1", array()))) . ";") . $this->getAttribute($this->getAttribute($context["match"], "cotesMatchs", array()), "coteEquipe1", array())), "html", null, true);
                echo "\"
                id=\"cote\">
              ";
                // line 23
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["match"], "cotesMatchs", array()), "coteEquipe1", array()), "html", null, true);
                echo "
            </a>
          </td>
          <td align=\"center\">
            <a href=\"#\" class=\"";
                // line 27
                echo twig_escape_filter($this->env, (((((((($this->getAttribute($context["match"], "id", array()) . ";") . twig_title_string_filter($this->env, $this->getAttribute($context["match"], "equipe1", array()))) . ";") . twig_title_string_filter($this->env, $this->getAttribute($context["match"], "equipe2", array()))) . ";") . "NULL") . ";") . $this->getAttribute($this->getAttribute($context["match"], "cotesMatchs", array()), "coteNull", array())), "html", null, true);
                echo "\"
                id=\"cote\">
              ";
                // line 29
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["match"], "cotesMatchs", array()), "coteNull", array()), "html", null, true);
                echo "
            </a>
          </td>
          <td align=\"center\">
            <a href=\"#\" class=\"";
                // line 33
                echo twig_escape_filter($this->env, (((((((($this->getAttribute($context["match"], "id", array()) . ";") . twig_title_string_filter($this->env, $this->getAttribute($context["match"], "equipe1", array()))) . ";") . twig_title_string_filter($this->env, $this->getAttribute($context["match"], "equipe2", array()))) . ";") . twig_title_string_filter($this->env, $this->getAttribute($context["match"], "equipe2", array()))) . ";") . $this->getAttribute($this->getAttribute($context["match"], "cotesMatchs", array()), "coteEquipe2", array())), "html", null, true);
                echo "\"
                id=\"cote\">
              ";
                // line 35
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["match"], "cotesMatchs", array()), "coteEquipe2", array()), "html", null, true);
                echo "
            </a>
          </td>
        </tr>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['match'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo "    </table>
  ";
        } else {
            // line 42
            echo "    <p style=\"text-align:center;\"> Aucun Match en cour pour l'instant ! </p>
  ";
        }
        // line 44
        echo "
";
        
        $__internal_4b906c9cdb504319b404483acdd2220a7c959bfea14cb80414c675984a4fa7a6->leave($__internal_4b906c9cdb504319b404483acdd2220a7c959bfea14cb80414c675984a4fa7a6_prof);

    }

    // line 47
    public function block_aside_enfant($context, array $blocks = array())
    {
        $__internal_1a9049a1c4c1fe2f59237b4fec74e1bb5159973c55306b81513fa840194f4c43 = $this->env->getExtension("native_profiler");
        $__internal_1a9049a1c4c1fe2f59237b4fec74e1bb5159973c55306b81513fa840194f4c43->enter($__internal_1a9049a1c4c1fe2f59237b4fec74e1bb5159973c55306b81513fa840194f4c43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "aside_enfant"));

        // line 48
        echo "<div id=\"aside_paris_normal\"></div>
";
        
        $__internal_1a9049a1c4c1fe2f59237b4fec74e1bb5159973c55306b81513fa840194f4c43->leave($__internal_1a9049a1c4c1fe2f59237b4fec74e1bb5159973c55306b81513fa840194f4c43_prof);

    }

    // line 51
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9b3f8d389d7db10c0b9f762ae5f17407521297b3c6a88b0233c04f326e2b8bf7 = $this->env->getExtension("native_profiler");
        $__internal_9b3f8d389d7db10c0b9f762ae5f17407521297b3c6a88b0233c04f326e2b8bf7->enter($__internal_9b3f8d389d7db10c0b9f762ae5f17407521297b3c6a88b0233c04f326e2b8bf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 52
        echo "  ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "b9cf0e8_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_b9cf0e8_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/b9cf0e8_paris_1.js");
            // line 53
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
  ";
        } else {
            // asset "b9cf0e8"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_b9cf0e8") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/b9cf0e8.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
  ";
        }
        unset($context["asset_url"]);
        
        $__internal_9b3f8d389d7db10c0b9f762ae5f17407521297b3c6a88b0233c04f326e2b8bf7->leave($__internal_9b3f8d389d7db10c0b9f762ae5f17407521297b3c6a88b0233c04f326e2b8bf7_prof);

    }

    public function getTemplateName()
    {
        return "GagneGrosBundle:GG_Views:parisNormal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 53,  161 => 52,  155 => 51,  147 => 48,  141 => 47,  133 => 44,  129 => 42,  125 => 40,  114 => 35,  109 => 33,  102 => 29,  97 => 27,  90 => 23,  85 => 21,  78 => 19,  75 => 18,  71 => 17,  62 => 10,  60 => 9,  57 => 8,  51 => 7,  37 => 5,  11 => 3,);
    }
}
/* {# src/GagneGrosBundle/Resources/views/GG_Views/parisNormal.html.twig #}*/
/* */
/* {% extends "GagneGrosBundle::layout.html.twig" %}*/
/* */
/* {% block title %} {{ parent() }} | Paris Normal {% endblock %}*/
/* */
/* {% block body %}*/
/*   <h1>PARIS NORMAL</h1>*/
/*   {% if liste_matchs is defined %}*/
/*     <table width="550px" cellpadding="5">*/
/*       <tr>*/
/*         <th width="250px">Nom des équipes</th>*/
/*         <th>Equipe 1</th>*/
/*         <th>Match Nul</th>*/
/*         <th>Equipe 2</th>*/
/*       </tr>*/
/*       {% for match in liste_matchs %}*/
/*         <tr>*/
/*           <td>{{match.equipe1}} --> {{match.equipe2}}</td>*/
/*           <td align="center">*/
/*             <a href="#" class = "{{ match.id ~ ';' ~ match.equipe1|title ~ ';' ~ match.equipe2|title ~ ';' ~ match.equipe1|title ~ ';' ~ match.cotesMatchs.coteEquipe1 }}"*/
/*                 id="cote">*/
/*               {{ match.cotesMatchs.coteEquipe1 }}*/
/*             </a>*/
/*           </td>*/
/*           <td align="center">*/
/*             <a href="#" class="{{ match.id ~ ';' ~ match.equipe1|title ~ ';' ~ match.equipe2|title ~ ';' ~ 'NULL' ~ ';' ~ match.cotesMatchs.coteNull }}"*/
/*                 id="cote">*/
/*               {{ match.cotesMatchs.coteNull }}*/
/*             </a>*/
/*           </td>*/
/*           <td align="center">*/
/*             <a href="#" class="{{ match.id ~ ';' ~ match.equipe1|title ~ ";" ~ match.equipe2|title ~ ";" ~ match.equipe2|title ~ ";" ~ match.cotesMatchs.coteEquipe2 }}"*/
/*                 id="cote">*/
/*               {{ match.cotesMatchs.coteEquipe2 }}*/
/*             </a>*/
/*           </td>*/
/*         </tr>*/
/*       {% endfor %}*/
/*     </table>*/
/*   {% else %}*/
/*     <p style="text-align:center;"> Aucun Match en cour pour l'instant ! </p>*/
/*   {% endif %}*/
/* */
/* {% endblock %}*/
/* */
/* {% block aside_enfant %}*/
/* <div id="aside_paris_normal"></div>*/
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/*   {% javascripts '@GagneGrosBundle/Resources/public/js/paris.js' %}*/
/*     <script type="text/javascript" src="{{ asset_url }}"></script>*/
/*   {% endjavascripts %}*/
/* {% endblock %}*/
/* */
