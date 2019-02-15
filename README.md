# Magento 2 Backend Reindex Free Extension 

[Backend Reindex](https://www.mageplaza.com/magento-2-backend-reindex/) by Mageplaza allows store admins to update individual or all indexes manually right from the admin backend easily instead of running command line. 


## 1. Documentation

- [Installation guide](https://www.mageplaza.com/install-magento-2-extension/)
- [User guide](https://docs.mageplaza.com/backend-reindex/index.html)
- [Introduction page](http://www.mageplaza.com/magento-2-backend-reindex/)
- [Contribute on Github](https://github.com/mageplaza/magento-2-backend-reindex)
- [Get Support](https://github.com/mageplaza/magento-2-backend-reindex/issues)

## 2. FAQ

**Q: I got error: Mageplaza_Core has been already defined**

A: Read solution: https://github.com/mageplaza/module-core/issues/3

**Q: How can I select some indexers to reindex?**

A: You just need to click to select each reindex, then click on Submit to reindex them.  

**Q: How can I select all indexers?**

A: Yes, you can reindex all easily, select Mass Action box, click Select All then click Submit. 

**Q: I am a store owner. Our store has many admins. How can I set access ability to reindex action for specific accounts only?**

A: Please go to `System > User Roles > Add new role > Select index management`, save then select admin account to allow access. 

## 3. How to install Backend Reindex extension for Magento 2

Install via composer (recommend)

Run the following command in Magento 2 root folder:

```
composer require mageplaza/module-backend-reindex
php bin/magento setup:upgrade
php bin/magento setup:static-content:deploy
```

## 4. Highlight Features 

### Reindex data within Magento admin 

The extension allows store owners to choose the indexers easily and reindex them when there are any updates on the data from Index Management section from the admin backend easily. 

For example, some typical indexers are: 
- Customer Grid: Rebuild Customer grid index
- Category Products: Indexed category/products association
- Product Categories: 	Indexed product/categories association
- Product Price: Index product prices
- Stock: Index stock

![Imgur](https://i.imgur.com/OY7MSLA.png)

### Reindex all in one click 

Reindex Data allows store owners to submit data which needs to be reindexed in just one click. From the admin backend, it is easy to select all or deselect all the indexes and do actions quickly.  

This is time-saving for store owners in case there are updates on all the data of stores. Instead of running command line with unfamiliar codes, any store admins can reindex data easily from the backend.

![Imgur](https://i.imgur.com/iobo0Sj.png)

### Reindex notification

The notification will appear right after any indexers have been updated.  The notification will inform store admins to know that the indexer has been rebuilt successfully. 

When the number of indexers which are reindexed is more than one, there will be a notification about the total of successful updates. Store admins can make sure that their actions are done and check the frontend performance for the final result. 

![Imgur](https://i.imgur.com/aLjxtu2.png)


### Access restriction 

Store data is extremely important, so store owners may wish that the access to reindex data can be restricted by admin role. 
This can be done easily from the setting index management with specific admin role. 

As a result, store owners can control which admin accounts are allowed to access reindex action in the backend. 

![Imgur](https://i.imgur.com/1O7GLaj.png)

## 5. Full Features List

- Enable/ Disable backend reindex 
- Reindex data from the admin backend
- Partly reindex or reindex all the indexes
- Notification after finishing reindex
- Allow accessing ability by admin role 

 
## 6. User Guide

### 6.1. Configuration Section

From the admin backend, go to `System > Index Management` 

![Imgur](https://i.imgur.com/IWBgPPC.png)

### Reindex one indexer:

At the **Action** box, click on **Reindex Data** to reindex each indexer separately. 

![Imgur](https://i.imgur.com/hvRRinh.png)


### Reindex some indexers:

  - Click to select the indexers you need to reindex
  - Select **Reindex Data** 
  - Click **Submit** 

 ![Imgur](https://i.imgur.com/0j4q32o.png)

### Reindex all the indexers

- Click on **Mass Actions** box, choose **Select All** 
- Select **Reindex Data** 
- Click **Submit** 

![Imgur](https://i.imgur.com/fUn2aV0.png)

### 6.2. User roles with reindex

#### Step 1: Go to `Admin > System > User role`

![Imgur](https://i.imgur.com/Ch0qBSS.png)
 
#### Step 2: Add a new role resource

Fill in role information at **Role Information** section

![Imgur](https://i.imgur.com/3H9By5B.png)

Select index management role at **Role Resources** section, then click on **Save Role** 

![Imgur](https://i.imgur.com/3aIoSyz.png)

#### Step 3: Set role users for admin accounts, then click on Save Role to finish. 

![Imgur](https://i.imgur.com/hveeS2l.png)
