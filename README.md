👋 [Available on iTop Hub!](https://store.itophub.io/en_US/products/molkobain-console-tooltips)

# iTop extension: molkobain-console-tooltips

### Description
Display next to a field (console only), a question mark which pops-up the field description when it exists.

As part of the datamodel, a dictionnary entry (``'Class:<CLASS_NAME>/Attribute:<ATTRIBUTE_CODE>+' => 'Some description about the attribute'``) can be set on any field, to provide a long description to explain the usage of a particular field. This description can be more explicit to explain the meaning and expected usage of the field.

As part of the standard datamodel, only few fields have such description documented, especially because it is specific to the way an organization uses iTop. But with this extension, it's a good opportunity to enrich your dictionnary with business tooltips for online guidance to your users.

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
The extension has 2 configuration parameters:
  * decoration_class: Change tooltip icon by setting any *Font Awesome 5* icon classes (see [here](https://fontawesome.com/icons?d=gallery&m=free)  for examples). Default is ``fas fa-question``.
  * enabled: Enable or disable extension. Possible values are true|false, default is true.

### Licensing
This extension is under [MIT license](https://en.wikipedia.org/wiki/MIT_License).

### Third party libs
This extension embeds the Font Awesome 5.0.6 library. For more information visit its [website](https://fontawesome.com).
