<?php
/**
 * @package Newscoop
 * @copyright 2011 Sourcefabric o.p.s.
 * @license http://www.gnu.org/licenses/gpl-3.0.txt
 */

/**
 * Subscription form
 */
class Admin_Form_Subscription extends Zend_Form
{
    /** @var array */
    private $languages = array();

    /** @var array */
    private $publications = array();

    /**
     * @param array $options
     */
    public function __construct(array $options)
    {
        $this->languages = (array) $options['languages'];
        $this->publications = (array) $options['publications'];

        parent::__construct();
    }

    public function init()
    {
        $this->addElement('select', 'publication', array(
            'label' => getGS('Publication'),
            'required' => true,
            'multioptions' => $this->publications,
        ));

        if (!empty($this->languages)) {
            $this->addElement('select', 'language-set', array(
                'label' => getGS('Language'),
                'multioptions' => array(
                    'select' => getGS('Individual languages'),
                    'all' => getGS('Regardless of the language'),
                ),
            ));

            $this->addElement('multiselect', 'languages', array(
                'multioptions' => $this->languages,
            ));
        } else {
            $this->addElement('hidden', 'language-set', array(
                'value' => 'all',
            ));
        }

        $this->addElement('select', 'sections', array(
            'label' => getGS('Sections'),
            'multioptions' => array(
                'Y' => getGS('Add sections now'),
                'N' => getGS('Add sections later'),
            ),
        ));

        $this->addElement('text', 'start', array(
            'label' => getGS('Start'),
            'required' => true,
            'class' => 'date',
        ));

        $this->addElement('select', 'type', array(
            'label' => getGS('Subscription Type'),
            'multioptions' => array(
                'PN' => getGS('Paid (confirm payment now)'),
                'PL' => getGS('Paid (payment will be confirmed later)'),
                'T' => getGS('Trial'),
            ),
        ));

        $this->addElement('text', 'days', array(
            'label' => getGS('Days'),
            'required' => true,
            'validators' => array(
                array('greaterThan', false, array(0)),
            ),
        ));

        $this->addElement('checkbox', 'active', array(
            'label' => getGS('Active'),
            'value' => 1,
        ));
    
        $this->addElement('submit', 'submit', array(
            'label' => getGS('Add'),
        ));
    }
}

