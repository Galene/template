<?php

// Ensure this file is being included by a parent file
defined('_JEXEC') or die( 'Restricted access' );

class JFormFieldmenuitems extends JFormField {
    protected $type = 'menuitems';
    
    function createMenuList(){
        // build the html select list
        $options = JHTML::_('menu.linkoptions');
        $result  = JHTML::_('select.genericlist', $options, 'xml_s5_hide_component_items', 'class="inputbox" size="15" multiple="multiple"', 'value', 'text', $this->value);
        return $result;
	}
    function getInput() {
      //return JFormFieldmenuitems::createMenuList();
		
		$db =& JFactory::getDBO();
 
        // get a list of the menu items
        $query = 'SELECT m.id, m.parent_id as parent, m.title as name, m.menutype'
        . ' FROM #__menu AS m'
        . ' WHERE m.published = 1'
        . ' ORDER BY m.menutype, m.parent_id, m.ordering'
        ;
        $db->setQuery( $query );
        $mitems = $db->loadObjectList();
        $mitems_temp = $mitems;
 
        // establish the hierarchy of the menu
        $children = array();
        // first pass - collect children
        foreach ( $mitems as $v )
        {
                $id = $v->id;
                $pt = $v->parent;
                $list = @$children[$pt] ? $children[$pt] : array();
                array_push( $list, $v );
                $children[$pt] = $list;
        }
        // second pass - get an indent list of the items
        $list = JHTMLMenu::TreeRecurse( intval( $mitems[0]->parent ), '', array(), $children, 9999, 0, 0 );
	 
        // Code that adds menu name to Display of Page(s)
        $mitems_spacer  = $mitems_temp[0]->menutype;
 
        $mitems = array();
        if ($all | $unassigned) {
                $mitems[] = JHTML::_('select.option',  '<OPTGROUP>', JText::_( 'Menus' ) );
 
                if ( $all ) {
                        $mitems[] = JHTML::_('select.option',  0, JText::_( 'All' ) );
                }
                if ( $unassigned ) {
                        $mitems[] = JHTML::_('select.option',  -1, JText::_( 'Unassigned' ) );
                }
 
                $mitems[] = JHTML::_('select.option',  '</OPTGROUP>' );
        }
 
        $lastMenuType   = null;
        $tmpMenuType    = null;
        foreach ($list as $list_a)
        {
                if ($list_a->menutype != $lastMenuType)
                {
                        if ($tmpMenuType) {
                                $mitems[] = JHTML::_('select.option',  '</OPTGROUP>' );
                        }
                        $mitems[] = JHTML::_('select.option',  '<OPTGROUP>', $list_a->menutype );
                        $lastMenuType = $list_a->menutype;
                        $tmpMenuType  = $list_a->menutype;
                }
 
                $mitems[] = JHTML::_('select.option',  $list_a->id, $list_a->treename.$list_a->name );
        }
        if ($lastMenuType !== null) {
                $mitems[] = JHTML::_('select.option',  '</OPTGROUP>' );
        }
 
        $result  = JHTML::_('select.genericlist', $mitems, $this->name.'[]', 'class="inputbox" size="15" multiple="multiple"', 'value', 'text', $this->value);
        return $result;
    }
}