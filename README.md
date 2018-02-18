# iTop extension: molkobain-console-tooltips

### Description
Display a tooltip on object's attributes (console only). A ``?`` is added next to the attribute's label to indicate that a description is available for an attribute.

Works with all objects (standard / from extensions / custom made), but only attributes for which a description exists will be affected. Description comes from iTop's dictionary entry ``'Class:<CLASS_NAME>/Attribute:<ATTRIBUTE_CODE>+' => 'Some description about the attribute'``.

*Note: By default iTop has not much descriptions, if you want to add some, you have to add dictionary entries.*

![Description decoration](https://raw.githubusercontent.com/Molkobain/itop-console-tooltips/master/docs/mct-object-01.PNG)
![Description tooltip](https://raw.githubusercontent.com/Molkobain/itop-console-tooltips/master/docs/mct-object-02.PNG)

### Compatibility
Compatible with iTop 2.3+

### Installation
* Unzip the extension
* Copy the ``dist/molkobain-console-tooltip`` folder under ``<PATH_TO_ITOP>/extensions`` folder of your iTop
* Run iTop setup & select extension *Console: Tooltips on object's properties*

*Your folders should look like this*

![Extensions folder](https://raw.githubusercontent.com/Molkobain/itop-console-tooltips/master/docs/mct-install.PNG)

### Configuration
#### Parameters
The extension has to configuration parameters:
  * decoration_class: Change tooltip icon by setting any *Font Awesome 5* icon classes (see [here](https://fontawesome.com/icons?d=gallery&m=free)  for examples). Default is ``fas fa-question``.
  * enabled: Enable or disable extension. Possible values are true|false, default is true.

### Licensing
This extension is under [MIT license](https://en.wikipedia.org/wiki/MIT_License).

### Third party libs
This extension embeds the Font Awesome 5.0.6 library. For more information visit its [website](https://fontawesome.com).
