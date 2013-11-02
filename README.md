
TODO     
====       
* Save New Activation State to app/etc/modules/zzz_module_manager.xml    
* Handle orphaned attribute models in eav_attribute and orphaned increment models in eav_entity_type    
* Add option to hide core modules    

What exists?   
============    
* Module model and collection, gathers info ftom app/etc/modules/* files and core_resource table, without relying on Magento's config parsing and merging   
* Adminhtml grid view of modules   
* Module View Page   
* Module versions are settable for core_resource table   

Where?   
======   
Adminhtml, System > Tools > Manage Modules  

So, basically the information is there, now the main work is building the UI.  

