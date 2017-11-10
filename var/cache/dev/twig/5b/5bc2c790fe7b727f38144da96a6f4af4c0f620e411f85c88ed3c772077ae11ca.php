<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_e46c9af3931a4a00c0f597c182724db7efe95c6f7b74564ae4fe0c1647ed3c36 extends Twig_Template
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
        $__internal_9afeaa10f40dd429d3f721d01b04af2c4b80bd9e8488165c185e8d296ffb7e40 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9afeaa10f40dd429d3f721d01b04af2c4b80bd9e8488165c185e8d296ffb7e40->enter($__internal_9afeaa10f40dd429d3f721d01b04af2c4b80bd9e8488165c185e8d296ffb7e40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_af58c0cb22b069c8a5d90d9092ea60030be444d411ca922aa3ff4b25a130aecf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af58c0cb22b069c8a5d90d9092ea60030be444d411ca922aa3ff4b25a130aecf->enter($__internal_af58c0cb22b069c8a5d90d9092ea60030be444d411ca922aa3ff4b25a130aecf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes'); ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form); ?>
        </td>
    </tr>
    <?php endif; ?>
    <?php echo \$view['form']->block(\$form, 'form_rows'); ?>
    <?php echo \$view['form']->rest(\$form); ?>
</table>
";
        
        $__internal_9afeaa10f40dd429d3f721d01b04af2c4b80bd9e8488165c185e8d296ffb7e40->leave($__internal_9afeaa10f40dd429d3f721d01b04af2c4b80bd9e8488165c185e8d296ffb7e40_prof);

        
        $__internal_af58c0cb22b069c8a5d90d9092ea60030be444d411ca922aa3ff4b25a130aecf->leave($__internal_af58c0cb22b069c8a5d90d9092ea60030be444d411ca922aa3ff4b25a130aecf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes'); ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form); ?>
        </td>
    </tr>
    <?php endif; ?>
    <?php echo \$view['form']->block(\$form, 'form_rows'); ?>
    <?php echo \$view['form']->rest(\$form); ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "/var/www/symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_widget_compound.html.php");
    }
}
