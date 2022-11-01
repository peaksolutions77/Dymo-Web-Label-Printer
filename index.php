
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <title>Preview and Print Dymo Labels</title>
    <link href="https://cdn11.bigcommerce.com/s-7a72dboqi9/product_images/favicon.png?t=1539057036" rel="shortcut icon">
    <link rel="stylesheet" type="text/css" href="assets/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="assets/font-awesome.min.css"/>
    <link rel="stylesheet" type="text/css" href="assets/PreviewAndPrintLabel.css"/>
    <link rel="stylesheet" type="text/css" href="assets/dymo-labels.css"/>

    <script src="js/jquery-3.6.1.min.js"></script>
    <script src="js/dymo.connect.framework.js" type="text/javascript" charset="UTF-8"></script>
    <!--<script src="js/PreviewAndPrintLabel.js" type="text/javascript" charset="UTF-8"></script>-->
    <script src="js/script.js" type="text/javascript" charset="UTF-8"></script>
</head>

<body>
<nav class="navbar navbar-light bg-light">
    <a class="navbar-brand" href="https://www.ricompro.it/">
        <img src="assets/ricomprologooutlines.svg" width="150" height="30" class="d-inline-block align-top" alt="riCompro Logo">
    </a>
    <nav class="my-2 my-md-0 mr-md-3">
        <a class="p-2 text-darkcheckEnvironment" href="#">Check Environment</a>
        <a class="p-2 text-dark" target="_blank" href="https://github.com/riCompro/Dymo-Web-Label-Printer">Github</a>
        <a class="p-2 text-dark" target="_blank" href="https://github.com/riCompro/Dymo-Web-Label-Printer/blob/master/ricomprolicense.md">License</a>
    </nav>
</nav>        <div class="container">

    <div style="margin-top:5%" class="row">
        <div class="col text-center">
            <h1>Preview & Print Dymo Labels</h1>

            <div class="environment">

            </div>
        </div>

    </div>

    <div class="row">
        <div class="col-4">
            <div class="input-control-group">
                <div style="display: none" id="labelFileSelection">
                    <label for="labelFile">Select label file: </label>
                    <input type="file" id="labelFile" name="labelFile"/>
                </div>
                <div style="display: none" id="addressDiv">
                    <label for="addressTextArea">Current address:</label><br/>
                    <textarea name="addressTextArea" id="addressTextArea" rows='5' cols='40'></textarea>
                </div>
                <div id="serialNumberDiv">
                    <label>
                        Serial Number:
                    </label><br>
                    <input class="serialNumberText" type="text"
                           value="<?php echo isset($_REQUEST['serial']) ? $_REQUEST['serial'] : '' ?>" name="serialNumberText">
                    <input type="hidden" class="isPrint"
                           value="<?php echo isset($_REQUEST['print']) ? $_REQUEST['print'] : '' ?>"/>
                </div>
                <div id="itemCodeDiv">
                    <label>
                        Item Code:
                    </label><br>
                    <input type="text" value="<?php echo isset($_REQUEST['item']) ? $_REQUEST['item'] : '' ?>"
                           class="itemCodeText" name="itemCodeText">
                </div>
                <div id="documentNumberDiv">
                    <label>
                        Document Number:
                    </label><br>
                    <input class="documentNumberText" type="text"
                           value="<?php echo isset($_REQUEST['document']) ? $_REQUEST['document'] : '' ?>"
                           name="documentNumberText">
                </div>
                <div id="repairCompanyDiv">
                    <label>
                        Repair Company Identifier:
                    </label><br>
                    <input type="text" class="repairCompanyText" value="<?php echo isset($_REQUEST['identity']) ? $_REQUEST['identity'] : '' ?>" name="repairCompanyText">
                </div>

            </div>
        </div>
        <div style="max-width: 65.666667%" class="col-8">
            <div class="label-preview-container">
                <div class="row heading-bg-color">
                    <div class="col">
                        Preview
                    </div>
                </div>

                <div class="row label-preview-content">

                    <div class="col-8">
                        <div id="labelImageDiv">
                            <img id="labelImage" src="" alt="label preview"/>
                        </div>
                    </div>

                    <div class="col-4">
                        <div id="printersDiv">
                            <label for="printersSelect">Printer:</label>
                            <select id="printersSelect">
                            </select>
                        </div>
                        <div id="quanityDiv">
                            <label for="quantity">Quantity:</label>
                            <input type="number"
                                   value="1"
                                   id="quantity"
                                   name="qty" class="quantity"/>
                        </div>
                    </div>

                </div>

                <div class="row label-preview-content bottom-left-right-radius">
                    <div class="col">
                        <div id="previewDiv">
                            <button type="button" class="btn btn-secondary btn-lg" id="previewButton">
                                <!--<i class="fa fa-download"></i>--> Download
                            </button>
                        </div>
                    </div>
                    <div class="col">
                        <div id="printDiv">
                            <button type="button" class="btn btn-secondary btn-lg" id="printButton">
                                <!--<i class="fa fa-print"></i>--> Print
                            </button>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>

</div>
</div>
<br>
<div class="container">
    <p>This software is based on previous work by Dymo, a brand of Newell Brands Inc., and riCompro. <a href="https://www.ricompro.it/">riCompro buys and sells used and refurbished smartphones, iPhones and MacBook</a>.</p>
    <p>Questa applicazione è basato su lavori precedenti di Dymo, un marchio di Newell Brands Inc., e riCompro. <a href="https://www.ricompro.it/">riCompro acquista e vende smartphone, iPhone e MacBook usati e ricondizionati</a>.</p>
</div>
</body>

</html>