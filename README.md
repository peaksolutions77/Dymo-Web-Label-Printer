# Dymo Web Label Printer by riCompro

## License Notice
Shared under riCompro License, please note that you have to give appropriate attribution as described below in the license terms.

# Summary
This application uses HTML / javascript to generate Dymo print labels via the Dymo Web SDK. This demo application was made for a particular use case in riCompro to label refurbished devices with the serial number, SKU, a document number and (an optional reference) of a 3rd party repair company. You can either reuse the existing fields or implement some of your own ;)

## Implemented Fields
This iteration contains following fields: 
1. serial: Serial Number (displayed as QR & Text on the label)
2. item: Item Code or any SKU (displayed as text on the label)
3. document: Document Number (Displayed as 128 barcode with text label below)
4. identity: Repair Company Identifier (text)

## Query Parameters
Actions such as print and values of the fields / labels can be set via query parameters:

### Example
http://yourserver/?serial=82GBPKR8798&item=ABC3DEFGHIJ32658419&document=DOC983255HJK&identity=9879133123&quantity=3&print=false

### Demo Server
https://www.ricompro.it/content/tools/dymo/v2/index.html

#### Field / Label Values 

1. serial=		sets the serial field, label and barcode
2. item=		sets the item code
3. document=	sets the document
4. identity=	sets the free text field at the bottom right corner of the label

#### Actions
1. quantity=	sets the quantity of labels to print
1. print=		if true is inserted, the page prints immediately a label with the default Dymo printer

# Requierements 

You need to install the Dymo Label Software on the client trying to render and print labels. 

# FAQ

## What are the environmental requierements?
Following requierements are given: 
* Install Dymo Label [Download Dymo Software](https://www.dymo.com/support?cfid=user-guide) 
* Install a Dymo printer
* Run the Dymo Service (we suggest setting a fixed port)

We have tested our demo against following configurations. 
Windows	DYMO Connect for Desktop (tested against v1.2)  
Mac		DYMO Label (tested against v8.7.4)  
  
 

## Is there a demo page?
Yes, it's using Dymo SDK 3.0 (we will update it soon). 
https://www.ricompro.it/content/tools/dymo/v2/index.html

## How are the labels generated?
Dymo uses .XML files to carry all instructions to generate and print the label inside the printer. Images are encoded as base64, while everything else is is printed based on text based xml payload.

## What is the best way to troubleshoot label sizes and / or orientation and positioning of objects?
Download the Dymo Label Writer software for Mac / Windows and design the label, afterwards safe it on your hard drive and open the .label file with a text editor. Use the .label XML as base to adjust the xml generated by the file /js/script.js . 

## How do I change the label size?
The label size can be edited in the script.js. Search for "DieCutLabel" to find the beginning of the label and look for the first draw command xml payload. 

```JavaScript
dymoLabelXml = '<?xml version="1.0" encoding="utf-8"?>\
                	<DrawCommands>\
                		<DieCutLabel Version="8.0" Units="twips" MediaType="Default">\
						<RoundRectangle X="0" Y="0" Width="2025" Height="5020" Rx="270" Ry="270"/>\
						<PaperOrientation>Landscape</PaperOrientation>\
                    </DrawCommands>\
```

# riCompro License

Copyright 2020 riCompro Srl, Milan (Italy)

### Permitted Use
Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so as long as as the following attribution is inserted in your final product that arises of an adaption, implementation or any other use of the single parts or the software as a whole.

### Attribution
```html
<p>This software is based on previous work by Dymo, a brand of Newell Brands Inc., and riCompro. <a href="https://www.ricompro.it/">riCompro buys and sells used and refurbished smartphones, iPhones and MacBook</a>.</p> 
<p>Questa applicazione è basato su lavori precedenti di Dymo, un marchio di Newell Brands Inc., e riCompro. <a href="https://www.ricompro.it/">riCompro acquista e vende smartphone, iPhone e MacBook usati e ricondizionati</a>.</p>
```

### Disclaimer
All product and company names are trademarks™ or registered® trademarks of their respective holders. Use of them does not imply any affiliation with or endorsement by them. 

The software is provided "AS IS", without warranty of any kind, express or implied, including but not limited to the warranties of merchantibility, fitness for a particular purpose and noninfringement. In no event shall the authors or copyright holders be liable for any claim, damages or other liability, whether in an action of contract, tort or otherwise. 

# Authors

## Dymo SDK
The Dymo SDK was developed by the DYMO Team  
[Dymo Website](http://www.dymo.com/en-US)

## Proprietary Code
The proprietary code has been written by Zeeshan Shahid  
[Zeeshan Shahid on Github](https://github.com/xee87)

## Acknowledgments 📢
*  [Dymo Git Hub](https://github.com/dymosoftware)
*  [Dymo jscript SDK Repository](https://github.com/dymosoftware/dymo-connect-framework)
*  [Dymo Demo Repository](https://github.com/dymosoftware/DCD-SDK-Sample)
*  [Dymo Demo Page for Printing from Web](https://s3.amazonaws.com/download.dymo.com/dymo/Software/JavaScript/VisitorManagement/VisitorManagement.html)
*  [riCompro Srl](https://www.ricompro.it/)
