<?php
class FluidCache_SimpleBlog_Blog_action_new_457ddb5cacda7f6fa42d6237155afac2e1de4afb extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getVariableContainer() {
	// @todo
	return new \TYPO3\CMS\Fluid\Core\ViewHelper\TemplateVariableContainer();
}
public function getLayoutName(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$self = $this;

return 'Default';
}
public function hasLayout() {
return TRUE;
}

/**
 * section main
 */
public function section_b28b7af69320201d1cf206ebf28373980add1451(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();

$output0 = '';

$output0 .= '
<h1>New Blog</h1>

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FlashMessagesViewHelper
$arguments1 = array();
$arguments1['additionalAttributes'] = NULL;
$arguments1['data'] = NULL;
$arguments1['renderMode'] = NULL;
$arguments1['as'] = NULL;
$arguments1['class'] = NULL;
$arguments1['dir'] = NULL;
$arguments1['id'] = NULL;
$arguments1['lang'] = NULL;
$arguments1['style'] = NULL;
$arguments1['title'] = NULL;
$arguments1['accesskey'] = NULL;
$arguments1['tabindex'] = NULL;
$arguments1['onclick'] = NULL;
$arguments1['queueIdentifier'] = NULL;
$renderChildrenClosure2 = function() {return NULL;};
$viewHelper3 = $self->getViewHelper('$viewHelper3', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\FlashMessagesViewHelper');
$viewHelper3->setArguments($arguments1);
$viewHelper3->setRenderingContext($renderingContext);
$viewHelper3->setRenderChildrenClosure($renderChildrenClosure2);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FlashMessagesViewHelper

$output0 .= $viewHelper3->initializeArgumentsAndRender();

$output0 .= '

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments4 = array();
$arguments4['partial'] = 'FormErrors';
// Rendering Array
$array5 = array();
$array5['object'] = $currentVariableContainer->getOrNull('Blog');
$arguments4['arguments'] = $array5;
$arguments4['section'] = NULL;
$arguments4['optional'] = false;
$renderChildrenClosure6 = function() {return NULL;};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments4, $renderChildrenClosure6, $renderingContext);

$output0 .= '
    <section id="contact">
        <div class="section-content">
            <h1 class="section-header">Get in <span class="content-header wow fadeIn " data-wow-delay="0.2s" data-wow-duration="2s"> Touch with us</span></h1>
            <h3>Lorem Ipsum is simply dummy text of the printing and typesetting industry</h3>
        </div>
        <div class="contact-section">
            <div class="container">
    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper
$arguments7 = array();
$arguments7['action'] = 'create';
$arguments7['enctype'] = 'multipart/form-data';
$arguments7['name'] = 'newBlog';
$arguments7['object'] = $currentVariableContainer->getOrNull('newBlog');
$arguments7['additionalAttributes'] = NULL;
$arguments7['data'] = NULL;
$arguments7['arguments'] = array (
);
$arguments7['controller'] = NULL;
$arguments7['extensionName'] = NULL;
$arguments7['pluginName'] = NULL;
$arguments7['pageUid'] = NULL;
$arguments7['pageType'] = 0;
$arguments7['noCache'] = false;
$arguments7['noCacheHash'] = false;
$arguments7['section'] = '';
$arguments7['format'] = '';
$arguments7['additionalParams'] = array (
);
$arguments7['absolute'] = false;
$arguments7['addQueryString'] = false;
$arguments7['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments7['fieldNamePrefix'] = NULL;
$arguments7['actionUri'] = NULL;
$arguments7['objectName'] = NULL;
$arguments7['hiddenFieldClassName'] = NULL;
$arguments7['addQueryStringMethod'] = '';
$arguments7['method'] = NULL;
$arguments7['onreset'] = NULL;
$arguments7['onsubmit'] = NULL;
$arguments7['class'] = NULL;
$arguments7['dir'] = NULL;
$arguments7['id'] = NULL;
$arguments7['lang'] = NULL;
$arguments7['style'] = NULL;
$arguments7['title'] = NULL;
$arguments7['accesskey'] = NULL;
$arguments7['tabindex'] = NULL;
$arguments7['onclick'] = NULL;
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output9 = '';

$output9 .= '
    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments10 = array();
$arguments10['partial'] = 'Blog/FormFields';
$arguments10['section'] = NULL;
$arguments10['arguments'] = array (
);
$arguments10['optional'] = false;
$renderChildrenClosure11 = function() {return NULL;};

$output9 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments10, $renderChildrenClosure11, $renderingContext);

$output9 .= '
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper
$arguments12 = array();
$arguments12['value'] = 'Create new';
$arguments12['additionalAttributes'] = NULL;
$arguments12['data'] = NULL;
$arguments12['name'] = NULL;
$arguments12['property'] = NULL;
$arguments12['disabled'] = NULL;
$arguments12['class'] = NULL;
$arguments12['dir'] = NULL;
$arguments12['id'] = NULL;
$arguments12['lang'] = NULL;
$arguments12['style'] = NULL;
$arguments12['title'] = NULL;
$arguments12['accesskey'] = NULL;
$arguments12['tabindex'] = NULL;
$arguments12['onclick'] = NULL;
$renderChildrenClosure13 = function() {return NULL;};
$viewHelper14 = $self->getViewHelper('$viewHelper14', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper');
$viewHelper14->setArguments($arguments12);
$viewHelper14->setRenderingContext($renderingContext);
$viewHelper14->setRenderChildrenClosure($renderChildrenClosure13);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper

$output9 .= $viewHelper14->initializeArgumentsAndRender();

$output9 .= '
    ';
return $output9;
};
$viewHelper15 = $self->getViewHelper('$viewHelper15', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper');
$viewHelper15->setArguments($arguments7);
$viewHelper15->setRenderingContext($renderingContext);
$viewHelper15->setRenderChildrenClosure($renderChildrenClosure8);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper

$output0 .= $viewHelper15->initializeArgumentsAndRender();

$output0 .= '
            </div>
    </section>
';


return $output0;
}
/**
 * Main Render function
 */
public function render(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();

$output16 = '';

$output16 .= '
';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper
$arguments17 = array();
$arguments17['name'] = 'Default';
$renderChildrenClosure18 = function() {return NULL;};
$viewHelper19 = $self->getViewHelper('$viewHelper19', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper');
$viewHelper19->setArguments($arguments17);
$viewHelper19->setRenderingContext($renderingContext);
$viewHelper19->setRenderChildrenClosure($renderChildrenClosure18);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper

$output16 .= $viewHelper19->initializeArgumentsAndRender();

$output16 .= '

This template displays a NEW form for the current domain object.

If you modify this template, do not forget to change the overwrite settings
in /Configuration/ExtensionBuilder/settings.yaml:
  Resources:
    Private:
      Templates:
        New.html: keep

Otherwise your changes will be overwritten the next time you save the extension in the extension builder

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments20 = array();
$arguments20['name'] = 'main';
$renderChildrenClosure21 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output22 = '';

$output22 .= '
<h1>New Blog</h1>

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FlashMessagesViewHelper
$arguments23 = array();
$arguments23['additionalAttributes'] = NULL;
$arguments23['data'] = NULL;
$arguments23['renderMode'] = NULL;
$arguments23['as'] = NULL;
$arguments23['class'] = NULL;
$arguments23['dir'] = NULL;
$arguments23['id'] = NULL;
$arguments23['lang'] = NULL;
$arguments23['style'] = NULL;
$arguments23['title'] = NULL;
$arguments23['accesskey'] = NULL;
$arguments23['tabindex'] = NULL;
$arguments23['onclick'] = NULL;
$arguments23['queueIdentifier'] = NULL;
$renderChildrenClosure24 = function() {return NULL;};
$viewHelper25 = $self->getViewHelper('$viewHelper25', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\FlashMessagesViewHelper');
$viewHelper25->setArguments($arguments23);
$viewHelper25->setRenderingContext($renderingContext);
$viewHelper25->setRenderChildrenClosure($renderChildrenClosure24);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FlashMessagesViewHelper

$output22 .= $viewHelper25->initializeArgumentsAndRender();

$output22 .= '

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments26 = array();
$arguments26['partial'] = 'FormErrors';
// Rendering Array
$array27 = array();
$array27['object'] = $currentVariableContainer->getOrNull('Blog');
$arguments26['arguments'] = $array27;
$arguments26['section'] = NULL;
$arguments26['optional'] = false;
$renderChildrenClosure28 = function() {return NULL;};

$output22 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments26, $renderChildrenClosure28, $renderingContext);

$output22 .= '
    <section id="contact">
        <div class="section-content">
            <h1 class="section-header">Get in <span class="content-header wow fadeIn " data-wow-delay="0.2s" data-wow-duration="2s"> Touch with us</span></h1>
            <h3>Lorem Ipsum is simply dummy text of the printing and typesetting industry</h3>
        </div>
        <div class="contact-section">
            <div class="container">
    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper
$arguments29 = array();
$arguments29['action'] = 'create';
$arguments29['enctype'] = 'multipart/form-data';
$arguments29['name'] = 'newBlog';
$arguments29['object'] = $currentVariableContainer->getOrNull('newBlog');
$arguments29['additionalAttributes'] = NULL;
$arguments29['data'] = NULL;
$arguments29['arguments'] = array (
);
$arguments29['controller'] = NULL;
$arguments29['extensionName'] = NULL;
$arguments29['pluginName'] = NULL;
$arguments29['pageUid'] = NULL;
$arguments29['pageType'] = 0;
$arguments29['noCache'] = false;
$arguments29['noCacheHash'] = false;
$arguments29['section'] = '';
$arguments29['format'] = '';
$arguments29['additionalParams'] = array (
);
$arguments29['absolute'] = false;
$arguments29['addQueryString'] = false;
$arguments29['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments29['fieldNamePrefix'] = NULL;
$arguments29['actionUri'] = NULL;
$arguments29['objectName'] = NULL;
$arguments29['hiddenFieldClassName'] = NULL;
$arguments29['addQueryStringMethod'] = '';
$arguments29['method'] = NULL;
$arguments29['onreset'] = NULL;
$arguments29['onsubmit'] = NULL;
$arguments29['class'] = NULL;
$arguments29['dir'] = NULL;
$arguments29['id'] = NULL;
$arguments29['lang'] = NULL;
$arguments29['style'] = NULL;
$arguments29['title'] = NULL;
$arguments29['accesskey'] = NULL;
$arguments29['tabindex'] = NULL;
$arguments29['onclick'] = NULL;
$renderChildrenClosure30 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output31 = '';

$output31 .= '
    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments32 = array();
$arguments32['partial'] = 'Blog/FormFields';
$arguments32['section'] = NULL;
$arguments32['arguments'] = array (
);
$arguments32['optional'] = false;
$renderChildrenClosure33 = function() {return NULL;};

$output31 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments32, $renderChildrenClosure33, $renderingContext);

$output31 .= '
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper
$arguments34 = array();
$arguments34['value'] = 'Create new';
$arguments34['additionalAttributes'] = NULL;
$arguments34['data'] = NULL;
$arguments34['name'] = NULL;
$arguments34['property'] = NULL;
$arguments34['disabled'] = NULL;
$arguments34['class'] = NULL;
$arguments34['dir'] = NULL;
$arguments34['id'] = NULL;
$arguments34['lang'] = NULL;
$arguments34['style'] = NULL;
$arguments34['title'] = NULL;
$arguments34['accesskey'] = NULL;
$arguments34['tabindex'] = NULL;
$arguments34['onclick'] = NULL;
$renderChildrenClosure35 = function() {return NULL;};
$viewHelper36 = $self->getViewHelper('$viewHelper36', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper');
$viewHelper36->setArguments($arguments34);
$viewHelper36->setRenderingContext($renderingContext);
$viewHelper36->setRenderChildrenClosure($renderChildrenClosure35);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper

$output31 .= $viewHelper36->initializeArgumentsAndRender();

$output31 .= '
    ';
return $output31;
};
$viewHelper37 = $self->getViewHelper('$viewHelper37', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper');
$viewHelper37->setArguments($arguments29);
$viewHelper37->setRenderingContext($renderingContext);
$viewHelper37->setRenderChildrenClosure($renderChildrenClosure30);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper

$output22 .= $viewHelper37->initializeArgumentsAndRender();

$output22 .= '
            </div>
    </section>
';
return $output22;
};

$output16 .= '';

$output16 .= '
';


return $output16;
}


}
#1491568559    13796     