# M2Commerce Commerce: Magento 2 Size Chart

## Overview
This extension allows to you to add product specific size charts in your catalog and which will reflect on product detail page
on you store. Feature allows you to add html content or images link to show the size chart.

## Installation
### Magento® Marketplace

This extension will also be available on the Magento® Marketplace when approved.

1. Go to Magento® 2 root folder
2. Require/Download this extension:

   Enter following commands to install extension.

   ```
   composer require m2commerce/size-chart
   ```

   Wait while composer is updated.

   #### OR

   You can also download code from this repo under Magento® 2 following directory:

    ```
    app/code/M2Commerce/SizeChart
    ```    

3. Enter following commands to enable the module:

   ```
   php bin/magento module:enable M2Commerce_SizeChart
   php bin/magento setup:upgrade
   php bin/magento setup:di:compile
   php bin/magento cache:clean
   php bin/magento cache:flush
   ```

4. If Magento® is running in production mode, deploy static content:

   ```
   php bin/magento setup:static-content:deploy
   ```
