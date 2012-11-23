<?php
/* +***********************************************************************************
 * The contents of this file are subject to the vtiger CRM Public License Version 1.0
 * ("License"); You may not use this file except in compliance with the License
 * The Original Code is:  vtiger CRM Open Source
 * The Initial Developer of the Original Code is vtiger.
 * Portions created by vtiger are Copyright (C) vtiger.
 * All Rights Reserved.
 * *********************************************************************************** */

class Reports_Folder_Model extends Vtiger_Base_Model {

	/**
	 * Function to get the id of the folder
	 * @return <Number>
	 */
	function getId() {
		return $this->get('folderid');
	}

	/**
	 * Function to set the if for the folder
	 * @param <Number>
	 */
	function setId($value) {
		$this->set('folderid', $value);
	}

	/**
	 * Function to get the name of the folder
	 * @return <String>
	 */
	function getName() {
		return $this->get('foldername');
	}

	/**
	 * Function returns the instance of Folder model
	 * @return <Reports_Folder_Model>
	 */
	public static function getInstance() {
		return new self();
	}

	/**
	 * Function saves the folder
	 */
	function save() {
		$db = PearDatabase::getInstance();

		$folderId = $this->getId();
		if(!empty($folderId)) {
			$db->pquery('UPDATE vtiger_reportfolder SET foldername = ?, description = ? WHERE folderid = ?',
					array($this->getName(), $this->getDescription(), $folderId));
		} else {
			$result = $db->pquery('SELECT MAX(folderid) AS folderid FROM vtiger_reportfolder', array());
			$folderId = (int) ($db->query_result($result, 0, 'folderid')) + 1;

			$db->pquery('INSERT INTO vtiger_reportfolder(folderid, foldername, description, state) VALUES(?, ?, ?, ?)', array($folderId, $this->getName(), $this->getDescription(), 'CUSTOMIZED'));
			$this->set('folderid', $folderId);
		}
	}

	/**
	 * Function deletes the folder
	 */
	function delete() {
		$db = PearDatabase::getInstance();
		$db->pquery('DELETE FROM vtiger_reportfolder WHERE folderid = ?', array($this->getId()));
	}

	/**
	 * Function returns Report Models for the folder
	 * @param <Vtiger_Paging_Model> $pagingModel
	 * @return <Reports_Record_Model>
	 */
	function getReports($pagingModel) {
		$paramsList = array(
						'startIndex'=>$pagingModel->getStartIndex(),
						'pageLimit'=>$pagingModel->getPageLimit(),
						'orderBy'=>$this->get('orderby'),
						'sortBy'=>$this->get('sortby'));

		$reportClassInstance = Vtiger_Module_Model::getClassInstance('Reports');
		$reportsList = $reportClassInstance->sgetRptsforFldr($this->getId(), $paramsList);
		$rows = count($reportsList);

		$reportModuleModel = Vtiger_Module_Model::getInstance('Reports');
		$reportModels = array();

		for($i=0; $i<$rows; $i++) {
			$reportModel = new Reports_Record_Model();
			
			$reportModel->setData($reportsList[$i])->setModuleFromInstance($reportModuleModel);
			$reportModels[] = $reportModel;
			unset($reportModel);
		}
		return $reportModels;
	}

	/**
	 * Function to get the description of the folder
	 * @return <String>
	 */
	function getDescription() {
		return $this->get('description');
	}

	/**
	 * Function to get the url for edit folder from list view of the module
	 * @return <string> - url
	 */
	function getEditUrl() {
		return 'index.php?module=Reports&view=EditFolder&folderid='.$this->getId();
	}

	/**
	 * Function to get the url for delete folder from list view of the module
	 * @return <string> - url
	 */
	function getDeleteUrl() {
		return 'index.php?module=Reports&action=Folder&mode=delete&folderid='.$this->getId();
	}

	/**
	 * Function returns the instance of Folder model
	 * @param FolderId
	 * @return <Reports_Folder_Model>
	 */
	public static function getInstanceById($folderId) {
		$db = PearDatabase::getInstance();
		$folderModel = Reports_Folder_Model::getInstance();

		$result = $db->pquery("SELECT * FROM vtiger_reportfolder WHERE folderid = ?", array($folderId));

		if ($db->num_rows($result) > 0) {
			$values = $db->query_result_rowdata($result, 0);
			$folderModel->setData($values);
		}
		return $folderModel;
	}

