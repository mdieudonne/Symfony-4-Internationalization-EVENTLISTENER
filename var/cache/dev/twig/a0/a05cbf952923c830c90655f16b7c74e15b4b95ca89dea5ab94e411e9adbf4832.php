<?php

/* @Framework/Form/date_widget.html.php */
class __TwigTemplate_bd44f098f17ebd4ea72625c7ef025d3d48b2c96d3f1b1aaf0579742cacc27e9a extends Twig_Template
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
        $__internal_76d6358a0538cef3a938001ab9310caa51bf0d864f204f44ea565cb93e2e7fd0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76d6358a0538cef3a938001ab9310caa51bf0d864f204f44ea565cb93e2e7fd0->enter($__internal_76d6358a0538cef3a938001ab9310caa51bf0d864f204f44ea565cb93e2e7fd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/date_widget.html.php"));

        $__internal_adba3e2278ba27d7701eff6a171faa98b9e4c952a2af416e30698e8c2d31904e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_adba3e2278ba27d7701eff6a171faa98b9e4c952a2af416e30698e8c2d31904e->enter($__internal_adba3e2278ba27d7701eff6a171faa98b9e4c952a2af416e30698e8c2d31904e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/date_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo str_replace(array('";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["year"]) || array_key_exists("year", $context) ? $context["year"] : (function () { throw new Twig_Error_Runtime('Variable "year" does not exist.', 5, $this->getSourceContext()); })()), "html", null, true);
        echo "', '";
        echo twig_escape_filter($this->env, (isset($context["month"]) || array_key_exists("month", $context) ? $context["month"] : (function () { throw new Twig_Error_Runtime('Variable "month" does not exist.', 5, $this->getSourceContext()); })()), "html", null, true);
        echo "', '";
        echo twig_escape_filter($this->env, (isset($context["day"]) || array_key_exists("day", $context) ? $context["day"] : (function () { throw new Twig_Error_Runtime('Variable "day" does not exist.', 5, $this->getSourceContext()); })()), "html", null, true);
        echo "'), array(
            \$view['form']->widget(\$form['year']),
            \$view['form']->widget(\$form['month']),
            \$view['form']->widget(\$form['day']),
        ), \$date_pattern) ?>
    </div>
<?php endif ?>
";
        
        $__internal_76d6358a0538cef3a938001ab9310caa51bf0d864f204f44ea565cb93e2e7fd0->leave($__internal_76d6358a0538cef3a938001ab9310caa51bf0d864f204f44ea565cb93e2e7fd0_prof);

        
        $__internal_adba3e2278ba27d7701eff6a171faa98b9e4c952a2af416e30698e8c2d31904e->leave($__internal_adba3e2278ba27d7701eff6a171faa98b9e4c952a2af416e30698e8c2d31904e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/date_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 5,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo str_replace(array('{{ year }}', '{{ month }}', '{{ day }}'), array(
            \$view['form']->widget(\$form['year']),
            \$view['form']->widget(\$form['month']),
            \$view['form']->widget(\$form['day']),
        ), \$date_pattern) ?>
    </div>
<?php endif ?>
", "@Framework/Form/date_widget.html.php", "/media/simplon/virtual-hosts/symfony-challenge/vendor/symfony/framework-bundle/Resources/views/Form/date_widget.html.php");
    }
}
