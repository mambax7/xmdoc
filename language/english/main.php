<?php
/*
 You may not change or alter any portion of this comment or credits
 of supporting developers from this source code or any supporting source code
 which is considered copyrighted (c) material of the original comment or credit authors.

 This program is distributed in the hope that it will be useful,
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
*/

/**
 * xmdoc module
 *
 * @copyright       XOOPS Project (https://xoops.org)
 * @license         GNU GPL 2 (http://www.gnu.org/licenses/old-licenses/gpl-2.0.html)
 * @author          Mage Gregory (AKA Mage)
 */

// Button
define('_MA_XMDOC_CATEGORY_ADD', 'Add category');
define('_MA_XMDOC_CATEGORY_LIST', 'Category list');
define('_MA_XMDOC_DOCUMENT_ADD', 'Add document');
define('_MA_XMDOC_DOCUMENT_LIST', 'Document list');

// Error message
define('_MA_XMDOC_ERROR_NOACESSCATEGORY', 'You don\'t have access to any categories');
define('_MA_XMDOC_ERROR_NOCATEGORY', 'There are no categories in the database');
define('_MA_XMDOC_ERROR_NODOCUMENT', 'There are no documents in the database');
define('_MA_XMDOC_ERROR_PERMISSION', 'To use permissions, you must create categories.');
define('_MA_XMDOC_ERROR_WEIGHT', 'Weight must be a number');

// Shared
define('_MA_XMDOC_ADD', 'Add');
define('_MA_XMDOC_ACTION', 'Action');
define('_MA_XMDOC_DEL', 'Delete');
define('_MA_XMDOC_EDIT', 'Edit');
define('_MA_XMDOC_REDIRECT_SAVE', 'Successfully saved');
define('_MA_XMDOC_SEARCH', 'Search document');
define('_MA_XMDOC_STATUS', 'Status');
define('_MA_XMDOC_STATUS_A', 'Active');
define('_MA_XMDOC_STATUS_NA', 'Disabled');
define('_MA_XMDOC_VIEW', 'View');

// Category
define('_MA_XMDOC_CATEGORY_DESC', 'Description');
define('_MA_XMDOC_CATEGORY_FORMPATH', 'Files are in: %s');
define('_MA_XMDOC_CATEGORY_LIMITDOWNLOAD', 'Number of downloads in 24 hours<br><small>Number of download for each user in 24 hours. Select 0 for unlimited.</small>');
define('_MA_XMDOC_CATEGORY_LIMITITEM', 'Number of downloads for each file in 24 hours<br><small>Number of downloads for each file in 24 hours by each user. Select 0 for unlimited.</small>');
define('_MA_XMDOC_CATEGORY_LOGO', 'Logo');
define('_MA_XMDOC_CATEGORY_LOGOFILE', 'Logo file');
define('_MA_XMDOC_CATEGORY_EXTENSION', 'Extensions allowed');
define('_MA_XMDOC_CATEGORY_NAME', 'Name');
define('_MA_XMDOC_CATEGORY_RENAME', 'Rename documents uploaded?<br><small>If the option is no and you uploaded a file with a name that already exists on the server, it will be overwritten</small>');
define('_MA_XMDOC_CATEGORY_SIZE', 'Maximum upload size');
define('_MA_XMDOC_CATEGORY_SUREDEL', 'Sure to delete this category? %s');
define('_MA_XMDOC_CATEGORY_UNIT', '[kB]');
define('_MA_XMDOC_CATEGORY_UPLOAD', 'Upload');
define('_MA_XMDOC_CATEGORY_UPLOADSIZE', 'Maximum size: %s kB');
define('_MA_XMDOC_CATEGORY_WARNINGDELARTICLE', '<strong>Warning, the following items will also be removed!</strong>');
define('_MA_XMDOC_CATEGORY_WEIGHT', 'Weight');

// document
define('_MA_XMDOC_DOCUMENT_CATEGORY', 'In category');
define('_MA_XMDOC_DOCUMENT_DATEUPDATE', 'Update the creation date');
define('_MA_XMDOC_DOCUMENT_DESC', 'Description');
define('_MA_XMDOC_DOCUMENT_DOCUMENT', 'File to attach');
define('_MA_XMDOC_DOCUMENT_DOCUMENTURL', 'Document URL');
define('_MA_XMDOC_DOCUMENT_FORMPATH', 'Files are in: %s');
define('_MA_XMDOC_DOCUMENT_LOGO', 'Logo');
define('_MA_XMDOC_DOCUMENT_LOGOFILE', 'Logo file');
define('_MA_XMDOC_DOCUMENT_MDATEUPDATE', 'Update the modification date');
define('_MA_XMDOC_DOCUMENT_NAME', 'Name');
define('_MA_XMDOC_DOCUMENT_RESETMDATE', 'Reset (empty date)');
define('_MA_XMDOC_DOCUMENT_SHOWINFO', 'View file information');
define('_MA_XMDOC_DOCUMENT_SUREDEL', 'Sure to delete this document? %s');
define('_MA_XMDOC_DOCUMENT_UPLOAD', 'Upload');
define('_MA_XMDOC_DOCUMENT_UPLOADSIZE', 'Maximum size: %s kB');
define('_MA_XMDOC_DOCUMENT_USERID', 'Author');
define('_MA_XMDOC_DOCUMENT_WEIGHT', 'Weight');

// permission
define('_MA_XMDOC_PERMISSION_VIEW', 'View Permissions');
define('_MA_XMDOC_PERMISSION_VIEW_DSC', 'Select groups that can view an article in categories');
define('_MA_XMDOC_PERMISSION_VIEW_THIS', 'Select groups that can view in this category');
define('_MA_XMDOC_PERMISSION_SUBMIT', 'Submit permission');
define('_MA_XMDOC_PERMISSION_SUBMIT_DSC', 'Select groups that can submit an article in categories');
define('_MA_XMDOC_PERMISSION_SUBMIT_THIS', 'Select groups that can submit in this category');

// utility
define('_MA_XMDOC_UTILITY_BYTES', "Bytes");
define('_MA_XMDOC_UTILITY_KBYTES', "kB");
define('_MA_XMDOC_UTILITY_MBYTES', "MB");
define('_MA_XMDOC_UTILITY_GBYTES', "GB");

// formDoc
define('_MA_XMDOC_FORMDOC_ADD', 'Add documents');
define('_MA_XMDOC_FORMDOC_AUTHOR', 'Author');
define('_MA_XMDOC_FORMDOC_DATE', 'Creation date');
define('_MA_XMDOC_FORMDOC_DOWNLOAD', 'Downloads');
define('_MA_XMDOC_FORMDOC_MDATE', 'Modification date');
define('_MA_XMDOC_FORMDOC_NAME', 'Document management');
define('_MA_XMDOC_FORMDOC_REMOVE', 'Remove documents');
define('_MA_XMDOC_FORMDOC_LISTDOCUMENT', 'List of documents');
define('_MA_XMDOC_FORMDOC_RATING', 'Rating');
define('_MA_XMDOC_FORMDOC_RESETSELECTED', 'Reset documents selected');
define('_MA_XMDOC_FORMDOC_SELECT', 'Select');
define('_MA_XMDOC_FORMDOC_SELECTED', 'Documents selected');
define('_MA_XMDOC_FORMDOC_VOTES', '(%s Votes)');

// viewdoc
define('_MA_XMDOC_DOWNLOAD', 'Download');
