<?php

if((int)substr(str_replace('.', '', VERSION).'0', 0, 4) >= 2300) {
    class ControllerExtensionModuleFilterVierUrlChc extends Controller {}
}
else {
    class ControllerModuleFilterVierUrlChc extends Controller {}
}