	/**
	 * Function returns duplicate record status of the module
	 * @return true if duplicate records exists else false
	 */
	function checkDuplicate() {
		$db = PearDatabase::getInstance();

		$query = 'SELECT 1 FROM vtiger_reportfolder WHERE foldername = ?';
		$params = array($this->getName());

		$folderId = $this->getId();
		if ($folderId) {
			$query .= ' AND folderid != ?';
			array_push($params, $folderId);
		}

		$result = $db->pquery($query, $params);

		if ($db->num_rows($result) > 0) {
			return true;
		}
		return false;
	}

	/**
	 * Function returns whether reports are exist or not in this folder
	 * @return true if exists else false
	 */
	function hasReports() {
		$db = PearDatabase::getInstance();

		$result = $db->pquery('SELECT 1 FROM vtiger_report WHERE folderid = ?', array($this->getId()));

		if ($db->num_rows($result) > 0) {
			return true;
		}
		return false;
	}

	/**
	 * Function returns whether folder is Default or not
	 * @return true if it is read only else false
	 */
	function isDefault() {
		$db = PearDatabase::getInstance();

		$result = $db->pquery("SELECT 1 FROM vtiger_reportfolder WHERE state = 'SAVED' AND folderid = ?", array($this->getId()));

		if ($db->num_rows($result) > 0) {
			return true;
		}
		return false;
	}
	
	/**
	 * Function to get info array while saving a folder
	 * @return Array  info array
	 */
	public function getInfoArray() {
		return array('folderId' => $this->getId(),
			'folderName' => $this->getName(),
			'editURL' => $this->getEditUrl(),
			'deleteURL' => $this->getDeleteUrl(),
			'isEditable' => $this->isEditable(),
			'isDeletable' => $this->isDeletable());
	}

	/**
	 * Function to check whether folder is editable or not
	 * @return <boolean>
	 */
	public function isEditable() {
		if ($this->isDefault()) {
			return false;
		}
		return true;
	}

	/**
	 * Function to get check whether folder is deletable or not
	 * @return <boolean>
	 */
	public function isDeletable() {
		if ($this->isDefault()) {
			return false;
		}
		return true;
	}

	/**
	 * Function to calculate number of reports in this folder
	 * @return <Integer>
	 */
	public function getReportsCount() {
		$db = PearDatabase::getInstance();

		$sql = "SELECT count(*) AS count FROM vtiger_report
				INNER JOIN vtiger_reportfolder ON vtiger_reportfolder.folderid = vtiger_report.folderid
				WHERE vtiger_reportfolder.folderid = ?";
		$params = array($this->getId());

		$currentUserModel = Users_Privileges_Model::getCurrentUserPrivilegesModel();
		if (!$currentUserModel->isAdminUser()) {
			$currentUserId = $currentUserModel->getId();
			
			$groupId = implode(',',$currentUserModel->get('groups'));
			if ($groupId) {
				$groupQuery = "(SELECT reportid from vtiger_reportsharing WHERE shareid IN ($groupId) AND setype = 'groups') OR ";
			}
			
			$sql .= " AND (vtiger_report.reportid IN (SELECT reportid from vtiger_reportsharing WHERE $groupQuery shareid = ? AND setype = 'users')
						OR vtiger_report.sharingtype = 'Public'
						OR vtiger_report.owner = ?
						OR vtiger_report.owner IN (SELECT vtiger_user2role.userid FROM vtiger_user2role
													INNER JOIN vtiger_users ON vtiger_users.id = vtiger_user2role.userid
													INNER JOIN vtiger_role ON vtiger_role.roleid = vtiger_user2role.roleid
													WHERE vtiger_role.parentrole LIKE ?))";

			$parentRoleSeq = $currentUserModel->get('parent_role_seq').'::%';
			array_push($params, $currentUserId, $currentUserId, $parentRoleSeq);
		}
		$result = $db->pquery($sql, $params);
		return $db->query_result($result, 0, 'count');
	}
}