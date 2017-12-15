<?php
include_once("./Services/UIComponent/classes/class.ilUIHookPluginGUI.php");
include_once('class.ilLoadOverlayFilePlugin.php');

class ilLoadOverLayFileUIHookGUI extends ilUIHookPluginGUI
{
    /**
     * Get html for a user interface area
     *
     * @param
     * @param
     * @param array
     * @return array
     */
    function getHTML($a_comp, $a_part, $a_par = array())
    {
        if ($a_par["tpl_id"] === "Services/MainMenu/tpl.main_menu.html" && $a_part == "template_get") {
           require_once "./Services/UIComponent/Overlay/classes/class.ilOverlayGUI.php";
            ilOverlayGUI::initJavascript();
        }
        return array("mode" => ilUIHookPluginGUI::KEEP, "html" => "");
    }
}
?>
